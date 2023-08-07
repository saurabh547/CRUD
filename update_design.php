<?php include("connection1.php"); 

$Id = $_GET['id'];

$query = "SELECT * FROM form where Id = '$Id'";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
 $row = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Details</title>
    <link rel="stylesheet" href="style.css">

</head>

<body >

    <div class="container" style="padding-top: 10px;
    padding-bottom: 1px;">

    <div class="main-wrapper">
        
        <form action="#" method="POST">
            <div class="title">
                Update  Form
            </div>

            <div class="form">
                <div class="wrapper">

                    <div class="form1">
                
                <div class="input_field">
                    <label for="fname">First Name</label>
                   
                <input type="text" value="<?php echo $row['First_Name']; ?>" class="input" id="fname" name="firstname" placeholder="Enter your first name">


                </div>

                <div class="input_field">
                    <label for="lname">Last Name</label>
                    <input type="text" value="<?php echo $row['Last_Name']; ?>" class="input" id="lname" name="lastname" placeholder="Enter your last name">
                </div>

                <div class="input_field">
                    <label for="password">Password</label>
                    <input type="password" value="<?php echo $row['Password']; ?>" class="input" name="password" id="password" placeholder="Enter your password">
                </div>

                <div class="input_field">
                    <label for="conpassword">Confirm Password</label>
                    <input type="password" value="<?php echo $row['Password']; ?>" class="input" id="conpassword" name="conpassword" placeholder="Enter your confirm-password">
                </div>
               
                <div class="input_field">
                    <label for="State">State</label>
                    <div class="selectbox">

                        <select name="state">
                            <option value="">Not Selected</option>
                            <option value="Gujarat"
                            <?php
                                if($row['State'] == 'Gujarat'){
                                    echo "selected";
                                }

                            ?>
                            
                            >
                            
                            Gujarat</option>
                            <option value="Maharashtra"
                            <?php
                                if($row['State'] == 'Maharashtra'){
                                    echo "selected";
                                }

                            ?>
                            
                            
                            >Maharashtra</option>
                            <option value="UP"
                            <?php
                                if($row['State'] == 'UP'){
                                    echo "selected";
                                }

                            ?>
                            
                            
                            >UP</option>
                            <option value="MP"
                            <?php
                                if($row['State'] == 'MP'){
                                    echo "selected";
                                }

                            ?>
                            
                            
                            >MP</option>
                        </select>

                    </div>
                </div>
                <div class="input_field">
                    <label for="email">Email Address</label>
                    <input type="email" value="<?php echo $row['Email']; ?>" id="email" class="input" name="email" placeholder="Enter your email">
                </div>
               
                
                <div class="radio_container">
                    <label for="gender" class="gender">Gender</label>
                    <div class="male">
                        <input type="radio"  id="male" name="gender" class="radio" value="Male"
                        
                        <?php
                        
                        // define('Gender','Male');
                        if($row['Gender'] == "Male")
                        {
                            echo "checked";
                        }
                    
                        ?>
                        
                        
                        >
                        <label for="male" class="radio">Male</label>
                    </div>
                    <div class="female">
                        <input type="radio" id="female" name="gender" class="radio" value="Female"
                        
                         <?php
                        //  define('Gender','Female');
                        if($row['Gender'] == "Female")
                        {
                            echo "checked";
                        }
                        ?>
                        
                        
                        >
                        <label for="female" class="radio">Female</label>
                    </div>
                    <div class="other">
                        <input type="radio" id="other" name="gender" class="radio" value="Other"
                        
                         <?php
                        //  define('Gender');
                        if($row['Gender'] == "Other")
                        {
                            echo "checked";
                        }
                        ?>
                        
                        
                        >
                        <label for="other" class="radio">Other</label>
                    </div>
                </div>

                <div class="input_field">
                    <label for="phone">Phone Number</label>
                    <input type="tel" value="<?php echo $row['Phone']; ?>" class="input" id="phone" name="phone" placeholder="Enter your phone number">
                </div>


                </div>


                <div class="form2">



                <div class="input_field">
                    <label for="DOB">Date of Birth</label>
                    <input type="date" id="DOB" class="input" name="DOB" value="<?php echo $row['Date_Of_Birth']; ?>">
                </div>



                <div class="radio_container">
                    <label for="hobbies" class="hobbies">Hobbies</label>
                    <div class="cricket">
                        <input type="checkbox" id="cricket" name="hobbies[]" value="Cricket"
                        <?php
                            if($row['Hobbies'] == "Cricket"){
                                echo "checked";
                            }


                        ?>
                        
                        >
                        <label for="cricket" >Cricket</label>
                    </div>
                    <div class="Football">
                        <input type="checkbox" id="football" name="hobbies[]" value="Football"
                        <?php
                        if($row['Hobbies']== "Football"){
                            echo "checked";
                        } 
                        ?>
                        
                        
                        >
                        <label for="football" >Football</label>
                    </div>
                    <div class="Dance">
                        <input type="checkbox" id="dance" name="hobbies[]" value="Dance"
                        <?php if($row['Hobbies']== "Dance"){
                            echo "checked";
                        } ?>
                        >
                        <label for="dance" >Dance</label>
                    </div>
                </div>




                <div class="input_field">
                    <label for="file">Resume</label>
                    <input type="file" id="file" class="input" name="file" value="Resume" <?php if($row['Course'] == "resume.pdf"){
                        echo "selected";
                    } ?>>
                </div>


