@extends('_header')
@section('content')
    <section class="container my-4" id="foodItems">
        
        <div class="row my-3">
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="/items/ikhsan-baihaqi-dXeBXaThv4U-unsplash.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Noodles</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        <a href="#itemCanvas" class="btn btn-primary px-2 btn-sm" data-bs-toggle="offcanvas">Preview</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="/items/mae-mu-kbch-i63YTg-unsplash.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Noodles</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        <a href="#itemCanvas" class="btn btn-primary px-2 btn-sm" data-bs-toggle="offcanvas">Preview</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="/items/anto-meneghini-IrohWzafmmA-unsplash.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Noodles</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        <a href="#itemCanvas" class="btn btn-primary px-2 btn-sm" data-bs-toggle="offcanvas">Preview</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="/items/ikhsan-baihaqi-RwAXb8Hv_sU-unsplash.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Noodles</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        <a href="#itemCanvas" class="btn btn-primary px-2 btn-sm" data-bs-toggle="offcanvas">Preview</a>
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
                        <a href="#itemCanvas" class="btn btn-primary px-2 btn-sm" data-bs-toggle="offcanvas">Preview</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="/items/davey-gravy-4WPcz_5RVMk-unsplash.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Noodles</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        <a href="#itemCanvas" class="btn btn-primary px-2 btn-sm" data-bs-toggle="offcanvas">Preview</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="/items/anto-meneghini-IrohWzafmmA-unsplash.jpg" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">Noodles</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        <a href="#itemCanvas" class="btn btn-primary px-2 btn-sm" data-bs-toggle="offcanvas">Preview</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-lg">
                    <img src="/items/ella-olsson-lMcRyBx4G50-unsplash.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Noodles</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        <a href="#itemCanvas" class="btn btn-primary px-2 btn-sm" data-bs-toggle="offcanvas">Preview</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="itemCanvas">
        <div class="offcanvas-header">
            <h4  class="offcanvas-title">Product</h4>
            <button class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg">
                    <img src="/items/ikhsan-baihaqi-RwAXb8Hv_sU-unsplash.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Noodles</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        <div class="">
                            <form action="">
                                <div class="row">
                                    <div class="col-md-6 my-2">
                                        <div class="input-group">
                                            <button class="btn btn-primary input-group-prepend" type="button">-</button>
                                            <input type="number" class="form-control px-3" id="product-qty" min="1">
                                            <button class="btn btn-primary input-group-append" type="button">+</button> 
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="Order Now" class="btn btn-success px-3 text-center" style="float:right;">
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>



    </div>
    {{ $products}}
@endsection