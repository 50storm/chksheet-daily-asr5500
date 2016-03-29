<?php
//参考ページ
//http://book.cakephp.org/2.0/ja/tutorials-and-examples/blog/part-two.html
App::uses('AppController', 'Controller');
class Asr5500SummariesController extends AppController {
	
	/**************************************************************
	scaffoldを使うと、functionを設定してないのもは、自動でテンプレートを作成。
	deleteは、テンプレートを使用
	***************************************************************/
	public $scaffold;
	//public $uses = array();　
	
	//使うヘルパーの宣言
	public $helpers = array('Html','Form');
	
	
	
	
	
//	   //Paginationの設定
//   public $paginate = array(
//              'Note' => array( //モデルの指定
//                         'limit' =>10,   //表示できるデータ数の設定
//                         'order' => array('id' => 'desc')   //データを降順に並べる
//               )
//   );
//
//	public function index(){
//		
//		//$this->set('schedules' , $this->Schedule->find('all' , $options))
//		//$options = array(
//		//				'order' => array('Note.date Desc','Note.time Desc')
//		//);
//		//$this->set('notes' , $this->Note->find('all', $options));
//		$this->set('notes',$this->paginate());
//	}
//	
//	public function view($id = null){
//		//debug($this->params);
//		$this->Note->id = $this->params->pass;
//		$this->set('note' , $this->Note->read());	
//		
//	}
//	
//	public function edit($id = null) {
//		if (!$id) {
//			throw new NotFoundException(__('Invalid post'));
//		}
//	
//		$post = $this->Note->findById($id);
//		if (!$post) {
//			throw new NotFoundException(__('Invalid post'));
//		}
//	
//		if ($this->request->is(array('post', 'put'))) {
//			$this->Note->id = $id;
//			if ($this->Note->save($this->request->data)) {
//				$this->Flash->success(__('データを更新しました'));
//				return $this->redirect(array('action' => 'index'));
//			}
//			$this->Flash->error(__('Unable to update your post.'));
//		}
//	
//		if (!$this->request->data) {
//			$this->request->data = $post;
//		}
//	}
//	
//	public function add(){
//        if ($this->request->is('post')) {
//            $this->Note->create();
//            if ($this->Note->save($this->request->data)) {
//                $this->Flash->success(__('データを登録しました.'));
//                return $this->redirect(array('action' => 'index'));
//            }
//            $this->Flash->error(__('Unable to add your post.'));
//        }
//	}
//
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
