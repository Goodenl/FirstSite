<?php
require 'libs/rb.php';

R::setup( 'mysql:
	host='.$config['db']['server'].';
	dbname='.$config['db']['name'].'',
	$config['db']['username'],
	$config['db']['password'] );

$root = $_SERVER['DOCUMENT_ROOT'] . "/";