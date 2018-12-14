@extends('admin.app')
@section('content')

<div class="be-content">
        <div class="main-content container-fluid">
                <div class="row">
                        <div class="col-md-8 offset-md-2">
                        @if(session()->has('message'))
                        <div role="alert" class="alert alert-success alert-icon alert-dismissible">
                            <div class="icon"><span class="mdi mdi-check"></span></div>
                            <div class="message">
                                <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><strong>Success!</strong> {{ session()->get('message') }}
                            </div>
                            </div>
                    @endif
                        </div>
                        <!--Responsive table-->
                        <div class="col-md-8 offset-md-2">
                                <div class="card card-border-color card-border-color-primary">
                                        <div class="card-header card-header-divider"><strong>Choose image</strong><span class="card-subtitle"></span></div>
                                        <div class="card-body">
                                            @foreach($images as $image)
                                                <a href="{{ route('edit.image.update', [$room_id, 'img', $image]) }}"><img class="m-4" src="{{ asset('/svg/header_image/' .$image)}}" alt="" height="100"></a>
                                            @endforeach
                                        </div>
                                      </div>
                        </div>
                        <div class="col-md-8 offset-md-2">
                                <div class="card card-border-color card-border-color-primary">
                                        <div class="card-header card-header-divider"><strong>Choose icon</strong><span class="card-subtitle"></span></div>
                                        <div class="card-body">
                                                @foreach($icons as $icon)
                                                <a href="{{ route('edit.image.update', [$room_id, 'icon', $icon]) }}"><img class="m-4" src="{{ asset('/svg/icons/' .$icon)}}" alt="" height="100"></a>
                                            @endforeach


                                        </div>


                                      </div>
                        </div>



                </div>
        </div>
      </div>


      @endsection
