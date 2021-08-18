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

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top shadow">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#background">Background</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#responses">Responses</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            API Endpoints
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#constituencies">Constituencies</a>
            <a class="dropdown-item" href="#constituency">Constituency</a>
            <a class="dropdown-item" href="#counties">Counties</a>
            <a class="dropdown-item" href="#county">County</a>
            <a class="dropdown-item" href="#subcounties">Sub-counties</a>
            <a class="dropdown-item" href="#subcounty">Sub-county</a>
            <a class="dropdown-item" href="#postalcode">Postal Code</a>
            <a class="dropdown-item" href="#postalcodes">Postal Codes</a>
            <a class="dropdown-item" href="#province">Province</a>
            <a class="dropdown-item" href="#provinces">Provinces</a>
            <a class="dropdown-item" href="#ward">Ward</a>
            <a class="dropdown-item" href="#wards">Wards</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#contact">Reach out</a>
        </li>
      </ul>
    </nav>

    <div id="background" class="container-fluid" style="padding-top:70px;">
      <h1> <u>Background</u> </h1>
      <p>
        A while back I was faced with a situation where I had to get data concerning places/locations in Kenya to implement an address of sorts for the checkout process of an e-commerce site. I immediately thought, yeap there is definitely an api for that, well I didn't get it.
      </p>
      <p>
        Well on the bright side, the data was there credits to <a href="https://github.com/njoguamos/kenya-demographics-units" target="_blank">this repo</a>, <a href="https://geo.mycyber.org/kenya" target="_blank">this site</a> and the Kenyan Wikipedia entry.
      </p>
      <p>
        So all I had to do was make it fit my project but then again it bugged my mind that this wasn't as readily available in form of an API which anyone can easily hook into their project. It was only available in as many webpages as there are demographic units.
      </p>
      <p>
        This took me about a week to develop it and a another for testing before launching the first version.
      </p>
    </div>

    <div id="responses" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
      <h1> <u>Responses</u> </h1>
      <p>
        All responses are in JSON format with the following structure:<br>
        <code>
          {<br>
            "status_code": 000,<br>
            "status_message_short": "XXXXXXX",<br>
            "status_message_description": "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX",<br>
            "data": []<br>
          }
        </code>

      </p>

    </div>

    <div id="endpoints" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
      <h1> <u>API endpoints</u> </h1>
      <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
      <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
    </div>

    <div id="constituencies" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
      <h2>Constituencies</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>

    <div id="constituency" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
      <h2>Constituency</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>

    <div id="counties" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
      <h2>Counties</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>

    <div id="county" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
      <h2>County</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>

    <div id="subcounties" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
      <h2>Sub-counties</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>

    <div id="subcounty" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
      <h2>Subcounty</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>

    <div id="postalcode" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
      <h2>Postal code</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>

    <div id="postalcodes" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
      <h2>Postal codes</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>

    <div id="subcounty" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
      <h2>Province</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>

    <div id="subcounty" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
      <h2>Provinces</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>

    <div id="ward" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
      <h2>Ward</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>

    <div id="wards" class="container-fluid" style="padding-top:70px;padding-bottom:70px">
      <h2>Wards</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>

    <div id="contact" class="col-sm-8 m-auto" style="padding-top:70px;padding-bottom:70px">

      <form class="container" action="index.html" method="post">
        Got something to add/say? type write in below!!
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Your email e.g example@example.com" name="email">
        </div>

        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Your name eg. John Doe" name="name">
        </div>

        <div class="form-group">
          <label for="message">Your Message:</label>
          <textarea name="name" class="form-control" id="message" placeholder="Your message"></textarea>
        </div>

        <input type="submit" class="btn btn-primary form-control" name="submit" value="SEND MESSAGE">

        <div class="container text-center">
          <p>
            You can also get me in the following:
          </p>

          <div class="d-flex justify-content-around">
            <a href="https://github.com/Xlvis" target="_blank">Github</a>
            <a href="https://elvisben.me.ke" target="_blank">My Website</a>
            <a href="https://fiverr.com/xlvisben" target="_blank">Fiverr</a>
          </div>

        </div>


      </form>
    </div>

</body>

</html>
