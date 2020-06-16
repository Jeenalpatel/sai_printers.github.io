@extends('admin_layout.admin')
@section('content')

<div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><b>price list</b> </h2>
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
                    <form data-parsley-validate class="form-horizontal form-label-left" action="{{route('bill_book_pricelist_insert')}}" enctype="multipart/form-data" method="POST">
                        {{csrf_field()}}
                      <div class="item form-group">
                    
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="logo" style="font-size:20px;"><b>Select Size</b> <span class="required"></span>
                        </label>
                    <br/>
                        <div class="col-md-6 col-sm-6 ">
                          

                          <select id="size" name="size" class="form-control"  >
                              <option selected disabled hidden >select Quality</option>
                              @forelse($bsize as $s)
                              <option value="{{$s->id}}" >{{$s->size}}
                              </option>
                              @empty
                              @endforelse
                              </select>
                        </div>
                        
                        </div>
                        <div class="item form-group">
                    
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="logo" style="font-size:20px;"><b>Select quantity</b> <span class="required"></span>
                        </label>
                    <br/>
                        <div class="col-md-6 col-sm-6 ">
                          

                          <select id="quantity" name="quantity" class="form-control"  >
                              <option selected disabled hidden >select Quality</option>
                              @forelse($bquantity as $s)
                              <option value="{{$s->id}}" >{{$s->quantity}}
                              </option>
                              @empty
                              @endforelse
                              </select>
                        </div>
                        
                        </div>
                        <div class="item form-group">
                    
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="logo" style="font-size:20px;"><b>price_per_card</b> <span class="required"></span>
                        </label>
                    <br/>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text" name="price_per_book" class="form-control " require>
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

              



            
            
            <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>PRICE LIST </h2>
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
                            
                            <th class="column-title">Size </th>
                            <th class="column-title">Quantity </th>
                            
                            <th class="column-title">Price_per_card </th>


                            
                            <th class="column-title">Update </th>
                            <th class="column-title">Delete </th>
                            </th>
                            
                          </tr>
                        </thead>

                        <tbody>
                        
                        @forelse($data as $d)
                        
                      
                          <tr class="even pointer">
                            <td class="a-center ">
                            
                            <td class=" ">{{$d->id}}</td>
                            
                            <td class=" ">{{$d->size1}}</td>c
                            <td class=" ">{{$d->quantity1}}</td>
                             

                            <td class=" ">{{$d->price_per_book}}</td>
                            <td class=" "><a href="{{route('editcategory',$d->id)}}"><i class="fa fa-pencil-square-o  fa-2x" aria-hidden="true"></i></td>
                            <td class=" "><a href="{{route('deletecategory',['id'=>encrypt($d->id)])}}"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></td>
                            </td>
                          </tr>

                          @empty
                           @endforelse
                      
                         </tbody>
                      </table>
                    </div>
                    
            
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
                  // alert(a);


                  var data ={'a': a,'_token': token};
 
                  console.log(data);

                  $.ajax({
                      type:'POST',
                      url: "{{route('b_quantity_list')}}",
                      data:data,

                      success: function(gem)
                      {
                        var list = "";
                        for (var i = 0; i<gem.length; i++)
                        {
                          list += "<option value='" +gem[i]['id'] + "'>" + gem[i]['quantity'] + " </option>";

                        }
                        document.getElementById('quantity').innerHTML =list;
                      }
                    });
               }); 
            </script>



            <script type="text/javascript">

              $('#quantity').change(function()
               {
                  
                  var token = '{{Session::token()}}';


                  var a = $(this).val();
                  // alert(a);

                  var data ={'a': a,'_token': token};
 
                  console.log(data);

                  $.ajax({
                      type:'POST',
                      url: "{{route('side_list')}}",
                      data:data,

                      success: function(gem)
                      {
                        var list = "";
                        for (var i = 0; i<gem.length; i++)
                        {
                          list += "<option value='" +gem[i]['id'] + "'>" + gem[i]['side'] + "</option>";

                        }
                        document.getElementById('side').innerHTML =list;
                      }
                    });
               }); 
            </script>

@endsection