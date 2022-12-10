<?php
$con = new mysqli("localhost","u780407792_Admin1","Qv4WEmXN","u780407792_BD");
$sql ="select producto, montoVenta from ventas";
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
          ['Producto', 'Cantidad vendida'],
          <?php
          while($fila = $res->fetch_assoc()){
            echo "['".$fila["producto"]."',".$fila["montoVenta"]."],";

          }
          ?>
        ]);

        var options = {
          chart: {
            title: 'Ejemplo de Graficas',
            subtitle: 'Cantidad vendida',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <button type="button" onclick="">Mostrar tabla</button>
    
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
  </body>
</html>



<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>