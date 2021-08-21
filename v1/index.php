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
      height: auto;
    }
  </style>
</head>
<body data-spy="scroll" data-target="#navigationBar" data-offset="20">

<div class="container-fluid">
  <div class="row">
    <nav class="col-sm-3 col-4 bg-dark" id="navigationBar">
      <ul class="nav nav-pills flex-column">
        <div class="text-white">
          Kenya Places API  {{BETA}}
        </div>
        <li class="nav-item">
          <a class="nav-link active" href="#background">Background / Introduction</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#responses">Responses</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="collapse" data-target="#endpointsdropdown" href="#">Endpoints</a>

          <div id="endpointsdropdown" class="collapse">
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
          <a class="nav-link" href="#contact">Reach Out/Contact</a>
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
          This is the documentation for the 'kenyaplacesapi'. Get the demographic units of Kenya as of the 2010 constitutional change to counties and it also includes former provinces where the demographic unit is located.
        </p>
      </div>

      <div id="responses">
        <h2>Responses</h2>
        <p>
          All responses are in <code>JSON</code> and are in the following structure:
          <p>
            <code>
              status_code: 000,<br>
              status_message_short: 'xxxxxxxxx',<br>
              status_message_description: 'xxxxxxxxxxxxxxxxxxxxx',<br>
              data: []
            </code>
          </p>

          <p>
            <b>
              The <code>status code</code> key in the JSON response bear the same meaning as normal HTTP status codes <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status" target="_blank">read more here</a>
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
                    [{},{}]
                  </code><br>
                  <code>
                    []
                  </code><br>
                  <code>null</code>
                </td>
              </tr>
            </tbody>
          </table>

        </p>
      </div>

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
          <code>County Code</code><br>
          <code>County Name</code><br>
          <code>County's Capital City</code><br>
          <code>Former Province Name</code><br>
          <code>Former Province Code</code>
        </p>
        <p>
          The format for a single entry of data is an object with a structure as below:<br>
          <code>
            {<br>
              "constituency_code": "0",<br>
              "constituency_name": "Xyz",<br>
              "county_code": "0",<br>
              "county_name": "Abc",<br>
              "capital_city": "Abc",<br>
              "former_province_name": "Def",<br>
              "former_province_code": "0.0"<br>
            }
          </code>
        </p>

        <p>To query the API for a specific constituency, get to read below</p>
      </div>

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
          <code>County Code</code><br>
          <code>County Name</code><br>
          <code>County's Capital City</code><br>
          <code>Former Province Name</code><br>
          <code>Former Province Code</code>
        </p>
        <p>
          The format for the data is a single object in the <code>data</code> key with a structure as below:<br>
          <code>
            {<br>
              "constituency_code": "0",<br>
              "constituency_name": "Xyz",<br>
              "county_code": "0",<br>
              "county_name": "Abc",<br>
              "capital_city": "Abc",<br>
              "former_province_name": "Def",<br>
              "former_province_code": "0.0"<br>
            }
          </code>
        </p>

        <p>To query the API for a specific county, get to read below</p>
      </div>

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
          <code>County's Capital City</code><br>
          <code>Former Province Name</code><br>
          <code>Former Province Code</code>
        </p>
        <p>
          The format for a single entry of data is an object with a structure as below:<br>
          <code>
            {<br>
              "county_code": "0",<br>
              "county_name": "Xyz",<br>
              "capital_city": "Abc",<br>
              "former_province_name": "Def",<br>
              "former_province_code": "0.0"<br>
            }
          </code>
        </p>

        <p>To query the API for a specific county, get to read below</p>
      </div>

      <div id="county">
        <h2>County</h2>
        <p>
          <code>URL: /v1/county/{id}</code>
        </p>
        <p>
          Supported Methods: <code>GET</code>
        </p>
        <p>
          This endpoint fetches a specific county. This requires an ID to be passed in the URL in the <code>{id}</code> section. The ID to be passed is the county code which is unique to all constituencies.
        </p>
        <p>
          Apart from the county code and county name, additional data provided are:<br>
          <code>Former Province Name</code><br>
          <code>Former Province Code</code>
        </p>
        <p>
          The format for the data is a single object in the <code>data</code> key with a structure as below:<br>
          <code>
            {<br>
              "county_code": "0",<br>
              "county_name": "Abc",<br>
              "capital_city": "Abc",<br>
              "former_province_name": "Def",<br>
              "former_province_code": "0.0"<br>
            }
          </code>
        </p>

        <p>To query the API for subcounties, get to read below</p>
      </div>

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
          <code>County's Name</code><br>
          <code>County's Capital City</code><br>
          <code>Former Province Name</code><br>
          <code>Former Province Code</code>
        </p>
        <p>
          The format for a single entry of data is an object with a structure as below:<br>
          <code>
            {<br>
              "subcounty_code": "0",<br>
              "subcounty_name": "Xyz",<br>
              "county_name": "Xyz",<br>
              "capital_city": "Abc",<br>
              "former_province_name": "Def",<br>
              "former_province_code": "0.0"<br>
            }
          </code>
        </p>

        <p>To query the API for a specific subcounty, get to read below</p>
      </div>

      <div id="subcounty">
        <h2>Sub County</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>

      <div id="postalcode">
        <h2>Postal Code</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>

      <div id="postalcodes">
        <h2>Postal Codes</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>

      <div id="province">
        <h2>Province</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>

      <div id="ward">
        <h2>Ward</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>

      <div id="wards">
        <h2>Wards</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>

      <div id="contact" class="pb-5" >

        <h2>Reach Out</h2>
        <p>Got some awesome suggestions or a comment? Fill in below to get to me with your message!!</p>
        <form class="col-sm-7 m-auto">

          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Fill in your name" name="fullname">
          </div>

          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>

          <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" id="message" class="form-control" placeholder="Your Message"></textarea>
          </div>

          <button type="submit" class="btn btn-primary form-control">Submit</button>
        </form>

        <div class="m-auto text-center">
          <p>You can also get me through the below avenues</p>
          <div class="col-sm-9 d-flex m-auto justify-content-around">
            <a href="https://fiverr.com/xlvisben" target="_blank">Fiverr</a>
            <a href="https://github.com/Xlvis" target="_blank">Github</a>
            <a href="https://elvisben.me.ke" target="_blank">Personal Website</a>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>

</body>

</html>
