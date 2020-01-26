<?php

$con = mysqli_connect("localhost", "root", "root");

if (!$con) {
  echo 'Not Connected';
}

if (!mysqli_select_db($con,'project')) {
  echo "database not selected";

}

        $name =  $_POST['Name'];
        $email =  $_POST['eMail'];
        $phonenumber =  $_POST['phoneNumber'];
        $address =  $_POST['Adress'];
        $food =  $_POST['foodType'];

$sql = "INSERT INTO InformationTable1 (Name,Email,PhoneNumber,Address,Food) VALUES ('$name', '$email','$phonenumber','$address','$food')";

if (!mysqli_query($con,$sql)) {
  echo "not inserted";
} else{
  echo "Inserted";
}

header("refresh:1; url:index.html")

?>
        





