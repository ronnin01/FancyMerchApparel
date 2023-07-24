<section>
    <div class="container">
        <div class="p-5 shadow rounded border-top border-3 border-primary">
            <div class="my-2 text-start">
                <h2>Product Entry</h2>

            </div>
            <hr>
            <div class="my-2 row justify-content-center">
                @if(Session::has('message'))
                    <span class="text-primary">{{Session::get('message')}}</span>
                @endif
                <div class="col-12">
                    <form wire:submit.prevent='product_submit' enctype="multipart/form-data">
                       @csrf
                        <div class="my-2 row justify-content-center">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="productname" placeholder="Product Name" wire:model.defer='product_name'>
                                    <label for="productname">Product Name</label>
                                </div>
                                @error('product_name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="productquantity" placeholder="Product Quantity" wire:model.defer='product_quantity'>
                                    <label for="productquantity">Product Quantity</label>
                                </div>
                                @error('product_quantity')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="my-2 row justify-content-center align-items-center">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="productprice" placeholder="Product Price" wire:model.defer='product_price'>
                                    <label for="productprice">Product Price</label>
                                </div>
                                @error('product_price')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col">
                                <select class="form-select" wire:model.defer='product_category' aria-label="Default select example">
                                    <option selected>Select Category</option>
                                    <option value="Polo Shirt">Polo Shirt</option>
                                    <option value="Polo">Polo</option>
                                    <option value="Suit">Suit</option>
                                </select>
                                @error('product_category')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="my-2">
                                <div>
                                    <input class="form-control" type="file" wire:model="image">
                                    @error('image')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="my-4 d-grid">
                                <button type="submit" class="btn btn-primary text-light">
                                    <div class="spinner-border spinner-border-sm" role="status" wire:loading wire:target='product_submit'></div>
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
