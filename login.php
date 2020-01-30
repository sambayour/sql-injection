<?php


require_once('SQLinjectionDetect.php');

error_reporting(0);

$mysqli = new mysqli('localhost', 'root', '', 'sqlinjection');

if ($mysqli->connect_error) {
    die('Connection Error');
}

 $_POST['email'];
 $_POST['password'];

// validating inputs for malicious request again 
$formInput = $_POST['email'];
$formReq = " ' or '1' = '1 ";
$formReq .= "'; DROP TABLE important; SELECT * FROM 'users' where '1' = '1
";
$checkam = strpos($formInput, $formInput);

if ($checkam === false) {
     echo "The input '$formReq' was flagged malicious!";
     $data  = "\n Date_time: " .date('d-m-Y H:i:s') ;
        $data .= ' IP: '.$_SERVER['REMOTE_ADDR'] ;
        $data .= ' key log: '.$email .' '. $password ."\n";
        // $data .= 'Suspect: ['.$this->_suspect.'] ';
        // $data .= json_encode($_SERVER);
        file_put_contents('logs/systemlogs.txt', $data
            .'================== © https://samuelolubayo.website ==================', FILE_APPEND);
        
}else{

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM `users` where users.email = '{$email}' and users.password = '{$password}' ;";
// $query = sprintf($rawQuery, mysqli_real_escape_string($mysqli, $email), mysqli_real_escape_string($mysqli, $password));

$result = mysqli_query($mysqli, $query);
// $result = mysqli_multi_query($mysqli, $query);
$data = mysqli_fetch_all($result);

if (!empty($data)){
    session_start();
 $_SESSION['email']=$email;
 echo "very good <br> "; 		
 // var_export($data);
        echo "<script type=\"text/javascript\">
window.location.href='welcome.php';
            </script>"; 

}
else{
	 // echo "Oops! try again.. <br> ";
     $output = 'Oops! try again.. <br> ';
      echo "<script type=\"text/javascript\">
      window.alert('Oops! try again..');
window.location.href='index.php';
            </script>"; 
// var_dump($data);
}

}