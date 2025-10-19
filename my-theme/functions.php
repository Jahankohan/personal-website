<?php
/**
 * Personal Website Design Theme Functions
 *
 * @package Personal_Website_Design
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup function
 */
function personal_website_design_setup() {
    // Add theme support for title tag
    add_theme_support('title-tag');
    
    // Add theme support for post thumbnails
    add_theme_support('post-thumbnails');
    
    // Add theme support for HTML5 markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    
    // Add theme support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-width'  => true,
        'flex-height' => true,
    ));
    
    // Add theme support for custom header
    add_theme_support('custom-header');
    
    // Add theme support for custom background
    add_theme_support('custom-background');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary'   => esc_html__('Primary Menu', 'personal-website-design'),
        'footer'    => esc_html__('Footer Menu', 'personal-website-design'),
        'social'    => esc_html__('Social Media Menu', 'personal-website-design'),
    ));
}
add_action('after_setup_theme', 'personal_website_design_setup');

/**
 * Enqueue scripts and styles
 */
function personal_website_design_enqueue_assets() {
    // Enqueue Tailwind CSS
    wp_enqueue_style(
        'personal-website-design-tailwind',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        '1.0.0'
    );
    
    // Enqueue main JavaScript
    wp_enqueue_script(
        'personal-website-design-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );
    
    // Localize script for AJAX
    wp_localize_script('personal-website-design-main', 'personal_website_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('personal_website_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'personal_website_design_enqueue_assets');

/**
 * Register widget areas
 */
function personal_website_design_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'personal-website-design'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'personal-website-design'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Footer Area', 'personal-website-design'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here for the footer.', 'personal-website-design'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'personal_website_design_widgets_init');

/**
 * Custom excerpt length
 */
function personal_website_design_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'personal_website_design_excerpt_length');

/**
 * Custom excerpt more link
 */
function personal_website_design_excerpt_more($more) {
    return ' <a href="' . get_permalink() . '" class="read-more">Read More</a>';
}
add_filter('excerpt_more', 'personal_website_design_excerpt_more');

/**
 * Add custom image sizes
 */
function personal_website_design_image_sizes() {
    add_image_size('hero-image', 1200, 600, true);
    add_image_size('blog-thumbnail', 400, 250, true);
    add_image_size('resource-thumbnail', 300, 200, true);
}
add_action('after_setup_theme', 'personal_website_design_image_sizes');

/**
 * Customize login page styles
 */
function personal_website_design_login_styles() {
    wp_enqueue_style('personal-website-design-login', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('login_enqueue_scripts', 'personal_website_design_login_styles');

/**
 * Remove WordPress version from head for security
 */
remove_action('wp_head', 'wp_generator');

/**
 * Security: Hide login errors
 */
function personal_website_design_hide_login_errors() {
    return 'Something is wrong!';
}
add_filter('login_errors', 'personal_website_design_hide_login_errors');

/**
 * Custom Navigation Walker for Desktop Menu
 */
class Personal_Website_Design_Nav_Walker extends Walker_Nav_Menu {
    
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $output .= '<a href="' . esc_url($item->url) . '" ';
        $output .= 'class="nav-link transition-colors duration-300 hover:opacity-80" ';
        $output .= 'style="color: white;">';
        $output .= esc_html($item->title);
        $output .= '</a>';
    }
}

/**
 * Custom Navigation Walker for Mobile Menu
 */
class Personal_Website_Design_Mobile_Nav_Walker extends Walker_Nav_Menu {
    
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $output .= '<a href="' . esc_url($item->url) . '" ';
        $output .= 'class="block w-full text-left py-2 px-4 rounded-lg transition-colors" ';
        $output .= 'style="color: var(--deep-tech-blue);">';
        $output .= esc_html($item->title);
        $output .= '</a>';
    }
}

/**
 * Fallback menu for desktop navigation
 */
