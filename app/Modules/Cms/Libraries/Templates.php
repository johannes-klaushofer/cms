<?php
	namespace App\Modules\Cms\Libraries;
	use App\Modules\Cms\Controllers\Cms;
	
	class Templates extends Cms{
		static function getList(){
			$templates = \DB::table('templates')->where('active', true)->get();
			return $templates;
		}
		static function showField($field){
			$class = 'App\Modules\Cms\Libraries\Fields\\'.$field;
			$class = new $class();
			return $class::build();
		}
	}
?>