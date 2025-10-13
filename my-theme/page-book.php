<?php
/**
 * Template for The Human Algorithm Book Page
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php while (have_posts()) : the_post(); ?>

        <!-- Hero Section -->
        <section class="relative min-h-screen flex items-center justify-center py-24" style="background: linear-gradient(135deg, var(--deep-tech-blue) 0%, var(--neural-purple) 50%, var(--deep-tech-blue) 100%);">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Book Cover & Info -->
                    <div class="text-center lg:text-left">
                        <div class="inline-flex items-center px-4 py-2 rounded-full mb-6" 
                             style="background-color: rgba(255, 255, 255, 0.1); color: var(--warm-ember);">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            Bestselling Author
                        </div>
                        
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 tracking-tight">
                            The Human Algorithm
                        </h1>
                        
                        <p class="text-xl text-white/90 mb-8 max-w-2xl">
                            How AI and Human Collaboration Will Shape Our Future - A groundbreaking exploration of the symbiotic relationship between artificial intelligence and human creativity.
                        </p>
                        
                        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8">
                            <a href="#preview" class="inline-flex items-center px-8 py-4 rounded-lg text-white font-semibold transition-all hover:shadow-xl hover:-translate-y-1"
                               style="background-color: var(--sunset-orange);">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                Download Sample Chapter
                            </a>
                            <a href="#purchase" class="inline-flex items-center px-8 py-4 rounded-lg border border-white/20 text-white font-semibold transition-all hover:bg-white/10">
                                Get the Full Book
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                        
                        <div class="flex flex-wrap items-center gap-6 text-white/80 justify-center lg:justify-start">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                                <span>4.8/5 Stars</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-2-2V10a2 2 0 012-2h2m2-4h4a2 2 0 012 2v6a2 2 0 01-2 2h-2m-6-2V6a2 2 0 012-2h2m6-2v4"></path>
                                </svg>
                                <span>500+ Reviews</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>320 Pages</span>
                            </div>
                        </div>
                    </div>

                    <!-- Book Cover Image -->
                    <div class="flex justify-center lg:justify-end">
                        <div class="relative">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large', array('class' => 'w-80 h-auto rounded-2xl shadow-2xl')); ?>
                            <?php else : ?>
                                <div class="w-80 h-96 bg-gradient-to-br from-gray-100 to-gray-300 rounded-2xl shadow-2xl flex items-center justify-center">
                                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About the Book -->
        <section id="about" class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl sm:text-5xl font-bold mb-6" style="color: var(--deep-tech-blue);">
                        About the Book
                    </h2>
                    <div class="w-24 h-1 mx-auto mb-6" style="background-color: var(--warm-ember);"></div>
                </div>

                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-2xl font-semibold mb-6" style="color: var(--deep-tech-blue);">
                            The Future of Human-AI Collaboration
                        </h3>
                        <p class="text-gray-700 text-lg mb-6">
                            In "The Human Algorithm," we explore how the most successful organizations of tomorrow will be those that master the art of human-AI collaboration. This isn't about replacing humans with machines, but about creating powerful partnerships that amplify our best qualities.
                        </p>
                        
                        <div class="space-y-4">
                            <?php
                            $key_points = array(
                                'Practical frameworks for implementing AI in your organization',
                                'Real-world case studies from industry leaders',
                                'Strategies for maintaining human-centered values',
                                'Tools for measuring the success of AI initiatives',
                                'Future trends and emerging opportunities'
                            );
                            
                            foreach ($key_points as $point) :
                            ?>
                            <div class="flex items-start">
                                <svg class="w-6 h-6 mr-3 mt-1 flex-shrink-0" style="color: var(--warm-ember);" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="text-gray-700"><?php echo esc_html($point); ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-8 rounded-2xl">
                        <h4 class="text-xl font-semibold mb-4" style="color: var(--deep-tech-blue);">What Readers Are Saying</h4>
                        
                        <?php
                        $testimonials = array(
                            array(
                                'text' => 'A masterpiece that bridges the gap between technical innovation and human values. Essential reading for any leader.',
                                'author' => 'Sarah Chen, CTO at TechFlow'
                            ),
                            array(
                                'text' => 'Finally, a book that shows us how to implement AI without losing our humanity.',
                                'author' => 'Dr. Michael Rodriguez, AI Research Institute'
                            )
                        );
                        
                        foreach ($testimonials as $testimonial) :
                        ?>
                        <blockquote class="mb-6">
                            <svg class="w-8 h-8 mb-2" style="color: var(--warm-ember);" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                            </svg>
                            <p class="text-gray-700 italic mb-2"><?php echo esc_html($testimonial['text']); ?></p>
                            <cite class="text-sm font-medium" style="color: var(--deep-tech-blue);">
                                — <?php echo esc_html($testimonial['author']); ?>
                            </cite>
                        </blockquote>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sample Chapter Download -->
        <section id="preview" class="py-24 bg-gray-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl sm:text-5xl font-bold mb-6" style="color: var(--deep-tech-blue);">
                        Download Sample Chapter
                    </h2>
                    <p class="text-xl text-gray-700 mb-8">
                        Get Chapter 3: "Building Trust in Human-AI Partnerships" free and see what the book is all about.
                    </p>
                </div>

                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <form class="max-w-md mx-auto" action="#" method="post">
                        <div class="mb-4">
                            <label for="book_name" class="block text-sm font-medium mb-2" style="color: var(--deep-tech-blue);">Name</label>
                            <input type="text" id="book_name" name="book_name" required
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                        </div>
                        
                        <div class="mb-6">
                            <label for="book_email" class="block text-sm font-medium mb-2" style="color: var(--deep-tech-blue);">Email</label>
                            <input type="email" id="book_email" name="book_email" required
                                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                        </div>
                        
                        <button type="submit" 
                                class="w-full flex items-center justify-center px-8 py-4 rounded-lg text-white font-semibold transition-all hover:shadow-lg hover:-translate-y-1"
                                style="background-color: var(--sunset-orange);">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Download Sample Chapter
                        </button>
                        
                        <p class="text-xs text-gray-500 text-center mt-4">
                            We respect your privacy. Unsubscribe at any time.
                        </p>
                    </form>
                </div>
            </div>
        </section>

        <!-- Purchase Options -->
        <section id="purchase" class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl sm:text-5xl font-bold mb-6" style="color: var(--deep-tech-blue);">
                        Get Your Copy Today
                    </h2>
                    <p class="text-xl text-gray-700">
                        Available in multiple formats to suit your reading preference.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <?php
                    $purchase_options = array(
                        array(
                            'format' => 'Hardcover',
                            'price' => '$29.99',
                            'features' => array(
                                'Premium hardcover binding',
                                '320 pages of insights',
                                'Beautiful dust jacket',
                                'Perfect for gifting'
                            ),
                            'link' => 'https://amazon.com', // Replace with actual link
                            'popular' => false
                        ),
                        array(
                            'format' => 'Digital eBook',
                            'price' => '$19.99',
                            'features' => array(
                                'Instant download',
                                'Read on any device',
                                'Searchable text',
                                'Highlighting & notes'
                            ),
                            'link' => 'https://amazon.com', // Replace with actual link
                            'popular' => true
                        ),
                        array(
                            'format' => 'Audiobook',
                            'price' => '$24.99',
                            'features' => array(
                                'Narrated by the author',
                                '8+ hours of content',
                                'Perfect for commuting',
                                'Available on Audible'
                            ),
                            'link' => 'https://audible.com', // Replace with actual link
                            'popular' => false
                        )
                    );
                    
                    foreach ($purchase_options as $option) :
                    ?>
                    <div class="relative bg-white border-2 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow <?php echo $option['popular'] ? 'border-orange-500' : 'border-gray-200'; ?>">
                        <?php if ($option['popular']) : ?>
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                            <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium text-white"
                                  style="background-color: var(--sunset-orange);">
                                Most Popular
                            </span>
                        </div>
                        <?php endif; ?>
                        
                        <div class="text-center mb-6">
                            <h3 class="text-2xl font-bold mb-2" style="color: var(--deep-tech-blue);">
                                <?php echo esc_html($option['format']); ?>
                            </h3>
                            <div class="text-4xl font-bold" style="color: var(--warm-ember);">
                                <?php echo esc_html($option['price']); ?>
                            </div>
                        </div>
                        
                        <ul class="space-y-3 mb-8">
                            <?php foreach ($option['features'] as $feature) : ?>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 mr-3 mt-0.5 flex-shrink-0" style="color: var(--warm-ember);" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="text-gray-700"><?php echo esc_html($feature); ?></span>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        
                        <a href="<?php echo esc_url($option['link']); ?>" 
                           target="_blank"
                           class="w-full flex items-center justify-center px-6 py-3 rounded-lg font-semibold transition-all hover:shadow-lg <?php echo $option['popular'] ? 'text-white' : 'border-2 border-gray-300 text-gray-700 hover:bg-gray-50'; ?>"
                           <?php if ($option['popular']) : ?>style="background-color: var(--sunset-orange);"<?php endif; ?>>
                            Buy Now
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Author Section -->
        <section class="py-24" style="background: linear-gradient(135deg, var(--deep-tech-blue) 0%, var(--neural-purple) 100%);">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="text-white">
                        <h2 class="text-4xl font-bold mb-6">About the Author</h2>
                        <p class="text-xl mb-6 text-white/90">
                            A technology strategist, blockchain advocate, and thought leader with over a decade of experience at the intersection of AI, human behavior, and organizational transformation.
                        </p>
                        
                        <div class="space-y-4 mb-8">
                            <?php
                            $achievements = array(
                                'Speaker at 100+ international conferences',
                                'Consulted for Fortune 500 companies',
                                'Published researcher in AI ethics',
                                'Featured in major tech publications'
                            );
                            
                            foreach ($achievements as $achievement) :
                            ?>
                            <div class="flex items-start">
                                <svg class="w-6 h-6 mr-3 mt-1 flex-shrink-0 text-orange-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="text-white/90"><?php echo esc_html($achievement); ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        
                        <a href="<?php echo esc_url(home_url('/about/')); ?>" 
                           class="inline-flex items-center px-6 py-3 rounded-lg border border-white/20 text-white transition-all hover:bg-white/10">
                            Learn More About the Author
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                    
                    <div class="flex justify-center">
                        <div class="w-80 h-80 rounded-full bg-gradient-to-br from-orange-400 to-orange-600 flex items-center justify-center shadow-2xl">
                            <svg class="w-32 h-32 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Page Content from WordPress Editor -->
        <?php if (get_the_content()) : ?>
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="prose prose-lg max-w-none">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

    <?php endwhile; ?>

</main>

<?php
get_footer();
?>