<div class="container-fluid" style="margin: 0px; padding:0px;">
    <nav class="navbar navbar-light" style="padding: 10px 30px; background: #0046be;">
        <div class="container-fluid">
            <img class ="navbar-brand" src="{{ url('storage/images/logo.png')}}" alt="">
            <form class ="d-flex justify-content-start flex-fill" action="/search" method="GET">
                <input class="form-control me-2" type="search" name="search" placeholder=" Search product...">
                <button class="btn btn-warning" type="Submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="navbar navbar-light" style="background:#FFE74C; padding:0px 15px;">
        <div class="container-fluid">
            @guest
                <div class="navbar-item" style="margin-right:30px;">
                    <a class="navbar-link" style = "text-decoration: none; color: black;" href="/">Home</a>
                </div>

                <div class="navbar">
                    @if (Route::has('login'))
                        <a class ="btn" href="/login" style="margin-right: 20px;border-style: solid;
                        border-color: black;
                        border-radius: 5px;
                        border-width: 2px;">Login</a>
                    @endif
                    @if (Route::has('register'))
                        <a class ="nav-item btn" style="margin-right: 20px;
                        border-style: solid;
                        border-color: black;
                        border-radius: 5px;
                        border-width: 2px;" href="/register">Register</a>
                    @endif
                </div>
            @elseif(isset(Auth::user()->id) && (Auth::user()->role == 0))
                <div class="navbar">
                    <div class="navbar-item" style="margin-right:30px;">
                        <a class = "navbar-link" style = "text-decoration: none; color: black;" href="/cart">My Cart</a>
                    </div>
                    
                    <div class="navbar-item" style="margin-right:30px;">
                        <a class = "navbar-link" style = "text-decoration: none; color: black;" href="/history">History Transaction</a>
                    </div>
                </div>
                

                <div class="navbar">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-item btn" style="margin-right: 20px;
                    border-style: solid;
                    border-color: black;
                    border-radius: 5px;
                    border-width: 2px; padding:1px 7px;"><img src="{{ url('storage/images/logout.png')}}" alt="">Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            @elseif(isset(Auth::user()->id) && (Auth::user()->role == 1))

                <div class="navbar">
                    <div class="navbar-item" style="margin-right:30px;">
                        <a class="navbar-link" style = "text-decoration: none; color: black;"href="/">Home</a>
                    </div>
                    
                    <div class="nav-item dropdown" style="text-decoration: none; margin-right:15px;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProduct" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black;">
                          Manage Product
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownProduct">
                          <li><a class="dropdown-item" href="/product">View Product</a></li>
                          <li><a class="dropdown-item" href="/product/insert">Add Product</a></li>
                        </ul>
                    </div>
    
                    <div class="nav-item dropdown" style="text-decoration: none;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCategory" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black;">
                          Manage Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownCategory">
                          <li><a class="dropdown-item" href="/category">View Category</a></li>
                          <li><a class="dropdown-item" href="/category/insert">Add Category</a></li>
                        </ul>
                    </div>
                </div>
                

                <div class="navbar">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-item btn" style="margin-right: 20px;
                    border-style: solid;
                    border-color: black;
                    border-radius: 5px;
                    border-width: 2px; padding:1px 7px;"><img src="{{ url('storage/images/logout.png')}}" alt="">Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            @endguest
        </div>
    </div>
</div>

{{-- <link rel="stylesheet" href="{{ asset('css/header.css')}}"> --}}
