@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           <!--<div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                   

   
                </div>-->
            </div> 
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

                <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="home" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a  href="home"  class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages <span class="badge">12</span></a>
              <a href="product" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Posts <span class="badge">33</span></a>
              
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">All Products</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        
                                
                    <form method="POST" action="updatecategory">
                                @csrf
                                <div class="form-group">
                                <input type="hidden" value="{{$category->id}}" name="id">
                                    <label for="formGroupExampleInput">Category Name</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"  name="name" value = "{{$category->name}}" 
                                    >
                                </div>
                                
                                
                                <input type="submit" class =" btn btn-info" value ="Update" >
                     </form>
                 </div>
                      
            </div>
                
                             
             </div>
              
              </div>

          </div>
        </div>

        
      </div>
    </section>
         
        </div>
    </div>
</div>
  
@endsection
