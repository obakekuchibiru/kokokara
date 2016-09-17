<?php
/**
 * Created by PhpStorm.
 * User: kaishunsuke
 * Date: 2015/02/28
 * Time: 13:34
 */

class EventsController extends AppController{
    public $uses=array("Event", "Company");
    public $helpers = array('Html', 'Form');

    public  $components = array(
        'Session',
        'Auth' => array(
            'authenticate' => array(
                'Form' => array(
                    'userModel' => 'Student',
                    'fields' => array('username' => 'email', 'password' => 'password'),
                    'passwordHasher' => 'Blowfish')
                ),
                'loginAction' => array('controller' => 'Students', 'action' => 'login'),
                'loginRedirect' => array('controller' => 'Events', 'action' => 'news'),
                'logoutRedirect' => array('controller' => 'Students', 'action'=> 'login'),
                'authError' => 'ログインしてください',            
            )
        );    


    public function beforeFilter(){
        AuthComponent::$sessionKey = "Auth.Students";
        //最終ログイン処理
        $myData=$this->Session->read("myData");
        if($myData!=null){
            $this->loadModel('Student');
            $id = $myData['Student']['id'];
            $this->Student->updateLogin($id);
        }
    }





    public function updateLogin(){
        if($this->Session->read('myData')){
            $id=$this->Session->read("myData")['Student']['id'];
            $this->Student->updateLogin($id);
        }
        return;
    }

    public function index(){
        //リクエストがPOSTの場合
     if($this->request->is('post')){
         //Formの値を取得
         //$title=$this->data['Search']['title'];
        $title=$this->request->data['Search']['title'];
         //POSTされたデータを曖昧検索
        $data=$this->Event->find('all',array(
            'conditions'=>array('title like'=>'%'.$title.'%')));
        $this->set('event',$data);
        }else{ //POST以外の場合
        //Collectionモデルから全てのデータを検索
            $data=$this->Event->find('all');
            //データの連想配列をセット
            $this->set('event',$data);
        }
    }


    public function search(){

    }

    public function view($id=null){
        $this->Event->id = $id;
        $this->Event->recursive = 2;
        $this->set('events', $this->Event->read());
    }

    public function addreview($id=null){
        $this->set('user', $this->Auth->user('id'));
        $this->Event->id = $id;
        $this->set('events', $this->Event->read());
        if($this->request->is('post')){
            if($this->Event->Review->save($this->request->data)){
                $this->Session->setFlash('レビューを送信しました。企業の承認後、掲載されます。');
                $this->redirect(array('controller'=>'Events', 'action'=>'view',$this->data['Review']['event_id']));
            }else{
                $this->Session->setFlash('レビューの投稿に失敗しました。');
            }
        }
    }

    public function apply($id=null){




    }


    public function goapply(){
        $this->loadModel("AppliesEvent");
        $this->loadModel("Student");

        //requestのgetのパラメーターをeventのidに
        $id=$this->request->query("id");
        //セッション
        $myData=$this->Session->read("myData");
        if(!$myData){
            $this->Session->setFlash('入学しよう');
            //このページにリダイレクトする処理
            $this->Session->write('apply', $id);
            $this->redirect(array('controller' => 'students', 'action' => 'login'));
        }

        $before=$this->AppliesEvent->find("first",array("conditions"=>array("student_id"=>$myData['Student']['id'],"event_id"=>$id)));

        if($before!=null){
            $this->Session->setFlash("既に申し込んでいます");
            $this->redirect(array("controller"=>"Students","action"=>"index"));
        }

        $this->AppliesEvent->set(array("student_id"=>$myData['Student']['id'],"event_id"=>$id));
        $apply=$this->AppliesEvent->save();

        //sessionのmyData更新
        $myData=$this->Student->find("first",array("conditions"=>array("Student.id"=>$myData['Student']['id'])));
        $this->Session->write('myData', $myData);


        if($apply==false){
            $this->Session->setFlash("申し訳ございません。もう一度やりなおしてください");
            $this->redirect("index");
        }

        //メール送信用イベント情報取得
        $event_info = $this->Event->find("first", array("conditions"=>array("id"=>$id)));
        $event_title = $event_info['Event']['title'];
        $student_name = $myData['Student']['name'];

        //ここにメール関数を書く
        App::uses( 'CakeEmail', 'Network/Email');
        $email = new CakeEmail('gmail');
        $email->from( array('mark.sato1111@gmail.com' => 'mark.sato1111@gmail.com'));  // 送信元
        $email->to('confirm@kokokara-group.com'); // 送信先
        $email->subject('【申請完了】');                      // メールタイトル
        // メール送信
        $email->send("ユーザ：$student_name\n\nイベント：$event_title");
        //debug($res);


        $this->Session->setFlash("申し込み完了");
        $this->redirect(array("controller"=>"events","action"=>"thanks"));

    }

    //カテゴリー別event取得 by mark
    public function category($state){
        $category_events = array();
        $events = $this->Event->getEventsByState($state, 20);
        foreach ($events as $event){
            $category_events[] = $this->Event->getOriginal($event['Event']['id']);
        }
        //新着記事 by mark
        $new_events = $this->Event->getEventsByCreated(10);
        if($events==null){
            throw new NotFoundException();
        }
        $this->set('events', $category_events);
        //新着記事 by mark
        $this->set('new_events', $new_events);
    }

    //新着events取得 by mark
    public function news(){
        
        $events = $this->Event->find('all', array(
            'order' => array('Event.created' => 'desc'),
            'limit' => 12
            ));
//        if($events==null){
//            throw new NotFoundException();
//       }
        $this->set('events', $events);
    }

    //2015/04/27 追加 by mark//////////
    public function thanks() {

    }

}