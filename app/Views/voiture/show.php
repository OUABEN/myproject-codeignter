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
    <style>
          
        /* General Styling */
     

        /* Container for the content */
        .container {
            display: inline-block;
            max-width: 1000px;
            height: 380px;
            
            margin: 50px auto;
            background-color: whitesmoke; /* Black background for the container */
           
            border-radius: 8px;
            overflow: hidden;
            margin-top: 20px;
            padding-top: 10px;
        }

        /* Left side for the image */
        .image-container {
            flex: 1;
            width: 450px;
            height: 350px;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Right side for the details */
        .details-container {
            flex: 1;
            padding: 20px;
            color: black; /* Light blue text color */
        }

        /* Heading styling */
        h2 {
            color: black; /* Light blue heading color */
            margin-bottom: 20px;
        }

        /* Styling for the car details */
        p {
            font-size: 18px;
            line-height: 1.6;
            margin: 10px 0;
        }

        p strong {
            color: black; /* Light blue for strong text */
        }

        /* Links styling */
        .links {
            margin-top: 20px;
        }

        .links a {
            text-decoration: none;
            color: #000;
            background-color: #009CFF; /* Light blue background for links */
            padding: 10px 15px;
            border-radius: 4px;
            margin-right: 10px;
            display: inline-block;
        }

        .links a:hover {
            background-color: #009999; /* Darker blue on hover */
        }
    
    </style>
   
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
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
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Voiture</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?= session()->get('user')['nom'] ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/voiture" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="/voiture/create" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Ajoute Voiture</a>
                    <a href="/client" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Ajoute Client</a>
                    <a href="/client/table" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables Des Clients</a>
                    <a href="/voiture/table" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables Des Voiture</a>
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
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?= session()->get('user')['nom'] ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="/logout" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="container">
                    <div class="image-container">
                        <img src="https://th.bing.com/th/id/OIP.LAHIhm9unWnJGgWOWBNrQAHaE6?w=292&h=193&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="Car Image">
                    </div>
                    
                    <div class="details-container" style="position: relative;left :450px; bottom :370px;">
                        <h2>Voiture Details</h2>
                        <p><strong>ID:</strong> <?= $voiture['id'] ?></p>
                        <p><strong>Marque:</strong> <?= $voiture['marque'] ?></p>
                        <p><strong>Model:</strong> <?= $voiture['model'] ?></p>
                        <p><strong>Couleur:</strong> <?= $voiture['couleur'] ?></p>
                        <p><strong>Prix:</strong> $<?= number_format($voiture['prix'], 2) ?></p>
                        <p><strong>Status:</strong> <?= $voiture['status'] ? 'Disponible' : 'Not Available' ?></p>
                
                        <div class="links">
                            <a href="/client">achete</a>
                            <a href="/voiture/delete/<?= $voiture['id'] ?>" onclick="return confirm('Are you sure you want to delete this voiture?');">Delete</a>
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- Form End -->

            <!-- Back to Top -->
           
        </div>
        <!-- Content End -->

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
</body>

</html>
