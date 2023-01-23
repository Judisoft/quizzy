@include('layouts.dashboard.main')

<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9">
        <div class="panel-content ml-3">
            <div class="uk-margin">
                <h1 class="main-title">{{ $subject->title }}</h1>
                <p class="p-2 h-5">Select a topic to sort questions</p>
                <div class="uk-form-controls">
                    <select class="uk-select" id="topic">
                        <option value="">-- select topic --</option>
                        @foreach ($topics as $sub_topic)
                            <option value="{{ $sub_topic->topic }}">{{ $sub_topic->topic }}</option>
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
                                    <p class="uk-text-meta uk-margin-remove-top">{{ $question->created_at->diffForHumans() }}</p>
                                </div>
                                <div class="uk-flex uk-flex-right">
                                    <div class="px-2"><a class="button small light"><i class="icofont-clock-time px-2"></i>{{ $question->duration }} {{ Str::plural('second', $question->duration) }}</a></div>
                                    <div class="px-2"><a class="button small light"><i class="icofont-check-circle px-2"></i>{{ $question->points }} {{ Str::plural('point', $question->points) }}</a></div>
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