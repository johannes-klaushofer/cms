<?php
	namespace App\Modules\Cms\Controllers;
	use App\Http\Controllers\Controller;
	
	class Cms extends Controller{
		public function index($view = 'index'){
			$class = 'App\Modules\Cms\Libraries\\'.ucfirst($view);
			$class = new $class();
			if (isset($_GET['function'])){
				return $class->$_GET['function']();
			} else {
				return view('cms::'.$view)->withModel($class);
			}
		}
	}
?>