@include('layouts.dashboard.main')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-content">
                <h4 class="main-title">Bookmarks</h4>                
                <div class="row merged20 mb-4">
                    <div class="col-lg-8">
                        <div class="d-widget">
                            <div class="d-widget-title">
                                <h5>All Bookmarks</h5>
                            </div>
                            <table class="table table-default table-responsive-md">
                                <thead>
                                    <th><h4 class="text-light">Bookmarked Quizzes</h4></th>
                                    <th></th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach ($user_bookmarks as $bookmark)
                                    <tr>
                                        <td class="text-capitalize">
                                            <a href="{{ route('display.quiz.questions', $bookmark->quiz) }}">
                                                <i class="icofont-folder h2 text-warning px-2"></i> 
                                                <p style="font-weight:500;">{{ $bookmark->quiz->title }} </p>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('display.quiz.questions', $bookmark->quiz) }}">
                                                <button class="button small primary">
                                                    <i class="icofont-ui-play px-2"></i>
                                                    Take quiz
                                                </button>
                                            </a>
                                        </td>
                                        <td><small><em style="color:#719ae1">Bookmarked {{ $bookmark->created_at->diffForHumans()}}</em></small></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-widget">
                            <div class="d-widget-title">
                                <h5>All Reviews</h5>
                            </div>
                            <table class="table-default manage-user table table-striped table-responsive-md">
                                <tbody>
                                    <tr>
                                        <td><a href="#" title=""> Advance PHP Book</a></td>
                                        <td>
                                            <span class="iconbox button soft-primary"><i class="icofont-pen-alt-1"></i></span>
                                            <span class="iconbox button soft-danger"><i class="icofont-trash"></i></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- main content -->