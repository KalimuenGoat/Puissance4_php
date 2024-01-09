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
    <form action="play.php" method="post">
      <input type="hidden" name="joueur" value="j1">
      <label for="player1select">Player 1, please choose a column</label>
      <select name="colonne" id="columnselect1">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
      </select>
      <input type="submit" name="jouer" value="Jouer">
    </form>
  </section>
  <table>
    <caption>
      Puissance 4
    </caption>
    <?php
    for ($i = 0; $i < 6; $i++) {
      echo "<tr>";
      for ($j = 0; $j < 7; $j++) {
        echo "<td>";
        // if ($i % 2 == 0) {
        //   echo "<td class='j1'></td>";
        // } else {
        //   echo "<td class='j2'></td>";
        // }
      }
      echo "</tr>";
    }
    if ($_SESSION['board'][$colonne][$j] = "j1") {
      echo "<td class='j1'></td>";
    } else {
      echo "<td class='j2'></td>";
    }
    ?>
  </table>
  <section>
    <form action="play.php" method="post">
      <input type="hidden" name="joueur" value="j2">
      <label for="player1select">Player 2, please choose a column</label>
      <select name="colonne" id="columnselect1">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
      </select>
      <input type="submit" name="jouer" value="Jouer">
    </form>
  </section>
</body>

</html>