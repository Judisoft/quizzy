@include('layouts.dashboard.main')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-content">
                <div class="row merged20 mb-4">
                    <div class="col-lg-12">
                        <div class="d-widget">
                            <div class="d-widget-title">
                                <div class="uk-flex uk-flex-between">
                                    <div class=""><h5>My Team(s)</h5></div>
                                    <div class=""><button class="button dark"><a><i class="icofont-users"></i> create team</a></button></div>
                                </div>
                            </div>
                            <table class="table table-default all-events table-striped table-responsive-lg">
                                @if($user->count() > 0)
                                    <thead>
                                        <tr>
                                            <th>Team Name</th>
                                            <th>Members(0)</th>
                                            <th>Date Created</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                @endif
                                <tbody>
                                    @forelse($teams as $team)
                                        <tr>
                                        <td><a href="{{ url('/my-teams/team-details/'.$team->id) }}">{{ $team->name }}</a></td>
                                            <td>
                                                <div class="image-bunch">
                                                    <img src="images/resources/small-pic2.png" alt="">
                                                    <img src="images/resources/small-pic1.png" alt="">
                                                    <img src="images/resources/small-pic3.png" alt="">
                                                    <span>9+</span>
                                                </div>
                                            </td>
                                            <td>{{ $team->created_at->diffForHumans() }}</td>
                                            <td>
                                                <div class="button soft-danger"><i class="icofont-trash"></i></div>
                                                <div class="button soft-primary"><i class="icofont-pen-alt-1"></i></div>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="text-center">
                                            <p class="opacity-3">No team</p>
                                            <button class="button dark"><i class="icofont-users"></i> Create a team</button>
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- main content -->