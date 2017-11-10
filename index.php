<?php
include '../public/fun.php';
if(isMobile()){
	require_once('index.html');
}else{
	require_template('index.html');
}
?>