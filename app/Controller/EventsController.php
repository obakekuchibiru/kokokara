<?php
/**
 * Created by PhpStorm.
 * User: kaishunsuke
 * Date: 2015/02/28
 * Time: 13:34
 */

class EventsController extends AppController{
    public $uses=array("Event");
    public $helpers = array('Html', 'Form');


    public function beforeFilter(){
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

        $this->loadModel('EventsLog');
        $this->loadModel('Student');

        $myData=$this->Session->read("myData");
        //$this->updateLogin();
        /*if($myData==null){
            $this->redirect(array("controller"=>"Student","action"=>"login"));
        }*/
        $id=$this->request->query["id"];

        //ログ
        $this->EventsLog->goEventsLog($myData['Student']['id'], $id);
        $event=$this->Event->getOriginal($id);

        //もし不正なidなら404
        /*
        if($event==null){

        }
        */
        if($event==null){
            throw new NotFoundException();
        }

        //sessionのmyData更新
        /*
        $myData=$this->Student->find("first",array("conditions"=>array("Student.id"=>$myData['Student']['id'])));
        $this->Session->write('myData', $myData);
        */
        //event取得
        //ジャンルごとのイベント情報を追加したものをcomeventに入れる


        //新着記事 by mark
        $new_events = $this->Event->getEventsByCreated(10);

        //$comevent=$this->Event->getOriginal($id);
        $this->set("myData",$myData);
        $this->set("event",$event);
        //新着記事 by mark
        $this->set('new_events', $new_events);
        $this->render();


    }



    public function apply(){



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
        $events = $this->Event->getEventsByCreated(10);
        if($events==null){
            throw new NotFoundException();
        }
        $this->set('events', $events);
    }

    //2015/04/27 追加 by mark//////////
    public function thanks() {

    }

}