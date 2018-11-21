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
                <div class="product-box">
                    <div class="col-content-box">

                        <h1><?php echo $title; ?></h1>
                        <?php echo $desc; ?>                      

                        <?php if(have_rows('price')): ?>

                        <div class="price-box">

                            <div class="price-box-inner">

                            <?php while(have_rows('price')): the_row(); 
                            
                                $price_title = get_sub_field('price_title');
                                $price = get_sub_field('price');
                                $full_price = get_sub_field('full_price');
                            
                            ?>
                                <div class="price-container">
                                    <?php if($price_title):
                                        echo '<p class="price-title">' .  $price_title . '</p>';
                                    endif; ?>

                                    <?php if($price):
                                        echo '<p class="price">' .  $price . '</p>';
                                    endif; ?>

                                    <?php if($full_price):
                                        echo '<p class="full-price">' .  $full_price . '</p>';
                                    endif; ?>                                    
                                </div>

                            <?php endwhile; ?> 
                            
                            </div>

                            <?php 
                            if($note):
                                echo '<p class="note">' .  $note . '</p>';
                            endif; ?>
                            <div class="link">
                                <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                            </div>
                        </div>

                    </div>

                    <div class="col-img-box">
                        <img src="<?php echo $img['url']; ?>" alt="">
                    </div>

                    <?php endif; ?>

                </div>

            <?php endwhile; ?>

        </section>

        <?php endif; ?>

    </div>
    
    <?php elseif (get_row_layout() == 'testimonials'): ?>

        <section class="testimonials">

            <h1>Testimonials</h1>
            
            <?php if(have_rows('repeater')): ?>

                <div class="testimonials-container">                

                    <div class="prev">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon_arrow_left.png" alt="Left">
                    </div>                    

                    <div class="slider-class">                    

                        <?php while(have_rows('repeater')): the_row();

                        $testimonial = get_sub_field('testimonial');
                        $name = get_sub_field('name');

                        ?>

                        <div class="content">

                            <?php if($testimonial):
                                echo '<div class="text-justify">' . $testimonial . '</div>';
                            endif;
                            ?>
                            <?php if($name):
                                echo '<div class="text-center">' . $name . '</div>';
                            endif;
                            ?>

                        </div>                   

                        <?php endwhile; ?>

                    </div>

                    <div class="next">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icon_arrow_right.png" alt="Left">
                    </div>

                </div>

            <?php endif; ?> 
           
        </section>

    
    <?php endif; ?>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>