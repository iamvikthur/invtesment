<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:title" content="AI Powered Day Trading | Strilo AI" />
    <meta property="og:description"
        content="Harness the power of AI and automate your day trading activities with Strilo AI Trader." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://strilo.ai" />
    <meta property="og:image" content="https://strilo.ai/img/Opengraph_Quopi1.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&amp;display=swap" rel="stylesheet">

    <title>Strilo | Home</title>
    <link rel="apple-touch-icon" sizes="180x180" href="https://strilo.ai/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://strilo.ai/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://strilo.ai/favicon.png">
    <link rel="manifest" href="site.html">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" crossorigin="anonymous">
    <link rel="stylesheet" href="https://strilo.ai/cdn.jsdelivr.net/npm/bootstrap-icons%401.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://strilo.ai/cdn.jsdelivr.net/npm/swiper%4010/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://strilo.ai/css/reboot.css">
    <link rel="stylesheet" href="https://strilo.ai/css/main.css">
    <link rel="stylesheet" href="https://strilo.ai/css/mobile.css">




    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5PN2E41MZ9"></script>
    <script type="text/javascript">
        adroll_adv_id = "SFSAYEH2HZF5BN3465OSOM";
        adroll_pix_id = "IC5WPHLKW5AOFGOKH35Z2J";
        adroll_version = "2.0";

        (function (w, d, e, o, a) {
            w.__adroll_loaded = true;
            w.adroll = w.adroll || [];
            w.adroll.f = ['setProperties', 'identify', 'track'];
            var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id
                + "/roundtrip.js";
            for (a = 0; a < w.adroll.f.length; a++) {
                w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function (n) {
                    return function () {
                        w.adroll.push([n, arguments])
                    }
                })(w.adroll.f[a])
            }

            e = d.createElement('script');
            o = d.getElementsByTagName('script')[0];
            e.async = 1;
            e.src = roundtripUrl;
            o.parentNode.insertBefore(e, o);
        })(window, document);
        adroll.track("pageView");
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-5PN2E41MZ9');
    </script>
</head>

