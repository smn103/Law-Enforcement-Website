<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Drug Enforcement Administration</title>
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
 body, html {
  height: 100%;}
  .centered {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
</head>
<body style="background-image: url('images.jpg'); background-repeat: no-repeat; background-size: cover;">
<nav class="navbar navbar-light" style="background-color: #87d9e1;">
  <div id="main">
  <button class="openbtn" onclick="openNav()" style="background-color: #87d9e1;">☰</button>  
</div>
  <a class="navbar-brand" href="#">
    <img src="header-logo_bronze-resized-5-2.png" height="100" class="d-inline-block align-top" alt="">
  </a>

  <form class="form-inline" method="post" action="log_out.php">
                  <div class="md-form my-0">
                    <a href="../login.php" class="btn btn-outline-info" style="color:black;">Logout</a>
                  </div>
                </form>
</nav>
<!--<div class="container">		
       <div class="jumbotron" style="background-color: #a4fae5; opacity: 0.7;">
        <div class="row">
            <div class="col-md-2">
                <img src="1200px-Seal_of_the_United_States_Drug_Enforcement_Administration.svg.png" height="100">
            </div>
            <div class="col-md-8 mb-4 white-text text-center">
                    <h1><strong>Drug Enforcement Administration</strong></h1>
            
        </div>
      </div>
</div>

</div>-->

<div class="centered" >
              <!-- Content -->
           
                <div class="jumbotron" style="opacity: 0.8">
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-12 mb-4 white-text text-center">
                    <h3><strong>Enter Branch Details</strong></h3>
                    
                    <h2>Select by Location</h2><br></strong>
              <form action="deacase.php" method="POST">
    <select name="branch" class="form-control">
  <option value="Bellevue Avenue">Bellevue Avenue</option>
    <option value="Liberty Bell">Liberty Bell</option>
    <option value="Duke Gardens">Duke Gardens</option>
    <option value="Bay Harbor Island">Bay Harbor Island</option>
  <option value="Churchill Downs">Churchill Downs</option>
  <option value="Sandia Peak">Sandia Peak</option>
  </select><br><br>
  <input type="submit" value="Submit" class="btn btn-primary">
</form>
                  </div>
                  <!--Grid column-->
                </div>
                <!--Grid row-->
              </div>
              <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
          </div>
          

                
                
  

  <div id="mySidebar" class="sidebar" style="background-color: #a4fae5;">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <center><img src="1200px-Seal_of_the_United_States_Drug_Enforcement_Administration.svg.png" height="150"></center><br>
 <a href="dea_branches.php">Branches</a>
        <a href="dea_officers.php">Officers</a>
        <a href="dea_cases.php">Cases</a>
  <a href="dea_criminals.php">Criminals</a>
</div>
<form align="left" style="position:absolute;
bottom:0;"name="form2" method="post" action="dea_insert.php">
  <div class="md-form my-0">
                    <a href="../new_insert.html" class="btn btn-outline-info" style="color:white;">Insert New Record</a>
                  </div></form>
  </label>


<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>




	</div>

</div>
             
</body>
</html>
