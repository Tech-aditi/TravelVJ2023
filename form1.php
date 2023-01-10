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
        $start_location = $_REQUEST['startlocation'];
        $destination = $_REQUEST['destination'];
        $arrival = $_REQUEST['arrival'];
        $leaving = $_REQUEST['leaving'];
        $noofguest = $_REQUEST['noofguest'];
        $question = $_REQUEST['message'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO  Bookingform (Name, Phone, Email,StartLocation,Destination,Arrival,Leaving,NoofGuest, Message) VALUES ('$first_name',
            '$phone','$email','$start_location','$destination','$arrival',' $leaving','$noofguest','$question')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            // echo nl2br("\n$first_name\n $phone\n "
            //     . "$email\n $courses\n $question ");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        

?>