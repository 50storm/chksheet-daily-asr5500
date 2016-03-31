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
$config["EDIT_ACTION"] = "Double Check";
$config["DELETE_ACTION"] = "Delete";



