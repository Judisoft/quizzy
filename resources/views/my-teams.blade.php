@include('layouts.dashboard.main')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-content">
                <div class="row merged20 mb-4">
                    <div class="col-lg-12">
                        <div class="p-2">
                            <div class="">
                                <div class="uk-flex uk-flex-between">
                                    <div class=""><h4 class="main-title">My Teams</h4></div>
                                    <div class=""><button class="button primary"><a><i class="icofont-users"></i> create a Team</a></button></div>
                                </div>
                            </div>
                            @foreach($user->teams as $team)
                                <a href="{{ url('/my-teams/team-details/'.$team->id) }}">
                                    <div class="d-widget mt-3" style="border-left:8px solid #088dcd;">
                                        <h4 style="font-weight:400;">{{ $team->name }}</h4>
                                    </div>
                                </a>
                            @endforeach
                            <div class="mt-3 p-2">
                                <table class="table table-default all-events table-striped table-responsive-lg">
                                    @if($user->teams->count() > 0)
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Student email</th>
                                                <th>Parent/Guardian Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    @endif
                                    {{-- <tbody>
                                        @forelse($user->teams as $team)
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
                                            </div>
                                        @endforelse
                                    </tbody> --}}
                                </table>
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- main content -->