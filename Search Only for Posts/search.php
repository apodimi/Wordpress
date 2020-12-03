<?php 

$col = 0;
if ( have_posts() ) {
    if ($col == 0){
            echo "<div class=\"row\">";
        }
	while ( have_posts()) {
        the_post(); 
        echo "<div class=\"col-md-3 product-card\">";?>
        <?php $id = get_post();?>
        <div class="card" >
            <?php the_post_thumbnail( array(400, 400), array( 'class' => 'card-img-top' ) ); ?>
            <div class="card-body">
                <a href="<?php echo get_permalink(); ?>" class="product-title" ><h3 class="card-title product-title" ><?php echo the_title();?></h3></a>
                <h3 class="priceOnProductTitle">Τιμή : <?php the_field('price'); ?> €</h3>            
                </div>
        </div>
	<?php	echo "</div>";
    } // end while
    echo "</div>";
} // end if

?>