<div class="input_field">
                    <label for="course">Course</label>
                    <div class="selectbox">
                        <select name="course">
                            <option value="">Not Selected</option>

                            <option value="Btech(C.S)" 
                            <?php 
                            if($row['Course'] == 'Btech(C.S)'){
                                echo "selected";
                            } 
                            ?>>Btech (C.S)</option>


                            <option value="BSC(C.S)"
                             <?php 
                             if($row['Course'] == 'BSC(C.S)'){
                                echo "selected";
                            } 
                            ?>>BSC (C.S)</option>

                            <option value="MSC(C.S)"
                             <?php 
                             if($row['Course'] == 'MSC(C.S)'){
                                echo "selected";
                            } 
                            ?>>MSC (C.S)</option>

                            <option value="BSC(I.T)"
                             <?php 
                             if($row['Course'] == 'BSC(I.T)'){
                                echo "selected";
                            } 
                            ?>>BSC (I.T)</option>
                        </select>
                    </div>
                </div>



                <div class="input_field">
                    <label for="startDate">Start Date</label>
                    <input type="date" id="startDate" class="input" name="startdate" value="<?php echo $row['Start_Date']; ?>">
                </div>
                <div class="input_field">
                    <label for="endDate">End Date</label>
                    <input type="date" id="endDate" class="input" name="enddate" value="<?php echo $row['End_Date']; ?>">
                </div>

                <div class="input_field">
                    <label for="url">Website URL</label>
                    <input type="url" value="<?php echo $row['Website_URL']; ?>" id="url" class="input" name="url" placeholder="Enter your Url">
                </div>
               
                </div>


                </div>
                <div class="input_field">
                    <label for="address" style="margin-right: -30px;">Address</label>
                    <textarea class="textarea" id="address" cols="30" rows="2" name="address" placeholder="Enter your address"><?php echo $row['Address']; ?>
                    </textarea>

                </div>

<div class="btn_wrapper">

                <div class="input_field btnm">
                    <input type="reset" class="btn" name="" id="">
                </div>
                <div class="input_field ">

                    <input type="submit" value="Update" class="btn" name="update">
                </div>

                </div>


            </div>
        </form>
       </div>
    </div>
</body>

</html>

 <?php

if(isset($_POST['update'])){
    // var_dump($_POST);
    
   $fname     = $_POST['firstname'];
   $lname     = $_POST['lastname'];
   $password  = $_POST['password'];
   $conpassword = $_POST['conpassword'];
   $state  = $_POST['state'];
   $email     = $_POST['email'];
   $gender    = $_POST['gender'];
   $phone     = $_POST['phone'];
   $DOB = $_POST['DOB'];
//    $hobbies = $_POST['hobbies'];
 implode(",", $_POST['hobbies']);
   $hobbies = implode(",", $_POST['hobbies']);
   $file = $_POST['file'];
   $course = $_POST['course'];
   $startDate = $_POST['startdate'];
   $endDate = $_POST['enddate'];
   $websiteURL = $_POST['url'];
   $address   = $_POST['address'];


if($password == $conpassword){




$query = "UPDATE form set First_Name='$fname',Last_Name='$lname',Password='$password',conpassword='$conpassword',State='$state',Hobbies='$hobbies' ,Email='$email',Gender='$gender',Phone='$phone',Date_Of_Birth='$DOB',Resume='$file',Course='$course',Start_Date='$startDate',End_Date='$endDate',Website_URL='$websiteURL',Address='$address' WHERE Id='$Id'";



      $data = mysqli_query($conn,$query);

    if($data){
    echo "Record Updated";
    }
  
    else{
    echo "Failed to";
    }

}else{
    echo "Your Password Not Matching";
}

} 










?>
