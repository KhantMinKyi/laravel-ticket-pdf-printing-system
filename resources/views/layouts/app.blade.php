<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <style>
        .sidebar {
            background-color: #FFC900;
            width: 250;
            position: fixed;
            z-index: 600;
            padding: 70px 0 0;
            transition: 0.5s;
        }

        .openbtn {
            background-color: #FFC900;
            font-size: 20px;
            cursor: pointer;
            color: black;
            padding: 5px 10px;
            border: none;
            border-radius: 15px;
        }

        .closebtn {
            font-size: 24px;
            text-decoration: none;
            color: black;
            display: none;
        }

        #main {
            transition: .5s;
            padding: 5px;
            display: none;
        }

        @media (max-width: 991.98px) {
            #main {
                display: block;
            }

            .logo {
                display: none;
            }

            .closebtn {
                display: block;
            }
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
            .sidebar {
                padding-top: 90px;
            }

            .sidebar a {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>
    <div id="app">
        <header>
            <!-- Sidebar -->
            <nav id="sidebarMenu" class=" ">
                <div class="position-sticky">
                    <div id="mySidebar" class="sidebar">
                        <div class="list-group list-group-flush mx-3 mt-4">
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                            <a href="{{ url('/admin') }}" class="list-group-item list-group-item-action py-2 ripple"
                                aria-current="true">
                                <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>ပင်မစာမျက်နှာ</span>
                            </a>
                            <li class="nav-item dropdown list-group-item-action">
                                <a href="#"
                                    class="list-group-item list-group-item-action py-2 ripple dropdown-toggle "
                                    data-bs-toggle="dropdown" id="navbarDropdown">
                                    <i class="fa-solid fa-users me-3"></i>
                                    <span>အသုံးပြုသူများ</span>

                                </a>
                                <div class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/admin/user/view"> <i
                                            class="fa-solid fa-users me-3"></i> ကြည့်ရန်</a>
                                    <a class="dropdown-item" href="/admin/user/add"> <i
                                            class="fa-solid fa-add me-3"></i>အသုံးပြုသူထည့်ရန်</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown list-group-item-action">
                                <a href="#"
                                    class="list-group-item list-group-item-action py-2 ripple dropdown-toggle "
                                    data-bs-toggle="dropdown" id="navbarDropdown">
                                    <i class="fa-solid fa-clock me-3"></i>
                                    <span>နေ့စဥ်လိုင်းကား</span>

                                </a>
                                <div class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/admin/seat/ms_view"><i
                                            class="fa-solid fa-route me-3"></i> ဘူးသီးတောင်-စစ်တွေ(မနက်ပိုင်း)</a>
                                    <a class="dropdown-item" href="/admin/seat/ms2_view"><i
                                            class="fa-solid fa-route me-3"></i>ဘူးသီးတောင်-စစ်တွေ(နေ့လည်ပိုင်း)</a>
                                    <a class="dropdown-item" href="/admin/seat/sm_view"> <i
                                            class="fa-solid fa-route me-3"></i>စစ်တွေ-ဘူးသီးတောင်(မနက်ပိုင်း)</a>
                                    <a class="dropdown-item" href="/admin/seat/sm2_view"> <i
                                            class="fa-solid fa-route me-3"></i>စစ်တွေ-ဘူးသီးတောင်(နေ့လည်ပိုင်း)</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown list-group-item-action">
                                <a href="#"
                                    class="list-group-item list-group-item-action py-2 ripple dropdown-toggle "
                                    data-bs-toggle="dropdown" id="navbarDropdown">
                                    <i class="fa-solid fa-face-smile me-3"></i>
                                    <span>ဝယ်ယူသူစာရင်း</span>

                                </a>
                                <div class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/admin/customer/view/ms"><i
                                            class="fa-solid fa-arrow-right-long me-3"></i>ဘူးသီးတောင်-စစ်တွေ(မနက်ပိုင်း)</a>
                                    <a class="dropdown-item" href="/admin/customer/view/ms2"><i
                                            class="fa-solid fa-arrow-right-long me-3"></i>ဘူးသီးတောင်-စစ်တွေ(နေ့လည်ပိုင်း)</a>
                                    <a class="dropdown-item" href="/admin/customer/view/sm"><i
                                            class="fa-solid fa-arrow-left-long me-3"></i>စစ်တွေ-ဘူးသီးတောင်(မနက်ပိုင်း)</a>
                                    <a class="dropdown-item" href="/admin/customer/view/sm2"><i
                                            class="fa-solid fa-arrow-left-long me-3"></i>စစ်တွေ-ဘူးသီးတောင်(နေ့လည်ပိုင်း)</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown list-group-item-action">
                                <a href="#"
                                    class="list-group-item list-group-item-action py-2 ripple dropdown-toggle "
                                    data-bs-toggle="dropdown" id="navbarDropdown">
                                    <i class="fa-solid fa-print me-3"></i>
                                    <span>Print ထုတ်ရန်</span>

                                </a>
                                <div class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/admin/print/view/ms"><i
                                            class="fa-solid fa-arrow-right-long me-3"></i>ဘူးသီးတောင်-စစ်တွေ(မနက်ပိုင်း)</a>
                                    <a class="dropdown-item" href="/admin/print/view/ms2"><i
                                            class="fa-solid fa-arrow-right-long me-3"></i>ဘူးသီးတောင်-စစ်တွေ(နေ့လည်ပိုင်း)</a>
                                    <a class="dropdown-item" href="/admin/print/view/sm"><i
                                            class="fa-solid fa-arrow-left-long me-3"></i>စစ်တွေ-ဘူးသီးတောင်(မနက်ပိုင်း)</a>
                                    <a class="dropdown-item" href="/admin/print/view/sm2"><i
                                            class="fa-solid fa-arrow-left-long me-3"></i>စစ်တွေ-ဘူးသီးတောင်(နေ့လည်ပိုင်း)</a>
                                </div>
                            </li>


                        </div>
                    </div>
            </nav>
            <!-- Sidebar -->

            <!-- Navbar -->
            <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light fixed-top">
                <!-- Container wrapper -->
                <div class="container-fluid">
                    <!-- Toggle button -->

                    <div id="main">
                        <button class="openbtn" onclick="openNav()">☰</button>
                    </div>
                    <!-- Brand -->
                    <a class="navbar-brand" href="/admin">
                        <img src="/logo2.png" alt=" Logo" width="70" height="70" class="logo mx-5">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <!-- Search form -->

                    <!-- Right links -->
                    <ul class="navbar-nav ms-auto d-flex flex-row">
                        <!-- Notification dropdown -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    ({{ Auth::user()->type }})
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/sale/logout"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="GET"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                <!-- Container wrapper -->
            </nav>
            <!-- Navbar -->
        </header>

        <!--Main layout-->
        <main style="margin-top: 70px;" id="a">

            @yield('content')

        </main>
        <!--Main layout-->

    </div>
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("mySidebar").style.backgroundColor = "#FFC900";
            document.getElementById("main").style.display = "none";
            document.getElementById("sidebarMenu").style.zIndex = "600";
            document.getElementById("a").style.marginLeft = "0";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("sidebarMenu").style.zIndex = "-1";
            document.getElementById("sidebarMenu").style.transition = "10px";
            document.getElementById("main").style.display = "block";
            document.getElementById("a").style.marginLeft = "0";
            document.getElementById("mySidebar").style.backgroundColor = "white";
        }
    </script>

</body>

</html>
