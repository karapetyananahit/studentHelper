<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
	<!--begin::Header-->
	<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5" kt-hidden-height="40" style="">
		<h3 class="font-weight-bold m-0"></h3>
		<div href="#" class="btn btn-xs btn-icon text-hover-white btn-light-danger" id="kt_quick_user_close">
			<span class="svg-icon svg-icon-danger svg-icon-2x">X</span>
		</div>
	</div>
	<!--end::Header-->
	<!--begin::Content-->
	<div class="offcanvas-content pr-5 mr-n5 scroll ps ps--active-y" style="height: 519px; overflow: hidden;">
		<!--begin::Header-->
		<div class="d-flex align-items-center mt-5">
			<div class="symbol symbol-100 mr-5">
				<div class="symbol-label" style="background-image:url(/img/users/{{Auth::user()->img}}.png)"></div>
{{--				<i class="symbol-badge bg-primary"></i>--}}
			</div>
			<div class="d-flex flex-column" style="width: 50%;">
				<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{Auth::user()->fullname}}</a>
				<div class="text-muted mt-1">{{Auth::user()->company}}</div>
				<div class="text-muted mt-1">{{Auth::user()->position}}</div>
				<div class="navi mt-2">
					<a href="{{route("dashboard.profile.edit")}}" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Պրոֆիլ</a>

					<a class="btn btn-sm btn-light-danger font-weight-bolder py-2 px-5" href="{{ route('logout') }}"
					   onclick="event.preventDefault();
					                 document.getElementById('logout-form').submit();"
					>
					    Դուրս գալ
					</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					    @csrf
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 519px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 300px;"></div></div></div>
	<!--end::Content-->
</div>
