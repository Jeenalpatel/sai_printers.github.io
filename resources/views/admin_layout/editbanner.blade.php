@extends('admin_layout.admin')
@section('content')
<div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><b>UPDATE YOUR BANNER</b> </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a class="dropdown-item" href="#">Settings 1</a>
                          </li>
                          <li><a class="dropdown-item" href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form data-parsley-validate class="form-horizontal form-label-left" action="{{route('updatebanner')}}" enctype="multipart/form-data" method="POST">
                        {{csrf_field()}}
                        <input type="text" name="id" value="{{$data[0]->id}}">
                      <div class="item form-group">
                      
                        <label class="col-form-label col-md-3 col-sm-3 label-align"  style="font-size:20px;"><b>select banner image</b> <span class="required"></span>
                        </label>
                    <br/>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="file" required="required" name="image"  style="margin-top:10px;font-size:20px;">
                          <img src="{{url('storage/app/banner')}}{{'/'}}{{$data[0]->image}})">

                        </div>
                        
                      </div>

                      
                      <div class="item form-group">
                    
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="logo" style="font-size:20px;"><b>Title</b> <span class="required"></span>
                        </label>
                    <br/>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="title" class="form-control" value="{{$data[0]->title}}" require>
                          </div>
                        
                        </div>
                        <div class="item form-group">
                    
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="logo" style="font-size:20px;"><b>Tag Line</b> <span class="required"></span>
                    </label>
                <br/>
                    <div class="col-md-6 col-sm-6 ">
                    <input type="text" name="info" class="form-control" value="{{$data[0]->info}}" require>                     
                    </div>
                    
                    </div>
                    
                                            
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <button type="submit" class="btn btn-success">UPDATE</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

                        
            </div>
@endsection