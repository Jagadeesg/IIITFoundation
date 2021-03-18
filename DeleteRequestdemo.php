

<?php
require('dbconnect.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM request_demo WHERE request_id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
if($result)

echo "<script>
                            alert('Your details are Deleted Successfully');
                            window.location.href='viewRequestDemo.php';
                            </script>";
                          else
                         echo "<script>
                      alert('Your details are Not Deleted');
                      window.location.href='viewRequestDemo.php';
                      </script>";
                

?>