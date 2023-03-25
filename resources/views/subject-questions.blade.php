@include('layouts.dashboard.main')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-content">
                <h2 class="main-title">Select Subject</h2>
                <div class="row merged20">
                    @foreach($subjects as $subject)
                        <div class="col-lg-4 col-md-4 col-sm-4 mb-4">
                            <a class="h5" href="{{ route('questions', $subject->id) }}">
                                <div class="subjects">
                                    <div class="d-widget border border-dark bg-transparent shadow-none">
                                        <i class="icofont-arrow-right h2 px-2 pt-2"></i>
                                        {{$subject->title}}
                                    </div>
                                </a>
                                </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div><!-- main content -->