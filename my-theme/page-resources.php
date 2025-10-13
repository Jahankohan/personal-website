<?php
/**
 * Template Name: Resources Page
 * Description: Custom template for the Resources library page
 * 
 * @package PersonalWebsiteDesign
 */

get_header(); ?>

<main id="main" class="site-main" role="main">

    <?php while (have_posts()) : the_post(); ?>

        <!-- Hero Section -->
        <section class="relative py-20 overflow-hidden" style="background: linear-gradient(135deg, var(--deep-tech-blue) 0%, var(--neural-purple) 50%, var(--warm-ember) 100%);">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center animate-slide-up">
                    <div class="inline-flex items-center px-4 py-2 text-sm font-medium text-white rounded-full mb-6" 
                         style="background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                        <svg class="mr-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                        Free Resource Library
                    </div>
                    <h1 class="text-white mb-6 text-4xl sm:text-5xl lg:text-6xl tracking-tight">
                        Tools, Insights & Guides for Tech Leaders
                    </h1>
                    <p class="text-white/90 text-xl mb-8 max-w-3xl mx-auto">
                        Access exclusive whitepapers, surveys, market insights, and future trend reports to help you navigate the evolving technology landscape.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button onclick="document.getElementById('resources-section').scrollIntoView({behavior: 'smooth'})" 
                                class="inline-flex items-center px-6 py-3 text-lg font-medium text-white rounded-lg transition-all hover:shadow-lg" 
                                style="background-color: var(--sunset-orange);">
                            <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Browse Resources
                        </button>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" 
                           class="inline-flex items-center px-6 py-3 text-lg font-medium text-white border border-white/30 rounded-lg hover:bg-white/10 transition-all">
                            <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Request Custom Research
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Decorative Elements -->
            <div class="absolute top-0 left-0 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
        </section>

        <!-- Stats Section -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-4 gap-8 text-center">
                    <?php
                    $stats = array(
                        array('number' => '25+', 'label' => 'Free Resources', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>'),
                        array('number' => '50,000+', 'label' => 'Downloads', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>'),
                        array('number' => '500+', 'label' => 'Organizations Surveyed', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>'),
                        array('number' => '98%', 'label' => 'Satisfaction Rate', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>')
                    );
                    
                    foreach ($stats as $stat) :
                    ?>
                    <div class="text-center animate-slide-up">
                        <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center rounded-full" 
                             style="background-color: var(--sunset-orange); color: white;">
                            <?php echo $stat['icon']; ?>
                        </div>
                        <div class="text-3xl font-bold mb-2" style="color: var(--deep-tech-blue);">
                            <?php echo $stat['number']; ?>
                        </div>
                        <div class="text-gray-600"><?php echo $stat['label']; ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Resources Section -->
        <section id="resources-section" class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Category Filter -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-6" style="color: var(--deep-tech-blue);">
                        Choose Your Resource Type
                    </h2>
                    <div class="flex flex-wrap justify-center gap-3">
                        <button class="category-filter active px-6 py-3 rounded-full font-medium transition-all" 
                                data-category="all">
                            All Resources
                        </button>
                        <button class="category-filter px-6 py-3 rounded-full font-medium transition-all" 
                                data-category="whitepaper">
                            Whitepapers
                        </button>
                        <button class="category-filter px-6 py-3 rounded-full font-medium transition-all" 
                                data-category="survey">
                            Surveys
                        </button>
                        <button class="category-filter px-6 py-3 rounded-full font-medium transition-all" 
                                data-category="market-insights">
                            Market Insights
                        </button>
                        <button class="category-filter px-6 py-3 rounded-full font-medium transition-all" 
                                data-category="future-trends">
                            Future Trends
                        </button>
                    </div>
                </div>

                <!-- Resources Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="resources-grid">
                    <?php
                    // Sample resources data - in a real implementation, these would come from custom fields or a custom post type
                    $resources = array(
                        array(
                            'title' => 'AI Implementation Guide 2025',
                            'description' => 'A comprehensive guide to successfully implementing artificial intelligence in enterprise environments.',
                            'category' => 'whitepaper',
                            'pages' => 45,
                            'size' => '3.2 MB',
                            'date' => 'September 2025',
                            'color' => 'var(--electric-cyan)',
                            'headlines' => array(
                                'Understanding AI readiness and organizational assessment',
                                'Step-by-step implementation framework',
                                'Common pitfalls and how to avoid them',
                                'ROI measurement and success metrics',
                                'Real-world case studies from Fortune 500 companies'
                            )
                        ),
                        array(
                            'title' => 'Blockchain for Enterprise: Beyond the Hype',
                            'description' => 'Exploring practical applications of blockchain technology in supply chain, finance, and healthcare.',
                            'category' => 'whitepaper',
                            'pages' => 38,
                            'size' => '2.8 MB',
                            'date' => 'August 2025',
                            'color' => 'var(--electric-cyan)',
                            'headlines' => array(
                                'Demystifying blockchain technology',
                                'Real-world use cases across industries',
                                'Implementation considerations and costs',
                                'Security and compliance frameworks',
                                'Future-proofing your blockchain strategy'
                            )
                        ),
                        array(
                            'title' => '2025 Tech Readiness Survey Results',
                            'description' => 'Insights from 500+ organizations on their digital transformation journey and technology adoption.',
                            'category' => 'survey',
                            'pages' => 28,
                            'size' => '1.9 MB',
                            'date' => 'September 2025',
                            'color' => 'var(--warm-ember)',
                            'headlines' => array(
                                'Current state of technology adoption across industries',
                                'Key challenges and barriers to implementation',
                                'Investment priorities for the next 12 months',
                                'Skills gap analysis and training needs',
                                'Comparative benchmarks by company size and sector'
                            )
                        ),
                        array(
                            'title' => 'AI Market Outlook 2026-2028',
                            'description' => 'Comprehensive analysis of the AI market landscape, emerging players, and investment opportunities.',
                            'category' => 'market-insights',
                            'pages' => 52,
                            'size' => '4.1 MB',
                            'date' => 'October 2025',
                            'color' => 'var(--neural-purple)',
                            'headlines' => array(
                                'Market size and growth projections',
                                'Key players and competitive landscape',
                                'Emerging segments and opportunities',
                                'Regulatory trends and their impact',
                                'Investment recommendations'
                            )
                        ),
                        array(
                            'title' => 'Emerging Technologies to Watch in 2026',
                            'description' => 'Expert predictions on breakthrough technologies that will shape the next decade.',
                            'category' => 'future-trends',
                            'pages' => 41,
                            'size' => '3.5 MB',
                            'date' => 'October 2025',
                            'color' => 'var(--sunset-orange)',
                            'headlines' => array(
                                'Quantum computing\'s commercial breakthrough',
                                'AI agents and autonomous systems',
                                'Web3 and decentralized technologies',
                                'Biotech meets digital innovation',
                                'Climate tech and sustainable solutions'
                            )
                        ),
                        array(
                            'title' => 'The Future of Human-AI Collaboration',
                            'description' => 'Exploring how humans and AI will work together in the workplace of tomorrow.',
                            'category' => 'future-trends',
                            'pages' => 36,
                            'size' => '2.9 MB',
                            'date' => 'September 2025',
                            'color' => 'var(--sunset-orange)',
                            'headlines' => array(
                                'Evolution of AI capabilities and limitations',
                                'New job roles and skill requirements',
                                'Ethical frameworks for AI collaboration',
                                'Augmented intelligence vs artificial intelligence',
                                'Preparing your workforce for AI integration'
                            )
                        )
                    );

                    foreach ($resources as $index => $resource) :
                    ?>
                        <div class="resource-card bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1" 
                             data-category="<?php echo $resource['category']; ?>">
                            <div class="h-2 rounded-t-xl" style="background-color: <?php echo $resource['color']; ?>;"></div>
                            <div class="p-6">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="w-12 h-12 rounded-lg flex items-center justify-center text-white" 
                                         style="background-color: <?php echo $resource['color']; ?>;">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                    </div>
                                    <span class="px-2 py-1 text-xs font-medium text-white rounded-full" 
                                          style="background-color: <?php echo $resource['color']; ?>;">
                                        <?php echo ucfirst(str_replace('-', ' ', $resource['category'])); ?>
                                    </span>
                                </div>

                                <h3 class="text-xl font-bold mb-2" style="color: var(--deep-tech-blue);">
                                    <?php echo esc_html($resource['title']); ?>
                                </h3>

                                <p class="text-gray-600 mb-4 line-clamp-3">
                                    <?php echo esc_html($resource['description']); ?>
                                </p>

                                <div class="space-y-2 mb-4">
                                    <h4 class="text-sm font-medium text-gray-900">What you'll learn:</h4>
                                    <ul class="space-y-1">
                                        <?php foreach (array_slice($resource['headlines'], 0, 3) as $headline) : ?>
                                            <li class="flex items-start gap-2 text-sm text-gray-600">
                                                <svg class="w-4 h-4 mt-0.5 flex-shrink-0" style="color: <?php echo $resource['color']; ?>;" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                                </svg>
                                                <?php echo esc_html($headline); ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                                    <span><?php echo $resource['pages']; ?> pages</span>
                                    <span><?php echo $resource['size']; ?></span>
                                    <span><?php echo $resource['date']; ?></span>
                                </div>

                                <button class="w-full flex items-center justify-center gap-2 px-4 py-2 text-white rounded-lg font-medium transition-all hover:shadow-lg download-btn" 
                                        style="background-color: <?php echo $resource['color']; ?>;"
                                        data-resource='<?php echo json_encode($resource); ?>'>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                    Download Free
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Newsletter Signup -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl p-8 text-white">
                    <h3 class="text-2xl font-bold mb-4">Stay Updated with New Resources</h3>
                    <p class="mb-6">Get notified when we release new whitepapers, surveys, and insights.</p>
                    <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                        <input type="email" 
                               placeholder="Enter your email" 
                               class="flex-1 px-4 py-2 rounded-lg text-gray-900" 
                               required>
                        <button type="submit" 
                                class="px-6 py-2 bg-white text-blue-600 rounded-lg font-medium hover:bg-gray-100 transition-colors">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Main Content Area (for additional content) -->
        <?php if (get_the_content()) : ?>
            <section class="py-16 bg-gray-50">
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="prose prose-lg max-w-none">
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

    <?php endwhile; ?>

    <!-- Download Modal -->
    <div id="download-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-2xl p-8 max-w-md mx-4 relative">
            <button id="close-modal" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <div class="text-center mb-6">
                <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-green-100 flex items-center justify-center">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Download Starting...</h3>
                <p class="text-gray-600">Your resource will download shortly. Thank you for your interest!</p>
            </div>
            <form id="download-form" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                    <input type="text" name="name" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" required class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Company (Optional)</label>
                    <input type="text" name="company" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-colors">
                    Download Resource
                </button>
            </form>
        </div>
    </div>

</main><!-- #main -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Category filtering
    const categoryButtons = document.querySelectorAll('.category-filter');
    const resourceCards = document.querySelectorAll('.resource-card');

    categoryButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Update active button
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const category = this.dataset.category;

            // Filter resources
            resourceCards.forEach(card => {
                if (category === 'all' || card.dataset.category === category) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // Download modal
    const modal = document.getElementById('download-modal');
    const closeModal = document.getElementById('close-modal');
    const downloadButtons = document.querySelectorAll('.download-btn');

    downloadButtons.forEach(button => {
        button.addEventListener('click', function() {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });
    });

    closeModal.addEventListener('click', function() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    });

    // Close modal on backdrop click
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    });

    // Handle form submission
    const form = document.getElementById('download-form');
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Simulate download
        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            
            // Show success message
            alert('Thank you! Your download will begin shortly.');
        }, 1000);
    });
});
</script>

<?php
get_footer();