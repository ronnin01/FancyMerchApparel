<div class="container">
    <div class="vh-100 row justify-content-center align-items-center">
        <div class="col-7">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="my-2 text-center">
                        <h2 class="fw-light">Sign Up</h2>
                    </div>
                    <hr>
                    <div class="my-2">
                        @if(Session::has('message'))
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <span>{{Session::get('message')}}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <form wire:submit.prevent='signup'>
                            <div class="my-2">
                                <div class="row gx-2 justify-content-center">
                                    <div class="col">
                                        <label for="firstname" class="form-label">Firstname</label>
                                        <input type="text" id="firstname" class="form-control" placeholder="Firstname" wire:model.defer='firstname'>
                                    </div>
                                    <div class="col">
                                        <label for="lastname" class="form-label">Lastname</label>
                                        <input type="text" id="lastname" class="form-control" placeholder="Lastname" wire:model.defer='lastname'>
                                    </div>
                                </div>
                            </div>
                            <div class="my-2">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" placeholder="Email" wire:model.defer='email'>
                            </div>
                            <div class="my-2">
                                <div class="row gx-2 justify-content-center">
                                    <div class="col">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" id="password" class="form-control" placeholder="Password" wire:model.defer='password'>
                                    </div>
                                    <div class="col">
                                        <label for="confirm-password" class="form-label">Confirm Password</label>
                                        <input type="password" id="confirm-password" class="form-control" placeholder="Confirm Password" wire:model.defer='confirm_password'>
                                    </div>
                                </div>
                            </div>
                            <div class="my-4 d-grid">
                                <button type="submit" class="btn btn-primary text-white">
                                    <div class="spinner-border spinner-border-sm" role="status" wire:loading wire:target='signup'></div>
                                    Sign Up
                                </button>
                            </div>
                            <div class="my-2">
                                <p>Had and Account? <a class="text-primary" href="{{ route('signin') }}">Sign In</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
