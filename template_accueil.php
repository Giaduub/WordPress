<?php /* Template Name: page d'accueil */ ?>

<?php get_header(); ?>

<div class="col-9">
    <div class=" my-4 container">
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


    <div class="container my-4">

        <?php while (have_posts()) : the_post(); ?>
        <h2 class="my-4 text-uppercase">About <span>paper</span></h2>
        <div class="row">
            <?php the_content(); ?>
            <?php endwhile; ?>
        </div>
    </div>


 


<div class="container">
<div class="bd-example">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
<?php
$slide = get_field("image_slider");
for ($i=1; $i < count($slide); $i++){
echo '<li data-target="#carouselExampleCaptions" data-slide-to="'.$i.'">';
}
?>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="<?=$slide[0]["img_slider"]['url']?>" class="d-block w-100" alt="...">
</div>
<?php

for ($i=1; $i < count($slide); $i++){
echo '<div class="carousel-item">
<img src="'.$slide[$i]["img_slider"]['url'].'" class="d-block w-100" alt="...">
</div>';
}
?>
</div>
</div>
</div>
    </div>

    <div class="container">
        <h2 class="my-4 text-uppercase">This is an <span>awesome design</span></h2>
        <div class="row">
            <?php 

        $paragraphe = get_field('texte_p'); 

      
     echo "<div class='awesome'>";
     echo "<p class='paragraphe'>".$paragraphe."</p></div>";


?>
        </div>
    </div>

    <div class="container">
        <h3 class="my-4 text-uppercase">This is a quote or <span>call to action</span></h3>
        <div class="row justify-content-center">
            <div class="col-10 ">
            <?php $quote = get_field('quote');

            for($i=0; $i < count($quote); $i++){
                echo "<p class='texte_q'>".$quote[$i]['texte_q']."</p>";
                echo "<div class='d-flex justify-content-end'> <p class='details'>".$quote[$i]['details']."</p></div>";
            }
            // var_dump($quote);
            ?>
            </div>
        </div>
        </div>

</div>

<?php get_footer(); ?>