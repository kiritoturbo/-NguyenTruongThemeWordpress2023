<section class="contact">
            <div class="contact-item">
                <img src="<?php bloginfo('template_directory') ?>/images/contact-phone.png" alt="" />
                <div class="item-right">
                    <p class="name">Liên hệ</p>
                    <p class="content">
                        <!-- <?php echo esc_html( get_field('lien_he') ); ?> -->
                        <?php 
                        global $post;
                        $phoneNumber = get_post_meta($post->ID, 'phoneNumber', true);
                        echo $phoneNumber;
                        // die();
                        ?>
                    </p>
                </div>
            </div>
            <div class="contact-item">
                <img src="<?php bloginfo('template_directory') ?>/images/contact-email.png" alt="" />
                <div class="item-right">
                    <p class="name">Email</p>
                    <p class="content">
                        <!-- <?php echo esc_html( get_field('email_contact') ); ?> -->
                        <?php 
                        global $post;
                        $emailCompany = get_post_meta($post->ID, 'emailCompany', true);
                        echo $emailCompany;
                        // die();
                        ?>
                    </p>
                </div>
            </div>
            <div class="contact-item">
                <img src="<?php bloginfo('template_directory') ?>/images/contact-address.png" alt="" />
                <div class="item-right">
                    <p class="name">Địa chỉ</p>
                    <p class="content">
                        <!-- <?php echo esc_html( get_field('diachi') ); ?> -->
                        <?php 
                        global $post;
                        $addressCompany = get_post_meta($post->ID, 'addressCompany', true);
                        echo $addressCompany;
                        // die();
                        ?>
                    </p>
                </div>
            </div>
        </section>