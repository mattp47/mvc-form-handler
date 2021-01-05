<?php
/**
 * Request to the MarkupController and requestHandler method
 */
require_once 'controller/MarkupController.php';
$controller = new MarkupController();
$controller->requestHandler();
// Pass download link with get parameter
if( isset( $_GET['download'] ) ){
	$msg = '<p><a href="/data/data.txt">Download the file</a></p>';
	echo $msg;
}
?>