@extends('client_layout.main_page')
@section('content')
<style type="text/css">
  .lp_service
{
  width: 100%;
  height: auto;
}
.lp_top_service
{
  padding: 170px 0 100px;
  position: relative;
  background: #10455b;
  z-index: 1;
  overflow: hidden;
}
.lp_shap_wp
{
  width: 1050px;
  height: 100%;
  position: absolute;
  top: 0;
  left: -290px;
  transform: skewX(-30deg);
  overflow: hidden;
  z-index: 0;
}
.lp_shap_wp:after
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
.lp_img_show
{
  padding-left: 20px;

}
.lp_img_show .lp_img
{
  height: 550px;
  width: 50%;
  margin-bottom: 30px;
}

.heading
{
  width: 50%;
  color: #f9f3ed;
  font-weight: 600;
  font-size: 50px;
}
.provide_lp_info
{
  padding: 10px 0px 10px;
  width: 100%;
  position: relative;
  font-size: 18px;
  color: #f9f3ed;
}
.lp_form_start
{
  width: 80%;
  margin-left: 80px;
  position: relative;
}
.lp_form
{
  width: 100%;
  padding-top: 30px;
}
.lp_form select
{
  height: 40px;
  width: 100%;
  font-size: 20px;
  border: 2px solid #f9f3ed;
  background: transparent;
  color: #f9f3ed;
}
.lp_form option
{
  color: #000;
}
.lp_form lable
{
  color: #f9f3ed;
  font-size: 20px;
}
.p_second_row
{
  padding-top: 20px;
}
.price
{
  font-weight: bold;
  font-size: 30px;
  color: #f9f3ed;
  padding-top: 20px;
}
.lp_form input
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
.lp_form input:hover
{
  background-color: #f9f3ed;
  color: #10455b;
}
.sub_btn
{
  padding: 30px 0px 0px;
}

.limited_info p
{
  padding: 15px;
  width: 50%;
  text-transform: capitalize;
  font-size: 20px;
  color: #10455b;
  font-weight: 500;
  border: 2px solid #10455b;

}
.extra_lp_info
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
  .lp_shap_wp {
    width: 900px;
  }
  .lp_img_show .lp_img
  {
    height: 550px;
    width: 65%;
    margin-bottom: 30px;
  }
  .heading
  {
    width: 100%;
  }
}
@media (max-width: 991px)
{
  .lp_shap_wp {
    width: 100%;
    height: 58%;
    top: 0;
    left: 0px;
    transform: skewX(0deg); 
  }
  .lp_img_show {
    text-align: center;
    padding: 0px;
  }
  .lp_img_show .lp_img {
    width: 60%;
  }
  .limited_info p {
    width: 80%;
    margin-left: 90px;
  }
  .lp_form_start {
    width: 100%;
    padding: 130px 100px 0px;
     margin-left: 0px;
  }
  .extra_info {
    padding-left: 50px;
  }
  .extra_footer
  {
    margin-left: 0px;
    width: 100%;
  }
}
@media (max-width: 767px)
{
  .limited_info p {
    margin-left: 70px;
  }
  .extra_hed {
    font-size: 45px;
  }
  .extra_info {
    padding-left: 0px; 
    text-align: left;
  }
}
@media (max-width: 575px)
{
  .limited_info p {
    margin-left: 50px;
  }
  .lp_img_show .lp_img
  {
    height: 450px;
    width: 70%;
  }
  .extra_lp_info {
    padding: 70px 50px 70px;
  }
  .lp_form_start {
    padding: 130px 50px 0px;
  }
  .lp_shap_wp {
    width: 100%;
    height: 57%;
  }
}
@media (max-width: 480px)
{
  .extra_info {
    font-size: 17px;
  }
  .extra_hed {
    font-size: 30px;
  }
  .extra_footer {
    font-size: 20px;
  }
  .heading
  {
    font-size: 40px;
  }
}

@media (max-width: 375px)
{
  .lp_img_show .lp_img {
    height: 400px;
    width: 90%;
  }
  .limited_info p {
    margin-left: 35px;
  }
  .lp_form_start {
    padding: 80px 50px 0px;
  }
  .lp_shap_wp {
    height: 56%;
  }
}
@media (max-width: 375px)
{
  .limited_info p {
      font-size: 15px;
      margin-left: 30px;
  }
  .lp_form_start {
    padding: 80px 10px 0px;
  }
  .lp_shap_wp {
    height: 55%;
  }
  .extra_lp_info {
    padding: 70px 15px 70px;
  }
}
</style>
<div class="lp_service">
  @forelse($data as $d)
    <div class="lp_top_service">
      <form action="{{route('laterpad_info')}}" method="post">
        @csrf
      
      <div class="lp_shap_wp"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-7 col-12">
            <div class="lp_img_show">
              <div class="row">
                <div class="col-lg-12 col-12">
                 <img src="{{url('storage/app/category')}}{{'/'}}{{$d->image}}" class="lp_img">
                 <input type="hidden" name="img1" value="{{$d->image}}">
                 <input type="text" name="id" value="{{$d->id}}">
                </div>
                <div class="col-lg-12 col-12">
                  <div class="limited_info">
                    <p>only show information that is currently running.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-12">
            <div class="lp_form_start">
              <div class="heading">Letter Pad</div>
              <div class="provide_lp_info">
                :Provide Multi Colour<br>:Paper Quality 100 gsm<br>:One Book Include 100 Pages
              </div>
              <div class="lp_form">
              
                  <div class="row">
                    <div class="col-lg-4"><lable>Size</lable></div>
                    <div class="col-lg-8">
                      <select id="size" name="size" class="form-control">
                              <option selected disabled hidden >Select Size</option>
                              @forelse($size as $s)
                              <option value="{{$s->id}}" >{{$s->size}}
                              </option>
                              @empty
                              @endforelse
                              </select>
                              <!-- <input type="hidden" name="size" value="{{$s->size}}"> -->
                    </div>
                  </div>
                  <div class="row p_second_row" id="size_1_quanti">
                    <div class="col-lg-4"><lable>Quantity</lable></div>
                    <div class="col-lg-8">
                    <select id="quantity" name="quantity" @if(@$data1->size == $s->id){{'selected'}}@elseif(old('size') == $s->id){{'selected'}}@else{{'disabled'}}@endif >
                              <option selected disabled hidden ></option>
                              @forelse($quantity as $s)
                              <option value="{{$s->id}}" >{{$s->quantity}}
                              </option>
                              @empty
                              @endforelse
                              </select>
                              <!-- <input type="hidden" name="quantity" value="{{$s->quantity}}"> -->
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

              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
    @empty
    @endforelse
  </div>

  <div class="extra_lp_info">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="extra_hed">Available Facility Of Letter Pad</div>
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
                      url: "{{route('l_quantity_list')}}",
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
                  // alert(s);

                  var data ={'s': s,'_token': token};
 
                  // console.log(s,data);

                  $.ajax({
                      type:'POST',
                      url: "{{route('l_total_list')}}",
                      data:data,

                      success: function(gem)
                      {
                        var list = "";
                        // var list2 = ""
                        for (var i = 0; i<gem.length; i++)
                        {

                          var qty = gem[i]['qty'];

                          var price = gem[i]['price_per_laterpad'];
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