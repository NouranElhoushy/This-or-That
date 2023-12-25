<?php 



$firstname = $_REQUEST['firstname']; 
$secondname = $_REQUEST['secondname']; 
$address =['address']; 

if(isset($_POST['btntest'])){ 
    
    $host = "localhost"; 
    $user = "root"; 
    $password ="";
    $db = "thisorthat"; 
    @$conn= mysqli_connect($host,$user,$password,$db);
   
    $insert= "insert into studentsbis values('$firstname','$secondname')";
    
    mysqli_query($conn,$insert);

   

    if($conn){
        
        echo("<h1 style=color:green;> Your Registartion is Submitted!</h1>");
        

    }
    else{
        echo("<h1 style=color:red;> There Was a Problem ,Try again</h1>");
    }
   
}

?>

