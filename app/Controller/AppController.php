<?php


App::uses('Controller', 'Controller');


class AppController extends Controller {
	// public $uses = array('App', 'Category');

	public $components = array('DebugKit.Toolbar', 'Menu', 'Session', 'Auth' => array(
            'loginRedirect' => '/',
            'logoutRedirect' => '/',
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            ),
            'authorize' => array('Controller'),
            'authError' => 'Вы не имеете прав доступа к данной странице'
        ));

	public $helpers = array('Html', 'Form', 'Session');

	public function isAuthorized($user) {
	    // Admin can access every action
	    if (isset($user['role']) && $user['role'] === 'admin') {
	        return true;
	    }

	    // Default deny
	    return false;
	}

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index', 'view');
		$admin = (isset($this->request->params['prefix']) && $this->request->params['prefix'] == 'admin') ? 'admin/' : false;
		if(!$admin) $this->Auth->allow();
		
		if($admin){
			$this->layout = 'default';
		}else{
			$this->layout = 'index';
		}
		$sidebar = $this->Menu->getCatMenu();
		
		$this->set(compact('admin', 'sidebar'));

	}

	

}
