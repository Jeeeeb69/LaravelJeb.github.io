<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Members Application')</title>
    <!-- Default Bootstrap Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.3/darkly/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        /* Dark Background Color */
        body {
            background-color: #1c2331; /* Dark Blue Background */
            color: #f4f5f7; /* Light text color for contrast */
        }

        /* Sidebar Styles */
        .sidebar {
            background-color: #162d47; /* Darker Blue */
            color: #ffffff;
            height: 100vh;
            padding-top: 20px;
        }

        .sidebar h2 {
            text-align: center;
            color: #ffffff;
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .sidebar a {
            color: #b0bec5;
            text-decoration: none;
            padding: 15px;
            display: block;
            font-size: 1rem;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #0d2e4d; /* Hover effect */
            color: #ffffff;
        }

        /* Top Navbar */
        .navbar {
            background-color: #142c44; /* Dark Blue */
        }

        .navbar-brand {
            color: #ffffff;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #cfd8dc;
        }

        .navbar-nav .nav-link:hover {
            color: #ffffff;
        }

        .btn-primary {
            background-color: #4e73df; /* Bright Blue */
            border-color: #4e73df;
        }

        .btn-primary:hover {
            background-color: #2e59a8;
            border-color: #2e59a8;
        }

        .btn-danger {
            background-color: #e74a3b; /* Red Button */
            border-color: #e74a3b;
        }

        .btn-danger:hover {
            background-color: #c13f2c;
            border-color: #c13f2c;
        }

        /* Footer Styling */
        .footer {
            background-color: #142c44;
            color: #ffffff;
            text-align: center;
            padding: 15px 0;
        }

        /* Content Area */
        .content-wrapper {
            padding: 20px;
        }

        .table {
            background-color: #283e56; /* Dark Blue table background */
        }

        .table th, .table td {
            color: #ffffff;
        }

        .table-dark th {
            background-color: #0d2e4d; /* Darker Blue for table headers */
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #1c2331; /* Stripe effect for dark rows */
        }
    </style>
</head>
<body>

    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar col-md-3 col-lg-2 p-0">
            <h2>Members Dashboard</h2>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('members.index') }}" class="nav-link">Members</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('members.create') }}" class="nav-link">Add Member</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="col-md-9 col-lg-10 p-0">
            <!-- Top Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Jave Corp.</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <!-- Add other navbar items here -->
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Content Wrapper -->
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; {{ date('Y') }} Company. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>