function personal_website_design_fallback_menu() {
    // Get blog URL - either a dedicated blog page or the home page if it shows posts
    $blog_url = get_option('page_for_posts') ? get_permalink(get_option('page_for_posts')) : home_url('/');
    if (get_option('show_on_front') === 'page' && !get_option('page_for_posts')) {
        // If front page is set to a static page but no blog page is set, link to index
        $blog_url = home_url('/?post_type=post');
    }
    
    $menu_items = array(
        array('title' => 'Home', 'url' => home_url('/')),
        array('title' => 'About', 'url' => home_url('/about/')),
        array('title' => 'Resources', 'url' => home_url('/resources/')),
        array('title' => 'Blog', 'url' => $blog_url),
        array('title' => 'Book', 'url' => home_url('/book/')),
    );
    
    foreach ($menu_items as $item) {
        echo '<a href="' . esc_url($item['url']) . '" class="nav-link transition-colors duration-300 hover:opacity-80" style="color: white;">' . esc_html($item['title']) . '</a>';
    }
}

/**
 * Fallback menu for mobile navigation
 */
function personal_website_design_mobile_fallback_menu() {
    // Get blog URL - either a dedicated blog page or the home page if it shows posts
    $blog_url = get_option('page_for_posts') ? get_permalink(get_option('page_for_posts')) : home_url('/');
    if (get_option('show_on_front') === 'page' && !get_option('page_for_posts')) {
        // If front page is set to a static page but no blog page is set, link to index
        $blog_url = home_url('/?post_type=post');
    }
    
    $menu_items = array(
        array('title' => 'Home', 'url' => home_url('/')),
        array('title' => 'About', 'url' => home_url('/about/')),
        array('title' => 'Resources', 'url' => home_url('/resources/')),
        array('title' => 'Blog', 'url' => $blog_url),
        array('title' => 'Book', 'url' => home_url('/book/')),
    );
    
    foreach ($menu_items as $item) {
        echo '<a href="' . esc_url($item['url']) . '" class="block w-full text-left py-2 px-4 rounded-lg transition-colors" style="color: var(--deep-tech-blue);">' . esc_html($item['title']) . '</a>';
    }
}

/**
 * Custom Navigation Walker for Footer Menu
 */
class Personal_Website_Design_Footer_Nav_Walker extends Walker_Nav_Menu {
    
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $output .= '<li>';
        $output .= '<a href="' . esc_url($item->url) . '" ';
        $output .= 'class="text-white/80 hover:text-white transition-colors">';
        $output .= esc_html($item->title);
        $output .= '</a>';
        $output .= '</li>';
    }
}

/**
 * Custom Navigation Walker for Social Menu
 */
class Personal_Website_Design_Social_Walker extends Walker_Nav_Menu {
    
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $social_icon = personal_website_design_get_social_icon_from_url($item->url);
        
        $output .= '<a href="' . esc_url($item->url) . '" ';
        $output .= 'target="_blank" rel="noopener noreferrer" ';
        $output .= 'class="w-10 h-10 rounded-full flex items-center justify-center transition-colors" ';
        $output .= 'style="background-color: rgba(255, 255, 255, 0.1);" ';
        $output .= 'onmouseover="this.style.backgroundColor=\'var(--sunset-orange)\'" ';
        $output .= 'onmouseout="this.style.backgroundColor=\'rgba(255, 255, 255, 0.1)\'" ';
        $output .= 'aria-label="' . esc_attr($item->title) . '">';
        $output .= $social_icon;
        $output .= '</a>';
    }
}

/**
 * Fallback menu for footer navigation
 */
function personal_website_design_footer_fallback_menu() {
    // Get blog URL - either a dedicated blog page or the home page if it shows posts
    $blog_url = get_option('page_for_posts') ? get_permalink(get_option('page_for_posts')) : home_url('/');
    if (get_option('show_on_front') === 'page' && !get_option('page_for_posts')) {
        // If front page is set to a static page but no blog page is set, link to index
        $blog_url = home_url('/?post_type=post');
    }
    
    $menu_items = array(
        array('title' => 'About', 'url' => home_url('/about/')),
        array('title' => 'Resources', 'url' => home_url('/resources/')),
        array('title' => 'Blog', 'url' => $blog_url),
        array('title' => 'Book', 'url' => home_url('/book/')),
        array('title' => 'Get in Touch', 'url' => home_url('/#contact')),
        array('title' => 'Link Hub', 'url' => home_url('/links/')),
    );
    
    foreach ($menu_items as $item) {
        echo '<li>';
        echo '<a href="' . esc_url($item['url']) . '" class="text-white/80 hover:text-white transition-colors">' . esc_html($item['title']) . '</a>';
        echo '</li>';
    }
}

