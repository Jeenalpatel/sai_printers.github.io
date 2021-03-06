@extends('admin_layout.admin')
@section('content')

<div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><b>Review display</b> </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a class="dropdown-item" href="#">Settings 1</a>
                          </li>
                          <li><a class="dropdown-item" href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  

            <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Client Review</h2>
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
                            <th class="column-title">photo</th>
                            <th class="column-title">Name</th>
                            <th class="column-title">Review</th>
                            <th class="column-title">Status</th>
                            
                            
                            </th>
                            
                          </tr>
                        </thead>

                        <tbody>
                        @if(@$data)
  											@forelse($data as $d)
											
                          <tr class="even pointer">
                            <td class="a-center ">
                              <!-- <input type="checkbox" class="flat" name="table_records"> -->
                            </td>
                            <td class=" ">{{$d->id}}</td>
                            <td class=" "><img src="{{url('storage/app/review_image')}}{{'/'}}{{$d->image}}" style="height: 60px; width: 60px;"></td> </td>
                            <td class=" ">{{$d->name}}</td>
                            <td class=" ">{{$d->review}}</td>
                            <td class=" ">
                          @if($d->active == 'active')
                              <a href="{{route('review_active',['id'=>encrypt($d->id),'active'=>'active'])}}">ACTIVE</a>
                          @else($d->active == 'inactive')
                          <a href="{{route('review_active',['id'=>encrypt($d->id),'active'=>'inactive'])}}">INACTIVE</a>
                          @endif </td>
                            
                            
                          </tr>

                          @empty
                           @endforelse
											@endif 
                         </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>
            </div>

@endsection