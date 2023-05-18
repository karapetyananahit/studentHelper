<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
	<!--begin::Brand-->
	<div class="brand flex-column-auto" id="kt_brand" kt-hidden-height="65" style="">
		<!--begin::Logo-->
		<a href="/dashboard" class="brand-logo">
			<img alt="Student Helper" src="/img/logo_white.png" width="50px">
		</a>
		<!--end::Logo-->
		<!--begin::Toggle-->
		<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">@include("svg.arrowDoubleLeft", ["class" => "svg-icon svg-icon svg-icon-xl"])</button>
		<!--end::Toolbar-->
	</div>
	<!--end::Brand-->
	<!--begin::Aside Menu-->
	<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
		<!--begin::Menu Container-->
		<div id="kt_aside_menu" class="aside-menu my-4 scroll ps ps--active-y" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500" >
			<!--begin::Menu Nav-->
			<ul class="menu-nav">

				<li class="menu-item @if( Request::route()->getName() == 'dashboard') menu-item-active @endif" aria-haspopup="true">
					<a href="/dashboard" class="menu-link">
						@include("svg.dashboard",["class" => "svg-icon svg-icon-2x menu-icon"])
						<span class="menu-text">Գլխավոր</span>
					</a>
				</li>

                <li class="menu-item menu-item-submenu @if( in_array(Request::route()->getName(), ['dashboard.users', 'dashboard.users.medals'])) menu-item-active  menu-item-open @endif" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">

                        @include("svg.user",["class" => "svg-icon svg-icon-2x menu-icon"])
                        <span class="menu-text">Մասնակիցներ</span>
                        @include("svg.arrowRight")
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item @if( Request::route()->getName() == 'dashboard.users') menu-item-active @endif" aria-haspopup="true">
                                <a href="/dashboard/users" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Արդյունքներ</span>
                                </a>
                            </li>

                            <li class="menu-item @if( Request::route()->getName() == 'dashboard.users.medals') menu-item-active @endif" aria-haspopup="true">
                                <a href="/dashboard/users/menu/medals" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Մեդալներ</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-item @if( Request::route()->getName() == 'dashboard.questions.index') menu-item-active @endif" aria-haspopup="true">
                    <a href="/dashboard/questions" class="menu-link align-items-center">
                        @include("svg.generator",["class" => "svg-icon svg-icon-2x menu-icon"])
                        <span class="menu-text">Հարցաշար</span>
                        <span class="label label-inline label-primary">{{ App\Models\Question::count() }}</span>
                    </a>
                </li>

                <li class="menu-item @if( Request::route()->getName() == 'dashboard.tasks') menu-item-active @endif" aria-haspopup="true">
                    <a href="/dashboard/tasks" class="menu-link">
                        @include("svg.star",["class" => "svg-icon svg-icon-2x menu-icon"])
                        <span class="menu-text">Խնդիր</span>
                    </a>
                </li>


                <li class="menu-item @if( Request::route()->getName() == 'dashboard.medals') menu-item-active @endif" aria-haspopup="true">
                    <a href="/dashboard/medals" class="menu-link">
                        @include("svg.bitcoin",["class" => "svg-icon svg-icon-2x menu-icon"])
                        <span class="menu-text">Մեդալներ</span>
                    </a>
                </li>

                <li class="menu-item @if(in_array(Request::route()->getName(), ['dashboard.discussions.index', 'dashboard.discussions'])) menu-item-active @endif" aria-haspopup="true">
                    <a href="/dashboard/discussions" class="menu-link align-items-center">
                        @include("svg.userGroup",["class" => "svg-icon svg-icon-2x menu-icon"])
                        <span class="menu-text">Քննարկումներ</span>
                        <span class="label label-inline label-primary">{{ App\Models\Discussion::count() }}</span>
                    </a>
                </li>

                <li class="menu-item @if( Request::route()->getName() == 'dashboard.news') menu-item-active @endif" aria-haspopup="true">
                    <a href="/dashboard/news" class="menu-link">
                        @include("svg.pencil",["class" => "svg-icon svg-icon-2x menu-icon"])
                        <span class="menu-text">Նորություններ</span>
                    </a>
                </li>

                <li class="menu-item menu-item-submenu @if( in_array(Request::route()->getName(), ['dashboard.books', 'dashboard.youtube', 'dashboard.websites'])) menu-item-active  menu-item-open @endif" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        @include("svg.books",["class" => "svg-icon svg-icon-2x menu-icon"])
                        <span class="menu-text">Նյութեր</span>
                        @include("svg.arrowRight")
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">

                            <li class="menu-item @if( Request::route()->getName() == 'dashboard.books') menu-item-active @endif" aria-haspopup="true">
                                <a href="/dashboard/books" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Գրքեր</span>
                                </a>
                            </li>

                            <li class="menu-item @if( Request::route()->getName() == 'dashboard.youtube') menu-item-active @endif" aria-haspopup="true">
                                <a href="/dashboard/youtube" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Youtube</span>
                                </a>
                            </li>

                            <li class="menu-item @if( Request::route()->getName() == 'dashboard.websites') menu-item-active @endif" aria-haspopup="true">
                                <a href="/dashboard/websites" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Կայքեր</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>

