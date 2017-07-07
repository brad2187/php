<?PHP
include_once("connection.php");

//echo "this is update.php";

if(
   isset($_POST['txtUserName']) && isset($_POST['txtPoints'])){
    
   

    $userName = ($_POST['txtUserName']);
    $points = intval($_POST['txtPoints']);
    //$pointsRead = intval($_POST['txtPointsRead']);
    //echo "hello world";
    
    //echo "l";
   // echo $userName;
    
    $query2 = "UPDATE users
        SET CurrentPoints = $points + CurrentPoints
        WHERE Username = '$userName'";
    
    $result2 = mysqli_query($conn, $query2);
    
   // $result = mysqli_query($conn, $query);

    
    
    $query = "UPDATE users
        SET totalPoints =$points + totalPoints
        WHERE Username = '$userName'";
    
    $result = mysqli_query($conn, $query);
    
    $query = "UPDATE users
        SET pointsUntilNextLevel = pointsUntilNextLevel - $points
        WHERE Username = '$userName'";
    
    $result = mysqli_query($conn, $query);
    
    $query = "Select pointsUntilNextLevel Where Username = '$userName'";
    
    $pointsUntilNext = intval(mysqli_query($conn, $query));
    
    echo $result;
    
    if( $pointsUntilNext <= 0 ) 
    {
       $query = "UPDATE users SET currentLevel = currentLevel + 1 Where Username = '$userName'";
       $result = mysqli_query($conn, $query);
        
        $query3 = "UPDATE users SET pointsUntilNextLevel = 60 where Username = '$userName'";
        $result = mysqli_query($conn, $query3);
    }

    if($result2 > 0){
       // echo $query2;
        echo "success";
        exit;
    }
    else{
        echo $query;
        exit;
    }
}    
?>

