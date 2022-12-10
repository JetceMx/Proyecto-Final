<?php
include "header.php";
?>
<?php
$con = new mysqli("localhost","u780407792_Admin1","Qv4WEmXN","u780407792_BD");
$sql ="select mes, cantvent from ventas21";
$res=$con->query($sql);
?>
<html>
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
          chart: {
            title: 'Ventas de Año 2021',
            subtitle: 'Ventas por mes Enero-Diciembre',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
   
    
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>

<?php
include "footer.php";
?>