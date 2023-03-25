@include('layouts.dashboard.main')
<style>
    label{
        padding: 10px;
        font-size: 16px;
    }
    /* input[type=radio] {
        height: 25px;
        width: 25px;
    }
    input[type=text] {
        font-size:16px;
    }
    input::placeholder {
        font-size: 16px;
    } */
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-content">
                <h4 class="main-title">Create Quiz</h4>
                <div class="row merged20 mb-4">
                    <div class="col-lg-8">
                        <div class="d-widget mb-4">
                            <div>
                                <h4 class="main-title">Quiz title</h4>
                            </div>
                            <div class="d-widget-content">
                                <div class="uk-margin">
                                    <input class="uk-input" type="text" placeholder="Quiz Title" id="quizTitle">
                                </div>
                                <div class="uk-margin">
                                    <select id="subjectId" class="uk-select">
                                        <option value="">select subject</option>
                                        @foreach ($subjects as $subject)
                                            <option value="{{ $subject->id }}">{{ $subject->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="uk-margin text-right">
                                    <button onclick="createQuiz()" type="submit" class="button primary" id="createBtn">Save</button>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <form action={{ route('store.quiz.questions') }} method="post">
                            @csrf
                            <div class="d-widget mb-4">
                                <div class="d-widget-content">
                                    <h4 class="main-title">Question</h4>
                                    <textarea class="uk-textarea"  placeholder="Enter Question"  id="body1" name="content"></textarea></p>
                                </div>
                            </div>
                            <div class="d-widget">
                                <h4 class="main-title">Answer Options</h4>
                                <div class="d-widget-content">
                                    <div class="d-widget-content">
                                        <h4 class="main-title opacity-3">Option A</h4>
                                    </div>
                                    <div class="d-widget-content mb-4">
                                        <p><textarea class="uk-textarea"  placeholder="Enter Option A"  id="body2" name="A"></textarea></p>
                                    </div>
                                    <div class="d-widget-content">
                                        <h4 class="main-title opacity-3">Option B</h4>
                                    </div>
                                    <div class="d-widget-content mb-4">
                                        <p><textarea class="uk-textarea" placeholder="Enter Option B"  id="body3" name="B"></textarea></p>
                                    </div>
                                    <div class="d-widget-content">
                                        <h4 class="main-title opacity-3">Option C</h4>
                                    </div>
                                    <div class="d-widget-content mb-4">
                                        <textarea class="uk-textarea" placeholder="Enter Option C"  id="body4" name="C"></textarea>
                                    </div>
                                    <div class="d-widget-content">
                                        <h4 class="main-title opacity-3">Option D</h4>
                                    </div>
                                    <div class="d-widget-content mb-4">
                                        <p><textarea class="uk-textarea" placeholder="Enter Option D"  id="body5" name="D"></textarea></p>
                                    </div>
                                    <h4 class="main-title">What is the correct Answer?</h4>
                                    <p>Ener the letter corresponding to the correct answer</p>
                                    <div class="uk-margin">
                                        <div class="uk-form-controls">
                                            <input class="uk-input" type="text" name="answer" maxlength="1"  placeholder="Enter Answer" onkeypress="validateLetterOnly(event)">
                                            <small class="text-danger" id="error"></small>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-form-controls">
                                            <input class="uk-input" type="number" min="1" name="points"  placeholder="Enter the number of points">
                                        </div>
                                    </div>
                                    <p>Enter the time allocation for this question</p>
                                    <div class="uk-margin">
                                        <div class="uk-form-controls">
                                            <input class="uk-input" type="number" min="1" name="duration"  placeholder="Enter the duration">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <div class="uk-form-controls">
                                            <button  class="button primary" type="submit" id="submitBtn" >save question</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="d-widget">
                            <div class="d-widget-title">
                                <h5>Quiz Setting guidelines</h5>
                            </div>
                            <ul class="top-clients">
                                <li>
                                    <div class="my-cl">
                                        <h5 class="text-capitalize">Quiz title</h5>
                                        <span>Time</span>
                                    </div>
                                    <a class="button soft-primary" href="#" title="">10 questions</a>
                                </li>
                            </ul>
                        </div>
                        <div class="d-widget mt-4">
                            <div class="d-widget-title">
                                <h5>Evaluations</h5>
                            </div>
                            <ul class="top-clients">
                                <li>
                                    <div class="my-cl">
                                        <h5 class="text-capitalize">Title</h5>
                                        <span>date</span>
                                    </div>
                                    <a class="button success" href="#" title="">Completed</a>
                                </li>
                                <p class="uk-heading-line uk-text-center"><span>Load More</span></p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- main content -->

<script>
    let choices = document.getElementById("choices")
    let counter = 1
    

    function generateChoices()
    {
        const max = 4
        counter++
        if(counter > max)
        {
            
            return;
        }
        let options = ['A', 'B', 'C', 'D', 'E']
        let opt = options[counter]
        choices.innerHTML += `<div class="uk-margin">
                                <textarea class="uk-textarea" name="${opt}" placeholder="Option ${opt}" id="option${opt}" onclick="showCKEditor('option${opt}')"></textarea>
                            </div>`


    }

    
    // notification function

    function notification(type, outputMessage)
    {
        UIkit.notification({
            message: outputMessage,
            status: type,
            pos: 'bottom-right',
            timeout: 5000
        });
    }

    function validateLetterOnly(event)
    {
        let options = ['A', 'B', 'C', 'D', 'E']
        let key = event.key
        
        if(key.match(/^[A-Za-z]+$/) && options.includes(key))
        {
            document.getElementById("error").innerHTML = `<i class="icofont-check-alt text-success px-2">Ok</i> `
        } else {
            document.getElementById("error").innerHTML = "please enter a valid option"

        }
    }

     // create quiz
     function createQuiz()
    {
        const quiz_title = document.getElementById("quizTitle").value
        const subject_id = document.getElementById("subjectId").value
        const createBtn = document.getElementById("createBtn")
        createBtn.textContent = `Creating quiz ...`
        axios.post('/quizzes/create-a-quiz/post', {
            title: quiz_title,
            user_id: "{{ auth()->user()->id }}",
            subject_id: subject_id
        })
        .then(function (response) {
            let message = response.data.success
            notification('success', message)
            document.getElementById("quizTitle").setAttribute('disabled', 'disabled')
            createBtn.textContent = 'Edit'

        })
        .catch(function (error) {
            
           console.log(error)
            // notification('danger', message)
            
        });


    }

// CKEditor

document.addEventListener("DOMContentLoaded", function(event) { 
            
        let numb = 1;
        do {
            ClassicEditor
            .create( document.querySelector( '#body'+ numb ), {
            removePlugins: [ 'insertImage', 'insertMedia', 'Link', 'blockQuote' ],
            height: 150
            } )
            .catch( error => {
            console.error( error );
            } )
            numb++;
        }
        while (numb < 6);
    }); 

    // Save questions to local storage

    function saveQuizQuestions()
    {
        let optionA = document.getElementById("optionA").value
        
        console.log(optionA)
    }

    // function saveQuestion() {
    //     let question = document.getElementById("body1")
    //     console.log(question)
    // }

</script>
