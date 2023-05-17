<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Book.id</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
     crossorigin="anonymous">
    
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- my style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- logo -->
    <link rel="icon" href="{{asset('images/logo.jpg')}}" type="image/x-icon">

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
    @if(Auth::user())
        @if(Auth::user()->role_id == 1)
            <!-- Navbar -->
            
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="{{asset('images/logo.png')}}" alt="" width="35" class="d-inline-block align-text-top me-3 rounded-circle">
                        Book.id
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a href="/dashboard" 
                                    @if(request()->route()-> uri == 'dashboard') 
                                        class='nav-link active' 
                                    @else
                                        class='nav-link'
                                    @endif>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/books" 
                                    @if(request()->route()-> uri == 'books' ||
                                    request()->route()->uri == 'book-add' || 
                                    request()->route()->uri == 'book-edit/{slug}' || 
                                    request()->route()->uri == 'book-delete/{slug}' ||
                                    request()->route()->uri == 'book-deleted') 
                                        class='nav-link active'
                                    @else
                                        class='nav-link'
                                    @endif>
                                    Books
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/categories" 
                                    @if(request()->route()-> uri == 'categories' || 
                                    request()->route()->uri == 'category-add' || 
                                    request()->route()->uri == 'category-deleted' || 
                                    request()->route()->uri == 'category-edit/{slug}' || 
                                    request()->route()->uri == 'category-delete/{slug}') 
                                        class='nav-link active' 
                                    @else
                                        class='nav-link'    
                                    @endif>
                                    Categories
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/users" 
                                    @if(request()->route()-> uri == 'users' || 
                                    request()->route()->uri == 'registered-users' || 
                                    request()->route()->uri == 'user-detail/{slug}' || 
                                    request()->route()->uri == 'user-banned' || 
                                    request()->route()->uri == 'user-ban/{slug}')
                                        class='nav-link active' 
                                    @else
                                        class='nav-link'    
                                    @endif>
                                    Users
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/rent-logs" 
                                    @if(request()->route()-> uri == 'rent-logs')
                                        class='nav-link active' 
                                    @else
                                        class='nav-link'
                                    @endif>
                                    Rent Log
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/book-list"
                                    @if(request()->route()-> uri == 'book-list')
                                        class='nav-link active' 
                                    @else
                                        class='nav-link'    
                                    @endif>
                                    Book List
                                </a>
                            </li>      
                            <li class="nav-item">
                                <a href="book-rent" 
                                    @if(request()->route()-> uri == 'book-rent') 
                                        class='nav-link active'
                                    @else
                                        class='nav-link' 
                                    @endif>
                                    Book Rent
                                </a>
                            </li>      
                            <li class="nav-item">
                                <a href="book-return"  
                                    @if(request()->route()-> uri == 'book-return') 
                                        class='nav-link active' 
                                    @else
                                        class='nav-link'    
                                    @endif>
                                    Book Return
                                </a>
                            </li>      
                            <li class="nav-item text-bg-danger rounded me-auto">
                                <a href="/logout" class="nav-link mx-3">Logout</a>
                            </li>
                        </ul>
                        <div class="ms-auto">
                            <div class="d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="currentColor" class="bi bi-person-circle text-light" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                                <h5 class="text-light pt-2 ms-1">{{Auth::user()->username}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Content -->
            <div class="body-content h-100">
                <div class="row g-0 h-100">
                    <div class="content col-lg-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        @else
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top w-100">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="{{asset('images/logo.png')}}" alt="" width="35"  class="d-inline-block align-text-top me-3">
                        Book.id
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item mx-2">    
                                <a href="/profile" 
                                    @if(request()->route()-> uri == 'profile') 
                                        class='nav-link active'
                                    @else
                                        class='nav-link'    
                                    @endif>
                                    Profile
                                </a>
                            </li>       
                            <li class="nav-item mx-2">
                                <a href="/book-list"                                         
                                    @if(request()->route()-> uri == 'book-list')
                                        class='nav-link active' 
                                    @else
                                        class='nav-link'    
                                    @endif>
                                    Book List
                                </a>
                            </li>
                            <li class="nav-item mx-2 text-bg-danger rounded">
                                <a href="/logout" class="nav-link">Logout</a>
                            </li>
                        </ul>
                        <div class="ms-auto">
                            <div class="d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="currentColor" class="bi bi-person-circle text-light" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                                <h5 class="text-light pt-2 ms-1">{{Auth::user()->username}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Content -->
            <div class="body-content h-100">
                <div class="row g-0 h-100">
                    <div class="content col-lg-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        @endif
    @else
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-transparent" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('images/logo.png')}}" alt="" width="35"  class="d-inline-block align-text-top me-3 rounded-circle">
                    Book.id
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#hero">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="#booklist">Layanan</a></li>
                        <li class="nav-item me-4"><a class="nav-link" href="#contact">Kontak</a></li>
                        <li class="nav-item"><a href="/login" class="btn btn-outline-warning"><i class="fa fa-user me-2"></i>Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        @yield('content')

    @endif

    <!-- Footer -->
    <div class="d-flex bg-dark justify-content-between text-light">
        <div class="p-4">Copyright &copy; Book.id 2023</div>
        <div class="p-4">
            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
    crossorigin="anonymous"></script>
</body>
</html>