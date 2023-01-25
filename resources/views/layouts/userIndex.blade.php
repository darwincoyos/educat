<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ config('app.name', 'Educat') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        //here ang mga style
      
    </style>
</head>
<body class="bg-white">
    <div id="app">
        <div class="text-center w-auto" style="background-color:#E1E8F9;">
            <p class="p-1 text-primary">Covid 19 Response: No one should be left behind. Check out our different ways of helping schools and institutions during the pandemic <i class="bi bi-arrow-right" style="font-size:20px; font-weight:bold;"></i></p>
        </div>
        <nav class="navbar navbar-expand-lg bg-while">
            <a class="navbar-brand" href="#"><img src="/img/logo.png" alt="Company Logo"/></a>
            <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item ps-5">
                        <a class="nav-link fw-bolder text-black" href="#">Home</a>
                    </li>
                    <li class="nav-item ps-5">
                        <a class="nav-link fw-bolder text-black" href="#">About Us</a>
                    </li>
                    <li class="nav-item dropdown ps-5">
                        <a class="nav-link dropdown-toggle fw-bolder text-black" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Product 1</a></li>
                          <li><a class="dropdown-item" href="#">Product 2</a></li>
                          <li><a class="dropdown-item" href="#">Product 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ps-5">
                        <a class="nav-link fw-bolder text-black" href="#">Blogs</a>
                    </li>
                    <li class="nav-item ps-5">
                        <a class="nav-link fw-bolder text-black" href="#">Contact</a>
                    </li>
                    <li class="nav-item px-5">
                        <a class="nav-link fw-bolder text-black">
                            <button type="button" class="btn" style="background-color:#7BC144; color:white;">BOOK A DEMO</button>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <router-view></router-view>

        <footer>
            <div class="text-center" style="font-size:30px;">
                <a class="d-inline p-3 text-primary" style="cursor:pointer;"><i class="bi bi-facebook"></i></a>
                <a class="d-inline p-3 text-primary" style="cursor:pointer;"><i class="bi bi-instagram"></i></a>
                <a class="d-inline p-3 text-primary" style="cursor:pointer;"><i class="bi bi-twitter"></i></a>
                <a class="d-inline p-3 text-primary" style="cursor:pointer;">
                    <img src="/img/pci-social.png" />
                </a>
            </div>
            <div class="row p-5">
                <div class="p-3 col">
                    <img src="/img/logo.png" alt="Company Logo" style="width:70%;"/>
                </div>
                <div class="p-3 col">
                    @Copyright 2021 All rights reserved
                </div>
                <div class="p-3 col">
                    About Us
                </div>
                <div class="p-3 col">
                    Products
                </div>
                <div class="p-3 col">
                    Terms of Use 
                </div>
                <div class="p-3 col">
                    Data Privacy
                </div>
            </div>
        </footer>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
<script>
    //here ang mga scripts
</script>
</html>
 