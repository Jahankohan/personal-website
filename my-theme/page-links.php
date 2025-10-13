<?php
/**
 * Template Name: Links Hub Page
 * Description: Custom template for the Links Hub page (like Linktree)
 * 
 * @package PersonalWebsiteDesign
 */

get_header(); ?>

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

                <!-- Main Links -->
                <div class="space-y-4 mb-8">
                    <?php
                    $main_links = array(
                        array(
                            'title' => 'Read My Book',
                            'description' => 'Discover "The Human Algorithm" and get a free chapter',
                            'url' => home_url('/book-detail'),
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
                            'url' => home_url('/blog'),
                            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>',
                            'color' => 'var(--neural-purple)'
                        ),
                        array(
                            'title' => 'Get in Touch',
                            'description' => 'Consultancy, speaking, collaborations, or just say hello',
                            'url' => home_url('/contact'),
                            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>',
                            'color' => 'var(--warm-ember)'
                        ),
                        array(
                            'title' => 'Subscribe to Newsletter',
                            'description' => 'Weekly insights delivered to your inbox',
                            'url' => home_url('/contact#newsletter'),
                            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>',
                            'color' => 'var(--deep-tech-blue)'
                        )
                    );

                    foreach ($main_links as $index => $link) :
                    ?>
                        <div class="animate-slide-up" style="animation-delay: <?php echo $index * 0.1; ?>s;">
                            <a href="<?php echo esc_url($link['url']); ?>" 
                               class="group block w-full p-5 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-gray-100"
                               <?php echo (strpos($link['url'], 'http') === 0) ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>>
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 rounded-lg flex items-center justify-center text-white flex-shrink-0"
                                         style="background-color: <?php echo $link['color']; ?>;">
                                        <?php echo $link['icon']; ?>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h3 class="font-bold text-lg text-gray-900 group-hover:text-blue-600 transition-colors">
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
                <div class="text-center mb-8">
                    <h3 class="text-lg font-semibold mb-4 text-gray-900">Connect with me</h3>
                    <div class="flex justify-center gap-4">
                        <?php
                        $social_links = array(
                            array('name' => 'Twitter', 'url' => get_theme_mod('social_twitter', 'https://twitter.com'), 'color' => '#1DA1F2', 'icon' => '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>'),
                            array('name' => 'LinkedIn', 'url' => get_theme_mod('social_linkedin', 'https://linkedin.com'), 'color' => '#0077B5', 'icon' => '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>'),
                            array('name' => 'YouTube', 'url' => get_theme_mod('social_youtube', 'https://youtube.com'), 'color' => '#FF0000', 'icon' => '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>'),
                            array('name' => 'Instagram', 'url' => get_theme_mod('social_instagram', 'https://instagram.com'), 'color' => '#E4405F', 'icon' => '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.017 0C8.396 0 7.989.016 6.756.072 5.526.127 4.706.333 3.995.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.139C.333 4.85.127 5.67.072 6.9.016 8.134 0 8.541 0 12.017s.016 3.883.072 5.116c.055 1.23.26 2.05.558 2.761.306.789.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.711.297 1.531.503 2.761.558C7.989 23.984 8.396 24 12.017 24s3.883-.016 5.116-.072c1.23-.055 2.05-.26 2.761-.558a5.806 5.806 0 0 0 2.126-1.384 5.806 5.806 0 0 0 1.384-2.126c.297-.711.503-1.531.558-2.761.056-1.233.072-1.64.072-5.116s-.016-3.883-.072-5.116c-.055-1.23-.26-2.05-.558-2.761a5.806 5.806 0 0 0-1.384-2.126A5.806 5.806 0 0 0 19.894.63C19.183.333 18.363.127 17.133.072 15.9.016 15.493 0 12.017 0zm0 2.167c3.803 0 4.254.014 5.756.067 1.388.063 2.144.295 2.646.49a4.424 4.424 0 0 1 1.62 1.055 4.424 4.424 0 0 1 1.055 1.62c.195.502.427 1.258.49 2.646.053 1.502.067 1.953.067 5.756s-.014 4.254-.067 5.756c-.063 1.388-.295 2.144-.49 2.646a4.424 4.424 0 0 1-1.055 1.62 4.424 4.424 0 0 1-1.62 1.055c-.502.195-1.258.427-2.646.49-1.502.053-1.953.067-5.756.067s-4.254-.014-5.756-.067c-1.388-.063-2.144-.295-2.646-.49a4.424 4.424 0 0 1-1.62-1.055 4.424 4.424 0 0 1-1.055-1.62c-.195-.502-.427-1.258-.49-2.646-.053-1.502-.067-1.953-.067-5.756s.014-4.254.067-5.756c.063-1.388.295-2.144.49-2.646a4.424 4.424 0 0 1 1.055-1.62 4.424 4.424 0 0 1 1.62-1.055c.502-.195 1.258-.427 2.646-.49 1.502-.053 1.953-.067 5.756-.067z"/><path d="M12.017 5.838a6.179 6.179 0 1 0 0 12.358 6.179 6.179 0 0 0 0-12.358zm0 10.191a4.012 4.012 0 1 1 0-8.024 4.012 4.012 0 0 1 0 8.024z"/><circle cx="18.406" cy="5.594" r="1.44"/></svg>'),
                            array('name' => 'GitHub', 'url' => get_theme_mod('social_github', 'https://github.com'), 'color' => '#333333', 'icon' => '<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 10.956.557-.085-.24-.568-.24-1.277v-3.826c-3.338.724-4.042-1.61-4.042-1.61C4.822 18.477 4.49 17.4 4.49 17.4c-1.093-.745.083-.729.083-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>')
                        );

                        foreach ($social_links as $index => $social) :
                            if (!empty($social['url']) && $social['url'] !== 'https://twitter.com' && $social['url'] !== 'https://linkedin.com') : // Only show if URL is set
                        ?>
                            <a href="<?php echo esc_url($social['url']); ?>" 
                               target="_blank" 
                               rel="noopener noreferrer"
                               class="w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110 hover:-translate-y-1 text-white"
                               style="background-color: <?php echo $social['color']; ?>;"
                               aria-label="<?php echo esc_attr($social['name']); ?>">
                                <?php echo $social['icon']; ?>
                            </a>
                        <?php 
                            endif;
                        endforeach; 
                        ?>
                    </div>
                </div>

                <!-- Footer Bio -->
                <div class="text-center animate-slide-up">
                    <p class="text-gray-500 text-sm mb-2">
                        Building a future where technology amplifies humanity ✨
                    </p>
                    <p class="text-gray-400 text-xs">
                        © <?php echo date('Y'); ?> All rights reserved.
                    </p>
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

<?php
get_footer();