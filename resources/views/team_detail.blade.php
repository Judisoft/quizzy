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
                                @if($team_members->count() > 0)
                                    <thead>
                                        <tr>
                                            <th>Team Members</th>
                                        </tr>
                                    </thead>
                                @endif
                                <tbody>
                                    @forelse($team_members as $member)
                                        <tr>
                                            <td><h5>{{ $member->name }}</h5></td>
                                        </tr>
                                    @empty
                                        <div class="text-center">
                                            <p class="opacity-3">No team Member</p>
                                            <button class="button dark"><i class="icofont-ui-social-link"></i> Invite team member</button>
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