@extends('admin_layout.admin')
@section('content')
<h1>Payment success order</h1>




                    <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Admin </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                       <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <!-- <input type="checkbox" id="check-all" class="flat"> -->
                            </th>
                            <th class="column-title">id </th>
                            <th class="column-title">user id </th>
                            <th class="column-title">name </th>
                            <th class="column-title">email </th>
                            <th class="column-title">Total Price </th>

                          
                            <th class="column-title">Show Detail</th>
                            </th>
                            
                          </tr>
                        </thead>

                        <tbody>
                    
                        @forelse($data as $d)
                      
                      
                    
                      <form action="{{route('showdetail',['pid'=>encrypt($d->id)])}})}}" method="post">
                {{csrf_field()}}
 
                          <tr class="even pointer">
                            <td class="a-center ">
                              <!-- <input type="checkbox" class="flat" name="table_records"> -->
                            </td>
                            <td class=" "><input type="hidden" name="pid" value="{{$d->id}}">{{$d->id}}</td>
                            <td class=" "><input type="hidden" name="userid" value="{{$d->uid}}">{{$d->uid}}</td>
                            <td class=" "><input type="hidden" name="username" value="{{$d->uname}}">
                          {{$d->uname}}</td>
                            <td class=" "> <input type="hidden" name="usermail" class="form-control " require value="{{$d->umail}}">
                         {{$d->umail}}</td>
                            <td class=" "><input type="hidden" name="amount" class="form-control " require value="{{$d->amount}}">
                          {{$d->amount}}</td>
                            
             
                        
                        
                          

                          
                        
                            
                            <td class=" "><input type="submit" name="submit" value="showdetail"></td>

                            </td>
                          </tr>
  </form>
                          @empty
                           @endforelse
                
                         </tbody>
                      </table>
                    </div>
                    
            
                  </div>
                </div>
              </div>
            </div>

@endsection