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
      <th scope="col-2">Logo</th>
      <th scope="col-2">hotline</th>
      <th scope="col-2">map</th>
      <th scope="col-2">facebook</th>
      <th scope="col-2">email</th>
      
      
      <th>

       <!--  @if(Auth::user()->role_id >= 500)
        <a href="{{route('product.add')}}" class="btn btn-primary">Thêm</a> 
        @endif -->

      </th>
    </tr>

  </thead>
  <tbody>
    @foreach($cart as $bv)
    <tr>
      <th scope="row"><img src="{{$bv->logo}}"></th>
      <td>{{$bv->hotline}}</td>
      <td><iframe src="{{$bv->map}}"></iframe></td>
      <td> 
       {{$bv->facebook}}

      </td>
      <td>
        {{$bv->email}}
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