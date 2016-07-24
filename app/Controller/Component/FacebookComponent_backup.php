<?php

App::import('Vendor', 'facebook',array('file' => 'facebook' . DS . 'src' . 'facebook.php'));
 
class FacebookComponent extends Component {
 
	private static $facebookInstance;
	private $loginUrl = null;


	public function __construct() {

		$config = array();
		$config['appId'] = '145786039184605';
		$config['secret'] = '264c41c7cf04fc977d7dd95791ef6abd';
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
			'redirect_url'=> 'http://' . $_SERVER['HTTP_HOST'] . '/account/callback/facebook/',
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