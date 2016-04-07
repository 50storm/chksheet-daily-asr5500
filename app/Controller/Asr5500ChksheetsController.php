<?php
//参考ページ
//http://book.cakephp.org/2.0/ja/tutorials-and-examples/blog/part-two.html
App::uses('AppController', 'Controller');
class Asr5500ChksheetsController extends AppController {
	
	/**************************************************************
	scaffoldを使うと、functionを設定してないのもは、自動でテンプレートを作成。
	deleteは、テンプレートを使用「物理削除」
	***************************************************************/
	public $scaffold;
	//Modelを定義
	public $uses = array('Asr5500Chksheet');
	//public $uses = array('Asr5500Summary', '');
	
	//使うヘルパーの宣言
	public $helpers = array('Html','Form');
	//
	//Paginationの設定
    public $paginate = array(
              'Asr5500Chksheet' => array( //モデルの指定
                         'limit' =>10,   //表示できるデータ数の設定
                         'order' => array('id' => 'desc')   //データを降順に並べる
               )
    );

//    public $paginate = array(
//              'Asr5500Summary' => array( //モデルの指定
//                         'limit' =>10,   //表示できるデータ数の設定
//                         'order' => array('id' => 'desc')   //データを降順に並べる
//               )
//    );
	
	//Summary
//	public function index(){
//		
//		//$this->set('schedules' , $this->Schedule->find('all' , $options))
//		//$options = array(
//		//				'order' => array('Note.date Desc','Note.time Desc')
//		//);
//		//$this->set('notes' , $this->Note->find('all', $options));
//		
//		
//		//debug($this->paginate());
//		$this->set('asr5500_chksheets',$this->paginate());
//	}
	
	

	

	public function index(){
		
		//$this->set('schedules' , $this->Schedule->find('all' , $options))
		//$options = array(
		//				'order' => array('Note.date Desc','Note.time Desc')
		//);
		//$this->set('notes' , $this->Note->find('all', $options));
		
		
		//debug($this->paginate());
		$this->set('asr5500_chksheets',$this->paginate());
	}

	
	public function view($id = null){
		//debug($this->params);
		//キー項目がセットされてるか？
		if (!$id) {
			throw new NotFoundException(__('キー項目が渡されてきていない。'));
			//exit;
		}else{
			$this->Asr5500Chksheet->id = $this->params->pass;
			$record = $this->Asr5500Chksheet->read();
			$this->set('Asr5500Chksheet' , $this->Asr5500Chksheet->read());
		}
	}
	
	public function edit($id = null) {
		//debug($this->params->pass);
		//debug($this->request->is('post'));
		//debug($this->request->is('get'));
		
		//キー項目がセットされてるか？
		if (!$id) {
			throw new NotFoundException(__('キー項目が渡されてきていない。'));
			//exit;
		}else{
			//debug($Asr5500Chksheet);
			
			//getの時
			if($this->request->is('get')){
				$Asr5500Chksheet = $this->Asr5500Chksheet->findById($id);
				if (!$Asr5500Chksheet) {
					throw new NotFoundException(__('検索したが見つかりません。'));
				}			
				$this->set('Asr5500Chksheet' , $Asr5500Chksheet);
				//return $this->redirect(array('action' => 'edit'));
				//editへ自動で戻る
			
			}elseif ($this->request->is(array('post', 'put'))) {
				$this->Asr5500Chksheet->id = $id;
				//TODO
				//debug($this->request->data);
				//no1~最後まで格納
				$params = array();
				$params = $this->_set_para_no( $this->request->data['ASR5500Chksheet'] );
				$this->Asr5500Chksheet->set($params);
				
				if ($this->Asr5500Chksheet->save($this->request->data)) {
					$this->Flash->success(__('データを更新しました'));
					return $this->redirect(array('action' => 'index'));
				}
				$this->Flash->error(__('Unable to update your post.'));
			}
			//if (!$this->request->data) {
			//	$this->request->data = $Asr5500Chksheet;
			//}		
			
			
		}
	}
	
	//http://book.cakephp.org/2.0/ja/getting-started/cakephp-conventions.html
	/*日付のSQLを組立る*/
	protected  function _make_date($year, $month, $day){
		return $year . "-" .  $month . "-" . $day;
		
	}
	/*noのQLパラメータをセット*/
	protected function _set_para_no($req_data){
		$params_no=array();
		
		foreach($req_data as $key => $value ){
			if($key === "date"){
				//skip
			}else{
				$params_no[ $key ] = $value; 
			}
		}
		return $params_no;
	}
	
	public function add(){
		//debug($this->request->data);
        if ($this->request->is('post')) {
			/*SQLパラメータを組み立てる*/
			//日付
			
			$input_date = $this->_make_date($this->request->data['ASR5500Chksheet']['date']['year'], 
							$this->request->data['ASR5500Chksheet']['date']['month'],
							$this->request->data['ASR5500Chksheet']['date']['day']
			);
			$params_date = array('date' => $input_date);
			
			//no1~最後まで格納
			$params_no=array();
			$params_no = $this->_set_para_no( $this->request->data['ASR5500Chksheet'] );
			$params = array_merge($params_date, $params_no);
			debug($params);
			/*パラメータセットしてSQL実行*/
		    $this->Asr5500Chksheet->set($params);
			
			//$this->Asr5500Chksheet->set($this->request->data);
			
			
            if ($this->Asr5500Chksheet->save($this->request->data)) {
                $this->Flash->success(__('データを登録しました.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
	}
	
	public function beforeFilter() {
		parent::beforeFilter();
		    $cqap_member = array(
				"野田" => "野田", 
				"岡田（トシ）" => "岡田(トシ)", 
				"中林" => "中林", 
				"古川" => "古川", 
				"五十嵐" => "五十嵐"
				);
			$this->set('cqap_member', $cqap_member);

	}


//	//http://cakephpクッキング.jp/phpexcel/
//	//excel出力ためし
//	public function excel2007() {
//		$this->layout = '';//ヘッダー、フッダーの出力をしない。
//		$this->set('notes', $this->Note->find('all'));
//		//debug($this->Note->find('all'));
//	}	
//	public function excel2007_download() {
//	}
//	
//	public function menu_download_pdf(){
//
//	
//	}
//	//URLがちゃう
//	//notesを見てほしくない
//	//http://localhost/dev/cakephp276/notes/menu_download_pdf_link
//	public function menu_download_pdf_link() {
//
//	}
//	
//	public function download_pdf(){
//		//GETParameterでファイル名を取得
//		if($this->request->is('get')){
//				//debug($this->params);
//			//debug($this->params->query['filename']);
//			//exit;
//			
//			$this->set('filename',$this->params->query['filename']);
//			
//			
//			
//		}
//		
//	//	debug($this->params['query']);
//
//		//exit;
//		
//		
//	}
}
