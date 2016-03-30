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
	   //Paginationの設定
   public $paginate = array(
              'Asr5500Summary' => array( //モデルの指定
                         'limit' =>10,   //表示できるデータ数の設定
                         'order' => array('id' => 'desc')   //データを降順に並べる
               )
   );

	public function index(){
		
		//$this->set('schedules' , $this->Schedule->find('all' , $options))
		//$options = array(
		//				'order' => array('Note.date Desc','Note.time Desc')
		//);
		//$this->set('notes' , $this->Note->find('all', $options));
		
		
		//debug($this->paginate());
		$this->set('asr5500_summaries',$this->paginate());
	}
//	
	public function view($id = null){
		//debug($this->params);
		$this->Asr5500Summary->id = $this->params->pass;
		//debug($this->Asr5500Summary->read());
		
		//DB->variable
		$record = $this->Asr5500Summary->read();
		//==>View
		$this->set('Asr5500Summary' , $this->Asr5500Summary->read());
		
		
	}
	
	public function edit($id = null) {
		//debug($this->params->pass);
		//debug($this->request->is('post'));
		//debug($this->request->is('get'));
		
		//キー項目がセットされてるか？
		if (!$id) {
			throw new NotFoundException(__('キー項目が渡されてきていない。'));
			//exit;
		}
	
		//debug($Asr5500Summary);
		
		//getの時
		if($this->request->is('get')){
			$Asr5500Summary = $this->Asr5500Summary->findById($id);
			if (!$Asr5500Summary) {
				throw new NotFoundException(__('検索したが見つかりません。'));
			}			
			$this->set('Asr5500Summary' , $Asr5500Summary);
			//return $this->redirect(array('action' => 'edit'));
			//editへ自動で戻る
			
		}elseif ($this->request->is(array('post', 'put'))) {
			$this->Asr5500Summary->id = $id;
			//TODO
			
			//debug($this->request->data);
			
			$input_date = $this->_make_date($this->request->data['ASR5500Summary']['date']['year'], 
				$this->request->data['ASR5500Summary']['date']['month'],
				$this->request->data['ASR5500Summary']['date']['day']
			);
			
			$this->Asr5500Summary->set(array( 
								   'date'       => $input_date,
								   'no1'        => $this->request->data['ASR5500Summary']['no1'],
								   'no2'        => $this->request->data['ASR5500Summary']['no2'],
								   'no3'        => $this->request->data['ASR5500Summary']['no3'],
								   'no4'        => $this->request->data['ASR5500Summary']['no4'],
								   'no5'        => $this->request->data['ASR5500Summary']['no5'],
								   'no6'        => $this->request->data['ASR5500Summary']['no6'],
								   'no7'        => $this->request->data['ASR5500Summary']['no7'],
								   'no8'        => $this->request->data['ASR5500Summary']['no8'],
								   'no1_dblchk' => $this->request->data['ASR5500Summary']['no1_dblchk'],
								   'no2_dblchk' => $this->request->data['ASR5500Summary']['no2_dblchk'],
								   'no3_dblchk' => $this->request->data['ASR5500Summary']['no3_dblchk'],
								   'no4_dblchk' => $this->request->data['ASR5500Summary']['no4_dblchk'],
								   'no5_dblchk' => $this->request->data['ASR5500Summary']['no5_dblchk'],
								   'no6_dblchk' => $this->request->data['ASR5500Summary']['no6_dblchk'],
								   'no7_dblchk' => $this->request->data['ASR5500Summary']['no7_dblchk'],
								   'no8_dblchk' => $this->request->data['ASR5500Summary']['no8_dblchk'],
								   
						));
			
			
			if ($this->Asr5500Summary->save($this->request->data)) {
				$this->Flash->success(__('データを更新しました'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Flash->error(__('Unable to update your post.'));
		}
	
		
		//if (!$this->request->data) {
		//	$this->request->data = $Asr5500Summary;
		//}
		
	}



//http://book.cakephp.org/2.0/ja/getting-started/cakephp-conventions.html
	protected  function _make_date($year, $month, $day){
		return $year . "-" .  $month . "-" . $day;
		
	}
	
	public function add(){
		//debug($this->request->data);
		//ex	it;
		//debug($this->request->data['ASR5500Summary']);
		//debug($this->request->data['ASR5500Summary']['date']['year']);
		//debug($this->request->data['ASR5500Summary']['date']['month']);
		//debug($this->request->data['ASR5500Summary']['date']['day']);
		
		//$input_date = $this->_make_date($this->request->data['ASR5500Summary']['date']['year'], 
		//						$this->request->data['ASR5500Summary']['date']['month'],
		//						$this->request->data['ASR5500Summary']['date']['day']
		//);
		//exit;
		//debug($input_date);//'2016-03-29'
		
		
		//debug($this->request->data['ASR5500Summary']['no2']);
		//debug($this->request->data['ASR5500Summary']['no3']);
		//
        if ($this->request->is('post')) {
			
			$input_date = $this->_make_date($this->request->data['ASR5500Summary']['date']['year'], 
							$this->request->data['ASR5500Summary']['date']['month'],
							$this->request->data['ASR5500Summary']['date']['day']
			);
			
			
           // $this->Asr5500Summary->create();
		   
			$this->Asr5500Summary->set(array( 'date'        => $input_date ,
											   'no1'        => $this->request->data['ASR5500Summary']['no1'],
											   'no2'        => $this->request->data['ASR5500Summary']['no2'],
											   'no3'        => $this->request->data['ASR5500Summary']['no3'],
											   'no4'        => $this->request->data['ASR5500Summary']['no4'],
											   'no5'        => $this->request->data['ASR5500Summary']['no5'],
											   'no6'        => $this->request->data['ASR5500Summary']['no6'],
											   'no7'        => $this->request->data['ASR5500Summary']['no7'],
											   'no8'        => $this->request->data['ASR5500Summary']['no8'],
											   'no1_dblchk' => $this->request->data['ASR5500Summary']['no1_dblchk'],
											   'no2_dblchk' => $this->request->data['ASR5500Summary']['no2_dblchk'],
											   'no3_dblchk' => $this->request->data['ASR5500Summary']['no3_dblchk'],
											   'no4_dblchk' => $this->request->data['ASR5500Summary']['no4_dblchk'],
											   'no5_dblchk' => $this->request->data['ASR5500Summary']['no5_dblchk'],
											   'no6_dblchk' => $this->request->data['ASR5500Summary']['no6_dblchk'],
											   'no7_dblchk' => $this->request->data['ASR5500Summary']['no7_dblchk'],
											   'no8_dblchk' => $this->request->data['ASR5500Summary']['no8_dblchk'],
											   
									));
									
            if ($this->Asr5500Summary->save($this->request->data)) {
                $this->Flash->success(__('データを登録しました.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to add your post.'));
        }
	}
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
