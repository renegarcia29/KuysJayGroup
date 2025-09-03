<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Biography' }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f5dc; /* Beige background */
            font-family: Arial, sans-serif;
            color: #2c2c2c;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
        }

        footer {
            background: #5a4634; 
            color: #f5f5dc; 
            text-align: center;
            padding: 15px;
            margin-top: auto;
            font-size: 14px;
        }

        .profile-card {
            width: 500px;
            margin: 50px auto;
            border-radius: 15px;
            overflow: hidden;
            background: #fffaf0; 
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .banner {
            height: 160px;
            position: relative;
            background-image: url('{{ asset('pictures/cat.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        .avatar {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            border: 4px solid #fffaf0;
            position: absolute;
            bottom: -55px;
            left: 30px;
            background-size: cover;
            background-position: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }

        .content {
            padding: 70px 25px 25px;
        }

        .content h2 {
            font-weight: bold;
            color: #5a4634; 
        }

        .content h4, .content h5 {
            color: #8b6f47; 
        }

        .content p, .content ul {
            color: #3a2e2e;
        }

        hr {
            border: 0;
            border-top: 2px solid #d2b48c; 
            margin: 15px 0;
        }
    </style>
</head>
<body>

    <div class="main-content">
        {{ $slot }}
    </div>

    <footer>
        <p> 2025 Our Biography Project | Designed with in Laravel</p>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
