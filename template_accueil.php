<?php /* Template Name: page d'accueil */ ?>

<?php get_header(); ?>

<div class="col-9">
            <div class="container">
                <div class="row">
                    <h2 class="my-4 text-uppercase"> Latest <span>work</span> </h2>

                    <?php 

$work = get_field("images");

for($i=0; $i <count($work) ; $i++){
     echo "<div class = 'col-12 col-md-3 my-2'>";
     echo "<img src ='".$work[$i]['image']."' class='img-fluid' </br>";
     echo "<p>".$work[$i]['titre']."</p></br>";
     echo "</div>";
}

?>


                </div>
            </div>


            <div class="container">

                <?php while (have_posts()) : the_post(); ?>
                <h2 class="aboutt"><?php the_title(); ?></h2>
                <div class="row">
                    <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </div>


            <?php $slide = get_field("image_slider"); ?>

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= $slide[0]['img_slider']['url']?>"
                            alt="<?= $slide[0]['description']?>">
                    </div>
                    <?php 

for($i=1; $i <count($slide) ; $i++){
     echo "<div class='carousel-item'>";
     echo "<img class='d-block w-100' src='".$slide[$i]['img_slider']['url']."' alt='".$slide[$i]['description']."'></div>";

}

?>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        
</div>

<?php get_footer(); ?>