<?php
/**
 * Template for Book Detail Page
 */

get_header();
?>

<main id="primary" class="site-main min-h-screen bg-white">

    <?php while (have_posts()) : the_post(); ?>

        <!-- Hero Section -->
        <section class="relative min-h-screen flex items-center justify-center overflow-hidden py-20" style="background: linear-gradient(135deg, var(--deep-tech-blue) 0%, var(--neural-purple) 100%);">
            
            <!-- Decorative Elements -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute top-20 left-10 w-72 h-72 bg-white/5 rounded-full blur-3xl"></div>
                <div class="absolute bottom-20 right-10 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-r from-electric-cyan/10 to-warm-ember/10 rounded-full blur-3xl"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Left: Text Content -->
                    <div class="text-white animate-slide-up">
                        <div class="mb-6">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm text-white border border-white/30 mb-4" style="background-color: rgba(255, 255, 255, 0.1);">
                                <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2L13.09 8.26L22 9L17 14L18.18 21L12 17.27L5.82 21L7 14L2 9L10.91 8.26L12 2Z"/>
                                </svg>
                                Coming Soon 2026
                            </span>
                        </div>

                        <h1 class="text-4xl sm:text-5xl lg:text-6xl tracking-tight mb-6">
                            A New Perspective on
                            <span class="block mt-2" style="color: var(--electric-cyan);">
                                Technology & Humanity
                            </span>
                        </h1>

                        <p class="text-xl text-white/90 mb-8 max-w-xl">
                            Discover how to harness AI and blockchain to amplify human potential—without losing sight of what makes us human.
                        </p>

                        <div class="flex flex-col sm:flex-row gap-4 mb-8">
                            <a href="#download-cta" class="inline-flex items-center px-8 py-4 rounded-lg text-white text-lg font-semibold transition-all hover:opacity-90" style="background-color: var(--sunset-orange);">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Download Free Sample Chapter
                            </a>
                            <a href="#about-book" class="inline-flex items-center px-8 py-4 rounded-lg border border-white/30 text-white text-lg font-semibold transition-all hover:bg-white/10">
                                Learn More
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>

                        <div class="flex items-center gap-6 text-white/80">
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                                <span>250+ Pages</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-5 h-5" style="color: var(--warm-ember);" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2L13.09 8.26L22 9L17 14L18.18 21L12 17.27L5.82 21L7 14L2 9L10.91 8.26L12 2Z"/>
                                </svg>
                                <span>Pre-order Now</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Book Cover -->
                    <div class="flex justify-center animate-slide-up">
                        <div class="relative">
                            <div class="absolute inset-0 blur-3xl opacity-50" style="background: var(--electric-cyan);"></div>
                            <div class="relative animate-float">
                                <img src="https://images.unsplash.com/photo-1668713447978-1e47fcfeff4d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxib29rJTIwY292ZXIlMjB0ZWNobm9sb2d5fGVufDF8fHx8MTc1OTQwMzE4NXww&ixlib=rb-4.1.0&q=80&w=1080" 
                                     alt="Book Cover" 
                                     class="w-full max-w-md h-auto rounded-2xl shadow-2xl">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About the Book -->
        <section id="about-book" class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="animate-slide-up">
                        <h2 class="mb-6 text-4xl tracking-tight" style="color: var(--deep-tech-blue);">
                            About the Book
                        </h2>
                        
                        <div class="w-24 h-1 mb-8" style="background-color: var(--warm-ember);"></div>

                        <p class="text-xl text-gray-700 mb-6 leading-relaxed">
                            In an era where artificial intelligence and blockchain are reshaping every industry, we face a critical question: How do we build a technological future that enhances rather than replaces human connection?
                        </p>

                        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                            This book is your guide to navigating the intersection of emerging technologies and timeless human values. Drawing from real-world experience in AI implementation, blockchain development, and human-centered design, it offers practical frameworks for leaders, innovators, and anyone curious about shaping a better technological future.
                        </p>

                        <!-- Quote Highlight -->
                        <div class="border-l-4 bg-white p-6 rounded-lg shadow-sm" style="border-left-color: var(--electric-cyan);">
                            <svg class="w-8 h-8 mb-4" style="color: var(--electric-cyan);" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                            <p class="text-lg italic text-gray-700 mb-4">
                                "Technology should be a bridge to deeper human connection, not a barrier. This book shows you how to build that bridge."
                            </p>
                            <p class="text-sm" style="color: var(--deep-tech-blue);">
                                — From the Introduction
                            </p>
                        </div>
                    </div>

                    <div class="animate-slide-up">
                        <h3 class="mb-6 text-2xl" style="color: var(--deep-tech-blue);">
                            What You'll Discover
                        </h3>

                        <div class="space-y-4 mb-8">
                            <?php
                            $takeaways = array(
                                "Understand how AI and blockchain converge to create new possibilities",
                                "Learn practical frameworks for implementing emerging tech in your organization",
                                "Discover how to maintain human connection in an automated world",
                                "Navigate the ethical considerations of technological advancement",
                                "Build a future-ready mindset while staying grounded in human values"
                            );
                            
                            foreach ($takeaways as $takeaway) :
                            ?>
                                <div class="flex gap-4 items-start">
                                    <div class="flex-shrink-0 w-8 h-8 rounded-full flex items-center justify-center mt-1" style="background-color: var(--electric-cyan);">
                                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <p class="text-gray-700 flex-1"><?php echo esc_html($takeaway); ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- Visual Element -->
                        <div class="rounded-xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1644331064965-bce2645dd1e0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxhYnN0cmFjdCUyMGRpZ2l0YWwlMjBpbGx1c3RyYXRpb258ZW58MXx8fHwxNzU5NDAzMTg2fDA&ixlib=rb-4.1.0&q=80&w=1080" 
                                 alt="Abstract illustration" 
                                 class="w-full h-64 object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why It Matters / Transformation Section -->
        <section class="py-20 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12 animate-slide-up">
                    <h2 class="mb-6 text-4xl tracking-tight" style="color: var(--deep-tech-blue);">
                        Why This Book Matters Now
                    </h2>
                    <div class="w-24 h-1 mx-auto mb-6" style="background-color: var(--warm-ember);"></div>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        If you've ever wondered how to implement cutting-edge technology without losing the human touch, this book will show you the way.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <!-- Before -->
                    <div class="animate-slide-up">
                        <div class="h-full border-2 rounded-lg p-8" style="border-color: #e5e7eb;">
                            <div class="text-center mb-6">
                                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full mb-4" style="background-color: #f3f4f6;">
                                    <span class="text-2xl">😟</span>
                                </div>
                                <h3 class="text-2xl mb-2" style="color: var(--deep-tech-blue);">
                                    The Challenge
                                </h3>
                            </div>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start gap-2">
                                    <svg class="flex-shrink-0 mt-1 text-gray-400 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                    <span>Overwhelmed by the pace of technological change</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="flex-shrink-0 mt-1 text-gray-400 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                    <span>Uncertain how to implement AI and blockchain responsibly</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="flex-shrink-0 mt-1 text-gray-400 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                    <span>Worried about losing human connection in automation</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="flex-shrink-0 mt-1 text-gray-400 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                    <span>Struggling to bridge technical and ethical considerations</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- After -->
                    <div class="animate-slide-up">
                        <div class="h-full border-2 rounded-lg p-8" style="border-color: var(--electric-cyan);">
                            <div class="text-center mb-6">
                                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full mb-4" style="background-color: var(--electric-cyan);">
                                    <span class="text-2xl">🚀</span>
                                </div>
                                <h3 class="text-2xl mb-2" style="color: var(--deep-tech-blue);">
                                    The Transformation
                                </h3>
                            </div>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start gap-2">
                                    <svg class="flex-shrink-0 mt-1 w-5 h-5" style="color: var(--electric-cyan);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Confident in navigating emerging technologies</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="flex-shrink-0 mt-1 w-5 h-5" style="color: var(--electric-cyan);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Clear frameworks for ethical AI and blockchain implementation</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="flex-shrink-0 mt-1 w-5 h-5" style="color: var(--electric-cyan);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Ability to build tech that amplifies human connection</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="flex-shrink-0 mt-1 w-5 h-5" style="color: var(--electric-cyan);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>A future-ready mindset grounded in human values</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="text-center animate-slide-up">
                    <img src="https://images.unsplash.com/photo-1634912889606-3a6486a1f336?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx0cmFuc2Zvcm1hdGlvbiUyMGpvdXJuZXl8ZW58MXx8fHwxNzU5NDAzMTg3fDA&ixlib=rb-4.1.0&q=80&w=1080" 
                         alt="Transformation journey" 
                         class="w-full max-w-4xl mx-auto rounded-2xl shadow-xl">
                </div>
            </div>
        </section>

        <!-- About the Author -->
        <section class="py-20 bg-gray-50">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 gap-12 items-center animate-slide-up">
                    <div class="relative">
                        <div class="absolute inset-0 blur-2xl opacity-30 rounded-full" style="background: var(--neural-purple);"></div>
                        <img src="https://images.unsplash.com/photo-1581065178047-8ee15951ede6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjBwb3J0cmFpdHxlbnwxfHx8fDE3NTkzMTQ4MTh8MA&ixlib=rb-4.1.0&q=80&w=1080" 
                             alt="Author" 
                             class="relative w-full aspect-square object-cover rounded-2xl shadow-2xl">
                    </div>

                    <div>
                        <h2 class="mb-6 text-4xl tracking-tight" style="color: var(--deep-tech-blue);">
                            About the Author
                        </h2>
                        
                        <div class="w-24 h-1 mb-6" style="background-color: var(--warm-ember);"></div>

                        <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                            With over a decade of experience at the intersection of emerging technologies and human-centered design, I've helped organizations around the world implement AI and blockchain solutions that actually work—for both business and people.
                        </p>

                        <p class="text-lg text-gray-700 mb-4 leading-relaxed">
                            As a consultant, speaker, and remote dad, I've learned that the best technology isn't the most advanced—it's the technology that makes our lives more human, not less.
                        </p>

                        <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                            I wrote this book because I believe we're at a critical inflection point. The choices we make today about technology will shape humanity for generations. This book is my contribution to ensuring we choose wisely.
                        </p>

                        <a href="<?php echo esc_url(home_url('/about/')); ?>" 
                           class="inline-flex items-center px-6 py-3 rounded-lg text-white font-semibold transition-all hover:opacity-90" 
                           style="background-color: var(--deep-tech-blue);">
                            Learn More About Me
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Social Proof -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12 animate-slide-up">
                    <h2 class="mb-6 text-4xl tracking-tight" style="color: var(--deep-tech-blue);">
                        What Early Readers Are Saying
                    </h2>
                    <div class="w-24 h-1 mx-auto mb-6" style="background-color: var(--warm-ember);"></div>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Join hundreds of innovators, leaders, and thinkers who are already transforming their approach to technology.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <?php
                    $testimonials = array(
                        array(
                            'name' => 'Dr. Sarah Chen',
                            'role' => 'Chief Innovation Officer, TechCorp',
                            'quote' => 'This book bridges the gap between futuristic vision and practical implementation. A must-read for any tech leader.',
                            'avatar' => 'https://images.unsplash.com/photo-1581065178047-8ee15951ede6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjBwb3J0cmFpdHxlbnwxfHx8fDE3NTkzMTQ4MTh8MA&ixlib=rb-4.1.0&q=80&w=1080'
                        ),
                        array(
                            'name' => 'Marcus Rodriguez',
                            'role' => 'Blockchain Architect',
                            'quote' => 'Finally, a book that doesn\'t just hype technology but shows us how to use it responsibly and effectively.',
                            'avatar' => 'https://images.unsplash.com/photo-1581065178047-8ee15951ede6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjBwb3J0cmFpdHxlbnwxfHx8fDE3NTkzMTQ4MTh8MA&ixlib=rb-4.1.0&q=80&w=1080'
                        ),
                        array(
                            'name' => 'Emily Watson',
                            'role' => 'Product Designer, StartupXYZ',
                            'quote' => 'The human-centered approach in this book has transformed how I think about building products with emerging tech.',
                            'avatar' => 'https://images.unsplash.com/photo-1581065178047-8ee15951ede6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjBwb3J0cmFpdHxlbnwxfHx8fDE3NTkzMTQ4MTh8MA&ixlib=rb-4.1.0&q=80&w=1080'
                        )
                    );
                    
                    foreach ($testimonials as $testimonial) :
                    ?>
                        <div class="bg-white rounded-lg shadow-lg p-6 h-full hover:shadow-xl transition-shadow animate-slide-up">
                            <div class="flex items-center gap-1 mb-4">
                                <svg class="w-5 h-5" style="color: var(--warm-ember);" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2L13.09 8.26L22 9L17 14L18.18 21L12 17.27L5.82 21L7 14L2 9L10.91 8.26L12 2Z"></path>
                                </svg>
                                <svg class="w-5 h-5" style="color: var(--warm-ember);" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2L13.09 8.26L22 9L17 14L18.18 21L12 17.27L5.82 21L7 14L2 9L10.91 8.26L12 2Z"></path>
                                </svg>
                                <svg class="w-5 h-5" style="color: var(--warm-ember);" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2L13.09 8.26L22 9L17 14L18.18 21L12 17.27L5.82 21L7 14L2 9L10.91 8.26L12 2Z"></path>
                                </svg>
                                <svg class="w-5 h-5" style="color: var(--warm-ember);" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2L13.09 8.26L22 9L17 14L18.18 21L12 17.27L5.82 21L7 14L2 9L10.91 8.26L12 2Z"></path>
                                </svg>
                                <svg class="w-5 h-5" style="color: var(--warm-ember);" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2L13.09 8.26L22 9L17 14L18.18 21L12 17.27L5.82 21L7 14L2 9L10.91 8.26L12 2Z"></path>
                                </svg>
                            </div>
                            <p class="text-gray-700 mb-6 italic">"<?php echo esc_html($testimonial['quote']); ?>"</p>
                            <hr class="mb-4">
                            <div class="flex items-center gap-3">
                                <img src="<?php echo esc_url($testimonial['avatar']); ?>" 
                                     alt="<?php echo esc_attr($testimonial['name']); ?>" 
                                     class="w-12 h-12 rounded-full object-cover">
                                <div>
                                    <p class="text-sm font-semibold" style="color: var(--deep-tech-blue);">
                                        <?php echo esc_html($testimonial['name']); ?>
                                    </p>
                                    <p class="text-sm text-gray-500"><?php echo esc_html($testimonial['role']); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="text-center mt-8 animate-slide-up">
                    <p class="text-gray-500 italic">More endorsements coming soon from industry leaders...</p>
                </div>
            </div>
        </section>

        <!-- CTA Section with Form -->
        <section id="download-cta" class="py-20" style="background: linear-gradient(135deg, var(--deep-tech-blue), var(--neural-purple));">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center text-white" style="opacity: 1; transform: none;">
                    <h2 class="mb-6 text-4xl tracking-tight">Ready to Get Started?</h2>
                    <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">Download the first chapter free and discover how to build a technological future that amplifies human potential.</p>
                    
                    <form class="max-w-xl mx-auto bg-white rounded-2xl p-8 shadow-2xl" id="sample-download-form" style="opacity: 1; transform: none;">
                        <div class="space-y-4 mb-6">
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" aria-hidden="true">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <input type="text" data-slot="input" class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex w-full min-w-0 rounded-md border px-3 py-1 text-base bg-input-background transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive pl-10 h-12" placeholder="Your name" required="" name="name" value="">
                            </div>
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" aria-hidden="true">
                                    <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                                    <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                </svg>
                                <input type="email" data-slot="input" class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex w-full min-w-0 rounded-md border px-3 py-1 text-base bg-input-background transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive pl-10 h-12" placeholder="Your email" required="" name="email" value="">
                            </div>
                        </div>
                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none rounded-md px-6 w-full text-white text-lg h-14" type="submit" style="background-color: var(--sunset-orange);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2" aria-hidden="true">
                                <path d="M12 15V3"></path>
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <path d="m7 10 5 5 5-5"></path>
                            </svg>
                            Download Free Sample Chapter
                        </button>
                        <div class="flex items-center justify-center gap-2 mt-4 text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                            </svg>
                            <p>No spam, just early access &amp; updates</p>
                        </div>
                    </form>
                    
                    <div class="mt-8 flex flex-wrap items-center justify-center gap-6 text-white/80" style="opacity: 1;">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                            <span>Instant Download</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                            <span>PDF Format</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                            <span>25+ Pages</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sneak Peek -->
        <section class="py-20 bg-gray-50">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12 animate-slide-up">
                    <h2 class="mb-6 text-4xl tracking-tight" style="color: var(--deep-tech-blue);">
                        Inside the Book
                    </h2>
                    <div class="w-24 h-1 mx-auto mb-6" style="background-color: var(--warm-ember);"></div>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        A glimpse into the topics and frameworks you'll discover
                    </p>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden animate-slide-up">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/50 to-white z-10"></div>
                        <div class="p-8 relative">
                            <h3 class="text-2xl mb-6" style="color: var(--deep-tech-blue);">Table of Contents</h3>
                            <div class="space-y-4">
                                <?php
                                $chapters = array(
                                    "Chapter 1: The Convergence Point - Where AI Meets Blockchain",
                                    "Chapter 2: Human-Centered Technology Design",
                                    "Chapter 3: Building Trust in Decentralized Systems",
                                    "Chapter 4: The Ethics of Automation",
                                    "Chapter 5: Practical Implementation Frameworks"
                                );
                                
                                foreach ($chapters as $index => $chapter) :
                                    $blur_class = $index >= 2 ? 'blur-sm opacity-50' : '';
                                    $circle_color = $index < 2 ? 'var(--electric-cyan)' : 'var(--muted)';
                                    $text_color = $index < 2 ? 'text-white' : 'text-gray-400';
                                ?>
                                    <div class="flex items-start gap-4 p-4 rounded-lg bg-white <?php echo $blur_class; ?>" style="opacity: 1; transform: none;">
                                        <div class="flex-shrink-0 w-10 h-10 rounded-full flex items-center justify-center" 
                                             style="background-color: <?php echo $circle_color; ?>;">
                                            <span class="<?php echo $text_color; ?>"><?php echo $index + 1; ?></span>
                                        </div>
                                        <p class="flex-1 pt-2 text-gray-700"><?php echo esc_html($chapter); ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="text-center mt-8 relative z-20">
                                <p class="text-gray-600 mb-4">+ 7 more chapters covering implementation, case studies, and future trends</p>
                                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all h-10 rounded-md px-6" 
                                        style="background-color: var(--sunset-orange); color: white;">
                                    Get the Full Preview
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-2">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<style>
/* Icon sizing fixes - Override compiled Tailwind */
.w-3 { width: 0.75rem !important; }
.h-3 { height: 0.75rem !important; }
.w-3\.5 { width: 0.875rem !important; }
.h-3\.5 { height: 0.875rem !important; }
.w-4 { width: 1rem !important; }
.h-4 { height: 1rem !important; }
.w-5 { width: 1.25rem !important; }
.h-5 { height: 1.25rem !important; }
.w-6 { width: 1.5rem !important; }
.h-6 { height: 1.5rem !important; }
.w-8 { width: 2rem !important; }
.h-8 { height: 2rem !important; }
.w-12 { width: 3rem !important; }
.h-12 { height: 3rem !important; }
.w-16 { width: 4rem !important; }
.h-16 { height: 4rem !important; }
.w-20 { width: 5rem !important; }
.h-20 { height: 5rem !important; }
.w-24 { width: 6rem !important; }
.h-24 { height: 6rem !important; }
.w-32 { width: 8rem !important; }
.h-32 { height: 8rem !important; }

