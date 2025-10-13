<?php
/**
 * The front page template file
 *
 * This template displays the homepage with Hero, About, Blog, Book,
 * Consultancy, and Contact sections.
 *
 * @package Personal_Website_Design
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Hero Section -->
    <section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Animated background -->
        <div class="absolute inset-0 w-full h-full" 
             style="background: linear-gradient(135deg, var(--deep-tech-blue) 0%, var(--neural-purple) 50%, var(--deep-tech-blue) 100%);">
        </div>

        <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="flex justify-center mb-6">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full backdrop-blur-sm"
                     style="background-color: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.2);">
                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                    <span class="text-sm text-white">
                        Bridging Technology & Humanity
                    </span>
                </div>
            </div>

            <h1 class="text-white mb-6 text-4xl sm:text-5xl md:text-6xl lg:text-7xl tracking-tight">
                <?php
                $hero_title = get_theme_mod('hero_title', 'Navigating the Future of AI & Emerging Tech');
                echo esc_html($hero_title);
                ?>
            </h1>

            <p class="text-xl sm:text-2xl mb-10 max-w-3xl mx-auto" style="color: var(--warm-ember);">
                <?php
                $hero_subtitle = get_theme_mod('hero_subtitle', 'Expert insights on blockchain, artificial intelligence, and the technologies shaping tomorrow — with a human touch.');
                echo esc_html($hero_subtitle);
                ?>
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="<?php echo esc_url(home_url('/resources/')); ?>"
                   class="group inline-flex items-center px-8 py-6 text-lg rounded-lg text-white transition-all"
                   style="background-color: var(--sunset-orange);"
                   onmouseover="this.style.backgroundColor='var(--deep-tech-blue)'"
                   onmouseout="this.style.backgroundColor='var(--sunset-orange)'">
                    Explore Resources
                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>

                <a href="#contact"
                   class="inline-flex items-center px-8 py-6 text-lg rounded-lg text-white transition-all"
                   style="border: 1px solid white; background-color: rgba(255, 255, 255, 0.1);"
                   onmouseover="this.style.backgroundColor='rgba(255, 255, 255, 0.2)'"
                   onmouseout="this.style.backgroundColor='rgba(255, 255, 255, 0.1)'">
                    Get in Touch
                </a>
            </div>

            <div class="mt-16">
                <a href="#about" class="text-white animate-bounce">
                    <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="mb-4 text-4xl sm:text-5xl tracking-tight" style="color: var(--deep-tech-blue);">
                    About Me
                </h2>
                <div class="w-24 h-1 mx-auto mb-6" style="background-color: var(--warm-ember);"></div>
                <p class="text-xl max-w-3xl mx-auto text-gray-700">
                    I'm a technology strategist, blockchain enthusiast, and AI advocate
                    dedicated to building bridges between cutting-edge innovation and
                    human values.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('hero-image', array('class' => 'w-full h-auto rounded-2xl shadow-2xl')); ?>
                    <?php else : ?>
                        <img src="https://images.unsplash.com/flagged/photo-1573582677725-863b570e3c00?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjBwb3J0cmFpdCUyMHdhcm18ZW58MXx8fHwxNzU5MzI1NTQ5fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
                             alt="Professional portrait"
                             class="w-full h-auto rounded-2xl shadow-2xl">
                    <?php endif; ?>
                </div>

                <div>
                    <h3 class="mb-4 text-3xl tracking-tight" style="color: var(--deep-tech-blue);">
                        My Journey
                    </h3>
                    <div class="space-y-4 text-gray-700">
                        <?php
                        $about_content = get_theme_mod('about_content', '
                        <p>For over a decade, I\'ve been exploring the intersection of technology and human experience. What started as fascination with code evolved into a mission: making emerging technologies accessible, ethical, and beneficial for everyone.</p>
                        <p>From consulting Fortune 500 companies on AI strategy to helping startups navigate blockchain implementation, I\'ve seen firsthand how technology can either amplify or diminish our humanity. My work is guided by a simple principle: innovation without empathy is just noise.</p>
                        <p>When I\'m not decoding the latest tech trends, you\'ll find me sharing insights through writing, speaking at conferences, or spending quality time with my family — because the best technology is the kind that brings us closer together.</p>
                        ');
                        echo wp_kses_post($about_content);
                        ?>
                    </div>
                    <div class="mt-6">
                        <a href="<?php echo esc_url(home_url('/about/')); ?>"
                           class="inline-flex items-center px-6 py-3 rounded-lg text-white transition-all"
                           style="background-color: var(--sunset-orange);">
                            Learn More About Me
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Experience Cards -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php
                $experiences = array(
                    array(
                        'icon' => '<svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>',
                        'title' => 'AI & Innovation',
                        'description' => 'Deep expertise in artificial intelligence, machine learning, and their practical applications in solving real-world challenges.'
                    ),
                    array(
                        'icon' => '<svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9-9a9 9 0 00-9 9m9-9v18"></path></svg>',
                        'title' => 'Blockchain Pioneer',
                        'description' => 'Early adopter and advocate of blockchain technology, exploring decentralized systems and their potential to transform industries.'
                    ),
                    array(
                        'icon' => '<svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path></svg>',
                        'title' => 'Human-Centered Approach',
                        'description' => 'Committed to ensuring technology serves humanity, not the other way around. Every innovation should enhance human connection.'
                    ),
                    array(
                        'icon' => '<svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>',
                        'title' => 'Thought Leadership',
                        'description' => 'Regular speaker, writer, and consultant helping organizations navigate the complex landscape of emerging technologies.'
                    )
                );

                foreach ($experiences as $exp) :
                ?>
                <div class="p-6 rounded-xl bg-white shadow-lg hover:shadow-xl transition-shadow border"
                     style="border-color: var(--warm-ember);">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4"
                         style="background-color: var(--warm-ember);">
                        <?php echo $exp['icon']; ?>
                    </div>
                    <h4 class="mb-2" style="color: var(--deep-tech-blue);">
                        <?php echo esc_html($exp['title']); ?>
                    </h4>
                    <p class="text-gray-600">
                        <?php echo esc_html($exp['description']); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="mb-4 text-4xl sm:text-5xl tracking-tight" style="color: var(--deep-tech-blue);">
                    Latest Insights
                </h2>
                <div class="w-24 h-1 mx-auto mb-6" style="background-color: var(--warm-ember);"></div>
                <p class="text-xl max-w-3xl mx-auto text-gray-700">
                    Exploring the intersection of technology, humanity, and the future we're building together.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <?php
                $recent_posts = new WP_Query(array(
                    'posts_per_page' => 6,
                    'post_status' => 'publish'
                ));

                if ($recent_posts->have_posts()) :
                    while ($recent_posts->have_posts()) : $recent_posts->the_post();
                ?>
                    <article class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all group cursor-pointer"
                             onclick="window.location.href='<?php the_permalink(); ?>'">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="relative h-48 overflow-hidden">
                                <?php the_post_thumbnail('blog-thumbnail', array('class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-300')); ?>
                                <div class="absolute top-4 left-4">
                                    <?php
                                    $categories = get_the_category();
                                    if (!empty($categories)) {
                                        $category = $categories[0];
                                        echo '<span class="px-2 py-1 text-xs rounded-full text-white" style="background-color: var(--sunset-orange);">';
                                        echo esc_html($category->name);
                                        echo '</span>';
                                    }
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="p-6">
                            <div class="flex items-center gap-4 mb-3 text-sm text-gray-500">
                                <div class="flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span><?php echo get_the_date(); ?></span>
                                </div>
                                <span>•</span>
                                <span><?php echo personal_website_design_reading_time(); ?></span>
                            </div>

                            <h3 class="mb-3 text-xl font-bold group-hover:opacity-80 transition-opacity"
                                style="color: var(--deep-tech-blue);">
                                <?php the_title(); ?>
                            </h3>

                            <p class="text-gray-600 mb-4">
                                <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
                            </p>

                            <div class="flex items-center text-blue-600 font-medium">
                                Read More
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </div>
                    </article>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-600 mb-4">No blog posts found. Start writing your first post!</p>
                        <a href="<?php echo esc_url(admin_url('post-new.php')); ?>" 
                           class="inline-flex items-center px-6 py-3 rounded-lg text-white"
                           style="background-color: var(--sunset-orange);">
                            Create First Post
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            <div class="text-center">
                <a href="<?php echo esc_url(home_url('/blog/')); ?>"
                   class="inline-flex items-center px-8 py-4 rounded-lg text-white transition-all"
                   style="background-color: var(--deep-tech-blue);">
                    View All Posts
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Book Section -->
    <?php get_template_part('templates/parts/book-section'); ?>

    <!-- Consultancy Section -->
    <?php get_template_part('templates/parts/consultancy-section'); ?>

    <!-- Contact Section -->
    <?php get_template_part('templates/parts/contact-section'); ?>

</main><!-- #main -->

<?php
get_footer();