@include('layouts.dashboard.main')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-content">
                <div class="row merged20" id="searchResults">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <form action="{{ route('all.quizzes') }}" method="get">
                            <div class="uk-flex flex-row border rounded">
                                <button type="submit" class="button rounded-0" style="background-color:#fff;border:none;"><i class="icofont-search-1 text-dark"></i></button>
                                <input class="uk-input rounded-0" type="search" placeholder="Search from Quizzy library" name="search" style="border:none;">
                            </div>
                        </form>
                        <div class="mt-2">
                            @if(Session::has('message'))
                            <div class="uk-alert-danger" uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                <p>NOTICE</p>
                                <p>{{ Session::get('message') }}</p>
                            </div>
                            @endif
                        </div>
                        @forelse($quizzes as $quiz)
                            <div class="my-4">
                                <div class="d-widget d-widget-content">
                                    <div class="uk-flex uk-flex-row">
                                        <div><button class="button small soft-danger">MCQ</button></div>
                                        <div class="px-3"><a class="button small light" href="{{ route('download.pdf', $quiz)}}">{{ $quiz->subject->title }}</a></div>
                                    </div>
                                    
                                    <div class="uk-flex justify-content-around">
                                        <div class="d-widget-title">
                                            <a href="{{ route('display.quiz', $quiz) }}"><h2 class="text-capitalize pt-3" style="font-weight:700;">{{$quiz->title}}</h2></a>
                                        </div>
                                        <div>
                                            <a href="{{ route('preview.pdf', $quiz) }}"><button class="button small soft-primary">Preview</button></a>
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
                                                <a class="button small light" href="{{ route('download.pdf', $quiz)}}"><i class="icofont-download px-2"></i> download</a>
                                                @if($quiz->hasAuthUserBookmarkedQuiz())
                                                    <button class="button small primary" disabled><i class="icofont-check px-2"></i>bookmarked</button>
                                                @else
                                                    <a class="button small light"  onclick="bookMark({{ $quiz->id }})" id="bookmark"><i class="icofont-folder px-2"></i> bookmark</a>
                                                @endif
                                                @if($quiz->hasAuthUserLikedQuiz())
                                                    <button class="button small primary" disabled><i class="icofont-thumbs-up px-2"></i>{{ $quiz->number_of_likes }}</button>
                                                    <button class="button small danger" onclick="unlike({{ $quiz->id }})"><i class="icofont-thumbs-down px-2"></i></button>
                                                @else
                                                    <a class="button small light" onclick="likeQuiz({{ $quiz->id }}, {{ $quiz->number_of_likes}})" id="like"><i class="icofont-thumbs-up px-2"></i> {{ $quiz->number_of_likes }}</a>
                                                @endif
                                                <a class="button small light" href="#"><i class="icofont-copy px-2"></i> copy and edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                        <div class="d-widget">
                            <div class="d-widget-title">
                                <h5>Suggestions for you</h5>
                            </div>
                            <div class="d-widget-content">
                                suggestions here
                            </div>
                        </div>
                    </div>
                </div>
                @if(count($quizzes) > 0)
                    {{-- <div class="text-right p-3">{{ $quizzes->links() }}</div>  --}}
                @endif
            </div>
        </div>
    </div>
</div><!-- main content -->
    
<script>
    const bookmark = document.getElementById("bookmark")
    const like = document.getElementById("like")
    

    function notification(type, outputMessage)
    {
        UIkit.notification({
            message: outputMessage,
            status: type,
            pos: 'bottom-right',
            timeout: 5000
        });
    }

    function bookMark(id)
    {
        axios.post('/all-quizzes/add-bookmark', {
        quiz_id: id,
        user_id: "{{ auth()->user()->id }}"
        })
        .then(function (response) {
            // console.log(response)
            notification('success', response.data.success)
            bookmark.classList.remove("light")
            bookmark.innerHTML = `<button class="button small primary" disabled><i class="icofont-check px-2"></i>bookmarked</button>`
            
        })
        .catch(function (error) {
            console.log(error);
        });
    }

    function likeQuiz(id, numLikes)
    {
        
        axios.post('/all-quizzes/like', {
        quiz_id: id,
        user_id: "{{ auth()->user()->id }}"
        })
        .then(function (response) {
            notification('success', response.data.success)
            like.classList.remove("light")
            like.innerHTML = `<button class="button small" disabled><i class="icofont-heart px-2"></i>${numLikes}</button>`
        })
        .catch( function (error) {
            console.log(error)
        })

    }

    function unlike(id)
    {
        axios.post('/all-quizzes/unlike', {
        quiz_id: id,
        user_id: "{{ auth()->user()->id }}"
        })
        .then(function (response) {
            notification('success', response.data.success)
            // like.innerHTML = `<button class="button small" disabled><i class="icofont-heart px-2"></i>${numLikes}</button>`
        })
        .catch( function (error) {
            console.log(error)
        })
    }
</script>