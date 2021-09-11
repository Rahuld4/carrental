<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Car Rental</title>

    <style type="text/css">
		html{
		    overflow-y: scroll; 
		    overflow-x: hidden;
		}
		body{
		    color: #fff;
		    font-size: 13px;
		    margin: 0;
		    padding: 0;
		    line-height: 1.6rem;
		    font-family: Poppins, sana-serif;
		}
		section{
		    display: block; 
		    margin: 0; 
		    padding: 0;
		}
		img{
		    width: auto;
		    max-width: 100%;
		    margin: 0;
		    padding: 0;
		    border: none;
		}
		ul{
		    margin: 0;
		}
		a{
		    outline: none;
		    text-decoration: none;
		    color: #767676;
		    cursor: pointer;
		}
		.font-xs{font-size: 1rem !important;}
		.wrapper{
		    display: block;
		    width: 100%;
		    margin: 0;
		    padding: 0;
		    text-align: left;
		    word-wrap: break-word;
		}
		.bg-white{
		    background-color: #fff !important;
		}
		.d-flex-c{
		    display: flex !important;
		    margin: 0 auto; 
		    flex-direction: column;
		    justify-content: center;
		}
		.d-flex-r{
		    display: flex !important;
		    margin: 0 auto; 
		    flex-direction: row;
		    justify-content: center;
		}

		nav ul{
		    margin:0; 
		    padding: 0; 
		    max-height: 45px;
		    justify-content: left !important;
		}
		#main-navbar li{
		    display: inline-block;
		    position: relative;
		    margin: 0 10px;          
		    padding: 0;
		}
		#main-navbar li a{
		    display: inline-block;
		    margin: 12px 5px;
		}
		#main-navbar .nav-item .nav-link:before{
		    content: "";
		    position: absolute;
		    z-index: 2;
		    left: 0;
		    right: 100%;
		    background-color: #1335cc;
		    height: 3px; 
		    transition: right .3s ease-out;    
		}
		#main-navbar .nav-item .nav-link:hover::before{
		    right: 0;
		}
		#top-part{
		    background: url(image1.jpg) fixed no-repeat;
		    background-size: cover;
		    min-height: 650px;
		    background-position: center;
		}
	</style>
</head>

<body>

	<section class="wrapper" id="top-part">
 	
			<nav class=" bg-white font-xs" id="main-navbar">
		
		        <ul class="d-flex-r">
		        	<li class="nav-item">
		        		<img src=img1.png width="40px" height="40px" style="margin:3px;">
		        	</li>
		        	<li class="nav-item">
		                <a href="new.php" class="nav-link">Home</a>
		        	</li>
		        	<li class="nav-item">
		                <a href="#" class="nav-link">Vehicles</a> 
		            </li>
		            <li class="nav-item">
		                <a href="#" class="nav-link">Reservation</a> 
		            </li>
		            <li class="nav-item">
		                <a href="#" class="nav-link">About</a> 
		            </li>
		            <li class="nav-item">
		                <a href="#" class="nav-link">Contact US</a>
		            </li> 
		       
		        </ul>
		       
	        </nav>

 			<div class="">
 				<center>
 				<form>
 					<table>
 						<tr>
 							<td><input type="text" placeholder="Pickup Location" required></td>
 						</tr>
 						<tr>
 							<td><input type="text" placeholder="Return Location" required></td>
 						</tr>
 						<tr>
 							<td><input type="datetime-local" name=date min="2021-09-10"></td>
 						</tr>
 						<tr>
 							<td><input type="datetime-local" name=date min="2021-09-10"></td>
 						</tr>
 						<tr>
 							<td><input type="submit" ></td>
 						</tr>
 					</table>
 				</form>
 			</center>
	        </div>
	       
     		
    </section>


</body>
</html>