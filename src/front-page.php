<?php get_header(); ?>

</div>
<!-- /wrapper -->

<?php 
if (have_rows('flexible_content')):
    
    while (have_rows('flexible_content')): the_row(); 

    if (get_row_layout() == 'hero'):

        $bg = get_sub_field('bg_img');
        $heading = get_sub_field('heading');
        $link = get_sub_field('link');
    ?>

    <!-- hero -->
    <section class="hero" style="background: url(<?php echo $bg['url']; ?>) no-repeat center; background-size:cover;">        

        <div class="wrapper">  

            <div class="cta-area">

                <h1><?php echo $heading; ?></h1>
                <?php the_sub_field('text'); ?>
                <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a> 
                
            </div>

        </div>

    </section>

    <?php elseif (get_row_layout() == 'products'): ?>
    
    <div class="wrapper">

        <?php if (have_rows('content')): ?>

        <section class="product">

            <?php while(have_rows('content')): the_row(); 
            
                $title = get_sub_field('title');
                $desc = get_sub_field('desc');
                $img = get_sub_field('image');
                $link = get_sub_field('link');
                $note = get_sub_field('disclaimar'); 
            
            ?>

                <p><?php echo $title; ?></p>
                <?php echo $desc; ?>
                <img src="<?php echo $img['url']; ?>" alt="">

                <?php if(have_rows('price')): ?>

                    <div>

                    <?php while(have_rows('price')): the_row(); 
                    
                        $price_title = get_sub_field('price_title');
                        $price = get_sub_field('price');
                        $full_price = get_sub_field('full_price');
                    
                    ?>

                    <p><?php echo $price_title; ?></p>
                    <p><?php echo $price; ?></p>
                    <p><?php echo $full_price; ?></p>

                    <?php endwhile; ?>

                    </div>

                <?php endif; ?>

            <?php endwhile; ?>

        </section>

        <?php endif; ?>

    </div>
    
    <?php endif; ?>

    <?php endwhile; ?>

<?php endif; ?>

<div class="wrapper">

<?php get_footer(); ?>