@extends('admin_layout.admin')
@section('content')

<div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><b>our works</b> </h2>
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
                    <form data-parsley-validate class="form-horizontal form-label-left" action="{{route('portfolio_insert')}}" enctype="multipart/form-data" method="POST">
                        {{csrf_field()}}


                      <div class="item form-group">
                    
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="logo" style="font-size:20px;"><b>Main Category</b> <span class="required"></span>
                        </label>
                    <br/>
                        <div class="col-md-6 col-sm-6 ">
                          

                          <select class="form-control " name="cate_id" id="categoryid">
                          @forelse($cate as $c)
                            <option value="{{$c->id}}">{{$c->name}}</option>
                          @empty
                          @endforelse
                          </select>
                        </div>
                        
                        </div>

                   <div class="item form-group">
                    
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="logo" style="font-size:20px;"><b>Sub category</b> <span class="required"></span>
                        </label>
                    <br/>
                        <div class="col-md-6 col-sm-6 ">
                          

                          <select class="form-control " name="subcate_id" id="subcategoryid">
                          @forelse($subcate as $c)
                            <option value="{{$c->id}}">{{$c->sub_name}}</option>
                            @empty
                          @endforelse
                          
                          </select>
                        </div>
                        
                        </div>
                        <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="logo" style="font-size:20px;"><b>select image</b> <span class="required"></span>
                        </label>
                    <br/>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="file" required="required" name="image"  style="margin-top:10px;font-size:20px;">
                        </div>
                        
                      </div>
                      
                      

                      <div class="item form-group">
                    
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="logo" style="font-size:20px;"><b>price</b> <span class="required"></span>
                        </label>
                    <br/>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="price" class="form-control " require>
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




            <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Our Portfolio </h2>
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
              <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <!-- <input type="checkbox" id="check-all" class="flat"> -->
                            </th>
                            <th class="column-title">id </th>
                            <th class="column-title">image </th>
                            <th class="column-title">main category </th>
                            <th class="column-title">sub category </th>
                            <th class="column-title">price </th>


                            <th class="column-title">status </th>
                            <th class="column-title">created at </th>
                           
                            </th>
                            
                          </tr>
                        </thead>

                        <tbody>
                        @if(@$data)
                        @forelse($data as $d)
                      
                          <tr class="even pointer">
                            <td class="a-center ">
                              <!-- <input type="checkbox" class="flat" name="table_records"> -->
                            </td>
                            <td class=" ">{{$d->id}}</td>
                            <td class=" "><img src="{{url('storage/app/Portfolio')}}{{'/'}}{{$d->image}}" style="height: 60px; width: 60px;"></td> </td>
                            
                            <td class=" ">{{$d->cateid}}</td>c
                            <td class=" ">{{$d->subcate_id}}</td>
                            <td class=" ">{{$d->price}}</td>
                            <td class=" ">@if($d->active == 'active')<a href="{{route('works_active',['id'=>encrypt($d->id),'active'=>'active'])}}">ACTIVE</a>
                          @else($d->active == 'inactive')
                          <a href="{{route('works_active',['id'=>encrypt($d->id),'active'=>'inactive'])}}">INACTIVE</a>
                          @endif </td>
                            <td class=" ">{{$d->created_at}}</td>
                            
                          </tr>

                          @empty
                           @endforelse
                      @endif 
                         </tbody>
                      </table>
                    </div>
                    
            
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