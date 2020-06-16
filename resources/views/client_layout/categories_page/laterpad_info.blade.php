@extends('client_layout.main_page')
@section('content')
<style type="text/css">
  .lp_get_service
{
  width: 100%;
  height: auto;
}
.lp_get_top_service
{
  padding: 170px 0 100px;
  position: relative;
  background: #10455b;
  z-index: 1;
  overflow: hidden;
}
.lp_get_shap
{
  width: 950px;
  height: 100%;
  position: absolute;
  top: 0;
  left: -320px;
  transform: skewX(-30deg);
  overflow: hidden;
  z-index: 0;
}
.lp_get_shap:after
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
.lp_get_img_show
{
  padding-left: 30px;
}
.lp_img
{
  height: 550px;
  width: 50%;
  margin-bottom: 30px;
}
.lp_get_form_size
{
  left: -30px;
  position: relative;
}
.info_heading
{
  text-transform: capitalize;
  color: #f9f3ed;
  font-size: 40px;
  text-align:left;
  padding-bottom: 10px;
  font-weight: 600;
}
.lp_info_form input,textarea
{
  height: 35px;
  margin: 15px 0px 15px;
  border: 2px solid #f9f3ed;
  width: 100%;
  color: #f9f3ed !important;
  background-color: transparent;
}
.lp_info_form textarea
{
  height: 120px;
  resize: none;
}
.lp_info_form input::placeholder , textarea::placeholder
{
  color: #f9f3ed !important;
  opacity: .5;
}
.sub_btn:hover
{
  background-color: #f9f3ed;
  color: #10455b !important;
  font-weight: 500;
}
.lp_get_note p
{
  color: #f9f3ed;
  padding: 10px 0px 10px;
  width: 100%;
  font-size: 20px;
  position: relative;
}
.fainal_detail_show
{
  color: #10455b;
  font-weight: 500;
  text-transform: capitalize;
}
@media (max-width: 1199px)
{
  .lp_get_shap
  {
    width: 810px;
    left: -340px;
  }
  .lp_get_form_size
  {
    left: 0px;
  }
  .lp_img
  {
    height: 500px;
    width: 60%;
    margin-bottom: 30px;
  }
  .lp_get_img_show
  {
    padding-left: 0px;
    margin-top: -50px;
  }
}
@media (max-width: 991px)
{
  .lp_get_shap
  {
    width: 100%;
    height: 49%;
    transform: skewX(0deg);
    left: 0px;
    top: 0px;
  }
  .lp_get_img_show
  {
    text-align: center;
    padding: 0px;
    margin: 0px;
  }
  .lp_img {
    width: 55%;
    height: 550px;
  }
  .fainal_detail_show
  {
    width: 50%;
    text-align: left;
    margin-left: 380px;
  }
  .lp_get_form_size
  {
    width: 100%;
    padding: 100px 120px 0px;
    text-align: center;
  }
}
@media (max-width: 767px)
{
  .fainal_detail_show
  {
    width: 80%;
    text-align: left;
    margin-left: 260px;
  }
  .lp_get_shap
  {
    height: 42%;
  }
  .lp_get_form_size
  {
    padding: 100px 80px 0px;
  }
}
@media (max-width: 575px)
{
  .lp_get_shap
  {
    height: 38%;
  }
  .lp_img
  {
    height: 450px;
    width: 70%;
  }
  .fainal_detail_show
  {
    margin-left: 190px;
  }
}
@media (max-width: 480px)
{

  .fainal_detail_show {
      margin-left: 150px;
      width: 100%;
  }
  .lp_get_form_size
  {
    padding: 100px 40px 0px;
  }
}
@media (max-width: 375px)
{
  .lp_img {
    height: 400px;
    width: 90%;
  }
  .fainal_detail_show
  {
    font-size: 14px;
      margin-left: 100px;
  }
  .lp_get_shap
  {
    height: 37%;
  }
  .info_heading
  {
    font-size: 30px;
  }
}
@media (max-width: 320px)
{
  .lp_get_shap
  {
    height: 36%;
  }
  .fainal_detail_show
  {
      margin-left: 80px;
    font-size: 11px;
  }
  .lp_get_form_size
  {
    padding: 50px 10px 0px;
  }
}
</style>
 <div class="lp_get_service">
  @forelse($a as $b)
  


  @forelse($data as $d)

 

  
  <form action="{{route('cate_info_store')}}" method="post">
    @csrf
    <div class="lp_get_top_service">
      <div class="lp_get_shap"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-7 col-12">
            <div class="lp_get_img_show">
              <div class="row">
                <div class="col-lg-12">
                  <img src="{{url('storage/app/category')}}{{'/'}}{{$d->image}}" class="lp_img">
                  <input type="hidden" name="image1" value="{{$d->image}}">
                  <input type="hidden" name="categoryid" value="{{$d->cate_id}}">
                  <input type="text" name="id" value="{{$d->id}}">
                   <input type="hidden" name="category" value="{{$d->categoryname}}">
                </div>
                <div class="col-lg-12 col-12">
                  <form class="fainal_detail_show">
                    <div class="row">
                      <div class="col-lg-3 col-3">
                        <label>Price :</label>
                      </div>
                      <div class="col-lg-9 col-9">
                        <label><i class="fa fa-inr" aria-hidden="true" style="font-size: 15px; padding-right: 3px;"></i><?php
                          $total = $b->price_per_laterpad * $b->quantity1
                        ?></label>
                        {{$total}}
                        <input type="hidden" name="price" value="{{$total}}">
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-lg-3 col-3">
                        <label>Quantity :</label>
                      </div>
                      <div class="col-lg-9 col-9">
                        <label>{{$b->quantity1}}</label>
                        <input type="hidden" name="quantity" value="{{$b->quantity1}}">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-3">
                        <label>Size :</label>
                      </div>
                      <div class="col-lg-9 col-9">
                        <label>{{$b->size11}}</label>
                        <input type="hidden" name="size" value="{{$b->size11}}">
                      </div>
                    </div>
                    
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-12">
            <div class="lp_get_form_size">
              <div class="row">
                <div class="col-lg-12 col-12">
                  <div class="info_heading">enter Letter Pad information</div>
                </div>
              </div>
              <div class="lp_info_form">
                
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                      <input type="text" name="title" placeholder="Title">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <input type="text" name="" placeholder="Website Link">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-12">
                      <textarea placeholder="Address" style="height: 70px;"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-12">
                      <textarea placeholder="Product Sale(Manufacturing)" style="height: 100px; margin-top: 10px;"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                      <input type="text" name="" placeholder="Phone Number">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <input type="text" name="" placeholder="Registration No">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                      <input type="text" name="" placeholder="Pan No">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <input type="text" name="" placeholder="GST No">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                      <input type="text" name="" placeholder="Email">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <div class="row">
                        <div class="col-lg-2 col-2" style="color: #f9f3ed; padding: 15px 22px 0px;">Logo</div>
                        <div class="col-lg-10 col-10"><input type="file" name="" style="color: #f9f3ed; border: none; font-size: 15px;"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-12">
                      <textarea placeholder="If You Want Extra Detail Type Here"></textarea>
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
                      <a href="#" class="menu-btn" id="login_click" style="text-decoration-style: none;">ADD TO CART</a>
                      <!-- <a href="{{route('login')}}"><button id="login_click">add to cart</button></a> -->
                    </form>
                      @endif

                      <!-- <input type="submit" name="submit" value="Submit"> -->
                      
                    </div>
                  </div>
               
              </div>
              <div class="lp_get_note">
                <div class="row">
                  <div class="col-lg-12">
                    <p>Note: Feel The Details As Per Your Requirement</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
    @empty
    @endforelse
    @empty
    @endforelse
  </div>




@endsection