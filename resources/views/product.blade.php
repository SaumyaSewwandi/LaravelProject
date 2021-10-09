@extends('layouts.app')

@section('content')

       <section id="main">
        <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1> Dashboard <small>Manage All Products</small></h1>
          </div>
         
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Add Product</li>
        </ol>
      </div>
    </section>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

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
    </div>
</div>
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="list-group">
              <a href="Category" class="list-group-item active main-color-bg">
              <span >Dashboard</span> 
              </a>
              <a  href="Category"  class="list-group-item"> Category </a>
              <a href="product" class="list-group-item"> Product </a>
              
            </div>
          </div>
          
          <div class="col-md-10">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">All Products</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        
                                
                    <a href="addProduct" class="btn btn-info mt-2 mb-2">Add new Product</a>
                    
                     
                 </div>
                      
            </div>
                <br>
                
                <table class=" table table-striped table-hover">
                                <thead >
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Regular Price</th>
                                        <th scope="col">Sale Price</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Category_id</th> 
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($productlist as $product)
                                    <tr>
                                        <td scope="col">{{$product->id}}</td>
                                        <td scope="col">{{$product->name}}</td>
                                        <td scope="col">{{$product->description}}</td>
                                        <td scope="col">{{$product->regularprice}}</td>
                                        <td scope="col">{{$product->saleprice}}</td>
                                        <td scope="col"><img src = "assets/uploads/{{$product->image}}" width ="75" height="75"></td>
                                        <td scope="col">{{$product->category_id}}</td>
                                      
                                        <td>
                                         
                                            <a href="editproduct?id={{$product->id}}" class="btn btn-warning" >Edit</a>
                                          
                                            <a href="deleteproduct?id={{$product->id}}" onclick="return confirm('Delete entry?')" class="btn btn-danger">delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>                
             </div>
              
              </div>

          </div>
        </div>

        
      </div>
    </section>
        
 
@endsection
