@include('layouts.dashboard.main')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-content">
                <div class="row merged20 mb-4">
                    <div class="col-lg-12">
                        <div class="d-widget">
                            <div class="d-widget-title">
                                <div>
                                    <h5 class="main-title">{{ $team->name }}
                                        <button class="button small soft-primary" onclick="editTeamName()" id="editBtn">
                                            edit <i class="icofont-pen-alt-1"></i>
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div class="p-2" id="edit" style="display:none">
                                <div uk-alert>
                                    <a class="uk-alert-close" uk-close>
                                    </a>
                                    <h3>Edit Team Name</h3>
                                    <p>Form goes here</p>
                                </div>
                            </div>
                            <table class="table table-default all-events table-striped table-responsive-lg">
                                @if($team->users->count() > 0)
                                    <thead>
                                        <tr>
                                            <th>Team Members</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <th>Role</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                @endif
                                <tbody>
                                    @forelse($team->users as $user)
                                        <tr>
                                            <td><h6 class="main-title"><img src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}">{{ $user->name }}</h6></td>
                                            <td><h5>{{ $user->role }}</h5></td>
                                            <td>
                                                <div class="button soft-danger"><i class="icofont-trash"></i></div>
                                                <div class="button soft-primary"><i class="icofont-pen-alt-1"></i></div>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="text-center">
                                            <p class="opacity-3">No team Member</p>
                                            <button class="button primary"><i class="icofont-ui-social-link"></i> Invite team member</button>
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

<script>
    const edit = document.getElementById("edit")

    function editTeamName()
    {
        edit.style.display = 'block'
    }
</script>