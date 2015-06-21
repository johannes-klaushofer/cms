<?php
	namespace App\Modules\Cms\Controllers;
	use App\Http\Controllers\Controller;
	use App\Modules\Cms\Libraries\Page;
	use App\Modules\Cms\Libraries\Templates;

	class Cms extends Controller{
		public function index($view = 'index'){
			$class = 'App\Modules\Cms\Libraries\\'.ucfirst($view);
			$class = new $class();
			return view('cms::'.$view)->withModel($class);
		}
	}
?>