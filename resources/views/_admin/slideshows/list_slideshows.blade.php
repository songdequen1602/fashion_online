@extends('layouts.main')
@section('content') 
<table class="table table-striped table-dark">
   <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Danh sách sản phẩm</h3>

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
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col-2">image</th>
      <th scope="col-2">desccription</th>
      <th scope="col-2">url</th>
      <th scope="col-2">order_number</th>
      
      
      <th>

       <!--  @if(Auth::user()->role_id >= 500)
        <a href="{{route('product.add')}}" class="btn btn-primary">Thêm</a> 
        @endif -->

      </th>
      <th>
       @if(Auth::user()->role_id >= 500)
        <a href="{{route('slideshows.add')}}" class="btn btn-primary">Thêm</a> 
        @endif
      </th>
    </tr>

  </thead>
  <tbody>
    @foreach($slideshows as $bv)
    <tr>
      <th scope="row"><img src="{{$bv->image}}" height="100px"></th>
      <td>{{$bv->desccription}}</td>
      <td>{{$bv->url}}</td>
      <td> 
       {{$bv->order_number}}

      </td>
       <td>
        @if(Auth::user()->role_id >= 500)
        <a href="{{route('slideshows.edit',['id' => $bv->id])}}" class="btn btn-success">Sửa</a>
          @endif
      </td>
       <td>
        @if(Auth::user()->role_id >= 500)
        <a href="javascript:;" linkurl="{{route('slideshows.delete',$bv->id)}}" class="btn btn-danger btn-remove");">Xóa</a>
        @endif
      </td> 
      @endforeach
      <tr>
        <td colspan="7" class="text-center"></td>
      </tr>    
    </tr>
  </tbody>

</table>
<style type="text/css">
  .close{
    color: #ffffff;
  }
</style>


</body>
</html>
@endsection