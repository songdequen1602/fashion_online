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
					  <th>Email</th>
					  <th>Name</th>
					  <th>Address</th>
					   <th>Product_Name</th>
					   <th>updated_at</th>
					 
					  <th>
					  	
					  </th>
					</tr>
					@foreach($comment as $bv)
					<tr>
						<td>{{$bv->id}}</td>
						<td>{{$bv->email}}</td>
						<td>{{$bv->curtomer_name}}</td>			
						<td>
							{{$bv->address}}
						</td>
						<td>
							@isset($bv->products->name)
								{{$bv->products->name}}
							
							@endisset
						</td>
						<td>{{$bv->updated_at}}</td>
						<td>
							 @if(Auth::user()->role_id >= 500)
							 <a href="javascript:;" linkurl="{{route('comments.delete',$bv->id)}}" class="btn btn-danger btn-remove");>Xóa</a>@endif
						</td>
						 
						</tr>
					@endforeach
					<tr>
						<td colspan="5" class="text-center">{{ $comment->links() }}</td>
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