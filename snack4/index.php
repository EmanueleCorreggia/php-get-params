
<!-- //Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->





<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>






 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <style media="screen">
     .green {
       background-color: green;
     }
     .grey {
       background-color: grey;
     }
     div{
       float: left;
     }
   </style>
   <body>

     <div class="green">

       <?php
          $pms = $db['pm'];
          for ($i=0; $i < count($pms); $i++) {
          echo $pms[$i]['name'] . ' - ' . $pms[$i]['lastname'];
         // code...
       }
        ?>
     </div>

    <div class="grey">
      <?php
         $teachers = $db['teachers'];
         for ($i=0; $i < count($teachers); $i++) {
         echo $teachers[$i]['name'] . ' - ' . $teachers[$i]['lastname'];
        // code...
      }
       ?>


    </div>








   </body>
 </html>
