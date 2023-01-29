@include('layouts.dashboard.main')
<style>
    .option{
        height:25px;
        width:25px;
        border:2px solid#1DA1F2;
        border-radius:50%;
        background-color:#fff;
    }
    .option:hover{
        background-color:#1DA1F2;
    }
    #progress{
    width : 500px;
    padding:5px;
    text-align: right;
    }
    .prog{
        width : 10px;
        height : 10px;
        border: 1px solid #000;
        display: inline-block;
        border-radius: 50%;
        margin-left : 5px;
        margin-right : 5px;
    }
    #timer{
    position: relative;
    text-align: center;
    padding: 1rem;
}
    #counter{
        font-size: 1.5em;
    }
    #btimeGauge{
        width : 300px;
        height : 10px;
        border-radius: 10px;
        background-color: lightgray;
        margin-left : 25px;
    }
    #timeGauge{
        height : 10px;
        border-radius: 10px;
        background-color: mediumseagreen;
        margin-top : -10px;
        margin-left : 25px;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-content">
                <div class="row merged20 mb-4">
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <div class="uk-card uk-card-body bg-dark rounded">
                            <h2 class="main-title text-capitalize text-light">{{ $quiz->title }}</h2>
                            <p class="uk-text-meta uk-margin-remove-top">Created by {{ $quiz->user->name }}, {{ $quiz->created_at->diffForHumans() }}</p>
                        </div>
                       <div class="uk-flex uk-flex-around mt-3">
                            <div class="uk-card uk-card-body border-right">
                                <img class="uk-border-circle text-center" width="70" height="70" src="{{ asset('backend/images/resources/stopwatch.png')}}">
                                <p class="text-center pt-3">Time:
                                    @if($quiz_time < 60){{ $quiz_time }} {{ Str::plural('second', $quiz_time) }} 
                                    @else {{ ceil($quiz_time / 60) }} {{ Str::plural('minute', $quiz_time / 60) }} 
                                    @endif
                                </p>
                            </div>
                            <div class="uk-card uk-card-body">
                                <img class="uk-border-circle text-center" width="70" height="70" src="{{ asset('backend/images/resources/points.png')}}">
                                <p class="text-center pt-3">
                                    {{ $quiz_points }} {{ Str::plural('point', $quiz_points) }}
                                </p>
                            </div>
                            <div class="uk-card uk-card-body border-left">
                                <img class="uk-border-circle text-center" width="70" height="70" src="{{ asset('backend/images/resources/question-mark.png')}}">
                                <p class="text-center pt-3">
                                    {{ $quiz->questions->count() }} {{ Str::plural('question',$quiz->questions->count()) }}
                                </p>
                            </div>
                       </div>
                        <div class="uk-flex uk-flex-between" id="timer">
                            <h5 class="text-danger" id="counter"></h5>
                            <div id="questionProgress"></div>
                        </div>
                        @if($questions->count() > 0)
                            <div class="d-widget mt-3">
                                <p class="text-center" id="instruction">
                                    @if($questions->count() > 0)
                                        This quiz contains {{ $questions->count() }}  questions. 
                                        You are expected to complete the entire quiz in 
                                        @if($quiz_time < 60){{ $quiz_time }} {{ Str::plural('second', $quiz_time) }} 
                                        @else {{ ceil($quiz_time / 60) }} {{ Str::plural('minute', $quiz_time / 60) }} 
                                        @endif
                                        <br>The quiz will automatically end after
                                        @if($quiz_time < 60){{ $quiz_time }} {{ Str::plural('second', $quiz_time) }} 
                                        @else {{ ceil($quiz_time / 60) }} {{ Str::plural('minute', $quiz_time / 60) }} 
                                        @endif
                                    @else
                                        No question available for {{ $quiz->title }}
                                    @endif
                                </p>
                                <div class="uk-flex uk-flex-center">
                                    <button id="start" class="button btn-lg danger">
                                        Start Quiz
                                    </button>
                                </div>
                                <div class="d-widget-content">
                                    <div class="tabs tab-content">
                                        <div id="scoreContainer"></div>
                                        <div id="quiz" style="display:none">
                                            {{-- <div id="counter"></div> --}}
                                            <div id="content_1" class="tabcontent">
                                                <div class="d-widget-title"><h4 id="question"></h4></div>
                                                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid p-3">
                                                    <div class="uk-grid-small uk-text-center" uk-grid>
                                                        <div onclick="checkAnswer('A')" class="option"></div>
                                                        <label for="A" id="A" class="uk-flex-right py-1"></label>
                                                    </div>
                                                </div>
                                                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid p-3">
                                                    <div class="uk-grid-small uk-text-center" uk-grid>
                                                        <div onclick="checkAnswer('B')" class="option"></div>
                                                        <label for="B" id="B" class="uk-flex-right py-1"></label>
                                                    </div>
                                                </div>
                                                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid p-3">
                                                    <div class="uk-grid-small uk-text-center" uk-grid>
                                                        <div onclick="checkAnswer('C')" class="option"></div>
                                                        <label for="C" id="C" class="uk-flex-right py-1"></label>
                                                    </div>
                                                </div>
                                                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid p-3">
                                                    <div class="uk-grid-small uk-text-center" uk-grid>
                                                        <div onclick="checkAnswer('D')" class="option"></div>
                                                        <label for="D" id="D" class="uk-flex-right py-1"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <p class="opacity-3 text-center h5">No question yet</p>
                        @endif
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="d-widget bg-light pd-0">
                            <div class="d-widget-content">
                                <div class="w-numeric-value">
                                    <div class="d-content">
                                        <h2 class="main-title">Subjects</h2>
                                        <ul class="uk-list uk-list-divider">
                                            @foreach ($subjects as $subject)
                                                <li>
                                                    <i class="icofont-square px-2 small"></i>
                                                    <a href="{{ route('questions', $subject->id)}}">
                                                        {{ $subject->title }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- main content -->

<script>
    // select all elements
    const start = document.getElementById("start");
    const quiz = document.getElementById("quiz");
    const question = document.getElementById("question");
    const qImg = document.getElementById("qImg");
    const choiceA = document.getElementById("A");
    const choiceB = document.getElementById("B");
    const choiceC = document.getElementById("C");
    const choiceD = document.getElementById("D");
    // const nextQuestion = document.getElementById("nextQuestion");
    // const previousQuestion = document.getElementById("previousQuestion");
    const counter = document.getElementById("counter");
    // const timeGauge = document.getElementById("timeGauge");
    // const progress = document.getElementById("progress");
    const scoreDiv = document.getElementById("scoreContainer");
    const intruction = document.getElementById("instruction");
    let topic = document.getElementById("topic")
    let topicName = document.getElementById("topicName")
    let questionProgress = document.getElementById("questionProgress")
    const timer = document.getElementById("timer")

    // get questions from db


    // convert questions to json format

    let questions = {!! json_encode($questions) !!};

    // create some variables

    const lastQuestion = questions.length - 1;
    let runningQuestion = 0;
    let count = 0;
    let questionTime = questions[runningQuestion].duration;
    const gaugeWidth = 150; // 150px
    const gaugeUnit = gaugeWidth / questionTime;
    let TIMER;
    let score = 0;

    // render a question
    function renderQuestion(){
     
        let q = questions[runningQuestion];
        
        question.innerHTML = (runningQuestion + 1) + ")  " + q.content;
        choiceA.innerHTML = q.A;
        choiceB.innerHTML = q.B;
        choiceC.innerHTML = q.C;
        choiceD.innerHTML = q.D;

        questionProgress.innerHTML = `<h5 class="uk-text-lead text-light bg-dark p-3 rounded" style="font-weight:700">${runningQuestion + 1} of  ${questions.length}</h5>`

    }


    start.addEventListener("click",startQuiz);

    // start quiz
    function startQuiz(){
        instruction.style.display = "none"
        start.style.display = "none";
        renderQuestion();
        quiz.style.display = "block";
        // renderProgress();
        renderCounter();
        TIMER = setInterval(renderCounter,1000); // 1000ms = 1s
    }

    // function getNextQuestion() {
    //     if(runningQuestion < lastQuestion){
    //         runningQuestion++;
    //         renderQuestion();
    //     } else {
    //         nextQuestion.style.display = "none";
    //         quiz.style.display = "none";
    //         scoreRender();

    //     }
    // }

    // function getPreviousQuestion() {
    //     if(runningQuestion > 0){
    //         runningQuestion--;
    //         renderQuestion();
    //     }
    // }

    // render progress
    // function renderProgress(){
    //     for(let qIndex = 0; qIndex <= lastQuestion; qIndex++){
    //         progress.innerHTML += "<div class='prog' id="+ qIndex +"></div>";
    //     }
    // }


    // counter render

    function renderCounter(){
        if(count <= questionTime){
            timer.style.backgroundColor = " #212529"
            counter.innerHTML = `<h5 class="uk-text-lead text-light bg-dark p-3 rounded" style="font-weight:700">${count} seconds</h5>`;
            // timeGauge.style.width = count * gaugeUnit + "px";
            count++
        }else{
            count = 0;
          
            if(runningQuestion < lastQuestion){
                runningQuestion++;
                questionTime = questions[runningQuestion].duration;
                renderQuestion();
            }else{
                // nextQuestion.innerHTML = 'submit';
                // end the quiz and show the score
                clearInterval(TIMER);
                scoreRender();
                counter.innerHTML = `<h5 class="text-danger"><i class="icofont-clock-time"></i> </h5>`

            }
        }
        
    }


    // checkAnwer

    function checkAnswer(userAnswer){
        if( userAnswer == questions[runningQuestion].answer){

            // answer is correct
            score += questions[runningQuestion].points;
            if(runningQuestion < lastQuestion){
            runningQuestion++;
            renderQuestion();
        }else{
            // end the quiz and show the score
            clearInterval(TIMER);
            scoreRender();
        }
        
        }else{
           
        count = 0;
        if(runningQuestion < lastQuestion){
            runningQuestion++;
            renderQuestion();
        }else{
            // end the quiz and show the score
            clearInterval(TIMER);
            scoreRender();
        }
        }

    }

    // score render
    function scoreRender(){
        scoreDiv.style.display = "block";
        quiz.style.display = "none";
        
        // calculate the amount of question percent answered by the user
        const scorePerCent = Math.round(100 * score/{{ $quiz_points }});
        
        // choose the image based on the scorePerCent
        // let img = (scorePerCent >= 80) ? "/img/5.png" :
        //         (scorePerCent >= 60) ? "/img/4.png" :
        //         (scorePerCent >= 40) ? "/img/3.png" :
        //         (scorePerCent >= 20) ? "/img/2.png" :
        //         "/img/1.png";
        
        // scoreDiv.innerHTML = "<img style='text-align:center' src="+ img +">";
        
        scoreDiv.innerHTML = `
                            <h1 class='main-title blue-bg text-light border-3 py-3 pb-2 mt-3 text-center'>

                                Score: ${score}/{{ $quiz_points }}  (${scorePerCent} %)
                            </h1><br>
                            <div class='uk-flex uk-flex-center'>
                                <div><a href="{{ url()->current() }}"><button class="button danger">Retake Quiz</button></a></div>
                                <div class="px-3"><a href="{{ route('print.answers', $quiz) }}" target="_blank"><button class="button success">view correction</button></a></div>
                            </div>
                            `;
        counter.innerHTML = `<h5 class="uk-text-lead uk-text-center text-light bg-dark p-3 rounded" style="font-weight:700">Quiz Ended</h5>`

        saveScore()
    }

    function saveScore() 
    {
        let score_data = {
            user_id: "{{ auth()->user()->id }}",
            quiz_id: "{{ $quiz->id }}",
            user_score: score,
            max_quiz_score: "{{ $quiz_points }}"
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $.ajax({
            url: '/quizzes/post-score',
            method: 'post',
            data: score_data,
            success: function(){
                
            }});

    }

</script>
