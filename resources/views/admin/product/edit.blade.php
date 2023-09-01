@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">

    <h1> Add Product </h4>
    </div>

    <div class="card-body">
    
        <form action="{{url('update-product/'.$product->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="">Catogrey</label>
                <select class="form-select" >
                   
              <option value="">{{$product->add->name}}</option>
             
                 </select>


            </div>
            <div class="row">
                <div class="col-md-6 mb-3">

                <label for="">Name</label>
                <input type="text" class="form-control" value="{{$product->name}}" name="name">

                </div>


                <div class="col-md-6 mb-3">
                <label for="">Slug</label>
                <input type="text" class="form-control" value="{{$product->slug}}" name="slug">
                </div>

                <div class="col-md-12 mb-3">          
                <label for="">Small Description</label>
                <input type="text" class="form-control" value="{{$product->small_descrip}}" name="samll_descrip">


                <div class="col-md-12 mb-3">          
                <label for="">Description</label>
                <input type="text" class="form-control" value="{{$product->description}}" name="description">

                </div>
                

                <div class="col-md-6 mb-3">              
                <label for="">Quantity</label>
                <input type="text" class="form-control" value="{{$product->qty}}" name="qty">
               </div>
               <div class="col-md-6 mb-3">              
                <label for="">Original Price</label>
                <input type="text" class="form-control" value="{{$product->original_price}}" name="origninal_price">
               </div>

               <div class="col-md-6 mb-3">              
                <label for="">selling_price Price</label>
                <input type="text" class="form-control" value="{{$product->selling_price}}" name="selling_price">
               </div>
               
               <div class="col-md-6 mb-3">              
                <label for="">Tax</label>
                <input type="text" class="form-control" value="{{$product->tax}}" name="tax">
               </div>


                <div class="col-md-6 mb-3">
                <label for="">Meta_Title</label>
                <input type="text" class="form-control" value="{{$product->meta_title}}" name="meta_title">
                </div>

                <div class="col-md-6 mb-3">
                <label for="">Meta_Discript</label>
                <input type="text" class="form-control" value="{{$product->meta_discrip}}" name="meta_discrip">
                </div>

                <div class="col-md-6 mb-3">              
                <label for="">Meta_Keywords</label>
                <input type="text" class="form-control" value="{{$product->meta_keywords}}" name="meta_keywords">
               </div>
               @if($product->image)
<img src ="{{asset('storage/image/'.$product->image)}}" alt="add image">
@endif

               <div class="col-md-6 mb-3">              
                
               <input type="file" class="form-control" name="image">
               </div>
               <div class="col-md-6 mb-3">

                <button type="submit" class="btn btn-primary">submit</button>
                </div> 
</div>
</div>


        </form>

</div>
</div>


@endsection


