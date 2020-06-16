@extends('client_layout.main_page')
@section('content')
<style type="text/css">
	.hand_service
{
  width: 100%;
  height: auto;
}
.top_hand_service
{
  padding: 150px 0 100px;
  position: relative;
  background: #10455b;
  z-index: 1;
  overflow: hidden;
}
.hand_service_shap_wp
{
  width: 1000px;
  height: 100%;
  position: absolute;
  top: 0;
  left: -300px;
  transform: skewX(-30deg);
  overflow: hidden;
  z-index: 0;
}
.hand_service_shap_wp:after
{
  content: "";
  display: block;
  position: absolute;
  background: #f9f3ed;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  opacity: .9;
}
.hand_ser_img_show
{
  padding-left: 60px;
}
.hand_preview
{
  height: 500px;
  width: 70%;
}
.thum_main
{
  padding: 20px 0px 20px;
  padding-left: 50px;
  display: none;
}
.thum
{
  height: 70px;
  width: 100px;
  cursor: pointer;
}
.selector
{
  border: 5px solid #10455b;
}
.heading
{
  width: 50%;
  color: #f9f3ed;
  font-weight: 600;
  font-size: 50px;
}

.visi_form_start
{
  /* padding-left: 100px; */
  padding-left: -100px;
  left: 150px;
  width: 70%;
  position: relative;
}
.hand_form
{
  width: 100%;
  padding-top: 30px;
}
.hand_form select
{
  height: 40px;
  width: 100%;
  font-size: 20px;
  border: 2px solid #f9f3ed;
  background: transparent;
  color: #f9f3ed;
  outline: none;
}
.hand_form option
{
  color: #000;
  height: 9px;
  font-size: 15px;
}
.hand_form lable
{
  color: #f9f3ed;
  font-size: 20px;
}
.price
{
  font-weight: bold;
  font-size: 30px;
  padding-top: 20px;
}
.hand_form input
{
  padding: 5px 20px 5px;
  font-size: 15px;
  border-radius: 20px;
  border: 1px solid #f9f3ed;
  background-color:transparent;
  transition: 0.3s;
  font-weight: 500;
  color: #f9f3ed;
}
.hand_form input:hover
{
  background-color: #f9f3ed;
  color: #10455b;
}
.sub_btn
{
  padding: 30px 0px 0px;
}
.p_second_row,.p_three_row
{
  padding-top: 30px;
}
.lbl_border
{
  height: 40px;
  width: 100%;
  border: 2px solid #f9f3ed;
  background: transparent;
  color: #f9f3ed;
  font-size: 20px;
  padding-left: 10px;
}
.limited_info p
{
  padding: 15px;
  width: 55%;
  top: 10px;
  position: relative;
  text-transform: capitalize;
  font-size: 20px;
  color: #10455b;
  font-weight: 500;
  border: 2px solid #10455b;

}
.extra_hand_info
{
  padding: 70px 0px 70px;
  width: 100%;
  background-attachment: fixed;
  background-size: cover;
  /*background-position: center;*/
  object-fit: cover;
  background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url(../img1/handbill.jpg); 
}
.hand_hed
{
  font-weight: 600;
  font-size: 50px;
  color: #f9f3ed;
  text-align:center;
}
.hand_info
{
  font-size: 20px;
  text-align: right;
  color: #f9f3ed;
  padding-left: 150px;
  padding-top: 50px;
}
.extra_footer
{
    color: #f9f3ed;
    padding: 20px;
    font-size: 25px;
    width: 80%;
    text-align: center;
    margin-top: 60px;
    margin-left: 120px;
    border: 2px solid #f9f3ed;
}
@media (max-width: 1199px)
{
  .hand_ser_img_show {
     padding-left: 0px; 
  }
  .hand_service_shap_wp {
    width: 880px;
  }
  .limited_info p
  {
    padding: 5px;
    font-size: 18px;
  }
  .hand_hed
  {
    font-size: 40px;
  }
  .hand_info
  {
    text-align: left;
  }
  .extra_footer
  {
    font-size: 20px;
  }
}

