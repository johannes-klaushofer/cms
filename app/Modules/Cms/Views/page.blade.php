@extends('Cms/Views/master')
@section('test')
	
	
	
	
	<?php
		print_r($model::getData($_GET['id']));
	?>
	
	
@stop