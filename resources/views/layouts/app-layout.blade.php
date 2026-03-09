<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PQC Migration Monitoring Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <style>
        :root {
            --bg-primary: #181824;
            --surface: #202233;
            --text-primary: #e6e6ea;
            --text-muted: #a0a4b8;
            --accent: #38ce3c;
            --accent-alt: #21bf06;
            --alert: #ffc107;
            --magenta: #d63384;
        }

        html,
        body {
            background-color: var(--bg-primary);
            color: var(--text-primary);
        }

        a {
            color: var(--accent);
            text-decoration: none;
        }

        a:hover {
            color: #2fb934;
        }

        .navbar {
            background-color: var(--surface) !important;
            border-bottom: 1px solid rgba(230, 230, 234, 0.08);
        }

        .navbar .navbar-brand,
        .navbar .nav-link,
        .navbar .navbar-text {
            color: var(--text-primary) !important;
        }

        .navbar .nav-link:hover {
            color: var(--accent) !important;
        }

        .card {
            background-color: var(--surface);
            color: var(--text-primary);
            border-color: rgba(230, 230, 234, 0.08);
        }

        .card-header,
        .card-footer {
            background-color: transparent;
            border-color: rgba(230, 230, 234, 0.08);
        }

        .form-control {
            background-color: #222436;
            border-color: #2e3148;
            color: var(--text-primary);
        }

        .form-control::placeholder {
            color: var(--text-muted);
        }

        .form-control:focus {
            background-color: #24263a;
            border-color: var(--accent);
            color: var(--text-primary);
            box-shadow: 0 0 0 .25rem rgba(56, 206, 60, .25);
        }

        .input-group-text {
            background-color: #24263a;
            border-color: #2e3148;
            color: var(--text-muted);
        }

        .form-check-label {
            color: var(--text-primary);
        }

        .btn-accent {
            background-color: var(--accent);
            border-color: var(--accent);
            color: #0d0d10;
        }

        .btn-accent:hover,
        .btn-accent:focus {
            background-color: #2fb934;
            border-color: #2fb934;
            color: #0d0d10;
        }

        .text-accent {
            color: var(--accent) !important;
        }

        .bg-accent {
            background-color: var(--accent) !important;
        }

        .text-alert {
            color: var(--alert) !important;
        }

        .bg-alert {
            background-color: var(--alert) !important;
        }

        .link-accent {
            color: var(--accent);
        }

        .link-accent:hover {
            color: #2fb934;
        }

        .offcanvas {
            background-color: var(--surface);
            color: var(--text-primary);
            border-right: 1px solid rgba(230, 230, 234, 0.08);
        }

        .offcanvas .nav-link {
            color: var(--text-primary);
        }

        .offcanvas .nav-link:hover {
            color: var(--accent);
        }

        footer {
            background-color: var(--surface);
            border-top: 1px solid rgba(230, 230, 234, 0.08);
            color: var(--text-muted);
        }
    </style>

</head>

<body>
    @php($hideChrome = View::hasSection('no_chrome'))
    <div class="d-flex flex-column min-vh-100">
        @unless ($hideChrome)
            <nav class="navbar navbar-expand-lg sticky-top">
                <div class="container-fluid">
                    <button class="btn btn-outline-light me-2" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#appSidebar" aria-controls="appSidebar">
                        <i class="bi bi-list"></i>
                    </button>
                    <a class="navbar-brand fw-semibold" href="#">PQC Dashboard</a>
                    <div class="d-flex align-items-center ms-auto">
                        <span class="navbar-text me-3">Monitoring</span>
                        <a class="btn btn-sm btn-accent" href="#">Action</a>
                    </div>
                </div>
            </nav>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="appSidebar" aria-labelledby="appSidebarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="appSidebarLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item"><a href="#" class="nav-link">Dashboard</a></li>
                        <li><a href="#" class="nav-link">Migrations</a></li>
                        <li><a href="#" class="nav-link">Compliance</a></li>
                        <li><a href="#" class="nav-link">Alerts</a></li>
                        <li><a href="#" class="nav-link">Settings</a></li>
                    </ul>
                </div>
            </div>
        @endunless
        <main class="flex-grow-1">
            @yield('content')
        </main>
        @unless ($hideChrome)
            <footer class="py-3">
                <div class="container d-flex justify-content-between align-items-center">
                    <small>© {{ date('Y') }} PQC Migration Monitoring</small>
                    <small class="text-accent">Secure by design</small>
                </div>
            </footer>
        @endunless
    </div>

</body>

</html>
