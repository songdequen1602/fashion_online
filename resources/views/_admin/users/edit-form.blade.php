@extends('layouts.main')
@section('content')

<form action="{{route('users.edit',['id' => $model->id])}}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label>name</label>
		<input type="text" name="name" value="{{old('name',$model->name)}}" placeholder="Enter name..." class="form-control">
		@if($errors->first('name'))
		<span class="text-danger" style="color: red">{{$errors->first('name')}}</span>
		@endif
	</div>
	<div class="form-group">
		<label>email</label>
		<input type="email" name="email" value="{{old('email',$model->email)}}" placeholder="Enter email..." class="form-control">
		@if($errors->first('email'))
		<span class="text-danger" style="color: red">{{$errors->first('email')}}</span>
		@endif
	</div>
		<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" value="{{old('password',$model->password)}}" placeholder="Enter password..." class="form-control">
		@if($errors->first('password'))
		<span class="text-danger" style="color: red">{{$errors->first('password')}}</span>
		@endif
	</div>
	<!-- <div class="form-group">
		<label>email_verified_at</label>
		<input type="date" name="password" value="{{old('email_verified_at')}}" placeholder="Enter email_verified_at..." class="form-control">
	</div> -->
	<div class="form-group">
		<label>avatar</label>

		<input type="file" name="avatar" value="{{old('avatar')}}" class="form-control">
		<p>Avatar</p>
		<img src="{{$model->avatar}}" width="100px" height="100px">
	</div>

	<!-- <div class="form-group">
		<label>created_at</label>
		<input type="date"  name="created_at" rows="10" class="form-control" value="{{ old('created_at') }}">
		
	</div>
	<div class="form-group">
		<label>updated_at</label>
		<input type="date"  name="updated_at" rows="10" class="form-control" value="{{ old('updated_at') }}">
		
	</div> -->
	<div class="form-group">
		<label>role_id</label>
		<select name="role_id" class="form-control">
			@if($model->role_id==500)
			<option value="500">Admin</option>
			@else
			<option value="100">Member</option>
			@endif
			<option value="500">Admin</option>
			<option value="100">Member</option>
		</select>
		
		@if($errors->first('role_id'))
		<span class="text-danger" style="color: red">{{$errors->first('role_id')}}</span>
		@endif
	</div>
	<div class="text-center">
		<button type="submit" class="btn btn-sm btn-info">Save</button>
		<a href="{{route('users')}}" title="" class="btn btn-sm btn-danger">Cancel</a>
	</div>
</form>

@endsection