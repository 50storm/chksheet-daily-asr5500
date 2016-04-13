<?php
//参考ページ
//http://book.cakephp.org/2.0/ja/tutorials-and-examples/blog/part-two.html
App::uses('AppController', 'Controller');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class UsersController extends AppController {
	
	/**************************************************************
	scaffoldを使うと、functionを設定してないのもは、自動でテンプレートを作成。
	deleteは、テンプレートを使用「物理削除」
	***************************************************************/
	public $scaffold;
	//コンポーネント定義
	public $components = array('Session');
	
	
	//Modelを定義
	public $uses = array('User');
	//public $uses = array('Asr5500Summary', '');
	
	//使うヘルパーの宣言
	public $helpers = array('Html','Form');
	
	//Paginationの設定
    //public $paginate = array(
    //          'Asr5500Chksheet' => array( //モデルの指定
    //                     'limit' =>10,   //表示できるデータ数の設定
    //                     'order' => array('id' => 'desc')   //データを降順に並べる
    //           )
    //);
	/*
	public function beforeSave($options = array()) { 
		if (isset($this->data['User']['password'])) { 
				$passwordHasher = new BlowfishPasswordHasher();
				$this->data['User']['password'] = $passwordHasher->hash( $this->data['User']['password'] );
		} 
		debug($this->data['User']['password']);
		return true; 
	}
	*/
	//public function beforeSave($options = array()) {
	//	$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
	//	return true;
	//}

	//public function beforeFilter() {
	//	parent::beforeFilter();
	//	//登録はできるようにaddはアクセスを許可する
	//	$this->Auth->allow('add');
    //
	//}

	public function add(){
		//debug($this->request->data);
		if ($this->request->is('post')) {
			//$passwordHasher = new BlowfishPasswordHasher();
			//Indirect modification of overloaded property UsersController::$data has no effect [APP\Controller\UsersController.php, line 59]
			//$this->data['User']['password'] = $passwordHasher->hash( $this->data['User']['password'] );//エラー
			//$pass = $passwordHasher->hash( $this->data['User']['password'] );
			
			var_dump($this->data['User']['password']);
			var_dump($pass);
			
			//$params=array();
			
			$params = array(
						'email' => $this->data['User']['email'] , 
						'username' => $this->data['User']['username'] , 
				//		'password' => $pass,
						'password' => $this->data['User']['password'], 
						'role' => $this->data['User']['role']  
			
			);
			
			var_dump($params);
			
			
			$this->User->set($params);
			
			
			$this->User->create(); 
			//if ($this->User->save($this->request->data)) { 
			if ($this->User->save($params)) { 
				$this->Flash->success(__('The user has been saved')); 
				//return $this->redirect(array('controller' => 'Asr5500Chksheets','action' => 'index')); 
				return $this->redirect(array('controller' => 'Users','action' => 'index')); 
			} 
			$this->Flash->error( __('The user could not be saved. Please, try again.') ); 
		}
	}
	
	 public function login(){ 
		//var_dump($this->request->data);
		if($this->request->is('post')) { 
		
		
			//TODO:うまくいかない、たぶんSQLSERVERのときのバグかな
			//暗号化で登録できてないからっぽい。
			//$passwordHasher = new BlowfishPasswordHasher();
			
			//$pass = $passwordHasher->hash( $this->data['User']['password'] );
			//var_dump($pass);
			//$options = array('conditions' => array('AND' => array('User.email' => $this->data['User']['email']  , 'User.password'=>$pass )));
			$options = array('conditions' => array('AND' => array('User.email' => $this->data['User']['email']  , 'User.password'=>$this->data['User']['password'] )));
			$this->User->find('first', $options);
			
			//if($this->Auth->login()) 
				$ret = $this->User->find('first', $options);
				var_dump($ret);
				//exit;
			//if(isset($this->User->find('first', $options)))	
				debug($this->User->find('first', $options));
			$sel_val = $this->User->find('first', $options);
			if(!empty($sel_val)){
				//http://sam-c.co.jp/cakephp-simple-auth/
				/*
				
				// パスワードで制限するページ
    public function index() {
        // ログインフラグがnullならログインフォームにリダイレクト
        if (! $this->Session->check('login')) {
            $this->redirect(array('action' => 'login'));
        }
    }
				*/
				$this->Session->write('login', true);
				$this->Session->write('email', $sel_val['User']['email']);
				$this->Session->write('username', $sel_val['User']['username']);
				$this->Session->write('role', $sel_val['User']['role']);
				debug($this->Session->read('login'));
				debug($this->Session->read('email'));
				debug($this->Session->read('username'));
				debug($this->Session->read('role'));
				exit;
				//debug($this->Session);
				$this->redirect(array('controller' => 'Asr5500Chksheets','action' => 'index'));  
			}else{
				$this->Flash->error('ログイン失敗');
			} 
				 
		}
	 }
	
	//public function delete($id) {
    //
	//}
	



}
