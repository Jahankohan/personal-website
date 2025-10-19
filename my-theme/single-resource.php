<?php
/**
 * Template for displaying single resource posts
 * Template Name: Resource Detail Page
 */

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div 
        class="py-16 relative overflow-hidden"
        style="background: linear-gradient(135deg, var(--deep-tech-blue), var(--neural-purple));"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div style="opacity: 1; transform: none;">
                <a href="<?php echo esc_url(home_url('/resources')); ?>" 
                   class="inline-flex items-center text-white hover:bg-white/10 mb-6 px-3 py-2 rounded-md transition-colors">
                    <svg class="mr-2" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="m12 19-7-7 7-7"/>
                        <path d="M19 12H5"/>
                    </svg>
                    Back to Resources
                </a>

                <?php
                // Get custom fields
                $resource_category = get_post_meta(get_the_ID(), 'resource_category', true) ?: 'whitepaper';
                $resource_pages = get_post_meta(get_the_ID(), 'resource_pages', true) ?: '25';
                $resource_size = get_post_meta(get_the_ID(), 'resource_size', true) ?: '2.1 MB';
                $resource_headlines = get_post_meta(get_the_ID(), 'resource_headlines', true);
                $resource_file_url = get_post_meta(get_the_ID(), 'resource_file_url', true);

                // Category icons and colors
                $category_icons = array(
                    'whitepaper' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>',
                    'survey' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>',
                    'market-insights' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>',
                    'future-trends' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>'
                );

                $category_colors = array(
                    'whitepaper' => 'var(--electric-cyan)',
                    'survey' => 'var(--warm-ember)',
                    'market-insights' => 'var(--neural-purple)',
                    'future-trends' => 'var(--sunset-orange)'
                );

                $category_icon = isset($category_icons[$resource_category]) ? $category_icons[$resource_category] : $category_icons['whitepaper'];
                $category_color = isset($category_colors[$resource_category]) ? $category_colors[$resource_category] : 'var(--deep-tech-blue)';
                ?>

                <div class="flex items-center gap-3 mb-6">
                    <span class="inline-flex items-center px-2 py-1 rounded-md text-white text-sm font-medium" 
                          style="background-color: <?php echo $category_color; ?>;">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="mr-1">
                            <?php echo $category_icon; ?>
                        </svg>
                        <?php echo ucwords(str_replace('-', ' ', $resource_category)); ?>
                    </span>
                    <span class="text-white/70">•</span>
                    <span class="text-white/90"><?php echo $resource_pages; ?> pages</span>
                    <span class="text-white/70">•</span>
                    <span class="text-white/90"><?php echo get_the_date('F Y'); ?></span>
                </div>

                <h1 class="text-white mb-4 text-4xl sm:text-5xl lg:text-6xl tracking-tight max-w-4xl">
                    <?php the_title(); ?>
                </h1>
                
                <div class="text-white/90 text-xl mb-8 max-w-3xl">
                    <?php echo get_the_excerpt() ?: wp_trim_words(get_the_content(), 30); ?>
                </div>

                <div class="flex flex-wrap gap-4">
                    <div class="flex items-center gap-2 text-white/90">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14,2 14,8 20,8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                            <polyline points="10,9 9,9 8,9"/>
                        </svg>
                        <span><?php echo $resource_size; ?> PDF</span>
                    </div>
                    <div class="flex items-center gap-2 text-white/90">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                            <line x1="16" y1="2" x2="16" y2="6"/>
                            <line x1="8" y1="2" x2="8" y2="6"/>
                            <line x1="3" y1="10" x2="21" y2="10"/>
                        </svg>
                        <span>Updated <?php echo get_the_date('F Y'); ?></span>
                    </div>
                    <div class="flex items-center gap-2 text-white/90">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                            <polyline points="7,10 12,15 17,10"/>
                            <line x1="12" y1="15" x2="12" y2="3"/>
                        </svg>
                        <span>Instant Download</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Left Column - Content -->
            <div class="lg:col-span-2 space-y-8" style="opacity: 1; transform: none;">
                
                <!-- What's Inside -->
                <div class="bg-white rounded-xl shadow-lg">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="text-xl font-bold mb-2" style="color: var(--deep-tech-blue);">
                            What's Inside
                        </h3>
                        <p class="text-gray-600">
                            Key topics and insights covered in this resource
                        </p>
                    </div>
                    <div class="p-6">
                        <div class="space-y-3">
                            <?php 
                            if ($resource_headlines && is_array($resource_headlines)) {
                                foreach ($resource_headlines as $index => $headline) {
                                    echo '<div class="flex items-start gap-3" style="opacity: 1; transform: none;">';
                                    echo '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="mt-0.5 flex-shrink-0" style="color: ' . $category_color . ';">';
                                    echo '<path d="M9 12l2 2 4-4"/>';
                                    echo '<circle cx="12" cy="12" r="10"/>';
                                    echo '</svg>';
                                    echo '<p class="text-gray-700">' . esc_html($headline) . '</p>';
                                    echo '</div>';
                                }
                            } else {
                                // Default headlines if none set
                                $default_headlines = array(
                                    'Comprehensive analysis and insights',
                                    'Best practices and implementation strategies', 
                                    'Real-world case studies and examples',
                                    'Expert recommendations and forecasts',
                                    'Actionable takeaways for your organization'
                                );
                                foreach ($default_headlines as $headline) {
                                    echo '<div class="flex items-start gap-3">';
                                    echo '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="mt-0.5 flex-shrink-0" style="color: ' . $category_color . ';">';
                                    echo '<path d="M9 12l2 2 4-4"/>';
                                    echo '<circle cx="12" cy="12" r="10"/>';
                                    echo '</svg>';
                                    echo '<p class="text-gray-700">' . esc_html($headline) . '</p>';
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Key Statistics -->
                <div class="bg-white rounded-xl shadow-lg">
                    <div class="p-6 border-b border-gray-200">
                        <h3 class="text-xl font-bold mb-2" style="color: var(--deep-tech-blue);">
                            Key Statistics & Insights
                        </h3>
                        <p class="text-gray-600">
                            Data-driven insights from our research
                        </p>
                    </div>
                    <div class="p-6 space-y-8">
                        <!-- Stat Cards -->
                        <div class="grid sm:grid-cols-3 gap-4">
                            <div class="p-4 rounded-lg text-center" style="background-color: var(--electric-cyan); opacity: 0.1;">
                                <div class="text-3xl mb-2 font-bold" style="color: var(--electric-cyan);">
                                    78%
                                </div>
                                <div class="text-sm text-gray-600">Adoption Rate</div>
                            </div>
                            <div class="p-4 rounded-lg text-center" style="background-color: var(--neural-purple); opacity: 0.1;">
                                <div class="text-3xl mb-2 font-bold" style="color: var(--neural-purple);">
                                    $2.4M
                                </div>
                                <div class="text-sm text-gray-600">Avg. ROI</div>
                            </div>
                            <div class="p-4 rounded-lg text-center" style="background-color: var(--warm-ember); opacity: 0.1;">
                                <div class="text-3xl mb-2 font-bold" style="color: var(--warm-ember);">
                                    500+
                                </div>
                                <div class="text-sm text-gray-600">Organizations</div>
                            </div>
                        </div>

                        <!-- Content Preview -->
                        <div>
                            <h4 class="text-lg font-semibold mb-4" style="color: var(--deep-tech-blue);">
                                Resource Preview
                            </h4>
                            <div class="prose max-w-none">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Download Form -->
            <div class="lg:col-span-1" style="opacity: 1; transform: none;">
                <div class="sticky top-24">
                    <div class="bg-white rounded-xl shadow-xl">
                        <div class="p-6 border-b border-gray-200">
                            <h3 class="text-xl font-bold mb-2" style="color: var(--deep-tech-blue);">
                                Download This Resource
                            </h3>
                            <p class="text-gray-600">
                                Fill in your details to get instant access
                            </p>
                        </div>
                        <div class="p-6">
                            <form id="resource-download-form" class="space-y-4">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                                    <input
                                        id="name"
                                        name="name"
                                        type="text"
                                        placeholder="John Doe"
                                        required
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    />
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address *</label>
                                    <input
                                        id="email"
                                        name="email"
                                        type="email"
                                        placeholder="john@company.com"
                                        required
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    />
                                </div>

                                <div>
                                    <label for="role" class="block text-sm font-medium text-gray-700 mb-1">Your Role *</label>
                                    <select 
                                        id="role"
                                        name="role"
                                        required
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    >
                                        <option value="">Select your role</option>
                                        <option value="cto">CTO / Technology Leader</option>
                                        <option value="ceo">CEO / Founder</option>
                                        <option value="product">Product Manager</option>
                                        <option value="innovation">Innovation Manager</option>
                                        <option value="consultant">Consultant</option>
                                        <option value="developer">Developer</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="organization" class="block text-sm font-medium text-gray-700 mb-1">Organization *</label>
                                    <input
                                        id="organization"
                                        name="organization"
                                        type="text"
                                        placeholder="Company name"
                                        required
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    />
                                </div>

                                <hr class="my-4">

                                <input type="hidden" name="resource_id" value="<?php echo get_the_ID(); ?>">
                                <input type="hidden" name="resource_file" value="<?php echo esc_attr($resource_file_url); ?>">

                                <button
                                    type="submit"
                                    class="w-full flex items-center justify-center gap-2 text-white px-6 py-3 rounded-md font-medium transition-all hover:opacity-90 disabled:opacity-50"
                                    style="background-color: var(--sunset-orange);"
                                >
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                        <polyline points="7,10 12,15 17,10"/>
                                        <line x1="12" y1="15" x2="12" y2="3"/>
                                    </svg>
                                    Download Now
                                </button>

                                <p class="text-xs text-gray-500 text-center">
                                    By downloading, you agree to receive occasional emails about our resources and services. 
                                    You can unsubscribe anytime.
                                </p>
                            </form>
                        </div>
                    </div>

                    <!-- Quick Info -->
                    <div class="bg-white rounded-xl shadow-lg mt-4">
                        <div class="p-6">
                            <div class="space-y-3 text-sm">
                                <div class="flex items-center gap-2 text-gray-700">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: <?php echo $category_color; ?>;">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                        <polyline points="14,2 14,8 20,8"/>
                                    </svg>
                                    <span><?php echo $resource_pages; ?> pages of insights</span>
                                </div>
                                <div class="flex items-center gap-2 text-gray-700">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: <?php echo $category_color; ?>;">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                        <polyline points="7,10 12,15 17,10"/>
                                        <line x1="12" y1="15" x2="12" y2="3"/>
                                    </svg>
                                    <span>Instant PDF download</span>
                                </div>
                                <div class="flex items-center gap-2 text-gray-700">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: <?php echo $category_color; ?>;">
                                        <path d="M9 12l2 2 4-4"/>
                                        <circle cx="12" cy="12" r="10"/>
                                    </svg>
                                    <span>100% free, no payment required</span>
                                </div>
                                <div class="flex items-center gap-2 text-gray-700">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: <?php echo $category_color; ?>;">
                                        <path d="M3 21h18"/>
                                        <path d="M5 21V7l8-4v18"/>
                                        <path d="M19 21V11l-6-4"/>
                                    </svg>
                                    <span>Trusted by 500+ organizations</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('resource-download-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitButton = this.querySelector('button[type="submit"]');
    
    // Validate required fields
    const requiredFields = ['name', 'email', 'role', 'organization'];
    let isValid = true;
    
    requiredFields.forEach(field => {
        const input = this.querySelector(`[name="${field}"]`);
        if (!input.value.trim()) {
            isValid = false;
            input.style.borderColor = '#ef4444';
        } else {
            input.style.borderColor = '#d1d5db';
        }
    });
    
    if (!isValid) {
        alert('Please fill in all required fields');
        return;
    }
    
    // Disable button and show loading
    submitButton.disabled = true;
    submitButton.innerHTML = 'Processing...';
    
    // Simulate download process
    setTimeout(() => {
        alert('Thank you! Your download will start shortly.');
        
        // Trigger download if file URL is available
        const fileUrl = formData.get('resource_file');
        if (fileUrl) {
            const link = document.createElement('a');
            link.href = fileUrl;
            link.download = '';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
        
        // Reset form
        this.reset();
        submitButton.disabled = false;
        submitButton.innerHTML = '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7,10 12,15 17,10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>Download Now';
    }, 1500);
});
</script>

<?php endwhile; ?>

<?php get_footer(); ?>