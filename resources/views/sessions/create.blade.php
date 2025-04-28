<x-page-template bodyClass="">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
          {{--  <div class="col-12">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
                    <x-auth.navbars.navs.guest p="ps-2 pe-0" btn='bg-gradient-primary' textColor='' svgColor='dark'></x-auth.navbars.navs.guest>
                </nav>
                <!-- End Navbar -->
            </div>--}}
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                            <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('{{ asset('assets') }}/img/illustrations/illustration-signin.jpg'); background-size: cover;"></div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                            <div class="card card-plain">
                                <div class="card-header text-center">
                                    <h4 class="font-weight-bolder">Sign In</h4>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>

                                <div class="card-body mt-2">
                                    <form role="form" method="POST" action="{{ route('login') }}" class="text-start">
                                        @csrf

                                        @if (Session::has('status'))
                                            <div class="alert alert-success alert-dismissible text-white" role="alert">
                                                <span class="text-sm">{{ Session::get('status') }}</span>
                                                <button type="button" class="btn-close text-lg py-3 opacity-10"
                                                        data-bs-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif

                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                        @error('email')
                                        <p class="text-danger inputerror">{{ $message }}</p>
                                        @enderror

                                        <div class="input-group input-group-outline mt-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" >
                                        </div>
                                        @error('password')
                                        <p class="text-danger inputerror">{{ $message }}</p>
                                        @enderror

                                        <div class="form-check form-switch d-flex align-items-center my-3">
                                            <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
                                            <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">
                                                Sign in
                                            </button>
                                        </div>

                                        <div class="mb-1 position-relative text-center">
                                            <p class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                                                {{ __('Or') }}
                                            </p>
                                        </div>

                                        <div class="row px-xl-5 px-sm-3 px-3 justify-content-center">
                                            <div class="col-auto px-2">
                                                <a class="btn btn-outline-light w-100" href="{{ route('google.login') }}">
                                                    <svg width="20px" height="20px" viewBox="0 0 64 64" version="1.1"
                                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g id="google-icon" transform="translate(3.000000, 2.000000)" fill-rule="nonzero">
                                                                <path d="M57.8123233,30.1515267 C57.8123233,27.7263183 57.6155321,25.9565533 57.1896408,24.1212666 L29.4960833,24.1212666 L29.4960833,35.0674653 L45.7515771,35.0674653 C45.4239683,37.7877475 43.6542033,41.8844383 39.7213169,44.6372555 L39.6661883,45.0037254 L48.4223791,51.7870338 L49.0290201,51.8475849 C54.6004021,46.7020943 57.8123233,39.1313952 57.8123233,30.1515267" id="Path" fill="#4285F4"></path>
                                                                <path d="M29.4960833,58.9921667 C37.4599129,58.9921667 44.1456164,56.3701671 49.0290201,51.8475849 L39.7213169,44.6372555 C37.2305867,46.3742596 33.887622,47.5868638 29.4960833,47.5868638 C21.6960582,47.5868638 15.0758763,42.4415991 12.7159637,35.3297782 L12.3700541,35.3591501 L3.26524241,42.4054492 L3.14617358,42.736447 C7.9965904,52.3717589 17.959737,58.9921667 29.4960833,58.9921667" id="Path" fill="#34A853"></path>
                                                                <path d="M12.7159637,35.3297782 C12.0932812,33.4944915 11.7329116,31.5279353 11.7329116,29.4960833 C11.7329116,27.4640054 12.0932812,25.4976752 12.6832029,23.6623884 L12.6667095,23.2715173 L3.44779955,16.1120237 L3.14617358,16.2554937 C1.14708246,20.2539019 0,24.7439491 0,29.4960833 C0,34.2482175 1.14708246,38.7380388 3.14617358,42.736447 L12.7159637,35.3297782" id="Path" fill="#FBBC05"></path>
                                                                <path d="M29.4960833,11.4050769 C35.0347044,11.4050769 38.7707997,13.7975244 40.9011602,15.7968415 L49.2255853,7.66898166 C44.1130815,2.91684746 37.4599129,0 29.4960833,0 C17.959737,0 7.9965904,6.62018183 3.14617358,16.2554937 L12.6832029,23.6623884 C15.0758763,16.5505675 21.6960582,11.4050769 29.4960833,11.4050769" id="Path" fill="#EB4335"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <span class="ms-2" style="color: black;">Sign in with Google</span>
                                                </a>
                                            </div>
                                        </div>

                                        <p class="text-sm text-center mt-3">
                                            Forgot your password? Reset your password
                                            <a href="{{ route('verify') }}" class="text-primary text-gradient font-weight-bold">here</a>
                                        </p>

                                        <p class="mt-4 text-sm text-center">
                                            Don't have an account?
                                            <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Sign up</a>
                                        </p>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @push('js')
        <script src="{{ asset('assets') }}/js/plugins/jquery-3.6.0.min.js"></script>
        <script>
            $(function () {

                function checkForInput(element) {

                    const $label = $(element).parent();

                    if ($(element).val().length > 0) {
                        $label.addClass('is-filled');
                    } else {
                        $label.removeClass('is-filled');
                    }
                }
                var input = $(".input-group input");
                input.focusin(function () {
                    $(this).parent().addClass("focused is-focused");
                });

                $('input').each(function () {
                    checkForInput(this);
                });

                $('input').on('change keyup', function () {
                    checkForInput(this);
                });

                input.focusout(function () {
                    $(this).parent().removeClass("focused is-focused");
                });
            });

        </script>

    @endpush
    <!--   Core JS Files   -->
</x-page-template>


