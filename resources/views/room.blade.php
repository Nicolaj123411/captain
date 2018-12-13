@extends('app')
@section('content')




    <nav class="navbar sticky-top navbar-light bg-light">

            <div class="col-2"><a href="{{ route('rooms.index', $house->title) }}"><i class="fas fa-arrow-left"></i></a></div>
            <div class="col-8 text-white">{{ $house->title }}</div>
            <div class="col-2"><a href="#menu-toggle" id="menu-toggle"><i class="fas fa-trophy"></i></a></div>
    </nav>

    <div class="bg-spacer"></div>


    {{-- SIDEBAR --}}
    <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                            <div class="col-lg-12">
                                <div class="main-container">
                                    <div class="box mt-4">
                                        <h1>@lang('messages.quizStats')</h1>
                                        @foreach($quiz_list as $id)

                                        <div class="trophy">
                                                <div class=""><i class="fas fa-check-circle"></i></div>
                                                <div class=""><img src="{{asset('svg/icons/'. $room->icon)}}" alt=""></div>
                                                <div class="">
                                                    <h1 class="text-left">{{$id->question}}</h1>
                                                    <p>adipisicing elit. Doloribus, maiores....</p>
                                            </div>
                                        </div>
                                        @endforeach

                                        {{-- <div class="trophy not-complete">
                                                <div class=""><i class="fas fa-check-circle"></i></div>
                                                <div class=""><img src="{{asset('svg/icons/'. $room->icon)}}" alt=""></div>
                                                <div class="">
                                                    <h1 class="text-left">her er overskrift!</h1>
                                                    <p>adipisicing elit. Doloribus, maiores....</p>
                                            </div>
                                        </div> --}}
                                    </div>

                                    <div class="rope-container">
                                        <div class="rope"></div>
                                        <div class="rope rope-right"></div>
                                    </div>
                                    <div class="box score">
                                       <h1>score</h1>
                                       <span>2/5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>

{{-- SIDEBAR --}}

    <div class="container" id="body">
        <div class="col-lg-12">
            <div class="main-container">
                <div class="box">
                    <h1>{{$room->content->first()->title}}</h1>
                    <img class="mb-4" src="{{asset('svg/header_image/' . $room->img) }}" alt="">
                </div>
                <div class="rope-container">
                    <div class="rope"></div>
                    <div class="rope rope-right"></div>
                </div>
                <div class="box">
                    <p class="text-left mt-2" style="font-weight:700;">

                            {{ $room->content->first()->body }}
                    </p>
                    <p class="bolder primary-color">…{{ $room->content->first()->fact }}</p>
                </div>


                @if(!empty($quiz->question))

                    <div class="rope-container">
                            <div class="rope"></div>
                            <div class="rope rope-right"></div>
                        </div>
                            <div class="box">
                                <h1>Quiz</h1>
                                <p class="text-center bolder">{{$quiz->question}}</p>

                @foreach($questions as $question)
                    <a href="#" class="big_button mb-3" data-toggle="modal" data-target="#exampleModal">{{$question->answers}}</a>
                @endforeach
            </div>
                @endif

            </div>
        </div>
    </div>

  <!-- Modal correct -->
  <div class="modal modal-success fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <h1 class="big_title mt-3">Correct! <br><i class="fas fa-check-circle mt-2 glyphicon"></i></h1>
          <p class="text-center bolder mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius facilis reiciendis consectetur in deleniti animi repudiandae molestiae iure commodi nemo.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="big_button" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
</div>

  <!-- Modal correct -->
  <div class="modal modal-success fade" id="modalWrong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <h1 class="big_title mt-3">Forkert! <br><i class="fas fa-check-circle mt-2 glyphicon"></i></h1>
              <p class="text-center bolder mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius facilis reiciendis consectetur in deleniti animi repudiandae molestiae iure commodi nemo.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="big_button" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
    </div>
<!-- Footer -->
<footer class="page-footer font-small blue pt-4">
<h1>jeg er footer</h1>
    </footer>





@endsection







