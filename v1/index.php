<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kenya Demographics API</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/custom.min.css">
  <link rel="icon" type="image/png" href="assets/images/logo.png">
  <script defer src="assets/js/jquery.min.js"></script>
  <script defer src="assets/js/popper.min.js"></script>
  <script defer src="assets/js/bootstrap.min.js"></script>
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
      height: auto;
    }
    #endpointsdropdown > a > span:hover{
      color: #000;
    }
  </style>
</head>
<body data-spy="scroll" data-target="#navigationBar" data-offset="20">

<div class="container-fluid">
  <div class="row">
    <div class="navigation-mobile">
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" id="navigationBar">
        <div class="nav-title">
          <p>KenyaPlacesApi</p>
          <div class="hamburger-menu">
            <span></span>
            <span></span>
          </div>
        </div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="#background">Background</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#responses">Responses</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="collapse" data-target="#endpointsdropdown" href="#">Endpoints</a>

            <div id="endpointsdropdown" class="collapse">

              <a class="dropdown-item" href="#constituencies">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Constituencies
                </span>
              </a>

              <a class="dropdown-item" href="#constituency">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Constituency
                </span>
              </a>

              <a class="dropdown-item" href="#counties">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Counties
                </span>
              </a>

              <a class="dropdown-item" href="#county">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  County
                </span>
              </a>

              <a class="dropdown-item" href="#subcounties">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Sub-counties
                </span>
              </a>

              <a class="dropdown-item" href="#subcounty">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Sub-county
                </span>
              </a>

              <a class="dropdown-item" href="#postalcodes">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Postal Codes
                </span>
              </a>

              <a class="dropdown-item" href="#postalcode">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Postal Code
                </span>
              </a>

              <a class="dropdown-item" href="#province">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Province
                </span>
              </a>

              <a class="dropdown-item" href="#provinces">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Provinces
                </span>
              </a>

              <a class="dropdown-item" href="#ward">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Ward
                </span>
              </a>

              <a class="dropdown-item" href="#wards">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Wards
                </span>
              </a>

            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>

        </ul>
      </nav>
    </div>

    <div class="navigation-desktop col-sm-3 col-4 bg-dark">
      <nav class="col-sm-3 col-4 bg-dark" id="navigationBar">
        <ul class="nav nav-pills flex-column">
          <div class="text-center">
            <img src="assets/images/logo.png" style="filter:invert(1);" width="50px" height="50px" alt="Logo of Kenya Demographics API">
          </div>
          <div class="text-white">
            Kenya Demographics API
          </div>
          <li class="nav-item">
            <a class="nav-link active text-white" href="#background">Background / Introduction</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="#responses">Responses</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" data-toggle="collapse" data-target="#endpointsdropdown" href="#">Endpoints</a>

            <div id="endpointsdropdown" class="collapse">
              <a class="dropdown-item text-white" href="#constituencies">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Constituencies
                </span>
              </a>
              <a class="dropdown-item text-white" href="#constituency">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Constituency
                </span>
              </a>
              <a class="dropdown-item text-white" href="#counties">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Counties
                </span>
              </a>
              <a class="dropdown-item text-white" href="#county">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  County
                </span>
              </a>
              <a class="dropdown-item text-white" href="#subcounties">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Sub-counties
                </span>
              </a>
              <a class="dropdown-item text-white" href="#subcounty">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Sub-county
                </span>
              </a>
              <a class="dropdown-item text-white" href="#postalcodes">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Postal Codes
                </span>
              </a>
              <a class="dropdown-item text-white" href="#postalcode">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Postal Code
                </span>
              </a>
              <a class="dropdown-item text-white" href="#province">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Province
                </span>
              </a>
              <a class="dropdown-item text-white" href="#provinces">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Provinces
                </span>
              </a>
              <a class="dropdown-item text-white" href="#ward">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Ward
                </span>
              </a>
              <a class="dropdown-item text-white" href="#wards">
                <span data-toggle="collapse" data-target="#endpointsdropdown">
                  Wards
                </span>
              </a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="#contact">Reach Out/Contact</a>
          </li>
        </ul>

      </nav>
    </div>

    <div class="col-sm-9 col-8" id="content">
      <?php
        if (isset($_SESSION['mail_succeed'])) {
      ?>
        <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> Gotten the email! Will reply soonest possible.
        </div>
      <?php
      unset($_SESSION['mail_succeed']);
      }else if(isset($_SESSION['mail_fail'])) {
      ?>
      <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Mail sending failed please retry</strong>
      </div>
      <?php
      unset($_SESSION['mail_fail']);
      }
      ?>

      <div id="background">
        <h1>Background</h1>
        <p>
          Sometime back, I was required to develop an address system of sorts for a checkout processs. The locations were to be Kenyan, immediately I was of the idea I will google and get some API. Well no.
        </p>
        <p>
          On the bright side the data was readily there and I got to use it but it bothered me that it wasn't readily available in a format to be consumed almost immediately and one has to scour as many webpages as there are demographic units. <br>
        </p>
        <p>
          That led me to this side project, credits to <a href="https://github.com/njoguamos/kenya-demographics-units" target="_blank">this github repository</a>, <a href="https://geo.mycyber.org/kenya" target="_blank">this website</a> and Wikipedia entries of Kenya's demographic units for all the data
        </p>

        <p>
          This is the documentation for the 'kenyademographicsapi'. Get the demographic units of Kenya as of the 2010 constitution. The github link to it is <a href="https://github.com/xlvisben/kenyaDemographicsAPI" target="_blank">here</a><br>
          The demographic units included are:
          <ul>
            <li>Constituencies</li>
            <li>Counties</li>
            <li>Subounties</li>
            <li>Former provinces - for the case of counties</li>
            <li>Wards</li>
            <li>Postal Codes</li>
          </ul>
          There are additional information in other separate fields when a single demographic
          unit is queried e.g for counties there is also former province information.<br>

          Get to know the general nature of responses below...

        </p>
      </div>

      <hr>

      <div id="responses">
        <h2>Responses</h2>
        <p>
          All responses are in <code>JSON</code> and are in the following structure:
          <p>
            <code>
              <ul style="list-style-type:none">
                <li>status_code: 000,</li>
                <li>status_message_short: 'xxxxxxxxx',</li>
                <li>status_code: 000,</li>
                <li>status_message_description: 'xxxxxxxxxxxxxxxxxxxxx',</li>
                <li>data: [],</li>
              </ul>

            </code>
          </p>
          <p>
            <b>
              The <code>status_code</code> key in the JSON response bear the same meaning as normal HTTP status codes <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status" target="_blank">read more here</a>
            </b>
          </p>

          <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th>JSON Field</th>
                <th>Possible Values</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <code>status_code</code>
                </td>
                <td>
                  <code>200</code><br>
                  <code>204</code><br>
                  <code>400</code><br>
                  <code>405</code><br>
                  <code>500</code>
                </td>
              </tr>
              <tr>
                <td>
                  <code>status_message_short</code>
                </td>
                <td>
                  Success<br>
                  No Content<br>
                  Bad request<br>
                  Method not allowed<br>
                  Internal Server Error
                </td>
              </tr>
              <tr>
                <td>
                  <code>status_message_description</code>
                </td>
                <td>
                  <code>
                    <b>
                      *This key carries a variety of values based on the request made to the API
                    </b>

                  </code>
                </td>
              </tr>
              <tr>
                <td>
                  <code>data</code>
                </td>
                <td>
                  <code>
                    <b>*An array containing single or multiple objects:</b>
                    [{},{}]
                  </code><br>
                  <code>
                    <b>*An empty array:</b>
                    []
                  </code><br>
                  <code>null</code>
                </td>
              </tr>
            </tbody>
          </table>

        </p>
      </div>

      <hr>

      <div id="constituencies">
        <h2>Constituencies</h2>
        <p>
          <code>URL: /v1/constituencies</code>
        </p>
        <p>
          Supported Methods: <code>GET</code>
        </p>
        <p>
          This endpoint fetches all constituencies present.
        </p>
        <p>
          Apart from the constituency code and constituency name, additional data provided are:<br>
          <code>
            <ul style="list-style-type:none">
              <li>County Code</li>
              <li>County Name</li>
              <li>County's Capital City</li>
              <li>Former Province Name</li>
              <li>Former Province Code</li>
            </ul>
          </code>
        </p>
        <p>
          The format for a single entry of data is an object with a structure as below:<br>
          <code>
            {
              <ul style="list-style-type:none">
                <li>"constituency_code": "0",</li>
                <li>"constituency_name": "Xyz",</li>
                <li>"county_code": "0",</li>
                <li>"county_name": "Abc",</li>
                <li>"capital_city": "Abc",</li>
                <li>"former_province_name": "Def",</li>
                <li>""former_province_code": "0.0"</li>
              </ul>
            }
          </code>
        </p>

        <p>To query the API for a specific constituency, get to read below..</p>
      </div>

      <hr>

      <div id="constituency">
        <h2>Constituencies</h2>
        <p>
          <code>URL: /v1/constituency/{id}</code>
        </p>
        <p>
          Supported Methods: <code>GET</code>
        </p>
        <p>
          This endpoint fetches a specific constituency. This requires an ID to be passed in the URL in the <code>{id}</code> section. The ID to be passed is the constituency code which is unique to all constituencies.
        </p>
        <p>
          Apart from the constituency code and constituency name, additional data provided are:<br>

          <code>
            <ul style="list-style-type:none">
              <li>County Code</li>
              <li>County Name</li>
              <li>County's Capital City</li>
              <li>Former Province Name</li>
              <li>Former Province Code</li>
            </ul>
          </code>

        </p>
        <p>
          The format for the data is a single object in the <code>data</code> key with a structure as below:<br>
          <code>
            {
              <ul style="list-style-type:none">
                <li>"constituency_code": "0",</li>
                <li>"constituency_name": "Xyz",</li>
                <li>"county_code": "0",</li>
                <li>"county_name": "Abc",</li>
                <li>"capital_city": "Abc",</li>
                <li>"former_province_name": "Def",</li>
                <li>""former_province_code": "0.0"</li>
              </ul>
            }
          </code>
        </p>

        <p>To query the API for a specific county, get to read below</p>
      </div>

      <hr>

      <div id="counties">
        <h2>Counties</h2>
        <p>
          <code>URL: /v1/counties</code>
        </p>
        <p>
          Supported Methods: <code>GET</code>
        </p>
        <p>
          This endpoint fetches all counties present.
        </p>
        <p>
          Apart from the county code and county name, additional data provided are:<br>
          <code>
            <ul style="list-style-type:none">
              <li>County's Capital City</li>
              <li>Former Province Name</li>
              <li>Former Province Code</li>
            </ul>
          </code>

        </p>
        <p>
          The format for a single entry of data is an object with a structure as below:<br>
          <code>
            {
              <ul style="list-style-type:none">
                <li>"county_code": "0",</li>
                <li>"county_name": "Xyz",</li>
                <li>"capital_city": "Abc",</li>
                <li>"former_province_name": "Def",</li>
                <li>"former_province_code": "0.0"</li>
              </ul>
            }
          </code>
        </p>

        <p>To query the API for a specific county, get to read below...</p>
      </div>

      <hr>

      <div id="county">
        <h2>County</h2>
        <p>
          <code>URL: /v1/county/{id}</code>
        </p>
        <p>
          Supported Methods: <code>GET</code>
        </p>
        <p>
          This endpoint fetches a specific county. This requires an ID to be passed in the URL in the <code>{id}</code> section. The ID to be passed is the county code which is unique to all counties.
        </p>
        <p>
          Apart from the county code and county name, additional data provided are:<br>
          <code>
            <ul style="list-style-type:none">
              <li>County's Capital City</li>
              <li>Former Province Name</li>
              <li>Former Province Code</li>
            </ul>
          </code>

        </p>
        <p>
          The format for the data is a single object in the <code>data</code> key with a structure as below:<br>
          <code>
            {
              <ul style="list-style-type:none">
                <li>"county_code": "0",</li>
                <li>"county_name": "Abc",</li>
                <li>"capital_city": "Abc",</li>
                <li>"former_province_name": "Def",</li>
                <li>"former_province_code": "0.0"</li>
              </ul>
            }
          </code>
        </p>

        <p>To query the API for subcounties, get to read below...</p>
      </div>

      <hr>

      <div id="subcounties">
        <h2>Sub Counties</h2>
        <p>
          <code>URL: /v1/subcounties</code>
        </p>
        <p>
          Supported Methods: <code>GET</code>
        </p>
        <p>
          This endpoint fetches all subcounties present.
        </p>
        <p>
          Apart from the subcounty code and subcounty name, additional data provided are:<br>
          <code>
            <ul style="list-style-type:none">
              <li>County's Name</li>
              <li>County's Capital City</li>
              <li>Former Province Name</li>
              <li>Former Province Code</li>
            </ul>
          </code>
        </p>
        <p>
          The format for a single entry of data is an object with a structure as below:<br>
          <code>
            {
              <ul style="list-style-type:none">
                <li>"subcounty_code": "0",</li>
                <li>"subcounty_name": "Xyz",</li>
                <li>"county_name": "Xyz",</li>
                <li>"capital_city": "Abc",</li>
                <li>"former_province_name": "Def",</li>
                <li>"former_province_code": "0.0"</li>
              </ul>
            }
          </code>
        </p>

        <p>To query the API for a specific subcounty, get to read below...</p>
      </div>

      <hr>

      <div id="subcounty">
        <h2>Subcounty</h2>
        <p>
          <code>URL: /v1/subcounty/{id}</code>
        </p>
        <p>
          Supported Methods: <code>GET</code>
        </p>
        <p>
          This endpoint fetches a specific subcounty. This requires an ID to be passed in the URL in the <code>{id}</code> section. The ID to be passed is the sub county code which is unique to all subcounties.
        </p>
        <p>
          Apart from the subcounty code and subcounty name, additional data provided are:<br>
          <code>
            <ul style="list-style-type:none">
              <li>County's Capital City</li>
              <li>County's Name</li>
              <li>Former Province Name</li>
              <li>Former Province Code</li>
            </ul>
          </code>

        </p>
        <p>
          The format for the data is a single object in the <code>data</code> key with a structure as below:<br>
          <code>
            {
              <ul style="list-style-type:none">
                <li>"subcounty_code": "0",</li>
                <li>"subcounty_name": "Abc",</li>
                <li>"county_name": "Abc",</li>
                <li>"capital_city": "Abc",</li>
                <li>"former_province_name": "Def",</li>
                <li>"former_province_code": "0.0"</li>
              </ul>
            }
          </code>
        </p>

        <p>To query the API for postal codes, get to read below...</p>
      </div>

      <hr>

      <div id="postalcodes">
        <h2>Postal Codes</h2>
        <p>
          <code>URL: /v1/postalcodes</code>
        </p>
        <p>
          Supported Methods: <code>GET</code>
        </p>
        <p>
          This endpoint fetches all subcounties present.
        </p>
        <p>
          Apart from the postal code and office name, additional data provided are:<br>
          <code>
            <ul style="list-style-type:none">
              <li>County Name</li>
            </ul>
          </code>
        </p>
        <p>
          The format for a single entry of data is an object with a structure as below:<br>
          <code>
            {
              <ul style="list-style-type:none">
                <li>"postal_code": "00000",</li>
                <li>"office": "Xyz",</li>
                <li>"county_name": "Xyz",</li>
              </ul>
            }
          </code>
        </p>

        <p>To query the API for a specific postal code, get to read below...</p>
      </div>

      <hr>

      <div id="postalcode">
        <h2>Postal Code</h2>
        <p>
          <code>URL: /v1/postalcode/{postalcode}</code>
        </p>
        <p>
          Supported Methods: <code>GET</code>
        </p>
        <p>
          This endpoint fetches a specific postal code present through the <code>{postalcode}</code> provided in the URL.
        </p>

        <p>
          The format for a single entry of data is an object with a structure as below:<br>
          <code>
            {
              <ul style="list-style-type:none">
                <li>"postal_code": "00000",</li>
                <li>"office": "Xyz"</li>
              </ul>
            }
          </code>
        </p>

        <p>To query the API for a former province, get to read below...</p>
      </div>

      <hr>

      <div id="province">
        <h2>Province</h2>
        <p>
          <code>URL: /v1/province/{province_id}</code>
        </p>
        <p>
          Supported Methods: <code>GET</code>
        </p>
        <p>
          This endpoint fetches a specific province. This requires a province code to be supplied in the URL in the <code>{province_id}</code> section. The province code which is unique to all former provinces.
        </p>
        <p>
          Apart from the county code and county name, additional data provided are:<br>
          <code>
            <ul style="list-style-type:none">
              <li>Former Province Name</li>
              <li>Former Province Code</li>
            </ul>
          </code>

        </p>
        <p>
          The format for the data is a single object in the <code>data</code> key with a structure as below:<br>
          <code>
            {
              <ul style="list-style-type:none">
                <li>"former_province_name": "Def",</li>
                <li>"former_province_code": "0.0"</li>
              </ul>
            }
          </code>
        </p>

        <p>To query the API for former provinces, get to read below...</p>
      </div>

      <hr>

      <div id="provinces">
        <h2>Provinces</h2>
        <p>
          <code>URL: /v1/provinces</code>
        </p>
        <p>
          Supported Methods: <code>GET</code>
        </p>
        <p>
          This endpoint fetches all former provinces present.
        </p>

        <p>
          The format for a single entry of data is an object with a structure as below:<br>
          <code>
            {
              <ul style="list-style-type:none">
                <li>"former_province_name": "Def",</li>
                <li>"former_province_code": "0.0"</li>
              </ul>
            }
          </code>
        </p>

        <p>To query the API for a specific ward, get to read below...</p>
      </div>

      <hr>

      <div id="ward">
        <h2>Ward</h2>
        <p>
          <code>URL: /v1/ward/{id}</code>
        </p>
        <p>
          Supported Methods: <code>GET</code>
        </p>
        <p>
          This endpoint fetches a specific ward. This requires an ID to be passed in the URL in the <code>{id}</code> section. The ID to be passed is the ward code which is unique to all wards.
        </p>
        <p>
          Apart from the ward code and ward name, additional data provided are:<br>
          <code>
            <ul style="list-style-type:none">
              <li>Constituency Code</li>
              <li>Constituency Name</li>
              <li>County's Code</li>
              <li>County's Capital City</li>
              <li>County's Name</li>
              <li>Former Province Name</li>
              <li>Former Province Code</li>
            </ul>
          </code>

        </p>
        <p>
          The format for the data is a single object in the <code>data</code> key with a structure as below:<br>
          <code>
            {
              <ul style="list-style-type:none">
                <li>"ward_code": "0",</li>
                <li>"ward_name": "Abc",</li>
                <li>"constituency_code": "0",</li>
                <li>"constituency_name": "0",</li>
                <li>"county_code": "0",</li>
                <li>"county_name": "Abc",</li>
                <li>"capital_city": "Abc",</li>
                <li>"former_province_name": "Def",</li>
                <li>"former_province_code": "0.0"</li>
              </ul>
            }
          </code>
        </p>

        <p>To query the API for wards, get to read below...</p>
      </div>

      <hr>

      <div id="wards">
        <h2>Wards</h2>
        <p>
          <code>URL: /v1/wards</code>
        </p>
        <p>
          Supported Methods: <code>GET</code>
        </p>
        <p>
          This endpoint fetches all counties present.
        </p>
        <p>
          Apart from the ward code and ward name, additional data provided are:<br>
          <code>
            <ul style="list-style-type:none">
              <li>Constituency Code</li>
              <li>Constituency Name</li>
              <li>County's Code</li>
              <li>County's Capital City</li>
              <li>County's Name</li>
              <li>Former Province Name</li>
              <li>Former Province Code</li>
            </ul>
          </code>

        </p>
        <p>
          The format for a single entry of data is an object with a structure as below:<br>
          <code>
              {
                <ul style="list-style-type:none">
                  <li>"ward_code": "0",</li>
                  <li>"ward_name": "Abc",</li>
                  <li>"constituency_code": "0",</li>
                  <li>"constituency_name": "0",</li>
                  <li>"county_code": "0",</li>
                  <li>"county_name": "Abc",</li>
                  <li>"capital_city": "Abc",</li>
                  <li>"former_province_name": "Def",</li>
                  <li>"former_province_code": "0.0"</li>
                </ul>
              }
          </code>
        </p>

        <p>And those are the available endpoints, got something to share just scroll a little...</p>
      </div>

      <hr>

      <div id="contact" class="pb-5" >

        <h2>Reach Out</h2>
        <p>Got some awesome suggestions or a comment? Fill in below to get to me with your message!!</p>
        <form action="sendemail" class="col-sm-7 m-auto" method="post">

          <div class="form-group">
            <label for="name">Name*:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Fill in your name" name="fullname">
          </div>

          <div class="form-group">
            <label for="email">Email*:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" name="email">
          </div>

          <div class="form-group">
            <label for="message">Message*:</label>
            <textarea name="message" id="message" class="form-control" name="message" placeholder="Your Message"></textarea>
          </div>

          <button type="submit" class="btn btn-primary form-control">Submit</button>
        </form>
        <hr>

        <div class="m-auto text-center">
          Credits to <a href="https://github.com/MusikuAustin" target="_blank">Austin</a> for the front-end design<br>
          You can also get me through the below avenues
          <div class="col-sm-9 d-flex m-auto justify-content-around">
            <a href="https://fiverr.com/xlvisben" target="_blank">Fiverr</a>
            <a href="https://github.com/xlvisben" target="_blank">Github</a>
            <a href="https://elvisben.me.ke" target="_blank">Personal Website</a>
            <a href="https://t.me/xlvisben" target="_blank">Telegram</a>
          </div>
        </div>

        <div class="text-center container" style="position:sticky;top:95%;">
          &copy; 2021 - <a href="mailto:hello@elvisben.me.ke?subject=Documentation%20On%20Kenya%20Demographics%20API">Elvis Ben</a>
        </div>

      </div>

    </div>
  </div>
</div>

</body>
<script>
  let dropdownItems = Array.from(document.querySelectorAll('.dropdown-item'));
  let navLinks = Array.from(document.querySelectorAll('.nav-link'))
                      .filter(btn => !btn.classList.contains('dropdown-toggle') );
  const navigationButtons = [...dropdownItems, ...navLinks];
  const navItems = document.querySelector('.navbar-nav');
  const hamburgerMenu = document.querySelector('.hamburger-menu');


  const toggleNav = () => {
    navItems.classList.toggle('active');
    hamburgerMenu.classList.toggle('active');
  }

  hamburgerMenu.addEventListener('click', toggleNav);
  navigationButtons.forEach(btn => {
    btn.addEventListener('click', toggleNav);
  })
</script>
</html>
