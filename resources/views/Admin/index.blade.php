<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lugrasimo&family=Maven+Pro:wght@400..900&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Ubuntu+Sans+Mono:ital,wght@0,400..700;1,400..700&family=Ysabeau+Infant:ital,wght@0,1..1000;1,1..1000&display=swap');
        /* Custom styles for the sidebar */
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: -250px;
            background-color: #eee;
            padding-top: 20px;
            transition: left 0.5s ease;
        }
        .sidebar a {
            color: white;
            padding: 15px;
            text-decoration: none;
            display: block;
        }
        .sidebar a:hover {
            background-color: #575d63;
        }
        .navbar-toggler {
            cursor: pointer;
            border: none;
            background: none;
            transition: left 0.5s ease;
        }
        .open-sidebar .sidebar {
            left: 0;
        }
        .main-content {
            margin-left: 0;
            padding: 20px;
            transition: margin-left 0.5s ease;
        }
        .open-sidebar .main-content {
            margin-left: 250px;
        }
        .open-sidebar .navbar-toggler {
            position: relative;
            left: 250px;
            
        }
        .open-sidebar .main-content {
            
            margin-left: 250px;
        }

        .links-css{
            font-size: 18px;
            font-weight: bold;
            color: #000000 !important;
            font-family: "Ysabeau Infant", sans-serif;
        }

        
        .links-css2{
            font-size: 16px;
            font-weight: bold;
            color: #000000 !important;
            font-family: "Ysabeau Infant", sans-serif;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light">
        <button id="sidebar-toggle" class="navbar-toggler">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <img src="{{URL('images/Banner/logo.png')}}" height="150px" width="200px" alt="">
        <a href="#home" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-dark links-css">Services</a>
        <ul class="collapse list-unstyled" id="home">
            <li><a href="{{route('admin.addservices')}}" class="links-css2">Add Services</a></li>
            <li><a href="{{route('admin.viewservices')}}" class="links-css2">View Services</a></li>
        </ul>
 
        <a href="#clients" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle links-css">Courses</a>
        <ul class="collapse list-unstyled" id="clients">
            <li><a href="{{route('admin.addcourses')}}" class="links-css2">Add Courses</a></li>
            <li><a href="{{route('admin.viewcourses')}}" class="links-css2">View Courses</a></li>
        </ul>
        
        <a href="#dropdown1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle links-css">Reviews</a>
        <ul class="collapse list-unstyled" id="dropdown1">
            <li><a href="{{route('admin.reviews')}}" class="links-css2">Add Reviews</a></li>
            <li><a href="{{route('admin.viewreviews')}}" class="links-css2">View Reviews</a></li>
        </ul>
        {{-- <a href="#dropdown2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle links-css">Dropdown 2</a>
        <ul class="collapse list-unstyled" id="dropdown2">
            <li><a href="#">Submenu 1</a></li>
            <li><a href="#">Submenu 2</a></li>
        </ul> --}}
    </div>

    <!-- Page content -->
    <div class="main-content">
        <h2 class="text-center display-2 fw-bold">Dashboard of Envirogreen</h2>
       
    </div>

    <script>
        // JavaScript to toggle the sidebar
        document.getElementById('sidebar-toggle').onclick = function() {
            document.body.classList.toggle('open-sidebar');
        };
    </script>
</body>
</html>
