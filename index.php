<?php include("connection1.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operation</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container" style="padding-top: 10px;
    padding-bottom: 1px;">

        <div class="main-wrapper">

            <form action="#" method="POST">
                <div class="title">
                    Registration Form
                </div>

                <div class="form">
                    <div class="wrapper">

                        <div class="form1">

                            <div class="input_field">
                                <label for="fname">First Name</label>
                                <input type="text" class="input" id="fname" name="firstname"
                                    placeholder="Enter your first name">
                            </div>

                            <div class="input_field">
                                <label for="lname">Last Name</label>
                                <input type="text" class="input" id="lname" name="lastname"
                                    placeholder="Enter your last name">
                            </div>

                            <div class="input_field">
                                <label for="password">Password</label>
                                <input type="password" class="input" name="password" id="password"
                                    placeholder="Enter your password">
                            </div>

                            <div class="input_field">
                                <label for="conpassword">Confirm Password</label>
                                <input type="password" class="input" id="conpassword" name="conpassword"
                                    placeholder="Enter your confirm-password">
                            </div>

                            <div class="input_field">
                                <label for="State">State</label>
                                <div class="selectbox">
                                    <select name="state">
                                        <option value="Not Selected">Not Selected</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="UP">UP</option>
                                        <option value="MP">MP</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input_field">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" class="input" name="email"
                                    placeholder="Enter your email">
                            </div>


                            <div class="radio_container">
                                <label for="gender" class="gender">Gender</label>
                                <div class="male">
                                    <input type="radio" id="male" name="gender" class="radio" value="Male">
                                    <label for="male" class="radio">Male</label>
                                </div>
                                <div class="female">
                                    <input type="radio" id="female" name="gender" class="radio" value="Female">
                                    <label for="female" class="radio">Female</label>
                                </div>
                                <div class="other">
                                    <input type="radio" id="other" name="gender" class="radio" value="Other">
                                    <label for="other" class="radio">Other</label>
                                </div>
                            </div>

                            <div class="input_field">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="input" id="phone" name="phone"
                                    placeholder="Enter your phone number">
                            </div>


                        </div>


                        <div class="form2">



                            <div class="input_field">
                                <label for="DOB">Date of Birth</label>
                                <input type="date" id="DOB" class="input" name="DOB">
                            </div>



                            <div class="radio_container">
                                <label for="hobbies" class="hobbies">Hobbies</label>
                                <div class="cricket">
                                    <input type="checkbox" id="cricket" name="hobbies[]" value="Cricket">
                                    <label for="cricket">Cricket</label>
                                </div>
                                <div class="Football">
                                    <input type="checkbox" id="football" name="hobbies[]" value="Football">
                                    <label for="football">Football</label>
                                </div>
                                <div class="Dance">
                                    <input type="checkbox" id="dance" name="hobbies[]" value="Dance">
                                    <label for="dance">Dance</label>
                                </div>
                            </div>




                            <div class="input_field">
                                <label for="file">Resume</label>
                                <input type="file" id="file" class="input" name="file">
                            </div>


                            <div class="input_field">
                                <label for="course">Course</label>
                                <div class="selectbox">
                                    <select name="course">
                                        <option value="Not Selected">Not Selected</option>
                                        <option value="Btech(C.S)">Btech (C.S)</option>
                                        <option value="BSC(C.S)">BSC (C.S)</option>
                                        <option value="MSC(C.S)">MSC (C.S)</option>
                                        <option value="BSC(I.T)">BSC (I.T)</option>
                                    </select>
                                </div>
                            </div>



                            <div class="input_field">
                                <label for="startDate">Start Date</label>
                                <input type="date" id="startDate" class="input" name="startdate">
                            </div>
                            <div class="input_field">
                                <label for="endDate">End Date</label>
                                <input type="date" id="endDate" class="input" name="enddate">
                            </div>

                            <div class="input_field">
                                <label for="url">Website URL</label>
                                <input type="url" id="url" class="input" name="url" placeholder="Enter your Url">
                            </div>
                            <!-- <div class="input_field">
                    <label for="time">Time</label>
                    <input type="time" class="input" id="time" name="file">
                </div> -->
                            <!-- <div class="input_field">
                <label for="">File</label>
                <input type="hidden" class="input" name="file" >
            </div> -->
                            <!-- <div class="input_field">
                    <label for="image">image</label>
                    <input type="image" id="image" src="desert.jpg" alt="Submit" width="48" height="48">
                </div> -->


                            <!-- <div class="input_field">
                    <label for="address">Address</label>
                    <textarea class="textarea" id="address" cols="30" rows="2" name="address" placeholder="Enter your address"></textarea>

                </div> -->
                        </div>


                    </div>
                    <div class="input_field">
                        <label for="address" style="margin-right: -30px;">Address</label>
                        <textarea class="textarea" id="address" cols="30" rows="2" name="address"
                            placeholder="Enter your address"></textarea>

                    </div>
                    <div class="input_field terms" style="margin-bottom: 0;">
                        <label class="check">
                            <input type="checkbox" required>
                            <span class="checkmark"></span>
                        </label>
                        <p>Agree to terms and conditions</p>
                    </div>

                    <div class="btn_wrapper">

                        <div class="input_field btnm">
                            <input type="reset" class="btn" name="" id="">
                        </div>
                        <div class="input_field ">

                            <input type="submit" value="Register" class="btn" name="register">
                        </div>

                    </div>


                </div>
            </form>
        </div>
    </div>
</body>


</html>

<?php

if (isset($_POST['register'])) {
    // var_dump($_POST);

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $password = $_POST['password'];
    $conpassword = $_POST['conpassword'];
    $state = $_POST['state'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $DOB = $_POST['DOB'];
    //    $hobbies = $_POST['hobbies'];
    $hobbies = implode(",", $_POST['hobbies']);
    $file = $_POST['file'];
    $course = $_POST['course'];
    $startDate = $_POST['startdate'];
    $endDate = $_POST['enddate'];
    $websiteURL = $_POST['url'];
    $address = $_POST['address'];

    // var_dump($gender);


    // echo $fname . "<br>" ;
    // echo $lname . "<br>";
    // echo $password . "<br>";
    // echo $conpassword . "<br>";
    // echo $state . "<br>";
    // echo $email . "<br>";
    // echo $gender . "<br>";
    // echo $phone . "<br>";
    // echo $DOB . "<br>";
    // echo $hobbies . "<br>";
    // echo $file . "<br>";
    // echo $course . "<br>";
    // echo $startDate . "<br>";
    // echo $endDate . "<br>";
    // echo $websiteURL . "<br>";
    // echo $address . "<br>";

if($password == $conpassword){

    if ($fname != "" && $lname != "" && $password != "" && $conpassword != "" && $state != "" && $email != "" && $gender != "" && $phone != "" && $DOB != "" && $hobbies != "" && $file != "" && $course != "" && $startDate != "" && $endDate != "" && $websiteURL != "" && $address != "") 
    {
       
        

        $query = "INSERT INTO form ( First_Name, Last_Name, Password, conpassword, State, Email, Gender, Phone, Date_Of_Birth	, Hobbies, Resume, Course, Start_Date, End_Date, Website_URL, Address) VALUES ( '$fname', '$lname', '$password', '$conpassword', '$state', '$email', '$gender', '$phone', '$DOB', '$hobbies', '$file','$course', '$startDate', '$endDate', '$websiteURL', '$address')";

        $data = mysqli_query($conn, $query);

        if ($data) {
            // echo "data Inserted into database";
        } else {
            echo "Data not inserted";
        }

        

    }
    else
    {
        echo "<script>alert('Empty Field')</script>";
    }

}else{
    echo "password not matching";
}
}










?>
