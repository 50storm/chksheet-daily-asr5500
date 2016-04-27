<?php
/*
/app/Config/bootstrap.php　
Configure::load("const");
$aaa = Configure::read("DELETE_ACTION");
*/
/*独自で定義するもの*/
/* $configに連想配列で定義 */
//$config = array();

/*メニュー*/
$config["ACTIONS"] = "Menu";


/*Action名*/
$config["INDEX_ACTION"] = "List";
$config["ADD_ACTION"] = "Add";
$config["VIEW_ACTION"] = "View";
$config["EDIT_ACTION"] = "Edit";
$config["DELETE_ACTION"] = "Delete";


/*ヘッダー*/
//
//$config["HEADER_NO1"] =  "Id";
//$config["HEADER_NO2"] =  "登録日";
//$config["HEADER_NO3"] =  "Actions";


/*シート名*/
$config["SHEET_SUM"] =  "ASR5500_Summary";
$config["SHEET_D"] =  "ASR5500_D";
$config["SHEET_F"] =  "ASR5500_F";
$config["SHEET_H"] =  "ASR5500_H";


/*項目*/
$config["HEADER"] = "ヘッダー";
$config["CONTENT"] = "本文";
$config["CONTENT_DFT"] = "不良本文";
$config["TITLE"] = "タイトル";
$config["FOOTER"] = "フッター";
$config["MAIL_NUM"] = "メールの個数";
$config["ATMNT"] = "添付ファイル写真";


/*　確認内容　*/
//ASR5500_Summary
$config["NO1_CONTENT"] = "日付は当日になっているか？";
//$config["NO1_CONTENT"] = "なまえを変えました";
$config["NO2_CONTENT"] = "【手動】コロンを付与したか？[Summary]CQAP:ASR5500~";
$config["NO3_CONTENT"] = "Inspection QTYの数量は正しいか？";
$config["NO4_CONTENT"] = "【手動】HWWNがあるときに、Defect QTYの数量から、HWWNを差し引いたか？";
$config["NO5_CONTENT"] = "Defect QTYの数量は正しいか？";
$config["NO6_CONTENT"] = "FYI　QTYの数量は正しいか？";
$config["NO7_CONTENT"] = "検査した期間のFrom日付とTo日付は正しいか？";
$config["NO8_CONTENT"] = "機密情報のお願い文は挿入できるか？&nbsp;This mail may contain confidential";
//ASR5500_D
$config["NO9_CONTENT"] = "【※注意】同じSO、同じPID、同じ不良は、ひとつのメールとして、S/Nをまとめているか？<br/>(例)S/N:SAD193301Y8,半角スペースSAD193301Y8";
$config["NO10_CONTENT"] = "【※手動】ASR5500の後に、コロン(:)を追加し、□の後のセミコロン(;)を削除<br/>(プログラムでの打ち出し)CQAP ASR5500:daily report[1]";//TODO
$config["NO11_CONTENT"] = "日付は当日になっているか？";
$config["NO12_CONTENT"] = "タイトルの番号[数字]はきちんと連番になってるか？<br/>CQAP ASR5500: daily report [ 1 ] as of ～</br>CQAP ASR5500: daily report [ 2 ] as of ～";
$config["NO13_CONTENT"] = "検査した期間のFrom日付とTo日付の日付は正しいか？";
$config["NO14_CONTENT"] = "黄or赤紙と一致しているか？";
$config["NO15_CONTENT"] = "S/Nの個数は合っているか？";
$config["NO16_CONTENT"] = "Failure Rate in the SO/SS   : の個数とバーセンテージに誤りはないか？<br/>(シート「Form」の「連番、Failure Rate入力」で入力）";
$config["NO17_CONTENT"] = "【手動】機密保持のお願い文は挿入されているか？<br/>This email may contain confidential ～";
$config["NO18_CONTENT"] = "Viewerボタンを押して、添付ファイルは不良の個数分きちんと表示されるか？<br/>パス名1,パス名2(半角カンマ区切り)<br/>(例)\\pdidbserver\\PDI共有\\不具合データ\\2016\\Feb-5w\\Feb-5w_ASR5500\\SAD1953007P.jpg,\\pdidbserver\\PDI共有\\不具合データ\\2016\\Feb-5w\\Feb-5w_ASR5500\\SAD192900X0.jpg";
$config["NO19_CONTENT"] = "添付ファイルの内容は、メールの内容とあっているか？";
$config["NO20_CONTENT"] = "滅多に発見されない不良は、クライテリアのページを添付しているか？";
//ASR5500_F
$config["NO21_CONTENT"] = "【※注意】同じSO、同じPID、同じ不良は一つのメールとして、S/Nをまとめているか？<br/>(例)S/N     : SAD193301Y8,半角スペースSAD193301Y9";
$config["NO22_CONTENT"] = "【手動】ASR5500の後に、コロン(:)を追加し、[]の後のセミコロン(;)を削除<br/>(プログラムで打ち出し)CQAP ASR5500 daily defect report [ 1 ]; as of ～<br/>(完成系)CQAP ASR5500: daily report [ 1 ] as of ～";
$config["NO23_CONTENT"] = "日付は当日になっているか？";
$config["NO24_CONTENT"] = "タイトルの番号[ 数字 ]はきちんと連番になっているか？<br/>CQAP ASR5500: daily report [ 1 ] as of ～<br/>CQAP ASR5500: daily report [ 2 ] as of ～";
$config["NO25_CONTENT"] = "検査した期間のFrom日付とTo日付の日付は正しいか？";
$config["NO26_CONTENT"] = "黄or赤紙と一致しているか？";
$config["NO27_CONTENT"] = "S/Nの個数は合っているか？";
$config["NO28_CONTENT"] = "【手動】機密保持のお願い文は挿入されているか？<br/>This email may contain confidential ～";
$config["NO29_CONTENT"] = "Viewerボタンを押して、添付ファイルは不良の個数分きちんと表示されるか？<br/>パス名1,パス名2(半角カンマ区切り)<br/>(例)\\pdidbserver\\PDI共有\\不具合データ\\2016\\Feb-5w\\Feb-5w_ASR5500\\SAD1953007P.jpg,\\pdidbserver\\PDI共有\\不具合データ\\2016\\Feb-5w\\Feb-5w_ASR5500\\SAD192900X0.jpg";
$config["NO30_CONTENT"] = "添付ファイルの内容は、メールの内容とあっているか？";
//ASR5500_H
$config["NO31_CONTENT"] = "日付は祝日当日になっているか？（入力ウィンドウでで入力した値)";
$config["NO32_CONTENT"] = "休日と次回配信日の日付は合っているか？";
$config["NO33_CONTENT"] = "機密保持のお願い文は挿入されているか？<br/>This email may contain confidential ～";
$config["NO34_CONTENT"] = "【手動】コロンをASR5500の後にコロン(:)付与したか？<br/>(プログラムで打ち出し)[Summary] CQAP ASR5500 daily report as of ～<br/>(完成系)[Summary] CQAP: ASR5500 daily report as of ～";

//TODO:データベース化
$config["CQAP_MEMBER_EMAIL"] = array(
				"noda@hnps.co.jp" => "野田", 
				"toshiokada@hnps.co.jp" => "岡田(トシ)", 
				"nakabayashi@hnps.co.jp" => "中林", 
				"furukawa@hnps.co.jp" => "古川", 
				"igarashi@hnps.co.jp" => "五十嵐"
				);
				
				
