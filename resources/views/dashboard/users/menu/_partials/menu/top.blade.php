<div>
    <h2>Լավագույն արդյունք</h2>
    <div class="table-responsive mb-6">
        <table class="table table-striped table-dark text-center" style="min-width: 700px;">
            <tr>
                <td>Տեղ</td>
                <td style="min-width: 200px">Անուն Ազգանուն</td>
                <td><img src="/img/medal_gold.png" width="30px" alt=""></td>
                <td><img src="/img/medal_silver.png" width="30px" alt=""></td>
                <td><img src="/img/medal_bronze.png" width="30px" alt=""></td>
                <td><img src="/img/medal_top_10.png" width="30px" alt=""></td>
                <td>Միավորներ</td>
            </tr>

            @php
                $position = 1;
            @endphp

            @foreach($usersTop as $user)
                <tr @if($user->id == Auth::id()) class="bg-primary-o-100" @endif>
                    <td>
                        <span class="badge badge-primary">{{$position}}</span> @php $position++; @endphp
                    </td>

                    <td class="text-left">
                        <img src="/img/users/{{$user->img}}.png" width="40" class="mr-5">
                        {{$user->name}} {{$user->surname}}
                    </td>

                    <td>
                        {{$user->medal_gold}}
                    </td>

                    <td>
                        {{$user->medal_silver}}
                    </td>

                    <td>
                        {{$user->medal_bronze}}
                    </td>

                    <td>
                        {{$user->medal_top_10}}
                    </td>

                    <td>
                        {{$user->points}}
                    </td>
                </tr>

            @endforeach
        </table>
    </div>
</div>
