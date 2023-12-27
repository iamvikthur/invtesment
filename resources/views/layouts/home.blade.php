<html lang="en" class="">
    <head>
    <meta charset="utf-8">
    <title>Account - Dashboard</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon and Touch Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.quopi-ai.online/img/logo/qp-logo-pc.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.quopi-ai.online/img/logo/qp-logo-pc.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.quopi-ai.online/img/logo/qp-logo-pc.png">
    <meta name="msapplication-TileColor" content="#080032">
    <meta name="msapplication-config" content="assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor Styles -->
    <link rel="stylesheet" media="screen" href="{{ asset('dash/css/boxicons.min.css') }}">

    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="{{ asset('dash/css/theme.min.css') }}">

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

    <script src="//code.jivosite.com/widget/UeIUUYQva8" async></script>
    <!-- Page loading styles -->
    <style>
      .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .dark-mode .page-loading {
        background-color: #0b0f19;
      }
      .page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .page-loading.active > .page-loading-inner {
        opacity: 1;
      }
      .page-loading-inner > span {
        display: block;
        font-size: 1rem;
        font-weight: normal;
        color: #9397ad;
      }
      .dark-mode .page-loading-inner > span {
        color: #fff;
        opacity: .6;
      }
      .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #b4b7c9;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      .dark-mode .page-spinner {
        border-color: rgba(255,255,255,.4);
        border-right-color: transparent;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
    </style>

    <!-- Theme mode -->
    <script>
      let mode = window.localStorage.getItem('mode'),
          root = document.getElementsByTagName('html')[0];
      if (mode !== null && mode === 'dark') {
        root.classList.add('dark-mode');
      } else {
        root.classList.remove('dark-mode');
      }
    </script>

    <!-- Page loading scripts -->
    <script>
        (function () {
            window.onload = function () {
            const preloader = document.querySelector('.page-loading');
            preloader.classList.remove('active');
            setTimeout(function () {
                preloader.remove();
            }, 1000);
            };
        })();
        function CalcTimePercent(i, lastpayment, nextpayment, t, p) {
            perc = (t - lastpayment) * 100 / (nextpayment - lastpayment);
            if(perc < 100) {
            document.getElementById('percentline'+i).style.width = perc+'%';
            }
            var time    = nextpayment - t;
            var hour    = parseInt(time / 3600);
            if ( hour < 1 ) hour = 0;
            time = parseInt(time - hour * 3600);
            if ( hour < 10 ) hour = '0'+hour;

            var minutes = parseInt(time / 60);
            if ( minutes < 1 ) minutes = 0;
            time = parseInt(time - minutes * 60);
            if ( minutes < 10 ) minutes = '0'+minutes;
            var seconds = time;
            if ( seconds < 10 ) seconds = '0'+seconds;

            timer = hour+':'+minutes+':'+seconds;
            document.getElementById('deptimer'+i).innerHTML = timer;

            if(timer == "00:00:00") {
            top.location.href='/deposits/';
            }

            t = t + 1;
            setTimeout("CalcTimePercent("+i+", "+lastpayment+", "+nextpayment+", "+t+", "+p+")",1000);
        }
    </script>
    <link rel="stylesheet" href="https://code.jivosite.com/css/5b75eed/widget.css" class="jv-css">
    <link rel="stylesheet" type="text/css" href="https://code.jivosite.com/css/5b75eed/chatcontainer.widget.css">
