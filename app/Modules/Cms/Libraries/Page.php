<?php
	namespace App\Modules\Cms\Libraries;
	use App\Modules\Cms\Controllers\Cms;
	
	class Page extends Cms{
		static function getData($find = null){
			if ($find == null) return false;
			$page = \DB::table('pages')->where('id', $find)->first();
			if (count($page) == 1){
				$pageData = array(
					'id' => $page->id,
					'name' => $page->name,
					'url' => $page->url
				);
				return $pageData;
			}
		}
		static function test(){
			return 'asdf';
		}
	}
?>