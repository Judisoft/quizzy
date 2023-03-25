@include('layouts.dashboard.main')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-content">
                <h4 class="main-title fw-600">Welcome {{auth()->user()->name}}!</h4>
                <div class="row merged20 mb-4">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="d-widget d-widget-action soft-red">
                            <div class="d-widget-title">
                                <h3 class="fw-700">Quizzes</h3>
                            </div>
                            <div class="d-widget-content">
                                <span class="realtime-ico pulse"></span>
                                <h6><a href="#modal-center" class="text-primary fw-500" uk-toggle>Take quiz</a></h6>
                                <h5 class="opacity-3 text-primary">{{ $quizzes->count() }}</h5>
                                <i class="icofont-dice-multiple"></i>
                            </div>
                            <div id="modal-center" class="uk-flex-top" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <div class="uk-flex uk-flex-column mr-auto">
                                        <h4 class="main-title">Choose a quiz mode</h4>
                                        <p>There are two ways in which you can take quizzes - <em>Revision/Practice Mode</em> and the <em>Timed Mode</em>
                                            In the Revision mode, you are required to provide answers to questions and verify if your answer is right or wrong. <br>
                                            However, in the timed-quiz mode, a quiz is automatically generated and you're expected too complete the entire quiz in a single session.
                                            At the end of the quiz, your score will be rendered and the correction provided.
                                        </p>
                                        <div class="p-2"><a href="{{route('subjects')}}"><button href="" class="button primary btn-block"><i class="icofont-file-alt"></i> Revision mode</button></a></div>
                                        <div class="p-2"><a href="{{route('quizzes')}}"><button class="button primary btn-block"><i class="icofont-clock-time"></i> Timed-quiz mode</button></a></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="d-widget d-widget-action soft-blue">
                            <div class="d-widget-title">
                                <h3 class="fw-700">Questions</h3>
                            </div>
                            <div class="d-widget-content">
                                <span class="realtime-ico pulse"></span>
                                <h6><a href="{{route('subjects')}}" class="text-primary fw-500">View questions</a></h6>
                                <h5 class="opacity-3 text-primary">{{ $questions->count() }}</h5>
                                <i class="icofont-files-stack"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="d-widget d-widget-action soft-green">
                            <div class="d-widget-title">
                                <h3 class="fw-700">Quiz Challenge</h3>
                            </div>
                            <div class="d-widget-content">
                                <span class="realtime-ico pulse"></span>
                                <h6><a href="{{ route('weekly.challenge') }}" class="text-primary fw-500">Challenge your peers</a></h6>
                                <h5 class="opacity-3 text-primary">{{ $participants->count() }} </h5>
                                <i class="icofont-cubes"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row merged20 mb-4">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="d-widget">
                            <div class="d-widget-title">
                                <h3 class="fw-700">Quiz Performance</h3>
                            </div>
                            <div class="d-widget-content">
                                <i class="icofont-chart-flow-1"></i>
                                <div id="chart_div" style="width: 100%;height: 500px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row merged20 mb-4">
                    <div class="col-lg-6">
                        <div class="d-widget">
                            <div class="d-widget-title">
                                <h5>Scheduled Evaluations</h5>
                            </div>
                            <ul class="upcoming-event">
                                @foreach ($scheduled_quizzes as $quiz)
                                <li>
                                    <div class="event-date soft-blue">
                                        <i>{{ $quiz->created_at->format('d') }} {{ $quiz->created_at->format('M') }}</i>
                                        <span>{{ $quiz->created_at->format('Y') }}</span>
                                    </div>
                                    <div class="event-deta">
                                        <h5><a href="{{ route('display.quiz', $quiz) }}">{{ $quiz->title }}</a></h5>
                                        <ul>
                                            <li><i class="icofont-user"></i> {{ $quiz->user->name }}</li>
                                            <li><i class="icofont-file-alt"></i> {{ $quiz->questions->count()}}</li>
                                            <li><i class="icofont-clock-time"></i> {{ $quiz->created_at->format('H:i:s:a') }}</li>
                                        </ul>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-widget">
                            <div class="d-widget-title">
                                <h5>Notice Board</h5>
                            </div>
                            <div class="d-Notices"> 
                                <ul>
                                    @forelse ($team->teamInvitations as $invitation)
                                        <li>
                                            <p>{{ $invitation->created_at->format('l jS \o\f F Y ') }}</p>
                                            <h6><a href="#" title="">{{ $team->owner }}</a> <span>{{ $invitation->created_at->diffForHumans() }}</span></h6>
                                            <p>
                                                {{$invitation->team->name  }}
                                            </p>
                                            <div class="action-btns">
                                                <div class="button soft-danger" title="ignore">decline</div>
                                                <div class="button soft-primary" title="save">accept</div>
                                            </div>
                                        </li>
                                    @empty
                                        <p class="text-center">Enjoy the silence</p>
                                    @endforelse
                                        
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- main content -->
<script type="text/javascript">

var userScore = <?php echo $result; ?>; //
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
    var data = google.visualization.arrayToDataTable(userScore);

    var options = {
                    series: {
                        0: { color: '#008dcd' },
                        1: { color: '#6f9654' }
                    },
                    hAxis: {
                        title: 'Quizzes',  
                        titleTextStyle: {
                                color: '#008dcd'
                            }
                        },
                    vAxis: {title: 'Score (%)', 
                            titleTextStyle: {
                                color: '#008dcd'
                            },
                            baselineColor: '#008dcd', 
                            minValue: 0, 
                            gridlines: {
                                color: 'transparent'
                            }
                        }
    };

    var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
    chart.draw(data, options);
    }
</script>
