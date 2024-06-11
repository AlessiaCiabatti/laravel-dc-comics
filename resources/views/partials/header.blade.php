<header class="">
    <div class="logo">
        <nav class="bg-logo">
            <div class="d-flex">
                <div class="container ps-0">
                    <a class="navbar-brand" href="#">
                        <img src="https://i.pinimg.com/564x/27/a0/5e/27a05ea5ff5c9759e0e65a3d2652c623.jpg">
                    </a>
                </div>

                <div class="icons d-flex">
                    <div><a href="#"><i class="fa-solid fa-magnifying-glass text-white me-3"></i></a></div>
                    <div><a href="#"><i class="fa-solid fa-user text-white"></i></a></div>
                </div>
            </div>
        </nav>
    </div>

    <ul class="nav">
        <li class="nav-item">
            <a class="games nav-link active" aria-current="page">Games <span>|</span> </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-link" href="{{ route('comics.index') }}">Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('comics.create') }}">New Product</a>
        </li>
    </ul>

</header>
