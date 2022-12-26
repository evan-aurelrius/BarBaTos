<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../default.css">
    <link rel="icon" type="image/x-icon" href="./favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Barbatos Shop | {{ $title }}</title>
  </head>
  <style>
    nav{
        z-index: 1;
    }
    nav h1,
    nav h6 {
        font-family: primary;
    }
    ::-webkit-scrollbar {
        height: 10px;
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background: var(--dua);
        border-radius: 5px;
    }

    ::-webkit-scrollbar-thumb {
        background: var(--lima);
        border-radius: 5px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: var(--empat);
    }
  </style>
  <body>
    <nav class="px-5 py-2 d-flex justify-content-between align-items-center bg-satu position-sticky top-0 mb-3">
        <a href="/" class="me-3 px-1" id="title">
            <h1 class="{{ $title === "Home" ? "text-empat" : "text-light" }}">BarbatosShop</h1>
        </a>
        <div class="d-flex align-items-center bg-light p-1 rounded {{ $title === "Login" || $title === "Register" ? "d-none" : "w-100" }}">
            <form class="d-flex w-100" action="/search" method="get">
                @csrf
                <input class="w-100 border-0 px-2 py-1 rounded" type="search" name="search" id="search" placeholder="{{'Type here to search'. ($title === "Edit" ? " your product" : "") }}">
                <button type="submit">
                    <ion-icon class="mx-1 fs-4 text-empat" name="search"></ion-icon>
                </button>
            </form>
        </div>
        <div class="d-flex align-items-center">

            @auth
                @if(Auth()->user()->role == 'admin')
                    <a href="/edit" class="ms-3">
                        <ion-icon class="fs-4 p-2 text-light rounded-circle {{ $title === "Edit" ? "bg-lima" : "" }}" name="create"></ion-icon>
                    </a>
                @endif

                @if (Auth()->user()->role == 'user')
                    <a href="/cart" class="d-flex ms-3">
                        <ion-icon class="fs-4 p-2 text-light rounded-circle {{ $title === "Cart" ? "bg-lima" : "" }}" name="cart"></ion-icon>
                    </a>
                    <a href="/history" class="d-flex ms-3">
                        <ion-icon class="fs-4 p-2 text-light rounded-circle {{ $title === "History" ? "bg-lima" : "" }}" name="receipt"></ion-icon>
                    </a>
                @endif

                <a href="/profile" class="ms-3">
                    <h6 class="text-uppercase m-0 text-light rounded-circle fs-5 p-2 {{ $title === "Profile" ? "bg-lima" : "" }}">{{ Auth()->user()->name[0] . Auth()->user()->name[1] }}</h6>
                </a>

                @else
                <a href="/login" class="ms-3">
                    <ion-icon class="fs-4 p-2 text-light rounded-circle {{ $title === "Login" || $title === "Register" ? "bg-lima" : "" }}" name="person"></ion-icon>
                </a>
            @endauth

        </div>
    </nav>

    @yield('main')
    @yield('myScript')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
