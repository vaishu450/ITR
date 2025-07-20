<html>
<head></head>
<body>
<form method="GET">
<label for="t1">Name</label>
<input type="text" name="t1" id="t1"><br><br>
<label for="t2">Email</label>
<input type="Email" name="t2" id="t2"><br><br>
<label for="t3">phone number</label>
<input type="number" name="t3" id="t3"><br><br>
<select name="topic">
<option value="AI & ML">AI & ML</option>
<option value="web development">web development</option>
<option value="cyber security">cyber security</option>
</select><br><br>

<input type="submit" name="s1" value="submit">
<input type="submit" name="c1" value="cancel"><br><br>

</form>
</body>
</html>



<?php
if(isset($_GET['s1']))
{
   $a=$_GET['t1']."<br>";
    $b=$_GET['t2']."<br>"; 
$c=$_GET['t3']."<br>";
 $d=$_GET['topic'];
}

$conn=mysqli_connect("localhost","root","","focus");

if(!$conn)
{
echo ("connection failed:".mysqli_connect_error());
}

$sql="INSERT INTO workshop1 VALUES('$a','$b','$c','$d')";
if(mysqli_query($conn,$sql))

$sql="update workshop1 set name='vaishnavi' where mob_no=2147483647";
if(mysqli_query($conn,$sql))

$sql="delete from workshop1 where mob_no=0";
if(mysqli_query($conn,$sql))

$sql="select*from workshop1";
$result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
echo "name is".$row["name"]."<br>"."email is".$row["email"]."<br>"."mobile is".$row["mob_no"]."<br>";
}
}

else
{
 echo"0 result";
}
mysqli_close($conn);














   ?>




















