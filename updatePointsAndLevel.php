<?PHP
include_once("connection.php");

echo "this is update.php";

if(
   isset($_POST['txtUserName']) && isset($_POST['txtPoints']) && isset($_POST['txtLevel']) && isset($_POST['txtPointsUntilNextLevel'])){
    
   

    $userName = ($_POST['txtUserName']);
    $points = intval($_POST['txtPoints']);
    $pointsUntil = intval($_POST['txtPointsUntilNextLevel']);
    $theLevel = intval($_POST['txtLevel']);
    //echo "hello world";
    
    $query = "UPDATE users
        SET CurrentPoints = CurrentPoints + $points
        WHERE Username = '$userName'";
    
    $result = mysqli_query($conn, $query);
    
    $query = "UPDATE users
        SET totalPoints =  + totalPoints + $points
        WHERE Username = '$userName'";
    
    $result = mysqli_query($conn, $query);
    
    $query = "UPDATE users
        SET pointsUntilNextLevel =$pointsUntil
        WHERE Username = '$userName'";
    
    $result = mysqli_query($conn, $query);
    
    $query = "UPDATE users
        SET currentLevel =$theLevel
        WHERE Username = '$userName'";
    
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