{{--@if(count($errors) > 0)--}}
{{--    <div class="errors_block">--}}
{{--        <div class="alert alert_danger">--}}
{{--            <ul>--}}
{{--                @foreach($errors->all() as $error)--}}
{{--                    <li><i class="fas fa-times-circle"></i> {{$error}}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endif--}}

@if(session("success"))
    <div class="errors_block">
        <div class="alert alert_success">
            <i class="fas fa-check"></i> {{session("success")}}
        </div>
    </div>
@endif

@if(session("error"))
    <div class="errors_block">
        <div class="alert alert_danger">
            <i class="fas fa-times-circle"></i> {{session("error")}}
        </div>
    </div>
@endif

@push("_js")
    <script>
        setTimeout(function(){
            $(".alert.alert_success").fadeOut(2000)
        },3000)
    </script>
@endpush
