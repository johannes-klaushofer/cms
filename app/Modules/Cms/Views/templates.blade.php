@extends('Cms/Views/master')
@section('test')
	
	
	
	
	<?php
	
		print_r($model::showField('Text'));
	
	
		$templates = $model::getList();
		foreach($templates as $template){
			echo '<p><a href="?id='.$template->id.'">'.$template->name.'</a></p>';
		}
	?>
	
	
@stop