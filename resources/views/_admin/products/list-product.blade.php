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
      <th scope="col-2"></th>
      <th scope="col-2">Id </th>
      <th scope="col-2">name</th>
      <th scope="col-2">image</th>
      <th scope="col-2">detail</th>
      <th scope="col-2">categories</th>
      <th scope="col-2">status</th>
      
      <th>

        @if(Auth::user()->role_id >= 500)
        <a href="{{route('product.add')}}" class="btn btn-primary">Thêm</a> 
        @endif

      </th>
    </tr>

  </thead>
  <tbody>
    <form action="{{route('deleteall')}}" method="post">
      @csrf
    @if(count($baiviet)>0)
    @foreach($baiviet->all() as $bv) 
    <tr>
      <td><input type="checkbox" name="check" value="{{$all=$bv->id}}"  class="checkbox" ></td>
      <th scope="row">{{$bv->id}}</th>
      <td>{{$bv->name}}</td>
      <td><img src="{{$bv->image}}" width="100px"></td>
      <td>{{$bv->detail}}</td>
      <td> 
        @isset($bv->categories->name)
              {{$bv->categories->name}}
        @endisset

      </td>
      <td>
          @if($bv->status==0)
          <a href="{{route('product.update',['id' => $bv->id])}}" class="btn btn-xs btn-danger">Hết hàng </a>
          @else
          <a href="{{route('product.update',['id' => $bv->id])}}" class="btn btn-xs btn-primary" style="">Còn hàng</a>
          @endif
      </td>
      
      
      <td>
        @if(Auth::user()->role_id >= 500)
        <a href="{{route('product.edit',['id' => $bv->id])}}" class="btn btn-success">Sửa</a>
          @endif
      </td>
       <td>
        @if(Auth::user()->role_id >= 500)
        <a href="javascript:;" linkurl="{{route('deleteproduct',$bv->id)}}" class="btn btn-danger btn-remove");">Xóa</a>
        @endif
      </td>
      @endforeach    
      @endif
    </tr>
    <tr>
        <td style="width: 100px;"><input type="checkbox" name="check" value="{{$all}}" id="select_all"/> Chọn tất cả</td>
        <td class="text-center"><input type="submit" class="btn btn-danger" name="" value="Xóa"></td>
    </tr>
    </form>
     <tr>
        <td colspan="12" class="text-center">{{$baiviet->links()}}</td>
    </tr>

  </tbody>

</table>
<style type="text/css">
  .close{
    color: #ffffff;
  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
  $("#select_all").change(function(){  //"select all" change 
    var status = this.checked; // "select all" checked status
    $('.checkbox').each(function(){ //iterate all listed checkbox items
        this.checked = status; //change ".checkbox" checked status
    });
});

$('.checkbox').change(function(){ //".checkbox" change 
    //uncheck "select all", if one of the listed checkbox item is unchecked
    if(this.checked == false){ //if this item is unchecked
        $("#select_all")[0].checked = false; //change "select all" checked status to false
    }
    //check "select all" if all checkbox items are checked
    if ($('.checkbox:checked').length == $('.checkbox').length ){ 
        $("#select_all")[0].checked = true; //change "select all" checked status to true
    }
});
</script>

</body>
</html>
@endsection