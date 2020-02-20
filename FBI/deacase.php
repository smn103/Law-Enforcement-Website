

















<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Federal Bureau of Investigation</title>
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
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
  height: 550px;
         width:750px;
  
         overflow-x: hidden;
         overflow-y: auto;
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
                    <a href="../login.php" class="btn btn-outline-info" style="color:black;">Logout</a>                  </div>
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
           <div class="container">
                <div class="jumbotron" style="opacity: 0.8">
                <div class="row">
                  <!--Grid column-->
                  <div class="col-md-12 mb-4 white-text text-center">
                    
                    <h5><?php
include("deadb.php");
ob_start();
session_start();
   error_reporting(0);
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
		 	$mycaseid = $_POST['caseid'];
	      	$category =$_POST['Category']; 
	      	$branch=$_POST['branch'];
	      	$crid=$_POST['crid'];
	      	$badge=$_POST['badge'];
	      	$type=$_POST['Type'];
	      	$team=$_POST['team'];
		 	$query1="Select * from fbi_cases where case_no=$mycaseid";
		  	$query2="Select * from fbi_cases where type LIKE '%{$type}%'";
		  		  	$query22="Select * from fbi_cases where category LIKE '%{$category}%'";
		  	$query3="Select * from fbi_overview NATURAL JOIN locations where branch_name LIKE '%{$branch}%'";
		  	$query4="Select * from criminal where criminal_id=$crid";
		  	$query5="Select * from officers NATURAL JOIN fbi_emp where badge_id=$badge";
		  	$query6="Select * from officers o, fbi_emp f where team_id=$team and o.badge_id=f.badge_id";
	  		if($mycaseid)    
	  		{
		  		$result=mysqli_query($db1,$query1);
		  		if(!$result)
	  			{
		  			die('Query failed'.mysqli_error());
	  			} 
	  			$count = mysqli_num_rows($result);
	  			if($count>=1)
	  			{    
		 			while( $row = mysqli_fetch_array($result,MYSQLI_ASSOC))
		  		{
			  		echo "<B>ID:".$row["case_no"]."<br>"."Case Name: ".$row["case_name"]."<br>"."Type: ".$row["type"]."<br>"."Category: ".$row["category"]."<br></B><br>";
		  		}
	    
	  			}
	  			else{
		  			echo"<B>No results found</B>";
	  			}
	  		}
	  				else  if($type)
	  		{
		  		$result=mysqli_query($db1,$query2);
		 		 if(!$result)
	  			{	
		  			die('Query failed'.mysqli_error($db1));
	  			}	
				$count = mysqli_num_rows($result);
	  			if($count>=1)
	  			{   
		  			while( $row = mysqli_fetch_array($result) )
		  		{
			  		echo "<B>ID:".$row["case_no"]."<br>"."Case Name: ".$row["case_name"]."<br>"."Type: ".$row["type"]."<br>"."Category: ".$row["category"]."<br></B><br>";
		  		}
	  
	  			}
	  			else{
		  				echo"<B>No results found</B>";
	  				}
	   
	  		}
	  				else  if($team)
	  		{
		  		$result=mysqli_query($db1,$query6);
		 		 if(!$result)
	  			{	
		  			die('Query failed'.mysqli_error($db1));
	  			}	
				$count = mysqli_num_rows($result);
	  			if($count>=1)
	  			{   
		  			while( $row = mysqli_fetch_array($result) )
		  		{
			  		  echo "<B>Name: ".$row["o_name"]."<br>"."Badge ID: ".$row["badge_id"]."<br>"."Team ID: ".$row["team_id"]."<br>"."Age: ".$row["age"]."<br>"."Criminals Arrested: ".$row["cr_arrested"]."<br>Dept: ".$row["dept"]."<br>"."Location: ".$row["location"]."<br>Position: ".$row["position"]."<br>No. of Cases Solved: ".$row["cases_solved"]."<br></B><br>";
		  		}
	  
	  			}
	  			else{
		  				echo"<B>No results found</B>";
	  				}
	   
	  		}
	  				else  if($category)
	  		{
		  		$result=mysqli_query($db1,$query22);
		 		 if(!$result)
	  			{	
		  			die('Query failed'.mysqli_error($db1));
	  			}	
				$count = mysqli_num_rows($result);
	  			if($count>=1)
	  			{   
		  			while( $row = mysqli_fetch_array($result) )
		  		{
			  		echo "<B>ID:".$row["case_no"]."<br>"."Case Name: ".$row["case_name"]."<br>"."Type: ".$row["type"]."<br>"."Category: ".$row["category"]."<br></B><br>";
		  		}
	  
	  			}
	  			else{
		  				echo"<B>No results found</B>";
	  				}
	   
	  		}
	  else  if($branch)
	  {
		  $result=mysqli_query($db1,$query3);
		 
			   if(!$result)
	  {
		  die('Query failed'.mysqli_error($db1));
	  }
	
	   $count = mysqli_num_rows($result);
	  if($count>=1)
	  {   
		  while( $row = mysqli_fetch_array($result) )
		  {
			  
			  echo "<B>Branch Name: ".$row["branch_name"]."<br>"."Cases Solved: ".$row["cases_solved"]."<br>"."No. of Officers: ".$row["no_of_officers"]."<br>"."City Name: ".$row["city_name"]."<br>State: ".$row["state"]."<br>"."Office: ".$row["office"]."<br>Pincode: ".$row["pincode"]."<br></B><br>";
		  }
	  
	  }
	  else{
		  echo"<B>No results found</B>";
	  }
	   
	  }else  if($crid)
	  {
		  $result=mysqli_query($db1,$query4);
		 
			   if(!$result)
	  {
		  die('Query failed'.mysqli_error($db1));
	  }
	
	   $count = mysqli_num_rows($result);
	  if($count>=1)
	  {   
		  while( $row = mysqli_fetch_array($result) )
		  {
			  
			  echo "<B>Name: ".$row["name"]."<br>"."Criminal ID: ".$row["criminal_id"]."<br>"."Age: ".$row["age"]."<br>"."No. of Crimes Commited: ".$row["no_of_crimes"]."<br>Most Recent Felony: ".$row["latest_crime"]."<br>"."Jurisdiction: ".$row["jurisdiction"]."<br>Sentence: ".$row["sentence"]." years<br></B><br>";
		  }
	  
	  }
	  else{
		  echo"<B>No results found</B>";
	  }
	   
	  }
		else  if($badge)
	  {
		  $result=mysqli_query($db1,$query5);
		 
			   if(!$result)
	  {
		  die('Query failed'.mysqli_error($db1));
	  }
	
	   $count = mysqli_num_rows($result);
	  if($count>=1)
	  {   
		  while( $row = mysqli_fetch_array($result) )
		  {
			  
			  echo "<B>Name: ".$row["o_name"]."<br>"."Badge ID: ".$row["badge_id"]."<br>"."Age: ".$row["age"]."<br>"."Criminals Arrested: ".$row["cr_arrested"]."<br>Dept: ".$row["dept"]."<br>"."Location: ".$row["location"]."<br>Position: ".$row["position"]."<br>No. of Cases Solved: ".$row["cases_solved"]."<br></B><br>";
		  }
	  
	  }
	  else{
		  echo"<B>No results found</B>";
	  }
	   
	  }  
	  }
	
	 
	  ?>
                  </h5></div></div></div></div></div>
               
                
                
  

 <div id="mySidebar" class="sidebar" style="background-color: #1e84cb;">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <center><img src="FBI.png" height="150"></center><br>
 <a href="fbi_branches.html">Branches</a>
        <a href="fbi_officers.html">Officers</a>
        <a href="fbi_cases.html">Cases</a>
  <a href="fbi_criminals.html">Criminals</a>
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
