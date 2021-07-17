<header>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
            <a href="{{ route('post.index') }}" class="navbar-brand d-flex align-items-center">
                <strong>ApliWeb.Store</strong>
            </a>
            @auth              
            <a href="{{ route('home') }}" class="btn btn-primary">Halo {{ Auth::user()->name }}!</a>
            @endauth
            @guest             
            <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
            @endguest
        </div>
    </div>
</header>


