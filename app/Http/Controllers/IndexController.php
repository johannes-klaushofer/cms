<?php
	namespace App\Http\Controllers;
	use App\Http\Controllers\Controller;

	use App\Modules\Cms\Controllers\Cms;
	
	class IndexController extends Controller{
		protected function init(){
			if (!isset($_GET['module'])){
				return view('Dashboard');
			} else {
				$cms = new Cms;
				return $cms->index();
			}
		}
	}
?>