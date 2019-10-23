@extends('layouts.main')
@section('content')

<div class="col-sm-12 px-4" style="height: 200px;">
	@if(count($errors) > 0)
		<div class="alert alert-danger" style="height: 100px">
			Upload Validation Error<br><br>
			<ul>
				@foreach($errors as $errors)
				<li>{{$errors}}</li>
 				@endforeach
			</ul>
		</div>
	@endif
	@if($message= Session::get('success'))
	<div class="alert alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert">x</button>
		<strong>{{ $message}}</strong>
	</div>
	@endif
	<div class="form-control col-12">
		<form action="{{route('import')}}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="col-6-fload-left">
		<input type="file" name="select_file">Chon file
		</div>
		<div class=" col-6-fload-right">
		<button class="btn btn-primary">Upload</button>
		</div>
		</form>
	</div>
</div>
<div class="col-sm-12">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id</th>
      <th scope="col">email</th>
      <th scope="col">curtomer_name</th>
       <th scope="col">address</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($baiviet as $row)
    <tr>

      <th scope="row">{{$row->id}}</th>
      <td>{{$row->email}}</td>
      <td>{{$row->curtomer_name}}</td>
      <td>{{$row->address}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection