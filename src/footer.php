			<!-- footer -->
			<footer class="footer" role="contentinfo">

                <div class="footer-container">

                    <div class="col-50">

                        <h3 class="contact-title">Contact Us</h3>

                        <p class="contact-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare condimentum imperdiet.</p>

                        <div class="footer-contact">
                            <?php if (have_rows('navigation')):  
                           
                                while( have_rows('navigation') ): the_row();

                                    if (have_rows('contact')) : ?>

                                        <ul class="number-container">
                                        <?php while (have_rows('contact')) : the_row();

                                            $icon = get_sub_field('icon');
                                            $app = get_sub_field('app');
                                            $number = get_sub_field('number');
                                        ?>
                                            <li>
                                                <span class="app-name"><?php echo $app; ?></span>
                                                <div class="border">
                                                    <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                                                    <span class="app-num"><?php  echo $number; ?></span>
                                                </div>
                                            </li> 
                                        <?php endwhile; ?>   
                                        </ul>
                                    <?php endif;
                                        
                                endwhile;
                                
                            endif;?>

                        </div>

                        <?php if(have_rows('footer_contact')): ?>

                        <div class="contact-data">

                            <?php while (have_rows('footer_contact')): the_row();
                            
                                $email = get_sub_field('email');
                                $adress = get_sub_field('adress');
                                $working_hour = get_sub_field('working_hour');
                            
                            ?>
                            
                            <?php if ($email): ?>
                            
                                <div class="email-container">
                                    <div class="contact-img">
                                        <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/email.png" />
                                    </div>
                                    <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                                </div>
                            <?php endif; ?>

                            <?php if ($adress): ?>
                            
                            <div class="email-container">
                                <div class="contact-img">
                                    <img src="<?php echo esc_url(get_template_directory_uri() ); ?>/img/map.png" />
                                </div>

                            <?php echo $adress; ?>                           

                            </div>

                             <?php endif; ?>

                             <?php if($working_hour) :?>

                            <div class="work-hour">
                                <p><?php echo $working_hour; ?></p>
                            </div>

                             <?php endif; ?>

                            <?php endwhile; ?>

                        </div>

                        <?php endif; ?>

                        
                        <?php if (have_rows('navigation')):  
                        
                            while( have_rows('navigation') ): the_row();

                                if (have_rows('social')) : ?>

                                    <div class="footer-social">

                                        <h3>Follow us:</h3>

                                        <ul class="social">
                                        <?php while (have_rows('social')) : the_row(); 

                                            $social_icon = get_sub_field('social_icon');
                                            $social_link = get_sub_field('social_link');?>

                                            <li>
                                                <a href="<?php echo $social_link['url']; ?>" target="<?php echo $social_link['target']; ?>"><img src="<?php echo $social_icon['url']; ?>" alt="<?php echo $social_icon['alt']; ?>"></a>
                                            </li>

                                        <?php endwhile; ?>  
                                        </ul>
                                    </div>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        

                    </div>

                    <div class="col-50">
                        
                        <?php echo do_shortcode('[gravityform id="1" title="true" ajax="true"]') ?>

                    </div>    
                
                </div>                

                <!-- copyright -->
                <p class="copyright">
                    &copy; <?php echo esc_html( date( 'Y' ) ); ?> Copyright <?php bloginfo( 'name' ); ?>.
                </p>
                <!-- /copyright -->               

			</footer>
			<!-- /footer -->

		</div>
        <!-- /wrapper -->   

		<?php wp_footer(); ?>

	</body>
</html>
