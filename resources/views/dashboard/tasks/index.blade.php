@extends("layouts.admin")

@push('page_name','Dashboard')

@push('_styles')

@endpush

@section("content")

    <div class="container">
        <div class="container-with-adv">

            <div class="container-content">

                <div class="page-header d-flex justify-content-between my-5">
                    <h1 class="page-title">Տեղեկություն</h1>


                </div>

                <div class="task">
                    <p class="mb-10">Ամեն կիրակի գիշերը ես տեղադրելու եմ նոր խնդիր, որը պետք է գրել JavaScript լեզվով և
                        որի համար ունեք ժամանակ մինչև հաջորդ շաբաթ օրը 24։00։ Խնդիրը լուծելուց հետո ուղարկում եք <b>elizbaryan.martin@gmail.com</b>
                        էլ․ հասցեին: Խնդիրը պետք է լուծել 2 եղանակով։ 1-ին եղանակում չէք կարող օգտվել JavaScript-ի
                        պատրաստի method-ներից, փորձելով ցիկլով <span class="text-primary">( for(),while )</span> և
                        պայմանական օպերատորի <span class="text-primary">( if,else )</span> օգնությամբ լուծել, իսկ 2-րդ
                        եղանակում կարող եք օգտվել ամեն ինչից ինչ ունի JavaScript-ը։</p>

                    <h2 class="mb-10">Միավորների գնահատման մեթոդիկա</h2>

                    <ul class="mb-10">
                        <li>4 միավոր եթե լուծել եք խնդիրը 1-ին եղանակով</li>
                        <li>2 միավոր եթե լուծել եք խնդիրը 2-րդ եղանակով</li>
                        <li>2 միավոր եթե գրել եք մաքուր կոդ։ (Թե ինչ է նշանակում մաքուր կոդ դիտեք <a
                                href="/dashboard/faq" target="_blank">այստեղ</a>)
                        </li>
                        <li>2 միավոր եթե գրված ծրագիրը աշխատում է ամենակարճ տարբերակով</li>
                        <li>Ընդհանուր եղավ 10 միավոր։</li>
                    </ul>

                    <h2 class="mb-10">Միավոր չեք ստանում եթե</h2>

                    <ul class="mb-10">
                        <li>խնդիրը լիարժեք չի աշխատում</li>
                        <li>չեք ուղարկել այն էլ․ հասցեից, որով գրանցվել եք</li>
                    </ul>


                    <h2 class="mb-10">Ուշադրություն</h2>

                    <ul class="mb-10">
                        <li>Եթե խնդիրը չունի 2-րդ եղանակ, ապա ինքըստինքյան վաստակում եք 2 միավոր</li>
                        <li>Խնդիրն ավարտելուն պես ուղարկեք elizbaryan.martin@gmail.com էլ․ հասցեին նշված տարբերակներից
                            մեկով
                            <ol>
                                <li><span class="label label-lg label-warning label-inline">wetransfer</span> - ով</li>

                                <li><span class="label label-lg label-warning label-inline">jsfiddle</span> - ի հղումը
                                </li>

                                <li><span class="label label-lg label-warning label-inline">github</span> - ի հղումը
                                </li>

                                <li><span class="label label-lg label-warning label-inline">pastebin</span> - ի հղումը
                                </li>
                            </ol>
                        </li>
                    </ul>

                    <h2 class="mb-10">Խնդիր</h2>
                    {!! $task->subject !!}


                    <p>Վերջնաժամկետը - 17․09․22 23։59</p>
                    <p>Բարդություն -
                        <span class="badge badge-warning py-1 px-5 d-inline-block"></span>
                        <span class="badge badge-warning py-1 px-5 d-inline-block"></span>
                        <span class="badge badge-secondary py-1 px-5 d-inline-block"></span>
                        <span class="badge badge-secondary py-1 px-5 d-inline-block"></span>
                        <span class="badge badge-secondary py-1 px-5 d-inline-block"></span>
                    </p>

                    <p>Նորությունները բաց
                        չթողնելու համար հետևեք իրադարձություններին <a href="/dashboard/discussions/4">այստեղ</a>: </p>
                </div>
            </div>


        </div>
    </div>

@endsection
