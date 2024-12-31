<div>
    <section class="container d-flex flex-column vh-100">

        <div class="row align-items-center justify-content-center g-0 h-lg-100">
            <div class="col-lg-5 col-md-8 py-6">
                @if (session()->has('success'))
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                        </path>
                    </svg>
                    <div>{{session('success')}}</div>
                </div>
                @endif

                @if (session()->has('error'))
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-exclamation-triangle-fill me-2" viewBox="0 0 16 16">
                        <path
                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg>
                    <div>{{session('error')}}</div>
                </div>
                @endif
                <!-- Card -->
                <div class="card shadow">
                    <!-- Card body -->
                    <div class="card-body p-6">
                        <a href="#"><img src="https://statisticsmaldives.gov.mv/mbs/wp-content/themes/neon/images/mbslogo2023.svg" class="mb-4 px-6 border-bottom pb-5" alt="logo-icon"></a>
                        <div class="mb-4">
                            <h1 class="mb-1 fw-bold text-center">Tourism Survey Portal</h1>
                            <hr>
                            <h2 class="mb-1 fw-bold">Sign in</h2>
                            <span>
                                Don’t have an account?
                                <a href="{{route('register')}}" class="ms-1">Sign up</a>
                            </span>
                        </div>
                        <!-- Form -->
                        <form wire:submit.prevent="login">
                            <!-- Username -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" wire:model="email" placeholder="">
                                @error('email')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" class="form-control" wire:model="password"
                                    placeholder="">
                                @error('password')<div class="invalid-feedback d-flex">{{ $message }}</div>@enderror
                            </div>
                            <!-- Checkbox -->
                            <div class="d-lg-flex justify-content-between align-items-center mb-4">
                                <div>
                                    <a href="{{route('forgot-password')}}">Forgot your password?</a>
                                </div>
                            </div>
                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>