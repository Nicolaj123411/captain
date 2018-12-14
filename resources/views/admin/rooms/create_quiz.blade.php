@extends('admin.app')
@section('content')

<div class="be-content">
        <div class="main-content container-fluid">
                <div class="row">
                        <!--Responsive table-->
                        <div class="col-md-8 offset-md-2">
                                <div class="card card-border-color card-border-color-primary">
                                        <div class="card-header card-header-divider">Create new room for <strong>title</strong><span class="card-subtitle">Edit the fields and make sure to save.</span></div>
                                        <div class="card-body">
                                        <h1>lang: {{$lang}} ROOM ID: {{$room_id}}</h1>
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
                                                    <form method="POST" action="{{route('quiz.store', $room_id)}}">
                                                {{ csrf_field() }}
                                            <div class="form-group pt-2">
                                              <label for="title">Room title</label>
                                            <input name="quiz" value="" id="title" type="text" placeholder="Enter quiz" class="form-control">
                                            <input type="hidden" name="lang" value="{{$lang}}">
                                            </div>


                                            <div class="row pt-3">
                                              <div class="col-sm-12">
                                                <p class="text-left">
                                                  <button type="submit" class="btn btn-space btn-primary">Create</button>
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
