<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QuicQFoods</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<main>
    <section id="topWrapper">
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
                        <li class="nav-item text-white mx-2">
                            <a href="" class="nav-link">Login</a>
                        </li>
                    </ul>

                </div>
                <div>
                    <ul class="navbar-nav">
                        <li class="nav-item  mx-2">
                            <a href="" class="btn btn-primary nav-link">
                                <span class="text-white"> <i class="fa-solid fa-cart-shopping  px-2"></i>Cart</span>
                                <span class="badge bg-danger mx-2"> 0 </span>
                            </a>
                        </li>
                        <li class="nav-item  mx-2">
                            <a href="" class="btn nav-link text-white">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid row  ">
            <div class="col-md-6 offset-md-3 p-3 text-center" id="welcomeMsg">
                <h2 class="text-center">QuicQFood</h2>
                <h4 class="text-center">Welcome to the land where food chases away hunger!!</h4>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem error ea necessitatibus nam atque dolore adipisci
                    oluptates consectetur reprehenderit odit iste deserunt sunt rem ut, perferendis cum rerum voluptatum unde.</p>
                <p><a href="" class="btn btn-success text-white px-2"> Eat Something </a> </p>
            </div>
        </div>
    </section>
    <section class="container my-4">
        <div class="row my-3">
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="/items/ikhsan-baihaqi-dXeBXaThv4U-unsplash.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Noodles</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        <a href="" class="btn btn-primary px-2 btn-sm">Preview</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="/items/mae-mu-kbch-i63YTg-unsplash.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Noodles</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        <a href="#itemOffCanvas" class="btn btn-primary px-2 btn-sm">Preview</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="/items/anto-meneghini-IrohWzafmmA-unsplash.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Noodles</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        <a href="#itemOffCanvas" class="btn btn-primary px-2 btn-sm">Preview</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="/items/ikhsan-baihaqi-RwAXb8Hv_sU-unsplash.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Noodles</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        <a href="#itemOffCanvas" class="btn btn-primary px-2 btn-sm">Preview</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="/items/chad-montano-MqT0asuoIcU-unsplash.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Noodles</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        <a href="#itemOffCanvas" class="btn btn-primary px-2 btn-sm">Preview</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="/items/davey-gravy-4WPcz_5RVMk-unsplash.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Noodles</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        <a href="" class="btn btn-primary px-2 btn-sm">Preview</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="/items/anto-meneghini-IrohWzafmmA-unsplash.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Noodles</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        <a href="#itemOffCanvas" class="btn btn-primary px-2 btn-sm">Preview</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="/items/ella-olsson-lMcRyBx4G50-unsplash.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Noodles</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        <a href="#itemOffCanvas" class="btn btn-primary px-2 btn-sm">Preview</a>
                    </div>
                </div>
            </div>
        </div>


    </section>

</main>


<footer class="container-fluid p-3">
    &copy;KPODJI EMMANUEL -- 2023
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