@media (max-width: 991px)
{
  .hand_service_shap_wp {
    width: 100%;
    height: 50%;
    top: 0;
    left: 0px;
    transform: skewX(0deg); 
  }
  .hand_preview {
    width: 50%;
  }
  .thum_main
  {
     padding-left: 0px;
     text-align: center;
  }
  .hand_ser_img_show
  {
    padding-top: 0px;
    text-align: center;

  }
  .limited_info p
  {
    width: 70%;
    position: relative;
    left: 150px;
  }
  .visi_form_start
  {
    left: 0px;
    width: 100%;
    padding: 0px 100px 0px;
  }
  .heading
  {
    padding-top: 160px;
  }
  .hand_info
  {
    padding-left: 0px;
  }
  .extra_footer
  {
    margin-left: 0px;
    width: 100%;
  }
}


@media (max-width: 767px)

{
  .limited_info p
  {
    left: 100px;
  }
  
}

@media (max-width: 575px)

{
  .limited_info p
  {
    left: 80px;
  }
  .hand_preview
  {
    height: 500px;
    width: 75%;
  } 
  .visi_form_start {
    padding: 0px 30px 0px;
  } 
  .heading {
    padding-top: 100px;
  }
  .extra_hand_info {
    padding: 70px 50px 70px;
  }
}
@media (max-width: 480px)
{
  .hand_info {
    padding-left: 0px;
    font-size: 17px;
  }
  .limited_info p {
    left: 65px;
  }
}

