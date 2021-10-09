@extends('layouts.app')

@section('content')

   <section id="main">
        <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1>Dashboard <small>Manage All Categories</small></h1>
          </div>
          
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Add Category</li>
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
          <div class="col-md-3">
            <div class="list-group">
              <a href="Category" class="list-group-item active main-color-bg">
                <span >Dashboard</span> 
              </a>
              <a  href="Category"  class="list-group-item"> Category </a>
              <a href="product" class="list-group-item"> Product </a>
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">All Categories</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        
                                
                    <form method="POST" action="addcategory">
                                @csrf
                                <div class="form-group">
                                <input type="hidden" name="id">
                                    <label for="formGroupExampleInput">Category Name</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"  name="name" 
                                    >
                                </div>
                                
                                
                                <input type="submit" class =" btn btn-info" value ="Add New Category" >
                     </form>
                 </div>
                      
            </div>
                <br>
                <table class=" table table-striped table-hover">
                                <thead >
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                 @foreach($categorylist as $item)
                                    <tr>
                                      <td>{{ $item->id}}</td>
                                      <td>{{ $item->name}}</td>
                                      
                                        <td>
                                         
                                            <a href="editcategory?id={{$item->id}}" class="btn btn-warning" >Edit</a>
                                          
                                            <a href="deletecategory?id={{$item->id}}" onclick="return confirm('Delete entry?')" class="btn btn-danger">delete</a>
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
