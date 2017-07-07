<?PHP
include_once("connection.php");

//echo "this is update.php";

if(
   isset($_POST['txtUserName']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['thePassword']) && isset($_POST['theStudent'])){
    
   

    $userName = ($_POST['txtUserName']);
    //$points = intval($_POST['txtPoints']);
    $theFirstName = ($_POST['firstName']);
    $theLastName = ($_POST['lastName']);
    $thePassword = ($_POST['thePassword']);
    $theStudent = ($_POST['theStudent']);
    $pointsTilNextLevel = 30;
    $theLevel = 1;
    
   // INSERT INTO `users`( `FName`, `LName`, `Username`, `Password`, `Student`) VALUES ('Bob','Dill','bob2187',123, "teacher")
    
    $query = "INSERT INTO `users`( `FName`, `LName`, `Username`, `Password`, `Student`, `pointsUntilNextLevel`,`currentLevel`) VALUES ('$theFirstName','$theLastName','$userName','$thePassword',  '$theStudent', $pointsTilNextLevel, $theLevel)";
    
    $result = mysqli_query($conn, $query);

    if($result > 0){
        echo "success";
        exit;
    }
    else{
        echo $query;
        exit;
    }
}    
?>