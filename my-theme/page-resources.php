<?php
/**
 * Template Name: Resources Page
 */

get_header(); ?>

<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <section 
        class="py-24 relative overflow-hidden"
        style="background: linear-gradient(135deg, var(--deep-tech-blue), var(--neural-purple));"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h1 class="text-white mb-6 text-4xl sm:text-5xl md:text-6xl tracking-tight">
                    Free Resources Library
                </h1>
                <p class="text-white/90 text-xl max-w-3xl mx-auto mb-8">
                    Access exclusive whitepapers, surveys, market insights, and trend reports 
                    on AI, blockchain, and emerging technologies.
                </p>
                <div class="flex justify-center gap-6 text-white/80">
                    <div class="text-center">
                        <div class="text-3xl mb-1">8</div>
                        <div class="text-sm">Resources</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl mb-1">PDF</div>
                        <div class="text-sm">Format</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl mb-1">Free</div>
                        <div class="text-sm">Download</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Category Filter -->
            <div class="flex flex-wrap justify-center gap-3 mb-12">
                <button class="inline-flex items-center gap-2 px-4 py-2 rounded-md border transition-all font-medium"
                        style="background-color: var(--deep-tech-blue); border-color: var(--deep-tech-blue); color: white;"
                        data-category="all">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14,2 14,8 20,8"/>
                        <line x1="16" y1="13" x2="8" y2="13"/>
                        <line x1="16" y1="17" x2="8" y2="17"/>
                        <polyline points="10,9 9,9 8,9"/>
                    </svg>
                    All Resources
                </button>
                
                <button class="inline-flex items-center gap-2 px-4 py-2 rounded-md border transition-all font-medium" 
                        style="background-color: transparent; border-color: var(--electric-cyan); color: var(--electric-cyan);"
                        data-category="whitepaper">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14,2 14,8 20,8"/>
                        <line x1="16" y1="13" x2="8" y2="13"/>
                        <line x1="16" y1="17" x2="8" y2="17"/>
                        <polyline points="10,9 9,9 8,9"/>
                    </svg>
                    Whitepapers
                </button>
                
                <button class="inline-flex items-center gap-2 px-4 py-2 rounded-md border transition-all font-medium" 
                        style="background-color: transparent; border-color: var(--electric-cyan); color: var(--electric-cyan);"
                        data-category="survey">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 3v18h18"/>
                        <path d="m19 9-5 5-4-4-3 3"/>
                    </svg>
                    Surveys
                </button>
                
                <button class="inline-flex items-center gap-2 px-4 py-2 rounded-md border transition-all font-medium" 
                        style="background-color: transparent; border-color: var(--electric-cyan); color: var(--electric-cyan);"
                        data-category="market-insights">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2v20"/>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                    </svg>
                    Market Insights
                </button>
                
                <button class="inline-flex items-center gap-2 px-4 py-2 rounded-md border transition-all font-medium" 
                        style="background-color: transparent; border-color: var(--electric-cyan); color: var(--electric-cyan);"
                        data-category="future-trends">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="13,2 3,14 12,14 11,22 21,10 12,10"/>
                    </svg>
                    Future Trends
                </button>
            </div>

            <!-- Resources Grid -->
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6" id="resources-grid">
                
                <!-- Resource Card Example -->
                <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow border border-gray-200 resource-card" data-category="whitepaper">
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-4">
                            <div class="inline-flex items-center gap-1 text-xs font-medium px-2 py-1 rounded-full"
                                 style="background-color: rgba(var(--electric-cyan-rgb), 0.1); color: var(--electric-cyan);">
                                WHITEPAPER
                            </div>
                            <div class="text-xs text-gray-500">September 2025</div>
                        </div>
                        
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">AI Implementation Guide 2025</h3>
                        <p class="text-gray-600 text-sm mb-4">A comprehensive guide to successfully implementing artificial intelligence in enterprise environments.</p>
                        
                        <div class="space-y-2 mb-4">
                            <div class="text-sm text-gray-700">• Understanding AI readiness and organizational assessment</div>
                            <div class="text-sm text-gray-700">• Step-by-step implementation framework</div>
                            <div class="text-sm text-gray-700">• Common pitfalls and how to avoid them</div>
                            <div class="text-sm text-gray-700">• ROI measurement and success metrics</div>
                            <div class="text-sm text-gray-700">• Real-world case studies from Fortune 500 companies</div>
                        </div>
                        
                        <div class="flex justify-between items-center text-xs text-gray-500 mb-4">
                            <span>45 pages</span>
                            <span>3.2 MB</span>
                        </div>
                        
                        <button class="w-full inline-flex items-center justify-center gap-2 px-4 py-2 rounded-md font-medium transition-all"
                                style="background-color: var(--deep-tech-blue); color: white;"
                                onclick="openDownloadModal('ai-implementation-guide')">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                <polyline points="7,10 12,15 17,10"/>
                                <line x1="12" y1="15" x2="12" y2="3"/>
                            </svg>
                            Download Free
                        </button>
                    </div>
                </div>

                <!-- Add more resource cards here -->
                <!-- You can duplicate the above structure for other resources -->
                
            </div>
        </div>
    </section>
</div>

<!-- Download Modal -->
<div id="download-modal" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg max-w-md w-full mx-4 p-6">
        <div class="text-center mb-6">
            <div class="w-16 h-16 mx-auto mb-4 rounded-full flex items-center justify-center"
                 style="background-color: rgba(var(--electric-cyan-rgb), 0.1);">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--electric-cyan);">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                    <polyline points="7,10 12,15 17,10"/>
                    <line x1="12" y1="15" x2="12" y2="3"/>
                </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Download Resource</h3>
            <p class="text-gray-600 text-sm">Enter your email to download this free resource.</p>
        </div>
        
        <form id="download-form">
            <div class="space-y-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" id="email" name="email" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div>
                    <label for="first-name" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                    <input type="text" id="first-name" name="first-name" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
            </div>
            
            <div class="flex gap-3 mt-6">
                <button type="button" onclick="closeDownloadModal()"
                        class="flex-1 px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors">
                    Cancel
                </button>
                <button type="submit"
                        class="flex-1 px-4 py-2 rounded-md text-white transition-colors"
                        style="background-color: var(--deep-tech-blue);">
                    Download
                </button>
            </div>
        </form>
    </div>
</div>

<script>
// Category filtering functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('[data-category]');
    const resourceCards = document.querySelectorAll('.resource-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Update button styles
            filterButtons.forEach(btn => {
                btn.style.backgroundColor = 'transparent';
                btn.style.color = 'var(--electric-cyan)';
            });
            this.style.backgroundColor = 'var(--deep-tech-blue)';
            this.style.color = 'white';
            
            // Filter cards
            resourceCards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});

// Modal functionality
function openDownloadModal(resourceId) {
    document.getElementById('download-modal').classList.remove('hidden');
}

function closeDownloadModal() {
    document.getElementById('download-modal').classList.add('hidden');
}

// Handle form submission
document.getElementById('download-form').addEventListener('submit', function(e) {
    e.preventDefault();
    // Add your form submission logic here
    alert('Thank you! Your download will begin shortly.');
    closeDownloadModal();
});
</script>

<?php get_footer(); ?>