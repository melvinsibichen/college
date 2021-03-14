<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MARIAN COLLEGE KUTTIKANAM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about us.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="department.php">Academics</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Quick Links
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="gallery.php">Photo Gallery</a></li>
              <li><a class="dropdown-item" href="signup.php">Sign Up</a></li>
              <li><a class="dropdown-item" href="sign in.php">Sign In</a></li>              
              <li><a class="dropdown-item" href="">Moodle</a></li>
              <li><a class="dropdown-item" href="">Federna</a></li>
              <li><a class="dropdown-item" href="">Exam Registration</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">IQAC</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contact.php">Contact Us</a>
          </li>
          
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
 <marquee style="background-color: black;color: aliceblue;"><i>Admissions are open for undergraduate cources (2020-22)</i></marquee>                               
<body>
    <h1><center>SIGN UP</h1></center>
    <div class="container">
        <div class="row">
            <div class="column col col-12 col-sm 4 col-md 4 col-lg 6 col-xl 12 col-xxl 12"></div>
        </div>
    </div>
    <table class="table table-borderless">
        <tr>
            <td>NAME</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>COURCE</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>DOB</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>PHONE NO</td>
            <td><input type="text" class="form-control">
            </td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="password" class="form-control"></td>
        </tr>
        <tr>
            <td> CONFIRM PASSWORD</td>
            <td><input type="password" class="form-control"></td>
        </tr>
        <tr>
        <td></td>
        <td><button class="btn btn-outline-success">SUBMIT</button></td>
        </tr>


    </table>
</body>
</html>