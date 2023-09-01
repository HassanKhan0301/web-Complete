@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">

    <h1> Add Product </h4>
    </div>

    <div class="card-body">
    
        <form action="{{url('insert-pro')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                <select class="form-select" name="cat_id" >
                   
              <option selected>Select A Catogrey</option>
               @foreach($add as $item)
               <option value="{{ $item->id}}">{{ $item->name}}</option>
               @endforeach
                 </select>


            </div>
            <div class="row">
                <div class="col-md-6 mb-3">

                <label for="">Name</label>
                <input type="text" class="form-control" name="name">

                </div>


                <div class="col-md-6 mb-3">
                <label for="">Slug</label>
                <input type="text" class="form-control" name="slug">
                </div>

                <div class="col-md-12 mb-3">          
                <label for="">Small Description</label>
                <input type="text" class="form-control" name="samll_descrip">


                <div class="col-md-12 mb-3">          
                <label for="">Description</label>
                <input type="text" class="form-control" name="description">

                </div>
                

                <div class="col-md-6 mb-3">              
                <label for="">Quantity</label>
                <input type="text" class="form-control" name="qty">
               </div>
               <div class="col-md-6 mb-3">              
                <label for="">Original Price</label>
                <input type="text" class="form-control" name="origninal_price">
               </div>

               <div class="col-md-6 mb-3">              
                <label for="">selling_price Price</label>
                <input type="text" class="form-control" name="selling_price">
               </div>
               
               <div class="col-md-6 mb-3">              
                <label for="">Tax</label>
                <input type="text" class="form-control" name="tax">
               </div>


                <div class="col-md-6 mb-3">
                <label for="">Meta_Title</label>
                <input type="text" class="form-control" name="meta_title">
                </div>

                <div class="col-md-6 mb-3">
                <label for="">Meta_Discript</label>
                <input type="text" class="form-control" name="meta_discrip">
                </div>

                <div class="col-md-6 mb-3">              
                <label for="">Meta_Keywords</label>
                <input type="text" class="form-control" name="meta_keywords">
               </div>

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