</head>
<body>
    <main class="page-wrapper">
        <header class="header navbar navbar-expand-lg bg-light border-bottom border-light shadow-sm fixed-top">
            <div class="container px-3">
                <a style="color:#1e63b0;" href="#" class="navbar-brand pe-3">
                    <img src="{{ asset('dash/img/logo/default.png') }}" width="200" alt="Falcon">
                </a>
                <div id="navbarNav" class="offcanvas offcanvas-end">
                    <div class="offcanvas-header border-bottom">
                        <h5 class="offcanvas-title">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="/dashboard" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="/dashboard/deposit" class="nav-link">Deposit</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard/withdraw" class="nav-link">Withdraw</a>
                            </li>
                        </ul>
                    </div>
                    <div class="offcanvas-header border-top">
                        <a href="index.php" class="btn btn-primary w-100" rel="noopener"><i class="bx bx-user fs-4 lh-1 me-1"></i>&nbsp;Account</a>
                    </div>
                </div>
                <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
                    <input type="checkbox" class="form-check-input" id="theme-mode">
                    <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label>
                    <label class="form-check-label d-none d-sm-block" for="theme-mode">Dark</label>
                </div>
                <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button style="border:none; border-radius: 10px; background:#FFbCbB; color: #fff;" type="submit" name="logout">
                        <a class="btn  btn-sm fs-sm rounded d-none d-lg-inline-flex" rel="noopener" style="background:#FFbCbB;"><i class="bx bx-user fs-5 lh-1 me-1"></i>&nbsp;Sign Out</a>
                    </button>
                </form>
            </div>
        </header>
        <!-- Page content -->
        <section class="container pt-5">
            <div class="row">
                <!-- Sidebar (User info + Account menu) -->
                <aside class="col-lg-3 col-md-4 border-end pb-5 mt-n5">
                    <div class="position-sticky top-0">
                        <div class="text-center pt-5">
                            <div class="d-table position-relative mx-auto mt-2 mt-lg-4 pt-5 mb-3"></div>
                            <h2 class="h5 mb-1">{{ Auth::user()->username }}</h2>
                            <!-- <p class="mb-3 pb-3">katahi7571@avucon.com</p> -->
                            <button type="button" class="btn btn-secondary w-100 d-md-none mt-n2 mb-3" data-bs-toggle="collapse" data-bs-target="#account-menu">
                                <i class="bx bxs-user-detail fs-xl me-2"></i>
                                 Account menu
                                <i class="bx bx-chevron-down fs-lg ms-1"></i>
                            </button>
                            <div id="account-menu" class="list-group list-group-flush collapse d-md-block">
                                <a href="/dashboard" class="list-group-item list-group-item-action d-flex align-items-center {{ Request::segment(1) === 'dashboard' && Request::segment(2) === null ? 'active' : '' }}">
                                    <i class="bx bx-home-alt-2 fs-xl opacity-60 me-2"></i>
                                    Account
                                </a>
                                {{-- {{ dd(  Request::segment(2)  ) }} --}}
                                <a href="/dashboard/invest" class="list-group-item list-group-item-action d-flex align-items-center {{ Request::segment(2) === 'invest' ? 'active' : '' }}">
                                    <i class="bx bx-up-arrow-alt fs-xl opacity-60 me-2"></i>
                                    Invest
                                </a>
                                <a href="/dashboard/reinvest" class="list-group-item list-group-item-action d-flex align-items-center {{ Request::segment(2) === 'reinvest' ? 'active' : '' }}">
                                    <i class="bx bx-up-arrow-alt fs-xl opacity-60 me-2"></i>
                                    Re-invest
                                </a>
                                <a href="/dashboard/deposit" class="list-group-item list-group-item-action d-flex align-items-center {{ Request::segment(2) === 'deposit' ? 'active' : '' }}">
                                    <i class="bx bx-collection fs-xl opacity-60 me-2"></i>
                                    Deposits
                                </a>
                                <a href="/dashboard/withdraw" class="list-group-item list-group-item-action d-flex align-items-center {{ Request::segment(2) === 'withdraw' ? 'active' : '' }}">
                                    <i class="bx bx-down-arrow-alt fs-xl opacity-60 me-2"></i>
                                    Withdraw
                                </a>

                                <a href="/dashboard/history" class="list-group-item list-group-item-action d-flex align-items-center {{ Request::segment(2) === 'history' ? 'active' : '' }}">
                                    <i class="bx bx-down-arrow-alt fs-xl opacity-60 me-2"></i>
                                    Transactions History
                                </a>
                                <a href="/dashboard/team" class="list-group-item list-group-item-action d-flex align-items-center {{ Request::segment(2) === 'team' ? 'active' : '' }}">
                                    <i class="bx bx-group fs-xl opacity-60 me-2"></i>
                                    Team
                                </a>
                                <!-- <a href="backend/wallets/w/wallets/index.php" class="list-group-item list-group-item-action d-flex align-items-center ">
                                    <i class="bx bx-cog fs-xl opacity-60 me-2"></i>
                                    Link Wallet
                                </a> -->

                                <a href="/profile" class="list-group-item list-group-item-action d-flex align-items-center {{ Request::segment(2) === 'dashboard' ? 'active' : '' }}">
                                    <i class="bx bx-cog fs-xl opacity-60 me-2"></i>
                                    Account Profile
                                </a>

                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button style="border:none; border-radius: 10px; background:#FFbCbB; color: #fff;" type="submit" name="logout">
                                    <a class="list-group-item list-group-item-action d-flex align-items-center" style="color:#000;">
                                        <i class="bx bx-log-out fs-xl opacity-60 me-2"></i>
                                        Sign Out
                                    </a>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </aside>
                @yield('content')
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer dark-mode bg-dark border-top border-light pt-5 pb-4 pb-lg-5">
        <div class="container pt-lg-4">
            <p class="nav d-block fs-xs text-center pb-2 pb-lg-0 mb-0">
                <span class="text-light opacity-50">© 2023</span> <a class="nav-link d-inline-block p-0" href="" target="_blank" rel="noopener">quopi-ai.online</a> <span class="text-light opacity-50">All rights reserved.</span>
            </p>
        </div>
        <script src="//code.jivosite.com/widget/UeIUUYQva8" async></script>
    </footer>

    <!-- Back to top button -->
    <a href="#top" class="btn-scroll-top" data-scroll="">
        <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
        <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
    </a>


    <!-- Vendor Scripts -->
    <script src="{{ asset('dash/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dash/js/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('dash/js/cleave.min.js') }}"></script>

    <!-- Main Theme Script -->
    <script src="{{ asset('dash/js/theme.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

    <script>
        (function ($) {

            $( "#link-btc" ).click(function() {
                $( "#block-btc,#ref-btc,#ti-btc,#tp-btc,#tm-btc" ).show();
                $( "#link-btc" ).addClass("curr-cc");
                $( "#link-ada,#link-bch,#link-bnb,#link-dash,#link-doge,#link-dot,#link-eth,#link-link,#link-ltc,#link-trx,#link-usdt,#link-etc,#link-eos,#link-zec" ).removeClass("curr-cc");
                $( "#block-ada,#block-bch,#block-bnb,#block-dash,#block-doge,#block-dot,#block-eth,#block-link,#block-ltc,#block-trx,#block-usdt,#block-etc,#block-eos,#block-zec" ).hide();
                $( "#ref-ada,#ref-bch,#ref-bnb,#ref-dash,#ref-doge,#ref-dot,#ref-eth,#ref-link,#ref-ltc,#ref-trx,#ref-usdt,#ref-etc,#ref-eos,#ref-zec" ).hide();
                $( "#tp-ada,#tp-bch,#tp-bnb,#tp-dash,#tp-doge,#tp-dot,#tp-eth,#tp-link,#tp-ltc,#tp-trx,#tp-usdt,#tp-etc,#tp-eos,#tp-zec" ).hide();
                $( "#ti-ada,#ti-bch,#ti-bnb,#ti-dash,#ti-doge,#ti-dot,#ti-eth,#ti-link,#ti-ltc,#ti-trx,#ti-usdt,#ti-etc,#ti-eos,#ti-zec" ).hide();
                $( "#tm-ada,#tm-bch,#tm-bnb,#tm-dash,#tm-doge,#tm-dot,#tm-eth,#tm-link,#tm-ltc,#tm-trx,#tm-usdt,#tm-etc,#tm-eos,#tm-zec" ).hide();
            });

            $( "#link-bnb" ).click(function() {
                $( "#block-bnb,#ref-bnb,#ti-bnb,#tp-bnb,#tm-bnb" ).show();
                $( "#link-bnb" ).addClass("curr-cc");
                $( "#link-ada,#link-bch,#link-btc,#link-dash,#link-doge,#link-dot,#link-eth,#link-link,#link-ltc,#link-trx,#link-usdt,#link-etc,#link-eos,#link-zec" ).removeClass("curr-cc");
                $( "#block-ada,#block-bch,#block-btc,#block-dash,#block-doge,#block-dot,#block-eth,#block-link,#block-ltc,#block-trx,#block-usdt,#block-etc,#block-eos,#block-zec" ).hide();
                $( "#ref-ada,#ref-bch,#ref-btc,#ref-dash,#ref-doge,#ref-dot,#ref-eth,#ref-link,#ref-ltc,#ref-trx,#ref-usdt,#ref-etc,#ref-eos,#ref-zec" ).hide();
                $( "#tp-ada,#tp-bch,#tp-btc,#tp-dash,#tp-doge,#tp-dot,#tp-eth,#tp-link,#tp-ltc,#tp-trx,#tp-usdt,#tp-etc,#tp-eos,#tp-zec" ).hide();
                $( "#ti-ada,#ti-bch,#ti-btc,#ti-dash,#ti-doge,#ti-dot,#ti-eth,#ti-link,#ti-ltc,#ti-trx,#ti-usdt,#ti-etc,#ti-eos,#ti-zec" ).hide();
                $( "#tm-ada,#tm-bch,#tm-btc,#tm-dash,#tm-doge,#tm-dot,#tm-eth,#tm-link,#tm-ltc,#tm-trx,#tm-usdt,#tm-etc,#tm-eos,#tm-zec" ).hide();
            });

            $( "#link-doge" ).click(function() {
                $( "#block-doge,#ref-doge,#ti-doge,#tp-doge,#tm-doge" ).show();
                $( "#link-doge" ).addClass("curr-cc");
                $( "#link-ada,#link-btc,#link-bnb,#link-bch,#link-dash,#link-dot,#link-eth,#link-link,#link-ltc,#link-trx,#link-usdt,#link-etc,#link-eos,#link-zec" ).removeClass("curr-cc");
                $( "#block-ada,#block-btc,#block-bnb,#block-bch,#block-dash,#block-dot,#block-eth,#block-link,#block-ltc,#block-trx,#block-usdt,#block-etc,#block-eos,#block-zec" ).hide();
                $( "#ref-ada,#ref-btc,#ref-bnb,#ref-bch,#ref-dash,#ref-dot,#ref-eth,#ref-link,#ref-ltc,#ref-trx,#ref-usdt,#ref-etc,#ref-eos,#ref-zec" ).hide();
                $( "#tp-ada,#tp-btc,#tp-bnb,#tp-bch,#tp-dash,#tp-dot,#tp-eth,#tp-link,#tp-ltc,#tp-trx,#tp-usdt,#tp-etc,#tp-eos,#tp-zec" ).hide();
                $( "#ti-ada,#ti-btc,#ti-bnb,#ti-bch,#ti-dash,#ti-dot,#ti-eth,#ti-link,#ti-ltc,#ti-trx,#ti-usdt,#ti-etc,#ti-eos,#ti-zec" ).hide();
                $( "#tm-ada,#tm-btc,#tm-bnb,#tm-bch,#tm-dash,#tm-dot,#tm-eth,#tm-link,#tm-ltc,#tm-trx,#tm-usdt,#tm-etc,#tm-eos,#tm-zec" ).hide();
            });

            $( "#link-ltc" ).click(function() {
                $( "#block-ltc,#ref-ltc,#ti-ltc,#tp-ltc,#tm-ltc" ).show();
                $( "#link-ltc" ).addClass("curr-cc");
                $( "#link-ada,#link-btc,#link-bnb,#link-bch,#link-dash,#link-doge,#link-dot,#link-eth,#link-link,#link-trx,#link-usdt,#link-etc,#link-eos,#link-zec" ).removeClass("curr-cc");
                $( "#block-ada,#block-btc,#block-bnb,#block-bch,#block-dash,#block-doge,#block-dot,#block-eth,#block-link,#block-trx,#block-usdt,#block-etc,#block-eos,#block-zec" ).hide();
                $( "#ref-ada,#ref-btc,#ref-bnb,#ref-bch,#ref-dash,#ref-doge,#ref-dot,#ref-eth,#ref-link,#ref-trx,#ref-usdt,#ref-etc,#ref-eos,#ref-zec" ).hide();
                $( "#tp-ada,#tp-btc,#tp-bnb,#tp-bch,#tp-dash,#tp-doge,#tp-dot,#tp-eth,#tp-link,#tp-trx,#tp-usdt,#tp-etc,#tp-eos,#tp-zec" ).hide();
                $( "#ti-ada,#ti-btc,#ti-bnb,#ti-bch,#ti-dash,#ti-doge,#ti-dot,#ti-eth,#ti-link,#ti-trx,#ti-usdt,#ti-etc,#ti-eos,#ti-zec" ).hide();
                $( "#tm-ada,#tm-btc,#tm-bnb,#tm-bch,#tm-dash,#tm-doge,#tm-dot,#tm-eth,#tm-link,#tm-trx,#tm-usdt,#tm-etc,#tm-eos,#tm-zec" ).hide();
            });

            $( "#link-trx" ).click(function() {
                $( "#block-trx,#ref-trx,#ti-trx,#tp-trx,#tm-trx" ).show();
                $( "#link-trx" ).addClass("curr-cc");
                $( "#link-ada,#link-btc,#link-bnb,#link-bch,#link-dash,#link-doge,#link-dot,#link-eth,#link-link,#link-ltc,#link-usdt,#link-etc,#link-eos,#link-zec" ).removeClass("curr-cc");
                $( "#block-ada,#block-btc,#block-bnb,#block-bch,#block-dash,#block-doge,#block-dot,#block-eth,#block-link,#block-ltc,#block-usdt,#block-etc,#block-eos,#block-zec" ).hide();
                $( "#ref-ada,#ref-btc,#ref-bnb,#ref-bch,#ref-dash,#ref-doge,#ref-dot,#ref-eth,#ref-link,#ref-ltc,#ref-usdt,#ref-etc,#ref-eos,#ref-zec" ).hide();
                $( "#tp-ada,#tp-btc,#tp-bnb,#tp-bch,#tp-dash,#tp-doge,#tp-dot,#tp-eth,#tp-link,#tp-ltc,#tp-usdt,#tp-etc,#tp-eos,#tp-zec" ).hide();
                $( "#ti-ada,#ti-btc,#ti-bnb,#ti-bch,#ti-dash,#ti-doge,#ti-dot,#ti-eth,#ti-link,#ti-ltc,#ti-usdt,#ti-etc,#ti-eos,#ti-zec" ).hide();
                $( "#tm-ada,#tm-btc,#tm-bnb,#tm-bch,#tm-dash,#tm-doge,#tm-dot,#tm-eth,#tm-link,#tm-ltc,#tm-usdt,#tm-etc,#tm-eos,#tm-zec" ).hide();
            });

            $( "#link-usdt" ).click(function() {
                $( "#block-usdt,#ref-usdt,#ti-usdt,#tp-usdt,#tm-usdt" ).show();
                $( "#link-usdt" ).addClass("curr-cc");
                $( "#link-ada,#link-btc,#link-bnb,#link-bch,#link-dash,#link-doge,#link-dot,#link-eth,#link-link,#link-ltc,#link-trx,#link-etc,#link-eos,#link-zec" ).removeClass("curr-cc");
                $( "#block-ada,#block-btc,#block-bnb,#block-bch,#block-dash,#block-doge,#block-dot,#block-eth,#block-link,#block-ltc,#block-trx,#block-etc,#block-eos,#block-zec" ).hide();
                $( "#ref-ada,#ref-btc,#ref-bnb,#ref-bch,#ref-dash,#ref-doge,#ref-dot,#ref-eth,#ref-link,#ref-ltc,#ref-trx,#ref-etc,#ref-eos,#ref-zec" ).hide();
                $( "#tp-ada,#tp-btc,#tp-bnb,#tp-bch,#tp-dash,#tp-doge,#tp-dot,#tp-eth,#tp-link,#tp-ltc,#tp-trx,#tp-etc,#tp-eos,#tp-zec" ).hide();
                $( "#ti-ada,#ti-btc,#ti-bnb,#ti-bch,#ti-dash,#ti-doge,#ti-dot,#ti-eth,#ti-link,#ti-ltc,#ti-trx,#ti-etc,#ti-eos,#ti-zec" ).hide();
                $( "#tm-ada,#tm-btc,#tm-bnb,#tm-bch,#tm-dash,#tm-doge,#tm-dot,#tm-eth,#tm-link,#tm-ltc,#tm-trx,#tm-etc,#tm-eos,#tm-zec" ).hide();
            });

            $( "#calc-invest-btc" ).keyup(function() {
                var value = $( this ).val();
                var percent = value * 1.5;
                var percentusd = value * 1.5 * 21616.35;
                var percentrusd = value * 21616.35;
                $( "#btc-result-profit" ).text( percent.toFixed(6) );
                $( "#btc-result-profit-usd" ).text( percentusd.toFixed(2) );
                $( "#btc-result-usd" ).text( percentrusd.toFixed(2) );
            })

            .keyup();

            $( "#calc-invest-bnb" ).keyup(function() {
                var value2 = $( this ).val();
                var percent2 = value2 * 1.5;
                var percentusd2 = value2 * 1.5 * 288.74;
                var percentrusd2 = value2 * 288.74;
                $( "#bnb-result-profit" ).text( percent2.toFixed(6) );
                $( "#bnb-result-profit-usd" ).text( percentusd2.toFixed(2) );
                $( "#bnb-result-usd" ).text( percentrusd2.toFixed(2) );
            })

            .keyup();

            $( "#calc-invest-doge" ).keyup(function() {
                var value3 = $( this ).val();
                var percent3 = value3 * 1.5;
                var percentusd3 = value3 * 1.5 * 0.07;
                var percentrusd3 = value3 * 0.07;
                $( "#doge-result-profit" ).text( percent3.toFixed(2) );
                $( "#doge-result-profit-usd" ).text( percentusd3.toFixed(2) );
                $( "#doge-result-usd" ).text( percentrusd3.toFixed(2) );
            })

            .keyup();

            $( "#calc-invest-ltc" ).keyup(function() {
                var value4 = $( this ).val();
                var percent4 = value4 * 1.5;
                var percentusd4 = value4 * 1.5 * 83.58;
                var percentrusd4 = value4 * 83.58;
                $( "#ltc-result-profit" ).text( percent4.toFixed(6) );
                $( "#ltc-result-profit-usd" ).text( percentusd4.toFixed(2) );
                $( "#ltc-result-usd" ).text( percentrusd4.toFixed(2) );
            })

            .keyup();

            $( "#calc-invest-trx" ).keyup(function() {
                var value5 = $( this ).val();
                var percent5 = value5 * 1.5;
                var percentusd5 = value5 * 1.5 * 0.07;
                var percentrusd5 = value5 * 0.07;
                $( "#trx-result-profit" ).text( percent5.toFixed(2) );
                $( "#trx-result-profit-usd" ).text( percentusd5.toFixed(2) );
                $( "#trx-result-usd" ).text( percentrusd5.toFixed(2) );
            })

            .keyup();

            $( "#calc-invest-usdt" ).keyup(function() {
                var value6 = $( this ).val();
                var percent6 = value6 * 1.5;
                var percentusd6 = value6 * 1.5 * 1.00;
                var percentrusd6 = value6 * 1.00;
                $( "#usdt-result-profit" ).text( percent6.toFixed(2) );
                $( "#usdt-result-profit-usd" ).text( percentusd6.toFixed(2) );
                $( "#usdt-result-usd" ).text( percentrusd6.toFixed(2) );
            })

            .keyup();

            $('#pin1').keypress(function (e) {
            var txt = String.fromCharCode(e.which);
            if (!txt.match(/[1-9]/)) {
                return false;
            }
        });

        $('#pin2').keypress(function (e) {
            var txt = String.fromCharCode(e.which);
            if (!txt.match(/[1-9]/)) {
                return false;
            }
        });

        $('#pin3').keypress(function (e) {
            var txt = String.fromCharCode(e.which);
            if (!txt.match(/[1-9]/)) {
                return false;
            }
        });

        $('#pin4').keypress(function (e) {
            var txt = String.fromCharCode(e.which);
            if (!txt.match(/[1-9]/)) {
                return false;
            }
        });

        })(jQuery);

    </script>
</body>
