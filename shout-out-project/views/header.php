<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="http://jamies-shoutout-com.stackstaging.com/stylesheet.css">

    
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="http://jamies-shoutout-com.stackstaging.com/">Shout Out!</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="?page=timeline">Your Timeline</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?page=yourshouts">Your Shouts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?page=publicprofiles">Public Profiles</a>
        </li>
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <?php if ($_SESSION['id']) { ?>
                <a class="btn btn-outline-success my-2 my-sm-0" href="?function=logout">Logout</a>
            <?php } else { ?>
                <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#loginModal">Login/SignUp</button>
            <?php } ?>
        </div>
    </div>
    </nav>