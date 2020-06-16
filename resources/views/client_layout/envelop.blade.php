@extends('client_layout.main_page')

@section('content')

<style type="text/css">
	.service
{
  width: 100%;
  height: auto;
}
.top_service
{
  padding: 170px 0 100px;
  position: relative;
  background: #10455b;
  z-index: 1;
  overflow: hidden;
}
.service_shap_wp
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
.service_shap_wp:after
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
.ser_img_show
{
  padding-left: 60px;
  padding-top: 40px;
}
.preview
{
  height: 250px;
  width: 65%;
}
.thum_main
{
  padding: 20px 0px 20px;
  padding-left: 50px;
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
  left: -60px;
  position: relative;
}
.visi_form
{
  width: 100%;
  padding-top: 30px;
}
.visi_form select
{
  height: 40px;
  width: 100%;
  font-size: 20px;
  border: 2px solid #f9f3ed;
  background: transparent;
  color: #f9f3ed;
}
.visi_form option
{
  color: #000;
}
.visi_form lable
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
.visi_form input
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
.visi_form input:hover
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
  text-transform: capitalize;
  font-size: 20px;
  color: #10455b;
  font-weight: 500;
  border: 2px solid #10455b;

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
  .ser_img_show {
     padding-left: 0px; 
    padding-top: 40px;
  }
  .service_shap_wp {
    width: 850px;
  }
  .limited_info p
  {
    padding: 5px;
    font-size: 18px;
  }
  .extra_hed
  {
    font-size: 40px;
  }
  .extra_info
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
  .service_shap_wp {
    width: 100%;
    height: 45%;
    top: 0;
    left: 0px;
    transform: skewX(0deg); 
  }
  .thum_main
  {
     padding-left: 0px;
     text-align: center;
  }
  .ser_img_show
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
  .extra_info
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
  .preview
  {
    height: 200px;
    width: 75%;
  } 
  .visi_form_start {
    padding: 0px 30px 0px;
  } 
  .heading {
    padding-top: 100px;
  }
  .extra_envo_info {
    padding: 70px 50px 70px;
  }
}
@media (max-width: 480px)
{
  .extra_info {
    padding-left: 0px;
    font-size: 17px;
  }
}

