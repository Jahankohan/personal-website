<?php
/**
 * Template Name: About Page
 * Description: Custom template for the About page
 * 
 * @package PersonalWebsiteDesign
 */

get_header(); ?>

<main id="main" class="site-main" role="main">

    <?php while (have_posts()) : the_post(); ?>

        <!-- Hero Section -->
        <section class="relative py-24 overflow-hidden" style="background: linear-gradient(135deg, var(--deep-tech-blue), var(--neural-purple));">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="animate-slide-up">
                        <span class="inline-block mb-4 px-3 py-1 text-sm font-medium text-white rounded-full" style="background-color: var(--warm-ember);">
                            Technology Strategist & AI Advocate
                        </span>
                        <h1 class="text-white mb-6 text-4xl sm:text-5xl lg:text-6xl tracking-tight">
                            <?php echo get_theme_mod('about_hero_title', 'Building Bridges Between Technology and Humanity'); ?>
                        </h1>
                        <p class="text-white/90 text-xl mb-8">
                            <?php echo get_theme_mod('about_hero_description', 'I\'m a technology strategist, blockchain enthusiast, and AI advocate dedicated to ensuring that emerging technologies serve humanity, not the other way around.'); ?>
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <a href="#cta-section" 
                               class="inline-flex items-center px-6 py-3 text-lg font-medium text-white rounded-lg transition-all hover:shadow-lg scroll-smooth" 
                               style="background-color: var(--sunset-orange);">
                                <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                Schedule a Call
                            </a>
                            <a href="#experience-section" 
                               class="inline-flex items-center px-6 py-3 text-lg font-medium text-white border border-white/30 rounded-lg hover:bg-white/10 transition-all scroll-smooth">
                                View Experience
                            </a>
                        </div>
                    </div>

                    <div class="relative animate-slide-up">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                            <?php 
                            $about_image = get_theme_mod('about_hero_image');
                            if ($about_image) : 
                            ?>
                                <img src="<?php echo esc_url($about_image); ?>" 
                                     alt="Professional portrait" 
                                     class="w-full h-auto">
                            <?php else : ?>
                                <img src="https://images.unsplash.com/photo-1758600587728-9bde755354ad?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxjb25maWRlbnQlMjBwcm9mZXNzaW9uYWwlMjBwb3J0cmFpdHxlbnwxfHx8fDE3NTk0MDA4MDB8MA&ixlib=rb-4.1.0&q=80&w=1080" 
                                     alt="Professional portrait" 
                                     class="w-full h-auto">
                            <?php endif; ?>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        </div>

                        <!-- Floating Stats -->
                        <div class="absolute -bottom-6 left-6 right-6 grid grid-cols-2 gap-3">
                            <?php
                            $stats = array(
                                array('value' => get_theme_mod('about_stat_1_value', '12+'), 'label' => get_theme_mod('about_stat_1_label', 'Years of Experience')),
                                array('value' => get_theme_mod('about_stat_2_value', '150+'), 'label' => get_theme_mod('about_stat_2_label', 'Projects Delivered'))
                            );
                            
                            foreach ($stats as $stat) :
                            ?>
                                <div class="bg-white p-4 rounded-lg shadow-xl">
                                    <div class="text-2xl mb-1" style="color: var(--deep-tech-blue);">
                                        <?php echo esc_html($stat['value']); ?>
                                    </div>
                                    <div class="text-sm text-gray-600"><?php echo esc_html($stat['label']); ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Stats Bar -->
                <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-6">
                    <?php
                    $all_stats = array(
                        array('value' => get_theme_mod('about_stat_1_value', '12+'), 'label' => get_theme_mod('about_stat_1_label', 'Years of Experience')),
                        array('value' => get_theme_mod('about_stat_2_value', '150+'), 'label' => get_theme_mod('about_stat_2_label', 'Projects Delivered')),
                        array('value' => get_theme_mod('about_stat_3_value', '100+'), 'label' => get_theme_mod('about_stat_3_label', 'Speaking Engagements')),
                        array('value' => get_theme_mod('about_stat_4_value', '98%'), 'label' => get_theme_mod('about_stat_4_label', 'Client Satisfaction'))
                    );
                    
                    foreach ($all_stats as $stat) :
                    ?>
                        <div class="text-center p-6 bg-white/10 backdrop-blur-sm rounded-lg">
                            <div class="text-3xl mb-2 text-white"><?php echo esc_html($stat['value']); ?></div>
                            <div class="text-white/80"><?php echo esc_html($stat['label']); ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Experience Section -->
        <section id="experience-section" class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="mb-4 text-4xl sm:text-5xl tracking-tight" style="color: var(--deep-tech-blue);">
                        Professional Journey
                    </h2>
                    <div class="w-24 h-1 mx-auto mb-6" style="background-color: var(--warm-ember);"></div>
                    <p class="text-xl max-w-3xl mx-auto text-gray-700">
                        Over a decade of hands-on experience in emerging technologies, from engineering to strategy
                    </p>
                </div>

                <div class="space-y-8">
                    <?php
                    // Experience data - this could be moved to custom fields or a custom post type
                    $experiences = array(
                        array(
                            'period' => '2020 - Present',
                            'role' => 'Technology Strategy Consultant',
                            'organization' => 'Independent Practice',
                            'description' => 'Advising Fortune 500 companies and innovative startups on AI implementation, blockchain adoption, and digital transformation strategies. Led 50+ successful technology integration projects.',
                            'achievements' => array(
                                'Guided 30+ enterprises through AI transformation',
                                'Designed blockchain solutions for 15+ organizations',
                                'Delivered 100+ keynote presentations worldwide'
                            ),
                            'color' => 'var(--electric-cyan)'
                        ),
                        array(
                            'period' => '2017 - 2020',
                            'role' => 'Director of Innovation',
                            'organization' => 'TechVentures Global',
                            'description' => 'Led a team of 20+ engineers and strategists to develop cutting-edge AI and blockchain solutions. Spearheaded the company\'s innovation lab and emerging technology initiatives.',
                            'achievements' => array(
                                'Launched 5 successful AI products',
                                'Built innovation team from 5 to 25 members',
                                'Generated $10M in new revenue streams'
                            ),
                            'color' => 'var(--neural-purple)'
                        ),
                        array(
                            'period' => '2014 - 2017',
                            'role' => 'Senior AI/Blockchain Engineer',
                            'organization' => 'Digital Frontier Labs',
                            'description' => 'Architected and implemented machine learning systems and distributed ledger solutions for enterprise clients across finance, healthcare, and supply chain sectors.',
                            'achievements' => array(
                                'Developed ML models with 95%+ accuracy',
                                'Implemented blockchain solutions for 20+ clients',
                                'Published 12 technical papers'
                            ),
                            'color' => 'var(--warm-ember)'
                        ),
                        array(
                            'period' => '2012 - 2014',
                            'role' => 'Software Engineer',
                            'organization' => 'NextGen Technologies',
                            'description' => 'Built scalable web applications and data pipelines. Explored early cryptocurrency and blockchain technologies, laying the foundation for future specialization.',
                            'achievements' => array(
                                'Built 15+ production applications',
                                'Optimized systems for 10x performance',
                                'Earned 3 technical certifications'
                            ),
                            'color' => 'var(--sunset-orange)'
                        )
                    );

                    foreach ($experiences as $index => $exp) :
                    ?>
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                            <div class="h-2" style="background-color: <?php echo $exp['color']; ?>;"></div>
                            <div class="p-6">
                                <div class="flex flex-wrap items-start justify-between gap-4 mb-4">
                                    <div class="flex-1">
                                        <h3 class="text-xl font-bold mb-1" style="color: var(--deep-tech-blue);">
                                            <?php echo esc_html($exp['role']); ?>
                                        </h3>
                                        <p class="text-lg text-gray-600">
                                            <?php echo esc_html($exp['organization']); ?>
                                        </p>
                                    </div>
                                    <span class="px-3 py-1 text-sm font-medium text-white rounded-full" style="background-color: <?php echo $exp['color']; ?>;">
                                        <?php echo esc_html($exp['period']); ?>
                                    </span>
                                </div>
                                
                                <p class="text-gray-700 mb-4">
                                    <?php echo esc_html($exp['description']); ?>
                                </p>
                                
                                <div class="space-y-2">
                                    <h4 class="font-medium text-gray-900">Key Achievements:</h4>
                                    <ul class="space-y-1">
                                        <?php foreach ($exp['achievements'] as $achievement) : ?>
                                            <li class="flex items-start gap-2 text-gray-700">
                                                <svg class="w-5 h-5 mt-0.5 flex-shrink-0" style="color: <?php echo $exp['color']; ?>;" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                                <?php echo esc_html($achievement); ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="py-24 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="mb-4 text-4xl sm:text-5xl tracking-tight" style="color: var(--deep-tech-blue);">
                        How I Can Help
                    </h2>
                    <div class="w-24 h-1 mx-auto mb-6" style="background-color: var(--warm-ember);"></div>
                    <p class="text-xl max-w-3xl mx-auto text-gray-700">
                        Comprehensive consulting services to help your organization navigate the future of technology
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <?php
                    $services = array(
                        array(
                            'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>',
                            'title' => 'Digital Transformation Strategy',
                            'description' => 'Comprehensive roadmaps for integrating AI, blockchain, and emerging technologies into your business operations.',
                            'features' => array(
                                'Technology readiness assessment',
                                'Custom implementation roadmaps',
                                'Change management planning',
                                'ROI measurement frameworks'
                            ),
                            'color' => 'var(--electric-cyan)'
                        ),
                        array(
                            'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>',
                            'title' => 'AI & Machine Learning Consulting',
                            'description' => 'From proof-of-concept to production, I help organizations leverage artificial intelligence to solve real business challenges.',
                            'features' => array(
                                'Use case identification',
                                'Model architecture design',
                                'Team training & upskilling',
                                'Ethical AI frameworks'
                            ),
                            'color' => 'var(--neural-purple)'
                        ),
                        array(
                            'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>',
                            'title' => 'Blockchain Implementation',
                            'description' => 'Practical guidance on leveraging blockchain and decentralized technologies for transparency, security, and efficiency.',
                            'features' => array(
                                'Technology selection guidance',
                                'Smart contract development',
                                'Security audits & compliance',
                                'Ecosystem design'
                            ),
                            'color' => 'var(--warm-ember)'
                        ),
                        array(
                            'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>',
                            'title' => 'Thought Leadership & Speaking',
                            'description' => 'Engaging keynotes, workshops, and content creation to help your organization and industry understand emerging technologies.',
                            'features' => array(
                                'Conference keynotes',
                                'Executive workshops',
                                'Team training sessions',
                                'Content & white papers'
                            ),
                            'color' => 'var(--sunset-orange)'
                        )
                    );

                    foreach ($services as $service) :
                    ?>
                        <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                            <div class="w-16 h-16 rounded-lg flex items-center justify-center mb-6" style="background-color: <?php echo $service['color']; ?>; color: white;">
                                <?php echo $service['icon']; ?>
                            </div>
                            
                            <h3 class="text-xl font-bold mb-4" style="color: var(--deep-tech-blue);">
                                <?php echo esc_html($service['title']); ?>
                            </h3>
                            
                            <p class="text-gray-700 mb-6">
                                <?php echo esc_html($service['description']); ?>
                            </p>
                            
                            <ul class="space-y-2">
                                <?php foreach ($service['features'] as $feature) : ?>
                                    <li class="flex items-center gap-2 text-gray-600">
                                        <svg class="w-4 h-4 flex-shrink-0" style="color: <?php echo $service['color']; ?>;" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                        <?php echo esc_html($feature); ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Main Content Area (for additional content) -->
        <?php if (get_the_content()) : ?>
            <section class="py-16 bg-white">
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="prose prose-lg max-w-none">
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- CTA Section -->
        <section id="cta-section" class="py-24 relative overflow-hidden" style="background: linear-gradient(135deg, var(--neural-purple), var(--deep-tech-blue));">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center">
                    <svg class="mx-auto mb-6 w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                    <h2 class="text-white mb-6 text-4xl sm:text-5xl tracking-tight">
                        Let's Build the Future Together
                    </h2>
                    <p class="text-white/90 text-xl mb-8 max-w-2xl mx-auto">
                        Whether you're looking to implement AI, explore blockchain, or navigate digital transformation, 
                        I'm here to help. Let's have a conversation about your goals.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                        <a href="<?php echo esc_url(home_url('/consultation')); ?>" 
                           class="inline-flex items-center px-6 py-3 text-lg font-medium text-white rounded-lg transition-all hover:shadow-lg" 
                           style="background-color: var(--sunset-orange);">
                            <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Schedule a Consultation
                        </a>
                        <a href="<?php echo esc_url(home_url('/resources')); ?>" 
                           class="inline-flex items-center px-6 py-3 text-lg font-medium text-white border border-white/30 rounded-lg hover:bg-white/10 transition-all">
                            <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            Download Free Resources
                        </a>
                    </div>

                    <div class="flex flex-wrap justify-center gap-6 text-white/80">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            <span>150+ Projects</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                            <span>98% Satisfaction</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                            </svg>
                            <span>12+ Years</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Decorative Elements -->
            <div class="absolute top-0 left-0 w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
        </section>

    <?php endwhile; ?>

</main><!-- #main -->

<?php
get_footer();