<?php
/**
 * Created by PhpStorm.
 * User: satoudai
 * Date: 2015/02/26
 * Time: 9:41
 */
App::uses('AppController', 'Controller');
//ライブラリがクラスでないため、import を使用
App::import('Vendor', 'facebook', array("file" => "facebook".DS."src".DS."facebook.php"));

class FbconnectController extends AppController{

	public $name = 'Fbconnect';

	//facebookの認証処理部分
	public function facebook(){
		$this->autoRender = false;
		$this->facebook = $this->createFacebook();
		$user = $this->facebook->getUser();		//ユーザ情報取得
		if($user){//認証後
			$me = $this->facebook->api('/me','GET',array('locale'=>'ja_JP')); //【5】ユーザ情報を日本語で取得

			////////////追加分 by Mark/////////////////////
			if(isset($me['education'])){
				foreach($me['education'] as $education){    //大学名and学部
					if($education['type'] == 'College'){
						$university = $education['school']['name'];
						foreach($education['concentration'] as $fac){
							$faculty = $fac['name'];
						}
					}
				}
			}
			$friends = $this->facebook->api('/me/friends','GET',array('locale'=>'ja_JP'));  //友達総数取得
			$friends_num = $friends['summary']['total_count'];
			$access_token = $this->facebook->getAccessToken();  //アクセストークン取得
			////////////追加分 by Mark/////////////////////

			$this->loadModel('Student');    //Students 読み込み
			$this->loadModel('FacebookUser');   //Facebook_User Model 読み込み
			$facebook_user = $this->FacebookUser->find('first', array(  //既に登録済みかどうか
				'conditions' => array('link' => $me['link'])
				)
			);
			if(!$facebook_user){    //新規ユーザだったら
				$this->Student->save('', false);     //インサート
				$me['student_id'] = $this->Student->getLastInsertID();     //Student Id 取得, $me に追記
				$me['facebook_user_id'] = $me['id'];
				unset($me['id']);

				////////////追加分 by Mark/////////////////////
				$me['access_token']= $access_token;
				if(isset($university)){
					$me['university'] = $university;
				}
				if(isset($faculty)) {
					$me['faculty'] = $faculty;
				}
				if(isset($friends_num)) {
					$me['friends_num'] = $friends_num;
				}
				////////////追加分 by Mark/////////////////////

				$a = array();   //Insert フォーマットに変更
				$a['FacebookUser'] = $me;
				$this->FacebookUser->save($a);
				$facebook_user = $this->FacebookUser->findById($this->FacebookUser->getLastInsertID());
				//Student取得
				$student = $this->Student->findById($facebook_user['FacebookUser']['student_id']);
				$this->Session->setFlash('入学まであと少し！残りの項目も埋めてください');
				$this->Session->write('myData',$student);	//ユーザ情報をセッションに保存
				$this->redirect(array("controller" => "students", "action" => "signup")); //残りの情報を埋めさせるためsignpへ
			}else{
				$facebook_user['FacebookUser']['access_token'] = $access_token; //access_token更新
				$this->FacebookUser->save($facebook_user);
				//Student取得
				$student = $this->Student->findById($facebook_user['FacebookUser']['student_id']);
				$this->Session->setFlash('ログイン完了！');
				$this->Session->write('myData',$student);	//ユーザ情報をセッションに保存
				//申請ボタンからログインに飛んできたかどうか
				if($this->Session->read('apply')){
					$event_id = $this->Session->read('apply');
					$this->Session->delete('apply');
					$this->redirect('/events?id='.$event_id);
				}else{
					$this->redirect(array("controller" => "students", "action" => "welcome"));
				}
			}

		}else{//認証前
			$url = $this->facebook->getLoginUrl(array(
				'scope' => 'email,user_friends,user_birthday,user_education_history','canvas' => 1,'fbconnect' => 0,'req_perms' => 'status_update,publish_stream' ));   //スコープの確認
			$this->redirect($url);
		}
	}

	private function createFacebook() {        //appID, secretを記述
		return new Facebook(array(
			'appId' => '372537352928242',
			'secret' => 'f92baaffb5b846acd8986cdbf10b84bd'
		));
	}

}