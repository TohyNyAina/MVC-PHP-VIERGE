<?php
require_once 'controller/ContactController.php';
include_once 'header.php';
$contactCtrl = new ContactController();
$contactCtrl->viewManager();

?>