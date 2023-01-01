@include('layouts.dashboard.main')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-content">
                <div class="d-widget-title p-2">
                    <h3 class="main-tile"><span>Select Subject</span> or <span>enter quiz ID </span> to take a quiz</h3>
                    <div class="uk-margin">
                        <form action="{{ route('all.quizzes') }}" method="get">
                            <input class="uk-input uk-form-width-large" type="text" placeholder="Enter Quiz Name" name="search">
                            <button type="submit" class="button primary">Search quiz</button>
                        </form>
                    </div>
                </div>
                <div class="row merged20" id="searchResults">
                    @forelse($quizzes as $quiz)
                        <div class="col-lg-4 col-md-4 col-sm-4 mb-2">
                            <a href="{{ route('display.quiz', ['id' => $quiz->id, 'title' =>  $quiz->title, 'level' => Auth::user()->level]) }}">
                                <div class="d-widget d-widget-action">
                                    <div class="d-widget-title">
                                        <h3 class="text-capitalize text-primary">{{$quiz->title}}</h3>
                                        <p>{{ $quiz->subject->title }}</p>
                                    </div>
                                    <div class="d-widget-content">
                                        <h5 class="text-secondary"><i class="icofont-ui-clock"></i> {{ $quiz->duration }}</h5>
                                        <p><img style="height:35px;width:35px;border-radius:10px;padding-right:5px;" src="{{ $quiz->user->profile_photo_url }}" alt="{{ $quiz->user->name }}">{{ $quiz->user->name }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <div class="col-lg-8 text-center">
                            <img src="{{ asset('images/empty-folder.png') }}" class="img-sm">
                            <h5 class="opacity-3 p-3">No Quiz</h5>
                            <a href="{{ route('quiz.create') }}" class="mr-auto text-center"><button class="button dark small">create quiz</button></a>
                        </div>
                    @endforelse
                </div>
                @if(count($quizzes) > 0)
                    <div class="text-right p-3 bg-light">{{ $quizzes->links() }}</div> 
                @endif
            </div>
        </div>
    </div>
</div><!-- main content -->
