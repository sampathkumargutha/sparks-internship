
   <?php
  $servername = "localhost";
  $username = "id17619023_root";
  $password = "123@Sampath9";
  $dbname = "id17619023_bank";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if(!$conn){
    
    die ("Could not connect to the database due to the following error --> ".mysqli_connect_error());

  }

    if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='moneytransfer.php';
                     </script>";
                    
    }
else { echo "Error".$sql."<br>".mysqli_error($conn);}
echo "$name";
  }
?>

   