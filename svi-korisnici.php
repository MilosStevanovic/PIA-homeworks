<?php
include('../logovanje/dbkonektovanje.php');
//Validacija
$sql = "SELECT * FROM bioskop"; 
$result = $conn->query($sql);
$list = '';
$total = $result->num_rows;

if($result->num_rows > 0) {
    
     while($row = $result->fetch_assoc()) {
        $list = $list.'
        <div class="row box">
        <div class="col-md-2 box4">
         
        </div>
        <div class="col-md-6 box5">
            <p> <span style="color: #9a9a9a;">Ime i prezime: </span> '.$row["realname"].'<br>
             <span style="color: #9a9a9a;">Korisničko ime: </span>'.$row["username"].'<br>
           <span style="color: #9a9a9a;">Email adresa: </span>'.$row["email"].'<br>
           <p> <span style="color: #9a9a9a;">Lozinka: </span> '.$row["sifra"].'
            </p>
        </div>
        <div class="col-md-4 box5">
            <a href="../logovanje/brisanje-usera.php?id='.$row["userID"].'" class="btn btn-danger"> Izbriši</a>
            <a href="update-usera.php?id='.$row["userID"].'" class="btn"> Izmeni</a>
        </div>
    </div>            
        ';
    }
    
} else {
    $list = "Još uvek ne postoji kreirani korisnički nalog!";
}




$conn->close();
?>