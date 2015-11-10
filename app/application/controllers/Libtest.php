<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// autoloaded via composer
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Libtest extends CI_Controller {

	// testing Monolog
	public function index()
	{
		$this->load->view('welcome_message');

	$log = new Logger('test001');
	$log->pushHandler(new StreamHandler('/tmp/my.log', Logger::WARNING));
	$log->addWarning('Foo');
	$log->addError('Bar');
	}
}
