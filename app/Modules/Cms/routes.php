<?php
	Route::group(array('module'=>'Cms','namespace' => 'App\Modules\Cms\Controllers'), function() {

    #Route::get('admin/cms', 'Cms@index');

    Route::get('admin/cms', ['middleware' => 'auth', function(){
        return view("cms::index");
    }]);
});