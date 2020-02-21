<?php $url = 'http://localhost/DIU_Blood_Center/admin/'; ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>


  <div class="row" hi>
    <div class="col-md-2">



      <div class="container">

        <div class="row">
          <div class="w3-sidebar w3-bar-block w3-light-grey w3-xxlarge" style="width:267px">
            <a href="<?php echo $url; ?>index.php" class="w3-bar-item w3-button"><i class="fa fa-home"><span style="color:#566573 ;  margin-left: 16px;font-size:25px;">Dashboard </span></i> </a>

            <a href="<?php echo $url; ?>donor/" class="w3-bar-item w3-button"><i class="fa fa-bars" aria-hidden="true"><span style="color:#566573 ;  margin-left: 16px;font-size:25px;">Donor List </span></i> </a>

            <a href="<?php echo $url; ?>donate/" class="w3-bar-item w3-button"><i class="fa fa-database"><span style="color:#566573 ;  margin-left: 16px;font-size:25px;">Donate Info. </span></i> </a>

            <a href="<?php echo $url; ?>donor/create.php" class="w3-bar-item w3-button"><i class="fa fa-plus-square" aria-hidden="true"><span style="color:#566573 ;  margin-left: 16px;font-size:25px;"> Add Donor Data </span></i> </a>



            <a href="<?php echo $url; ?>donate/create.php" class="w3-bar-item w3-button"><i class="fa fa-plus-square"><span style="color:#566573 ;  margin-left: 16px;font-size:25px;">Add Donate Data </span></i> </a>


          </div>
        </div>
      </div>
    </div>
    <div class="col-md-10">
      <br>

      <div class="card">
        <div class="card-body">