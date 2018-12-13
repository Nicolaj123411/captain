@extends('admin.app')
@section('content')

<div class="be-content">
        <div class="main-content container-fluid">
                <div class="row">
                        <!--Responsive table-->
                        <div class="col-md-8 offset-md-2">
                                <div class="card card-border-color card-border-color-primary">
                                        <div class="card-header card-header-divider">Edit <strong>{{$room->title}}</strong><span class="card-subtitle">Edit the fields and make sure to save.</span></div>
                                        <div class="card-body">
                                                @if(session()->has('message'))
                                                <div role="alert" class="alert alert-success alert-icon alert-dismissible">
                                                    <div class="icon"><span class="mdi mdi-check"></span></div>
                                                    <div class="message">
                                                        <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><strong>Success!</strong> {{ session()->get('message') }}
                                                    </div>
                                                    </div>

                                            @endif
                                                @if ($errors->any())
                                                    @foreach ($errors->all() as $error)
                                                    <div role="alert" class="alert alert-danger alert-icon alert-dismissible">
                                                            <div class="icon"><span class="mdi mdi-close-circle-o"></span></div>
                                                            <div class="message">
                                                                <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><strong>Error!</strong> {{ $error }}
                                                        </div>
                                                        </div>
                                                    @endforeach
                                            @endif
                                        <form method="POST" action="{{ route('room.update', $room->id) }}">
                                                {{ csrf_field() }}
                                            <div class="form-group pt-2">
                                              <label for="inputEmail">Room title</label>
                                              <input name="title" id="inputEmail" type="text" placeholder="Enter room title" value="{{$room->title}}" class="form-control">
                                            </div>

                                            <div class="form-group pt-2">
                                                <label for="body">Room body</label>
                                                <textarea name="body" id="body" class="form-control" rows="10">{{$room->body}}</textarea>
                                            </div>

                                            <div class="form-group pt-2">
                                                    <label for="body">Room fact</label>
                                                    <textarea name="fact" id="fact" class="form-control" rows="5">{{$room->fact}}</textarea>
                                            </div>
                                            <div class="form-group pt-2">
                                                    <label for="body">Room fact</label>
                                                    <select name="lang" class="form-control">
                                                            <option value="da" @if($room->lang == 'da') selected @endif>Danish</option>
                                                            <option value="en" @if($room->lang == 'en') selected @endif>English</option>
                                                            <option value="de" @if($room->lang == 'de') selected @endif>German</option>
                                                    </select>
                                            </div>
                                            <div class="row pt-3">
                                              <div class="col-sm-12">
                                                <p class="text-left">
                                                  <button type="submit" class="btn btn-space btn-primary">Update</button>
                                                </p>
                                              </div>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                        </div>

                </div>
        </div>
      </div>


      @endsection
