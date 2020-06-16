@extends('client_layout.main_page')

@section('content')
  


<div class="service">
  @forelse($data as $d)
<div class="top_service">
    <div class="service_shap_wp"></div>
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-6">
        <div class="ser_img_show">
          <form method="post" action="{{route('visitingcard_info')}}">
            {{csrf_field()}}
            <input type="hidden" name="image1" value="{{$d->image}}">
            <input type="hidden" name="image2" value="{{$d->b_image}}">
          
        <div class="row">
          <div class="col-lg-12">
            <img id="0" class="preview" name="img1" src="{{url('storage/app/category')}}{{'/'}}{{$d->image}}"><br>
          </div>
          <div class="col-lg-12">
            <div class="thum_main">
              <img id="1" class="thum normal" onclick="preview(this);" src="{{url('storage/app/category')}}{{'/'}}{{$d->image}}">
              <img id="2" class="thum normal" onclick="preview(this);" src="{{url('storage/app/category')}}{{'/'}}{{$d->b_image}}">
            </div>
          </div>
        </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="visi_form_start">
        <div class="heading">{{$d->categoryname}}</div>
        <div class="visi_form">
          
            <div class="row">

              <div class="col-lg-4"><lable>Paper quality</lable></div>
              <div class="col-lg-8">

                <select id="q_name" name="quality"  >
            
        <option selected disabled hidden >select Quality</option>
        @forelse($quality as $q)
        <option value="{{$q->id}}" >{{$q->q_name}}
        </option>
        @empty
        @endforelse
  </select>
              </div>
            </div>
            <div class="row p_second_row">
              <div class="col-lg-4"><lable>quantity</lable></div>
              <div class="col-lg-8">
                <select id="quantity" name="quantity" @if(@$data123->q_name == $q->id){{'selected'}}@elseif(old('q_name') == $q->id){{'selected'}}@else{{'disabled'}}@endif >

                  <option selected disabled hidden ></option>
                  @forelse($quantity as $q)
                  <option value="{{$q->id}}">{{$q->q_value}}</option>
                  @empty
                  @endforelse
                </select>
              </div>
            </div>
            <div class="row p_three_row">
              <div class="col-lg-4"><lable>Side</lable></div>
              <div class="col-lg-8">
                <select name="side" id="side" @if(@$data123->quantity == $q->id){{'selected'}}@elseif(old('quantity') == $q->id){{'selected'}}@else{{'disabled'}}@endif>
                  <option selected disabled hidden ></option>
                  @forelse($side as $q)
                  <option>{{$q->side}}</option>
                  @empty
                  @endforelse
                </select>
              </div>
            </div>
            <div class="row">
            
              <div class="col-lg-12">
                <div class="price"><lable><i class="fa fa-inr" aria-hidden="true" style="font-size: 27px; padding-right: 3px;"></i>
                  <span id="changeprice" name="total_price" value="{{$d->price}}">{{$d->price}}</span><br>
                  <!-- <input type="text" name="total_price" id="changeprice" value="{{$d->price}}"> -->
                  <!-- <input type="text" id="changeprice" name="total_price1" values="{{$d->price}}"> -->
                  <!-- <span name="t1">{{$d->price}}</span> -->

                  </lable> 
                </div>
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
        </div>
      </div>
    </div>
  </div>
</div>
@empty
@endforelse
</div>

