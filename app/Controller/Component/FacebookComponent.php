<?php

App::import('Vendor', 'facebookSdk',array('file' => 'facebookSdk' . DS . 'facebook.php'));
 
class FacebookComponent extends Component {
 
	private static $facebookInstance;
	private $loginUrl = null;


	public function __construct() {

		$config = array();
		$config['appId'] = FACEBOOK_APPLICATION_KEY;
		$config['secret'] = FACEBOOK_SECRET_KEY;
		$config['fileUpload'] = false; // optional

		$this->facebookInstance = new Facebook($config);
	}
 
	public function getRequestToken() {
		return $this->facebookInstance->getUser();
	}
	
	public function getAccessToken() {
		return $this->facebookInstance->getAccessToken();
	}
	
	public function getLoginUrl() {
		$params = array('display'=>'popup',
			'redirect_uri'=> 'http://' . $_SERVER['HTTP_HOST'] . '/account/callback/facebook/',
			// 'scope'=>'${カンマ区切りでのパーミッション}',
			);
		return $this->facebookInstance->getLoginUrl($params);
	}

	public function getLogoutUrl() {
		$params = array('next' => 'http://' . $_SERVER['HTTP_HOST'] . '/');
		return $this->facebookInstance->getLogoutUrl($params);
	}

}

?>