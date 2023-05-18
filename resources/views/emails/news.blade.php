@extends("layouts.email")

@section("content")

    @include("emails.global.top_block.questions")

    @include("emails.global.welcome", ["text" => "Սիրով ողջունում եմ քեզ, իմ հարգելի օգտատեր։"])

    @include("emails._partials.heading.success", ['text' => 'Նորույթ'])

    @include("emails._partials.fullText", ["text" => "Հարգելի՛ օգտատեր, ցանկանում եմ տեղեկացնել, որ հարցաշարերը այսուհետ կլինեն նաև թեստային տարբերակով, այսիքն կլինի հարցը և 3-4 տարբերակ, որոնցից պետք է ընտրեք ճիշտ պատասխանը։ Օրական պատասխանելով 10 պատահական հարցի՛ դուք կմրցեք մյուս մասնակիցների հետ, իսկ ամեն ամսվա վերջին օրը լավագույն 10 մասնակիցները կպարգևատրվեն մեդալներով (խաղային):"])

    @include("emails._partials.fullText", ['text' => 'Հարցաշարին անցնելու համար` <b><a style="color: #0084ff" href="https://martinelizbaryan.am/dashboard/questions">martinelizbaryan.am</a></b>'])

    @include("emails.global.footer")

@endsection
