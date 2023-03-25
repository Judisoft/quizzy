@include('layouts.dashboard.main')

<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9">
        <div class="panel-content">
            <div class="uk-margin">
                <h2 class="main-title">{{ $subject->title }}</h2>
                <p class="p-2 h5"><i class="icofont-rounded-expand h3"></i> Sort Questions</p>
                <div class="uk-form-controls ml-3">
                    <div class="uk-child-width-expand@s" uk-grid>
                        <div>
                            <select class="uk-select" id="level" name="level" onchange="sortQuestions()">
                                <option value="">Select Level</option>
                                @foreach ($levels as $level)
                                    <option value="{{ $level->id }}" class="text-capitalize" >{{ $level->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <select class="uk-select" id="topic" onchange="sortQuestions()">
                                <option value="">Select Topic</option>
                                @foreach ($topics as $topic)
                                    <option value="{{ $topic->id }}" class="text-capitalize">{{ $topic->topic }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div id="noItem"></div>
            </div>
            <div id="sorted"></div>
            <div id="toggleQuestions">
                @forelse ($questions as $key => $question)
                    <div class="ml-3">
                        <div class="d-widget mb-4">
                            <div class="d-widget-title">
                                <div class="uk-grid-small uk-flex-middle" uk-grid>
                                    <div class="uk-width-auto">
                                        <a href="#"><img class="uk-border-circle" width="40" height="40" src="{{ $question->user->profile_photo_url }}" alt="{{ $question->user->name }}"></a>
                                    </div>
                                    <div class="uk-width-expand">
                                        <a href="#"><h5 class="uk-margin-remove-bottom fw-600">{{$question->user->name }} @if($question->user->is_premium == 1)<i class="icofont-check-circled text-primary"></i>@endif</h5></a>
                                        <p class="uk-text-meta uk-margin-remove-top">{{ $question->created_at->diffForHumans() }}</p>
                                    </div>
                                    <div class="uk-flex uk-flex-right">
                                        <div class="px-2">
                                            <button class="button small primary">
                                                <a href="#modal-center-2"  uk-tooltip="share this question with friends" uk-toggle>
                                                    <i class="icofont-share-alt px-2 fw-700"></i>share
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-widget-content">
                                <div class="d-widget-title">
                                    <p class="main-title fw-600">
                                        <a href="{{ route('single.question', [ $question->subject_id, $question->id]) }}">{{ $key + 1 . ')'}}  {!! $question->content !!}</a>
                                    </p>
                                </div>
                                <div class="uk-flex uk-flex-column">
                                    <div class="p-3"><label><input class="uk-radio" name="choice" type="radio" value="A" onclick="verifyAnswer('{{ ($question->answer) }}')"> {!! $question->A !!}</label></div>
                                    <div class="p-3"><label><input class="uk-radio" name="choice" type="radio" value="B" onclick="verifyAnswer('{{ ($question->answer) }}')"> {!! $question->B !!}</label></div>
                                    <div class="p-3"><label><input class="uk-radio" name="choice" type="radio" value="C" onclick="verifyAnswer('{{ ($question->answer) }}')"> {!! $question->C !!}</label></div>
                                    <div class="p-3"><label><input class="uk-radio" name="choice" type="radio" value="D" onclick="verifyAnswer('{{ ($question->answer) }}')"> {!! $question->D !!}</label></div>
                                </div>
                                <div id="renderAnswer"></div>
                            </div>
                        </div>
                    </div>
                @empty
                    <tr>No question yet</tr>
                @endforelse
                <div> {{ $questions->links() }} </div>
            </div>
            {{-- modal for correct answer --}}
            <button class="button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #correct-answer" id="btnToggle" style="display:none">Open</button>
            <div id="correct-answer" class="uk-flex-top" uk-modal>
                <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical opacity-3">
                    <button class="uk-modal-close-default" type="button" uk-close></button>
                    <div class="text-center">
                        <img src="{{ asset('images/resources/correct.png') }}" style="height:75px;width:75px;">
                        <h4 class="p-5">Correct Answer</h4>
                        <p>Great Job {{ Auth::user()->name }}!</p>
                    </div>
                </div>
            </div>
            {{-- Modal for wrong answer --}}
            <button class="button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #wrong-answer" id="btnToggleWrong" style="display:none"></button>
            <div id="wrong-answer" class="uk-flex-top" uk-modal>
                <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical opacity-3">
                    <button class="uk-modal-close-default" type="button" uk-close></button>
                    <div class="text-center">
                        <img src="{{ asset('images/resources/cancel.png') }}" style="height:75px;width:75px;">
                        <h4 class="p-5">Wrong Answer</h4>
                        <p>Try again</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal-center" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="container mt-4">
            <img src="{{ asset('images/resources/share.svg') }}">
            <div class="mt-3 text-center">{!! $share_btn !!}</div>
        </div>        
    </div>
</div>
<div id="modal-center-2" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="container mt-4">
            <img src="{{ asset('images/resources/share.svg') }}">
            <div class="mt-3 text-center">{!! $share_btn !!}</div>
        </div>        
    </div>
</div>
<script>
    // let topic = document.getElementById("topic")
    let questions = {!! json_encode($questions) !!}
    let toggleQuestions = document.getElementById("toggleQuestions")
    let sorted = document.getElementById("sorted")

    function formatDate(date)
    {
        dayjs.extend(window.dayjs_plugin_relativeTime);
        return dayjs(date).fromNow()
    }


    function displaySortedQuestions(data)
    {
        toggleQuestions.style.display = 'none'

        if(data.length === 0)
        {
            document.getElementById("noItem").innerHTML = `<div class="p-5 text-center mt-5">
                                                                <img class="text-center" src="{{ asset('backend/images/resources/stats4.svg') }}" height="150" width="150">
                                                                <h5 class="opacity-3 pt-3 mb-3">No question available</h5>
                                                                <a href="${window.location.href}"><button class="button small primary">clear filters</button></a>
                                                            </div>`
        }else {
            document.getElementById("noItem").style.display = 'none'
           
        }
        sorted.innerHTML = ""
        data.map(q => {
            sorted.innerHTML +=`<div class="inline-block p-2">
                                    <h5 class="pb-3"><span class="text-primary text-lowercase">${q.level.name} </span> <i class="icofont-curved-right h5"></i> 
                                    <span class="text-primary text-lowercase">${q.subject.title} </span> <i class="icofont-curved-right h5"></i>
                                    <span class="text-primary text-lowercase">  ${q.topic.topic} </span></h5>
                                    <div class="d-widget mb-4">
                                        <div class="d-widget-title">
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <a href="#"><img class="uk-border-circle" width="40" height="40" src="${q.user.profile_photo_url}" alt=""></a>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <a href="#"><h5 class="uk-margin-remove-bottom">${q.user.name}</h5></a>
                                                    <p class="uk-text-meta uk-margin-remove-top">${formatDate(q.created_at)}</p>
                                                </div>
                                                <div class="uk-flex uk-flex-right">
                                                    <button class="button small primary">
                                                        <a href="#modal-center" uk-tooltip="share this question with friends" uk-toggle>
                                                            <i class="icofont-share-alt px-2 fw-700"></i>share
                                                        </a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-widget-content">
                                            <div class="d-widget-title">
                                                <h4 class="main-title">
                                                    <p class="main-title fw-600">
                                                        <a href="/questions/${q.subject.id}/${q.id}">${q.content}</a>
                                                    </p>
                                                </h4>
                                            </div>
                                            <div class="uk-flex uk-flex-column">
                                                <div class="p-3"><label><input class="uk-radio" name="choice" type="radio" value="A" onclick="verifyAnswer('${q.answer}')"> ${q.A}</label></div>
                                                <div class="p-3"><label><input class="uk-radio" name="choice" type="radio" value="B" onclick="verifyAnswer('${q.answer}')"> ${q.B}</label></div>
                                                <div class="p-3"><label><input class="uk-radio" name="choice" type="radio" value="C" onclick="verifyAnswer('${q.answer}')"> ${q.C}</label></div>
                                                <div class="p-3"><label><input class="uk-radio" name="choice" type="radio" value="D" onclick="verifyAnswer('${q.answer}')"> ${q.D}</label></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`
        })
    }


    function sortQuestions()
    {
        let topicId = document.getElementById("topic").value;
        let levelId = document.getElementById("level").value;
        let subjectId = {!! json_encode($subject_id) !!}

        let quest = questions.data
        
        const sortedQuestions = quest.filter((q) => { 
            if (topicId && levelId) {
               
                return  q.topic_id == topicId && 
                        q.level_id == levelId
            } else {
            
                return q.topic_id == topicId || 
                        q.level_id == levelId
            }
          
        })
        
        displaySortedQuestions(sortedQuestions)

        

        // axios.post('/subjects/'+subjectId+'/quiz-questions/sort-questions', {
        // topic_id: topicId,
        // subject_id: subjectId,
        // level_id: levelId
        // })
        // .then(function (response) {
        //     toggleQuestions.style.display = "none"
        //     let res = response.data
        //     displaySortedQuestions(res)
        //     console.log(res)            
        // })
        // .catch(function (error) {
        //     console.log(error);
        // });

        

    }


    function verifyAnswer(answer) {
        
        let userAnswer = document.querySelector('input[name="choice"]:checked').value
        if(userAnswer === answer) 
        {
            document.getElementById("btnToggle").click()
            
        } else {
            document.getElementById("btnToggleWrong").click()
        }


    }
</script>