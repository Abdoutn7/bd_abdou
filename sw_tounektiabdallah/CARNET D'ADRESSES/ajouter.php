<?php

require("../config.php");
$conn=mysqli_connect($server,$username,$password,$db);
$sql="select * from users;";
$res=mysqli_query($conn,$sql);
$nb=mysqli_num_rows($res)

?>
<script src="fonction.js"></script>
<form action="" method="post">
<select name="sel" id="liste">
    <?php
    echo $i;
    $enreg=mysqli_fetch_array($res);
    for($i=0;$i>$nb;$i++){
    ?>
    <option value="<?php echo $enreg[2]; ?>"><?php echo $enreg[1]." ". $enreg[0]; ?></option>

<?php
    }

?>

</select>
<input type="button" value="Supprimer" onclick="supprime()" >
<input type="button" value="Retrouver L'Adresse" onclick="retrouve()">
</form>