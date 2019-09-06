<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teacher Array</title>

    <?php

    // Utilizzare questo array: https://pastebin.com/CkX3680A
    // Stampiamo il nostro array mettendo gli insegnanti
    // in un rettangolo grigio e i PM in un rettangolo verde.

    // url http://localhost/index.php

    ?>

  </head>
  <body>

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

      foreach ($db as $ruoli => $ruoliNomi) {

        if ($ruoli == "teachers") {
          echo "<p style='color:grey; font-weight: bold'>" . strtoupper($ruoli) . "</div><br>";

          foreach ($ruoliNomi as $nomi) {
            echo "<p style='color:grey'>" . $nomi["name"] . " " . $nomi["lastname"] . "</div><br>";
          }
        } else if ($ruoli == "pm") {
          echo "<p style='color:green; font-weight: bold'>" . strtoupper($ruoli) . "</div><br>";

          foreach ($ruoliNomi as $nomi) {
            echo "<p style='color:green'>" . $nomi["name"] . " " . $nomi["lastname"] . "</div><br>";
          }
        }
      };

    ?>


  </body>
</html>
