<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=é, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Puissance 4</title>
  </head>
  <body>
    <table>
      <caption>
        Puissance 4
      </caption>
      <?php 
        for ($i=0; $i<6 ; $i++) { 
          echo "<tr>";
          for ($j=0; $j<7 ; $j++) { 
            if ($i%2==0){
              echo "<td class='j1'></td>";
            }else{
              echo "<td class='j2'></td>";
            }
          }
          echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>