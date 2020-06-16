@extends('admin_layout.admin')
@section('content')

<div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><b>Update Your Category</b> </h2>
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
                    <form data-parsley-validate class="form-horizontal form-label-left" action="{{route('u_category')}}" enctype="multipart/form-data" method="POST">
                        {{csrf_field()}}
                        <input type="text" name="id" value="{{$data[0]->id}}">
                      <div class="item form-group">
                    
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="logo" style="font-size:20px;"><b>choose main category</b> <span class="required"></span>
                        </label>
                    <br/>
                        <div class="col-md-6 col-sm-6 ">
                          

                          <select class="form-control " name="cate_id" id="categoryid">
                          @forelse($oldcategory as $c)
                            <option value="{{$c->cate_id}}">{{$c->categoryname}}</option>
                          @empty
                          @endforelse
                          </select>
                        </div>
                        
                        </div>

                   <div class="item form-group">
                    
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="logo" style="font-size:20px;"><b>choose sub category</b> <span class="required"></span>
                        </label>
                    <br/>
                        <div class="col-md-6 col-sm-6 ">
                          

                          <select class="form-control " name="subcate_id" id="subcategoryid">
                          @forelse($oldcategory as $c)
                            <option value="{{$c->id}}">{{$c->subcategoryname}}</option>
                            @empty
                          @endforelse
                          
                          </select>
                        </div>
                        
                        </div>
                      
                          <div class="item form-group">
                            
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="logo" style="font-size:20px;"><b>select Front image</b> <span class="required"></span>
                        </label>
                    <br/>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="file" required="required" name="image"  style="margin-top:10px;font-size:20px;">
                          <img src="{{url('storage/app/category')}}{{'/'}}{{$data[0]->image}})">
                        </div>
                        
                          
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="logo" style="font-size:20px;"><b>select Back image</b> <span class="required"></span>
                        </label>
                    <br/>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="file" required="required" name="b_image"  style="margin-top:10px;font-size:20px;">
                          <img src="{{url('storage/app/category')}}{{'/'}}{{$data[0]->image}})">
                        </div>
                        
                      </div>
                      
                      <div class="item form-group">
                    
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="logo" style="font-size:20px;"><b>price</b> <span class="required"></span>
                        </label>
                    <br/>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="price" class="form-control " value="{{$data[0]->price}}" require>
                          </div>
                        
                        </div>
                      
                        <div class="item form-group">
                    
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="logo" style="font-size:20px;"><b>status</b> <span class="required"></span>
                    </label>
                <br/>
                    <div class="col-md-6 col-sm-6 ">
                      <select name="active" style="margin-top:10px;font-size:20px;" class="form-control ">
                            <option value="active">active</option>
                            <option value="inactive">inactive</option>
                      </select>
                      </div>
                    
                    </div>
                 
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>




           
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script type="text/javascript">

              $('#categoryid').change(function()
               {
                  
                  var token = '{{Session::token()}}';


                  var a = $(this).val();

                  var data ={'a': a,'_token': token};
 
                  console.log(data);

                  $.ajax({
                      type:'POST',
                      url: "{{route('subcate_list')}}",
                      data:data,

                      success: function(gem)
                      {
                        var list = "";
                        for (var i = 0; i<gem.length; i++)
                        {
                          list += "<option value='" +gem[i]['id'] + "'>" + gem[i]['sub_name'] + "</option>";

                        }
                        document.getElementById('subcategoryid').innerHTML =list;
                      }
                    });
               }); 
            </script>

@endsection