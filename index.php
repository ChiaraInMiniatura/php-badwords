<?php
  $testo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque dolorum iure dolores sunt eveniet obcaecati possimus consectetur beatae. Et culpa labore porro sunt magni odio modi nisi eligendi laboriosam alias, ratione debitis quibusdam earum corporis, est sint dolores reiciendis ipsa impedit obcaecati nihil ad commodi sit minima! Autem maxime, natus quod voluptate nostrum ex nobis culpa odit eveniet aspernatur, asperiores alias voluptatum expedita, neque eaque aut ullam placeat deleniti ducimus voluptatibus possimus illum. Magni, sit? Iusto quam cum qui cumque id ipsum aliquid fugiat, illum soluta eligendi. Hic, quos neque perferendis harum possimus repudiandae corporis dolorum itaque sit minus! Doloremque, asperiores iusto. Quam ipsam consequuntur excepturi sit ratione magni exercitationem inventore voluptate aut non sequi, repellendus nesciunt nostrum omnis quis magnam aperiam adipisci fuga! Quos iste ab voluptatem. Itaque, similique. Ab culpa aliquid, sint nesciunt, id necessitatibus non at corrupti eveniet nisi cum asperiores? Est, laborum blanditiis ad assumenda ipsa deleniti quisquam voluptatum quidem sunt! Quam accusamus optio blanditiis fuga aliquid aperiam dolores quasi voluptatibus adipisci doloremque saepe, modi magnam ab obcaecati repudiandae iste perferendis sequi autem dignissimos! In obcaecati commodi, repudiandae assumenda explicabo, totam porro dicta nostrum, iusto ratione nemo. Soluta consequatur veniam iste, nihil, rerum velit corrupti aperiam quos doloribus eum, ut cupiditate ex perspiciatis amet molestias. Quis, quidem? Adipisci, obcaecati corporis temporibus natus sequi blanditiis amet sunt autem voluptas accusantium voluptatem aperiam quo vero suscipit labore unde, iure numquam consectetur commodi, deleniti quas harum laborum magnam. Tenetur laudantium dicta voluptas, veniam enim dolor iusto, magnam, distinctio corrupti tempora eligendi quasi? Illo ex tenetur sint debitis numquam! Explicabo eius fuga reiciendis ex eum, ea ratione, architecto inventore ad, est dolorem impedit? Minus velit amet laudantium perferendis nulla fugiat maxime exercitationem ipsa dicta libero soluta illum at sunt reiciendis eos adipisci assumenda veritatis minima quisquam, hic a non! Sunt.";

  
  $parole_censurate = $_GET["censurato"];
  // es url :/?censurato=dolor
  
  $testo_corretto= str_replace($parole_censurate, "***", $testo);

  $lunghezza_testo = strlen("$testo");

  $lunghezza_testo_corretta = strlen("$testo_corretto")

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php-Badwords</title>
</head>
<body>

<h1>Php Badwords</h1>

<h3>Testo non censurato:</h3>

<p><?php echo $testo ?></p>


<h3>Testo censurato</h3>

<p><?php echo $testo_corretto ?></p>

<h3>Conteggio caratteri</h3>

<p>N° caratteri del testo non censurato: <?php echo $lunghezza_testo?> </p>
<p>N° caratteri del testo censurato: <?php echo $lunghezza_testo_corretta ?></p>

  
</body>
</html>