<body>

    <style>
        .navigation-2 {
            margin-bottom: -80px;
            position: fixed;
            width: 100%;
            z-index: 10;
            background: rgba(18, 17, 28, 100);
            backdrop-filter: none;
            transition: 0.5s;
        }

        .navigation {
            width: 100%;
            z-index: 1;
            gap: 10px;
            background: transparent;
        }

        .enter-app {
            padding: 5px 15px;
            color: var(--col-3);
            font-size: 14px;
            border-radius: 5px;
        }

        .login-box {
            flex: unset;
            display: flex;
            gap: clamp(5px, 10px, 10px);
            justify-content: flex-end;
            align-items: center;
            font-weight: var(--fw-m);
            font-size: 1rem;
        }

        .register-qp {
            display: flex;
            flex-direction: row;
            align-items: center;
            color: var(--col-2);
            background: radial-gradient(#317bff, #317bff);
            font-size: 14px;
            border-radius: 3px;
            padding: 5px 30px;
            letter-spacing: 1px;
            gap: 10px;
            margin-right: 10px;
        }

        .my-account {
            display: flex;
            flex-direction: row;
            align-items: center;
            color: var(--col-2);
            background: radial-gradient(#317bff, #317bff);
            font-size: 14px;
            border-radius: 3px;
            padding: 5px 30px;
            letter-spacing: 1px;
            gap: 10px;
            margin-right: 10px;
        }

        .login-qp {
            display: flex;
            flex-direction: row;
            align-items: center;
            color: var(--col-2);
            background: #0d6efd;
            border-radius: 5px;
            padding: 5px 15px;
            font-size: 14px;
            gap: 5px;

        }

        .hamburger-qp {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 35px;
            height: 35px;
            background: transparent;
            border-radius: 5px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            -webkit-border-radius: 5px;
            transition: ease-out 5ms;
        }

        .ham {
            width: 33px !important;
        }

        .landing-open.active {
            display: flex;
            flex-direction: column;
            width: 270px;
            height: auto;
            background: linear-gradient(to right, #2b2a3b, #3b4748);
            border: unset;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            justify-content: space-between;
            align-items: center;
            position: absolute;
            top: 85px;
            right: 0;
            padding: 35px 30px;
            z-index: 5;
        }

        .nav-hide {
            display: block;
        }

        .nav-show {
            display: none;
        }

        .lang-box {
            width: 100%;
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            gap: 5px;
            margin-top: 30px;
        }

        .lang-box:after {
            content: "";
            height: 1px;
            width: 100%;
            position: absolute;
            top: -20px;
            right: 0;
            left: 0;
            background: radial-gradient(#ffffff8f, #ffffff00);
        }

        .lang-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 20px;
        }

        @media (max-width: 576px) {
            .landing-open.active {
                display: flex;
                flex-direction: column;
                width: 100vw;
                margin: unset;
                height: 100vh;
                overflow: hidden;
                border-radius: unset;
                border: unset;
                background: linear-gradient(to right, #2b2a3b, #3b4748);
                justify-content: flex-start;
                align-items: center;
                position: absolute;
                top: 0;
                right: 0;
                padding: 80px 30px;
                z-index: 1;
                gap: 1.5rem !important;
            }

            .nav-show {
                display: block;
            }

            .nav-hide {
                display: none;
            }

            .lang-box:after {
                content: "";
                height: 1px;
                width: 100%;
                position: absolute;
                top: -29px;
                right: 0;
                left: 0;
                background: radial-gradient(#ffffff8f, #ffffff00);
            }
        }

        /*NAV END*/
        .dropdown-menu {
            --bs-dropdown-zindex: 1000;
            --bs-dropdown-min-width: 15rem;
            --bs-dropdown-padding-x: 1rem;
            --bs-dropdown-padding-y: 0.75rem;
            --bs-dropdown-spacer: 0.125rem;
            --bs-dropdown-font-size: 1rem;
            --bs-dropdown-color: var(--bs-body-color);
            --bs-dropdown-bg: var(--col-10);
            --bs-dropdown-border-color: transparent;
            --bs-dropdown-border-radius: 1rem;
            --bs-dropdown-border-width: none;
            --bs-dropdown-inner-border-radius: calc(0.375rem - var(--bs-border-width));
            --bs-dropdown-divider-bg: var(--bs-border-color-translucent);
            --bs-dropdown-divider-margin-y: 0.5rem;
            --bs-dropdown-box-shadow: 0 0.5rem 1rem rgba(var(--bs-body-color-rgb), 0.15);
            --bs-dropdown-link-color: var(--bs-body-color);
            --bs-dropdown-link-hover-color: var(--bs-body-color);
            --bs-dropdown-link-hover-bg: var(--bs-tertiary-bg);
            --bs-dropdown-link-active-color: #fff;
            --bs-dropdown-link-active-bg: #0d6efd;
            --bs-dropdown-link-disabled-color: #adb5bd;
            --bs-dropdown-item-padding-x: 1rem;
            --bs-dropdown-item-padding-y: 0.25rem;
            --bs-dropdown-header-color: #6c757d;
            --bs-dropdown-header-padding-x: 1rem;
            --bs-dropdown-header-padding-y: 0.5rem;
            position: absolute;
            z-index: var(--bs-dropdown-zindex);
            display: none;
            min-width: var(--bs-dropdown-min-width);
            padding: var(--bs-dropdown-padding-y) var(--bs-dropdown-padding-x);
            margin: 0;
            font-size: var(--bs-dropdown-font-size);
            color: var(--bs-dropdown-color);
            text-align: left;
            list-style: none;
            background-color: var(--bs-dropdown-bg);
            background-clip: padding-box;
            border: var(--bs-dropdown-border-width) solid var(--bs-dropdown-border-color);
            border-radius: var(--bs-dropdown-border-radius);
        }

        .dropdown-menu.show {
            display: block;
            background: linear-gradient(to right, #1c1b29, #2f2e41, #313042, #3b4748);
        }

        .dropdown-item:focus,
        .dropdown-item:hover {
            color: var(--col-3) !important;
            background-color: #12111c !important;
            border-radius: 0.555rem;
        }

        .dropdown-menu li {
            margin-bottom: 5px;
        }

        .btn-clean {
            background: transparent;
            border: none;
            --bs-btn-padding-x: 0.75rem;
            --bs-btn-padding-y: 0.375rem;
            display: inline-block;
            padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
            font-size: var(--bs-btn-font-size);
            font-weight: var(--bs-btn-font-weight);
            line-height: var(--bs-btn-line-height);
            color: white;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .dropdown-toggle::after {
            display: inline-block;
            margin-left: 0.255em;
            vertical-align: 0em;
            content: "";
            border-top: 0.5em solid var(--col-3);
            border-right: 0.4em solid transparent;
            border-bottom: 0;
            border-left: 0.4em solid transparent;
        }

        @media (max-width: 940px) {
            .nav-hide-new {
                display: none !important;
            }
        }

        .socials-box {
            display: flex;
            flex-direction: row;
            gap: clamp(10px, 10px, 10px);
        }
    </style>
    <div class="navigation-2" id="navbar">
        <nav class="navigation">
            <div class="container-xxl">
                <div id="main-nav" class="navigation justify-content-between align-items-center">
                    <a href="/" class="landing-logo nav-show"><img class="nav-logo"
                            src="{{ asset('img/strilo-logo.png') }}" alt="Strilo_logo" width="100px" height="40"></a>
                    <a href="/" class="landing-logo nav-hide"><img class="nav-logo"
                            src="{{ asset('img/strilo-logo.png') }}" alt="Strilo_logo" width="130px"></a>
                    <div class="menu-links d-flex justify-content-between align-items-center gap-3 nav-hide-new">
                        <a href="/" class="text-white fw-medium mx-2 px-2 py-1">Home</a>
                        <div class="dropdown align-self-center">
                            <button class="dropdown-toggle btn-clean" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Resources
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item d-flex flex-row align-items-center gap-4 pe-5"
                                        href="https://strilo-ai.gitbook.io/resources/tutorials">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#317bff"
                                            class="bi bi-arrows-move" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708l2-2zM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10zM.146 8.354a.5.5 0 0 1 0-.708l2-2a.5.5 0 1 1 .708.708L1.707 7.5H5.5a.5.5 0 0 1 0 1H1.707l1.147 1.146a.5.5 0 0 1-.708.708l-2-2zM10 8a.5.5 0 0 1 .5-.5h3.793l-1.147-1.146a.5.5 0 0 1 .708-.708l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L14.293 8.5H10.5A.5.5 0 0 1 10 8z" />
                                        </svg>
                                        <span class="text-white d-flex flex-column">
                                            How To Tutorials
                                            <small class="text-white-50 fw-light" style="font-size: .775em;">Platform
                                                use visually explained</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex flex-row align-items-center gap-4 pe-5"
                                        href="https://strilo.ai/pages/faq">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#317bff"
                                            class="bi bi-patch-question" viewBox="0 0 16 16">
                                            <path
                                                d="M8.05 9.6c.336 0 .504-.24.554-.627.04-.534.198-.815.847-1.26.673-.475 1.049-1.09 1.049-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745z" />
                                            <path
                                                d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z" />
                                            <path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0z" />
                                        </svg>
                                        <span class="text-white d-flex flex-column">
                                            Frequently Asked Questions
                                            <small class="text-white-50 fw-light" style="font-size: .775em;">Find
                                                answers to most popular inquiries</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex flex-row align-items-center gap-4 pe-5"
                                        href="https://strilo.ai/pdf/whitepaper.pdf">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#317bff"
                                            class="bi bi-file-earmark-ruled" viewBox="0 0 16 16">
                                            <path
                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5v2zM3 12v-2h2v2H3zm0 1h2v2H4a1 1 0 0 1-1-1v-1zm3 2v-2h7v1a1 1 0 0 1-1 1H6zm7-3H6v-2h7v2z" />
                                        </svg>
                                        <span class="text-white d-flex flex-column">
                                            Whitepaper
                                            <small class="text-white-50 fw-light" style="font-size: .775em;">Gain
                                                insights into the tech behind Strilo</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex flex-row align-items-center gap-4 pe-5"
                                        href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#317bff"
                                            class="bi bi-headset" viewBox="0 0 16 16">
                                            <path
                                                d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z" />
                                        </svg>
                                        <span class="text-white d-flex flex-column">
                                            Contact Support
                                            <small class="text-white-50 fw-light" style="font-size: .775em;">Reach out
                                                to support via telegram</small>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a href="https://strilo.ai/blog" class="text-white fw-medium mx-2 px-2 py-1">Blog</a>
                        <div class="dropdown align-self-center">
                            <button class="dropdown-toggle btn-clean" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Socials
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item d-flex flex-row align-items-center gap-4 pe-5"
                                        target="_blank" href="#">
                                        <img width="28" src="https://strilo.ai/img/social/f_telegram.svg" alt="Telegram">
                                        <span class="text-white d-flex flex-column">
                                            Strilo AI Trader | Official Group
                                            <small class="text-white-50 fw-light" style="font-size: .775em;">Telegram
                                                community!</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex flex-row align-items-center gap-4 pe-5"
                                        target="_blank" href="#">
                                        <img width="28" src="https://strilo.ai/img/social/f_discord.svg" alt="Discord">
                                        <span class="text-white d-flex flex-column">
                                            Strilo AI Trader | Official Group
                                            <small class="text-white-50 fw-light" style="font-size: .775em;">Discord
                                                community!</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex flex-row align-items-center gap-4 pe-5"
                                        href="#" target="_blank">
                                        <img width="28" src="https://strilo.ai/img/social/f_twitter.svg" alt="Twitter">
                                        <span class="text-white d-flex flex-column">
                                            Twitter Account
                                            <small class="text-white-50 fw-light" style="font-size: .775em;">News and
                                                announcements</small>
                                        </span>
                                    </a>
                                </li>
                                <li>

                                </li>
                            </ul>
                        </div>
                        <a href="#" class="text-white fw-medium mx-2 px-2 py-1">Contact Us</a>
                        <a href="/dashboard" class="text-white fw-medium mx-2 px-2 py-1 border-bottom">My Account</a>
                    </div>
                    <div class="d-flex">
                        <a class="register-qp mob-hide" href="/register">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor"
                                class="bi bi-view-list" viewBox="0 0 16 16">
                                <path
                                    d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1H3zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2zm0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14z" />
                            </svg>
                            Register
                        </a>
                        <div class="hamburger-qp  border-bottom-0">
                            <div class="hamburger">
                                <svg class="ham hamRotate ham8" viewBox="0 0 100 100">
                                    <path class="line top"
                                        d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
                                    <path class="line middle" d="m 30,50 h 40" />
                                    <path class="line bottom"
                                        d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
                                </svg>
                            </div>
                        </div>
                        <div class="landing-open gap-2">
                            <div class="row justify-content-center align-items-center gap-2 mob-show w-100 mt-3">
                                <a class="col justify-content-center my-account text-center" href="/dashboard"
                                    style="margin-right: unset!important;">My account</a>
                                <a class="col justify-content-center my-account text-center" href="/register"
                                    style="margin-right: unset!important;">Register</a>
                            </div>
                            <a class="nav-option active" href="/">Home</a>
                            <a class="nav-option" target="blank" href="https://strilo.ai/blog">Blog</a>
                            <a class="nav-option" target="blank" href="#">Updates</a>
                            <a class="nav-option" target="blank" href="https://strilo.ai/pages/faq">FAQs</a>
                            <a class="nav-option" target="blank" href="https://strilo.ai/contacts">Contact Us</a>
                            <a class="nav-option" target="blank" href="#" target="_blank">
                                Whitepaper
                            </a>
                            <div class="socials-box">
                                <a target="_blank" href="#" class="social">
                                    <img src="https://strilo.ai/img/social/f_telegram.svg" alt="Telegram">
                                </a>
                                <a target="_blank" href="#" class="social">
                                    <img src="https://strilo.ai/img/social/f_twitter.svg" alt="Twitter">
                                </a>
                                <a target="_blank" href="https://discord.gg/PxRTDAdX2g" class="social">
                                    <img src="https://strilo.ai/img/social/f_discord.svg" alt="Discord">
                                </a>



                            </div>


                            <div class="lang-box row">
                                <div class="col-auto px-1">
                                    <a class="rounded-1 overflow-hidden lang-link" href="https://strilo.ai">
                                        <img class="img-fluid lang-img" src="https://strilo.ai/img/lang/cn_flag.jpg" alt="ENG">
                                    </a>
                                </div>
                                <div class="col-auto px-1">
                                    <a class="rounded-1 overflow-hidden lang-link" href="https://strilo.ai">
                                        <img class="img-fluid lang-img" src="https://strilo.ai/img/lang/uk_flag.jpg" alt="ENG">
                                    </a>
                                </div>
                                <div class="col-auto px-1 ">
                                    <a class="rounded-1 overflow-hidden lang-link" href="https://strilo.ai">
                                        <img class="img-fluid lang-img" src="https://strilo.ai/img/lang/esp_flag.jpg" alt="ESP">
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>


    <style>
        .header-tittle {
            max-width: 720px;
        }

        .main-picture {
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: -1;
        }

        .mob-show-block {
            display: none;
        }

        .bg-btn-custom {
            min-width: 350px;
            width: 100%;
            height: 55px;
            font-size: 18px;
            background: #317bff !important;
            background-image: unset !important;
            box-shadow: 0 0 20px #317bff;
        }

        .bg-btn-custom-2 {
            background: #317bff !important;
            background-image: unset !important;
            box-shadow: 0 0 10px #317bff;
        }

        .quopi_app_bg {
            background-image: url("https://strilo.ai/img/home/strilo_home_4.jpg");
            background-size: cover;
            background-position: center;
        }

        .fs-qp {
            font-size: 1.1rem;
        }

        .border-bottom-qp {
            border-bottom: 3px solid rgba(124, 124, 124, 0.5);
        }

        .border-bottom-qp-2 {
            border-bottom: 1.5px solid rgba(124, 124, 124, 0.5);
        }

        .card {
            background: transparent !important;
            width: 20rem;
            --bs-card-border-width: unset;
            border-bottom-right-radius: unset;
            border-bottom-left-radius: unset;
        }

        .icon-link:hover svg {
            transition: ease-in-out .3s;
            transform: translateX(5px);
        }

        .new-text {
            display: -webkit-box !important;
            -webkit-line-clamp: 4 !important;
            -webkit-box-orient: vertical !important;
            overflow: hidden !important;
            text-overflow: ellipsis !important;
        }

        .vide-overlay {
            width: 100%;
            height: 100%;
            position: absolute;
            background: rgba(0, 0, 0, 0.45);
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 0;
        }

        .swiper {
            width: 100%;
        }

        .swiper-slide {
            height: 430px;
            width: 450px;
            background: #14131f;
            display: block;
            padding: 50px;
            border-radius: 30px;
        }

        .swiper-wrapper {
            position: relative;
            width: 100%;
            height: unset;
            z-index: 1;
            display: flex;
            transition-property: transform;
            transition-timing-function: var(--swiper-wrapper-transition-timing-function, initial);
            box-sizing: content-box;
        }

        .home-main-content {
            background-image: url("https://strilo.ai/img/platform/Refer_background.png"), linear-gradient(to bottom, #1c1a28, #1c1a28);
            background-repeat: no-repeat, repeat;
            background-size: contain, cover;
            background-position: top center, center;
        }

        .home-main-content-2 {
            background: #1c1a28;
        }

        .home-img-1 {
            width: 100%;
            height: 100%;
        }

        .home-img-2 {
            max-width: 50%;
            height: auto;
        }

        .trade-results-box {
            max-height: 420px;
            max-width: 302px;
            width: 100%;
            bottom: -30px;
            right: 65px;
        }

        .trade-bg {
            background: linear-gradient(to right, #1a2c3c, #151420);
        }

        .custom-bg {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("https://strilo.ai/img/nav/earth_bg.jpg");
            background-repeat: no-repeat, no-repeat;
            background-size: cover, cover;
            background-position: center, center;
        }

        @media (max-width: 576px) {
            .mob-show-block {
                display: block;
            }

            .header-top {
                justify-content: flex-start !important;
                gap: 10px;
                padding-bottom: 25px;
            }

            .bg-btn-custom {
                min-width: 250px;
            }

            .card {
                width: 100%;
            }

            .home-img-2 {
                max-width: 80%;
            }

            .trade-results-box {
                max-height: 265px;
                max-width: 221px;
                width: 100%;
                bottom: 0px;
                right: 30px;
            }
        }

        .trade-explain {
            bottom: -100px;
            max-width: 465px;
            width: 100%;
            margin: 0 auto;
            right: 50%;
            transform: translateX(50%);
        }
    </style>
    <section class="header-home position-relative">
        <div class="vide-overlay mob-hide"></div>
        <video class="main-video mob-hide" id="qp_main" autoplay playsinline loop muted poster="https://strilo.ai/img/b2_placeholder.jpg">
            <source src="{{ asset('video/final_v2.mp4') }}" type="video/mp4">
            <source src="{{ asset('video/final_v2_mob.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <picture class="mob-show-block main-picture">
            <source srcset="" type="image/jpg">
            <img src="https://strilo.ai/img/home/home-top-mob.png" class="img-fluid" alt="Strilo_home_bg">
        </picture>
        <div class="container-lg">
            <div class="header-top d-flex flex-column align-items-center text-center justify-content-center"
                style="height: 91vh;">
                <h1 class="display-2 fw-bolder lh-1 mb-4 header-tittle pt-5 mob-hide">Automated Trading, Fully Built by <span class="header-text-ai">AI</span> and <span class="header-text-ai">Machine Learning</span>
                    </h1>
                <h1 class="display-5 fw-bolder lh-1 header-tittle pt-3 exceptional mt-5 pt-3"
                    style="font-size: calc(1.425rem + 3vw);">Automated Trading, Fully Built By <span
                        class="header-text-ai">AI.</span>and <span class="header-text-ai">Machine Learning</span></h1>
                <h5 class="fs-5 fw-normal pb-3 pt-2 mob-hide">Strilo AI trader - the AI created trading bot that <span
                        class="text-green">never misses*</span>. Join and earn today!</h5>
                <h5 class="fw-normal pb-2  mob-show-block">Strilo AI trader - the AI created trading bot that <span
                        class="text-green">never misses*</span>. Join and earn today!</h5>
                <div class="row gap-3 px-4 px-sm-2 justify-content-sm-start justify-content-center">
                    <div class="col col-sm-auto p-0">
                        <a href="/login"
                            class="btn btn-primary text-uppercase d-flex align-items-center justify-content-center fw-bold gap-4 py-3 py-sm-2 rounded-2 px-sm-4 px-3 bg-btn-custom">
                            Get Started
                            <img src="https://strilo.ai/img/landing/Bot_icon.svg" alt="Strl-Icon" width="22" height="22" class="img-fluid">
                        </a>
                    </div>
                </div>
                <!-- <div class="row mt-5 mob-hide">
                    <div class="col-12">


                        <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5419b732fbfb950b10de65e5"
                            data-businessunit-id="6422c84d9375acebcb864521" data-style-height="30px"
                            data-style-width="100%" data-theme="dark">
                            <a href="https://uk.trustpilot.com/review/strilo.ai" target="_blank"
                                rel="noopener">Trustpilot</a>
                        </div>



                    </div>
                </div> -->
            </div>

            <div class="row">
                <div class="col-12">
                    <p class="small text-center text-white-50 pb-4 mob-hide">
                        <span class="text-green lead opacity-100">*</span>Strilo trading bot is live since July 15th,
                        2022. It is active 24/7. The day trading bot
                        has averaged an approximate profit of 5.28% per day. All trading involves risk. Only invest as
                        much as you are willing to lose.
                    </p>
                    <p class="small text-center text-white-50 pb-5 mb-3 lh-sm mob-show-block">
                        <span class="text-green lead opacity-100">*</span>Strilo trading bot is live since July 15th,
                        2022. It is active 24/7. The day trading bot
                        has averaged a approximate profit of 5.28% per day. All trading involves risk. Only invest as
                        much as you are willing to lose.e.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="home-main-content position-relative overflow-hidden">
        <div class="container-md">
            <div class="row" style="margin-top: 100px;">
                <div class="col">
                    <img class="img-fluid rounded-4 mob-hide" src="https://strilo.ai/img/home/strilo_home_1.jpg" alt="">
                    <img class="home-img-1 rounded-4 mob-show-block" src="https://strilo.ai/img/home/quopi_home_1_2.jpg" alt="">
                </div>
            </div>
            <div class="row-cols-1 justify-content-center align-items-start row-cols-1 mt-5">
                <div class="col col-md-5 mx-auto">
                    <h3 class="text-white fw-bold">Seamless and Automated Investing.</h3>
                </div>
                <div class="col col-md-5 mx-auto mt-3">
                    <p class="text-white fs-qp">Looking to invest without the hassle of guessing? Automate your investing with Strilo AI Trader. Join in less than 2 minutes and leverage the Power of our GPT-powered day trading bot to trade on your behalf in the Cryptocurrency Market and NY Stock Exchange.</p>
                </div>
                <div class="col col-md-5 mx-auto">
                    <a href="https://strilo-ai.gitbook.io/resources/"
                        class="text-blue fw-bold d-flex align-items-center h5 gap-2 justify-content-start"
                        target="_blank">
                        <span>About Strilo AI Trader</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="row mt-5 justify-content-between">
                <div class="col-12 col-md-6 text-start mt-5 mb-5 mb-md-0 px-0 position-relative">
                    <img class="home-img-2" src="https://strilo.ai/img/home/quopi_home_2.png" alt="">
                    <div class="position-absolute trade-results-box">
                        <div class="row row-cols-1 gap-3">
                            <div class="col-12">
                                <div class="row trade-bg rounded-3 p-2">
                                    <div class="col-12">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto"><small
                                                    class="text-start text-white fw-bold mb-0">09.10.2023</small></div>
                                            <div class="col-auto pe-0"><small class="text-start text-white fw-bold mb-0"
                                                    data-bs-toggle="modal" data-bs-target="#report_details"
                                                    style="cursor: pointer">Details <span
                                                        class="text-blue">-></span></small></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <h2 class="text-green fw-light mb-0">2.07%</h2>
                                    </div>
                                    <div class="col ms-3 align-self-center">
                                        <div class="row justify-content-end gap-1">
                                            <div class="col-auto px-0 mob-hide">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_META.jpg" alt="META"
                                                    style="border-radius: 50%; width: 30px;">
                                            </div>
                                            <div class="col-auto px-0 mob-show-block">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_META.jpg" alt="META"
                                                    style="border-radius: 50%; width: 20px;">
                                            </div>
                                            <div class="col-auto px-0 mob-hide">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_CSCO.jpg" alt="CSCO"
                                                    style="border-radius: 50%; width: 30px;">
                                            </div>
                                            <div class="col-auto px-0 mob-show-block">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_CSCO.jpg" alt="CSCO"
                                                    style="border-radius: 50%; width: 20px;">
                                            </div>
                                            <div class="col-auto px-0 mob-hide">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_JPM.jpg" alt="JPM"
                                                    style="border-radius: 50%; width: 30px;">
                                            </div>
                                            <div class="col-auto px-0 mob-show-block">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_JPM.jpg" alt="JPM"
                                                    style="border-radius: 50%; width: 20px;">
                                            </div>
                                            <div class="col-auto px-0 mob-hide">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_JPM.jpg" alt="JPM"
                                                    style="border-radius: 50%; width: 30px;">
                                            </div>
                                            <div class="col-auto px-0 mob-show-block">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_JPM.jpg" alt="JPM"
                                                    style="border-radius: 50%; width: 20px;">
                                            </div>
                                            <div class="col-auto px-0 align-self-center">
                                                <p class="text-white fw-bold text-center mb-0 mob-hide"
                                                    style="border-radius: 50%; width: 40px;">+2</p>
                                                <small class="text-white fw-bold text-center mb-0 mob-show-block"
                                                    style="border-radius: 50%; width: 20px;">+2</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row trade-bg rounded-3 p-2">
                                    <div class="col-12">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto"><small
                                                    class="text-start text-white fw-bold mb-0">06.10.2023</small></div>
                                            <div class="col-auto pe-0"><small class="text-start text-white fw-bold mb-0"
                                                    data-bs-toggle="modal" data-bs-target="#report_details"
                                                    style="cursor: pointer">Details <span
                                                        class="text-blue">-></span></small></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <h2 class="text-green fw-light mb-0">2.57%</h2>
                                    </div>
                                    <div class="col ms-3 align-self-center">
                                        <div class="row justify-content-end gap-1">
                                            <div class="col-auto px-0 mob-hide">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_NVDA.jpg" alt="NVDA"
                                                    style="border-radius: 50%; width: 30px;">
                                            </div>
                                            <div class="col-auto px-0 mob-show-block">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_NVDA.jpg" alt="NVDA"
                                                    style="border-radius: 50%; width: 20px;">
                                            </div>
                                            <div class="col-auto px-0 mob-hide">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_TSLA.jpg" alt="TSLA"
                                                    style="border-radius: 50%; width: 30px;">
                                            </div>
                                            <div class="col-auto px-0 mob-show-block">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_TSLA.jpg" alt="TSLA"
                                                    style="border-radius: 50%; width: 20px;">
                                            </div>
                                            <div class="col-auto px-0 mob-hide">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_SHOP.jpg" alt="SHOP"
                                                    style="border-radius: 50%; width: 30px;">
                                            </div>
                                            <div class="col-auto px-0 mob-show-block">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_SHOP.jpg" alt="SHOP"
                                                    style="border-radius: 50%; width: 20px;">
                                            </div>
                                            <div class="col-auto px-0 mob-hide">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_PYPL.jpg" alt="PYPL"
                                                    style="border-radius: 50%; width: 30px;">
                                            </div>
                                            <div class="col-auto px-0 mob-show-block">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_PYPL.jpg" alt="PYPL"
                                                    style="border-radius: 50%; width: 20px;">
                                            </div>
                                            <div class="col-auto px-0 align-self-center">
                                                <p class="text-white fw-bold text-center mb-0 mob-hide"
                                                    style="border-radius: 50%; width: 40px;">+1</p>
                                                <small class="text-white fw-bold text-center mb-0 mob-show-block"
                                                    style="border-radius: 50%; width: 20px;">+1</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row trade-bg rounded-3 p-2">
                                    <div class="col-12">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto"><small
                                                    class="text-start text-white fw-bold mb-0">05.10.2023</small></div>
                                            <div class="col-auto pe-0"><small class="text-start text-white fw-bold mb-0"
                                                    data-bs-toggle="modal" data-bs-target="#report_details"
                                                    style="cursor: pointer">Details <span
                                                        class="text-blue">-></span></small></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <h2 class="text-green fw-light mb-0">2.46%</h2>
                                    </div>
                                    <div class="col ms-3 align-self-center">
                                        <div class="row justify-content-end gap-1">
                                            <div class="col-auto px-0 mob-hide">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_JPM.jpg" alt="JPM"
                                                    style="border-radius: 50%; width: 30px;">
                                            </div>
                                            <div class="col-auto px-0 mob-show-block">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_JPM.jpg" alt="JPM"
                                                    style="border-radius: 50%; width: 20px;">
                                            </div>
                                            <div class="col-auto px-0 mob-hide">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_AMZN.jpg" alt="AMZN"
                                                    style="border-radius: 50%; width: 30px;">
                                            </div>
                                            <div class="col-auto px-0 mob-show-block">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_AMZN.jpg" alt="AMZN"
                                                    style="border-radius: 50%; width: 20px;">
                                            </div>
                                            <div class="col-auto px-0 mob-hide">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_BAC.jpg" alt="BAC"
                                                    style="border-radius: 50%; width: 30px;">
                                            </div>
                                            <div class="col-auto px-0 mob-show-block">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_BAC.jpg" alt="BAC"
                                                    style="border-radius: 50%; width: 20px;">
                                            </div>
                                            <div class="col-auto px-0 mob-hide">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_TSLA.jpg" alt="TSLA"
                                                    style="border-radius: 50%; width: 30px;">
                                            </div>
                                            <div class="col-auto px-0 mob-show-block">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_TSLA.jpg" alt="TSLA"
                                                    style="border-radius: 50%; width: 20px;">
                                            </div>
                                            <div class="col-auto px-0 align-self-center">
                                                <p class="text-white fw-bold text-center mb-0 mob-hide"
                                                    style="border-radius: 50%; width: 40px;">+1</p>
                                                <small class="text-white fw-bold text-center mb-0 mob-show-block"
                                                    style="border-radius: 50%; width: 20px;">+1</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row trade-bg rounded-3 p-2">
                                    <div class="col-12">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto"><small
                                                    class="text-start text-white fw-bold mb-0">04.10.2023</small></div>
                                            <div class="col-auto pe-0"><small class="text-start text-white fw-bold mb-0"
                                                    data-bs-toggle="modal" data-bs-target="#report_details"
                                                    style="cursor: pointer">Details <span
                                                        class="text-blue">-></span></small></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <h2 class="text-green fw-light mb-0">1.53%</h2>
                                    </div>
                                    <div class="col ms-3 align-self-center">
                                        <div class="row justify-content-end gap-1">
                                            <div class="col-auto px-0 mob-hide">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_AAPL.jpg" alt="AAPL"
                                                    style="border-radius: 50%; width: 30px;">
                                            </div>
                                            <div class="col-auto px-0 mob-show-block">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_AAPL.jpg" alt="AAPL"
                                                    style="border-radius: 50%; width: 20px;">
                                            </div>
                                            <div class="col-auto px-0 mob-hide">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_TSLA.jpg" alt="TSLA"
                                                    style="border-radius: 50%; width: 30px;">
                                            </div>
                                            <div class="col-auto px-0 mob-show-block">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_TSLA.jpg" alt="TSLA"
                                                    style="border-radius: 50%; width: 20px;">
                                            </div>
                                            <div class="col-auto px-0 mob-hide">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_CSCO.jpg" alt="CSCO"
                                                    style="border-radius: 50%; width: 30px;">
                                            </div>
                                            <div class="col-auto px-0 mob-show-block">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_CSCO.jpg" alt="CSCO"
                                                    style="border-radius: 50%; width: 20px;">
                                            </div>
                                            <div class="col-auto px-0 mob-hide">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_META.jpg" alt="META"
                                                    style="border-radius: 50%; width: 30px;">
                                            </div>
                                            <div class="col-auto px-0 mob-show-block">
                                                <img src="https://strilo.ai/img/stockicons/stock_icons_META.jpg" alt="META"
                                                    style="border-radius: 50%; width: 20px;">
                                            </div>
                                            <div class="col-auto px-0 align-self-center">
                                                <p class="text-white fw-bold text-center mb-0 mob-hide"
                                                    style="border-radius: 50%; width: 40px;">+1</p>
                                                <small class="text-white fw-bold text-center mb-0 mob-show-block"
                                                    style="border-radius: 50%; width: 20px;">+1</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="report_details" tabindex="-1" aria-labelledby="report_details"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered justify-content-center"
                                    style="max-width: 400px; width: 100%">
                                    <div class="modal-content custom-bg bg-dark-qp border-2 border-gray-qp rounded-5 p-1"
                                        style="width: 325px">
                                        <div class="modal-header p-4" style="border-bottom: unset">
                                            <button type="button" class="btn-close active small fw-bolder"
                                                data-bs-dismiss="modal" aria-label="Close"
                                                style="color: white"></button>
                                        </div>
                                        <div class="modal-body text-center px-4">
                                            <h4 class="text-white-50 fs-5 m-0 lh-1 fw-light">See More</h4>
                                            <h1 class="text-white">Full History</h1>
                                            <small class="text-white-50">Full reports on all daily trading results,
                                                including details on each traded position, are available in the
                                                dashboard after registration</small>

                                        </div>
                                        <div class="modal-footer justify-content-center p-4 pt-0 mt-3"
                                            style="border-top: unset">
                                            <a href="#" type="button"
                                                class="btn btn-primary w-100 rounded-3 m-0 py-2">Register</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <small class="mob-hide position-absolute trade-explain text-white-50 text-start"><span
                            class="text-green">*</span> Displayed information in this visual is dynamic - the results of
                        the last 4 trading days are reflected.</small>
                </div>
                <div class="col-12 col-md-5 align-self-center">
                    <div class="row-cols-1 justify-content-center align-items-start mt-5">
                        <div class="col mx-auto">
                            <h3 class="text-white fw-bold">Our Results Outweigh Our Words.</h3>
                        </div>
                        <div class="col mt-3">
                            <p class="text-white fs-qp">Strilo AI Trader, an AI-powered day trading bot, strategically combines technical analysis (TA) with up-to-date news indicators. This approach guides its sequential trades from a carefully curated list of monitored Cryptocurrencies and Stocks.

                                Max, [10/15/2023 4:24 PM]
                                Our Results Outweigh Our Words.</p>
                        </div>
                        <div class="col mx-auto">
                            <a class="text-blue fw-bold d-flex align-items-center h5 gap-2 justify-content-start mob-hide"
                                data-bs-toggle="modal" data-bs-target="#monitored_stocks">
                                <span>Currently Monitored Stocks</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                            <a class="text-blue fw-bold d-flex align-items-center h5 gap-2 justify-content-start mob-show"
                                data-bs-toggle="modal" data-bs-target="#monitored_stocks">
                                <span>Monitored Stocks</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="monitored_stocks" tabindex="-1" aria-labelledby="monitored_stocks"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered justify-content-center"
                    style="max-width: 400px; width: 100%">
                    <div class="modal-content custom-bg bg-dark-qp border-2 border-gray-qp rounded-5 p-1"
                        style="width: 325px">
                        <div class="modal-header p-4" style="border-bottom: unset">
                            <button type="button" class="btn-close active small fw-bolder" data-bs-dismiss="modal"
                                aria-label="Close" style="color: white"></button>
                        </div>
                        <div class="modal-body text-center px-4">
                            <h4 class="text-white-50 fs-5 m-0 lh-1 fw-light">Monitored</h4>
                            <h1 class="text-white">Stocks</h1>
                            <small class="text-white-50">Strilo AI Trader currently monitors and executes long positions
                                on 16 stocks across various industries.</small>
                            <div class="row row-cols-5 justify-content-center align-items-center gap-1 mt-3">
                                <div class="col p-0"><img class="rounded-circle" width="50"
                                        src="https://strilo.ai/img/stockicons/stock_icons_AAPL.jpg" alt="AAPL"></div>
                                <div class="col p-0"><img class="rounded-circle" width="50"
                                        src="https://strilo.ai/img/stockicons/stock_icons_AMZN.jpg" alt="AMZN"></div>

                                <div class="col p-0"><img class="rounded-circle" width="50"
                                        src="https://strilo.ai/img/stockicons/stock_icons_BAC.jpg" alt="BAC"></div>
                                <div class="col p-0"><img class="rounded-circle" width="50"
                                        src="https://strilo.ai/img/stockicons/stock_icons_CSCO.jpg" alt="CSCO"></div>
                                <div class="col p-0"><img class="rounded-circle" width="50"
                                        src="https://strilo.ai/img/stockicons/stock_icons_DIS.jpg" alt="DIS"></div>

                                <div class="col p-0"><img class="rounded-circle" width="50"
                                        src="https://strilo.ai/img/stockicons/stock_icons_GOOG.jpg" alt="GOOG"></div>
                                <div class="col p-0"><img class="rounded-circle" width="50"
                                        src="https://strilo.ai/img/stockicons/stock_icons_JPM.jpg" alt="JPM"></div>
                                <div class="col p-0"><img class="rounded-circle" width="50"
                                        src="https://strilo.ai/img/stockicons/stock_icons_KO.jpg" alt="KO"></div>
                                <div class="col p-0"><img class="rounded-circle" width="50"
                                        src="https://strilo.ai/img/stockicons/stock_icons_MCD.jpg" alt="MCD"></div>
                                <div class="col p-0"><img class="rounded-circle" width="50"
                                        src="https://strilo.ai/img/stockicons/stock_icons_META.jpg" alt="META"></div>

                                <div class="col p-0"><img class="rounded-circle" width="50"
                                        src="https://strilo.ai/img/stockicons/stock_icons_NKE.jpg" alt="NKE"></div>
                                <div class="col p-0"><img class="rounded-circle" width="50"
                                        src="https://strilo.ai/img/stockicons/stock_icons_NVDA.jpg" alt="NVDA"></div>
                                <div class="col p-0"><img class="rounded-circle" width="50"
                                        src="https://strilo.ai/img/stockicons/stock_icons_PYPL.jpg" alt="PYPL"></div>
                                <div class="col p-0"><img class="rounded-circle" width="50"
                                        src="https://strilo.ai/img/stockicons/stock_icons_SHOP.jpg" alt="SHOP"></div>
                                <div class="col p-0"><img class="rounded-circle" width="50"
                                        src="https://strilo.ai/img/stockicons/stock_icons_TSLA.jpg" alt="TSLA"></div>
                                <div class="col p-0"><img class="rounded-circle" width="50"
                                        src="https://strilo.ai/img/stockicons/stock_icons_XOM.jpg" alt="XOM"></div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-center p-4 pt-0 mt-3" style="border-top: unset">
                            <button type="button" class="btn btn-primary w-100 rounded-3 m-0 py-2"
                                data-bs-dismiss="modal" aria-label="Close">Understood!</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-5 justify-content-between mob-hide">
                <div class="col-5 align-self-center">
                    <div class="row-cols-1 justify-content-center align-items-start mt-5">
                        <div class="col mx-auto">
                            <h3 class="text-white fw-bold">Stay in control of everything.</h3>
                        </div>
                        <div class="col mt-3">
                            <p class="text-white fs-qp">Stay informed and in control with Strilo AI Trader. Our user-centric approach equips you with the necessary tools to stay in control of your trading activities and make informed decisions.</p>
                        </div>
                        <div class="col mt-3">
                            <ul class="ms-2 fs-qp">
                                <li>Daily Trading Summaries</li>
                                <li>Weekly Performance Reports</li>
                                <li>Easily Downloadable Executive Rundowns</li>
                            </ul>
                        </div>
                        <div class="col-12 mx-auto">
                            <a href="#"
                                class="text-blue fw-bold d-flex align-items-center h5 gap-2 justify-content-start">
                                <span>Try Strilo AI Trader Today</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 align-self-end mt-5 text-end">
                    <img class="img-fluid" src="https://strilo.ai/img/home/quopi_home_3.png" alt="" style="height: 660px!important;">
                </div>
            </div>
            <div class="row my-5">
                <div class="col-12 quopi_app_bg rounded-4 p-5 my-5 mob-hide">
                    <div class="row p-4">
                        <h1 class="col-12 fw-bold line-height">Download the<br> Strilo App</h1>
                        <p class="col-5 text-white fs-5 mt-3">The wait is almost over! Strilo AI Trader's mobile app is
                            coming by the end of September 2023, delivering a new era of trading convenience.</p>
                        <div class="row row-cols-2 p-0 mt-3">
                            <div class="col-auto pe-0">
                                <a href="#" target="_blank"><img class="img-fluid p-0" src="https://strilo.ai/img/landing/app_store_1.png"
                                        alt="Google-Play" width="180"></a>
                            </div>
                            <div class="col-auto">
                                <img class="img-fluid p-0 opacity-25" src="https://strilo.ai/img/landing/app_store_2.png" alt="App-Store"
                                    width="180">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 rounded-4 my-3 mob-show-block">
                    <div class="row">
                        <div class="col-12">
                            <img class="home-img-1 rounded-4" src="https://strilo.ai/img/home/quopi_home_4_1.jpg" alt="Quopi_asset">
                        </div>
                        <h1 class="col-12 display-5 fw-bold line-height mt-3 lh-qp"
                            style="font-size: calc(1.425rem + 3vw);">Download the<br> Quopi App<br><span
                                class="badge text-white rounded-2 px-3 py-2 fs-6 mt-2"
                                style="background: #317bff;">COMING SOON!</span></h1>
                        <p class="col-12 text-white fs-qp mt-3">The wait is almost over! Quopi AI Trader's mobile app is
                            coming by the end of September 2023, delivering a new era of trading convenience.</p>
                        <div class="row row-cols-2 p-0 mt-3">
                            <div class="col-6 pe-0">
                                <img class="img-fluid p-0 opacity-25" src="https://strilo.ai/img/landing/app_store_1.png"
                                    alt="Google-Play" width="200">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid p-0 opacity-25" src="https://strilo.ai/img/landing/app_store_2.png" alt="App-Store"
                                    width="200">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <h4 class="text-white text-center fw-bold mob-hide">Thousands Have Already Automated <br>Their Day Trading — Join Them Today.</h4>
                    <h3 class="text-white text-center fw-bold mob-show-block">Thousands Have Already Automated <br>Their Day Trading — Join Them Today.</h3>
                </div>
                <div class="col-9 col-sm-auto p-0 mt-2 mb-5">
                    <a href="/login"
                        class="btn btn-primary text-uppercase d-flex align-items-center justify-content-center fw-bold gap-4 py-2 rounded-2 px-sm-4 px-5 bg-btn-custom-2">
                        Get Started
                        <img src="https://strilo.ai/img/landing/Bot_icon.svg" alt="QP-Icon" width="22" height="22" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="home-main-content-2 pt-4" style="margin-top: -5px; overflow-x: hidden">


        <!-- <div class="trustpilot-widget" data-locale="en-GB" data-template-id="54ad5defc6454f065c28af8b"
            data-businessunit-id="6422c84d9375acebcb864521" data-style-height="240px" data-style-width="100%"
            data-theme="dark" data-stars="5" data-review-languages="en">
            <a href="https://uk.trustpilot.com/review/strilo.ai" target="_blank" rel="noopener">Trustpilot</a>
        </div> -->



        <div class="row">
            <div class="col-12 py-4">
                <a href="https://www.trustpilot.com/review/strilo.ai" target="_blank"
                    class="text-green fw-bold d-flex align-items-center h5 gap-2 justify-content-center">
                    <span>Read All Reviews On Trustpilot</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="col-12 py-5"></div>
    </section>
<!--
    <section class="home-main-content-2 position-relative overflow-hidden">
        <div class="container-md">
            <h4 class="text-center pb-5 fw-bold lh-1">Our Latest News</h4>
            <div class="row justify-content-center gap-5 gy-4 pb-5">

                <div class="col-auto h-100">
                    <div class="card border-bottom-qp">
                        <img src="https://strilo.ai/img/news/news24.jpg" class="card-img-top object-fit-cover rounded-4"
                            alt="Quopi-news-pic" style="height: 190px!important;">
                        <div class="card-body overflow-hidden mb-5 px-0">
                            <p class="text-white-50 fw-light mb-0">15.10.2023</p>
                            <h5 class="card-title" style="height: 55px">App is Live on Google Play Store!</h5>
                            <p class="card-text text-white fw-light new-text" style="height: 95px">
                                We're thrilled to announce that Strilo AI Trader's Early Access App is now live on the
                                Google Play Store for everyone to download!
                            </p>
                            <a href="news.html" class="icon-link fw-bold text-blue mt-3">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-auto h-100">
                    <div class="card border-bottom-qp">
                        <img src="https://strilo.ai/img/news/news23.jpg" class="card-img-top object-fit-cover rounded-4"
                            alt="Quopi-news-pic" style="height: 190px!important;">
                        <div class="card-body overflow-hidden mb-5 px-0">
                            <p class="text-white-50 fw-light mb-0">22.08.2023</p>
                            <h5 class="card-title" style="height: 55px">Google Play Store App Pre-Launch Test!</h5>
                            <p class="card-text text-white fw-light new-text" style="height: 95px">
                                As we approach the final days before our app's official launch, we're giving you the
                                opportunity to test its functionality and provide valuable feedback. Your insights will
                                play a crucial role in identifying and addressing any issues before the big release.
                            </p>
                            <a href="news.html" class="icon-link fw-bold text-blue mt-3">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-auto h-100">
                    <div class="card border-bottom-qp">
                        <img src="https://strilo.ai/img/news/news22.jpg" class="card-img-top object-fit-cover rounded-4"
                            alt="Quopi-news-pic" style="height: 190px!important;">
                        <div class="card-body overflow-hidden mb-5 px-0">
                            <p class="text-white-50 fw-light mb-0">21.09.2023</p>
                            <h5 class="card-title" style="height: 55px">Improved look for our Trades page!</h5>
                            <p class="card-text text-white fw-light new-text" style="height: 95px">
                                Your trading experience just got even better with these enhancements: Quick Performance
                                Overview: Get an instant snapshot of Bots trading performance in a single graph. See how
                                Quopi AI Trader is performing at a glance and stay in the know. </p>
                            <a href="news.html" class="icon-link fw-bold text-blue mt-3">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row my-5"></div>
        </div>
    </section>
 -->
     <!-- <div class="adroll-container position-fixed bottom-0 end-0 me-4  mb-4 mob-hide"
        style="max-width: 330px; z-index: 5050;">
        <div class="col">
            <div class="row row-cols-1 bg-adroll justify-content-center bg-gray-qp border-gray-qp rounded-4 p-2">
                <div class="col">
                    <img src="https://strilo.ai/img/i_quopi_blue.png" alt="QP_logo" class="img-fluid text-center d-block mx-auto">
                </div>
                <div class="col">
                    <div class="h2 text-center" style="transform: unset;">We Use Cookies</div>
                    <p class="text-center text-muted fw-light small mb-1">We and our partners NextRoll use cookies on
                        our site to personalize content and ads, analyze our traffic and improve the site experience.
                        Click below to consent to the use of this technology across the web.</p>

                </div>
                <div class="row row-cols-1 justify-content-center mb-5">
                    <a href="index.html" class="col btn btn-primary">Confirm</a>
                </div>
            </div>
        </div>
    </div>
-->


    <style>
        .modal-qp-new {
            background-image: url("https://strilo.ai/img/referral/popup_bg.jpg");
            background-size: contain, cover;
            background-position: top;
            background-repeat: no-repeat;
            background-color: var(--col-10);
            overflow: hidden;
        }

        .footer-bg {
            background: #212633;
        }

        .social-f img {
            width: 150%;
            border-radius: 50%;
        }

        .line-popup {
            display: block;
            height: 1px;
            background: rgba(255, 255, 255, .5);
            width: 100%;
        }

        .modal-qp-new {
            background-image: url("https://strilo.ai/img/referral/popup_bg.jpg");
            background-size: contain, cover;
            background-position: top;
            background-repeat: no-repeat;
            background-color: var(--col-10);
            overflow: hidden;
        }

        .footer-bg {
            background: #212633;
        }

        .social-f img {
            width: 150%;
            border-radius: 50%;
        }
    </style>
    <footer class="footer-bg py-5">
        <div class="container-md">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 mb-5">
                <div class="col mb-3">
                    <h4 class="d-flex align-items-center mb-3 fw-bold mob-hide">
                        Start Trading Today.
                    </h4>
                    <h2 class="mob-show d-flex align-items-center mb-3 fw-bold ">
                        Start Trading Today.
                    </h2>
                    <a href="/login"
                        class="btn btn-primary text-uppercase d-flex align-items-center justify-content-center fw-bold gap-4 py-2 rounded-2 px-sm-4 px-5 bg-btn-custom-2 mob-hide">
                        Get Started
                        <img src="https://strilo.ai/img/landing/Bot_icon.svg" alt="QP-Icon" width="22" height="22" class="img-fluid">
                    </a>
                    <a href="/login"
                        class="mob-show btn btn-primary text-uppercase d-flex align-items-center justify-content-center fw-bold gap-4 rounded-2 bg-btn-custom-2"
                        style="width: 190px">
                        Get Started
                        <img src="https://strilo.ai/img/landing/Bot_icon.svg" alt="QP-Icon" width="22" height="22" class="img-fluid">
                    </a>
                    <h5 class="text-white fw-bold mt-5">Community</h5>
                    <div class="row">
                        <a target="_blank" href="#" class="social-f">
                            <img class="social-f" src="https://strilo.ai/img/social/f_telegram.svg" alt="Telegram">
                        </a>
                        <a target="_blank" href="#" class="social-f">
                            <img class="social-f" src="https://strilo.ai/img/social/f_discord.svg" alt="Discord">
                        </a>
                        <a target="_blank" href="#" class="social-f">
                            <img class="social-f" src="https://strilo.ai/img/social/f_twitter.svg" alt="Twitter">
                        </a>



                    </div>
                </div>
                <div class="col mb-3">

                </div>

                <div class="col mb-3">
                    <h5 class="text-white mb-3 fw-bold">About</h5>
                    <ul class="nav flex-column align-items-start">
                        <li class="nav-item mb-3"><a href="https://strilo-ai.gitbook.io/resources/" target="_blank"
                                class="nav-link p-0 text-white-50 fw-light">Gitbook</a></li>
                        <li class="nav-item mb-3"><a href="#"
                                class="nav-link p-0 text-white-50 fw-light">Whitepaper</a></li>
                        <li class="nav-item mb-3"><a href="#"
                                class="nav-link p-0 text-white-50 fw-light">Presentation</a></li>
                        <li class="nav-item mb-3"><a href="https://strilo.ai/terms" class="nav-link p-0 text-white-50 fw-light">Terms
                                of Service</a></li>
                        <li class="nav-item mb-3"><a href="https://strilo.ai/privacy"
                                class="nav-link p-0 text-white-50 fw-light">Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5 class="text-white mb-3 fw-bold">Tutorials</h5>
                    <ul class="nav flex-column align-items-start">
                        <li class="nav-item mb-3"><a
                                href="https://strilo-ai.gitbook.io/resources/tutorials/funding-the-bot" target="_blank"
                                class="nav-link p-0 text-white-50 fw-light">Investing</a></li>
                        <li class="nav-item mb-3"><a
                                href="https://strilo-ai.gitbook.io/resources/tutorials/withdrawing-funds" target="_blank"
                                class="nav-link p-0 text-white-50 fw-light">Withdrawing</a></li>
                        <li class="nav-item mb-3"><a href="https://strilo-ai.gitbook.io/resources/tutorials"
                                target="_blank" class="nav-link p-0 text-white-50 fw-light">All Tutorials</a></li>
                        <li class="nav-item mb-3"><a href="https://strilo.ai/pages/faq" class="nav-link p-0 text-white-50 fw-light">FAQ</a>
                        </li>
                        <li class="nav-item mb-3"><a data-bs-toggle="modal" data-bs-target="#releases"
                                class=" nav-link p-0 text-white-50 fw-light">Releases</a></li>
                    </ul>
                </div>

                <div class="col mb-3">
                    <h5 class="text-white mb-3 fw-bold">Contact</h5>
                    <ul class="nav flex-column align-items-start">
                        <li class="nav-item mb-3"><a href="https://strilo.ai/contacts"
                                class="nav-link p-0 text-white-50 fw-light">Email</a></li>
                        <li class="nav-item mb-3"><a href="#" target="_blank"
                                class="nav-link p-0 text-white-50 fw-light">Telegram Support</a></li>
                        <li class="nav-item mb-3"><a href="#" target="_blank"
                                class="nav-link p-0 text-white-50 fw-light">Telegram Group</a></li>
                        <li class="nav-item mb-3"><a href="#" target="_blank"
                                class="nav-link p-0 text-white-50 fw-light">Announcements</a></li>

                    </ul>
                </div>
            </div>
            <div class="row align-items-start align-items-md-center text-center justify-content-center">
                <div class="col-12 mb-3 text-start text-md-center">
                    <a href="https://strilo.ai"><img src="https://strilo.ai/strilo-logo.png" alt="Quopi-Logo" width="140"></a>
                </div>
                <div class="col-12 text-start text-md-center">
                    <p class="text-white-50">2023, Strilo Ltd., all rights reserved.</p>
                </div>
                <div class="col-12 mt-3 text-start text-md-center">
                    <small class="text-white-50 fw-light lh-lg">It is advisable to consult with a qualified and impartial financial advisor who holds the necessary licenses. Prior to engaging in trading activities, make certain that you possess the appropriate risk tolerance, relevant experience, and knowledge. Keep in mind that the past performance of a Strilo AI trading tool does not reliably predict its future performance. Additionally, it's important to note that cryptocurrency markets operate without a standardized regulatory framework.
                    </small>
                </div>
                <div class="col-12 my-5"></div>
            </div>
        </div>
    </footer>

    <div class="modal fade " id="releases" tabindex="-1" aria-labelledby="releases" aria-hidden="true"
        style="--bs-modal-width:620px;">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content modal-qp-new border-gray-qp rounded-3">
                <div class="modal-header" style="border-bottom: unset;">
                    <button type="button" class="btn-close fw-bold text-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body mt-5 pt-5 px-3 px-md-5">
                    <h1 class="display-5 lh-qp fw-bold mb-3">Releases</h1>
                    <p class="text-white-50" style="font-size: 1rem;">
                        Welcome to our "Releases" page, your go-to destination for staying up-to date with all the
                        latest developments and enhancements to our products.
                        <br>
                        <br>
                        Here, you'll find a comprehensive list of our release notes, describing each versions update,
                        from the smallest bug fixes of feature additions.
                    </p>
                    <div class="line-popup mt-4 mb-2"></div>
                    <div class="row">
                        <div class="col-12 my-3">
                            <h4 class="text-uppercase text-white mb-0">V_2.26. <span
                                    class="badge fs-5 text-blue">07.09.2023.</span></h4>
                            <small class="text-white-50" style="font-size: 1rem;">We're excited to announce a major
                                update: our landing page has undergone a stunning redesign, offering a more engaging and
                                user-friendly experience</small>
                        </div>
                        <div class="col-12 my-3">
                            <h4 class="text-uppercase text-white mb-0">V_2.25. <span
                                    class="badge fs-5 text-blue">30.08.2023.</span></h4>
                            <small class="text-white-50" style="font-size: 1rem;"> Explore our redesigned Stake Page for
                                a sleeker, more user-friendly experience. Click on "Stake Details" to see the
                                changes!</small>
                        </div>
                        <div class="col-12 my-3">
                            <h4 class="text-uppercase text-white mb-0">V_2.24. <span
                                    class="badge fs-5 text-blue">23.08.2023.</span></h4>
                            <small class="text-white-50" style="font-size: 1rem;">Introducing the Reports Feature! Your
                                requests have been heard, and now you can export comprehensive trading summaries for
                                enhanced insights and tracking on our platform.</small>
                        </div>
                        <div class="col-12 my-3">
                            <h4 class="text-uppercase text-white mb-0">V_2.23.2 <span
                                    class="badge fs-5 text-blue">18.08.2023.</span></h4>
                            <small class="text-white-50" style="font-size: 1rem;">
                                Our dedicated team has tackled a critical bug affecting account security, fortifying our
                                defenses against potential threats.
                            </small>
                        </div>
                        <div class="col-12 my-3">
                            <h4 class="text-uppercase text-white mb-0">V_2.23.1 <span
                                    class="badge fs-5 text-blue">14.08.2023.</span></h4>
                            <small class="text-white-50" style="font-size: 1rem;">
                                Our latest release includes a significant feature upgrade, empowering you with enhanced
                                tools for more efficient project management
                            </small>
                        </div>
                        <div class="col-12 my-3">
                            <h4 class="text-uppercase text-white mb-0">V_2.23. <span
                                    class="badge fs-5 text-blue">10.08.2023.</span></h4>
                            <small class="text-white-50" style="font-size: 1rem;">Experience a complete overhaul with
                                the Stake Page Redesign. Say goodbye to major bugs as we usher in a smoother and more
                                efficient platform. Explore the improvements now!</small>
                        </div>
                        <div class="col-12 my-3">
                            <h4 class="text-uppercase text-white mb-0">V_2.22. <span
                                    class="badge fs-5 text-blue">25.07.2023.</span></h4>
                            <small class="text-white-50" style="font-size: 1rem;">Our Transactions Page has been
                                revamped with integrated status indicators for a more streamlined experience. Discover
                                the upgrade now!</small>
                        </div>
                        <div class="col-12 my-3">
                            <h4 class="text-uppercase text-white mb-0">V_2.21. <span
                                    class="badge fs-5 text-blue">17.07.2023.</span></h4>
                            <small class="text-white-50" style="font-size: 1rem;">We've executed a comprehensive
                                redesign of our Referrals system, bolstered by an extensive repository of company
                                assets. Simplifying community engagement through enhanced communication tools. Explore
                                the upgrade now!</small>
                        </div>
                        <div class="col-12 my-3">
                            <h4 class="text-uppercase text-white mb-0">V_2.20. <span
                                    class="badge fs-5 text-blue">11.07.2023.</span></h4>
                            <small class="text-white-50" style="font-size: 1rem;">Brace for a revamped User Wallets
                                page, fortified with significant bug fixes. Your digital assets, now with enhanced
                                usability and reliability. </small>
                        </div>
                        <div class="col-12 my-3">
                            <h4 class="text-uppercase text-white mb-0">V_2.19. <span
                                    class="badge fs-5 text-blue">12.07.2023.</span></h4>
                            <small class="text-white-50" style="font-size: 1rem;">Witness a comprehensive redesign of
                                our Platform's Settings page, meticulously crafted for heightened user clarity and
                                control. </small>
                        </div>
                        <div class="col-12 my-3">
                            <h4 class="text-uppercase text-white mb-0">V_2.18. <span
                                    class="badge fs-5 text-blue">07.07.2023.</span></h4>
                            <small class="text-white-50" style="font-size: 1rem;">We're excited to announce Spanish
                                language integration across our website and platform. Unlock a seamless bilingual
                                experience for enhanced accessibility. </small>
                        </div>
                        <div class="col-12 my-3">
                            <h4 class="text-uppercase text-white mb-0">V_2.17. <span
                                    class="badge fs-5 text-blue">04.07.2023.</span></h4>
                            <small class="text-white-50" style="font-size: 1rem;">We're delighted to announce the
                                integration of the Chinese language into both our website and platform. Enjoy a
                                bilingual experience for easier access. </small>
                        </div>
                        <div class="col-12 my-3">
                            <h4 class="text-uppercase text-white mb-0">V_2.16. <span
                                    class="badge fs-5 text-blue">01.06.2023.</span></h4>
                            <small class="text-white-50" style="font-size: 1rem;">We've just introduced a News and Blog
                                page to keep you updated and informed. Explore the latest updates and insights
                                conveniently in one place. Check out the new feature today!</small>
                        </div>
                        <div class="col-12 my-3">
                            <h4 class="text-uppercase text-white mb-0">V_2.15.2 <span
                                    class="badge fs-5 text-blue">29.05.2023.</span></h4>
                            <small class="text-white-50" style="font-size: 1rem;">
                                We take data integrity seriously. Our recent update includes crucial bug fixes to
                                prevent data loss and ensure your information remains secure
                            </small>
                        </div>
                        <div class="col-12 my-3">
                            <h4 class="text-uppercase text-white mb-0">V_2.15.1 <span
                                    class="badge fs-5 text-blue">27.05.2023.</span></h4>
                            <small class="text-white-50" style="font-size: 1rem;">
                                Experience a revolutionary major update that brings seamless cross-device
                                synchronization, ensuring your always in control, no matter where you are.
                            </small>
                        </div>
                        <div class="col-12 my-3">
                            <h4 class="text-uppercase text-white mb-0">V_2.15. <span
                                    class="badge fs-5 text-blue">25.05.2023.</span></h4>
                            <small class="text-white-50" style="font-size: 1rem;">Prepare for a complete overhaul of our
                                FAQ pages. We've redesigned it to make finding answers even easier, plus added a
                                powerful search feature for your convenience. Explore the enhanced FAQ experience
                                now!</small>
                        </div>
                        <div class="col-12 my-3">
                            <h4 class="text-uppercase text-white mb-0">V_2.14. <span
                                    class="badge fs-5 text-blue">17.05.2023.</span></h4>
                            <small class="text-white-50" style="font-size: 1rem;">Our Platform's Notifications page has
                                undergone a significant update, accompanied by major bug fixes. Enjoy smoother, more
                                reliable communication. </small>
                        </div>
                        <div class="col-12 my-3">
                            <h4 class="text-uppercase text-white mb-0">V_2.13. <span
                                    class="badge fs-5 text-blue">16.05.2023.</span></h4>
                            <small class="text-white-50" style="font-size: 1rem;">Our Login page a sleek and functional
                                update, making your entry into the platform smoother than ever. Explore the refined
                                login experience now!</small>
                        </div>
                        <div class="col-12 my-3">
                            <h4 class="text-uppercase text-white mb-0">V_2.13. <span
                                    class="badge fs-5 text-blue">16.05.2023.</span></h4>
                            <small class="text-white-50" style="font-size: 1rem;">Our Login page a sleek and functional
                                update, making your entry into the platform smoother than ever. Explore the refined
                                login experience now!</small>
                        </div>
                        <div class="col-12 my-3">
                            <h4 class="text-uppercase text-white mb-0">V_2.12.1 <span
                                    class="badge fs-5 text-blue">03.05.2023.</span></h4>
                            <small class="text-white-50" style="font-size: 1rem;">
                                Enjoy a bug-free browsing experience as we've successfully squashed various issues that
                                were causing inconvenience
                            </small>
                        </div>
                        <div class="col-12 my-3">
                            <h4 class="text-uppercase text-white mb-0">V_2.12. <span
                                    class="badge fs-5 text-blue">29.04.2023.</span></h4>
                            <small class="text-white-50" style="font-size: 1rem;">We've redesigned and updated our
                                platform's dashboard page for a more intuitive and visually appealing experience. Dive
                                into the enhanced dashboard now!</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-center justify-content-center" style="border-top: unset;">
                    <button type="button" class="btn d-flex align-items-center gap-2" data-bs-dismiss="modal"
                        style="--bs-btn-color: #ffffff;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#317bff"
                            class="bi bi-x-square fw-bold" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                        <span class="fw-bold fs-5">Close Window</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://strilo.ai/js/jquery.min.js"></script>
    <script src="https://strilo.ai/cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://strilo.ai/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://strilo.ai/js/clipboard.min.js"></script>
    <script type="text/javascript" src="https://strilo.ai/js/main.js"></script>
    <script type="text/javascript" src="https://strilo.ai/js/clock.js"></script>
    <script type="text/javascript" src="https://strilo.ai/widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js"
        async></script>
        <script type="text/javascript" src="https://strilo.ai/js/custom.js"></script>
        <script type="text/javascript" src="https://strilo.ai/js/plugins.js"></script>
    <script type="text/javascript" src="https://strilo.ai/js/swiper.js"></script>
    <!-- TrustBox script -->
    <script type="text/javascript" src="https://strilo.ai/widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js"
        async></script>
    <!-- End TrustBox script -->

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 40,
            freeMode: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                750: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1275: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    </script>
     <script>
        (function () {
            'use strict'
            const forms = document.querySelectorAll('.requires-validation')
            Array.from(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()

        $(document).ready(function() {
            $("#password").focus(function() {
                $(".toggle-password").css("background-color", "#2d303d");
            });

            $("#password").blur(function() {
                $(".toggle-password").css("background-color", "");
            });
        });

        $('.toggle-password').click(function (){
            var svgImage = $("#svgImage");
            var currentSrc = svgImage.attr("src");

            if (currentSrc === "img/platform/eye.svg") {
                svgImage.attr("src", "img/platform/eye-slash.svg");
                svgImage.attr("alt", "hide");
                svgImage.attr("src", "img/platform/eye.svg");
                svgImage.attr("alt", "show");
            }
            // $("#svgImage").attr("src", "/img/platform/eye-slash.svg");
            // $("#svgImage").attr("alt", "hide");
            $(this).toggleClass('active');
            let pw = $(this).parent().find('.value');

            if(pw.attr('type') === 'password'){
                pw.attr('type', 'text');
            }else{
                pw.attr('type', 'password');
            }
        })
    </script>

</body>


</html>
