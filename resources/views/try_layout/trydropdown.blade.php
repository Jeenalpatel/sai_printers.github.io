
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<div class="form-group col-sm-6 col-md-6">
                
                  <label class="col-sm-2 control-label">Category</label>
                  <div class="col-sm-9">
                    <select class="form-control" id="quality" name="quality" >
                    <option selected disabled hidden>Select Your Option</option>
                    @foreach($size as $c)

                    
                    <option value="{{$c->id}}">{{$c->size}}</option>
                    
                    @endforeach
                    </select>
                    
                  </div>
                                </div>

              <div class="form-group col-sm-6 col-md-6">
                  <label class="col-sm-2 control-label">Sub-Category</label>
                  <div class="col-sm-9">
  <select  class="form-control" id="quantity" name="quantity" @if(@$data1->quality == $c->id){{'selected'}}@elseif(old('quality') == $c->id){{'selected'}}@else{{'disabled'}}@endif >
                    <option selected disabled hidden>Select Your Option</option>
                    @foreach($quantity as $c)

                    
                    <option value="{{$c->id}}">{{$c->quantity}}</option>
                    
                    @endforeach
                    </select>
                    
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
                  alert(a);


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
                          list += "<option value='" +gem[i]['id'] + "'>" + gem[i]['quantity'] + " </option>";

                        }
                        document.getElementById('quantity').innerHTML =list;
                      }
                    });
               }); 
            </script>


  
  </script>

</body>
</html>


