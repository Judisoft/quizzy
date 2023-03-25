@include('layouts.dashboard.main')
<style>
    .icon-bg{
        height:50px;
        width:50px;
        padding: 5px;
        border-radius:5px;
        background-color: #ddd;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-content">
                <h4 class="main-title">My Library</h4>
                <div class="row merged20 mb-4">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="p-2" uk-sticky="offset:100;media : @m; top:20">
                            <ul class="menu-slide">
                                <li class="">
                                    <a class="text-secondary" title="" onclick="createdByMe()">
                                        <i class="icofont-user-alt-3 icon-bg"></i> Created by me
                                    </a>
                                </li>
                                <li class="">
                                    <a class="text-secondary"title="" onclick="likedByMe()">
                                        <i class="icofont-heart icon-bg"></i> Liked by me
                                    </a>
                                </li>
                                <li class="">
                                    <a class="text-secondary" title="" onclick="sharedWithMe()">
                                        <i class="icofont-users-alt-3 icon-bg"></i> Shared with me
                                    </a>
                                </li>
                                <li class="">
                                    <a class="text-secondary" title="" onclick="draft()">
                                        <i class="icofont-file-alt icon-bg"></i> Drafts
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <div id="scroll-basic">
                            <div id="content"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- main content -->
<script>
    let sectionToRender = document.getElementById("content")

    function formatDate(date)
    {
        dayjs.extend(window.dayjs_plugin_relativeTime);
        return dayjs(date).fromNow()
    }


    function renderContent(contentToRender)
    {
        // sectionToRender.style.display = "block"
        sectionToRender.innerHTML =`<div class="col-lg-9">
                                        <table class="table table-responsive-md bg-transparent">
                                            <thead>
                                                <th>Title</th>
                                                <th>Subject</th>
                                                <th>Views</th>
                                                <th>Date created</th>
                                            </thead>
                                            <tbody>
                                                ${contentToRender}
                                            </tbody>
                                        </table>
                                    </div>` 
         
    }

    function createdByMe()
    {
        const quizzes = {!! json_encode($quizzes) !!}
        // console.log(quizzes)
        const content =   quizzes.map((q) => {
                return ` <tr>
                            <td class="text-capitalize">
                                <a href="#">
                                    <i class="icofont-folder h2 text-warning px-2"></i> 
                                    <p style="font-weight:500;">${q.title}</p>
                                </a>
                            </td>
                            <td>${q.subject.title}</td>
                            <td>${q.views}</td>
                            <td>${formatDate(q.created_at)}</td>
                        </tr>`
            }).join('')  

        renderContent(content)


        if(Object.keys(quizzes).length === 0)
        {
            let content = `<div class="uk-flex justify-content-center">
                                <figure style="height:200px;width:200px;"><img alt="" src="{{ asset('images/resources/library.png') }}"></figure>
                            </div>
                            <div class="text-center p-2">
                                <h6>Create your first quiz</h6>
                                <p>Get questions from our library of make your own. It's quick and easy</p>
                                <a href="{{ route('create.quiz') }}"><button class="button primary">Create a quiz</button></a>
                            </div>`
                            renderContent(content)
        }
    }

    createdByMe()

    function likedByMe()
    {
        let likedQuizzes = {!! json_encode($liked_quizzes) !!}

        let content =   likedQuizzes.map((q) => {
                return `<tr>
                            <td class="text-capitalize">
                                <a href="#">
                                    <i class="icofont-folder h2 text-warning px-2"></i> 
                                    <p style="font-weight:500;">${q.quiz.title}</p>
                                </a>
                            </td>
                            <td>${q.quiz.subject.title}</td>
                            <td>${q.quiz.views}</td>
                            <td>${formatDate(q.quiz.created_at)}</td>
                        </tr>`
            }).join('')  
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