@include('layouts.dashboard.main')

<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9">
        <div class="panel-content ml-3">
            <div class="uk-margin">
                <h3 class="main-title">Select a topic to sort questions</h3>
                <div class="uk-form-controls">
                    <select class="uk-select" id="topic">
                        <option value="">-- select topic --</option>
                        @foreach ($topics as $topic_title)
                            <option value="{{ $topic_title->topic }}">{{ $topic_title->topic }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
           
            @forelse ($questions as $key => $question)
                <div class="ml-3">
                    <div class="uk-card uk-card-default uk-card-shadow uk-hover-light">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <a href="#"><img class="uk-border-circle" width="40" height="40" src="{{ $question->user->profile_photo_url }}" alt="{{ $question->user->name }}"></a>
                                </div>
                                <div class="uk-width-expand">
                                    <a href="#"><h5 class="uk-margin-remove-bottom">{{$question->user->name }} @if($question->user->is_premium == 1)<i class="icofont-check-circled text-primary"></i>@endif</h5></a>
                                    <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">{{ $question->created_at }}</time></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <h4>
                                <a href="{{ route('single.question', [ $question->subject_id, $question->id]) }}">{{ $key + 1 . ')'}}  {!! $question->content !!}</a>
                            </h4>
                            <ol type="A">
                                <li>{{ $question->A }}</li>
                                <li>{{ $question->B }}</li>
                                <li>{{ $question->C }}</li>
                                <li>{{ $question->D }}</li>
                            </ol>
                            <div class="uk-flex uk-flex-right">
                                <div onclick="like()"><a class="text-primary"><i class="icofont-heart px-2 h4"></i></a></div>
                                <div onclick="bookmark()"><a class="text-primary"><i class="icofont-book-mark px-2 h4"></i></a></div>
                                <div onclick="share()"><a class="text-primary"><i class="icofont-share-alt px-2 h4"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <tr>No question yet</tr>
            @endforelse
            <div> {{ $questions->links() }} </div>
        </div>
    </div>
</div>
<script>
    let topic = document.getElementById("topic")
    let questions = {!! json_encode($questions) !!}
    // const like = document.getElementById("like")
    // const bookmark = document.getElementById("bookmark")

    // listen for the onchange event

    topic.addEventListener("change", sortTopic)

    function sortTopic()
    {
        console.log($questions)
    }

    function like()
    {
        console.log("liked")
    }

    function bookmark()
    {
        console.log("bookmarked")
    }

    function share()
    {
        console.log("share")
    }
</script>