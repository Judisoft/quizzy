@include('layouts.dashboard.main')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-content">
                <h4 class="main-title">Evaluations</h4>
                <div class="row merged20 mb-4">
                    <div class="col-lg-8">
                        @forelse ($evaluations as $evaluation)
                            <div class="d-widget mb-4">
                                <div class="d-widget-title">
                                    <h5 class="text-capitalize">{{ $evaluation->quiz->title }}</h5>
                                </div>
                                <table class="table-default table  table-responsive-md">
                                <thead>
                                <tr>
                                    <th class="wd-35p">Examiner</th>
                                    <th class="wd-25p">Subject</th>
                                    <th class="wd-15p">Score (%)</th>
                                    <th class="wd-25p">Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <a href="{{ route('evaluation.show', $evaluation->quiz) }}">hello</a>
                                    <td>
                                        <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xs"><img src="{{ $evaluation->quiz->user->profile_photo_url }}" alt="{{ $evaluation->quiz->user->name}}"></div>
                                        <span class="tx-medium mg-l-10">{{ $evaluation->quiz->user->name }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        {{ $evaluation->quiz->subject->title }}
                                    </td>
                                    <td>{{ round(($evaluation->score * 100) / $evaluation->max_quiz_score, 1) }}</td>
                                    <td>
                                        {{ $evaluation->created_at }}
                                    </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        @empty
                            <p class="text-center">You have not taken any evaluation yet</p>
                        @endforelse
                        <div class="text-right">{{ $evaluations->links() }}</div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="d-widget">
                            <div class="d-widget-title">
                                <h5>Pending Evaluations</h5>
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
                                @foreach ($evaluations as $evaluation)
                                    <li>
                                        <div class="my-cl">
                                            <h5 class="text-capitalize">{{ $evaluation->quiz->title }}</h5>
                                            <span>{{ $evaluation->created_at }}</span>
                                        </div>
                                        <a class="button success" href="#" title="">Completed</a>
                                    </li>
                                @endforeach
                                <p class="uk-heading-line uk-text-center"><span>Load More</span></p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- main content -->