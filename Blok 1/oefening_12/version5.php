<?php 
    $names = ['Bram', 'Colin', 'Collin', 'Damian', 'David', 'Dieter',
    'Dimitri', 'Frial', 'Jaylani', 'Jesper', 'Jesse', 'Job', 'Jouke', 'Jouri',
    'Koen', 'Kyra', 'Manon', 'Mathhew', 'Matthijs', 'Niels', 'Pascal',
    'Sander', 'Tim', 'Jessy', 'Jorn', 'Justin'];
    $name_length = $_GET['naamlengte'];
    $show_names = [];

    // If $name_length is null, show all names.
    // Otherwise, push the elements with a strlen that matches $name_length to $show_names
    if ($name_length == NULL) 
    {
        $show_names = $names;

        // Add all names in $names to $show_names with their corresponding strlen
        foreach ($names as $key => $value) 
        {
            array_push($show_names, 'Naamlengte = ' . strlen($value) . ' ' . $value) ;
        }

        // Sort $show_names alphabetically
        sort($show_names);
    } else 
    {
      foreach ($names as $value) 
      {
        if (strlen($value) == $name_length) 
        {
          array_push($show_names, $value);
        }         
      }         

      // Sort $show_names alphabetically
      sort($show_names);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oefening 12</title>

<body>
    <p>
        <?php
            // If $show_names is empty, display a message.
            // Otherwise, output all values in $show_names 
            if ($show_names == []) 
            {
                echo 'No names found with that length';
            } else 
            {
              foreach ($show_names as $value) 
              {
                echo $value . '<br />';
              }
            }
        ?>
    </p>
</body>
