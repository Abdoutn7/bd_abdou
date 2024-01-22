<?php

require("../config.php");
$conn=mysqli_connect($server,$username,$password,$db) or die("erreur cnx");
$sql="select * from users;";
$res=mysqli_query($conn,$sql) or die ("error req");
$nb=mysqli_num_rows($res);

?>
<script src="fonction.js"></script>
<form action="" method="post">
<select name="sel" id="liste">
    <?php

    $enreg=mysqli_fetch_array($res);
    for($i=0;$i<$nb;$i++){
    ?>
    <option value="<?php echo $enreg[4]; ?>"><?php echo $enreg[3]." ". $enreg[2]; ?></option>

<?php
    }

?>

</select>
<input type="button" value="Supprimer" onclick="supprimer()" >
<input type="button" value="Retrouver L'Adresse" onclick="retrouver()">
</form>