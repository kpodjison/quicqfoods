@extends('_header')
@section('content')
    <section class="container my-4" id="foodItems">
        @foreach ($products as $product )
        <div class="row my-3">
            @foreach ($product as $item)
                <div class="col-md-3">
                    <div class="card shadow-lg">
                        <img src="/items/ikhsan-baihaqi-dXeBXaThv4U-unsplash.jpg" class="card-img-top">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">{{$item['name'] }}</h5>
                                <p>$ {{$item['price'] }}</p>
                            </div>
                            <p class="card-text">{{$item['description'] }}</p>
                            <a href="#itemCanvas" class="btn btn-primary px-2 btn-sm" data-bs-toggle="offcanvas">Preview</a>
                        </div>
                    </div>
                </div>  
            @endforeach
          
        </div>
        @endforeach

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
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">Noodles</h5>
                                <p>$ 50</p>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem unde
                                 eligendi officiis similique blanditiis minus asperiores at aut aliquam? Neque?</p>
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
@endsection