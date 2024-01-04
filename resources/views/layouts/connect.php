<?php
$conn = new mysqli('localhost', 'root', "", "varmegyek");
$ujMegyek=$_POST['ujMegyek'];

$sql="INSERT INTO `megyekk` (`id`, `created_at`, `updated_at`,'name','is_active') VALUES (NULL, '$ido', '$ido', '$ujMegyek', '1')";
if ($conn->query($sql) === TRUE) {
    echo "data inserted";
}
else 
{
    echo "failed";
}




?>