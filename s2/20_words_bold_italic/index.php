<?php 
$words = ['table', 'weather', 'name', 'time', 'date', 'shell']
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="process.php">
    <textarea name="text"></textarea>
    <select name="word">
      <option value="">Pick a word...</option>
      <?php 
        foreach ($words as $word) {
          echo "<option value=$word>$word</option>";
        }
      ?>
    </select>
    <label for="bold">Bold</label>
    <input type="checkbox" name="bold"/>
    <label for="italic">Italic</label>
    <input type="checkbox" name="italic" />
    <button>Go</button>
  </form>
</body>
</html>
