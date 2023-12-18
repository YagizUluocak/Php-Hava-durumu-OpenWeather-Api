<?php
  date_default_timezone_set('Europe/Istanbul');
  $sehirObjesi = new sehirler();
  $deger = false;
  $celcius = 273.15;

 if(isset($_POST["submit"]))
 {
    $sehir = $_POST["secilensehir"];
    $api_key = "abe12de07ad67c0ad149492853037bad";

    $api_url = 'http://api.openweathermap.org/data/2.5/weather?q='.$sehir.'&appid='.$api_key;
    $weather_data = json_decode(file_get_contents($api_url), true);

    $temperature_min = round(($weather_data["main"]["temp_min"]) - $celcius);
    $temperature_max = round(($weather_data["main"]["temp_max"]) - $celcius);
    $icon = $weather_data["weather"][0]['icon'];
    $deger = true;
 }
?>

<div class="container-fluid container-full-height">
  <div class="row row-full-height" style="background-color:rgb(138, 17, 186)">

    <form action="" method="post">
      <label for="sehir">Şehir Seçiniz</label>
      <select class="custom-select" aria-label=".form-select-lg example" name="secilensehir">
        <?php
        $sehirObjesi->sehir();
        ?>
      </select> 
      <button type="submit" name="submit">Şehir Seç</button>         
    </form>  
    <?php
    if($deger)
    {
      ?>
      <table class="table text-center" style="color: white;" >
        <thead>
          <tr style="color: yellow;">
          <th scope="col">Şehir</th>
            <th scope="col">Saat</th>
            <th scope="col">Simge</th>
            <th scope="col">En Düşük</th>
            <th scope="col">En Yüksek</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <th scope="row"><?php echo $sehir ?></th>
            <th scope="row"><?php echo date("h:i:sa"); ?></th>
            <td><?php echo "<img src='https://openweathermap.org/img/wn/".$icon."@2x.png'>" ?></td>
            <td><h3><?php echo $temperature_min ?></h3></td>
            <td><h3><?php echo $temperature_max ?></h3></td>
          </tr>
        </tbody>
    </table>
    <?php
    }
    ?>

  </div><!-- row -->
</div> <!-- container-fluid -->