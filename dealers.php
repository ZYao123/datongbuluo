<?php
define('IN_LCSHOP', true);
require_once(dirname(__FILE__).'/include/config.php');
include_once(LCSHOP_LANG . '/item_list.php');
include_once('bottom.php');
$smarty->display('dealers.html');


?>