<?php 
$text = $_GET["text"] ?? NULL;
$word = $_GET["word"] ?? NULL;
$bold = $_GET["bold"] ?? NULL;
$italic = $_GET["italic"] ?? NULL;


// Handle empty textarea
if (isset($text) && $text !== "") {
    if (isset($word) && $word !=="") {
      
      // Count the amount of words
      $word_amount = substr_count($text, $word);
      echo "This is the word that was selected: $word <br />";  
      echo "It occurs $word_amount times in the sumbitted text <br />";
      echo "<br />";

      // Italics & bold conditional checks
      if (isset($italic) && isset($bold)) {
        echo str_replace($word, "<em><strong>$word</strong></em>", $text);     
        echo "<br />";
      } elseif ($bold == "on") {
        echo str_replace($word, "<strong>$word</strong>", $text);     
        echo "<br />";
      } elseif ($italic == "on") {
        echo str_replace($word, "<em>$word</em>", $text);     
        echo "<br />";
      }

    // Handle if no word was selected
    } else {
      echo $text;
      echo "<br />";
    }
    echo "<a href='index.php'>Nog een keer</a>";
} else {
  echo "You did not enter any text!";
  echo "<br />";
  echo "<a href='index.php'>Nog een keer</a>";
}

