<!DOCTYPE html>
<html>
<head>
    <title>UTS Perbaikan 224520019</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #f1f5f9;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            position: fixed;
            background: linear-gradient(180deg, #0d6efd, #6610f2);
            color: white;
            padding: 20px;
        }

        .sidebar h4 {
            font-weight: bold;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin: 15px 0;
        }

        .sidebar a:hover {
            opacity: 0.7;
        }

        .main {
            margin-left: 220px;
            padding: 20px;
        }

        .card-box {
            border-radius: 15px;
            padding: 20px;
            color: white;
        }

        .card-blue { background: #0d6efd; }
        .card-green { background: #198754; }
        .card-orange { background: #fd7e14; }

        .vehicle-card {
            border-radius: 15px;
            padding: 15px;
            background: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .vehicle-card:hover {
            transform: scale(1.03);
        }

        .floating-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            font-size: 25px;
        }
    </style>
</head>

<body>

<div class="sidebar">
    <h4>🚗 E-Bengkel</h4>
    <hr>
    <a href="/kendaraan"><i class="bi bi-car-front"></i> Data Kendaraan</a>
</div>

<div class="main">
    @yield('content')
</div>

</body>
</html>