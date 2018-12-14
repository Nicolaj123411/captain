@extends('admin.app')
@section('content')
      <div class="be-content">
        <div class="main-content container-fluid">
                <div class="row">
                        <div class="col-sm-8">
                                @if(session()->has('message'))
                                <div role="alert" class="alert alert-success alert-icon alert-dismissible">
                                    <div class="icon"><span class="mdi mdi-check"></span></div>
                                    <div class="message">
                                        <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><strong>Success!</strong> {{ session()->get('message') }}
                                    </div>
                                    </div>

                            @endif
                            <div class="row">
                                @foreach($rooms as $room)
                                <div class="col-lg-4">
                                <div class="card">
                                <div class="card-header card-header-divider"><img class="mr-2" src="{{ asset('svg/lang/' . $room->lang . '.svg')}}" alt="{{$room->lang}}" height="40" width="40">{{$room->title}}<span class="card-subtitle"></span></div>
                                        <div class="card-body">
                                      {{$room->body}}
                                        </div>
                                        <div class="container mb-2 pb-2">
                                        <a class="btn btn-primary m-2" href="{{route('room.edit', $room->id)}}">Edit</a><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteroom{{$room->id}}">Delete</button>
                                    </div> </div>
                                </div>
                                      <!-- Modal -->
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
                <div class="mt-8">
                    <button type="button" data-dismiss="modal" class="btn btn-secondary btn-space modal-close">Cancel</button>
                    <a href="{{route('room.delete', $room->id)}}" class="btn btn-success btn-space modal-close">Proceed</a>
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
                                        Add translation <br>
                                        <a href="{{route('room.new.translation', $room_id)}}" class="mt-4 btn btn-primary">New translation</a>
                                  </div>
                                  <div class="card-body">


                                </div>
                              </div>
                      </div>


                </div>
        </div>
      </div>






@endsection

