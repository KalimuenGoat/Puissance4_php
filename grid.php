<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=é, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Puissance4</title>
  </head>
  <body>
    <section>
      <label for="pet-select">Player 1, please choose a column</label>
      <select name="columnplayer1" id="columnselect1">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
      </select>
    </section>
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
    <section>
      <label for="pet-select">Player 2, please choose a column</label>
      <select name="columnplayer1" id="columnselect2">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
      </select>
    </section>
    </body>
</html>