<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Health Camp</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
  <body>
    <nav class="navbar navbar-fixed-top navbar-toggleable-sm navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="#home" class="navbar-left" id="logo-name">
            <img src="img/logo.png" width="70" height="50" style="padding:10px 0"> 
            Health Camp</a>
          <a class="navbar-toggle" data-toggle="collapse" data-target="#nav-collapse"></a>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="nav-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#home" id="home-link">Home</a></li>
            <li><a href="#demo-header" id="demo-link">Demographics</a></li>
            <li><a href="#vitals-header" id="vitals-link">Health Vitals</a></li>
            <li><a href="#reports-header" id="reports-link">Reports</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="add-on text-center col-12" id="home">
      <h1>WELCOME</h1>
      <div class="" id="home-msg">
        <a href="#demo" id="scroll">Scroll Down<br>
          <span><i class="fa fa-angle-down fa-5x" aria-hidden="true"></i></span></a>
      </div>
    </section>

    <div class="col-12" id="demo-header">
      <div>
        <h1>DEMOGRAPHICS</h1>
      </div>
    </div>

    <section class="add-on" id="demo">
      <div class="container">
        <div class="row" id="row-one">
          <div class="col-sm-6 hosp-msg">
            <h2>Demography</h2>
            <hr>
            <p>There are about 7.6 billion people in this world and we thrive to provide medical help to as
              many people as we could. People's health is our top priority. We study the statistical characterictic of people
              population and work as a group to meet their medical needs at lowest cost possible.
            </p>
            <hr>
            <div id="vid-div">
              <video id="video" width="200" height="150">Video stream not available.</video><br>
              <button type="button" class="btn btn-success btn-xs" id="snap">Snap</button>
              <button type="button" class="btn btn-danger btn-xs" id="cancel-vid">Cancel</button>
            </div><br>
          </div>
          <form class="col-sm-6 form-horizontal" id="form1">
            <div class="form-group">
              <label for="firstname" class="col-sm-3 control-label">First Name:</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" id="fname" placeholder="Enter your firstname">
              </div>
            </div>
            <div class="form-group">
              <label for="lastname" class="col-sm-3 control-label">Last Name:</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" id="lname" name="lastname" placeholder="Enter your lastname">
              </div>
            </div>
            <div class="form-group">
              <label for="gender" class="col-sm-3 control-label">Gender:</label>
              <div class="col-sm-5">
                <select class="custom-select form-control" id="gender-select">
                  <option selected>---</option>
                  <option value="M">Male</option>
                  <option value="F">Female</option>
                  <option value="O">Others</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="age" class="col-sm-3 control-label">Age:</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" name="age" id="age" placeholder="Enter your age">
              </div>
            </div>
            <div class="form-group">
              <label for="details" class="col-sm-3 control-label">Notes or other details:</label>
              <div class="col-sm-5">
                <textarea name="address" rows="2" cols="50"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="image" class="col-sm-3 control-label">Photo:</label>
              <button type="button" class="btn btn-primary btn-xs" id="vid-cap">Take a Picture</button>
              <div class="col-sm-12" id="canvas-div">
                <canvas id="canvas" width="200" height="150" class="col-sm-offset-3">
                  <img id="photo">
                </canvas>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-4 col-sm-5">
                <button id="demo-save" type="submit" class="btn btn-success">Save</button>
                <button type="reset" class="btn btn-danger" id="reset">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

    <div class="row" id="attr">
      <div class="col-12">
        <div class="col-xs-6 col-md-3 text-center">
          <span class="numbers">100+</span><br>
          Heart Surgeries
        </div>
        <div class="col-sm-6 col-md-3 text-center">
          <span class="numbers">70+</span><br>
          Doctors
        </div>
        <div class="col-sm-6 col-md-3 text-center">
          <span class="numbers">40+</span><br>
          Neural Surgeries
        </div>
        <div class="col-sm-6 col-md-3 text-center">
          <span class="numbers">2500+</span><br>
          Medicines
        </div>
      </div>
    </div>

    <div class="col-12" id="vitals-header">
      <div>
        <h1>VITALS</h1>
      </div>
    </div>

    <section class="add-on" id="vitals">
      <div class="container">
        <div class="row" id="row-two">
          <form class="col-sm-6 form-horizontal" id="form2">
            <div class="form-group">
              <label for="height" class="col-sm-3 control-label">Height:</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" id="height" placeholder="Enter your height">
              </div>
            </div>
            <div class="form-group">
              <label for="weight" class="col-sm-3 control-label">Weight:</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" id="weight" placeholder="Enter your weight">
              </div>
            </div>
            <div class="form-group">
              <label for="body-temp" class="col-sm-3 control-label">Body Temperature:</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" id="temp" placeholder="Enter your body temperature">
              </div>
            </div>
            <div class="form-group">
              <label for="pulse" class="col-sm-3 control-label">Pulse Rate:</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" id="pulse-rate" placeholder="Enter your pulse rate">
              </div>
            </div>
            <div class="form-group">
              <label for="bp" class="col-sm-3 control-label">Blood Pressure:</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" id="bp" placeholder="Enter your BP level">
              </div>
            </div>
            <div class="form-group">
              <label for="medications" class="col-sm-3 control-label">Medications:</label>
              <div class="col-sm-5">
                <textarea name="medics" id="medics" rows="3" cols="50"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="notes" class="col-sm-3 control-label">Notes:</label>
              <div class="col-sm-5">
                <textarea name="notes" id="notes" rows="3" cols="50"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-10">
                <button id="vitals-save" type="submit" class="btn btn-success">Save</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
              </div>
            </div>
          </form>
          <div class="col-sm-6 hosp-msg">
            <h2>Vital Signs</h2>
            <hr>
            <p>Vital signs help our doctors to get a clear picture of your internal body organs. It is essential for
              every human to maintain good vital signs in terms of blood pressure, pulse rate and body temperature.
            </p>
            <hr>
          </div>
        </div>
      </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="col-12" id="reports-header">
      <div>
        <h1>REPORTS</h1>
      </div>
    </div>

    <section class="add-on" id="reports">
      <div class="container">
        <div class="row" id="row-three">
          <h2 class="text-center page-header">Patient Details</h2>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Photo</th>
                <th>Medications</th>
                <th>Notes</th>
              </tr>
            </thead>
            <tbody id="details-table">

            </tbody>
          </table>
        </div>
      </div>
    </section>

    <div class="col-12 text-center" id="footer">
      <div id="footer-msg">
        <h4><a href="#home" id="to-top">
          <span><i class="fa fa-angle-up fa-3x text-center" aria-hidden="true"></i></span>
          <br>Back to top</a></h4>
          <hr style="border: 0.3px solid #c2c2c2">
          <p id="link-msg">&copy; <a href="https://www.linkedin.com/in/ratikabhuwalka/" id="copyright" target="_blank">Ratika Bhuwalka</a> 2022</p>
      </div>
    </div>

    <script src="script.js"></script>
    <script src="capture.js"></script>
  </body>
</html>