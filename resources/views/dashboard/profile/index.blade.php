@extends("layouts.admin")

@push('_styles')
	<link rel="stylesheet" href="{{asset('css/dashboard/profile/index.css')}}">
    <style>
        .image_selected{
            display: inline-block;
            padding: 5px;
            border: 2px solid transparent;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .image_selected.active{
            border: 2px solid #ababab;
        }
    </style>
@endpush

@push('_js')
	{{-- <script type="text/javascript" src="{{asset('js/front/index/index.js')}}"></script> --}}
	<script>
		$(document).ready(function(){
            $(".image_selected").click(function(){
                $(".image_selected").removeClass("active")
                $(this).addClass("active")
            })
        })
	</script>
@endpush

@section("content")

	@include("errors.adminForm")

    <div class="row justify-content-between mt-5">

        <div class="col-lg-6 mb-20">

            <h3 class="mb-5">Իմ տվյլաները</h3>
            <div class="card p-5">
                <form action="" method="POST">
                    @csrf

                    <div class="form-group">
                        <label class="form-label">Անուն</label>
                        <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Ազգանուն</label>
                        <input type="text" name="surname" class="form-control" value="{{Auth::user()->surname}}">
                    </div>

                    <div class="form-group invisible">
                        <label class="form-label">_____</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-footer">
                        <input type="submit" class="btn btn-primary" value="Պահպանել">
                    </div>

                </form>
            </div>
        </div>

        <div class="col-lg-6 mb-20">

            <h3 class="mb-5">Փոխել Գաղտաբառը</h3>
            <div class="card p-5">
                <form action="/dashboard/profile/change-password" method="POST">
                    @csrf

                    <div class="form-group">
                        <label class="form-label"><i class="fas fa-lock mr-2 text-primary"></i> Հին Գաղտաբառ</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label"><i class="fas fa-lock mr-2 text-primary"></i> Նոր Գաղտաբառ</label>
                        <input type="password" name="newPassword" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="form-label"><i class="fas fa-lock mr-2 text-primary"></i> Կրկնեք Գաղտաբառը</label>
                        <input type="password" name="comfirmPassword" class="form-control">
                    </div>

                    <div class="form-footer">
                        <input type="submit" class="btn btn-primary" value="Պահպանել">
                    </div>

                </form>
            </div>
        </div>


        <div class="col-lg-12 mb-20">

            <h3 class="mb-5">Փոխել նկարը</h3>
            <div class="card p-5">
                <form action="/dashboard/profile/change-image" method="POST">
                    @csrf

                    @php
                        $imgs = [
                            6,
                            7,
                            8,
                            9,
                            10,
                            11,
                            12,
                            13,
                            14,
                            15,
                            16,
                            17,
                            18,
                            19,
                            20,
                            21,
                            22,
                            23,
                            24,
                            25,
                            26,
                            27,
                            28,
                            29,
                            30,
                            31,
                            32,
                            33,
                            34,
                            35,
                            36,
                            37,
                            38,
                            39,
                            40,
                            41,
                            42,
                            43,
                            44,
                            45,
                            46,
                            101,
                            102,
                            103,
                            104,
                            105,
                            106,
                            201,
                            202,
                            203,
                            204,
                            205,
                            206,
                        ];
                    @endphp

                    @for($i=0; $i<count($imgs); $i++)
                        <div class="image_selected @if($i == Auth::user()->img) active @endif">
                            <label for="img{{$imgs[$i]}}">
                                <img src="/img/users/{{$imgs[$i]}}.png" width="75">
                            </label>
                            <input type="radio" name="img"  value="{{$imgs[$i]}}" id="img{{$imgs[$i]}}" hidden @if($imgs[$i] == Auth::user()->img) checked="" @endif>
                        </div>
                    @endfor

                    <div class="form-footer">
                        <input type="submit" class="btn btn-primary" value="Պահպանել">
                    </div>

                </form>
            </div>
        </div>

        <div class="col-lg-12 mb-20">
            <div class="alert alert-light-primary">
                <h2 class="mb-5">Չե՞ս գտել քեզ բնորոշող emoji</h2>
                <p>Գտիր հետաքրքիր և գեղեցիկ userface-ի խումբ և ուղարկիր հղումը։</p>
            </div>
        </div>



    </div>


@endsection
