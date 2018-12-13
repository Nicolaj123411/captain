@extends('app')
@section('content')
    <nav class="navbar sticky-top navbar-light bg-light">
        <a href="#">@lang('messages.enterCode') VIDEO SIDE</a>
    </nav>
    <div class="bg-spacer"></div>
    <div class="container">
        <div class="col-lg-12">
            <div class="main-container">
                <div class="box">
                <i class="fas fa-anchor"></i>
                <h1>The beginning</h1>

                <div class="embed-responsive embed-responsive-16by9 mt-4 mb-4">
                    @if(session('locale') == 'da')
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/WWqY9gSxjMA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @elseif(session('locale') == 'de')
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ANIDoyvDgv8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @else
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/TmE3ueYr1fc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @endif

                      </div>
                </div>
                <div class="rope-container">
                        <div class="rope"></div>
                        <div class="rope rope-right"></div>
                    </div>
                        <div class="box">
                        <a href="{{route('houses')}}" class="big_button box-shadow mt-2">Start!</a>

        </div>
            </div>
        </div>
    </div>
@endsection

