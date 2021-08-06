
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white" style="background-color: rgb(228, 228, 228);">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand">
                <img style="height: 75px;" src="{{ asset('frontend') }}/dist/img/LogoEsgul2.png" alt="AdminLTE Logo" class="brand-image">
                <span style="color: rgb(238, 119, 39); font-size: 36px;" class="brand-text font-weight-bold">Repository Magister Ilmu Komputer</span>
            </a>

            <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                <!-- Left navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a  href="{{ url('/') }}" class="nav-link active">
                        <i class="fas fa-home"></i>
                        Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/faq') }}" class="nav-link">
                        <i class="fas fa-question"></i>
                        FAQ
                        </a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a href="{{ url('/contactUs') }}" class="nav-link">
                        <i class="fas fa-phone-alt"></i>
                        Contact Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">
                            <i class="fas fa-sign-in-alt"></i>
                            Login
                        </a>
                    </li>
                    @else
                    @if (auth()->user()->role_id == 1)
                    <li class="nav-item">
                        <a href="{{ route('contactAdmin.index') }}" class="nav-link">
                        <i class="fas fa-phone-alt"></i>
                        Contact Us
                        </a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ url('/contactUs') }}" class="nav-link">
                        <i class="fas fa-phone-alt"></i>
                        Contact Us
                        </a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">
                            <i class="fas fa-sign-in-alt"></i>
                            Dashboard
                        </a>
                    </li>
                    @endguest
                </ul>
            </div>

            <!-- Right navbar links -->
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto"></ul>
        </div>
    </nav>
