@include('layouts.dashboard.main')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-content">
                <div class="d-widget-title p-2">
                    <div class="uk-margin">
                        <form action="{{ route('all.quizzes') }}" method="get">
                            <input class="uk-input" type="text" placeholder="Search from Quizzy library" name="search" style="height:65px;font-weight:500;font-size:18px;">
                        </form>
                    </div>
                </div>
                <div class="row merged20" id="searchResults">
                    
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        @forelse($quizzes as $quiz)
                            <div class="mb-2">
                                <a href="{{ route('display.quiz', $quiz) }}">
                                    <div class="d-widget d-widget-action">
                                        <div class="uk-flex justify-content-around">
                                            <div class="d-widget-title">
                                                <h3 class="text-capitalize pt-3" style="font-weight:700;">{{$quiz->title}}</h3>
                                                {{-- <p>{{ $quiz->subject->title }}</p> --}}
                                                <p>subject title here</p>
                                            </div>
                                            <div>
                                                <button class="button small soft-primary">Quiz</button>
                                            </div>
                                        </div>
                                        <div class="d-widget-content">
                                            <div class="uk-flex justify-content-between">
                                                <div>
                                                    <small>
                                                        <i class="icofont-ui-user"></i> {{ $quiz->user->name }} 
                                                        <i class="icofont-clock-time small"></i> {{ $quiz->created_at->diffForHumans() }}
                                                    </small>
                                                </div>
                                                <div>
                                                    <a class="button small light" href="#"><i class="icofont-download px-2"></i> download</a>
                                                    <a class="button small light" href="#"><i class="icofont-heart px-2"></i> 0</a>
                                                    <a class="button small light" href="#"><i class="icofont-folder px-2"></i> save</a>
                                                    <a class="button small light" href="#"><i class="icofont-share-alt px-2"></i> save</a>
                                                    <a class="button small light" href="#"><i class="icofont-copy px-2"></i> copy and edit</a>
                                                    
                                                </div>
                                            </div>
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
                    <div class="col-lg-4 col-md-4 col-sm-4 mb-2">
                        <div class="bg-light p-3">
                            <h5>Suggestions for you</h5>
                        </div>
                    </div>
                </div>
                @if(count($quizzes) > 0)
                    <div class="text-right p-3">{{ $quizzes->links() }}</div> 
                @endif
            </div>
        </div>
    </div>
</div><!-- main content -->
