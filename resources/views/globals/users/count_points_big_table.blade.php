<div class="table-responsive mb-6">
    <table class="table table-striped table-dark text-center" style="min-width: 700px;">
        @if($showTH)
            <tr>
                <td>Տեղ</td>
                <td style="min-width: 200px">Անուն Ազգանուն</td>
                <td style="min-width: 250px; width: 250px">Մեդալ</td>
                <td>Հարցաշար</td>
                <td>Միավորներ</td>
            </tr>
        @endif

        @php
            $position = 1;
            $amIHere = false;
        @endphp

        @foreach($users as $user)

            @if($user->user->id == Auth::id())
                @php
                    $amIHere = true;
                @endphp
            @endif

            <tr @if($user->user->id == Auth::id()) class="bg-primary-o-100" @endif>
                <td><span class="badge badge-primary">{{$position}}</span></td> @php $position++; @endphp

                <td class="text-left">
                    <img src="/img/users/{{$user->user->img}}.png" width="40" class="mr-5">
                    {{$user->user->name}} {{$user->user->surname}}
                </td>
                <td>
                    @if($user->user->medal_gold) <img src="/img/medal_gold.png" width="30"> x {{$user->user->medal_gold}} @endif
                    @if($user->user->medal_silver) <img src="/img/medal_silver.png" width="30"> x {{$user->user->medal_silver}} @endif
                    @if($user->user->medal_bronze) <img src="/img/medal_bronze.png" width="30"> x {{$user->user->medal_bronze}} @endif
                    @if($user->user->medal_top_10) <img src="/img/medal_top_10.png" width="30"> x {{$user->user->medal_top_10}} @endif
                    @if($user->user->medal_task) <img src="/img/medal_task.png" width="30"> x {{$user->user->medal_task}} @endif
                    @if($user->user->medal_count) <img src="/img/medal_count.png" width="30"> x {{$user->user->medal_count}} @endif
                    @if($user->user->medal_percent) <img src="/img/medal_percent.png" width="30"> x {{$user->user->medal_percent}} @endif
                </td>

                <td>
                    <div>{{$user->questions_corrects}} / {{$user->questions_times}}</div>
                    @if($user->questions_times)
                        <div class="progress">
                            <div
                                class="progress-bar progress-bar-striped
                                            @if(round($user->questions_corrects / $user->questions_times * 100) > 66.6)
                                    bg-success
@elseif(round($user->questions_corrects / $user->questions_times * 100) > 33.3)
                                    bg-warning
@else
                                    bg-danger
@endif
                                    "
                                role="progressbar"
                                style="width: {{round($user->questions_corrects / $user->questions_times * 100)}}%"
                                aria-valuenow="{{round($user->questions_corrects / $user->questions_times * 100)}}"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            >
                            </div>
                        </div>
                    @endif
                </td>

                <td>
                    <span class="badge badge-primary">{{$user->questions_times}}</span>
                </td>
            </tr>
        @endforeach

        @if(!$amIHere && $showMe && $me)
            <tr class="bg-white">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><span class="badge badge-primary">20+</span></td>

                <td class="text-left">
                    <img src="/img/users/{{Auth::user()->img}}.png" width="40" class="mr-1">
                    {{Auth::user()->name}} {{Auth::user()->surname}}
                </td>

                <td>
                    @if(Auth::user()->medal_gold) <img src="/img/medal_gold.png" width="30"> x {{Auth::user()->medal_gold}} @endif
                    @if(Auth::user()->medal_silver) <img src="/img/medal_silver.png" width="30"> x {{Auth::user()->medal_silver}} @endif
                    @if(Auth::user()->medal_bronze) <img src="/img/medal_bronze.png" width="30"> x {{Auth::user()->medal_bronze}} @endif
                    @if(Auth::user()->medal_top_10) <img src="/img/medal_top_10.png" width="30"> x {{Auth::user()->medal_top_10}} @endif
                    @if(Auth::user()->medal_task) <img src="/img/medal_task.png" width="30"> x {{Auth::user()->medal_task}} @endif
                    @if(Auth::user()->medal_count) <img src="/img/medal_count.png" width="30"> x {{Auth::user()->medal_count}} @endif
                    @if(Auth::user()->medal_percent) <img src="/img/medal_percent.png" width="30"> x {{Auth::user()->medal_percent}} @endif
                </td>

                <td>
                    <div>{{$me->questions_corrects}} / {{$me->questions_times}}</div>
                    @if($me->questions_times)
                        <div class="progress">
                            <div
                                class="progress-bar progress-bar-striped
                                        @if(round($me->questions_corrects / $me->questions_times * 100) > 66.6)
                                    bg-success
@elseif(round($me->questions_corrects / $me->questions_times * 100) > 33.3)
                                    bg-warning
@else
                                    bg-danger
@endif
                                    "
                                role="progressbar"
                                style="width: {{round($me->questions_corrects / $me->questions_times * 100)}}%"
                                aria-valuenow="{{round($me->questions_corrects / $me->questions_times * 100)}}"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            >
                            </div>
                        </div>
                    @endif
                </td>

                <td>
                    <span class="badge badge-primary">{{$me->questions_times}}</span>
                </td>
            </tr>
        @endif





    </table>
</div>
