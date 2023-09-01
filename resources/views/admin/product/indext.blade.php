@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header"></div>
    <h4>Product Page</h4>
    <hr>
    <div class="card-body">
    <table class="table table-border table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Catogrey</th>
      <th scope="col">Name</th>
      <th scope="col">Sellein Price</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>

      

    </tr>
  </thead>
  <tbody>
    @foreach($product as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->add->name}}</td>
      <td>{{$item->selling_price}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->description}}</td>
      <td>
        
          <img src="{{asset('storage/image/'.$item->image)}}" class="cate-image" >  
    </td>
      <td>
        <a href="{{url('edit-product/'.$item->id)}}" class="btn btn-primary">Edit</a>
        <a href="{{url('delete-prod/'.$item->id)}}" class="btn btn-primary">delete</a>
        
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</hr>


@endsection