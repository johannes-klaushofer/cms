<?php namespace App\Http\Controllers;
	class Dashboard extends Controller{
		public function __construct(){
			$this->middleware('auth');
		}
		public function index(){
			return 'test';
		}
	}
?>