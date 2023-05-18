@php
    $users = \App\Models\User::orderByPoints()->orderBy("questions_times","ASC")->limit(10)->get();
@endphp

<div class="table-responsive">
    <table class="table table-striped table-dark text-center">

        @php
            $position = 1;
            $amIHere = false;
        @endphp

        @foreach($users as $user)

            <tr @if($user->id == Auth::id()) class="bg-primary-o-100" @endif>
                <td><span class="badge badge-primary">{{$position}}</span></td> @php $position++; @endphp

                <td class="text-left">
                    <img src="/img/users/{{$user->img}}.png" width="40" class="mr-2">
                    {{$user->fourLettersName}}
                </td>
                <td>{{$user->points}}</td>
            </tr>

        @endforeach

    </table>
</div>