@media (max-width: 375px)
{
  .hand_hed {
    font-size: 30px;
  }
  .hand_preview {
    width: 90%;
  }
  .limited_info p {
    left: 50px;
  }
  .extra_footer {
    font-size: 19px;
  }
  .heading {
    font-size: 40px;
  }
}
@media (max-width: 375px)
{
  .hand_preview {
    height: 400px;
  }
  .limited_info p {
    top: 20px;
  }
}
</style>

 <div class="hand_service">
  


  <form action="{{route('handbill_info')}}" method="post">
    @csrf
  @forelse($data as $d)
    <div class="top_hand_service">
      <div class="hand_service_shap_wp"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="hand_ser_img_show">
              <div class="row">
                <div class="col-lg-12">
                  <img id="0" class="hand_preview" src="#"><br>
                </div>
                <div class="col-lg-12">
                  <div class="thum_main" style="display: none;" id="thum_show">
                    <img id="1" class="thum normal" onclick="hand_preview(this);" src="{{url('storage/app/category')}}{{'/'}}{{$d->image}}">
                    <img id="2" class="thum normal" onclick="hand_preview(this);" src="{{url('storage/app/category')}}{{'/'}}{{$d->b_image}}">
                    <input type="hidden" name="img1" value="{{$d->image}}">
                    <input type="hidden" name="img2" value="{{$d->b_image}}">
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
            <div class="visi_form_start">
              <div class="heading">Handbill</div>
              <div class="hand_form">
                <form>
                  <div class="row">
                    <div class="col-lg-4"><lable>Size</lable></div>
                    <div class="col-lg-8">
                      <select id="size" name="size" required >
            
        <option selected disabled hidden >select Size</option>
        @forelse($hsize as $q)
        <option value="{{$q->id}}" >{{$q->size}}
        </option>
        @empty
        @endforelse
  </select>
                    </div>
                  </div>
                  <div class="row p_second_row">
                    <div class="col-lg-4"><lable>Quantity</lable></div>
                    <div class="col-lg-8">
                      <select id="quantity" name="quantity" data-dependent="side1" @if(@$data1->size == $q->id){{'selected'}}@elseif(old('size') == $q->id){{'selected'}}@else{{'disabled'}}@endif>
                  <option selected disabled hidden ></option>
                  @forelse($hquantity as $q)
                  <option value="{{$q->id}}">{{$q->quantity}}</option>
                  @empty
                  @endforelse
                </select>
                    </div>
                  </div>
                  <div class="row p_second_row">
                    <div class="col-lg-4"><lable>Side</lable></div>
                    <div class="col-lg-8">
                    
                      <select name="side1" id="side1" @if(@$data1->quantity == $q->id){{'selected'}}@elseif(old('quantity') == $q->id){{'selected'}}@else{{'disabled'}}@endif>
                  <option selected disabled hidden ></option>
                  @forelse($hside as $q)
                  <option>{{$q->side}}</option>
                  @empty
                  @endforelse
                </select>
                    </div>
                  </div>
                  <div class="row p_three_row">
                    <div class="col-lg-4"><lable>Paper Quality</lable></div>
                    <div class="col-lg-8">
                      <div class="lbl_border">
                        <label>90 Gsm Art</label>
                      </div>
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
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="price"><lable><i class="fa fa-inr" aria-hidden="true" style="font-size: 27px; padding-right: 3px;"></i>
                  <span id="changeprice" name="total_price" value="{{$d->price}}">{{$d->price}}</span><br>
                  
                  </lable>
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
  </form>
    @empty
    @endforelse
    
  </div>

  <div class="extra_hand_info">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="hand_hed">Available Facility Of Handbill</div>
        </div>
        <div class="col-lg-12">
          <div class="hand_info">
            <div class="row">
              <div class="col-lg-3 col-3">Paper Quality :</div>
              <div class="col-lg-9 col-9 text-left" style="padding-left: 30px;">70 gsm , 80 gsm , 54 gsm , 68 gsm , 50 gsm</div>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="hand_info">
            <div class="row">
              <div class="col-lg-3 col-3">Size :</div>
              <div class="col-lg-9 col-9 text-left">
                1/8 , 1/10 , 1/5 , 1/6 , 1/4 , 1/16
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="hand_info">
            <div class="row">
              <div class="col-lg-3 col-3">Colour :</div>
              <div class="col-lg-9 col-9 text-left" style="padding-left: 30px;">Singli Colour , Two Colour , Multi Colour</div>
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

      $(document).ready(function(){
    $('#quantity').click(function(){
      if($('#quantity').val())
      {
        $("#side1").prop('disabled', false);
      }
      else
      {
        $("#side1").prop('disabled', true); 
      }
    });
  });

              $('#size').change(function()
               {
                  
                  var token = '{{Session::token()}}';


                  var a = $(size).val();
                  // alert('quality(a)='+a);

                  var data ={'a': a,'_token': token};
 
                  // console.log(data);

                  $.ajax({
                      type:'POST',
                      url: "{{route('h_quantity_list')}}",
                      data:data,

                      success: function(gem)
                      {
                        var list = "";
                        for (var i = 0; i<gem.length; i++)
                        {
                           var card_id = gem[i]['id'];
                           // alert('card_id='+card_id)
                           
                          list += "<option value='" +gem[i]['id'] + "'>" + gem[i]['quantity'] + "</option>";

                        }
                        document.getElementById('quantity').innerHTML =list;
                      }
                    });
               }); 



               $('#quantity').change(function()
               {
                  
                  var token = '{{Session::token()}}';

                  var q = $(this).val();
                  alert('quantity='+q);
                  // alert(a);

                  var data ={'q': q,'_token': token};
 
                  console.log(data);

                  $.ajax({
                      type:'POST',
                      url: "{{route('h_side_list1')}}",
                      data:data,

                      success: function(gem)
                      {
 
                        var list = "";

                        for (var i = 0; i<gem.length; i++)
                        {
               
                                
                          list += "<option selected disable hidden>Select Side</option><option value='" +gem[i]['id'] + "'>" + gem[i]['side'] + "</option>";

                        }
                        document.getElementById('side1').innerHTML =list;
                      }
                    });
               }); 
            </script>

            <script type="text/javascript">

              $('#side1').change(function()
               {
                  
                  var token = '{{Session::token()}}';


                  var s = $(this).val();
                  // alert(s);

                  var data ={'s': s,'_token': token};
 
                  // console.log(s,data);

                  $.ajax({
                      type:'POST',
                      url: "{{route('h_total_list')}}",
                      data:data,

                      success: function(gem)
                      {
                        var list = "";
                        // var list2 = ""
                        for (var i = 0; i<gem.length; i++)
                        {

                          var qty = gem[i]['qty'];

                          var price = gem[i]['price_per_handbill'];
                           var tot = qty * price ;
                           // alert(qty,price)

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