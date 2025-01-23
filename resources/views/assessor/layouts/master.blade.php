<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assessor (v3)</title>
    <!-- ====================== CSS Inclusions ====================== -->
    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome-pro/css/all.min.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- AdminLTE Theme -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
    <!-- Custom Style -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css"
        rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .body_background {
            background-image: url('{{ asset('img/footer-trim.png') }}'), url('{{ asset('img/sunray.jpg') }}');
            background-size: contain, cover;
            background-repeat: no-repeat, no-repeat;
            background-position: center bottom, center top;
            z-index: 1;
        }
    </style>
    <style>
        .activity-log .log-item {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .activity-log .log-item:last-child {
            border-bottom: none;
        }

        .activity-log .log-item .log-time {
            font-size: 0.85rem;
            color: #6c757d;
        }

        .activity-log .log-item .log-message {
            margin: 0;
            font-size: 1rem;
            font-weight: 500;
        }
    </style>
    <style>
        .small-box {
            border-radius: 0.5rem !important;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 2px 4px rgba(0, 0, 0, 0.06);
            display: block;
            margin-bottom: 20px;
            position: relative;
            background-color: #f8f9fa;
            overflow: hidden;
            transition: all 0.3s ease-in-out;
            color: #ffffff !important;
            /* Ensure text remains white */
        }
        .small-box>.inner {
            padding: 15px;
            color: #ffffff !important;
            /* Ensure text remains white */
        }

        .small-box h3 {
            font-size: 2rem;
            font-weight: 700;
            margin: 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            color: #ffffff !important;
            /* Ensure text remains white */
        }

        .small-box p {
            font-size: 1rem;
            margin: 0;
            color: #ffffff !important;
            /* Ensure text remains white */
        }

        .small-box .icon {
            color: rgba(255, 255, 255, 0.5);
            /* Softer white for icons */
            z-index: 0;
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            transition: transform 0.3s ease-in-out;
            font-size: 80px;
            /* Ensures consistent size */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            /* Adjust for proper vertical alignment */
        }

        .small-box .icon>i {
            font-size: 60px !important;
            /* Icon size */
            transition: transform 0.3s ease-in-out;
        }

        .small-box:hover .icon>i {
            transform: scale(1.2);
        }

        .small-box>.small-box-footer {
            background-color: rgba(0, 0, 0, 0.05);
            color: #ffffff !important;
            display: block;
            padding: 10px 0;
            text-align: center;
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.3s ease-in-out;
        }

        .small-box>.small-box-footer:hover {
            background-color: rgba(0, 0, 0, 0.1);
            color: #ffffff !important;
        }

        @media (max-width: 767.98px) {
            .small-box {
                text-align: center;
            }

            .small-box .icon {
                display: none;
            }

            .small-box p {
                font-size: 0.875rem;
            }
        }

        .info-box {
            border-radius: 0.5rem !important;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 2px 4px rgba(0, 0, 0, 0.06);
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            min-height: 100px;
            padding: 1rem;
            background-color: #ffffff;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease-in-out;
        }

        .info-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15), 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .info-box .info-box-icon {
            border-radius: 0.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
            width: 80px;
            height: 80px;
            color: #fff;
            margin-right: 1rem;
            background: linear-gradient(135deg, #007bff, #0056b3);
            transition: all 0.3s ease-in-out;
        }

        .info-box:hover .info-box-icon {
            transform: scale(1.1);
            background: linear-gradient(135deg, #0056b3, #003d7a);
        }

        .info-box .info-box-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: #495057;
        }

        .info-box .info-box-number {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #212529;
        }

        .info-box .info-box-text {
            font-size: 1rem;
            font-weight: 500;
            color: #6c757d;
        }

        .info-box .progress {
            background-color: #e9ecef;
            border-radius: 0.25rem;
            height: 4px;
            margin: 0.5rem 0;
        }

        .info-box .progress .progress-bar {
            background-color: #007bff;
            transition: width 0.4s ease;
        }

        .info-box .progress-description {
            font-size: 0.875rem;
            color: #6c757d;
            margin-top: 0.5rem;
        }

        @media (max-width: 767.98px) {
            .info-box {
                text-align: center;
            }

            .info-box .info-box-icon {
                display: none;
            }

            .info-box .progress-description {
                font-size: 0.75rem;
            }
        }

        .dark-mode .info-box {
            background-color: #343a40;
            color: #f8f9fa;
        }

        .dark-mode .info-box .info-box-icon {
            background: linear-gradient(135deg, #495057, #6c757d);
            color: #f8f9fa;
        }

        .dark-mode .info-box:hover {
            background-color: #495057;
            box-shadow: 0 6px 8px rgba(255, 255, 255, 0.1);
        }

        .dark-mode .info-box .info-box-number {
            color: #ffffff;
        }

        .dark-mode .info-box .info-box-text {
            color: #dcdcdc;
        }

        .dark-mode .info-box .progress {
            background-color: #6c757d;
        }

        .dark-mode .info-box .progress .progress-bar {
            background-color: #007bff;
        }
    </style>
    <style>
        .alert {
            position: relative !important;
            padding: 1rem 1.5rem !important;
            margin-bottom: 1rem !important;
            border: none !important;
            border-radius: 0.5rem !important;
            /* Softer corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1) !important;
            /* Subtle shadow */
            transition: transform 0.3s ease, box-shadow 0.3s ease !important;
            /* Smooth transition for hover */
        }

        .alert:hover {
            transform: translateY(-2px) !important;
            /* Lift effect on hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15) !important;
            /* Enhanced shadow on hover */
        }

        .alert-heading {
            color: inherit !important;
            font-size: 1.25rem !important;
            font-weight: 600 !important;
            margin-bottom: 0.5rem !important;
        }

        .alert-link {
            font-weight: 700 !important;
            color: inherit !important;
            text-decoration: underline !important;
        }

        .alert-dismissible {
            padding-right: 3rem !important;
        }

        .alert-dismissible .close,
        .alert-dismissible .mailbox-attachment-close {
            position: absolute !important;
            top: 0 !important;
            right: 0 !important;
            z-index: 2 !important;
            padding: 0.75rem 1rem !important;
            color: inherit !important;
            background-color: transparent !important;
            border: none !important;
            cursor: pointer !important;
            font-size: 1.25rem !important;
        }

        .alert-primary {
            color: #084298 !important;
            background-color: #d9edf7 !important;
            border: none !important;
        }

        .alert-primary:hover {
            background-color: #c8e1f5 !important;
        }

        .alert-secondary {
            color: #4a4a4a !important;
            background-color: #f2f2f2 !important;
            border: none !important;
        }

        .alert-secondary:hover {
            background-color: #e6e6e6 !important;
        }

        .alert-success {
            color: #155724 !important;
            background-color: #dff0d8 !important;
            border: none !important;
        }

        .alert-success:hover {
            background-color: #cfe7c8 !important;
        }

        .alert-info {
            color: #0c5460 !important;
            background-color: #d1ecf1 !important;
            border: none !important;
        }

        .alert-info:hover {
            background-color: #c3e8ee !important;
        }

        .alert-warning {
            color: #856404 !important;
            background-color: #fff3cd !important;
            border: none !important;
        }

        .alert-warning:hover {
            background-color: #ffe8a1 !important;
        }

        .alert-danger {
            color: #721c24 !important;
            background-color: #f8d7da !important;
            border: none !important;
        }

        .alert-danger:hover {
            background-color: #f5c6cb !important;
        }

        .alert-light {
            color: #818182 !important;
            background-color: #fefefe !important;
            border: none !important;
        }

        .alert-light:hover {
            background-color: #f4f4f4 !important;
        }

        .alert-dark {
            color: #1b1e21 !important;
            background-color: #d6d8d9 !important;
            border: none !important;
        }

        .alert-dark:hover {
            background-color: #c6c8ca !important;
        }

        .alert hr {
            border-top: 1px solid rgba(0, 0, 0, 0.1) !important;
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
        }
    </style>
</head>

<body class="hold-transition sidebar-collapse layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        @include('assessor.layouts.partials.navigation')
        <!-- /.navbar -->
        {{--
        <!-- Main Sidebar Container -->
        @include('assessor.layouts.partials.sidebar') --}}

        <!-- Content Wrapper -->
        <div class="content-wrapper body_background">
            @include('assessor.layouts.partials.global-delete')
            @yield('contents')
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark"></aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('assessor.layouts.partials.footer')
    </div>
    <!-- ./wrapper -->

    <!-- ====================== JavaScript Inclusions ====================== -->
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Moment.js -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <!-- Tempusdominus -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
    <!-- AdminLTE -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
    <!-- Custom Scripts -->
    @stack('scripts')
    <script src="{{ asset('custom/javascript/global-delete.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // List of routes
            const routes = [{
                    name: "Dashboard",
                    url: "{{ route('dashboard.index') }}"
                },
                {
                    name: "Search",
                    url: "{{ route('search.index') }}"
                },
                {
                    name: "Validation",
                    url: "{{ route('validation.index') }}"
                },
                {
                    name: "Tracking",
                    url: "{{ route('tracking.index') }}"
                },
                {
                    name: "Profile",
                    url: "{{ route('profile.index') }}"
                },
                // Add more routes as needed
            ];

            const searchInput = document.getElementById("searchDropdown");
            const dropdownMenu = document.getElementById("routeDropdownMenu");

            // Dynamically populate the dropdown with routes
            const populateDropdown = (filter = "") => {
                dropdownMenu.innerHTML = ""; // Clear previous results
                const filteredRoutes = routes.filter(route =>
                    route.name.toLowerCase().includes(filter.toLowerCase())
                );

                if (filteredRoutes.length === 0) {
                    dropdownMenu.innerHTML = `<div class="dropdown-item text-muted">No options found</div>`;
                } else {
                    filteredRoutes.forEach(route => {
                        const routeItem = document.createElement("a");
                        routeItem.href = route.url;
                        routeItem.className = "dropdown-item";
                        routeItem.textContent = route.name;
                        dropdownMenu.appendChild(routeItem);
                    });
                }

                dropdownMenu.classList.add("show"); // Show the dropdown
            };

            // Show all routes when input is focused
            searchInput.addEventListener("focus", () => {
                populateDropdown();
            });

            // Filter results on input
            searchInput.addEventListener("input", (e) => {
                const filter = e.target.value;
                populateDropdown(filter);
            });

            // Hide dropdown when clicking outside
            document.addEventListener("click", (e) => {
                if (!searchInput.contains(e.target) && !dropdownMenu.contains(e.target)) {
                    dropdownMenu.classList.remove("show");
                }
            });
        });
    </script>
</body>

</html>
