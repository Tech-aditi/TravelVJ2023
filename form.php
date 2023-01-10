<?php



$conn = mysqli_connect("127.0.0.1", "u955232666_travelvj", "0536282554aB$", "u955232666_TravelVJ");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $first_name =  $_REQUEST['name'];
        $phone = $_REQUEST['phone'];
        $email =  $_REQUEST['email'];
        $courses = $_REQUEST['courses'];
        $question = $_REQUEST['message'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO Enroll (Name, Phone, Email, Courses, Question) VALUES ('$first_name',
            '$phone','$email','$courses','$question')";
         
        if(mysqli_query($conn, $sql)){
           header('location:table.html');
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        

?>