/**
 * Get social media icon based on icon name
 */
function personal_website_design_get_social_icon($icon_name) {
    $icons = array(
        'twitter' => '<svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>',
        'linkedin' => '<svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>',
        'github' => '<svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>',
        'mail' => '<svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>',
    );
    
    return isset($icons[$icon_name]) ? $icons[$icon_name] : $icons['mail'];
}

/**
 * Get social media icon based on URL
 */
function personal_website_design_get_social_icon_from_url($url) {
    if (strpos($url, 'twitter.com') !== false || strpos($url, 'x.com') !== false) {
        return personal_website_design_get_social_icon('twitter');
    } elseif (strpos($url, 'linkedin.com') !== false) {
        return personal_website_design_get_social_icon('linkedin');
    } elseif (strpos($url, 'github.com') !== false) {
        return personal_website_design_get_social_icon('github');
    } elseif (strpos($url, 'mailto:') !== false) {
        return personal_website_design_get_social_icon('mail');
    }
    
    return personal_website_design_get_social_icon('mail');
}

/**
 * Calculate reading time for posts
 */
function personal_website_design_reading_time() {
    $content = get_post_field('post_content', get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200); // Average reading speed
    
    return $reading_time . ' min read';
}

/**
 * Customize the theme via WordPress Customizer
 */
function personal_website_design_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title'    => __('Hero Section', 'personal-website-design'),
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('hero_title', array(
        'default'           => 'Navigating the Future of AI & Emerging Tech',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label'   => __('Hero Title', 'personal-website-design'),
        'section' => 'hero_section',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'Expert insights on blockchain, artificial intelligence, and the technologies shaping tomorrow — with a human touch.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label'   => __('Hero Subtitle', 'personal-website-design'),
        'section' => 'hero_section',
        'type'    => 'textarea',
    ));
    
    // About Section
    $wp_customize->add_section('about_section', array(
        'title'    => __('About Section', 'personal-website-design'),
        'priority' => 31,
    ));
    
    $wp_customize->add_setting('about_content', array(
        'default'           => '<p>For over a decade, I\'ve been exploring the intersection of technology and human experience. What started as fascination with code evolved into a mission: making emerging technologies accessible, ethical, and beneficial for everyone.</p><p>From consulting Fortune 500 companies on AI strategy to helping startups navigate blockchain implementation, I\'ve seen firsthand how technology can either amplify or diminish our humanity. My work is guided by a simple principle: innovation without empathy is just noise.</p><p>When I\'m not decoding the latest tech trends, you\'ll find me sharing insights through writing, speaking at conferences, or spending quality time with my family — because the best technology is the kind that brings us closer together.</p>',
        'sanitize_callback' => 'wp_kses_post',
    ));
    
    $wp_customize->add_control('about_content', array(
        'label'   => __('About Content', 'personal-website-design'),
        'section' => 'about_section',
        'type'    => 'textarea',
    ));
    
    // Book Section
    $wp_customize->add_section('book_section', array(
        'title'    => __('Book Section', 'personal-website-design'),
        'priority' => 32,
    ));
    
    $wp_customize->add_setting('book_title', array(
        'default'           => 'The Human Algorithm: Finding Meaning in the Age of AI',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('book_title', array(
        'label'   => __('Book Title', 'personal-website-design'),
        'section' => 'book_section',
        'type'    => 'text',
    ));
    
    $wp_customize->add_setting('book_description', array(
        'default'           => 'A practical guide to maintaining your humanity while embracing the transformative power of artificial intelligence and emerging technologies. This book explores how we can shape technology that amplifies our best qualities rather than replacing them.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('book_description', array(
        'label'   => __('Book Description', 'personal-website-design'),
        'section' => 'book_section',
        'type'    => 'textarea',
    ));
    
    // Contact Section
    $wp_customize->add_section('contact_section', array(
        'title'    => __('Contact Section', 'personal-website-design'),
        'priority' => 33,
    ));
    
    $wp_customize->add_setting('contact_email', array(
        'default'           => 'hello@example.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('contact_email', array(
        'label'   => __('Contact Email', 'personal-website-design'),
        'section' => 'contact_section',
        'type'    => 'email',
    ));
}
add_action('customize_register', 'personal_website_design_customize_register');

/**
 * AJAX handler for post likes
 */
function personal_website_design_handle_like_post() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'personal_website_nonce')) {
        wp_die('Security check failed');
    }
    
    $post_id = intval($_POST['post_id']);
    
    if (!$post_id) {
        wp_send_json_error('Invalid post ID');
        return;
    }
    
    // Get current likes
    $likes = (int) get_post_meta($post_id, '_post_likes', true);
    
    // Check if user already liked (using IP or session)
    $user_likes = get_option('personal_website_user_likes', array());
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $like_key = $post_id . '_' . $user_ip;
    
    $liked = false;
    if (isset($user_likes[$like_key])) {
        // Unlike
        unset($user_likes[$like_key]);
        $likes = max(0, $likes - 1);
    } else {
        // Like
        $user_likes[$like_key] = time();
        $likes++;
        $liked = true;
    }
    
    // Update likes count
    update_post_meta($post_id, '_post_likes', $likes);
    update_option('personal_website_user_likes', $user_likes);
    
    wp_send_json_success(array(
        'likes' => $likes,
        'liked' => $liked
    ));
}
add_action('wp_ajax_like_post', 'personal_website_design_handle_like_post');
add_action('wp_ajax_nopriv_like_post', 'personal_website_design_handle_like_post');

