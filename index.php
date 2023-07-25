<?php get_header(); ?>

<?php

$names = array('admin', 'pk', 'DK', 'wordpress');
$count = 0;

while ($count < count($names)) {
   echo "<li>Hi, my name is $names[$count]</li>";
   $count++;
}


while (have_posts()) {
   the_post(); ?>
   <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
   <?php the_content(); ?>
   <hr>
<?php }


?>

<?php get_footer(); ?>