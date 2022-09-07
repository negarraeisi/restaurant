<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ذخیره اطلاعات</title>
</head>
<body>
<?php
//pull form fields into php variables
$name= $_POST['name_1'];
$date = $_POST['family_2'];
$leave = $_POST['mobile_3'];

//connect to sql
$dbc = mssql_connect("localhost","root","", "amoozesh_db")or die('Error connecting to
      the   SQL Server database.');

 // Input into staff database
 $query = "INSERT INTO form1  (firstname,lastname,mobile) VALUES   
('$name','$date','$leave')";
$result = mssql_query($query,$dbc)
$r esult = mssql_query($query,$dbc)or die('Error querying MSSQL database');

//close to sql
mssql_close($dbc);

echo $name . 'Your submission has been received<br />';
echo 'If you need change this request please contact your HR Manager<br />';
echo 'Thank you <br />';
echo 'HR Manager';
?>

</body>
</html>
