<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student App</title>
</head>
<body style="background-color:rgb(125, 141, 69)">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">RCSS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="student.php">Students</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <h1 style="font-size:40px;color: rgb(77, 22, 83);"><b><center>
        Student Details</center></b>
    </h1> 
    <table class="table">
        <tr>
            <td>Student Name</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Admission No</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Roll No</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>College</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Dept Name</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Dept Address</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Phone No</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Email Id</td>
            <td><input type="email" class="form-control">
            </td>
        </tr>
        <tr>
            <td>Date Of Birth</td>
            <td><input type="date" class="form-control"></td>
        </tr>
        <tr>
            <td>Education Qualification</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>User Name</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="Password" class="form-control"></td>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td><input type="Password" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn btn-info">Submit</button></td>
        </tr>
    </table>
</body>
</html>