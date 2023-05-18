@extends("layouts.admin")

@push('page_name','Dashboard')

@push('_styles')

@endpush

@section("content")

    <div class="container">
        <div class="container-with-adv">

            <div class="container-content">

                <div class="page-header d-flex justify-content-between align-items-center mt-5 mb-10">
                    <h1 class="page-title">Քննարկումներ</h1>

                    <a href="/dashboard/discussions/create" class="btn btn-sm btn-primary">Նոր Քննարկում</a>
                </div>

                <div>
                    @foreach($discussions as $d)
                        <div class="card card-custom mb-30">
                            <div class="card-header bg-light-primary">
                                <div class="card-title">
                                    {{--                                    <span class="card-icon">--}}
                                    {{--                                        <i class="flaticon2-chat-1 text-primary"></i>--}}
                                    {{--                                    </span>--}}
                                    <h3 class="card-label">
                                        {{$d->title}} <span class="ml-3 badge badge-sm badge-primary">{{(count($d->messages))}}</span>
                                    </h3>
                                </div>
                                <div class="card-toolbar">
                                    <div href="#" class="text-right">
                                        <b>Ստեղծել է՝</b> <br>{{$d->user->fullname}}-ը
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div {{--data-scroll="true"--}} {{--data-height="200"--}}>
                                    {{$d->messages[0]->message}}
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                {{--                                <a class="btn btn-light-primary font-weight-bold">Manage</a>--}}
                                <a href="/dashboard/discussions/{{$d->id}}" class="btn btn-light-primary font-weight-bold">Քննարկել</a>
                            </div>
                        </div>

                    @endforeach
                </div>

            </div>



        </div>
    </div>

@endsection
