<?php

use PDOWrapper\DB;

require '../scripts/lib/Db.class.php';
require_once '../scripts/lib/methods.php';

$db = new DB('127.0.0.1','library','root','');

$data = array();

$data = $db->query("SELECT * from `book`",);



printR($data);




