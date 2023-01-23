@include('layouts.dashboard.main')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-content">
                <div class="p-5" style="background-color:#ddd;border-radius:10px;">
                    <h1 class="main-tile text-center" style="font-weight:900;">What do you want to learn Today?</h1>
                    <div class="uk-margin">
                        <input class="uk-input text" type="text" placeholder="Search for quizzes on any topic" style="height:60px;font-weight:800;color:#ddd;font-size:20px;">
                    </div>
                </div>
                <div class="d-widget-title mt-5">
                    <h3 style="font-weight:700;">Subjects Areas</h3>
                </div>
                <div class="row merged20 mt-5">
                    @foreach($subjects as $subject)
                        <div class="col-lg-4 col-md-4 col-sm-4 mb-2">
                            <a href="{{ route('display.quiz', ['id' => $subject->id, 'title' =>  $subject->title, 'level' => Auth::user()->level]) }}">
                                <div class="d-widget d-widget-action">
                                    <div class="d-widget-title">
                                        <h3 style="font-weight:600;">{{$subject->title}}</h3>
                                    </div>
                                    <div class="d-widget-content">
                                        <span class="realtime-ico pulse"></span>
                                        <h6><a href="{{ route('display.quiz', ['id' => $subject->id, 'title' =>  $subject->title, 'level' => Auth::user()->level]) }}">Take Quiz</a></h6>
                                        <h5>{{ $subject->questions->count() }}</h5>
                                        <i class="icofont-light-bulb"></i>  
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div><!-- main content -->