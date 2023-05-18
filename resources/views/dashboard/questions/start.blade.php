@extends("layouts.admin")

{{--@push('_styles')--}}
{{--    --}}
{{--@endpush--}}

@push('_styles')
    <style>
        .seconds{
            position: absolute;
            top: 0;
            left: 0;
            background: red;
            color: white;
            width: 30px;
            text-align: center;
        }
    </style>
@endpush

@push('_js')
    <script>

        let seconds = {{$question->seconds}};
        let isAllow = true;

        let time = setInterval(function(){
            seconds--
            $(".seconds").html(seconds);


            if(seconds == 0){
                wrongAnswer("time");
                clearInterval(time)
            }
        }, 1000)

        // $(window).blur(function(){
        //     wrongAnswer("hack")
        // });
        // document.addEventListener("visibilitychange", function(){
        //     if (document.hidden) {
        //         wrongAnswer("hack")
        //     }
        // });

        function wrongAnswer(reason){
            isAllow = false;
            $.ajax({
                url: '/dashboard/questions/start',
                method: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    id: {{$question->id}},
                    answer: "False answer from Hidden"
                },
                success: function (r) {
                    $(location).attr('href',`/dashboard/questions?q=${reason}`);
                }
            })
        }

        $(".__answer_multiple").click(function(){
            if(isAllow){
                // isAllow = false;
                const answer = $(this).attr("data-answer");

                $.ajax({
                    url: '/dashboard/questions/start',
                    method: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        id: {{$question->id}},
                        answer: answer
                    },
                    success: function (r) {
                        $(location).attr('href',`/dashboard/questions?q=${r}`);
                    }
                })
            }
        })
        $(".__answer").click(function(){
            if(isAllow){
                isAllow = false;

                const answer = $(".__input").val();
                $.ajax({
                    url: '/dashboard/questions/start',
                    method: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        id: {{$question->id}},
                        answer: answer
                    },
                    success: function (r) {
                        $(location).attr('href',`/dashboard/questions?q=${r}`);
                    }
                })
            }
        })

    </script>
@endpush

@section("content")

    <div class="code position-relative">
        <div class="w400">
            <div class="seconds">{!! $question->seconds !!}</div>
            {!! $question->question !!}
        </div>
    </div>

    <div class="text-center">
        @if(!$question->form)
            <div class=" mb-5">
                <input type="text" class="w-200px form-control m-auto __input">
            </div>

            <div>
                <button class="btn btn-light-primary w-200px border-primary __answer">Պատասխանել</button>
            </div>
        @else
            @php
                $forms = explode("|", $question->form);


            @endphp

            @for($i=0; $i<count($forms); $i++)

                <div>
                    <button data-answer="{{$i+1}}" class="text-dark btn btn-lg btn-light-secondary w-100 border-secondary mb-5 text-left __answer_multiple"><b>{{$i+1}}.</b> {{$forms[$i]}}</button>
                </div>

            @endfor
        @endif
    </div>






@endsection
