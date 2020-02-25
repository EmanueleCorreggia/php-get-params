<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
 Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
  Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php

$partite = [
  [
    'sqcasa' => 'Olimpia Milano',
    'sqospite' => 'Cantù',
    'punti_casa' => 55,
    'punti_ospite' => 60
  ],
  [
    'sqcasa' => 'Venezia',
    'sqospite' => 'Cagliari',
    'punti_casa' => 50,
    'punti_ospite' => 45,
  ],
  [
    'sqcasa' => 'Juventus Caserta',
    'sqospite' => 'Roma',
    'punti_casa' => 53,
    'punti_ospite' => 40
  ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <ul>
    <?php foreach ($partite as $partita) { ?>
      <!-- var_dump($partita); -->
      <!-- Olimpia Milano - Cantù | 55-60 -->
      <li>
        <?php echo $partita['sqcasa']; ?> - <?php echo $partita['sqospite']; ?> | <?php echo $partita['punti_casa']; ?> - <?php echo $partita['punti_ospite']; ?>
        <?php if(!empty($partita['pinco'])) { ?>
          <p><?php echo $partita['pinco'] ?> </p>
        <?php }?>
      </li>
    <?php } ?>
  </ul>
</body>

</html>
