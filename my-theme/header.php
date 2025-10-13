<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <style>
        :root {
            --font-size: 16px;
            --background: #ffffff;
            --foreground: oklch(0.145 0 0);
            --card: #ffffff;
            --card-foreground: oklch(0.145 0 0);
            --popover: oklch(1 0 0);
            --popover-foreground: oklch(0.145 0 0);
            --primary: #030213;
            --primary-foreground: oklch(1 0 0);
            --secondary: oklch(0.95 0.0058 264.53);
            --secondary-foreground: #030213;
            --muted: #ececf0;
            --muted-foreground: #717182;
            --accent: #e9ebef;
            --accent-foreground: #030213;
            --destructive: #d4183d;
            --destructive-foreground: #ffffff;
            --border: rgba(0, 0, 0, 0.1);
            --input: transparent;
            --input-background: #f3f3f5;
            --switch-background: #cbced4;
            --font-weight-medium: 500;
            --font-weight-normal: 400;
            --ring: oklch(0.708 0 0);
            --chart-1: oklch(0.646 0.222 41.116);
            --chart-2: oklch(0.6 0.118 184.704);
            --chart-3: oklch(0.398 0.07 227.392);
            --chart-4: oklch(0.828 0.189 84.429);
            --chart-5: oklch(0.769 0.188 70.08);
            --radius: 0.625rem;
            --sidebar: oklch(0.985 0 0);
            --sidebar-foreground: oklch(0.145 0 0);
            --sidebar-primary: #030213;
            --sidebar-primary-foreground: oklch(0.985 0 0);
            --sidebar-accent: oklch(0.97 0 0);
            --sidebar-accent-foreground: oklch(0.205 0 0);
            --sidebar-border: oklch(0.922 0 0);
            --sidebar-ring: oklch(0.708 0 0);
            
            /* Brand Colors */
            --deep-tech-blue: #0A2463;
            --neural-purple: #7B2CBF;
            --warm-ember: #F77F00;
            --sunset-orange: #FF6B35;
            --electric-cyan: #00D9FF;
            --clean-white: #FFFFFF;
        }
    </style>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php if (!is_page_template('page-links.php')) : ?>
<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-transparent" id="main-navigation">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo/Brand -->
            <div class="cursor-pointer" onclick="window.location.href='<?php echo esc_url(home_url('/')); ?>'">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <span class="tracking-tight" style="color: var(--deep-tech-blue);">
                        <?php bloginfo('name'); ?>
                    </span>
                <?php endif; ?>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <?php
                wp_nav_menu(array(
                    'theme_location'  => 'primary',
                    'menu_class'      => 'nav-menu',
                    'container'       => false,
                    'fallback_cb'     => 'personal_website_design_fallback_menu',
                    'walker'          => new Personal_Website_Design_Nav_Walker(),
                ));
                ?>
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" 
                   class="inline-flex items-center px-6 py-3 rounded-lg text-white transition-all hover:opacity-90"
                   style="background-color: var(--sunset-orange);"
                   onmouseover="this.style.backgroundColor='var(--deep-tech-blue)'"
                   onmouseout="this.style.backgroundColor='var(--sunset-orange)'">
                    Get in Touch
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden mobile-menu-button" 
                    id="mobile-menu-button"
                    aria-expanded="false"
                    aria-controls="mobile-menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden bg-white/95 backdrop-blur-md mobile-menu hidden" id="mobile-menu">
        <div class="px-4 pt-2 pb-4 space-y-3">
            <?php
            wp_nav_menu(array(
                'theme_location'  => 'primary',
                'menu_class'      => 'mobile-nav-menu',
                'container'       => false,
                'fallback_cb'     => 'personal_website_design_mobile_fallback_menu',
                'walker'          => new Personal_Website_Design_Mobile_Nav_Walker(),
            ));
            ?>
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" 
               class="block w-full text-center py-3 px-4 rounded-lg text-white"
               style="background-color: var(--sunset-orange);">
                Get in Touch
            </a>
        </div>
    </div>
</nav>

<script>
    // Navigation scroll effect
    window.addEventListener('scroll', function() {
        const nav = document.getElementById('main-navigation');
        if (window.scrollY > 50) {
            nav.classList.remove('bg-transparent');
            nav.classList.add('bg-white/90', 'backdrop-blur-md', 'shadow-lg');
        } else {
            nav.classList.add('bg-transparent');
            nav.classList.remove('bg-white/90', 'backdrop-blur-md', 'shadow-lg');
        }
    });
</script>
<?php endif; ?>

<div id="page" class="site">
    <div id="content" class="site-content">