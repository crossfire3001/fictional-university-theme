<?php
 function greet($name, $color) {
    echo "<p>Hi my name is $name and I am $color</p>";
 }

 greet('Tom', 'grey');
 greet('Jerry', 'brown');
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>

<?php

$names = array('admin', 'pk', 'DK', 'wordpress');
$count = 0;

while ($count < count($names)) {
   echo "<li>Hi, my name is $names[$count]</li>";
   $count++;
}

?>
