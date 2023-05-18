<div class="mb-30">
    <h1 class="page-title my-5">Տեղեկություններ</h1>

    <div class="row">
        @include("dashboard.dashboard._partials.info_template",["class" => "svg.user","text" => "Մասնակից", "value" => $usersCount])
        @include("dashboard.dashboard._partials.info_template",["class" => "svg.generator","text" => "Հարցաշար", "value" => $questionCount])
        @include("dashboard.dashboard._partials.info_template",["class" => "svg.books","text" => "Գրքեր", "value" => $booksCount])
        @include("dashboard.dashboard._partials.info_template",["class" => "svg.youtube","text" => "Youtube-յան Ալիքներ", "value" => $youtubeCount])
        @include("dashboard.dashboard._partials.info_template",["class" => "svg.earth","text" => "Վեբ Կայքեր", "value" => $websitesCount])
        @include("dashboard.dashboard._partials.info_template",["class" => "svg.bitcoin","text" => "Մեդալներ", "value" => $medals])
    </div>

    <h1 class="page-title my-5">Հարցաշարեր և Խնդիրներ</h1>

    <div class="row">
        @include("dashboard.dashboard._partials.info_template",["class" => "svg.generator","text" => "Պատասխաններ (այսօր)", "value" => "$questions ($questionsToday)"])
        @include("dashboard.dashboard._partials.info_template",["class" => "svg.generator","text" => "Ճիշտ պատասխաններ (%)", "value" => "$questionsCorrects (" . number_format($questionsCorrects * 100 / $questions, 2) ."%)"])
        @include("dashboard.dashboard._partials.info_template",["class" => "svg.star","text" => "Լուծած խնդիրներ (%)", "value" => $tasks])
    </div>
</div>

