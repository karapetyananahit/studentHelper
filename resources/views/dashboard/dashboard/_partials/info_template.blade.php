<div class="col-xxl-2 col-xl-4 col-md-6 col-sm-6">
    <div class="card card-custom card-stretch gutter-b bg-light-primary">
        <div class="card-body p-0" style="position: relative;">
            <div class="d-flex justify-content-between py-10 px-6 flex-grow-1">
                <div class="d-flex flex-column ">
                    <span class="font-weight-bolder font-size-h1 text-primary">{{$value}}</span>
                    <span class="text-primary font-weight-bold mt-2">{{$text}}</span>
                </div>
                <span class="symbol symbol-50 symbol-light-white mr-2">
                    <span class="symbol-label">
                        @include($class,["class" => "svg-icon svg-icon-3x menu-icon svg-icon-primary"])
                    </span>
                </span>
            </div>
        </div>
    </div>
</div>
