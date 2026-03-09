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
    </style>

</head>

<body>
    <div class="min-vh-100">
        @yield('content')
    </div>

</body>

</html>
