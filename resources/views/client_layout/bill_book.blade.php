@extends('client_layout.main_page')

@section('content')
<style type="text/css">
	

</style>
<div class="b_b_service">
	@forelse($data as $d)


    <div class="bb_top_service">
    	<form action="{{route('bill_book_info')}}" method="post">
                	{{csrf_field()}}

      <div class="b_b_wp"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="b_b_img">
           		 <input type="hidden" name="image1" value="{{$d->image}}">
            <input type="hidden" name="image2" value="{{$d->b_image}}">
          
              <div class="row">
                <div class="col-lg-12">
                  <img id="0" class="preview" src="{{url('storage/app/category')}}{{'/'}}{{$d->image}}"><br>
                </div>
                <div class="col-lg-12">
                  <div class="thum_main">
                    <img id="1" class="thum normal" onclick="preview(this);" src="{{url('storage/app/category')}}{{'/'}}{{$d->image}}">
                    <img id="2" class="thum normal" onclick="preview(this);" src="{{url('storage/app/category')}}{{'/'}}{{$d->b_image}}">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="limited_info">
                    <p>only show information that is currently running.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="bb_form_start">
              <div class="heading">{{$d->categoryname}}</div>
              <div class="bb_form">
                
                  <div class="row">
                    <div class="col-lg-4"><lable>Size</lable></div>
                    <div class="col-lg-8">
                    	<select id="size" name="size" >
            
        					<option selected disabled hidden >select size</option>
        					@forelse($bsize as $s)

        					<option value="{{$s->id}}"  >{{$s->size}}
        					</option>
        					@empty
        					@endforelse
  						</select>			
                    </div>
                  </div>
                  <div class="row p_second_row">
                    
                    <div class="col-lg-4"><lable>Quantity</lable></div>
                    <div class="col-lg-8">
                     <select id="quantity" name="quantity"  @if(@$data1->size == $s->id){{'selected'}}@elseif(old('size') == $s->id){{'selected'}}@else{{'disabled'}}@endif  >
            
        					<option selected disabled hidden ></option>
        					@forelse($bquantity as $s)

        					<option value="{{$s->id}}"  >{{$s->quantity}} Bill Book
        					</option>
        					@empty
        					@endforelse
  						</select>
                    </div>
                  </div>
                  <div class="row p_three_row">
                    <div class="col-lg-4"><lable>Colour</lable></div>
                    <div class="col-lg-8">
                      <div class="lbl_border">
                        <label>Multi Colour</label>
                      </div>
                    </div>
                  </div>
                  <div class="row p_three_row">
                    <div class="col-lg-4"><lable>Quality</lable></div>
                    <div class="col-lg-8">
                      <div class="lbl_border">
                        <label>1+1(Original + Duplicate) 100 gsm</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="price"><lable><i class="fa fa-inr" aria-hidden="true" style="font-size: 25px; padding-right: 3px;"></i></lable><lable style="font-size: 25px;">
                      	<span id="changeprice" name="total_price" value="{{$d->price}}">

                          {{$d->price}}</span><br></lable></div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12 col-12">
                      @if(@Auth::guard('web')->user()->name) 
                      <div class=""><input type="submit" name="" value="SUBMIT FORM"></div>
                      @else
                      <form method="POST" action="{{ route('login') }}" >
                      @csrf
                      <!-- <div class=""><input type="button" name="" id="login_click" value="ADD TO CART"></div> -->
                      <a href="#" class="menu-btn" id="login_click" style="text-decoration-style: none; background-color: white;">please first Login and then submit</a>
                      <!-- <a href="#"><input type="button" name="b1" id="login_click">ADD TO CART</a> -->
                      <!-- <a href="{{route('login')}}"><button id="login_click">add to cart</button></a> -->
                    </form>
                      @endif

                      <!-- <input type="submit" name="submit" value="Submit"> -->
                      
                    </div>
                  </div>

                </form>
              </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="bb_note"></div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    @empty
    @endforelse
  </div>


  <div class="extra_bb_info">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="extra_hed">Available Facility Of Bill Book</div>
        </div>
        <div class="col-lg-12">
          <div class="extra_info">
            <div class="row">
              <div class="col-lg-3 col-3">Paper Quality :</div>
              <div class="col-lg-9 col-9 text-left" style="padding-left: 30px;">70 gsm , 80 gsm , 54 gsm , 68 gsm , 50 gsm</div>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="extra_info">
            <div class="row">
              <div class="col-lg-3 col-3">Size :</div>
              <div class="col-lg-9 col-9 text-left" style="padding-left: 30px;">
                1/8 , 1/10 , 1/5 , 1/6 , 1/4 , 1/16
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="extra_info">
            <div class="row">
              <div class="col-lg-3 col-3">Colour :</div>
              <div class="col-lg-9 col-9 text-left" style="padding-left: 30px;">Singli Colour , Two Colour , Multi Colour</div>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="extra_info">
            <div class="row">
              <div class="col-lg-3 col-3">Duplicate Page :</div>
              <div class="col-lg-9 col-9 text-left" style="padding-left: 30px;"></div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 col-12">
          <div class="extra_footer">If You Need Any Of The Above Features , Call This Number +91 9428143971</div>
        </div>

      </div>
    </div>
  </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script type="text/javascript">
$(document).ready(function(){
      
    $('#size').click(function(){
      if($('#size').val())
      {
        $("#quantity").prop('disabled', false);
      }
      else
      {
        $("#quantity").prop('disabled', true); 
      }
    });
  });
  
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
                        	var card_id = gem[i]['id'];
                           // alert('card_id='+card_id)
                           if( a == card_id)
                           {
                            // alert('qualityid='+a);
                            $('#quantity').change(function()
               {
                  
                  var token = '{{Session::token()}}';


                  var q = $(this).val();
                  // alert('quantity='+q);

                  var data ={'q': q,'_token': token};
 
                  console.log(data);

                  $.ajax({
                      type:'POST',
                      url: "{{route('bill_total_list')}}",
                      data:data,

                      success: function(gem)
                      {
 
                        var list = "";

                        for (var i = 0; i<gem.length; i++)
                        {
               
                                
                         var qty = gem[i]['qty'];
                  			// alert(qty);

                          var price = gem[i]['price_per_book'];
                           var tot = qty * price ;
                           // alert(qty,price)

                          list += '<span name="total_price">'+tot+'</span><br>';
                          
                        }
                        document.getElementById('changeprice').innerHTML =list;
                      }
                    });
               }); 

                           }

                  			list += "<option selected disabled hidden >Select Quantity</option><option value='" +gem[i]['id'] + "'>" + gem[i]['quantity'] + " Bill Book</option>";

                        }
                        document.getElementById('quantity').innerHTML =list;
                      }
                    });
               }); 
            </script>

            

@endsection