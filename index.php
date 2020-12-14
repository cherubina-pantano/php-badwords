<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Badworks</title>
  </head>
  <body>
    <h2>Ciao PHP!</h2>

    <?php
      // codice php
      $text_song = 'I Puffi sanno che un tesoro c è
                Nel fiore accanto a te
                Madre Natura pensa sempre a noi
                Con i Puffi puoi aiutarla
                Devi sempre rispettarla
                Con i Puffi puoi aiutarla se lo vuoi
                Rispettiamo la natura ed allora il mondo guarirà';
      $len_text = strlen($text_song);
    ?>

    <h1>I Puffi sanno </h1>

    <p>  <?php echo $text_song; ?> </p>
    <p> Il testo è lungo: <?php echo $len_text ?> caratteri.</p>

  </body>
</html>
