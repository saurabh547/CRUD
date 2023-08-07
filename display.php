<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;700&family=Oswald&family=Poppins:wght@100;300;500;600;700&family=Roboto:wght@300&family=Ubuntu:wght@300&display=swap');">
    <title>Display</title>
    <style>
        body{
            background:rgba(255,0,0,0.5);
             font-family: 'Poppins', sans-serif;
        }
        table{
            background-color:white;
        }
        .Update , .Delete{
            background-color:green;
            color:white;
            border:0;
            outline:none;
            border-radius:5px;
            height:23px;
            width:80px;
            font-weight:bold;
            cursor:pointer;
        }
        .Delete{
            background-color:red;
           
        }
        
    </style>
</head>
<body>
    
</body>

<?php
include("connection1.php");
error_reporting(0);

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

if ($total != 0) {
 ?>

<h2 align="center"><mark>Display All Records</mark></h2>
<center>
<table border='1'  cellspacing='7' width="100%" cellpadding='10'>
    <tr>
    <th width="2%">Id</th>
    <th width="5%">FirstName</th>
    <th width="5%">LastName</th>
    <th width="9%">Gender</th>
    <th width="1%">Email</th>
    <th width="8%">Phone</th>
    <th width="3%">Course</th>
    <th width="7%">Start_Date</th>
    <th width="7%">End_Date</th>
    <th width="20%">Address</th>
    <th width="20%">Operations</th>
</tr>


<?php
    // $row = mysqli_fetch_assoc($data)
    $row = mysqli_fetch_all($data, MYSQLI_ASSOC);
    foreach ($row as $row1) {
       echo "<tr>
               <td>". $row1['Id']."</td>
               <td>". $row1['First_Name']."</td>
               <td>". $row1['Last_Name']."</td>
               <td>". $row1['Gender']."</td>
               <td>". $row1['Email']."</td>
               <td>". $row1['Phone']."</td>
               <td>". $row1['Course']."</td>
               <td>". $row1['Start_Date']."</td>
               <td>". $row1['End_Date']."</td>
               <td>". $row1['Address']."</td>
               
               <td><a href='update_design.php?id=$row1[Id]'>
               <input type='submit' class='Update' value='Update'>
               </a>
               <a href='delete.php?id=$row1[Id]'>
               <input type='submit' class='Delete' value='Delete'>
               </a>
               
               </td>
              

               </tr>
            ";
       
       
        
    }
} else {
    echo "No records found";
}

// Close connection
mysqli_close($conn);



?>
</table>
</center>

</html>

<!-- &firstname=$row1[First_Name]&lastname=$row1[Last_Name]&gender=$row1[Gender]&email=$row1[Email]&phone=$row1[Phone]&course=$row1[Course]&startdate=$row1[Start_Date]&enddate=$row1[End_Date]&address=$row1[Address] -->
