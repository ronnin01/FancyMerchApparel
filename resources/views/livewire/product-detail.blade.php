<div class="container">
    <div class="mt-4 text-start">
        <a href="{{route('home.index')}}">
            <i class="bi bi-arrow-left-circle-fill"></i>
            Back
        </a>
    </div>
</div>
<section>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-5">
                <img src="{{ asset('storage/uploads/'.$data->product_image) }}" class="rounded shadow img-fluid">
            </div>
            <div class="ms-5 col-5">
                {{$product_name}}
                <form wire:submit.prevent="product">
                    <div class="text-start">
                        <div class="my-2">
                            <h1>{{$data->product_name}}</h1>
                            <input type="text" wire:model.defer="product_name">
                        </div>
                        <div class="my-2">
                            <h3 class="text-primary">&#8369;{{$data->product_price}}</h3>
                        </div>
                        <hr>
                        <div class="my-2">
                            <label for="" class="form-label lead text-muted">Category:</label>
                            <h2>{{$data->product_category}}</h2>
                        </div>
                        <div class="my-2">
                            <label for="" class="form-label lead text-muted">Sizes:</label>
                            <div class="row justify-content-start">
                                <div class="col">
                                    <input type="checkbox" class="btn-check" id="small" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="small">Small</label><br>
                                </div>
                                <div class="col">
                                    <input type="checkbox" class="btn-check" id="medium" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="medium">Medium</label><br>
                                </div>
                                <div class="col">
                                    <input type="checkbox" class="btn-check" id="large" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="large">Large</label><br>
                                </div>
                                <div class="col">
                                    <input type="checkbox" class="btn-check" id="extra-large" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="extra-large">Extra-Large</label><br>
                                </div>
                            </div>
                        </div>
                        <div class="my-2 row justify-content-start">
                            <label for="" class="form-label lead text-muted">Quantity:</label>
                            <div class="row justify-content-start">
                                <div class="col-5">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="productquantity" max='{{$data->product_quantity}}' placeholder="Product Quantity">
                                        <label for="productquantity">Product Quantity</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-4">
                            @if(Auth::user())
                                <div class="row gx-2">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="bi bi-bag"></i>
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>
                            @else
                                <div class="d-grid">
                                    <a href="{{ route('signin') }}" class="btn btn-primary">Sign In</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
