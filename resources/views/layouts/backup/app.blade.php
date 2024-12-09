<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-lg-3 bg-light vh-100 p-3">
                <button id="toggleSidebar" class="btn btn-primary mb-3">Toggle Sidebar</button>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                </ul>
            </nav>

            <!-- Main Content -->
            <main id="mainContent" class="col-lg-9">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
