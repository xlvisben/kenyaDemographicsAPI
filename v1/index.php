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
    body {
      position: relative;
    }
    ul.nav-pills {
      top: 20px;
      position: fixed;
    }
    div.col-8 div {
      height: 500px;
    }
  </style>
</head>
<body data-spy="scroll" data-target="#navigationBar" data-offset="20">

<div class="container-fluid">
  <div class="row">
    <nav class="col-sm-3 col-4 bg-dark" id="navigationBar">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#background">Background / Introduction</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#responses">Responses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section3">Section 3</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Section 4</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#section41">Link 1</a>
            <a class="dropdown-item" href="#section42">Link 2</a>
          </div>
        </li>
      </ul>
    </nav>
    <div class="col-sm-9 col-8">
      <div id="background">
        <h1>Background</h1>
        <p>
          Sometime back, I was required to develop an address system of sorts for a checkout processs. The locations were to be Kenyan, immediately I was of the idea I will google and get some API. Well no.
        </p>
        <p>
          On the bright side the data was readily there and I got to use it but it bothered me that such wasn't readily available and one has to scour as many webpages as there are demographic units. <br>
        </p>
        <p>
          That led me to this side project, credits to <a href="https://github.com/njoguamos/kenya-demographics-units" target="_blank">this github repository</a>, <a href="https://geo.mycyber.org/kenya" target="_blank">this website</a> and Wikipedia entries of Kenya's demographic units for all the data
        </p>

        <p>
          This is the documentation for the 'kenyaplacesapi'. Get the demographic units of Kenya as of the 2010 constitutional change to counties.
        </p>
      </div>
      <div id="responses">
        <h1>Responses</h1>
        <p>
          The basic responses to the requests is:
          <code>
            
          </code>
        </p>
      </div>
      <div id="section3" class="bg-secondary">
        <h1>Section 3</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section41" class="bg-danger">
        <h1>Section 4-1</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section42" class="bg-info">
        <h1>Section 4-2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
    </div>
  </div>
</div>

</body>

</html>
