<?php
header("Content-Type: text/html;charset=utf-8");

require_once('PHPTAL.php');
$this->renderers->html->cfg->outputMode = PHPTAL::HTML5;

require_once('site_helper.php');
$this->autolocal->ie = detect_ie_version();
