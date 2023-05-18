@extends("layouts.admin")

@push('page_name','Dashboard')

@push('_js')
    <script>
        $('.chat').scrollTop($('.chat')[0].scrollHeight);
    </script>
@endpush
@push('_styles')
    <style>
        .chat{
            width: 100%;
            padding: 10px;
            height:400px;
            overflow-y: scroll;
            border: 1px solid #6565652b;
            border-radius: 10px;
        }
        .chat::-webkit-scrollbar {
            width: 5px;
        }

        .chat::-webkit-scrollbar-track {
            border-radius: 0 10px 10px 0;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        }

        .chat::-webkit-scrollbar-thumb {
            border-radius: 0 10px 10px 0;
            -webkit-box-shadow: inset 0 0 6px rgba(0,116,223,0.5);
        }
        textarea{
            resize: none;
        }
    </style>
@endpush

@section("content")

    <div class="container">
        <div class="container-with-adv">

            <div class="container-content">

                <div class="page-header d-flex justify-content-between mt-5 mb-10">
                    <h1 class="page-title">{{$discussion->title}}</h1>
                </div>

                <div class="chat mb-10">
                    @foreach($discussion->messages as $message)

                        @if($message->user_id == auth()->user()->id)

                            <div class="d-flex justify-content-end text-right mb-10">
                                <div class="w-75">
                                    <div class="d-flex justify-content-end">
                                        <div>
                                            <p class="mb-0">
                                                @if($message->user->is_admin)
                                                    {!!  $message->message !!}
                                                @else
                                                    {{$message->message}}
                                                @endif
                                            </p>
                                            <p class="text-muted">{{$message->created_at}}</p>
                                        </div>

                                        <div class="ml-3">
                                            <img src="/img/users/{{$message->user->img}}.png" width="50" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>

                        @else

                            <div class="">
                                <div class="w-75">
                                    <div class="d-flex mb-10">
                                        <div class="mr-3">
                                            <img src="/img/users/{{$message->user->img}}.png" width="50" alt="">
                                        </div>

                                        <div>
                                            <p class="label label-lg label-inline label-light-primary mb-1">{{$message->user->fullname}}</p>
                                            <p class="mb-0">
                                                @if($message->user->is_admin)
                                                    {!!  $message->message !!}
                                                @else
                                                    {{$message->message}}
                                                @endif
                                            </p>
                                            <p class="text-muted">{{$message->created_at}}</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        @endif

                    @endforeach
                </div>

                <form method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea rows="8" name="message" class="form-control" placeholder="Նամակ․․․"></textarea>
                    </div>
                    <div class="text-right">
                        <input type="submit" class="btn btn-primary" value="Ուղարկել">
                    </div>
                </form>

            </div>


        </div>
    </div>


@endsection
