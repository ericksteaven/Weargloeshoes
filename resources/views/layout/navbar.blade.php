<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .kiri {
        display: flex;
        justify-content: flex-end;
    }

    /* #notification { */
        /* height: 150px; */
        /* width: 100%;
        position: relative;
    } */

    /* #notification h1 {
        font-size: 12px;
        background-color: #fdfcee;
        padding: 15px 0;
    } */

    header#navbar{
        position: sticky;
        font-family: 'Roboto-Light', sans-serif;
        background-color: white;
        text-transform: uppercase;
        text-decoration: none;
        font-size: 17px;
    }

    /* header#header{
        position: relative;
        position: sticky;
        position: absolute;
    } */
    /* header#header .bg-color{
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: #f8f4f1;
        opacity: 1;

    } */

    /* header#header:hover {
        background-color: #9d9d9d;
        transition:background-color 0.35s linear;
    } */

    header#header .header__link a{
        font-family: 'Roboto-Light', sans-serif;
        text-transform: uppercase;
        text-decoration: none;
        color: black;
        font-size: 17px;
    }
     </style>
{{-- <section id="notification" class="text-center ">
    <h1 class="display-6 text-uppercase">
        Free shipping for orders over IDR 1.000.000
    </h1>
</section>
<br><br><br><br><br> --}}

<header id="navbar" class="container-fluid sticky-top">
    <header id="header">
        <div class="bg-color"></div>
        <div class="row">
            <div class="col-6 kiri">
                <a href="/"><img src="/images/logopng.png" width="75px" alt="" /></a>
            </div>
            <div class="col-6 kanan d-flex align-items-center justify-content-end header__link">
                @if (Session::has('success'))
                    {{-- <a href="/logout" class="me-4">Logout</a> --}}
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown"
                           class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div class="d-sm-none d-lg-inline-block">
                                Hi, {{Session::get('nama')}}</div>
                        </a>
            
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">
                                {{-- Welcome, {{Session::get('nama')}}</div> --}}
                            <a class="dropdown-item has-icon text-primary" href="#"
                            onclick="event.preventDefault(); localStorage.clear();  document.getElementById('email-form').submit();">
                                <i class="fa fa-user"></i> Change Email</a>
                                <form id="email-form" action="{{ url('/reset-email') }}" method="POST" class="d-none">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="email" value="{{Session::get('email')}}">
                                </form>
                            <a href="/logout" class="dropdown-item has-icon text-danger"
                               onclick="event.preventDefault(); localStorage.clear();  document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="GET" class="d-none">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                
                @else

                    <a href="/login-register" class="me-4">Login</a>
                    
                @endif
    
                {{-- <a href="#" class="me-4">Search</a>
                <a href="#" class="me-4">Cart</a> --}}
            </div>
        </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link me-4" href="/shoes">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4" href="/new_arrival">New Arrivals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4" href="/custom">Custom</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4" href="/aboutus">About Us</a>
                        </li>
                        @if(session()->has('auth'))
                        <li class="nav-item">
                            <a class="nav-link me-4" href="{{route('order.status')}}">My Order</a>
                        </li>
                        @endif
                    </ul>
                </div>
             </nav>               
        </div>
    </header>
</header>
