<!--begin::Statistics Section-->
<div id="statistik" class="mt-20 pb-20 pt-20 mb-n20 position-relative z-index-2">
    <!--begin::Wrapper-->
    <div class="pb-15 pt-18" style="background-color: dimgray">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Heading-->
            <div class="text-center mt-15 mb-18" id="achievements" data-kt-scroll-offset="{default: 100, lg: 150}">
                <!--begin::Title-->
                <h3 class="fs-2hx text-white fw-bold mb-5">Statistik Alumni</h3>
                <!--end::Title-->
                <div class="fs-5 text-white fw-bold">Data jumlah alumni {{ now()->year }}</div>
            </div>
            <!--end::Heading-->
            <!--begin::Statistics-->
            <div class="d-flex flex-center">
                <!--begin::Items-->
                <div class="d-flex flex-wrap flex-center justify-content-lg-between mb-15 mx-auto w-xl-900px">
                    <!--begin::Item-->
                    <div class="d-flex flex-column flex-center h-100px w-100px h-lg-200px w-lg-200px m-3">
                        <!--begin::Symbol-->
                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                        <span class="svg-icon svg-icon-5tx svg-icon-white mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill="#ffffff"
                                    d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <!--end::Symbol-->
                        <!--begin::Info-->
                        <div class="mb-0">
                            <!--begin::Value-->
                            <div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
                                <div class="min-w-70px text-center" data-kt-countup="true"
                                    data-kt-countup-value="{{ $alumni }}">0
                                </div>
                            </div>
                            <!--end::Value-->
                            <!--begin::Label-->
                            <span class="text-white fw-semibold fs-5 lh-0">JumLah Alumni</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-column flex-center h-100px w-100px h-lg-200px w-lg-200px m-3">
                        <!--begin::Symbol-->
                        <!--begin::Svg Icon | path: icons/duotune/graphs/gra008.svg-->
                        <span class="svg-icon svg-icon-5tx svg-icon-white mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill="#ffffff"
                                    d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <!--end::Symbol-->
                        <!--begin::Info-->
                        <div class="mb-0">
                            <!--begin::Value-->
                            <div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
                                <div class="min-w-70px text-center" data-kt-countup="true"
                                    data-kt-countup-value="{{ $alumni_tahun }}">0</div>
                            </div>
                            <!--end::Value-->
                            <!--begin::Label-->
                            <span class="text-white fw-semibold fs-5 lh-0">Alumni Per Tahun</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex flex-column flex-center h-100px w-100px h-lg-200px w-lg-200px m-3">
                        <!--begin::Symbol-->
                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                        <span class="svg-icon svg-icon-5tx svg-icon-white mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill="#ffffff"
                                    d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <!--end::Symbol-->
                        <!--begin::Info-->
                        <div class="mb-0">
                            <!--begin::Value-->
                            <div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
                                <div class="min-w-70px text-center" data-kt-countup="true"
                                    data-kt-countup-value="{{ $alumni_tepat }}">0</div>
                            </div>
                            <!--end::Value-->
                            <!--begin::Label-->
                            <span class="text-white fw-semibold fs-5 lh-0">Alumni Cumlaude</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Items-->
            </div>
            <!--end::Statistics-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Statistics Section-->
