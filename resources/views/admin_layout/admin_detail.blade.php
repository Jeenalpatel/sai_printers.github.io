@extends('admin_layout.admin')
@section('content')








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
                            <th class="column-title">name </th>
                            <th class="column-title">email </th>
                            <th class="column-title">password </th>

                          
                            <th class="column-title">created at </th>
                            <th class="column-title">updated at</th>
                            <th class="column-title">blocked</th>
                            </th>
                            
                          </tr>
                        </thead>

                        <tbody>
                        @if(@$admin)
  											@forelse($admin as $d)
											
                          <tr class="even pointer">
                            <td class="a-center ">
                              <!-- <input type="checkbox" class="flat" name="table_records"> -->
                            </td>
                            <td class=" ">{{$d->id}}</td>
                            <td class=" ">{{$d->name}}</td>
                            <td class=" ">{{$d->email}}</td>
                            <td class=" ">{{$d->password}}</td>
                            
                            
                            <td class=" ">{{$d->created_at}}</td>
                            <td class=" ">{{$d->updated_at}}</td>
                            <td class=" "><a href="">update</td>
                            </td>
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