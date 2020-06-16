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
  width: 980px;
  height: 100%;
  position: absolute;
  top: 0;
  left: -260px;
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
  padding-left: 30px;
}
.preview
{
  height: 250px;
  width: 75%;
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
.envo_form_size
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
.envo_info_form input,textarea
{
  height: 35px;
  margin: 15px 0px 15px;
  border: 2px solid #f9f3ed;
  width: 100%;
  color: #f9f3ed !important;
  background-color: transparent;
}
.envo_info_form textarea
{
  height: 120px;
  resize: none;
}
.envo_info_form input::placeholder , textarea::placeholder
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
.fainal_detail_show
{
  color: #10455b;
  font-weight: 500;
  text-transform: capitalize;
}
@media (max-width: 1199px)
{
  .service_shap_wp
  {
    width: 800px;
  }
  .envo_form_size
  {
    left: 0px;
  }
}

@media (max-width: 991px)
{
  .service_shap_wp
  {
    width: 100%;
    height: 50%;
    transform: skewX(0deg);
    left: 0px;
    top: 0px;
  }
  .ser_img_show
  {
    padding-left: 0px;
    left: 120px;
    position: relative;
  }
  .thum_main
  {
    padding-left: 250px;
  }
  .fainal_detail_show
  {
    position: relative;
    left: 200px;
    padding-bottom: 150px;
  }
  .preview
  {
    height: 250px;
    width: 75%;
  }
  .envo_form_size
  {
    width: 600px;
    left: 180px;
  }
}
@media (max-width: 767px)
{
  .ser_img_show
  {
    left: 85px;
  }
  .thum_main {
      padding-left: 180px;
  }
  .fainal_detail_show
  {
    left: 150px;
  }
  .envo_form_size
  {
    left: 60px;
  }
  .service_shap_wp
  {
    height: 45%;
  }
}
@media (max-width: 575px)
{
  .preview
  {
    height: 200px;
  }
  .ser_img_show
  {
    left: 65px;
  }
  .thum_main
  {
    padding-left: 100px;
  }
  .fainal_detail_show {
      left: 100px;
      padding-bottom: 0px;
  }
  .envo_form_size
  {
    width: 100%;
    left: 0px;
    top: 80px;
    padding: 0px 50px 0px;
  }

}
@media (max-width: 480px)
{
  .ser_img_show {
      left: 55px;
  }
  .thum_main {
      padding-left: 70px;
  }
  .fainal_detail_show {
      left: 80px;
  }
}
@media (max-width: 375px)
{
  .preview {
      height: 150px;
  }
  .ser_img_show,.fainal_detail_show
  {
    left: 40px;
  }
  .fainal_detail_show
  {
    left: 60px;
    font-size: 14px;
  }
  .service_shap_wp
  {
    height: 43%;
  }
  .thum_main {
      padding-left: 30px;
  }
  .info_heading
  {
    font-size: 30px;
  }
}
@media (max-width: 320px)
{
  .envo_form_size
  {
    padding: 0px;
  }
  .service_shap_wp
  {
    height: 41%;
  }
  .thum
  {
    height: 60px;
  }
  .thum_main
  {
    padding-left: 10px;
  }
  .fainal_detail_show
  {
    left: 40px;
    font-size: 11px;
  }
}
</style>

 <div class="service">
  @forelse($data as $d)

  <form action="{{route('cate_info_store')}}" method="post">
    @csrf
    <div class="top_service">
      <div class="service_shap_wp"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-7 col-12">
            <div class="ser_img_show">
              <div class="row">
                <div class="col-lg-12 col-12">
                  <img id="0" class="preview" src="#"><br>
                </div>
                <div class="col-lg-12 col-12">
                  <div class="thum_main">
                    <img id="1" class="thum normal" onclick="preview(this);" src="{{url('storage/app/category')}}{{'/'}}{{$d->image}}">
                    <img id="2" class="thum normal" onclick="preview(this);" src="{{url('storage/app/category')}}{{'/'}}{{$d->b_image}}">
                    <input type="hidden" name="categoryid" value="{{$d->cate_id}}">
                    <input type="hidden" name="image1" value="{{$d->image}}">
                  </div>
                </div>
                <div class="col-lg-12 col-12">
                  @forelse($a as $b)
                  
                  <form class="fainal_detail_show">

                    <div class="row">
                      <div class="col-lg-3 col-3">
                        <label>Price :</label>
                      </div>
                      <div class="col-lg-9 col-9">
                        <label><i class="fa fa-inr" aria-hidden="true" style="font-size: 15px; padding-right: 3px;"></i><?php
                          $total = $b->price_per_envelop * $b->quantity1

                          ?></label>
                          {{$total}}
                          <input type="hidden" name="price" value="{{$total}}">
                        <input type="hidden" name="id" value="{{$d->id}}">
                        <input type="hidden" name="category" value="{{$d->categoryname}}">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-3">
                        <label>Quality :</label>
                      </div>
                      <div class="col-lg-9 col-9">
                        <label>{{$b->quality1}}</label>
                        <input type="hidden" name="quality" value="{{$b->quality1}}">
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
                        <label>9.25 <i class="fa fa-times" aria-hidden="true" style="font-weight: 200;"></i> 4.25</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-3">
                        <label>Colour :</label>
                      </div>
                      <div class="col-lg-9 col-9">
                        <label>Multi</label>
                      </div>
                    </div>
                  </form>
                  @empty
                  @endforelse
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-12">



            <div class="envo_form_size">
              <div class="row">
                <div class="col-lg-12 col-12">
                  <div class="info_heading">enter Envelope information</div>
                </div>
              </div>
              <div class="envo_info_form">
                
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                      <input type="text" name="name" placeholder="Full Name">
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
                    <div class="col-lg-6 col-md-6 col-12">
                      <input type="text" name="" placeholder="Phone Number">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                      <input type="text" name="" placeholder="Compney Name">
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
                      <input type="submit" name="" value="Submit" style="color: #f9f3ed;" class="sub_btn">
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

@endsection