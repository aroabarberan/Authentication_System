<?php
require_once 'DataBase/DataBase.php';


$datas = DataBase::readFileEnv();
//echo "<pre>" . print_r($datas, true) . "</pre>";