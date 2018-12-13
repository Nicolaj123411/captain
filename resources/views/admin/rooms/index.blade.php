@extends('admin.app')
@section('content')
      <div class="be-content">
        <div class="main-content container-fluid">
                <div class="row">
                        <!--Responsive table-->
                        <div class="col-sm-8">
                          <div class="card card-table">
                            <div class="card-header">{{$house->title}}
                              <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a href="#" role="button" data-toggle="dropdown" class="dropdown-toggle"><span class="icon mdi mdi-more-vert"></span></a>
                                <div role="menu" class="dropdown-menu"><a href="#" class="dropdown-item">Action</a><a href="#" class="dropdown-item">Another action</a><a href="#" class="dropdown-item">Something else here</a>
                                  <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Separated link</a>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <div class="table-responsive noSwipe">
                                <table class="table table-striped table-hover">
                                  <thead>
                                    <tr>
                                      <th style="width:20%;">Room</th>
                                      <th style="width:17%;">Content</th>
                                      <th style="width:15%;">Quiz stats (First try)</th>
                                      <th style="width:10%;"></th>
                                      <th style="width:10%;">Date</th>
                                      <th style="width:10%;"></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($rooms as $room)
                                    @foreach($room->contentAll as $content)

                                    <tr>
                                        <td class="user-avatar cell-detail user-info"><img src="{{ asset('svg/icons/corridor.svg') }}" alt="Avatar"><span>{{ $content->title }}</span><span class="cell-detail-description">Developer</span></td>
                                    <td class="cell-detail"> <span class="cell-detail-description"> @if(!$content->body) <span class="badge badge-danger">! This room has no content !</span> @endif {{ \Illuminate\Support\Str::words($content->body, 10,'...') }}</span></td>
                                        <td class="milestone"><span class="completed">8 / 15</span><span class="version">45%</span>
                                          <div class="progress">
                                            <div style="width: 45%" class="progress-bar progress-bar-primary"></div>
                                          </div>
                                        </td>
                                    <td class="cell-detail"><span><img src="{{ asset('svg/lang/'.$content->lang.'.svg') }}" alt="{{$content->lang}}" height="40" width="40"></span></td>
                                        <td class="cell-detail"><span>May 6, 2016</span><span class="cell-detail-description">8:30</span></td>
                                        <td class="text-right">
                                          <div class="btn-group btn-hspace">
                                            <button type="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle">Actions <span class="icon-dropdown mdi mdi-chevron-down"></span></button>
                                            <div role="menu" class="dropdown-menu"><a href="{{route('room.edit', $room->id)}}" class="dropdown-item">Edit</a>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                      @endforeach
                                      @endforeach

                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                                <div class="card card-table">
                                  <div class="card-header">
                                      Add a room to {{$house->title}}
                                  </div>
                                  <div class="card-body">
                                    <a class="btn btn-primary">New translation for</a>
                                </div>
                              </div>
                      </div>
                </div>
        </div>
      </div>
@endsection

