<style>
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
    height : 100px;
    width : 200px;
    text-align: center;
    }
    #counter{
        font-size: 3em;
    }
    /* #scoreContainer{
        display: flex;
        flex-direction: column;
    } */

</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-l text-gray-800 leading-tight uppercase">
            {{ __('Weekly Challenge')}} 
        </h2>
    </x-slot>
    <div class="min-h-screen flex flex-col bg-gray-100 items-center md:mx-32 sm:mx-32">
        <div class="w-full bg-white  sm:max-w-2xl mt-6 p-5  shadow-md overflow-hidden sm:rounded-lg prose">
            <div class="text-center border-b pb-3">
                <h1 class="text-center uppercase" id="quizTitle" style="display: none;">{{__('Medxam weekly challenge')}} </h1>
                <h1 class="font-normal text-md" id="textIntro">
                    Welcome to Week {{ $last_week_id }} Challenge
                </h1>
                @if($can_take_challenge)
                    <p id="textIntro">Carefully read these <a href="#">instructions</a> before taking this challenge</p>
                    <button id="start" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">
                        Start Challenge
                    </button>
                @else
                    <h5 class="font-bold opacity-75 p-3 rounded-md shadow-md text-white" style="background-color:#D60808;">You have already taken this challenge</h5>
                @endif
            </div>
            <div class="flex items-center" id="scoreContainer" class="w-36" ></div>
            <div id="quiz" style="display: none">
                <div class="flex justify-end p-2 font-bold" id="counter"></div>
                <span id="time">59:00</span>
                <div id="question" class="text-xl font-bold p-3"></div>
                <div class="flex  items-center ml-3 ">
                    <div onclick="checkAnswer('A')" class="w-6 h-6 rounded-full  border-2  focus:bg-red-600 active:bg-red-600"></div>
                    <label for="A" id="A" class="ml-2 text-lg font-semibold text-gray-900 dark:text-gray-300"></label>
                </div>
                <div class="flex items-center ml-3">
                    <div onclick="checkAnswer('B')" class="w-6 h-6 rounded-full  border-2  focus:bg-red-600 active:bg-red-600"></div>
                    <label for="B" id="B" class="ml-2 text-lg font-semibold text-gray-900 dark:text-gray-300"></label>
                </div>
                <div class="flex items-center ml-3">
                    <div onclick="checkAnswer('C')" class="w-6 h-6 rounded-full  border-2  focus:bg-red-600 active:bg-red-600"></div>
                    <label for="C" id="C" class="ml-2 text-lg font-semibold text-gray-900 dark:text-gray-300"></label>
                </div>
                <div class="flex items-center ml-3 mb-3">
                    <div onclick="checkAnswer('D')" class="w-6 h-6 rounded-full  border-2  focus:bg-red-600 active:bg-red-600"></div>
                    <label for="D" id="D" class="ml-2 text-lg font-semibold text-gray-900 dark:text-gray-300"></label>
                </div>
                <div id="timer" class="w-52 ">
                    <div id="timeGauge" class="h-2"></div>
                </div>
            </div>
            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <a href="#" class="ml-1 underline">
                            Help desk
                        </a>
                        <a href="#" class="ml-4 underline">
                            Tutors
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0 opacity-75">
                    Medxam v1.0
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
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
        const timeGauge = document.getElementById("timeGauge");
        const progress = document.getElementById("progress");
        const scoreDiv = document.getElementById("scoreContainer");
        const intro = document.getElementById("intro");
        const textIntro = document.getElementById("textIntro");
        const quizTitle= document.getElementById("quizTitle");

        // convert questions to json format

        let questions = {!! json_encode($questions) !!};

        // create some variables

        const lastQuestion = questions.length - 1;
        let runningQuestion = 0;
        let count = 0;
        const questionTime = 45; // 45s
        const gaugeWidth = 150; // 150px
        const gaugeUnit = gaugeWidth / questionTime;
        let TIMER;
        let score = 0;

        // render a question
        function renderQuestion(){
         
            let q = questions[runningQuestion];
            
            question.innerHTML = q.content;
            choiceA.innerHTML = q.A;
            choiceB.innerHTML = q.B;
            choiceC.innerHTML = q.C;
            choiceD.innerHTML = q.D;

            // uncheck all radio buttons

            radioBtns = document.querySelectorAll('input[name="choice"]');
            
            for(const radioBtn of radioBtns) {
                
                radioBtn.checked = false;
            }
        }

        start.addEventListener("click",startQuiz);

        // start quiz
        function startQuiz(){
            start.style.display = "none";
            textIntro.style.display = "none";
            quizTitle.style.display = "block";
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
                counter.innerHTML = "<span class='inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white capitalize tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition'> Time elapsed: "+ count + " sec " + "</span>";
                timeGauge.style.width = count * gaugeUnit + "px";
                count++
            }else{
                count = 0;
              
                if(runningQuestion < lastQuestion){
                    runningQuestion++;
                    renderQuestion();
                }else{
                    // nextQuestion.innerHTML = 'submit';
                    // end the quiz and show the score
                    clearInterval(TIMER);
                    scoreRender();
                }
            }
            
        }


        // checkAnwer

        function checkAnswer(userAnswer){
            if( userAnswer == questions[runningQuestion].answer){

                // answer is correct
                score++;
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

        // // answer is correct
        // function answerIsCorrect(){
        //     document.getElementById(runningQuestion).style.backgroundColor = "#0f0";
        // }

        // // answer is Wrong
        // function answerIsWrong(){
        //     document.getElementById(runningQuestion).style.backgroundColor = "#f00";
        // }

        // score render
        function scoreRender(){
            scoreDiv.style.display = "block";
            quiz.style.display = "none";
            
            // calculate the amount of question percent answered by the user
            const scorePerCent = Math.round(100 * score/questions.length);
            
            // choose the image based on the scorePerCent
            // let img = (scorePerCent >= 80) ? "/img/5.png" :
            //         (scorePerCent >= 60) ? "/img/4.png" :
            //         (scorePerCent >= 40) ? "/img/3.png" :
            //         (scorePerCent >= 20) ? "/img/2.png" :
            //         "/img/1.png";
            
            // scoreDiv.innerHTML = "<img style='text-align:center' src="+ img +">";
            scoreDiv.innerHTML = `
                                <div class='border-b pb-2 mt-2 text-center'> <h2 class='text-red-600 bg-gray-100 text-md  rounded-md'>Score: ${score}/${questions.length} <br> (${scorePerCent} %) </h2><br>
                                    <a href='{{ route('leaders.board') }}' class='inline-flex items-center justify-center no-underline px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white  tracking-widest hover:bg-red-500 focus:outline-none focus:border-gray-800 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition'>View position on leaderboard</a> 
                                </div>`;
            
            saveScore();
        }

        function saveScore() {
            const u_score = Math.round(100 * score/questions.length)
            let current_week_id = {{ $last_week_id }} + 1;
            let user_data = {
                user_id: "{{ auth()->user()->id }}",
                week_id: current_week_id,
                user_score: u_score
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            $.ajax({
                url: '/weekly-challenge/post',
                method: 'post',
                data: user_data,
                success: function(){
                    
                }});

        }

    </script>