<div class="price_list">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-7">
        <div class="visi_type_show"><span id="listname" name="listname" value="">Listname</span></div>
        <div class="visi_price_info">
          <div class="price_col_title">
            <div class="row" style="border-bottom: 2px solid #10455b; padding-bottom: 20px;">
              <div class="col-lg-3 col-3">Quantity</div>
              <div class="col-lg-3 col-3">Price per piece</div>
              <div class="col-lg-3 col-3">Side</div>
              <div class="col-lg-3 col-3">Total price</div>
            </div>
            <div class="price_col_val">
              @forelse($quality as $q)
              <div class="visi_rate" id="{{$q->q_name}}" style="display: none;">
                @forelse($quantity as $qt)
                <div class="row" style="border-bottom: 2px solid #10455b; padding: 10px 0px 10px;">
                  @forelse($data1 as $d)
                  
                  <div class="col-lg-3 col-3">{{$d->quantity}}</div>
                  <div class="col-lg-3 col-3">{{$d->price_per_card}}</div>
                  <div class="col-lg-3 col-3">{{$d->sideofcard}}</div>
                  <div class="col-lg-3 col-3"></div>
                  
                  @empty
                  @endforelse


                </div>
                @empty
                @endforelse
              </div>
              @empty
              @endforelse

            @forelse($data1 as $p)  
              <div class="visi_rate" id="qty" style="display: none;">
                <div class="row" style="border-bottom: 2px solid #10455b; padding: 10px 0px 10px;">
                  <div class="col-lg-3 col-3">{{$p->quantity}}</div>
                  <div class="col-lg-3 col-3">{{$p->price_per_card}}</div>
                  <div class="col-lg-3 col-3">{{$p->sideofcard}}</div>
                  <div class="col-lg-3 col-3"></div>
                </div>
              </div>
              @empty
              @endforelse
              
            </div>
          </div>
        
        <div class="rendom_choice">
          <div class="row">
            <div class="col-lg-12">
              <p>If you Want More Than 3000 Quantity .....
              Contact On +91 9428143971</p>
            </div>
          </div>
        </div>

        </div>

      </div>
      <div class="col-lg-5">
        <div class="set_price_img">
          <div class="set_price_img_set">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="Quality_info">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="q_i_up">
          <div class="row">
            <div class="col-lg-4 col-md-4">
              <div class="q_box">
                <div class="q_i_1">
                  <img src="{{asset('c_asset/img1/matte.jpg')}}">
                </div>
                <div class="q_i_dis">
                  <h1>Matte Card</h1>
                  <p>Standout cards with a rich, polished look.<br>
                  Great for readability<br>
                  Easy to write on</p>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="q_box">
                <div class="q_i_2">
                  <img src="{{asset('c_asset/img1/non_tareble.jfif')}}">
                </div>
                <div class="q_i_dis">
                  <h1>Non Tearable</h1>
                  <p>Tough, Resilient and Tear-free.<br>
                  Cards made more durable, printed on non-tearable paper.<br>
                  Manufactured using Non-Tearable card of 200 micron thickness.<br>
                  A Non-Tearable Card measures 3.5 x 2 inches.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="q_box">
                <div class="q_i_3">
                  <img src="{{asset('c_asset/img1/matte_uv.jpg')}}">
                </div>
                <div class="q_i_dis">
                  <h1>Matte UV</h1>
                  <p>
                    UV Coating can be reflective and glossy and has a high solids level that allows the coating to be applied in very thin films.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="q_i_down">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="q_box">
                <div class="q_i_4">
                  <img src="{{asset('c_asset/img1/matte_dai_cut.jpg')}}">
                </div>
                <div class="q_i_dis">
                  <h1>Dai Cut</h1>
                  <p>Die cutting can be used either to punch out a decorative shape or pattern within a piece or to create an interesting outer shape for your business card design.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="q_box">
                <div class="q_i_5">
                  <img src="{{asset('c_asset/img1/tarable.jfif')}}">
                </div>
                <div class="q_i_dis">
                  <h1>Tearable</h1>
                  <p>
                    
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script type="text/javascript">

$(document).ready(function(){
    $('#q_name').click(function(){
      if($('#q_name').val())
      {
        $("#quantity").prop('disabled', false);
      }
      else
      {
        $("#quantity").prop('disabled', true); 
      }
    });
  });


$(document).ready(function(){
    $('#quantity').click(function(){
      if($('#quantity').val())
      {
        $("#side").prop('disabled', false);
      }
      else
      {
        $("#side").prop('disabled', true); 
      }
    });
  });

 

              $('#q_name').change(function()
               {
                  
                  var token = '{{Session::token()}}';


                  var a = $(this).val();
                  

                  var data ={'a': a,'_token': token};
 
                  // console.log(data);

                  $.ajax({
                      type:'POST',
                      url: "{{route('quantity_list1')}}",
                      data:data,

                      success: function(gem)
                      {
                        var list = "";
                        for (var i = 0; i<gem.length; i++)
                        {
                           var card_id = gem[i]['id'];
                           // alert('card_id='+card_id)
                           
                          list += "<option selected disabled hidden >Select Quantity</option><option value='" +gem[i]['id'] + "'>" + gem[i]['q_value'] + "</option>";

                        }
                        document.getElementById('quantity').innerHTML =list;
                      }
                    });
               }); 


              $('#quantity').change(function()
               {
                  
                  var token = '{{Session::token()}}';


                  var q = $(this).val();
                  

                  var data ={'q': q,'_token': token};
 
                  console.log(data);

                  $.ajax({
                      type:'POST',
                      url: "{{route('side_list1')}}",
                      data:data,

                      success: function(gem)
                      {
 
                        var list = "";

                        for (var i = 0; i<gem.length; i++)
                        {
               
                                
                          list += "<option selected disable hidden>Select Side</option><option value='" +gem[i]['id'] + "'>" + gem[i]['side'] + "</option>";

                        }
                        document.getElementById('side').innerHTML =list;
                      }
                    });
               }); 

            </script>

            <script type="text/javascript">

              $('#side').change(function()
               {
                  
                  var token = '{{Session::token()}}';


                  var s = $(this).val();
                  // alert(s);

                  var data ={'s': s,'_token': token};
 
                  // console.log(s,data);

                  $.ajax({
                      type:'POST',
                      url: "{{route('total_list')}}",
                      data:data,

                      success: function(gem)
                      {
                        var list = "";
                        // var list2 = ""
                        for (var i = 0; i<gem.length; i++)
                        {

                          var qty = gem[i]['qty'];

                          var price = gem[i]['price_per_card'];
                           var tot = qty * price ;
                           

                          list += '<span name="total_price">'+tot+'</span><br>';
                          // list2 += '<input type"text" name="total_price">"++'"'
                            

                        }
                        document.getElementById('changeprice').innerHTML =list;
                        // document.getElementById('changeprice').innerHTML =list2;
                        // $('#changeprice').append('Rp'+tot+'');


                        // c = $('#changeprice span').text(tot);
                        // alert(c);
                      }
                    });
               }); 

</script>

  @endsection



 