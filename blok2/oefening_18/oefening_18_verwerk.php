<?php

// Setup frontend table structure
echo '<table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Value</th>
            </tr>
        </thead>
    <tbody>';

// Display key-value pairs from form in the table
foreach ($_POST as $name => $value) {
    echo '<tr>';
    echo "<td>$name</td>";
    echo "<td>$value</td>";
    echo '</tr>';
}

// Close off the table
echo '</tbody>';
echo '</table>';
