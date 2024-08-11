<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>{{ config('app.name') }} | {{ $module }}</title>
    <meta charset="utf-8" />
    <meta name="description" content="Registrasi Pendaftaran Indonesian Youth Summit" />
    <meta name="keywords"
        content="dispora, iys, indonesia your summit, pendaftaran indonesia your summit, Registrasi Pendaftaran Indonesian Youth Summit" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="IYS - Indonesian Youth Summit" />
    <meta property="og:url" content="https://iys.dispora.makassarkota.go.id" />
    <meta property="og:site_name" content="Dispora | IYS" />
    <link rel="canonical" href="https://iys.dispora.makassarkota.go.id" />
    <link rel="shortcut icon" href="https://uin-alauddin.ac.id/themes//images/favicon.png" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/jquery-ui/jquery-ui.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body data-kt-name="metronic" id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu"
    class="bg-white position-relative app-blank">
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Header Section-->
        <div class="mb-0" id="home">
            <!--begin::Wrapper-->
            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg"
                style="background: linear-gradient(0deg, rgba(28, 28, 49, 0.5), rgb(21, 37, 48)), url(/bg-landing.jpeg), no-repeat; background-repeat: no-repeat; background-position: center; background-size:cover;">
                <!--begin::Header-->
                <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
                    data-kt-sticky-offset="{default: '200px', lg: '300px'}">

                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center justify-content-between">
                            <!--begin::Logo-->
                            <div class="d-flex align-items-center flex-equal">
                                <!--begin::Mobile menu toggle-->
                                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                                    id="kt_landing_menu_toggle">
                                    <i class="ki-duotone ki-abstract-14 fs-2hx"><span class="path1"></span><span
                                            class="path2"></span></i> </button>
                                <!--end::Mobile menu toggle-->

                                <!--begin::Logo image-->
                                <a href="">
                                    <img alt="Logo" src="https://uin-alauddin.ac.id/themes//images/favicon.png"
                                        class="logo-default h-25px h-lg-60px" />
                                    <img alt="Logo" src="https://uin-alauddin.ac.id/themes//images/favicon.png"
                                        class="logo-sticky h-20px h-lg-55px" />
                                </a>
                                <!--end::Logo image-->
                            </div>
                            <!--end::Logo-->

                            <div class="d-lg-block" id="kt_header_nav_wrapper">
                                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true"
                                    data-kt-drawer-name="landing-menu"
                                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                    data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                                    data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                                    data-kt-swapper-mode="prepend"
                                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                    <!--begin::Menu-->
                                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold"
                                        id="kt_landing_menu">
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6"
                                                href="{{ route('landing') }}" data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">Home</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#kt_body"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Berita</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#tentang"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Tentang</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                            </div>

                            <!--begin::Toolbar-->
                            <div class="flex-equal text-end ms-1">
                                <a href="{{ route('login.login-akun') }}" class="btn btn-success">Sign In</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9"
                    data-kt-sticky="true" data-kt-sticky-name="landing-partner"
                    data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Heading-->
                    <!--begin::Container-->
                    <div class="container">
                        <div class="card">
                            <div class="card-body border-primary" style="border-left: 5px solid; border-radius: 5px">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="fs-lg-2x fw-bolder">
                                            {{ $berita->judul_berita }}
                                        </div>
                                        <div>{{ $berita->sumber }}.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <ol
                                            class="breadcrumb breadcrumb-dot text-muted fs-6 fw-semibold justify-content-end">
                                            <li class="breadcrumb-item pe-3"><a href="{{ route('landing') }}"
                                                    class="pe-3">Home</a></li>
                                            <li class="breadcrumb-item pe-3"><a href="{{ route('landing') }}"
                                                    class="pe-3">Berita</a>
                                            </li>
                                            <li class="breadcrumb-item pe-3 text-muted">Detail Berita</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <img src="{{ asset('berita/' . $berita->gambar) }}" alt=""
                                class="w-100 h-350px rounded-2">
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Wrapper-->

        </div>
        <!--end::Header Section-->

        <div class="container py-15">
            <div class="d-grid justify-content-center">
                <div class="bg-primary p-3 d-flex rounded-1 justify-content-center gap-4 fs-5"
                    style="width: max-content">
                    <div>Publish : {{ $berita->tanggal_publikasi }}</div>|
                    <div>Penulis : {{ $berita->penulis }}</div>
                </div>
            </div>
            <div class="py-10 px-20 fs-6">
                {{ strip_tags($berita->isi_berita) }}
            </div>
            <div class="px-20 d-grid gap-2">
                <div class="fw-bolder">Like dan Bagikan ke :</div>
                <div class="d-flex gap-4">
                    <a href="" class="btn btn-success">WHATSAPP</a>
                    <a href="" class="btn btn-info">FACEBOOK</a>
                    <a href="" class="btn btn-dark">TWITTER</a>
                </div>
            </div>
        </div>

        <!--begin::Testimonials Section-->
        <div class="mt-20 mb-n20 position-relative z-index-2">
            <!--begin::Container-->
            <div class="container">
                <!--end::Row-->

                <!--begin::Highlight-->
                <div class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-8 p-lg-12 mb-n5 mb-lg-n13"
                    style="background: linear-gradient(90deg, #20AA3E 0%, #03A588 100%);">
                    <!--begin::Content-->
                    <div class="my-2 me-5">
                        <!--begin::Title-->
                        <div class="fs-1 fs-lg-2qx fw-bold text-white mb-2">
                            Portal Alumni

                            <span class="fw-normal">UIN ALAUDDIN MAKASSAR</span>
                        </div>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="fs-6 fs-lg-5 text-white fw-semibold opacity-75" style="text-align: justify">
                            Sistem Informasi Alumni UIN Alauddin Makassar adalah platform digital yang dirancang untuk
                            menghubungkan para alumni dengan kampus serta satu sama lain. Di dalam website ini, alumni
                            dapat berpartisipasi dalam survei pengguna untuk memberikan masukan berharga terkait
                            pengalaman mereka. Selain itu, platform ini menyediakan informasi mengenai lowongan
                            pekerjaan yang relevan dengan bidang studi alumni, serta berita terbaru tentang perkembangan
                            dan acara di kampus. Dengan fitur-fitur ini, website ini bertujuan untuk memperkuat ikatan
                            antara alumni dan almamater mereka, serta mendukung karir dan keterlibatan mereka dalam
                            komunitas kampus.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Content-->

                    <!--begin::Link-->
                    <img src="https://uin-alauddin.ac.id/themes//images/uin-white.png" class="w-150px"
                        alt="">
                    <!--end::Link-->
                </div>
                <!--end::Highlight-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Testimonials Section-->

        <!--begin::Footer Section-->
        <div id="tentang" class="mb-0">

            <!--begin::Wrapper-->
            <div class="landing-dark-bg pt-20">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Row-->
                    <div class="row py-10 py-lg-20">
                        <!--begin::Col-->
                        <div class="col-lg-6">
                            <!--begin::Block-->
                            <!--begin::Block-->
                            <div class="rounded landing-dark-border p-9 mb-10 embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.367005900739!2d119.4927245517533!3d-5.204879900000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee3e5b001988b%3A0x3bf7c2cadbb87913!2sRektorat%20Universitas%20Islam%20Negeri%20Alauddin%20Makassar!5e0!3m2!1sid!2sid!4v1716203661991!5m2!1sid!2sid"
                                    style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <!--end::Block-->
                            <style>
                                .embed-responsive {
                                    position: relative;
                                    display: block;
                                    width: 100%;
                                    height: 55vh;
                                    padding: 0;
                                    overflow: hidden;
                                }

                                .embed-responsive::before {
                                    content: "";
                                    display: block;
                                    padding-top: 56.25%;
                                    /* 16:9 aspect ratio */
                                }

                                .embed-responsive .embed-responsive-item,
                                .embed-responsive iframe,
                                .embed-responsive embed,
                                .embed-responsive object,
                                .embed-responsive video {
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    bottom: 0;
                                    width: 100%;
                                    height: 100%;
                                    border: 0;
                                }
                            </style>
                            <!--end::Block-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6 ps-lg-16">
                            <!--begin::Navs-->
                            <div class="d-flex justify-content-center">
                                <!--begin::Links-->
                                <div class="d-flex fw-semibold flex-column me-20">
                                    <!--begin::Subtitle-->
                                    <h4 class="fw-bold text-gray-400 mb-6">KONTAK</h4>
                                    <!--end::Subtitle-->
                                    <!--begin::Link-->
                                    <a href="https://keenthemes.com/faqs"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">(0411) 841879
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="../../demo1/dist/documentation/getting-started.html"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">(0411) 8221400
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="mailto:kontak@uin-alauddin.ac.id"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">kontak@uin-alauddin.ac.id</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Links-->
                                <!--begin::Links-->
                                <div class="d-flex fw-semibold flex-column ms-lg-20">
                                    <!--begin::Subtitle-->
                                    <h4 class="fw-bold text-gray-400 mb-6">SOSIAL MEDIA</h4>
                                    <!--end::Subtitle-->
                                    <!--begin::Link-->
                                    <a href="https://www.facebook.com/uinmks/" class="mb-6">
                                        <img src="/assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2"
                                            alt="" />
                                        <span
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://x.com/UIN_Alauddin" class="mb-6">
                                        <img src="/assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2"
                                            alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://www.instagram.com/uinalauddin.ac.id/" class="mb-6">
                                        <img src="/assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2"
                                            alt="" />
                                        <span
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
                                    </a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Links-->
                            </div>
                            <!--end::Navs-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
                <!--begin::Separator-->
                <div class="landing-dark-separator"></div>
                <!--end::Separator-->
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                        <!--begin::Copyright-->
                        <div class="d-flex align-items-center order-2 order-md-1">
                            <!--begin::Logo-->
                            <a href="../../demo1/dist/landing.html">
                                <img alt="Logo" src="https://uin-alauddin.ac.id/themes//images/favicon.png"
                                    class="h-50px h-md-55px" />
                            </a>
                            <!--end::Logo image-->
                            <!--begin::Logo image-->
                            <span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1" href="">©
                                UIN Alauddin Makassar. All Rights Reserved.</span>
                            <!--end::Logo image-->
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul
                            class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
                            <li class="menu-item">
                                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item mx-5">
                                <a href="https://devs.keenthemes.com" target="_blank"
                                    class="menu-link px-2">Support</a>
                            </li>
                            <li class="menu-item">
                                <a href="" target="_blank" class="menu-link px-2">Purchase</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Footer Section-->

        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <i class="ki-duotone ki-arrow-up"><span class="path1"></span><span class="path2"></span></i>
        </div>
        <!--end::Scrolltop-->
    </div>
    <!--end::Root-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                    transform="rotate(90 13 6)" fill="currentColor" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--begin::Javascript-->
    <script src="assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
    <script>
        var hostUrl = "assets/";
        // var typed = new Typed("#kt_typedjs_example_1", {
        //     strings: ["Selamat Datang"],
        //     typeSpeed: 30
        // });

        var typed = new Typed("#kt_landing_hero_text", {
            strings: ["Universitas Islam Negeri Alauddin Makassar"],
            typeSpeed: 30
        });
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used by this page)-->
    <script src="{{ asset('assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used by this page)-->
    <script src="{{ asset('assets/js/custom/landing.js') }}"></script>
    <script src="{{ asset('assets/js/custom/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/modals/upgrade-plan.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

    <script src="{{ asset('assets/js/panel.js') }}"></script>
    <script>
        let control = new Control();

        $(document).on('submit', ".form-data", function(e) {
            e.preventDefault();
            let $form = $(this);
            let type = $form.attr('data-type');
            let actionUrl;

            // Tentukan URL berdasarkan tipe formulir
            if (type === 'alumni') {
                actionUrl = '/register';
            } else if (type === 'survey') {
                actionUrl = '/survey';
            }

            if (actionUrl) {
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                });

                $.ajax({
                    type: 'POST',
                    url: actionUrl,
                    data: new FormData($form[0]),
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        $(".text-danger").html("");
                        if (response.success == true) {
                            swal
                                .fire({
                                    text: `${type.charAt(0).toUpperCase() + type.slice(1)} berhasil di Tambah`,
                                    icon: "success",
                                    showConfirmButton: false,
                                    timer: 1500,
                                })
                                .then(function() {
                                    $("#side_form_close").trigger("click");
                                    $("#side_form_close_survey").trigger("click");
                                    $("form")[0].reset();
                                    $("#from_select").val(null).trigger("change");
                                    // $(".form-select").val(null).trigger("change");
                                });
                        } else {
                            $("form")[0].reset();
                            $("#from_select").val(null).trigger("change");
                            // $(".form-select").val(null).trigger("change");
                            swal.fire({
                                title: response.message,
                                text: response.data,
                                icon: "warning",
                                showConfirmButton: false,
                                timer: 1500,
                            });
                        }
                    },
                    error: function(xhr) {
                        $(".text-danger").html("");
                        $.each(xhr.responseJSON["errors"], function(key, value) {
                            $(`.${key}_error`).html(value);
                        });
                    },
                });
            }
        });
    </script>



</body>
<!--end::Body-->

</html>
