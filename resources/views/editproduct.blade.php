@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Edit Product</div>
                    <div class="card-body">
                        
                    <div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            <div class="ms-12">
                                <h6 class="mb-0 text-success">Success Alerts</h6>
                                <div><strong>{{ $message }}!</strong></div>
                            </div>
                        </div>
                    @endif
                    @if ($message = Session::get('Error'))
                        <div class="alert alert-danger" role="alert">
                            <div class="ms-12">
                                <h6 class="mb-0 text-danger">Danger Alerts</h6>
                                <div><strong>{{ $message }}!</strong></div>
                            </div>
                        </div>
                    @endif
                </div>
                            
                            <form method="POST" action="updateproduct" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{$product->id}}" name="id">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Product Name</label>
                                    <input type="text" class="form-control" placeholder = "Product Name" name="name" value="{{$product->name}}"
                                     >
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Product Description</label>
                                    <textarea  class="form-control" placeholder = "Product Description"    name="description" >{{$product->description}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Regular Price</label>
                                    <input type="text" class="form-control" placeholder = "Regular Price"  name="regularprice" value="{{$product->regularprice}}"
                                    >
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Sale Price</label>
                                    <input type="text" class="form-control" placeholder = "Sale Price"  name="saleprice" value="{{$product->saleprice}}"
                                    >
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Product Image</label>
                                    <input type="file" class="input-file" name="image"/><br>
                                    <img src = "assets/uploads/{{$product->image}}" width ="75" height="75">
                                </div>
                               
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Select Category</label>
                                     <select class = "form-control" name = "category_id" > 
                                     @foreach($categorylist as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                     </select> 
                                </div>
                                <input type="submit" class="btn btn-primary" value="Update">
                            </form>
                            
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