/**
 * AJAX handler for contact form submission
 */
function personal_website_design_handle_contact_form() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'personal_website_nonce')) {
        wp_die('Security check failed');
    }
    
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);
    $company = sanitize_text_field($_POST['company']);
    
    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error('Please fill in all required fields');
        return;
    }
    
    if (!is_email($email)) {
        wp_send_json_error('Please provide a valid email address');
        return;
    }
    
    // Send email
    $to = get_theme_mod('contact_email', get_option('admin_email'));
    $email_subject = 'Contact Form: ' . $subject;
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    if ($company) {
        $email_message .= "Company: $company\n";
    }
    $email_message .= "Subject: $subject\n\n";
    $email_message .= "Message:\n$message";
    
    $headers = array(
        'From: ' . get_bloginfo('name') . ' <' . get_option('admin_email') . '>',
        'Reply-To: ' . $name . ' <' . $email . '>',
        'Content-Type: text/plain; charset=UTF-8'
    );
    
    $sent = wp_mail($to, $email_subject, $email_message, $headers);
    
    if ($sent) {
        wp_send_json_success('Message sent successfully');
    } else {
        wp_send_json_error('Failed to send message. Please try again.');
    }
}
add_action('wp_ajax_submit_contact_form', 'personal_website_design_handle_contact_form');
add_action('wp_ajax_nopriv_submit_contact_form', 'personal_website_design_handle_contact_form');

/**
 * Custom comment display
 */
function personal_website_design_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    
    switch ($comment->comment_type) :
        case 'pingback' :
        case 'trackback' :
    ?>
    <div class="pingback">
        <p><?php _e('Pingback:', 'personal-website-design'); ?> <?php comment_author_link(); ?> <?php edit_comment_link(__('Edit', 'personal-website-design'), '<span class="edit-link">', '</span>'); ?></p>
    </div>
    <?php
            break;
        default :
    ?>
    <div <?php comment_class('flex gap-4 mb-6'); ?> id="comment-<?php comment_ID(); ?>">
        <div class="flex-shrink-0">
            <?php echo get_avatar($comment, 48, '', '', array('class' => 'w-12 h-12 rounded-full')); ?>
        </div>
        
        <div class="flex-1">
            <div class="flex items-center gap-2 mb-2">
                <span class="font-medium text-gray-900"><?php comment_author(); ?></span>
                <span class="text-sm text-gray-500">•</span>
                <time class="text-sm text-gray-500" datetime="<?php comment_time('c'); ?>">
                    <?php comment_time(); ?> on <?php comment_date(); ?>
                </time>
            </div>
            
            <?php if ($comment->comment_approved == '0') : ?>
                <p class="text-sm text-yellow-600 mb-2">
                    <em><?php _e('Your comment is awaiting moderation.', 'personal-website-design'); ?></em>
                </p>
            <?php endif; ?>
            
            <div class="text-gray-700 mb-2">
                <?php comment_text(); ?>
            </div>
            
            <div class="flex items-center gap-4 text-sm">
                <?php
                comment_reply_link(array_merge($args, array(
                    'depth'     => $depth,
                    'max_depth' => $args['max_depth'],
                    'before'    => '<button class="text-blue-600 hover:text-blue-800 transition-colors">',
                    'after'     => '</button>',
                )));
                ?>
                
                <?php edit_comment_link(__('Edit', 'personal-website-design'), '<span class="text-gray-500 hover:text-gray-700 transition-colors">', '</span>'); ?>
            </div>
        </div>
    </div>
    <?php
            break;
    endswitch;
}
/**
 * Customize WordPress Admin
 */