/* Floating animation for book cover */
@keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
    100% { transform: translateY(0px); }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-slide-up {
    animation: slideUp 0.8s ease-out forwards;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Smooth scrolling for anchor links */
html {
    scroll-behavior: smooth;
}

/* Form submission handler */
#sample-download-form {
    transition: all 0.3s ease;
}
</style>

<script>
// Form submission
document.getElementById('sample-download-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const name = this.querySelector('input[name="name"]').value;
    const email = this.querySelector('input[name="email"]').value;
    
    if (name && email) {
        // Show success message
        this.innerHTML = `
            <div class="text-center">
                <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: var(--electric-cyan);">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h3 class="text-2xl mb-2" style="color: var(--deep-tech-blue);">Thank You, ${name}!</h3>
                <p class="text-gray-600 mb-6">Check your email for the download link. We've also subscribed you to early updates about the book launch.</p>
                <button onclick="location.reload()" class="px-6 py-2 border rounded-lg" style="border-color: var(--deep-tech-blue); color: var(--deep-tech-blue);">
                    Download Another Copy
                </button>
            </div>
        `;
        
        // Simulate download
        setTimeout(() => {
            alert('Sample chapter downloading... Check your email!');
        }, 500);
    }
});

// Smooth scroll for CTA buttons
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
</script>

    <?php endwhile; ?>

</main>

<?php
get_footer();
?>