<?php
// command has to go between tags
/* multiline
 comments */
 $name = "Johannes";
 $day = 'Friday';
 $date = 18;
 $test = "Hello PHP";
// concatenation of strings
 echo "Hello, " . $name . " Today is " . $day;
 // output html with double quotes
echo "<h1>$date</h1>";
// output html with single quotes
echo '<p>' . $day . '</p>';
?>

<div style="background-color:green;color:white;">
    <?php echo $test ?>
</div>