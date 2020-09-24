
<!DOCTYPE html>
<html lang="pt-br">
<head>
<link href="estilo.css" rel="stylesheet"/>

  <meta charset="UTF-8">
  <title>Clima</title>
</head>
<body>

    <?php
       $statisticsJson = file_get_contents("http://apiadvisor.climatempo.com.br/api/v1/weather/locale/3477/current?token=3ef65316297c10261dc809670e0fedc6");
       $statisticsObj = json_decode($statisticsJson,true);
       echo '<div class="box">';
       echo '<div class="text1">';
       print("<div>Estado: ".$statisticsObj["name"]."</div><br/>");
       print("<div>temperatura: ".$statisticsObj["data"]["temperature"]."º</div><br/>");
       print("<div>Velocidade do vento: ".$statisticsObj["data"]["wind_direction"]." ".$statisticsObj["data"]["wind_velocity"]."Km/h</div><br/>");
       print("<div>Condição: ".$statisticsObj["data"]["condition"]."</div><br/>");
       echo '</div>';
       echo '</div>';
    ?>
     


</body>
</html>