function my_theme_customizer($wp_customize) {
    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title' => 'Hero Section',
        'priority' => 30,
    ));

    $wp_customize->add_setting('hero_title', array(
        'default' => 'Building Bridges Between Technology and Humanity',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hero_title', array(
        'label' => 'Hero Title',
        'section' => 'hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_description', array(
        'default' => 'Technology strategist, blockchain advocate, and author exploring the future of human-centered innovation.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('hero_description', array(
        'label' => 'Hero Description',
        'section' => 'hero_section',
        'type' => 'textarea',
    ));

    // About Page Section
    $wp_customize->add_section('about_section', array(
        'title' => 'About Page',
        'priority' => 35,
    ));

    $wp_customize->add_setting('about_hero_title', array(
        'default' => 'Building Bridges Between Technology and Humanity',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('about_hero_title', array(
        'label' => 'About Hero Title',
        'section' => 'about_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('about_hero_description', array(
        'default' => 'I am a technology strategist, blockchain enthusiast, and AI advocate dedicated to ensuring that emerging technologies serve humanity, not the other way around.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('about_hero_description', array(
        'label' => 'About Hero Description',
        'section' => 'about_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('about_hero_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_hero_image', array(
        'label' => 'About Hero Image',
        'section' => 'about_section',
    )));

    // Stats
    for ($i = 1; $i <= 4; $i++) {
        $defaults = array('12+', '150+', '100+', '98%');
        $labels = array('Years of Experience', 'Projects Delivered', 'Speaking Engagements', 'Client Satisfaction');
        
        $wp_customize->add_setting("about_stat_{$i}_value", array(
            'default' => $defaults[$i-1],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("about_stat_{$i}_value", array(
            'label' => "Stat {$i} Value",
            'section' => 'about_section',
            'type' => 'text',
        ));

        $wp_customize->add_setting("about_stat_{$i}_label", array(
            'default' => $labels[$i-1],
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("about_stat_{$i}_label", array(
            'label' => "Stat {$i} Label",
            'section' => 'about_section',
            'type' => 'text',
        ));
    }

    // Links Page Section
    $wp_customize->add_section('links_section', array(
        'title' => 'Links Hub Page',
        'priority' => 40,
    ));

    $wp_customize->add_setting('links_name', array(
        'default' => get_bloginfo('name'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('links_name', array(
        'label' => 'Display Name',
        'section' => 'links_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('links_tagline', array(
        'default' => 'Author | Tech Consultant | Future Builder',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('links_tagline', array(
        'label' => 'Tagline',
        'section' => 'links_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('links_bio', array(
        'default' => 'I help organizations navigate the intersection of AI, blockchain, and human-centered technology. Author of "The Human Algorithm" and passionate about building a more inclusive digital future.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('links_bio', array(
        'label' => 'Bio',
        'section' => 'links_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('links_profile_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'links_profile_image', array(
        'label' => 'Profile Image',
        'section' => 'links_section',
    )));

    // Social Media Section
    $wp_customize->add_section('social_media', array(
        'title' => 'Social Media',
        'priority' => 45,
    ));

    $social_platforms = array(
        'twitter' => 'Twitter',
        'linkedin' => 'LinkedIn',
        'youtube' => 'YouTube',
        'instagram' => 'Instagram',
        'github' => 'GitHub',
        'facebook' => 'Facebook'
    );

    foreach ($social_platforms as $platform => $label) {
        $wp_customize->add_setting("social_{$platform}", array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control("social_{$platform}", array(
            'label' => "{$label} URL",
            'section' => 'social_media',
            'type' => 'url',
        ));
    }
}
add_action('customize_register', 'my_theme_customizer');
