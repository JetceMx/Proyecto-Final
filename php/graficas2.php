<?php
include "header.php";
?>
<?php
$con = new mysqli("localhost","u780407792_Admin1","Qv4WEmXN","u780407792_BD");
$sql ="select mes, cantvent from ventas21";
$res=$con->query($sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/Style-Global.css">
  <link rel="stylesheet" href="../css/Style-Login.css">
  <script src="https://kit.fontawesome.com/3d7b0db529.js" crossorigin="anonymous"></script>
  <title>Login-front</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

  <form class="animate__animated animate__backInDown" method="POST" action="login.php">
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mes', 'Ventas'],
          <?php
          while($fila = $res->fetch_assoc()){
            echo "['".$fila["mes"]."',".$fila["cantvent"]."],";

          }
          ?>
        ]);

        var options = {
            colors: ["#7C00FF"],
          chart: {
            title: 'Ventas 2021',
            subtitle: 'Enero-Diciembre',
            colors: ["#7C00FF"],
            
            
          },
          backgroundColor:{fill:'#000000',},
          chartArea: {
            backgroundColor: {
              fill: '#000000',
              fillOpacity: 100
            },
          },
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  

  </form>
  <div id="columnchart_material" style="width: 800px; height: 500px; background-color:black"></div>

  <?php
  include "footer.php";
  ?>

</body>

</html>