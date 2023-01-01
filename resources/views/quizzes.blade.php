@include('layouts.dashboard.main')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-content">
                <div class="d-widget-title p-2">
                    <h3 class="main-tile"><span>Select Subject</span> or <span>enter quiz ID </span> to take a quiz</h3>
                    <div class="uk-margin">
                        <input class="uk-input uk-form-width-medium" type="text" placeholder="Enter Quiz ID">
                        <button class="button primary">Submit query</button>
                    </div>
                </div>
                <div class="row merged20">
                    @foreach($subjects as $subject)
                        <div class="col-lg-4 col-md-4 col-sm-4 mb-2">
                            <div class="d-widget d-widget-action soft-blue">
                                <div class="d-widget-title">
                                    <h5>{{$subject->title}}</h5>
                                </div>
                                <div class="d-widget-content">
                                    <span class="realtime-ico pulse"></span>
                                    <h6><a href="{{ route('display.quiz', ['id' => $subject->id, 'title' =>  $subject->title, 'level' => Auth::user()->level]) }}">Take Quiz</a></h6>
                                    <h5>{{ $subject->questions->count() }}</h5>
                                    <i class="icofont-light-bulb"></i>  
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div><!-- main content -->