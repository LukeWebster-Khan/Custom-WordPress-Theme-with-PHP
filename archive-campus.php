<?php 
get_header();
pageBanner(array(
    'title'=> 'Our Campuses',
    'subtitle'=>'We have a variety of campuses.'
))
?>

<div class="container container--narrow page-section">

    <div class="acf-map"></div>
    <?php
  while(have_posts()){
    the_post();
    $mapLocation = get_field('map_location');
    ?>
    <div class="marker" data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng']; ?>">
    </div>
    <?php }
    echo paginate_links();
    ?>
</div>

</div>

<?php
get_footer();

?>