<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/74a05d25da.js" crossorigin="anonymous"></script>
        <style>

            .fl-wrap {
                float: left;
                width: 100%;
                position: relative;
            }

            .main-search-input-item {
                float: left;
                width: 100%;
                box-sizing: border-box;
                border-right: 1px solid #eee;
                height: 50px;
                position: relative;
            }

            .main-search-input-item input {
                float: left;
                border: none;
                width: 100%;
                height: 50px;
                padding-left: 20px;
            }

            .main-search-button{
                background: gray;
            }

            .main-search-button {
                position: absolute;
                right: 0px;
                height: 50px;
                width: 50px;
                color: #fff;
                border: none;
                border-top-right-radius: 0px;
                border-bottom-right-radius: 0px;
                cursor: pointer;
            }

            body {
                background-color: #d3d3d3;
            }

            .login {
                width: 400px;
                height: 400px;
            }

            .login .btn {
                width: 100px;
                background-color: #fff;
                color: #d3d3d3;
                border-color: #d3d3d3;
            }

            .login .btn:hover {
                background-color: gray;
            }

            .register{
                width: 400px;
                height: 780px;
            }

            .register .btn {
                width: 100px;
                background-color: #fff;
                color: #d3d3d3;
                border-color: #d3d3d3;
            }

            .register .btn:hover {
                background-color: gray;
            }
            
            .detail .btn {
                width: 100px;
                background-color: #fff;
                color: #d3d3d3;
                border-color: #d3d3d3;
            }

            .detail .btn:hover {
                background-color: gray;
            }

            .profile {
                width: 40%;
                height: 40%;
            }

            .dropdown-menu {
                min-width: 1rem;
            }

            .productCategory {
                margin-top: 100px;
                margin-bottom: 50px;
            }
            
            .productCategory p {
                margin-top: 5px;
                margin-bottom: 5px;
            }

            .productList p {
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis;
            }

            .productCollection {
                margin: 10px;
                max-height: 400px;
            }

            .productCollectionCategory {
                margin: 10px;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container">
                <a class="navbar-brand" href="/">Barbatos Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/category/1">Adidas</a></li>
                                <li><a class="dropdown-item" href="/category/2">Jordan</a></li>
                                <li><a class="dropdown-item" href="/category/3">Nike</a></li>
                            </ul>
                        </li>
                    </ul>
                    @if(Auth::check())
                        @if(auth()->user()->role_id === 1)
                            <ul class="navbar-nav">
                                <a class="nav-link" href="/manageProduct">Manage Product</a>
                            </ul>
                        @endif
                    @endif
                    <ul class="navbar-nav ms-auto">
                        @if(Auth::check())
                            @if(auth()->user()->role_id === 2)
                                <li class="nav-item">
                                    <a class="nav-link" href="/cart"><i class="fa-solid fa-cart-shopping"></i></a>
                                </li>
                            @endif
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ auth()->user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                    <li><a class="dropdown-item" href="/history">Transaction</a></li>
                                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/login">Login</a>
                            </li>
                            <li>
                                <a class="nav-link" href="/register">Register</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
