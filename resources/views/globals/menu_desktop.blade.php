<header>
    <div class="page_content">
        <div class="flex menu">

            <div class="logo">
                <a href="/">
                    <img src="/img/logo_white.png" alt="">
                </a>
            </div>

            <i class="fas fa-bars cursor __bar"></i>

            <nav>
                <ul class="flex menu_item">
                    <li class="close-menu">
                        <i class="fas fa-times-circle"></i>
                    </li>
                    <li class="{{ Request::route()->getName() == 'home' ? 'active' : '' }}">
                        <a href="/">Գլխավոր</a>
                    </li>
{{--                    <li class="{{ Request::route()->getName() == 'groups' ? 'active' : '' }}">--}}
{{--                        <a href="/groups">Վիդեոդասեր</a>--}}
{{--                    </li>--}}
                    <li class="{{ Request::route()->getName() == 'lessons' ? 'active' : '' }}">
                        <a href="/lessons">Դասընթացներ</a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'blogs' ? 'active' : '' }}">
                        <a href="/blogs">Բլոգ</a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'about' ? 'active' : '' }}">
                        <a href="/about">Մեր Մասին</a>
                    </li>
                    <li class="{{ Request::route()->getName() == 'contact' ? 'active' : '' }}">
                        <a href="/contact">Կապ</a>
                    </li>

                    @auth
                        <li class="li_buttons">
                            <a href="{{route("dashboard")}}" class="button button_main">{{Auth::user()->name}}</a>
                        </li>
                    @else
                        <li class="li_buttons">
                            <a href="{{route("login")}}" class="button button_main">Մուտք</a>
                        </li>
                        <li>
                            <a href="{{route("register")}}" class="button button_secondary">Գրանցվել</a>
                        </li>
                    @endauth

                </ul>
            </nav>
        </div>
    </div>
</header>