{{--                <li class="menu-item @if( Request::route()->getName() == 'dashboard.shop') menu-item-active @endif" aria-haspopup="true">--}}
{{--                    <a href="/dashboard/shop" class="menu-link">--}}
{{--                        @include("svg.shop",["class" => "svg-icon svg-icon-2x menu-icon"])--}}
{{--                        <span class="menu-text">Խանութ</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li class="menu-item @if( Request::route()->getName() == 'dashboard.faq') menu-item-active @endif" aria-haspopup="true">
                    <a href="/dashboard/faq" class="menu-link">
                        @include("svg.question",["class" => "svg-icon svg-icon-2x menu-icon"])
                        <span class="menu-text">Faq</span>
                    </a>
                </li>

                <li class="menu-item @if( Request::route()->getName() == 'dashboard.contact.index') menu-item-active @endif" aria-haspopup="true">
                    <a href="/dashboard/contact" class="menu-link">
                        @include("svg.email",["class" => "svg-icon svg-icon-2x menu-icon"])
                        <span class="menu-text">Կապ</span>
                    </a>
                </li>


                @admin

                <li class="menu-section bg-primary">
                    <h4 class="menu-text text-white">Admin</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>

                <li class="menu-item @if( Request::route()->getName() == 'admin.users.index') menu-item-active @endif" aria-haspopup="true">
                    <a href="/admin/users" class="menu-link">
                        @include("svg.user",["class" => "svg-icon svg-icon-2x menu-icon"])
                        <span class="menu-text">Users</span>
                    </a>
                </li>


                <li class="menu-item @if( Request::route()->getName() == 'admin.messages.index') menu-item-active @endif" aria-haspopup="true">
                    <a href="/admin/messages" class="menu-link">
                        @include("svg.email",["class" => "svg-icon svg-icon-2x menu-icon"])
                        <span class="menu-text">Messages</span>
                    </a>
                </li>

                <li class="menu-item @if( Request::route()->getName() == 'admin.questions.index') menu-item-active @endif" aria-haspopup="true">
                    <a href="/admin/questions" class="menu-link">
                        @include("svg.generator",["class" => "svg-icon svg-icon-2x menu-icon"])
                        <span class="menu-text">Questions</span>
                    </a>
                </li>

                <li class="menu-item menu-item-submenu @if( in_array(Request::route()->getName(), ['admin.books','admin.youtube'])) menu-item-active  menu-item-open @endif" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        @include("svg.books",["class" => "svg-icon svg-icon-2x menu-icon"])
                        <span class="menu-text">Նյութեր</span>
                        @include("svg.arrowRight")
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">

                            <li class="menu-item @if( Request::route()->getName() == 'admin.books') menu-item-active @endif" aria-haspopup="true">
                                <a href="/admin/books" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Գրքեր</span>
                                </a>
                            </li>

                            <li class="menu-item @if( Request::route()->getName() == 'admin.youtube') menu-item-active @endif" aria-haspopup="true">
                                <a href="/admin/youtube" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Youtube</span>
                                </a>
                            </li>

                            <li class="menu-item @if( Request::route()->getName() == 'admin.websites') menu-item-active @endif" aria-haspopup="true">
                                <a href="/admin/websites" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Կայքեր</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="menu-item @if( Request::route()->getName() == 'admin.faqs.index') menu-item-active @endif" aria-haspopup="true">
                    <a href="/admin/faqs" class="menu-link">
                        @include("svg.question",["class" => "svg-icon svg-icon-2x menu-icon"])
                        <span class="menu-text">Faqs</span>
                    </a>
                </li>

                <li class="menu-item @if( Request::route()->getName() == 'admin.tasks.index') menu-item-active @endif" aria-haspopup="true">
                    <a href="/admin/tasks" class="menu-link">
                        @include("svg.star",["class" => "svg-icon svg-icon-2x menu-icon"])
                        <span class="menu-text">Tasks</span>
                    </a>
                </li>

                <li class="menu-item @if( Request::route()->getName() == 'admin.commands.index') menu-item-active @endif" aria-haspopup="true">
                    <a href="/admin/commands" class="menu-link">
                        @include("svg.command",["class" => "svg-icon svg-icon-2x menu-icon"])
                        <span class="menu-text">Commands</span>
                    </a>
                </li>

                <li class="menu-item @if( Request::route()->getName() == 'admin.blogs.index') menu-item-active @endif" aria-haspopup="true">
                    <a href="/admin/blogs" class="menu-link">
                        @include("svg.command",["class" => "svg-icon svg-icon-2x menu-icon"])
                        <span class="menu-text">Blogs</span>
                    </a>
                </li>

                @endadmin

{{--				<li class="menu-item menu-item-submenu @if( in_array(Request::route()->getName(), ['users'])) menu-item-active  menu-item-open @endif" aria-haspopup="true" data-menu-toggle="hover">--}}
{{--					<a href="javascript:;" class="menu-link menu-toggle">--}}

{{--						@include("svg.user",["class" => "svg-icon svg-icon-2x menu-icon"])--}}
{{--						<span class="menu-text">Users</span>--}}
{{--						@include("svg.arrowRight")--}}
{{--					</a>--}}
{{--					<div class="menu-submenu">--}}
{{--						<i class="menu-arrow"></i>--}}
{{--						<ul class="menu-subnav">--}}
{{--							<li class="menu-item @if( Request::route()->getName() == 'users') menu-item-active @endif" aria-haspopup="true">--}}
{{--								<a href="/dashboard/users" class="menu-link">--}}
{{--									<i class="menu-bullet menu-bullet-dot">--}}
{{--										<span></span>--}}
{{--									</i>--}}
{{--									<span class="menu-text">Users</span>--}}
{{--								</a>--}}
{{--							</li>--}}
{{--						</ul>--}}
{{--					</div>--}}
{{--				</li>--}}


			</ul>
			<!--end::Menu Nav-->
			<div class="ps__rail-x" style="left: 0px; bottom: -616px;">
				<div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
			</div>
			<div class="ps__rail-y" style="top: 616px; height: 534px; right: 4px;">
				<div class="ps__thumb-y" tabindex="0" style="top: 287px; height: 247px;"></div>
			</div>
		</div>
		<!--end::Menu Container-->
	</div>
	<!--end::Aside Menu-->
</div>
