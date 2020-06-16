@extends('admin_layout.admin')
@section('content')

<div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><b>Add side</b> </h2>
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
                    <form data-parsley-validate class="form-horizontal form-label-left" action="{{route('handbill_side_insert')}}" enctype="multipart/form-data" method="POST">
                        {{csrf_field()}}

                        <div class="item form-group">
                      
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="logo" style="font-size:20px;"><b>select Quality value</b> <span class="required"></span>
                        </label>
                    <br/>
                        <div class="col-md-6 col-sm-6 ">
                          <select name="size" id="size" class="form-control" >
            
                    <option selected disabled hidden >select Quality</option>
                     @forelse($size as $q)
                     <option value="{{$q->id}}" >{{$q->size}}
                    </option>
                    @empty
                    @endforelse
                    </select>
                          </div>
                        </div>
                      
                      <div class="item form-group">
                      
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="logo" style="font-size:20px;"><b>select Quantity value</b> <span class="required"></span>
                        </label>
                    <br/>
                        <div class="col-md-6 col-sm-6 ">
                          <select  name="quantity" id="quantity" class="form-control" >
            
                    <option selected disabled hidden >select Quantity</option>
                     @forelse($quantity as $q)
                     <option value="{{$q->id}}" >{{$q->quantity}}
                    </option>
                    @empty
                    @endforelse
                    </select>
                          </div>
                        </div>
                      
                      <div class="item form-group">
                    
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="logo" style="font-size:20px;"><b>Add side </b> <span class="required"></span>
                        </label>
                    <br/>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="side" class="form-control " require>
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
                    <h2>visiting card side </h2>
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
                            <th class="column-title">size </th>
                            <th class="column-title">quantity </th>
                            <th class="column-title">side</th>
                            
                            
                            </th>
                            
                          </tr>
                        </thead>

                        <tbody>
                        @if(@data)
                        @foreach($data as $d)
                      
                          <tr class="even pointer">
                            <td class="a-center ">
                              <!-- <input type="checkbox" class="flat" name="table_records"> -->
                            </td>
                            <td class=" ">{{$d->id}}</td>
                            <td class=" ">{{$d->size1}}</td>
                            <td class=" ">{{$d->quantity1}}</td>
                            <td class=" ">{{$d->side}}</td>
                            
                            
                          </tr>

                          
                           @endforeach
                           @endif
                         </thody>
                      </table>
                    </div>
              
            
                  </div>
                </div>
              </div>
 
            </div>
          </div>

           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script type="text/javascript">

              $('#size').change(function()
               {
                  
                  var token = '{{Session::token()}}';


                  var a = $(this).val();
                  alert(a);


                  var data ={'a': a,'_token': token};
 
                  console.log(data);

                  $.ajax({
                      type:'POST',
                      url: "{{route('h_quantity_list')}}",
                      data:data,

                      success: function(gem)
                      {
                        var list = "";
                        for (var i = 0; i<gem.length; i++)
                        {
                          list += "<option value='" +gem[i]['id'] + "'>" + gem[i]['quantity'] + "</option>";

                        }
                        document.getElementById('quantity').innerHTML =list;
                      }
                    });
               }); 
            </script>

            


@endsection