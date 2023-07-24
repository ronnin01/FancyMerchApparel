<section>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-4 text-center text-lg-start">
            <h1 class="my-3">
                <div class="display-5">Fancy feels styles</div>
                <div class="display-5">are finally here</div>
            </h1>
            <p class="lead px-md-0 px-5 text-start text-muted my-3">
                Shop the latest fancy styles at our apparel store! 
                From fancy trends top to stylish bottoms, we have the perfect outfits for every fancy events.
            </p>
            <a href="#shop-now" class="btn btn-primary text-light my-3">
                <i class="bi bi-bag-heart-fill"></i>
                Shop Now
            </a>
        </div>
        <div class="col-4 d-none d-md-block">
            <div class="row g-3 justify-content-center align-items-center">
                <div class="col text-center">
                    <img src="https://i.pinimg.com/550x/2a/df/13/2adf13d0dac833aa407dac9d4cd99f99.jpg" style="width: 208px;" class="rounded shadow-lg">
                </div>
                <div class="col text-center">
                    <img src="https://i.pinimg.com/originals/c8/ac/ae/c8acae11fa467c15612ecb9a105c0127.jpg" style="width: 208px;" class="rounded shadow-lg">
                </div>
                <div class="col text-center">
                    <img src="https://mensfash.com/wp-content/uploads/2017/05/great-summer-night-outfit-for-men.jpeg" style="width: 208px;" class="rounded shadow-lg">
                </div>
                <div class="col text-center">
                    <img src="https://i.pinimg.com/736x/2f/e7/50/2fe75088216f00434f98a21816d3bbe1.jpg" style="width: 208px;" class="rounded shadow-lg">
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <hr class="bg-primary">
</div>
<section id="shop-now">
    <div class="container">
        <div class="my-2 text-start">
            <h2>Shop by Category</h2>
            <p class="lead text-muted">Fancy Trends</p>
        </div>
        <div class="my-2">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="all-tab" data-bs-toggle="pill" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">All</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="polo-shirts-tab" data-bs-toggle="pill" data-bs-target="#polo-shirts" type="button" role="tab" aria-controls="polo-shirts" aria-selected="false">Polo Shirts</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="polo-tab" data-bs-toggle="pill" data-bs-target="#polo" type="button" role="tab" aria-controls="polo" aria-selected="false">Polo</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="suits-tab" data-bs-toggle="pill" data-bs-target="#suits" type="button" role="tab" aria-controls="suits" aria-selected="false">Suits</button>
                </li>
            </ul>

            <!-- CONTENTS BY CATEGORY -->
            <div class="tab-content my-5" id="pills-tabContent">
                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                    <div class="row gx-5">
                        @foreach($data as $product)
                            <div class="col-3">
                                <div class="card relative" style="width: 18rem;">
                                    <img src="{{asset('storage/uploads/'.$product->product_image)}}" class="card-img-top" style="height: 320px;">
                                    <div class="card-body">
                                        <h5>{{$product->product_name}}</h5>
                                        <p class="lead text-muted">&#8369;{{$product->product_price}}</p>
                                        <div class="my-2">
                                            <a href="{{route('product.details', $product->product_id)}}" class="btn btn-primary text-light">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="polo-shirts" role="tabpanel" aria-labelledby="polo-shirts-tab" tabindex="0">
                    <div class="row">
                        @if(count($data) > 0)
                            @foreach($data as $product)
                                @if($product->product_category == 'Polo Shirt')
                                    <div class="col-3">
                                        <div class="card relative" style="width: 18rem;">
                                            <img src="{{asset('storage/uploads/'.$product->product_image)}}" class="card-img-top" style="height: 320px;">
                                            <div class="card-body">
                                                <h5>{{$product->product_name}}</h5>
                                                <p class="leadt text-muted">&#8369;{{$product->product_price}}</p>
                                                <div class="my-2">
                                                    <a href="{{route('product.details', $product->product_id)}}" class="btn btn-primary text-light">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <span class="text-primary">No Fancy</span>
                        @endif
                    </div>
                </div>
                <div class="tab-pane fade" id="polo" role="tabpanel" aria-labelledby="polo-tab" tabindex="0">
                    <div class="row">
                        @if(count($data)>0)
                            @foreach($data as $product)
                                @if($product->product_category == 'Polo')
                                    <div class="col-3">
                                        <div class="card relative" style="width: 18rem;">
                                            <img src="{{asset('storage/uploads/'.$product->product_image)}}" class="card-img-top" style="height: 320px;">
                                            <div class="card-body">
                                                <h5>{{$product->product_name}}</h5>
                                                <p class="leadt text-muted">&#8369;{{$product->product_price}}</p>
                                                <div class="my-2">
                                                    <a href="{{route('product.details', $product->product_id)}}" class="btn btn-primary text-light">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <span>No Fancy</span>
                        @endif
                    </div>
                </div>
                <div class="tab-pane fade" id="suits" role="tabpanel" aria-labelledby="suits-tab" tabindex="0">
                    <div class="row">
                        @if(count($data) > 0)
                            @foreach($data as $product)
                                @if($product->product_category == 'Suit')
                                    <div class="col-3">
                                        <div class="card relative" style="width: 18rem;">
                                            <img src="{{asset('storage/uploads/'.$product->product_image)}}" class="card-img-top" style="height: 320px;">
                                            <div class="card-body">
                                                <h5>{{$product->product_name}}</h5>
                                                <p class="leadt text-muted">&#8369;{{$product->product_price}}</p>
                                                <div class="my-2">
                                                    <a href="{{route('product.details', $product->product_id)}}" class="btn btn-primary text-light">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif   
                            @endforeach
                        @else
                            <span class="text-primary">No Fancy</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
