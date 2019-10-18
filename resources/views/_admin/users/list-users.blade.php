@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Danh sách bài viết</h3>

          <div class="box-tools">
          	<form action="" method="get">
	            <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
	              <input type="text" name="keyword" class="form-control pull-right" placeholder="Search">

	              <div class="input-group-btn">
	                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
	              </div>
	            </div>
        	</form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
			<table class="table table-hover">
				<tbody>
					<tr>
					  <th>ID</th>
					  <th>name</th>
					  <th>email</th>
					  <th>avatar</th>
					  <th>role_id</th>
					
					  <th>
					  	 @if(Auth::user()->role_id >= 500)
					  	<a href="/users/add-new" class="btn btn-sm btn-success">Add</a>
					  	@endif
					  </th>
					</tr>
					@foreach($user as $bv)
					<tr>
						<td>{{$bv->id}}</td>
						<td>{{$bv->name}}</td>
						<td>{{$bv->email}}</td>
						<td>
							<img src="{{$bv->avatar}}" width="70">
						</td>
						
						<td>
							@if($bv->role_id==500)
							<p>Admin</p>
							@else
							<p>Member</p>
							@endif
						</td>
						
						<td> @if(Auth::user()->role_id >= 500)
							<a href="{{route('users.edit', ['id' => $bv->id])}}" class="btn btn-sm btn-info">Sửa</a>@endif
						</td>
						<td>
							 @if(Auth::user()->role_id >= 500)
							 <a href="javascript:;" linkurl="{{route('users.delete',$bv->id)}}" class="btn btn-danger btn-remove");">Xóa</a>@endif
						</td>
						 
						</tr>
					@endforeach
					<tr>
						<td colspan="12	" class="text-center">{{$user->links() }}</td>
					</tr>
				</tbody>
			</table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
</div>
{{-- <form action="" method="get">
	<input type="text" name="keyword" placeholder="Tìm kiếm...">
	<button type="submit">tim</button>
</form>
<table>
	<tbody>
		
	</tbody>
</table> --}}
@endsection