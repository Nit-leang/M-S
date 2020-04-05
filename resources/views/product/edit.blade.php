@extends('layout.master')
@section('title',"Add product")

@section('content')
    <h3> Edit Product </h3>
    <form method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$product->id}}" >
        <div class="form-group">
            <label for="name">Product Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
         </div>
        <div class="form-group">
            <label for="code">Product code</label>
            <input type="text" class="form-control" id="code" name="code" value="<?php echo $product->code;  ?>">
        </div>
        <div class="form-group">
            <label for="exp">Product EXP</label>
            <input type="text" class="form-control" id="exp" name="exp">
        </div>
        <div class="form-group">
            <label for="price">Product Price</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>
        <div class="form-group">
            <label for="img">Image</label>
            <input type="file" class="form-control-file" id="img" name="imgs">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>    
@endsection