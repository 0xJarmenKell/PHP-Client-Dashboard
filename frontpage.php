<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fassla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="./assets//Untitled-1-507-100x100.ico" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg gradiant" >
  <div class="container">
    <img src="./assets/Untitled-1-507-100x100.png" alt="logo">
    <a class="logo" href="index.php">Clients Dashbaord</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./clients.php">clients</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container table table-responsive spacing">
    <h1>Client Management System</h1><br>
    <table class="table table-striped table-bordered table-sm">
    <tbody>
      <?php include('./read.php');?>
    </tbody>
  </table>
    <form class="form-inline m-2" id="myForm" action="create.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" class="form-control m-2" id="name" name="name">
    <label for="email">email:</label>
    <input type="email" class="form-control m-2" id="email" name="email">
    <!-- <label for="msg" class="form-label">message</label>
    <textarea class="form-control" id="msg" rows="3"></textarea><br> -->
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>
<footer>
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>About Us</h2>
        <h4>Together, We can achieve anything</h4>
        <p>Fassla Is a Software house company that delivers best quality software</p>
      </div>
      <div class="col linked">
        <h2>Quick Links</h2>
          <ul style="list-style-type: none;">
            <li><a href="./frontpage.php" style="color: #fff; ">Home</a></li>
            <li><a href="./clients.php" style="color: #fff; ">Clients</a></li>
          </ul>
      </div>
      <div class="col">
        <h2>Contact Us</h2>
        <p><i class="fas fa-map-marker-alt px-2"></i>Makram ebdeid st, Above Aida’s kitchen, Nasr City, Egypt</p>
        <p><i class="fas fa-phone px-2"></i>+20 109 864 6860</p>
        <p><i class="fas fa-envelope px-2"></i> info@Fassla.com</p>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; 2024 Fassla | Developed by Youssef Yousry
    </div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
</script>
</body>
</html>