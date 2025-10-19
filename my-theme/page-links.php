<?php
/**
 * Template Name: Links Hub Page
 * Description: Custom template for the Links Hub page (like Linktree)
 * 
 * @package PersonalWebsiteDesign
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<main id="main" class="site-main" role="main">

    <?php while (have_posts()) : the_post(); ?>

        <div class="min-h-screen py-12 sm:py-20" style="background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%);">
            <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Header Section -->
                <div class="text-center mb-8 animate-slide-up">
                    <!-- Avatar with Glow -->
                    <div class="relative inline-block mb-6">
                        <div class="absolute inset-0 rounded-full blur-3xl opacity-40" 
                             style="background: radial-gradient(circle, var(--electric-cyan) 0%, var(--neural-purple) 100%);"></div>
                        <div class="relative">
                            <?php 
                            $profile_image = get_theme_mod('links_profile_image');
                            if ($profile_image) : 
                            ?>
                                <img src="<?php echo esc_url($profile_image); ?>" 
                                     alt="Profile" 
                                     class="w-32 h-32 sm:w-40 sm:h-40 rounded-full object-cover border-4 border-white shadow-2xl">
                            <?php else : ?>
                                <img src="https://images.unsplash.com/photo-1576558656222-ba66febe3dec?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjBoZWFkc2hvdCUyMHBvcnRyYWl0fGVufDF8fHx8MTc1OTM4OTAyNHww&ixlib=rb-4.1.0&q=80&w=1080" 
                                     alt="Profile" 
                                     class="w-32 h-32 sm:w-40 sm:h-40 rounded-full object-cover border-4 border-white shadow-2xl">
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Name & Tagline -->
                    <div>
                        <h1 class="mb-3 text-3xl sm:text-4xl tracking-tight" style="color: var(--deep-tech-blue);">
                            <?php echo get_theme_mod('links_name', get_bloginfo('name')); ?>
                        </h1>
                        <p class="text-lg text-gray-600 mb-4">
                            <?php echo get_theme_mod('links_tagline', 'Author | Tech Consultant | Future Builder'); ?>
                        </p>
                        <div class="flex items-center justify-center gap-2 flex-wrap">
                            <span class="inline-flex items-center px-3 py-1 text-sm font-medium text-white rounded-full" 
                                  style="background-color: var(--electric-cyan);">
                                <svg class="mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                </svg>
                                AI & Blockchain Expert
                            </span>
                            <span class="inline-flex items-center px-3 py-1 text-sm font-medium text-white rounded-full" 
                                  style="background-color: var(--neural-purple);">
                                Remote Dad
                            </span>
                        </div>
                    </div>
                </div>

                <!-- About Me -->
                <div class="text-center mb-8 animate-slide-up">
                    <p class="text-gray-600 leading-relaxed max-w-lg mx-auto">
                        <?php echo get_theme_mod('links_bio', 'I help organizations navigate the intersection of AI, blockchain, and human-centered technology. Author of "The Human Algorithm" and passionate about building a more inclusive digital future.'); ?>
                    </p>
                </div>

                <!-- Featured Card -->
                <div class="mb-8 animate-slide-up">
                    <div class="bg-white rounded-xl overflow-hidden border-2 hover:shadow-2xl transition-all duration-300 cursor-pointer" 
                         style="border-color: var(--warm-ember);">
                        <!-- Gradient top bar -->
                        <div class="h-2" style="background: linear-gradient(90deg, var(--warm-ember) 0%, var(--sunset-orange) 100%);"></div>
                        
                        <div class="p-6">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center" 
                                     style="background-color: var(--warm-ember);">
                                    <svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 2v4M22 4h-4"></path>
                                        <circle cx="4" cy="20" r="2"></circle>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <span class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium text-xs mb-2"
                                          style="background-color: var(--warm-ember); color: white; border: transparent;">
                                        🔥 FEATURED
                                    </span>
                                    <h3 class="mb-2 text-xl font-semibold" style="color: var(--deep-tech-blue);">
                                        New Book: The Human Algorithm
                                    </h3>
                                    <p class="text-gray-600 mb-3">
                                        Discover how to harness AI and blockchain to amplify human potential. Download the first chapter free!
                                    </p>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4" style="color: var(--sunset-orange);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15V3m0 12l-4-4m4 4l4-4M2 17l.621 2.485A2 2 0 004.561 21h14.878a2 2 0 001.94-1.515L22 17"></path>
                                        </svg>
                                        <span class="text-sm" style="color: var(--sunset-orange);">
                                            Free Sample Chapter Available
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Links -->
                <div class="space-y-4 mb-8">
                    <?php
                    $main_links = array(
                        array(
                            'title' => 'Read My Book',
                            'description' => 'Discover "The Human Algorithm" and get a free chapter',
                            'url' => home_url('/book/'),
                            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>',
                            'color' => 'var(--sunset-orange)'
                        ),
                        array(
                            'title' => 'Visit My Website',
                            'description' => 'Explore my full portfolio and blog',
                            'url' => home_url('/'),
                            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9 3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>',
                            'color' => 'var(--deep-tech-blue)'
                        ),
                        array(
                            'title' => 'Free Resources Library',
                            'description' => 'Tools, templates, and guides for tech leaders',
                            'url' => home_url('/resources'),
                            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>',
                            'color' => 'var(--electric-cyan)'
                        ),
                        array(
                            'title' => 'Read My Blog',
                            'description' => 'Insights on AI, blockchain, and human-centered tech',
                            'url' => get_option('page_for_posts') ? get_permalink(get_option('page_for_posts')) : home_url('/'),
                            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>',
                            'color' => 'var(--neural-purple)'
                        ),
                        array(
                            'title' => 'Get in Touch',
                            'description' => 'Consultancy, speaking, collaborations, or just say hello',
                            'url' => home_url('/#contact'),
                            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>',
                            'color' => 'var(--warm-ember)'
                        ),
                        array(
                            'title' => 'Subscribe to Newsletter',
                            'description' => 'Weekly insights delivered to your inbox',
                            'url' => home_url('/#contact'),
                            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>',
                            'color' => 'var(--deep-tech-blue)'
                        )
                    );

                    foreach ($main_links as $index => $link) :
                    ?>
                        <div class="animate-slide-up" style="animation-delay: <?php echo $index * 0.1; ?>s;">
                            <a href="<?php echo esc_url($link['url']); ?>" 
                               class="group block w-full py-5 px-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-[1.02] border-2"
                               style="border-color: <?php echo $link['color']; ?>;"
                               <?php echo (strpos($link['url'], 'http') === 0) ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>>
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-xl flex items-center justify-center text-white flex-shrink-0"
                                         style="background-color: <?php echo $link['color']; ?>;">
                                        <?php echo $link['icon']; ?>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-lg font-medium mb-1" style="color: var(--deep-tech-blue);">
                                            <?php echo esc_html($link['title']); ?>
                                        </h3>
                                        <?php if (!empty($link['description'])) : ?>
                                            <p class="text-gray-600 text-sm mt-1">
                                                <?php echo esc_html($link['description']); ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                    <svg class="w-5 h-5 text-gray-400 group-hover:text-gray-600 transition-colors flex-shrink-0" 
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Social Links -->
                <div class="text-center animate-slide-up">
                    <p class="text-gray-600 mb-4">Connect with me</p>
                    <div class="flex items-center justify-center gap-4 flex-wrap mb-8">
                        <?php
                        $social_links = array(
                            array(
                                'name' => 'Twitter',
                                'url' => get_theme_mod('social_twitter', 'https://twitter.com/yourusername'),
                                'color' => 'rgb(29, 161, 242)',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter text-white" aria-hidden="true"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path></svg>'
                            ),
                            array(
                                'name' => 'LinkedIn',
                                'url' => get_theme_mod('social_linkedin', 'https://linkedin.com/in/yourprofile'),
                                'color' => 'rgb(0, 119, 181)',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin text-white" aria-hidden="true"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect width="4" height="12" x="2" y="9"></rect><circle cx="4" cy="4" r="2"></circle></svg>'
                            ),
                            array(
                                'name' => 'YouTube',
                                'url' => get_theme_mod('social_youtube', 'https://youtube.com/@yourchannel'),
                                'color' => 'rgb(255, 0, 0)',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube text-white" aria-hidden="true"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"></path><path d="m10 15 5-3-5-3z"></path></svg>'
                            ),
                            array(
                                'name' => 'Instagram',
                                'url' => get_theme_mod('social_instagram', 'https://instagram.com/yourhandle'),
                                'color' => 'rgb(228, 64, 95)',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram text-white" aria-hidden="true"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>'
                            ),
                            array(
                                'name' => 'GitHub',
                                'url' => get_theme_mod('social_github', 'https://github.com/yourusername'),
                                'color' => 'rgb(51, 51, 51)',
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github text-white" aria-hidden="true"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"></path><path d="M9 18c-4.51 2-5-2-7-2"></path></svg>'
                            )
                        );

                        foreach ($social_links as $social) :
                        ?>
                            <a href="<?php echo esc_url($social['url']); ?>" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300"
                               style="background-color: <?php echo $social['color']; ?>;"
                               aria-label="<?php echo esc_attr($social['name']); ?>">
                                <?php echo $social['icon']; ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <div>
                        <p class="text-gray-500 text-sm mb-2">Building a future where technology amplifies humanity ✨</p>
                        <p class="text-gray-400 text-xs">© <?php echo date('Y'); ?> All rights reserved.</p>
                    </div>
                </div>

                <!-- Back to Home Link -->
                <div class="text-center mt-8 animate-slide-up">
                    <a href="<?php echo home_url('/'); ?>" 
                       class="text-sm text-gray-500 hover:text-gray-700 transition-colors inline-flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                        </svg>
                        Visit Full Website
                    </a>
                </div>

                <!-- Main Content Area (for additional content) -->
                <?php if (get_the_content()) : ?>
                    <div class="mt-12 prose prose-lg max-w-none">
                        <?php the_content(); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Decorative Background Elements -->
            <div class="fixed inset-0 pointer-events-none overflow-hidden -z-10">
                <div class="absolute top-20 left-10 w-64 h-64 rounded-full opacity-5 animate-pulse" 
                     style="background-color: var(--electric-cyan);"></div>
                <div class="absolute bottom-20 right-10 w-80 h-80 rounded-full opacity-5 animate-pulse" 
                     style="background-color: var(--neural-purple); animation-delay: 1s;"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full opacity-5 animate-pulse" 
                     style="background-color: var(--warm-ember); animation-delay: 2s;"></div>
            </div>
        </div>

    <?php endwhile; ?>

</main><!-- #main -->

<?php wp_footer(); ?>
</body>
</html>