<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MathNet.</title>

<script src="https://kit.fontawesome.com/6b080b2b1e.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="home">
	<nav>
		<h2 class="logo"><img src="logo.png"></h2>
		<ul>
			<li><a href="index.html">HOME</a></li>
			<li><a href="About us.htm">ABOUT</a></li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">TOPIC</a>
					<div class="dropdown-content">
						<a href="Graph Sederhana dan Multigraph.html">Graph Sederhana dan Multigraph</a>
						<a href="Subgraph.htm">Subgraph</a>
						<a href="Graph Khusus.htm">Graph Khusus</a>
					</div>
			</li>
			<li class="active"><a href="Contact Us 2.php">CONTACT US</a></li>
		</ul>
		<a href="login.html" class="user"><i class="fa-solid fa-user"></i></a>
        <div class="search-box">
      <input type="text2" placeholder="Search..." />
      <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
    </div>
	</nav>
<style>
* {
  box-sizing: border-box;
}
body {font-family: Helvetica;}

.box{
  color:#1E446C;
}
.box:after{
  content:"";
  display:block;
  clear:both;
}
.box .col-4 {
  width:33.33%;
  padding:20px;
  box-sizing: border-box;
  text-align: center;
  float: left;
}
.box .col-4 img{
  width:200px;
  height:200px;
  border:5px solid;
  border-radius: 50%;
  text-align: center;
  line-height:50px;
  font-size:20px;
  margin:0 auto;
}
.box .col-4 h4{
  margin:20px 0px 0px 0px;
}

form {
  border: 3px solid #f1f1f1;
  font-family: Arial;
}

/*Style the header*/
h4 {
  font-family: sans-serif;
  text-align: center;
  padding: auto;
  color: #1e446c;
}


/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}

/* Left and right column */
.column.side {
  width: 30%;
  height: 350px; /* only for demonstration, should be removed */
  background: white;
    font-size: 16px;
  font-family: Open sans-serif;
  text-align: left;
}

/* Middle column */
.column.middle {
  border-right: 6px solid #1e446c;
  border-left: 6px solid #1e446c;
   padding-left: 40px;
   padding-right: 40px;
  width: 40%;
  height: 350px; /* only for demonstration, should be removed */
  background: white;
    font-size: 16px;
  font-family: Open sans-serif;
  text-align: left;
}

.search-box{
	background-color: #C8C8C8;
	height: 36px;
	padding: 8px 15px;
	border-radius: 50px;

}
.search-box input{
	border:none;
	outline: none;
	background:none;
	width: 200px;
}
.search-box a{
	color: black;
}
.container {
  padding: 20px;
  background-color: #f1f1f1;
}

input[type=text] {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=text1]{
  width: 100%;
  padding: 12px;
  height: 100px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;

}


input[type=submit] {
  background-color: #1e446c;
  color: white;
  border: none;
}

input[type=submit]:hover {
  opacity: 0.8;
}



.error {color: #FF0000;}
</style>
</head>
<body>

<section class="services">
		<div class="container">
			<h3 style="text-align: center; font-size: 50px">PENYUSUN</h3>
			<div class="box">
				<div class="col-4">
					<img src="img/darin.png">
					<h4>ADILA DARIN NADIFAH</h4>
					<p style="line-height: 30px;font-family: helvetica;font-color: #1e446c">210311624922</p>
				</div>
				<div class="col-4">
					<img src="img/alfi.png">
					<h4>ALFIANA DEWI RACHMAWATI</h4>
					<p style="line-height: 30px;font-family: helvetica;font-color: #1e446c">210311624918</p>
				</div>
				<div class="col-4">
					<img src="img/annisa.png">
					<h4>ANNISA PUTRI RAHMAWATI</h4>
					<p style="line-height: 30px;font-family: helvetica;font-color: #1e446c">210311624913</p>
				</div>
			</div>
		</div>
	</section>
<div class="row">
  <div class="column side">
   <h4>Contact Us </h4>
			<br>
			<p style="font-family: helvetica; ">Alamat : <b><a href="https://maps.app.goo.gl/kRcFeahB3AZ3YLyZ7" target="_blank">Jln. Sumbersari Gg VI No.15, Sumbersari, Kec. Lowokwaru, Kota Malang, Jawa Timur, Indonesia </a></b></p>
			<p style="font-family: helvetica;"><i>Email</i> : <b><a href="mailto:mediapembelajaran321@gmail.com" target="_blank">mediapembelajaran321@gmail.com</a></b></p>
			<p style="font-family: helvetica;">Nomor Telepon : <b><a href="tel:+628911111111" target="_blank">0891111111</a></b></p>
			<p style="font-family: helvetica;"><i>WhatsApp</i> : <b><a href="https://wa.me/+628911111111" target="_blank">089111111111</a></b></p>
  </div>
<?php
// define variables and set to empty values
$namaErr = $commentErr = "";


  if ($_SERVER["REQUEST_METHOD"] == "POST") 
   if (empty($_POST["nama"])) {
    $namaErr = "Nama is required";
  } else {
    $nama = test_input($_POST["nama"]);
    // check if nama only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]+$/",$nama)) {
      $namaErr = "Only letters and white space allowed";
    }
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") 
   if (empty($_POST["comment"])) {
    $commentErr = "Comment is required";
  } else {
    $comment = test_input($_POST["comment"]);
    // check if nama only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]+$/",$comment)) {
      $commentErr = "Only letters and white space allowed";
    }
  }
 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>  
  <div class="column middle">
    <h4>Enter Your Comment Here</h4>
<br>
<form>
<div class="container" style="background-color:white">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<input type="text"  placeholder="Name" name="nama" pattern="[a-zA-Z ]+" required>
  <br><br>
<input type="text"  placeholder="Comment" name="comment" pattern="[a-zA-Z ]+" required>
  <br><br>
<input type="submit" name="Submit"value="Submit">
  </div>
   </form>
	</div>
  
  <div class="column side">
	<h4>Your Comments</h4>
	<br><br>
 
<p><strong> THANK YOU <?php echo $_GET["nama"]; ?>!</strong></p><br>
<p><strong>YOUR COMMENT: <br><br><?php echo $_GET["comment"]; ?></strong></p>
<br>
<br>

</div>
</div>

</div>
</body>

 
<!-- END GRID -->
</div>


<!-- END MAIN -->
</div>
 		
</body>
</html>