@media (max-width: 375px)
{
  .extra_hed {
    font-size: 30px;
  }
  .preview {
    height: 180px;
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
</style>

 <div class="service">
  @forelse($data as $d)

    <div class="top_service">
      <div class="service_shap_wp"></div>
      <form action="{{route('envelop_info')}}" method="post">
        @csrf
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 col-12">
            <div class="ser_img_show">
              <div class="row">
                <div class="col-lg-12">
                  <img id="0" class="preview" src="#"><br>
                </div>
                <div class="col-lg-12">
                  <div class="thum_main">
                    <img id="1" class="thum normal" onclick="preview(this);" src="{{url('storage/app/category')}}{{'/'}}{{$d->image}}">
                    <img id="2" class="thum normal" onclick="preview(this);" src="{{url('storage/app/category')}}{{'/'}}{{$d->b_image}}">
                    <input type="hidden" name="image1" value="{{$d->image}}">
                    <input type="hidden" name="image2" value="{{$d->b_image}}">
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
          <div class="col-lg-4 col-12">
            <div class="visi_form_start">
              <div class="heading">{{$d->categoryname}}</div>
              <div class="visi_form">
                <form>
                  <div class="row">
                    <div class="col-lg-4"><lable>Paper Quality</lable></div>
                    <div class="col-lg-8">
                      <select id="quality" name="quality" >
            
                  <option selected disabled hidden >select quality</option>
                  @forelse($equality as $s)

                  <option value="{{$s->id}}" >{{$s->quality}}
                    <input type="hidden" name="quality" value="{{$s->quality}}">

                  </option>
                  @empty
                  @endforelse

              </select>
                    </div>
                  </div>
                  <div class="row p_second_row">
                    <div class="col-lg-4"><lable>Quantity</lable></div>
                    <div class="col-lg-8">
                      <select id="quantity" name="quantity" @if(@$data1->quality == $s->id){{'selected'}}@elseif(old('quality') == $s->id){{'selected'}}@else{{'disabled'}}@endif>

            
                  <option selected disabled hidden></option>
                  @forelse($equantity as $s)
                  <option value="{{$s->id}}" >{{$s->quantity}} Bill Book
                  </option>
                  @empty
                  @endforelse
              </select>
                    </div>
                  </div>
                  <div class="row p_three_row">
                    <div class="col-lg-4"><lable>Size</lable></div>
                    <div class="col-lg-8">
                      <div class="lbl_border">
                        <label>9.25 <i class="fa fa-times" aria-hidden="true" style="font-weight: 200;"></i> 4.25</label>
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
                      <div class="price"><lable><i class="fa fa-inr" aria-hidden="true" style="font-size: 25px; padding-right: 3px;"></i></lable><lable style="font-size: 25px;"><span id="changeprice" name="total_price" value="{{$d->price}}">

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
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
    @empty
    @endforelse
  </div>

  <div class="extra_envo_info">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="extra_hed">Available Facility Of Envelope</div>
        </div>
        <div class="col-lg-12">
          <div class="extra_info">
            <div class="row">
              <div class="col-lg-3 col-3">Paper Quality :</div>
              <div class="col-lg-9 col-9 text-left" style="padding-left: 30px;">100 gsm , 90 gsm , Art Paper , 80 gsm , 110 gsm</div>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="extra_info">
            <div class="row">
              <div class="col-lg-3 col-3">Size :</div>
              <div class="col-lg-9 col-9 text-left" style="padding-left: 30px;">
                7 <i class="fa fa-times" aria-hidden="true" style="font-size: 15px;"></i> 4 , 
                9 <i class="fa fa-times" aria-hidden="true" style="font-size: 15px;"></i> 4 , 
                9.5 <i class="fa fa-times" aria-hidden="true" style="font-size: 15px;"></i> 4.5 ,
                11 <i class="fa fa-times" aria-hidden="true" style="font-size: 15px;"></i> 5 , 
                8.5 <i class="fa fa-times" aria-hidden="true" style="font-size: 15px;"></i> 6.5 , 
                8.5 <i class="fa fa-times" aria-hidden="true" style="font-size: 15px;"></i> 11.5 , 
                13 <i class="fa fa-times" aria-hidden="true" style="font-size: 15px;"></i> 19
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
                      url: "{{route('e_quantity_list')}}",
                      data:data,

                      success: function(gem)
                      {
                        var list = "";
                        for (var i = 0; i<gem.length; i++)
                       {
                        var card_id = gem[i]['id'];
                        
                        if(a == card_id)

                          $('#quantity').change(function()
               {
                  
                  var token = '{{Session::token()}}';


                  var q = $(this).val();
                  

                  var data ={'q': q,'_token': token};
 
                  console.log(data);

                  $.ajax({
                      type:'POST',
                      url: "{{route('e_total_list')}}",
                      data:data,

                      success: function(gem)
                      {
 
                        var list = "";

                        for (var i = 0; i<gem.length; i++)
                        {
               
                                
                         var qty = gem[i]['qty'];
                        // alert(qty);

                          var price = gem[i]['price_per_envelop'];
                           var tot = qty * price ;
                           // alert(qty,price)

                          list += '<span name="total_price">'+tot+'</span><br>';
                          
                        }
                        document.getElementById('changeprice').innerHTML =list;
                      }
                    });
               }); 
                        list += "<option selected disable hidden>Select Quantity</option><option value='" +gem[i]['id'] + "'>" + gem[i]['quantity'] + " </option>";

                        }
                        document.getElementById('quantity').innerHTML =list;
                      }
                    });
               }); 
            </script>


@endsection