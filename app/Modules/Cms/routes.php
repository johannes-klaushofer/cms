<?php
	Route::group(array('module' => 'Cms', 'namespace' => 'App\Modules\Cms\Controllers'), function(){
		Route::get('admin/cms/{view?}', ['middleware' => 'auth', function($view = 'index'){
			return view('cms::'.$view);
		}]);
	});
?>