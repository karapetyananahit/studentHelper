@extends("layouts.admin")



@push('page_name','Dashboard')

@push('_styles')

@endpush

@section("content")

    <div class="container">

        <div class="container-with-adv">
            <div class="container-content">
                <div class="page-header d-flex justify-content-between my-5">
                    <h1 class="page-title">FAQ</h1>
                </div>
                <div class="accordion accordion-solid accordion-panel accordion-svg-toggle mb-10" id="faq">
                    <div class="card p-6">
                        <div class="card-header" id="faqHeading1">
                            <div class="card-title font-size-h4 text-dark collapsed" data-toggle="collapse" data-target="#faq1" aria-expanded="false" aria-controls="faq1" role="button">
                                <div class="card-label">Ինչ է նշանակում մաքուր կոդ</div>
                                <span class="svg-icon svg-icon-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
                                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)"></path>
                                    </g>
                                </svg>
                            </span>
                            </div>
                        </div>
                        <div id="faq1" class="collapse" aria-labelledby="faqHeading1" data-parent="#faq" style="">
                            <div class="card-body pt-3 font-size-h6 font-weight-normal text-dark-50"><p>Իմ ուսանողները արդեն տեղյակ են, որ իմ համար առաջնահերթ կոդի մաքուր տեսք ունենալն է, այսինքն մեկ տողում չունենալ 2 կատարվող գործողություն, պահպանել <span class="badge badge-primary mx-3">tab</span> հասկացողությունը։</p>

                                <p class="text-success font-weight-bold">Մաքուր կոդ</p>
                                <div class="code">
                                    <div class="w400">
                                        <div>
                                            <span class="main_color">let</span> <span class="variable">x</span> = 2;
                                        </div>
                                        <div>
                                            <span class="main_color">document</span>.<span class="main_color">write</span>(<span class="variable">x</span>);
                                        </div>
                                    </div>
                                </div>


                                <p class="text-danger font-weight-bold">Ոչ մաքուր կոդ</p>
                                <div class="code">
                                    <div class="w400">
                                        <div>
                                            <span class="main_color">let</span> <span class="variable">x</span> = 2;
                                            <span class="main_color">document</span>.<span class="main_color">write</span>(<span class="variable">x</span>);
                                        </div>
                                    </div>
                                </div>


                                <p class="text-success font-weight-bold">Մաքուր կոդ</p>
                                <div class="code">
                                    <div class="w400">
                                        <div>
                                            <span class="variable">if</span> ( 3 &gt; 2 ) {
                                        </div>

                                        <div class="tab-1">
                                            <span class="main_color">console</span>.<span class="main_color">log</span>(<span class="variable">true</span>);
                                        </div>

                                        <div>
                                            } <span class="variable">else</span> {
                                        </div>

                                        <div class="tab-1">
                                            <span class="main_color">console</span>.<span class="main_color">log</span>(<span class="variable">false</span>);
                                        </div>

                                        <div>
                                            }
                                        </div>
                                    </div>
                                </div>

                                <p class="text-danger font-weight-bold">Ոչ մաքուր կոդ</p>
                                <div class="code">
                                    <div class="w400">
                                        <div>
                                            <span class="variable">if</span> ( 3 &gt; 2 ) {
                                        </div>

                                        <div>
                                            <span class="main_color">console</span>.<span class="main_color">log</span>(<span class="variable">true</span>);
                                        </div>

                                        <div>
                                            } <span class="variable">else</span> {
                                        </div>

                                        <div>
                                            <span class="main_color">console</span>.<span class="main_color">log</span>(<span class="variable">false</span>);
                                        </div>

                                        <div>
                                            }
                                        </div>
                                    </div>
                                </div></div>
                        </div>
                    </div>
                </div>
                <div class="accordion accordion-solid accordion-panel accordion-svg-toggle mb-10" id="faq">
                    <div class="card p-6">
                        <div class="card-header" id="faqHeading1">
                            <div class="card-title font-size-h4 text-dark collapsed" data-toggle="collapse" data-target="#faq4" aria-expanded="false" aria-controls="faq4" role="button">
                                <div class="card-label">Ինչ կտան ինձ միավորները</div>
                                <span class="svg-icon svg-icon-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
                                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)"></path>
                                    </g>
                                </svg>
                            </span>
                            </div>
                        </div>
                        <div id="faq4" class="collapse" aria-labelledby="faqHeading1" data-parent="#faq" style="">
                            <div class="card-body pt-3 font-size-h6 font-weight-normal text-dark-50">Որոշ ժամանակ հետո կլինեն նաև վիդեո դասեր։ Կլինեն նաև վճարովի դասեր։ Միավորների օգնությամբ կկարողանաք զեղչել այն և գնել ավելի ցածր գնով։</div>
                        </div>
                    </div>
                </div>
                <div class="accordion accordion-solid accordion-panel accordion-svg-toggle mb-10" id="faq">
                    <div class="card p-6">
                        <div class="card-header" id="faqHeading1">
                            <div class="card-title font-size-h4 text-dark collapsed" data-toggle="collapse" data-target="#faq5" aria-expanded="false" aria-controls="faq5" role="button">
                                <div class="card-label">Ինչ է recursive function-ը</div>
                                <span class="svg-icon svg-icon-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
                                        <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)"></path>
                                    </g>
                                </svg>
                            </span>
                            </div>
                        </div>
                        <div id="faq5" class="collapse" aria-labelledby="faqHeading1" data-parent="#faq" style="">
                            <div class="card-body pt-3 font-size-h6 font-weight-normal text-dark-50"><p>Այն function-ը, որն իրեն կատարում է իր կատարման ընթացքում կոչվում է recursive function։</p>
                                <p class="font-weight-bold">Օրինակ</p>
                                <div class="code">
                                    <div class="w400">
                                        <div>
                                            <span class="main_color">function</span> <span class="variable">recursiveFunction</span> () {
                                        </div>
                                        <div class="tab-1">
                                            <span class="comment">// code...</span>
                                        </div>
                                        <div class="tab-1">
                                            <span class="variable">recursiveFunction</span> ()
                                        </div>
                                        <div>
                                            }
                                        </div>
                                    </div>
                                </div></div>
                        </div>
                    </div>
                </div>

                <div class="card card-custom p-6 mb-8 mb-lg-0">
                    <div class="card-body d-flex align-items-center justify-content-between">

                        <div class="mr-4">
                            <h3 class="text-dark mb-6">Պատասխան չե՞ք գտել: Ուղարկե՛ք գրություն:</h3>
                            <p class="text-dark-50 font-size-lg">Ոիղարկեք ինջ Ձեր հարցը և այն ես կպատասխանեմ առաջիկա 24 ժամվա ընթացքում</p>
                        </div>

                        <a href="/dashboard/contact" class="btn font-weight-bolder text-uppercase font-size-lg btn-primary py-3 px-6">Գրել</a>
                    </div>
                </div>
            </div>
        </div>



    </div>


@endsection
