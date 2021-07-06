<?php
include_once('commoncontroller.php');

class Account extends CommonController
{
	public function index()
	{
		header('location: /index.html');
	}

	public function login()
	{
		$_SESSOIN['userid'] = 1;
		$_SESSION['username'] = 'test';
		echo json_encode(["code"=>"ok","data"=>["userId"=>"1","realname"=>"admin","title"=>"test","enterprise"=>'test'],"enterprise"=>"test"]);
		return ;
	}
}
