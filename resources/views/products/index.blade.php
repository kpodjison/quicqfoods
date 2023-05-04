@extends('_header')
@section('content')
    <section class="container my-4" id="foodItems">
        @foreach ($products as $product )
        <div class="row my-3">
            @foreach ($product as $item)
                <div class="col-md-3 my-2">
                    <div class="card shadow-lg">
                        <img src="/items/ikhsan-baihaqi-dXeBXaThv4U-unsplash.jpg" class="card-img-top">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">{{$item['name'] }}</h5>
                                <p>$ {{$item['price'] }}</p>
                            </div>
                            <p class="card-text">{{$item['description'] }}</p>
                            <a href="#itemCanvas"  class="btn btn-primary px-2 btn-sm" data-bs-toggle="offcanvas" :id="{{$item['id']}}" @click="getId">Preview</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        @endforeach

    </section>
    <div  class="offcanvas offcanvas-end" tabindex="-1" id="itemCanvas" >
        <div class="offcanvas-header">
            <h4  class="offcanvas-title">Product</h4>
            <button class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div v-for="product in selectedProduct" class="offcanvas-body">
                <div class="row">
                    <div class="col">
                        <div class="card shadow-lg">
                            <img :src="selectedProduct[0].image" class="card-img-top">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title">@{{ product.name }}</h5>
                                    <p>$ @{{product.price}} </p>
                                </div>
                                <small v-if="selectedProduct[0].status == 2" class="text-danger"> Sorry this product is currently  Unavailable</small>
                                <p> @{{ product.desc }}</p>
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
                                        <input type="submit" value="Order Now"
                                         :class="[selectedProduct[0].status == 2 ? 'disabled': '' ]"
                                         class="btn btn-success px-3 text-center" style="float:right;">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
        </div>



    </div>
@endsection
