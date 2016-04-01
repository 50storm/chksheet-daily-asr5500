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

/*シート名*/
$config["SHEET_SUM"] =  "ASR5500_Summary";
$config["SHEET_D"] =  "ASR5500_D";


/*項目*/
$config["TITLE"] = "タイトル";
$config["CONTENT"] = "本文";
$config["FOOTER"] = "フッター";
$config["MAIL_NUM"] = "メールの個数";


/*　確認内容　*/
$config["NO1_CONTENT"] = "日付は当日になっているか？";
$config["NO2_CONTENT"] = "【手動】コロンを付与したか？[Summary]CQAP:ASR5500~";
$config["NO3_CONTENT"] = "Inspection QTYの数量は正しいか？";
$config["NO4_CONTENT"] = "【手動】HWWNがあるときに、Defect QTYの数量から、HWWNを差し引いたか？";
$config["NO5_CONTENT"] = "Defect QTYの数量は正しいか？";
$config["NO6_CONTENT"] = "FYI　QTYの数量は正しいか？";
$config["NO7_CONTENT"] = "検査した期間のFrom日付とTo日付は正しいか？";
$config["NO8_CONTENT"] = "機密情報のお願い文は挿入できるか？&nbsp;This mail may contain confidential";
//$config["NO9_CONTENT"] = "<span style=\"white-space: nowrap;\">【※注意】同じSO、同じPID、同じ不良は、ひとつのメールとして、S/Nをまとめているか？</span><span style=\"white-space: nowrap;\">(例)S/N:SAD193301Y8,半角スペースSAD193301Y8</span>";
//$config["NO9_CONTENT"] = "<span style=\"white-space: nowrap;\">【※注意】同じSO、同じPID、同じ不良は、ひとつのメールとして、S/Nをまとめているか？</span>(例)S/N:SAD193301Y8,半角スペースSAD193301Y8";
$config["NO9_CONTENT"] = "【※注意】同じSO、同じPID、同じ不良は、ひとつのメールとして、S/Nをまとめているか？<br/>(例)S/N:SAD193301Y8,半角スペースSAD193301Y8";
$config["NO10_CONTENT"] = "【※手動】ASR5500の後に、コロン(:)を追加し、□の後のセミコロン(;)を削除<br/>(プログラムでの打ち出し)CQAP ASR5500";//TODO

