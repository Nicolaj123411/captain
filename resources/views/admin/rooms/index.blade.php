@extends('admin.app')
@section('content')
      <div class="be-content">
        <div class="main-content container-fluid">
                <div class="row">
                        <!--Responsive table-->
                        <div class="col-sm-8">
                            <div class="row">

                                @foreach($rooms as $room)
                                <div class="col-lg-4">
                                        <div class="card">
                                        <div class="card-header card-header-divider"><a  href="{{route('room.alias.edit', $room->id)}}" class="m-2 btn btn-primary">Edit alias</a>{{$room->title}}</div><a href="{{route('edit.image.index', $room->id)}}"><img class="m-4" src="@if($room->img == null) /svg/header_image/chicken.svg @else /svg/icons/{{$room->icon}} @endif " height="100"></a>
                                            <div class="card-body">
                                                <a href="{{route('edit.image.index', $room->id)}}"><img src="@if($room->img == null) /svg/header_image/chicken.svg @else /svg/header_image/{{$room->img}} @endif"></a>
                                            <a class="btn btn-primary m-2" href="{{ route('room.translations', $room->id)}}">See translations</a><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteroom{{$room->id}}">Delete</button><br>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="modal fade  modal-full-color modal-full-color-danger " id="deleteroom{{$room->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteroom{{$room->id}}Label"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close">
                                                                <span class="mdi mdi-close"></span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="text-center">
                                                                <span class="modal-main-icon mdi mdi-close-circle-o"></span>
                                                            <h3>Danger!</h3>
                                                                <p>Are you sure you want to delete this item?
                                                                    <br>You can <strong>NOT</strong> undo this action!</p>
                                                                    <p>If you delete this room then all the translations associated with it will be deleted too.</p>
                                                                <div class="mt-8">
                                                                    <button type="button" data-dismiss="modal" class="btn btn-secondary btn-space modal-close">Cancel</button>
                                                                <a href="{{route('room.destroy', $room->id)}}" class="btn btn-success btn-space modal-close">Proceed</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer"></div>
                                                    </div>
                                                </div>
                                                </div>
                                        @endforeach
                                    </div>
                        </div>
                        <div class="col-sm-4">
                                <div class="card card-table">
                                  <div class="card-header">
                                      Add a room to {{$house->title}} <br>
                                      <a href="{{route('room.new', $house->id)}}" class=" mt-4 btn btn-primary">New room</a>
                                  </div>

                              </div>
                      </div>
                </div>
        </div>
      </div>
@endsection

