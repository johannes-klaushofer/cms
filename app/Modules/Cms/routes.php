<?php
	Route::group(array('module' => 'Cms', 'namespace' => 'App\Modules\Cms\Controllers', 'middleware' => 'auth'), function(){
		Route::get('admin/cms/{view?}', 'Cms@index');
	});
?>