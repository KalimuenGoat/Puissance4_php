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
      <input type="hidden" name="joueur" value="1">
      <label for="player1select">Player 1, please choose a column</label>
      <select name="colonne" id="columnselect1">
        <option value="0">1</option>
        <option value="1">2</option>
        <option value="2">3</option>
        <option value="3">4</option>
        <option value="4">5</option>
        <option value="5">6</option>
        <option value="6">7</option>
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
        $k = 5 - $i;
        if ($_SESSION['board'][$j][$k] == "1") {
          echo "<td class='j1'></td>";
        } else if ($_SESSION['board'][$j][$k] == "2") {
          echo "<td class='j2'></td>";
        } else {
          echo "<td class='vide'></td>";
        }
      }
      echo "</tr>";
    }
    ?>
  </table>
  <section>
    <form action="play.php" method="post">
      <input type="hidden" name="joueur" value="2">
      <label for="player1select">Player 2, please choose a column</label>
      <select name="colonne" id="columnselect1">
        <option value="0">1</option>
        <option value="1">2</option>
        <option value="2">3</option>
        <option value="3">4</option>
        <option value="4">5</option>
        <option value="5">6</option>
        <option value="6">7</option>
      </select>
      <input type="submit" name="jouer" value="Jouer">
    </form>
  </section>
  <section>
    <form action="index.php" method="post">
      <input type="submit" name="jouer" value="Restart">
    </form>
  </section>
</body>

</html>