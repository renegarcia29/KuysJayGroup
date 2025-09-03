<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cards Example</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      margin: 0;
      padding: 20px;
    }

    .card-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.3s ease;
      text-align: center;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card img {
      width: 100%;
      height: 300px;
      object-fit: cover;
    }

    .card h3 {
      margin: 15px 0 10px;
      font-size: 1.2rem;
      color: #333;
    }

    .card p {
      font-size: 0.9rem;
      color: #666;
      padding: 0 15px 15px;
    }

    .card a {
      display: inline-block;
      margin: 10px 0 20px;
      padding: 10px 20px;
      background: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 8px;
      transition: background 0.3s;
    }

    .card a:hover {
    background: #0056b3;  /* darker blue */
    transform: scale(1.05); /* slight zoom effect */
    }
  </style>
</head>
<body>
  <h1 style="text-align:center; margin-bottom:20px;">Our Autobiography Links</h1>
  <div class="card-container">
    
    <div class="card">
      <img src="autobiography/jacen.jpg" alt="Image 1">
      <h3>Jacen Luke A. Cielos</h3>
      <p>:D</p>
      <a href="">Visit</a>
    </div>

    <div class="card">
      <img src="images/profilejake.jpg" alt="Image 2">
      <h3>Card Title 2</h3>
      <p>Short description for card 2.</p>
      <a href="">Visit </a>
    </div>

    <div class="card">
      <img src="image3.jpg" alt="Image 3">
      <h3>Card Title 3</h3>
      <p>Short description for card 3.</p>
      <a href="#">Visit</a>
    </div>

    <div class="card">
      <img src="image4.jpg" alt="Image 4">
      <h3>Card Title 4</h3>
      <p>Short description for card 4.</p>
      <a href="#">Visit</a>
    </div>

     <div class="main-content">
        

        <footer>
            <p>&copy; <?php echo e(date('Y')); ?> Our Biography Project | Designed with ❤️ using Laravel & Bootstrap</p>
        </footer>
    </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\myapp\resources\views/layout.blade.php ENDPATH**/ ?>