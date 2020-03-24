<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clube Das Armas</title>
    <link rel="stylesheet" href="css/style.css">
  
</head>

<body>
  <?php 
include ("conecta-dilon.php"); 
 include ("top.php");
 ?> 
<?php
include ("menu.php"); 
include ("conecta-dilon.php");



$sql = "SELECT cod_carrossel, video_carrossel FROM tb_carrossel";
$res = mysqli_query($_con, $sql) or die("Não foi possivel consultar os dados");
?>
<?php


while ($linha = mysqli_fetch_array($res))
  print "<div class='conntainer-slide' id='slider'>
          <div class=''>
            <div class=''>
              <video class = 'video1' id='video1' controls autoplay muted loop>
                <source src='$linha[1]' type='video/mp4'>
              </video>
              <video class = 'video2' id='video2'  autoplay muted loop>
                <source src='$linha[1]' type='video/mp4'>
              </video>
              <video class = 'video3' id='video3'  autoplay muted loop>
                <source src='$linha[1]' type='video/mp4'>
              </video>
            </div>
            
          </div>  
            
        </div>

";
?>

<?php 
print"
  <div class='text'>
    <h2>Clube das Armas </h2>
    <p class='pezinho'> Torne-se um Alfa</p>
  </div


";
include ("advertages.php");
include ("promocao.php");
?>





</body>

</html>