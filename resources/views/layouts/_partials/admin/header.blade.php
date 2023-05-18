<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
	<div id="kt_header" class="header header-fixed">
		<div class="container-fluid d-flex align-items-center justify-content-end">

			<div class="topbar">

				<div class="dropdown">
					<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
						<div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
							@include("svg.display")
						</div>
					</div>

					<div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
						<ul class="navi navi-hover py-4">

{{--							<li class="navi-item">--}}
{{--								<a href="{{route("groups")}}" class="navi-link">--}}
{{--									<span class="symbol symbol-20 mr-3">--}}
{{--										@include("svg.code")--}}
{{--									</span>--}}
{{--									<span class="navi-text">Վիդեոդասեր</span>--}}
{{--								</a>--}}
{{--							<li>--}}

							<li class="navi-item">
								<a href="/" class="navi-link">
									<span class="symbol symbol-20 mr-3">
										@include("svg.arrowDoubleLeft",["class" => "svg-icon svg-icon-2x menu-icon svg-icon-primary"])
									</span>
									<span class="navi-text">Հետ դեպի կայք</span>
								</a>
							<li>

						</ul>
					</div>
				</div>

				<div class="topbar-item">
					<div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
						<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{Auth::user()->name}}</span>
						<span class="symbol symbol-lg-35 symbol-25 symbol-primary">
							<span class="symbol-label font-size-h5 font-weight-bold">{{Auth::user()->firstLetters}}</span>
						</span>
					</div>
				</div>

			</div>

		</div>

	</div>

	<div class="content d-flex flex-column flex-column-fluid p-0" id="kt_content">
		<div class="d-flex flex-column-fluid">
            <div class="container-fluid">
                @yield("content")
            </div>
		</div>
	</div>

</div>
