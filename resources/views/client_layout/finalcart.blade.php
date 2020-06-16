@extends('client_layout.main_page')

@section('content')
<style type="text/css">
.f_visi_main
{
  padding: 150px 0px 100px;
  width: 100%;
  background-color: #f9f3ed;
  position: relative;
}
.img_title
{
  padding: 20px 0px 20px;
  width: 100%;
  position: relative;
  font-size: 20px;
  font-weight: 600;
  background-size: cover;
  object-fit: cover;
  color: #10455b;
}
.img_f , .img_b
{
  height: 300px;
  width: 90%;
  position: relative;
}
.fainal_det , .fainal_det2
{
  padding: 30px 0px 50px;
  font-size: 17px;
  position: relative;
  color: #10455b;
  width: 100%;
}
.f_add
{
  width: 85%;
  position: relative;
}
.fai_logo
{
  height: 100px;
  width: 100px;
  position: relative;

}
.fainal_btn
{
  /*padding: 20px 0px 20px;*/
  width: 100%;
  text-align: center;
  position: relative;
  float: left;
}
.f_btn
{
  background-color: #10455b;
  color: #f9f3ed;
  outline: none;
  border: none;
  padding: 5px;
  width: 200px;
  margin-right: 50px;
}
@media (max-width: 991px)
{
  .img_div
  {
    padding: 0px 50px 0px;
  }
  .img_f , .img_b
  {
    width: 100%;
  }
  .fainal_det
  {
    padding: 50px 60px 0px;
  }
  .fainal_det2
  {
    padding: 0px 60px 50px;
  }
}
@media (max-width: 767px)
{
  .img_div
  {
    padding: 0px 10px 0px;
  }
  .img_f , .img_b
  {
    height: 250px;
  }
  .fainal_det
  {
    padding: 50px 10px 0px;
  }
  .fainal_det2
  {
    padding: 0px 10px 50px;
  }
  .f_btn
  {
    margin-right: 10px;
  }
}
@media (max-width: 575px)
{
  .img_div
  {
    padding: 0px 50px 0px;
  }
  .fainal_det
  {
    padding: 50px 50px 0px;
  }
  .fainal_det2
  {
    padding: 0px 50px 50px;
  }
}
@media (max-width: 375px)
{
  .img_div
  {
    padding: 0px 20px 0px;
  }
  .img_f , .img_b
  {
    height: 200px;
  }
  .fainal_det
  {
    padding: 50px 20px 0px;
  }
  .fainal_det2
  {
    padding: 0px 20px 20px;
  }
  .f_btn
  {
    margin-right: 0px;
    margin-top: 20px;
  }
}
</style>
<div class="f_visi_main">
    <div class="container">
      <form action="{{route('cart.store')}}" method="post">
        @csrf
      <div class="row">
        <div class="col-lg-12">
          <div class="img_div">
            <div class="row">
              <div class="col-lg-6">
                <div class="img_title">Front Side</div>
                @if($image)
                <input type="hidden" name="image" value="{{$image}}">
                <img src="{{url('storage/app/category')}}{{'/'}}{{$image}}" class="img_f">
                @endif
              </div>
              </div>
              
              <div class="row ">
                
                    <div class="col-lg-12">
                      <div class="row pt-5">
                        @if($id)
                        
                        
                            <input type="text" name="id" value="{{$id}}">
                        </label>
                        @endif
                       
                      </div>
                      <div class="row pt-5">
                        @if($price)
                        <label name="price" required>Total Price :  </label>
                          <label><i class="fa fa-inr" aria-hidden="true" style="font-size: 15px; padding-right: 3px;"></i>

                            <input type="hidden" name="price" value="{{$price}}">{{$price}}
                        </label>
                        @endif
                      </div>
                      <div class="row ">
                        @if($category)
                        <label> Category Name :</label>
                        <input type="hidden" name="name" value="{{$category}}">{{$category}}
                      </div>
                      @endif
                      <div class="row ">
                        @if($quantity)
                        <label> Quantity value :</label>
                        <input type="hidden" name="quantity" value="{{$quantity}}">{{$quantity}}
                        @endif
                      </div>
                      <input type="hidden" name="id" value="{{$id}}">
                      <input type="hidden" name="name" value="{{$category}}">
                      <input type="hidden" name="quantity" value="{{$quantity}}">
                      <input type="hidden" name="price" value="{{$price}}">
                      @if($mainid)
                      
                      <input type="text" name="sid" value="{{$mainid}}">
                      
                      @endif


                            <div class="row pt-5">
        <div class="col-lg-12">
          <div class="fainal_btn">
            <input type="button" name="" value="GO BACK" class="f_btn">
            <input type="submit" name="" value="ADD TO CART" class="f_btn">
          </div>
        </div>
      </div>
                    </div>
                  </div>
                      
              
      
    </div>
  </div>
  
  </div>
</div>
</form>
</div>




@endsection