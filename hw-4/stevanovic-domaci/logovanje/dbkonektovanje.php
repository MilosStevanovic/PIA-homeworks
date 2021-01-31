<?php
$conn = new mysqli('localhost','root','','bioskop');

if ($conn->connect_error) {
   die("Greška - Došlo je do neke greške!".$conn->connect_error);
} else {
    echo "";
}
?>