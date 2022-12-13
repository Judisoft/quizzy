@include('layouts.dashboard.main')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-content">
                <h4 class="main-title">Welcome {{auth()->user()->name}}!</h4>
                <div class="row merged20 mb-4">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="d-widget d-widget-action soft-red">
                            <div class="d-widget-title">
                                <h5>Quizzes</h5>
                            </div>
                            <div class="d-widget-content">
                                <span class="realtime-ico pulse"></span>
                                <h6><a href="#modal-center" uk-toggle>Take quiz</a></h6>
                                <h5 class="opacity-3">{{ $quizzes->count() }} Qz</h5>
                                <i class="icofont-light-bulb"></i>
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
                                <h5>Quiz Questions</h5>
                            </div>
                            <div class="d-widget-content">
                                <span class="realtime-ico pulse"></span>
                                <h6><a href="{{route('show.questions')}}">Create a quiz</a></h6>
                                <h5 class="opacity-3">{{ $questions->count() }} Qs</h5>
                                <i class="icofont-check-circled"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="d-widget d-widget-action soft-green">
                            <div class="d-widget-title">
                                <h5>Weekly Challenge</h5>
                            </div>
                            <div class="d-widget-content">
                                <span class="realtime-ico pulse"></span>
                                <h6><a href="{{ route('weekly.challenge') }}">Challenge your peers</a></h6>
                                <h5 class="opacity-3">{{ $participants->count() }} Ps</h5>
                                <i class="icofont-badge"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row merged20 mb-4">
                    <div class="col-lg-6">
                        <div class="d-widget">
                            <div class="d-widget-title">
                                <h5>Events Schedule</h5>
                            </div>
                            <ul class="upcoming-event">
                                <li>
                                    <div class="event-date soft-red">
                                        <i>24 FEB</i>
                                        <span>2021</span>
                                    </div>
                                    <div class="event-deta">
                                        <h5>digital marketing summit</h5>
                                        <ul>
                                            <li><i class="icofont-user"></i> steve Josef</li>
                                            <li><i class="icofont-map-pins"></i> New York City</li>
                                            <li><i class="icofont-clock-time"></i> 9:00PM-12AM</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="event-date soft-green">
                                        <i>10 MAR</i>
                                        <span>2021</span>
                                    </div>
                                    <div class="event-deta">
                                        <h5>digital marketing summit</h5>
                                        <ul>
                                            <li><i class="icofont-user"></i> steve Josef</li>
                                            <li><i class="icofont-map-pins"></i> New York City</li>
                                            <li><i class="icofont-clock-time"></i> 9:00PM-12AM</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="event-date soft-blue">
                                        <i>20 OCT</i>
                                        <span>2021</span>
                                    </div>
                                    <div class="event-deta">
                                        <h5>digital marketing summit</h5>
                                        <ul>
                                            <li><i class="icofont-user"></i> steve Josef</li>
                                            <li><i class="icofont-map-pins"></i> New York City</li>
                                            <li><i class="icofont-clock-time"></i> 9:00PM-12AM</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-widget">
                            <div class="d-widget-title">
                                <h5>Notice Borad</h5>
                            </div>
                            <div class="d-Notices"> 
                                <ul>
                                    <li>
                                        <p>March 21, 2021</p>
                                        <h6><a href="#" title="">Mr. William</a> <span>5 mint ago</span></h6>
                                        <p>
                                            invited to join the meeting in the conference room at 9.45 am
                                        </p>
                                        <div class="action-btns">
                                            <div class="button soft-danger" title="ignore"><i class="icofont-trash"></i></div>
                                            <div class="button soft-primary" title="save"><i class="icofont-star"></i></div>
                                        </div>	
                                    </li>
                                    <li>
                                        <p>Feb 15, 2021</p>
                                        <h6><a href="#" title="">Andrew </a> <span>35 mint ago</span></h6>
                                        <p>
                                            created a group 'Hencework' in the discussion forum
                                        </p>
                                        <div class="action-btns">
                                            <div class="button soft-danger" title="ignore"><i class="icofont-trash"></i></div>
                                            <div class="button soft-primary" title="save"><i class="icofont-star"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <p>Jan 10, 2021</p>
                                        <h6><a href="#" title="">Franklyn J.</a> <span>40 mint ago</span></h6>
                                        <p>
                                            Prepare the conference schedule
                                        </p>
                                        <div class="action-btns">
                                            <div class="button soft-danger" title="ignore"><i class="icofont-trash"></i></div>
                                            <div class="button soft-primary" title="save"><i class="icofont-star"></i></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- main content -->


