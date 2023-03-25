@include('layouts.dashboard.main')
<style>
    ins{
        color: #fff;
        text-transform: uppercase;
    }
    .icofont-verification-check{
        color: var(--success);
    }
    .icofont-exclamation-circle {
        color: var(--primary);
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-content">
                <div class="p-3 high-opacity text-center" style="background-color:#088dcd; background-size:100% 500px;">
                    <img src="{{ $user->profile_photo_url }}" class="rounded-circle" alt="{{ $user->name }}">
                    <h2 class="main-title text-light">{{ $user->name }}</h2>   
                </div>          
                <div class="price-plan-wraper mt-3">
                    <table class="table table-striped table-responsive-md">
                        <thead>
                            <tr class="blue-bg text-light">
                                <th>
                                    <ins>Questions</ins>
                                </th>
                                <th>
                                    <ins>Topic</ins>
                                </th>
                                <th>
                                    <ins>Auto Marker decision</ins>
                                </th>
                                <th>
                                    <ins>Points earned</ins>
                                </th>
                                <th><ins>Date Completed</ins></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user_performance as $performance)
                                <tr>
                                    <td>
                                        {{ $performance->question->content }}
                                    </td>
                                    <td>{{ $performance->question->topic->topic}}</td>
                                    <td>@if($performance->answer_correct == 1) <i class="icofont-verification-check"></i>
                                        @else <i class="icofont-close text-danger"></i>
                                        @endif
                                    </td>
                                    <td>
                                        @if($performance->answer_correct == 1) {{ $performance->question->points }}
                                        @else 0
                                        @endif
                                    </td>
                                    <td>{{ $performance->created_at}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


