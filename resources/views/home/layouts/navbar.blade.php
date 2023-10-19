<nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href=""{{ url('/') }}" class="navbar-brand ms-3 d-lg-none">MENU</a>
    <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav me-auto p-3 p-lg-0">
            <a href="{{ url('/') }}" class="nav-item nav-link active text-white">Home</a>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/admin/dashboard') }}"
                        class="btn btn-sm btn-light rounded-pill py-2 px-4 me-md-2">Dashboard</a>
                @else
                    <a href="{{ route('admin.login') }}"
                        class="btn btn-sm btn-light rounded-pill py-2 px-4 me-md-2">Login</a>
                @endauth
            @endif
            <a href="{{ route('start.survey') }}" class="btn btn-sm btn-light rounded-pill py-2 px-4">Start Survey</a>
            <a href="{{ route('start.comment') }}" class="btn btn-sm btn-light rounded-pill py-2 px-4">Kritik Dan
                Saran</a>
        </div>
    </div>
</nav>
