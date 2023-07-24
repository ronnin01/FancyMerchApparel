<div class="container">
    <div class="vh-100 row justify-content-center align-items-center">
        <div class="col-12">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="my-2 text-center">
                        <h2 class="fw-light">Sign Up</h2>
                    </div>
                    <hr>
                    <div class="my-2">
                        <div class="my-2">
                            @if(Session::has('message'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <span>{{Session::get('message')}}</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                            @if(Session::has('success_message'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <span>{{Session::get('success_message')}}</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                        </div>
                        <form wire:submit.prevent='signin'>
                            <div class="my-2">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="Email" wire:model.defer='email'>
                            </div>
                            <div class="my-2">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Password" wire:model.defer='password'>
                            </div>
                            <div class="my-4 d-grid">
                                <button type="submit" class="btn btn-primary text-light">
                                    <div class="spinner-border spinner-border-sm" role="status" wire:loading wire:target='signin'></div>
                                    Sign In
                                </button>
                            </div>
                            <div class="my-2">
                                <p>Dont have and account yet? <a class="text-primary" href="{{ route('signup') }}">Sign Up</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
