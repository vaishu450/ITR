<?php
Session_start();
if(!isset($_SESSION['Username']))
{
header('location:session_login.php');
}
?>
<html>
<style>
<center>
body{
   font-family:Arial;
   background-color:white;
   display:flex;
   align-items:center;
   height:40px;
}

.Container
{
color:blue;

padding:20px;
width:400px;
border-radius:10px;
text-align:center;
}
</style>
</head>














<body>
<div class="Container">
<h1> Welcome To <?php echo $_SESSION['Username']?>'s Page </h1>
<a href="destroy.php">Logout</a>
</div>
</body>
</html>










