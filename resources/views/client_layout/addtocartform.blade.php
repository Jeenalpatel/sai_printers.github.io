@extends('client_layout.main_page')

@section('content')


<style type="text/css">
  body
{
  overflow-x: hidden;
}
.preview
{
  height: 250px;
  width: 450px;
  object-fit: cover;
  background-size: cover;
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
  .visi_info_get
{
  width: 100%;
  height: auto;
}
.visi_info_get .container
{
  max-width: 1400px;
}
.top_visi_info
{
  padding: 150px 0 80px;
  position: relative;
  background: #10455b;
  z-index: 1;
  overflow: hidden;
}
.info_heading
{
  text-transform: capitalize;
  color: #f9f3ed;
  font-size: 39px;
  text-align:left;
  padding-bottom: 10px;
  font-weight: 600;
}
.visi_info_shap_wp
{
  width: 850px;
  height: 100%;
  position: absolute;
  top: 0;
  left: -260px;
  transform: skewX(-30deg);
  overflow: hidden;
  z-index: 0;
}
.visi_info_shap_wp:after
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
  padding-left: 40px;
}
.visi_form_size
{
  max-width: 550px;
  left: 50px;
  position: relative;
}
.visi_info_form input,textarea
{
  height: 35px;
  margin: 15px 0px 15px;
  border: 2px solid #f9f3ed;
  width: 100%;
  color: #f9f3ed !important;
  /*padding: 10px;*/
  background-color: transparent;
}
.visi_info_form textarea
{
  height: 120px;
  resize: none;
}
.visi_info_form input::placeholder , textarea::placeholder
{
  color: #f9f3ed !important;
  opacity: .5;
}
.fainal_detail_show
{
  color: #10455b;
  font-weight: 500;
  padding-left: 45px;
  text-transform: capitalize;
}
.sub_btn:hover
{
  background-color: #f9f3ed;
  color: #10455b !important;
  font-weight: 500;
}
@media (max-width: 1199px)
{
  .visi_info_get .container
  {
    max-width: 1100px;
  }
  .ser_img_show,.fainal_detail_show
  {
    margin-left: -10px;
  }
  .visi_info_shap_wp
  {
    width: 800px;
  }
  .info_heading
  {
    font-size: 30px;
  }
  .visi_form_size
  {
    max-width: 450px;
    left: 90px;
    position: relative;
  }
  .preview
  {
      height: 250px;
      width: 80%;
  }
}
@media (max-width: 991px)
{
  .visi_info_shap_wp
  {
    width: 100%;
    height: 50%;
    left: 0px;
    transform: skewX(0deg);
  }
  .ser_img_show
  {
    text-align: center;
  }
  .preview
  {
    width: 60%;
    height: 300px;
  }
  .thum_main
  {
    padding-left: 0px;
  }
  .fainal_detail_show
  {
    padding-left: 400px;
    font-size: 20px;
    padding-bottom: 30px;
  }
  
  .visi_info_form
  {
      width: 600px;
      left: 90px;
      position: relative;
  }
  .info_heading
  {
      left: 90px;
      padding-top: 60px;
      padding-bottom: 30px;
      position: relative;
  }
}

</style>

  <div class="visi_info_get">
    <div class="top_visi_info">
      <form class="fainal_detail_show" action="{{route('cate_info_store')}}" method="post">
        @csrf
        <div class="visi_info_shap_wp"></div>
      <div class="container">
        @forelse ($a as $b)
        
        
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="row">
              <div class="col-lg-12 col-12">
                <div class="ser_img_show">
                  @forelse($data as $d)


                  <input type="hidden" name="image1" value="{{$d->image}}">
            <input type="hidden" name="image2" value="{{$d->b_image}}">
            <input type="hidden" name="categoryid" value="{{$d->cate_id}}">
          
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
                  </div>
                  @empty
                  @endforelse
                </div>
              </div>
              <div class="col-lg-12 col-12">
                
                  <div class="row">
                    <div class="col-lg-3 col-3">
                      <label>Total Price :</label>
                    </div>
                    <div class="col-lg-9 col-9">
                      <label><i class="fa fa-inr" aria-hidden="true" style="font-size: 15px; padding-right: 3px;"></i><?php
                        $total = $b->price_per_card * $b->q_value
                        ?> 
                        {{$total}}

                        <input type="hidden" name="price" value="{{$total}}">
                        <input type="hidden" name="id" value="{{$d->id}}">
                        <input type="hidden" name="category" value="{{$d->categoryname}}">
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-3">
                      <label>Quality :</label>
                    </div>
                    <div class="col-lg-9 col-9">
                      <label>{{$b->qualityname}}</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-3">
                      <label>Quantity :</label>
                    </div>
                    <div class="col-lg-9 col-9">
                      <label>{{$b->q_value}}</label>
                      <input type="hidden" name="quantity" value="{{$b->q_value}}">
                    </div>
                    <div class="col-lg-9 col-9">
                        
                        <!-- <input type="submit" name="" value="Submit"> -->
                      </div>
                  </div>
              
              </div>
            </div>
            
          </div>  
          <div class="col-lg-6 col-12">
            <div class="visi_form_size">
              <div class="row">
                <div class="col-lg-12 col-12">
                  <div class="info_heading">enter visiting card information</div>
                </div>
              </div>
              <div class="visi_info_form">
                
                  @csrf
                  <div class="row">
                    <div class="col-lg-6 col-6">
                      <input type="text" name="f_title" placeholder="First Title">
                    </div>
                    <div class="col-lg-6 col-6">
                      <input type="text" name="s_title" placeholder="Sub Title">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-12">
                      <input type="text" name="" placeholder="Address">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-6">
                      <input type="text" name="" placeholder="Phone Number">
                    </div>
                    <div class="col-lg-6 col-6">
                      <input type="text" name="" placeholder="Gst No">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-6">
                      <input type="text" name="" placeholder="Email">
                    </div>
                    <div class="col-lg-6 col-6">
                      <div class="row">
                        <div class="col-lg-2 col-2" style="color: #f9f3ed; padding: 15px 22px 0px;">Logo</div>
                        <div class="col-lg-10 col-10"><input type="file" name="" style="color: #f9f3ed; border: none; font-size: 15px;"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-12">
                      <textarea placeholder="Add Your Own Details"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-12">@if(@Auth::guard('web')->user()->name) 
                      <div class=""><input type="submit" name="" value="SUBMIT FORM"></div>
                      @else
                      <form method="POST" action="{{ route('login') }}" >
                      @csrf
                      <!-- <div class=""><input type="button" name="" id="login_click" value="ADD TO CART"></div> -->
                      <a href="#" class="menu-btn" id="login_click" style="text-decoration-style: none;">ADD TO CART</a>
                      <!-- <a href="{{route('login')}}"><button id="login_click">add to cart</button></a> -->
                    </form>
                      @endif

                    </div>
                  </div>
                
              </div>
            </div>
          </div>
        </div>
        @empty
        @endforelse
      </div>
    </div>
  </div>

   
  @endsection
