<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
    <title>QuicQFoods</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body id="app">
<main>
    <section id="loginTopWrapper">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">QuicQFoods</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">About Us</a>
                        </li>
                    </ul>
                <div>
                    <ul class="navbar-nav">
                        <li class="nav-item  mx-2">
                            @auth('webadmin')
                                <a href="" class="btn nav-link text-white">Logout</a>
                            @else
                                <a href="" class="btn nav-link text-white">Login</a>
                            @endauth
                        </li>
                    </ul>
                </div>
            </div>
                </div>
        </nav>

        @yield('content')

    </section>






</main>
<div class="container-fluid text-white bg-dark">
    <footer >
        <div class="row py-2">
            <div class="col-lg-12">
                <p class="text-center text-white">&copy;2023 QuicQFoods --  <span>Created by: Kpodji Emmanuel</span></p>
            </div>
        </div>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
