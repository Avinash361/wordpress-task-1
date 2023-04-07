<?php
    //Template Name: Home
    get_header( );
?>
    <section class="section-1">
        <div class="row">
            <p><?php the_content() ?></p></h4>
            <button class="btn-type-1">Start Project</button>
        </div>
    </section>  
    <section class="section-2">
        <div class="image-pos">
            <div class="box-1">
                <h5><img src="<?php bloginfo( 'template_directory' )?>/assets/star.png" alt=""> GREAT PROJECT</h5>
                <h3>800+ <span>Done</span> </h3>
            </div>
            <img src="<?php bloginfo( 'template_directory' )?>/assets/Group 2140.png" alt="" class="group-pts-1" />
            <img src="<?php bloginfo( 'template_directory' )?>/assets/Rectangle 844.png" alt="" />
            <img src="<?php bloginfo( 'template_directory' )?>/assets/Group 2141.png" alt="" class="group-pts-2" />
            <div class="box-2">
                <div class="user-box">
                    <div class="user-photo">
                        <img src="<?php bloginfo( 'template_directory' )?>/assets/Ellipse 50.png" alt="User photo">
                    </div>
                    <div class="user-info">
                        <div>Bill Adams</div>
                        <div class="user-designation">Creative Manager</div>
                    </div>
                </div>
                <div class="user-detail">
                    <p>“ This team is really the best in its field,I don't regret working with them, and will come back
                        again thanks “</p>
                </div>
            </div>
        </div>

    </section>

    <section class="section-4">
        <div class="row">
            <div class="col-1">
                <p class="color-primary">Our Services</p>
                <h2>Perfect and Fast
                    Movement</h2>
                <h5>We move with make a Creative Strategy for help your business goal, we help to improve your income by
                    a
                    services we have. make your content look interesting and make people look for your business</h5>
                <h6 class="color-primary">Read More</h6>
            </div>
            <div class="col-2">
                <div class="grid-container">
                    <div class="grid-item">
                        <div class="image"><img src="<?php bloginfo( 'template_directory' )?>/assets/monitor.png" alt=""></div>
                        <h5>Social Media <br>
                            Management</h5>
                    </div>
                    <div class="grid-item">
                        <div class="image"><img src="<?php bloginfo( 'template_directory' )?>/assets/settings.png" alt=""></div>
                        <h5>Search Engine <br>
                            Opimization</h5>
                    </div>
                    <div class="grid-item">
                        <div class="image"><img src="<?php bloginfo( 'template_directory' )?>/assets/pen-tool.png" alt=""></div>
                        <h5>Design</h5>
                    </div>
                    <div class="grid-item">
                        <div class="image"><img src="<?php bloginfo( 'template_directory' )?>/assets/tv.png" alt=""></div>
                        <h5>Ads</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>