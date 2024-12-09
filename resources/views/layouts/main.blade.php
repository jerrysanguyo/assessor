<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Sidebar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #FAF9F6;
        }

        #sidebar {
            background-color: #343a40;
            color: white;
            transition: all 0.3s;
        }

        #sidebar .nav-link {
            color: white;
            transition: background-color 0.3s, color 0.3s;
        }

        #sidebar .nav-link:hover {
            background-color: #a71d2a;
            color: white;
        }

        .burger-menu {
            position: fixed;
            top: 10px;
            left: 10px;
            z-index: 1050;
        }

        .fa {
            margin-right: 8px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Burger Menu Button -->
        <button class="btn btn-danger burger-menu d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Sidebar -->
        <div id="sidebar" class="offcanvas offcanvas-start d-md-block col-md-3 col-lg-2 vh-100 p-3" tabindex="-1">
            <div class="offcanvas-header d-md-none">
                <h5 class="offcanvas-title">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="text-center mb-3">
                    <img src="https://via.placeholder.com/150" alt="Profile" class="img-fluid rounded-circle">
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-user"></i> Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-envelope"></i> Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-sign-out-alt"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <main class="col-md-9 col-lg-10 ms-sm-auto px-4">
            <div class="pt-3">
                <h1>Responsive Sidebar with Burger Menu</h1>
                <p>This is the main content area. The sidebar is always visible on large devices and becomes a burger menu on medium and small devices.</p>
            </div>
        </main>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
