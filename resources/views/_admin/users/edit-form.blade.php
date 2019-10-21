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
		<label>Password</label>
	   <div class="input-group">
        <span class="input-group-addon">
        <img src="{{url('/')}}/adminlte/dist/img/mat.jpg" height="20px" width="30px" class="icon">
        </span>
        <input type="password" name="password" value="{{old('password',$model->password)}}" placeholder="Enter password..." class="form-control password">
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
		<input type="file" name="avatar" value="{{old('avatar')}}" class="form-control" id="product_image">
		<p>Avatar</p>
		<img src="{{$model->avatar}}" id="imageTarget" width="150px" height="150px">
	</div>

	<!-- <div class="form-group">
		<label>created_at</label>
		<input type="date"  name="created_at" rows="10" class="form-control" value="{{ old('created_at') }}">
		
	</div>
	<div class="form-group">
		<label>updated_at</label>
		<input type="date"  name="updated_at" rows="10" class="form-control" value="{{ old('updated_at') }}">
		
	</div> -->
	<div class="form-group" style="height: 150px">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<script type="text/javascript">
	$('.icon').hover(function () {
    $('.password').attr('type', 'text');
	}, function () {
    $('.password').attr('type', 'password');
	});
</script>
<script type="text/javascript">
$(document).ready(function(){
  $('#editor').wysihtml5();
  });
  function getBase64(file, selector) {
     var reader = new FileReader();
     reader.readAsDataURL(file);
     reader.onload = function () {
      $(selector).attr('src', reader.result);
     };
     reader.onerror = function (error) {
       console.log('Error: ', error);
     };
  }
	var img = document.querySelector('#product_image');
  img.onchange = function(){
    var file = this.files[0];
    if(file == undefined){
      $('#imageTarget').attr('src', "adminlte/dist/img/avatar.png");
    }else{
      getBase64(file, '#imageTarget');
    }
  }
</script>
@endsection