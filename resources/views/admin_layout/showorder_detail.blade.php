@extends('admin_layout.admin')
@section('content')
<h1>jinal is here</h1>



		
		 
     <!-- Start to do list -->
                <div class="col-md-6 col-sm-6 ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>To Do List <small>Sample tasks</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Settings 1</a>
                              <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <div class="">
                        <ul class="to_do">
                          <li>
                            <p>
                              @forelse($envelop as $d)
                  <form action="" method="post">
                {{csrf_field()}}
                
                          <input type="text" name="id" value="{{$d->id}}">
                    <input type="text" name="userid" value="{{$d->uid}}">
                    <input type="text" name="category" value="{{$d->cate_name}}">
                    <input type="text" name="cart_id" value="{{$d->cart_id}}">
                 
                      
                      </form>
                      @empty
                     @endforelse
                     
                          </li>
                          <li>
                            <p>
                              @forelse($visitingcard as $d)
                  <form action="" method="post">
                {{csrf_field()}}
                
                          <input type="text" name="id" value="{{$d->id}}">
                    <input type="text" name="userid" value="{{$d->uid}}">
                    <input type="text" name="category" value="{{$d->cate_name}}">
                    <input type="text" name="cart_id" value="{{$d->cart_id}}">
                 
                      
                      </form>
                      @empty
                     @endforelse

                          </li>
                          <li>
                            <p>
                             @forelse($handbill as $d)
                  <form action="" method="post">
                {{csrf_field()}}
                
                          <input type="text" name="id" value="{{$d->id}}">
                    <input type="text" name="userid" value="{{$d->uid}}">
                    <input type="text" name="category" value="{{$d->cate_name}}">
                    <input type="text" name="cart_id" value="{{$d->cart_id}}">
                 
                      
                      </form>
                      @empty
                     @endforelse

                          </li>
                          <li>
                            <p>
                              @forelse($banner as $d)
                  <form action="" method="post">
                {{csrf_field()}}
                
                          <input type="text" name="id" value="{{$d->id}}">
                    <input type="text" name="userid" value="{{$d->uid}}">
                    <input type="text" name="category" value="{{$d->cate_name}}">
                    <input type="text" name="cart_id" value="{{$d->cart_id}}">
                 
                      
                      </form>
                      @empty
                     @endforelse
                    

                          </li>
                          <li>
                            <p>
                              @forelse($bb as $d)
        
              
              <form action="" method="post">
                {{csrf_field()}}
                
                          <input type="text" name="id" value="{{$d->id}}">
                    <input type="text" name="userid" value="{{$d->uid}}">
                    <input type="text" name="category" value="{{$d->cate_name}}">
                    <input type="text" name="cart_id" value="{{$d->cart_id}}">
                 
                      
                      </form>
                      @empty
                     @endforelse
              
                          </li>
                          <li>
                            <p>
                               @forelse($lp as $d)
                  <form action="" method="post">
                {{csrf_field()}}
                
                          <input type="text" name="id" value="{{$d->id}}">
                    <input type="text" name="userid" value="{{$d->uid}}">
                    <input type="text" name="category" value="{{$d->cate_name}}">
                    <input type="text" name="cart_id" value="{{$d->cart_id}}">
                 
                      
                      </form>
                      @empty
                     @endforelse
                    
                          </li>
                          
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End to do list -->
               

@endsection