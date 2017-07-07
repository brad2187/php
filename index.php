<?PHP
include_once("connection.php"); 
if(isset($_POST['txtUsername']) && isset($_POST['txtPassword'])){
    
    $username = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];
    $query = "SELECT * FROM users WHERE username = '$username' 
        AND password = '$password'";
  
    $anOutput = "";
    
    $result = mysqli_query($conn, $query);
    while ($row = $result->fetch_assoc()) {
        printf ("%s %s %d %s\n", $row["FName"], $row["LName"], $row["CurrentPoints"], $row["Student"], $row["UserId"]);
    }
    if($result->num_rows > 0){ //has record. correct username and password
        echo "success";
        
        exit;
    }
    else
    {
        echo "Wrong username and password"; 
        exit;
    }
}
?>


<html>
<head><title>Login </title></head>
    <body>
        <h1>Login Example | <a href=”http://www.kosalgeek.com”>KosalGeek</a></h1>
        <form action="<?PHP $_PHP_SELF ?>" method="post">
            #Username <input type="text" name="txtUsername" value="" placeholder="Enter Username" /><br/>
            Password <input type="password" name="txtPassword" value="" placeholder="Enter Password" /><br/>
            <input type="submit" name="btnSubmit" value="Login"/>
        </form>
    </body>
</html>