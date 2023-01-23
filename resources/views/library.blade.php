@include('layouts.dashboard.main')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-content">
                <h4 class="main-title">My Library</h4>
                <div class="row merged20 mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="border p-2">
                            <ul class="menu-slide">
                                <li class="">
                                    <a class="text-secondary" href="#" title="" onclick="allMyContent()">
                                        <i class="icofont-archive"></i> All my content
                                    </a>
                                </li>
                                <li class="">
                                    <a class="text-secondary" href="#" title="" onclick="createdByMe()">
                                        <i class="icofont-user-alt-3"></i> Created by me
                                    </a>
                                </li>
                                <li class="">
                                    <a class="text-secondary" href="#" title="" onclick="likedByMe()">
                                        <i class="icofont-heart"></i> Liked by me
                                    </a>
                                </li>
                                <li class="">
                                    <a class="text-secondary" href="#" title="" onclick="sharedWithMe()">
                                        <i class="icofont-users-alt-3"></i> Shared with me
                                    </a>
                                </li>
                                <li class="">
                                    <a class="text-secondary" href="#" title="" onclick="draft()">
                                        <i class="icofont-file-alt"></i> Drafts
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <div id="content"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- main content -->
<script>
    let sectionToRender = document.getElementById("content")

    
    function renderContent(contentToRender)
    {
        // sectionToRender.style.display = "block"
        sectionToRender.innerHTML = contentToRender
    }

    function allMyContent()
    {
        let quizzes = {!! json_encode($quizzes) !!}

        let content =   quizzes.map((quiz) => {
                return `<div class="row merged20 mb-4">
                            <div class="col-lg-10 col-md-9">
                                <div class="d-widget">
                                    <div class="uk-flex flex-row">
                                        <figure style="max-height:100px;max-width:100px;"><img alt="" src="{{ asset('images/resources/book10.jpg') }}"></figure>
                                        <div class="event-figure">
                                            <h5 class="p-2">${quiz.title}</h5>
                                            <h6 class="p-2">${quiz.created_at}</h6>
                                            <span class="p-2">QUIZ</span>
                                        </div>
                                        <div class="more-opt">
                                            <span>...</span>
                                            <ul>
                                                <li><a href="#" title=""><i class="icofont-pen-alt-1"></i> Edit</a></li>
                                                <li><a href="#" title=""><i class="icofont-ban"></i> Like</a></li>
                                                <li><a href="#" title=""><i class="icofont-trash"></i> Delete</a></li>
                                            </ul>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                        </div>`
            }).join('')  
                                                  //`${JSON.stringify(quizzes)}`
        renderContent(content)


        if(Object.keys(quizzes).length === 0)
        {
            let content = `<div class="uk-flex justify-content-center">
                                <figure style="height:200px;width:200px;"><img alt="" src="{{ asset('images/resources/library.png') }}"></figure>
                            </div>
                            <div class="text-center p-2">
                                <h6>Create your first quiz</h6>
                                <p>Get questions from our library of make your own. It's quick and easy</p>
                                <a><button class="button primary">Create a quiz</button></a>
                            </div>`
                            renderContent(content)
        }
        

    }

    allMyContent()

    function createdByMe()
    {
        let content = `<div>Created By Me</div>`
        renderContent(content)
    }

    function likedByMe()
    {
        let content = `<div>Liked By Me</div>`
        renderContent(content)
    }

    function sharedWithMe()
    {
        let content = `<div>Shared with Me</div>`
        renderContent(content)
    }

    function draft()
    {
        let content = `<div>Draft</div>`
        renderContent(content)
    }


</script>