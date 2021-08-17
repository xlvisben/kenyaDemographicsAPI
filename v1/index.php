<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kenya Demographics API</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <style>
    html, body{
      scroll-behavior: smooth;
    }
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#background">Background</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#responses">Responses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section3">Section 3</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#apiendpoints" id="navbardrop" data-toggle="dropdown">
            API Endpoints
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#constituencies">Constituencies</a>
            <a class="dropdown-item" href="#constituency">Constituency</a>
            <a class="dropdown-item" href="#section42">Counties</a>
            <a class="dropdown-item" href="#section42">County</a>
            <a class="dropdown-item" href="#section42">Sub-counties</a>
            <a class="dropdown-item" href="#section42">Sub-county</a>
            <a class="dropdown-item" href="#section42">Postal Code</a>
            <a class="dropdown-item" href="#section42">Postal Codes</a>
            <a class="dropdown-item" href="#section42">Province</a>
            <a class="dropdown-item" href="#section42">Provinces</a>
            <a class="dropdown-item" href="#section42">Ward</a>
            <a class="dropdown-item" href="#section42">Wards</a>
          </div>
        </li>
      </ul>
    </nav>

    <div id="background" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
      <h1> <u>Background</u> </h1>
      <p>
        A while back I was faced with a situation where I had to get data concerning places/locations in Kenya to implement an address of sorts for the checkout process of an e-commerce site. I immediately thought, yeap there is definitely an api for that, well I didn't get it.
      </p>
      <p>
        Well on the bright side, the data was there credits to <a href="https://github.com/njoguamos/kenya-demographics-units">this repo</a> and the Kenyan Wikipedia entry. So all I had to do was make it fit my project but then again it bugged my mind that this wasn't as readily available in form of an API which anyone can easily hook into their project.
      </p>
      <p>
        This took me about a week to develop it and a month of testing before launching the first version.
      </p>
    </div>

    <div id="responses" class="container-fluid" style="padding-bottom:70px">
      <h1> <u>Responses</u> </h1>
      <p>
        All responses are in <code>JSON</code>
      </p>

    </div>

    <div id="section3" class="container-fluid bg-secondary" style="padding-top:70px;padding-bottom:70px">
      <h1> <u>API endpoints</u> </h1>
      <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
      <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
    </div>

    <div id="section41" class="container-fluid bg-danger" style="padding-top:70px;padding-bottom:70px">
      <h1>Section 4 Submenu 1</h1>
      <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
      <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
    </div>

    <div id="section42" class="container-fluid bg-info" style="padding-top:70px;padding-bottom:70px">
      <h1>Section 4 Submenu 2</h1>
      <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
      <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
    </div>

</body>

</html>
