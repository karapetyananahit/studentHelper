@extends("layouts.email")

@section("content")

    @include("emails.global.top_block.info")


    @include("emails.global.welcome", ["text" => "Սիրով ողջունում եմ։"])


    @include("emails._partials.fullText", ["text" => "Մի փոքր պատմեմ իմ մասին: Անունս Մարտին է, FullStack Developer եմ, ունեմ 6+ տարիների փորձ։ Աշխատել եմ ավելի քան 500 ուսանողների և 180 մանուկների հետ։ Ունեմ կայք, որի օգնությամբ փորձում եմ հնարավորինս չափ օգնել մեր սկսնակ ծրագրավորողներին կատարել իրենց առաջին քայլերը։ Իսկ հիմա ներկայացնեմ կայքը և թե ինչ կարող ես անել իր օգնությամբ։"])


    @include("emails._partials.fullText", ["pb" => false, "text" => "Մասնակից - 700"])
    @include("emails._partials.fullText", ["pb" => false, "text" => "Հարցաշար - 126"])
    @include("emails._partials.fullText", ["pb" => false, "text" => "Պատասխաններ - 28.ooo+"])
    @include("emails._partials.fullText", ["pb" => false, "text" => "Ճիշտ պատասխաններ - 18.ooo+"])
    @include("emails._partials.fullText", ["pb" => false, "text" => "Գրքեր - 18"])
    @include("emails._partials.fullText", ["pb" => false, "text" => "Youtube-յան Ալիքներ - 5"])
    @include("emails._partials.fullText", ["pb" => false, "text" => "Վեբ Կայքեր - 10"])
    @include("emails._partials.fullText", ["pb" => false, "text" => "Մեդալներ - 98"])
    @include("emails._partials.fullText", ["text" => "Լուծած խնդիրներ - 53"])


    @include("emails._partials.heading.success", ['text' => '1․ Հարցաշարեր'])

    @include("emails._partials.fullText", ["text" => "1️⃣  Ամեն օր կարող ես 10 հարցի պատասխանել"])
    @include("emails._partials.fullText", ["text" => "2️⃣  Մրցակցություն մյուս մասնակիցների հետ"])
    @include("emails._partials.fullText", ["text" => "3️⃣  Ամեն շաբաթ +10 նոր հարց"])
    @include("emails._partials.fullText", ["text" => "4️⃣  Ամեն ամսվա վերջում որոշվում են լավագույն 10 մասնակիցները և պարգևատրվում են մեդալներով(կայքի*)"])


    @include("emails._partials.heading.success", ['text' => '2․ Խնդիրներ'])

    @include("emails._partials.fullText", ["text" => "1️⃣  Ամեն շաբաթ նոր խնդիր, որի համար ունես 6 օր ժամանակ, որպեսզի լուծես և ուղարկես ինձ"])
    @include("emails._partials.fullText", ["text" => "2️⃣  Ամեն մասնակցի խնդիրը ստուգվում է, և անհատական բացատրվում է մասնակցի բոլոր սխալները և թերությունները"])
    @include("emails._partials.fullText", ["text" => "3️⃣  Ստուգվելուց հետո որոշվում է լավագույն լուծման հեղինակը"])


    @include("emails._partials.heading.success", ['text' => '3․ Մրցաշարեր 1 x 1'])

    @include("emails._partials.fullText", ["text" => "ՇՈՒՏՈՎ"])
    @include("emails._partials.fullText", ["text" => "1️⃣  Առաջին լավագույն 100 մասնակիցները հնարավորություն են կունենան իրար դեմ մրցելու։ Հարկավոր է պատասխանել նույն 10 պատահական հարցերին։"])
    @include("emails._partials.fullText", ["text" => "2️⃣  Ամեն ամսվա վերջում մեդալներով(կայքի*) կպարգևատրվեն ամենաշատ ճիշտ պատասխանած և ամենաշատ հաղթանակած մասնակիցները"])


    @include("emails._partials.heading.success", ['text' => '4․ Քննարկումներ'])

    @include("emails._partials.fullText", ["text" => "1️⃣  Քննակվում է ծրագրավորման ամեն թեմա։"])
    @include("emails._partials.fullText", ["text" => "2️⃣  Պատասխանում եմ բոլոր հարցերին"])
    @include("emails._partials.fullText", ["text" => "3️⃣  Քննարկման սենյակ կարող ես անգամ դու ստեղծել"])


    @include("emails._partials.heading.success", ['text' => '5․ Գրքեր'])

    @include("emails._partials.fullText", ["text" => "1️⃣  Կարող եք ներբեռնել (download)"])
    @include("emails._partials.fullText", ["pl" => 1, "text" => "1. Algorithms"])
    @include("emails._partials.fullText", ["pl" => 1, "text" => "2. Git Version"])
    @include("emails._partials.fullText", ["pl" => 1, "text" => "3. Git For Professionals"])
    @include("emails._partials.fullText", ["pl" => 1, "text" => "4. HTML & CSS"])
    @include("emails._partials.fullText", ["pl" => 1, "text" => "5. HTML5 For Professionals"])
    @include("emails._partials.fullText", ["pl" => 1, "text" => "6. HTML With Canvas"])
    @include("emails._partials.fullText", ["pl" => 1, "text" => "7. CSS For Professionals"])
    @include("emails._partials.fullText", ["pl" => 1, "text" => "8. JavaScript For Professionals"])
    @include("emails._partials.fullText", ["pl" => 1, "text" => "9. jQuery For Professionals"])
    @include("emails._partials.fullText", ["pl" => 1, "text" => "10. TypeScript For Professionals"])
    @include("emails._partials.fullText", ["pl" => 1, "text" => "11. React JS For Professionals"])
    @include("emails._partials.fullText", ["pl" => 1, "text" => "12. React with Firebase"])
    @include("emails._partials.fullText", ["pl" => 1, "text" => "13. React with TypeScript"])
    @include("emails._partials.fullText", ["pl" => 1, "text" => "14. React Native"])
    @include("emails._partials.fullText", ["pl" => 1, "text" => "15. React Native For Professionals"])
    @include("emails._partials.fullText", ["pl" => 1, "text" => "16. Angular JS For Professionals"])
    @include("emails._partials.fullText", ["pl" => 1, "text" => "17. Node.js"])
    @include("emails._partials.fullText", ["pl" => 1, "text" => "18. Node JS For Professionals"])


    @include("emails._partials.heading.success", ['text' => '6․ Youtube-յան ալիքներ'])
    @include("emails._partials.fullText", ["text" => "1️⃣  Կարող ես գտնել այն Youtube-յան ալիքը, որի շնորհիվ կսովորես քեզ համապատասխան լեզուն"])
    @include("emails._partials.fullText", ["text" => "2️⃣  Ալիքներ Հայերեն, Անգլերեն և Ռուսերեն լեզուներով"])


    @include("emails._partials.heading.success", ['text' => '7․ Կայքեր'])
    @include("emails._partials.fullText", ["text" => "1️⃣  Կարող ես գտնել այն կայքը որի շնորհիվ կգտնես քեզ հուզող բոլոր հարցերը"])



    @include("emails._partials.br")
    @include("emails._partials.br")
    @include("emails._partials.br")

    @include("emails._partials.fullText", ['text' => 'Կայքին ծանոթանալու համար` <b><a style="color: #0084ff" href="https://martinelizbaryan.am">martinelizbaryan.am</a></b>'])


    @include("emails.global.footer")

@endsection
