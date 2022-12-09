<?php


$mail = $_POST['cupon'];
$asunto = 'Sabinito Games';
$men="<img src='../images/cupon.png'>";

mail($mail,$asunto,$men);
?>
<script>
    
   location.href = "index.php";
</script>