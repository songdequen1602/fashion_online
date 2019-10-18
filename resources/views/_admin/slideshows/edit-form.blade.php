@extends('layouts.main')
@section('content')

<form action="{{route('slideshows.edit', ['id' => $model->id])}}" method="post" enctype="multipart/form-data">
	@csrf
	

	<div class="form-group">
		<label>Image</label>
		<input type="file" name="image" value="{{old('image',$model->image)}}" class="form-control">
		
	</div>
	<div class="form-group">
		<label>desccription</label>
		<input type="text"  name="desccription" rows="10" class="form-control" value="{{old('desccription',$model->desccription)}}">
		<!-- @if($errors->first('desccription'))
		<span class="text-danger" style="color: red">{{$errors->first('desccription')}}</span>
		@endif -->
	</div>
	<div class="form-group">
		<label>url</label>
		<input type="text"  name="url" rows="10" class="form-control" value="{{ old('url',$model->url) }}">
		<!-- @if($errors->first('url'))
		<span class="text-danger" style="color: red">{{$errors->first('url')}}</span>
		@endif -->
	</div>
	<div class="form-group">
		<label>order_number</label>
		<input type="text"  name="order_number" rows="10" class="form-control" value="{{ old('order_number',$model->order_number)}}">
		@if($errors->first('order_number'))
		<span class="text-danger" style="color: red">{{$errors->first('order_number')}}</span>
		@endif
	</div>

	<div class="text-center">
		<button type="submit" class="btn btn-sm btn-info">Save</button>
		<a href="/cate" title="" class="btn btn-sm btn-danger">Cancel</a>
	</div>
</form>

@endsection