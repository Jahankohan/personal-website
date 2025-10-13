    </div><!-- #content -->
</div><!-- #page -->

<footer class="pt-16 pb-8" style="background-color: var(--deep-tech-blue);">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-4 gap-8 mb-12">
            <!-- Brand Section -->
            <div class="md:col-span-2">
                <h3 class="text-white mb-4">
                    <?php 
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        bloginfo('name');
                    }
                    ?>
                </h3>
                <p class="text-white/80 mb-6 max-w-md">
                    <?php 
                    $site_description = get_bloginfo('description');
                    if ($site_description) {
                        echo esc_html($site_description);
                    } else {
                        echo 'Bridging the gap between emerging technologies and human values. Exploring AI, blockchain, and the future we\'re building together.';
                    }
                    ?>
                </p>
                
                <!-- Social Media Links -->
                <div class="flex gap-4">
                    <?php
                    // Get social media menu or fallback to default links
                    $social_menu = wp_nav_menu(array(
                        'theme_location' => 'social',
                        'container'      => false,
                        'echo'          => false,
                        'fallback_cb'   => false,
                        'walker'        => new Personal_Website_Design_Social_Walker(),
                    ));
                    
                    if ($social_menu) {
                        echo $social_menu;
                    } else {
                        // Fallback social links
                        $social_links = array(
                            array('name' => 'Twitter', 'url' => '#', 'icon' => 'twitter'),
                            array('name' => 'LinkedIn', 'url' => '#', 'icon' => 'linkedin'),
                            array('name' => 'GitHub', 'url' => '#', 'icon' => 'github'),
                            array('name' => 'Email', 'url' => 'mailto:hello@example.com', 'icon' => 'mail'),
                        );
                        
                        foreach ($social_links as $social) {
                            echo '<a href="' . esc_url($social['url']) . '" ';
                            echo 'target="_blank" rel="noopener noreferrer" ';
                            echo 'class="w-10 h-10 rounded-full flex items-center justify-center transition-colors" ';
                            echo 'style="background-color: rgba(255, 255, 255, 0.1);" ';
                            echo 'onmouseover="this.style.backgroundColor=\'var(--sunset-orange)\'" ';
                            echo 'onmouseout="this.style.backgroundColor=\'rgba(255, 255, 255, 0.1)\'" ';
                            echo 'aria-label="' . esc_attr($social['name']) . '">';
                            echo personal_website_design_get_social_icon($social['icon']);
                            echo '</a>';
                        }
                    }
                    ?>
                </div>
            </div>

            <!-- Explore Section -->
            <div>
                <h4 class="text-white mb-4">Explore</h4>
                <ul class="space-y-2">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container'      => false,
                        'menu_class'     => 'footer-nav-menu',
                        'fallback_cb'    => 'personal_website_design_footer_fallback_menu',
                        'walker'         => new Personal_Website_Design_Footer_Nav_Walker(),
                    ));
                    ?>
                </ul>
            </div>

            <!-- Categories Section -->
            <div>
                <h4 class="text-white mb-4">Categories</h4>
                <ul class="space-y-2">
                    <?php
                    $categories = get_categories(array(
                        'orderby' => 'count',
                        'order'   => 'DESC',
                        'number'  => 4,
                    ));
                    
                    if (!empty($categories)) {
                        foreach ($categories as $category) {
                            echo '<li>';
                            echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" ';
                            echo 'class="text-white/80 hover:text-white transition-colors">';
                            echo esc_html($category->name);
                            echo '</a>';
                            echo '</li>';
                        }
                    } else {
                        // Fallback categories
                        $fallback_categories = array(
                            array('name' => 'Future Tech Decoder', 'url' => home_url('/blog/')),
                            array('name' => 'Open Collaboration', 'url' => home_url('/blog/')),
                            array('name' => 'Human-Centered Innovation', 'url' => home_url('/blog/')),
                            array('name' => 'Remote Dad Notes', 'url' => home_url('/blog/')),
                        );
                        
                        foreach ($fallback_categories as $category) {
                            echo '<li>';
                            echo '<a href="' . esc_url($category['url']) . '" ';
                            echo 'class="text-white/80 hover:text-white transition-colors">';
                            echo esc_html($category['name']);
                            echo '</a>';
                            echo '</li>';
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="pt-8 border-t text-center text-white/60 text-sm" style="border-color: rgba(255, 255, 255, 0.1);">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            <p class="mt-2">
                Built with passion for technology and humanity.
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>