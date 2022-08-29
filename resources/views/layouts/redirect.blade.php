 {{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
 --}}














 





 <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="utf-8">
     <title>DASHMIN - Bootstrap Admin Template</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport">
     <meta content="" name="keywords">
     <meta content="" name="description">
 
     <!-- Favicon -->
     <link href="img/favicon.ico" rel="icon">
 
     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="/css/all.min.css">
     
     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
 
     <!-- Libraries Stylesheet -->
     <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
     <link href="/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
 
     <!-- Customized Bootstrap Stylesheet -->
     <link href="/css/bootstrap.min.css" rel="stylesheet">
 
     <!-- Template Stylesheet -->
     <link href="/css/style.css" rel="stylesheet">

     {{-- Bootstrap font style --}}
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
     
 </head>
 
 <body>
     <div class="container-xxl position-relative bg-white d-flex p-0">
         <!-- Spinner Start -->
         <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
             <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                 <span class="sr-only">Loading...</span>
             </div>
         </div>
         <!-- Spinner End -->
 
 
         <!-- Sidebar Start -->
         <div class="sidebar pe-4 pb-3">
             <nav class="navbar bg-light navbar-light">
                 <a href="{{url('/admin')}}" class="navbar-brand mx-4 mb-3">
                     <h3 class="text-primary"><i class="fa-solid fa-hammer"></i>  {!!nl2br('DASHMIN')!!}   </h3>
                 </a>
                 <div class="d-flex align-items-center ms-4 mb-4">
                     <div class="position-relative">
                         <img class="rounded-circle" src="/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                         <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                     </div>
                     <div class="ms-3">
                         <h6 class="mb-0">Admin</h6>
                         <span>Admin</span>
                     </div>
                 </div>
                 <div class="navbar-nav w-100">
                     <a href="{{url('/admin')}}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
 
                     <div class="nav-item dropdown">
                         <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Fund</a>
                         <div class="dropdown-menu bg-transparent border-0">
                             <a href="{{url('category')}}" onclick="myFunction()" id="one" class="dropdown-item holder">Category</a>
                             <a href="{{url('categorylist')}}" id="two" class="dropdown-item holder">Category list</a>
                             <a href="{{url('addfund')}}" id="three" class="dropdown-item holder">AddFund</a>         
                             <a href="{{url('fundlist')}}" id="four" class="dropdown-item holder">Fundlist</a>         
                         </div>
                     </div>
 
                  

 
    
 
 
                     {{-- <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a> --}}
                     <a href="{{url('user')}}"    class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Add user</a>
                     <a href="{{url('userlist')}}"  class="nav-item nav-link"><i class="fa fa-table me-2"></i>Userlist</a>


                     <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Project Costing</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{url('costcategory')}}"  class="dropdown-item">Add Cost Category</a>
                            <a href="{{url('costcategorylist')}}" class="dropdown-item">Cost Category List </a>
                            <a href="{{url('addproject')}}" class="dropdown-item">Add Project </a>
                            <a href="{{url('projectlist')}}" class="dropdown-item">Project List</a>
                            <a href="#" class="dropdown-item ">Add Cost List</a>
                            <a href="#" class="dropdown-item ">Cost List</a>
                        </div>
                    </div>

                    
                     <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
               
                 </div>
             </nav>
         </div>
         <!-- Sidebar End -->
 
 
 
   
 
       
 
         <!-- Content Start -->
         <div class="content">
             <!-- Navbar Start -->
             <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                 <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                     <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                 </a>
                 <a href="#" class="sidebar-toggler flex-shrink-0">
                     <i class="fa fa-bars"></i>
                 </a>
                 <form class="d-none d-md-flex ms-4">
                     <input class="form-control border-0" type="search" placeholder="Search">
                 </form>
                 <div class="navbar-nav align-items-center ms-auto">
                     <div class="nav-item dropdown">
                         <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                             <i class="fa fa-envelope me-lg-2"></i>
                             <span class="d-none d-lg-inline-flex">Message</span>
                         </a>
                         <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                             <a href="#" class="dropdown-item">
                                 <div class="d-flex align-items-center">
                                     <img class="rounded-circle" src="/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                     <div class="ms-2">
                                         <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                         <small>15 minutes ago</small>
                                     </div>
                                 </div>
                             </a>
                             <hr class="dropdown-divider">
                             <a href="#" class="dropdown-item">
                                 <div class="d-flex align-items-center">
                                     <img class="rounded-circle" src="/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                     <div class="ms-2">
                                         <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                         <small>15 minutes ago</small>
                                     </div>
                                 </div>
                             </a>
                             <hr class="dropdown-divider">
                             <a href="#" class="dropdown-item">
                                 <div class="d-flex align-items-center">
                                     <img class="rounded-circle" src="/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                     <div class="ms-2">
                                         <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                         <small>15 minutes ago</small>
                                     </div>
                                 </div>
                             </a>
                             <hr class="dropdown-divider">
                             <a href="#" class="dropdown-item text-center">See all message</a>
                         </div>
                     </div>
                     <div class="nav-item dropdown">
                         <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                             <i class="fa fa-bell me-lg-2"></i>
                             <span class="d-none d-lg-inline-flex">Notificatin</span>
                         </a>
                         <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                             <a href="#" class="dropdown-item">
                                 <h6 class="fw-normal mb-0">Profile updated</h6>
                                 <small>15 minutes ago</small>
                             </a>
                             <hr class="dropdown-divider">
                             <a href="#" class="dropdown-item">
                                 <h6 class="fw-normal mb-0">New user added</h6>
                                 <small>15 minutes ago</small>
                             </a>
                             <hr class="dropdown-divider">
                             <a href="#" class="dropdown-item">
                                 <h6 class="fw-normal mb-0">Password changed</h6>
                                 <small>15 minutes ago</small>
                             </a>
                             <hr class="dropdown-divider">
                             <a href="#" class="dropdown-item text-center">See all notifications</a>
                         </div>
                     </div>
                     <div class="nav-item dropdown">
                         <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                             <img class="rounded-circle me-lg-2" src="/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                             <span class="d-none d-lg-inline-flex">
                                {{-- @foreach ($printname as $item)
                                    
                              
                                {{$item->name}}
                                @endforeach
                            </span> --}}
                            Admin
                         </a>
                         <div class="dropdown-menu dropdown-menu-end bg-red border-0 rounded-0 rounded-bottom m-0">
                              <a href="#" class="dropdown-item">My Profile</a>
                             {{-- <a href="#" class="dropdown-item">Settings</a>  --}}
                             <a style="color: #009CFF" href="/logout" class="dropdown-item">Log Out</a>
 
 
                         </div>
                     </div>
                 </div>
             </nav>
             <!-- Navbar End -->
 
 
            
 
           
 
 
 
             <!-- Blank Start -->
             <div class="container-fluid pt-4 px-4">
                <div class="row vh-120 bg-light rounded align-items-flex-start justify-content-left mx-0">                  
                     <div class="col-md-6 text-center">
                       
                         @yield('content')
                        
 
                         {{-- <h3>This is blank page</h3> --}}
                     </div>
                 </div>
             </div>
             <!-- Blank End -->
  
 
 
 
 
             <!-- Footer Start -->
             <div class="container-fluid pt-4 px-4">
                 <div class="bg-light rounded-top p-4">
                     <div class="row">
                         <div class="col-12 col-sm-6 text-center text-sm-start">
                             &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                         </div>
                         <div class="col-12 col-sm-6 text-center text-sm-end">
                             <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                             Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Footer End -->
         </div>
         <!-- Content End -->
 
 
         <!-- Back to Top -->
         <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
     </div>
 
     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="/lib/chart/chart.min.js"></script>
     <script src="/lib/easing/easing.min.js"></script>
     <script src="/lib/waypoints/waypoints.min.js"></script>
     <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
     <script src="/lib/tempusdominus/js/moment.min.js"></script>
     <script src="/lib/tempusdominus/js/moment-timezone.min.js"></script>
     <script src="/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
 
     <!-- Template Javascript -->
     <script src="/js/main.js"></script>

     
 
 <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
 
 
 </body>
 
 </html>  
 
 
 
 
 
 