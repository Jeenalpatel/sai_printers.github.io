@extends('client_layout.main_page')
@section('content')
<style type="text/css">
	.ban_service
{
  width: 100%;
  height: auto;
}
.ban_top
{
  padding: 170px 0 100px;
  position: relative;
  background: #10455b;
  z-index: 1;
  overflow: hidden;
}
.ban_shap
{
  width: 1050px;
  height: 100%;
  position: absolute;
  top: 0;
  left: -230px;
  transform: skewX(-30deg);
  overflow: hidden;
  z-index: 0;
}
.ban_shap:after
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
.ban_img_show
{
  margin-left: 40px;
}
.ban_img
{
  height: 400px;
  width: 70%;
}
.provide_info
{
  padding: 10px 0px 10px;
  width: 100%;
  position: relative;
  color: #f9f3ed;
  font-size: 20px;
}
.heading
{
  width: 50%;
  color: #f9f3ed;
  font-weight: 600;
  font-size: 50px;
}

.ban_form_start
{
  left: 60px;
  width: 80%;
  position: relative;
}
.ban_form
{
  width: 100%;
  padding-top: 30px;
}
.ban_form select
{
  height: 40px;
  width: 100%;
  font-size: 20px;
  border: 2px solid #f9f3ed;
  background: transparent;
  outline: none;
  color: #f9f3ed;
}
.ban_form option
{
  color: #000;
}
.ban_form lable
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
.sub_btn input:hover
{
  background-color: #f9f3ed;
  color: #10455b;
}
.sub_btn input
{
  margin-top: 30px;
  padding: 5px 20px 5px;
  font-size: 15px;
  border-radius: 20px;
  border: 1px solid #f9f3ed;
  background-color:transparent;
  transition: 0.3s;
  font-weight: 500;
  color: #f9f3ed;
}
.p_second_row
{
  padding-top: 30px;
}
.ban_size
{
  height: 40px;
  width: 100%;
}
.ban_size input
{
  color: #f9f3ed;
  width: 100%;
  background: transparent;
  font-size: 20px;
  border: 2px solid #f9f3ed;
}
.ban_size input::placeholder
{
  color: grey !important;
}
.extra_envo_info
{
  padding: 70px 0px 70px;
  width: 100%;
  background-attachment: fixed;
  background-size: cover;
  background-position: center;
  object-fit: cover;
  background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url(../img1/enov.jpg); 
}
.extra_hed
{
  font-weight: 600;
  font-size: 50px;
  color: #f9f3ed;
  text-align:center;
}
.extra_info
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
  .ban_shap {
    width: 850px;
  }
  .ban_img {
    height: 350px;
  }
}
@media (max-width: 991px)
{
  .ban_shap {
    width: 100%;
    height: 45%;
    top: 0;
    left: 0px;
    transform: skewX(0deg); 
  }
  .ban_img_show
  {
    padding-top: 0px;
    text-align: center;
    margin: 0px;
  }
  .ban_img
  {
    margin-bottom: 120px;
  }
  .extra_info
  {
    padding-left: 0px;
    width: 100%;
  }
  .extra_footer
  {
    margin-left: 0px;
    width: 100%;
  }
  .ban_form_start
  {
    left: 0px;
    width: 100%;
    padding: 0px 80px 0px;
  }
}
@media (max-width: 767px)
{
  .extra_hed
  {
    font-size: 40px;
  }
  .extra_footer
  {
    font-size: 20px;
  }
}
@media (max-width: 575px)
{
  .ban_form_start
  {
    padding: 0px 40px 0px;
  }
  .extra_envo_info
  {
    padding: 70px 40px 70px;
  }
  .ban_img {
    height: 300px;
    width: 90%;
  }
}
@media (max-width: 375px)
{
  .heading
  {
    font-size: 35px;
  }
  .provide_info , .extra_info , .extra_footer
  {
    font-size: 17px;
  }
  .extra_hed {
    font-size: 30px;
  }
}
@media (max-width: 320px)
{
  .ban_shap {
    height: 42%;
  }
 .ban_form_start {
    padding: 0px 10px 0px;
  } 
  .extra_envo_info {
    padding: 70px 0px 70px;
  }
  .ban_img {
    height: 250px;
    margin-bottom: 50px;
  }
}
</style>
<div class="ban_service">
  @forelse($data as $d)
    <div class="ban_top">
      <form action="{{route('banner_info')}}" method="post">
        @csrf
      <div class="ban_shap"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-7 col-12">
            <div class="ban_img_show">
              <img src="{{url('storage/app/category')}}{{'/'}}{{$d->image}}" class="ban_img">
              <input type="hidden" name="img1" value="{{$d->image}}">
            </div>
          </div>
          <div class="col-lg-5 col-12">
            <div class="ban_form_start">
              <div class="heading">Banner</div>
              <div class="provide_info">
                :Provide Multi Colour
              </div>
              <div class="ban_form">
                
                  <div class="row">
                    <div class="col-lg-4"><lable>Size</lable></div>
                    <div class="col-lg-8">
                      <div class="ban_size">
                        
                        <input type="text" name="t1" id="height" placeholder="Enter height">
                        <input type="text" name="t2" id="width" placeholder="Enter width">
                        
                        <!-- <button type="submit" id="submit">submit</button>
                        <input type="submit" name="" id="submit" value="Starting Design"> -->
                      
                      
                      </div>
                    </div>
                  </div>
                  <br>
                  <br>
                  <div class="row p_second_row">
                    <div class="col-lg-4"><lable>Quality</lable></div>
                    <div class="col-lg-8">
                      <select id="quality" name="quality"  >
            
        <option selected disabled hidden >select Quality</option>
        @forelse($quality as $q)
        <option value="{{$q->id}}" >{{$q->quality}}
        </option>
        @empty
        @endforelse
  </select>
                    </div>
                  </div>
                  
                  <div class="row p_second_row">
                    <div class="col-lg-4"><lable>Quantity</lable></div>
                    <div class="col-lg-8">
                      <select id="quantity" name="quantity" @if(@$data1->quality == $q->id){{'selected'}}@elseif(old('quality') == $q->id){{'selected'}}@else{{'disabled'}}@endif>
            
        <option selected disabled hidden ></option>
        @forelse($quantity as $q)
        <option value="{{$q->id}}" >{{$q->quantity}}
        </option>
        @empty
        @endforelse
  </select>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="price"><lable><i class="fa fa-inr" aria-hidden="true" style="font-size: 27px; padding-right: 3px;"></i>
                  <!-- <span id="changeprice" name="total_price" value="{{$d->price}}">{{$d->price}}</span><br> -->
                  <span id="finaltotalprice" name="finaltotalprice" value="{{$d->price}}">{{$d->price}}</span><br>
      
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

  <div class="extra_envo_info">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="extra_hed">Available Facility Of Banner</div>
        </div>
        <div class="col-lg-12">
          <div class="extra_info">
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
    $('#quality').click(function(){
      if($('#quality').val())
      {
        $("#quantity").prop('disabled', false);
      }
      else
      {
        $("#quantity").prop('disabled', true); 
      }
    });
  });


              $('#quality').change(function()
               {
                  
                  var token = '{{Session::token()}}';


                  var a = $(this).val();
                  // alert(a);


                  var data ={'a': a,'_token': token};
 
                  console.log(data);

                  $.ajax({
                      type:'POST',
                      url: "{{route('banner_quantity_list')}}",
                      data:data,

                      success: function(gem)
                      {
                        var list = "";
                        for (var i = 0; i<gem.length; i++)
                        {
                          list += "<option selected disabled hidden >Select Quantity</option><option value='" +gem[i]['id'] + "'>" + gem[i]['quantity'] + " </option>";

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


                  var s = $(this).val();
                  

                  var data ={'s': s,'_token': token};
 
                  // console.log(s,data);

                  $.ajax({
                      type:'POST',
                      url: "{{route('banner_total_list')}}",
                      data:data,

                      success: function(gem)
                      {
                        var list = "";
                        // var list2 = ""
                        for (var i = 0; i<gem.length; i++)
                        {

                          var qty = gem[i]['qty'];

                          var price = gem[i]['price_per_banner'];
                           var tot = qty * price ;
                           alert(tot);
                            var s = $('#height').val();
                            // alert(s);
                            var t = $('#width').val();
                            // alert(t);
                  
                            var total = s * t ;
                            // alert(total);
                           // alert(qty,price)
                           var finaltotal = tot * total;
                           // alert('final'+finaltotal);

                           
                          var list = "";
                          list += '<span name="finaltotalprice">'+finaltotal+'</span><br>';

                          document.getElementById('finaltotalprice').innerHTML =list;
                   
                  

                        }
                       
                      }
                    });
               }); 


            </script>




            </script>
           

@endsection