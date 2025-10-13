<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package PersonalWebsiteDesign
 */

get_header(); ?>

<main id="main" class="site-main" role="main">

    <?php while (have_posts()) : the_post(); ?>

        <!-- Hero Section -->
        <section class="relative py-20 overflow-hidden" style="background: linear-gradient(135deg, var(--deep-tech-blue) 0%, var(--neural-purple) 100%);">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <h1 class="text-white mb-6 text-4xl sm:text-5xl lg:text-6xl tracking-tight">
                    <?php the_title(); ?>
                </h1>
                <?php if (has_excerpt()) : ?>
                    <p class="text-white/90 text-xl mb-8 max-w-2xl mx-auto">
                        <?php the_excerpt(); ?>
                    </p>
                <?php endif; ?>
                
                <!-- Breadcrumbs -->
                <nav class="flex justify-center" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-2 text-white/80">
                        <li>
                            <a href="<?php echo home_url('/'); ?>" class="hover:text-white transition-colors">
                                Home
                            </a>
                        </li>
                        <li>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </li>
                        <li class="text-white" aria-current="page">
                            <?php the_title(); ?>
                        </li>
                    </ol>
                </nav>
            </div>
            
            <!-- Decorative Elements -->
            <div class="absolute top-0 left-0 w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
        </section>

        <!-- Main Content -->
        <section class="py-16 bg-white">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <article id="post-<?php the_ID(); ?>" <?php post_class('prose prose-lg max-w-none'); ?>>
                    <?php
                    // Display featured image if available
                    if (has_post_thumbnail()) :
                    ?>
                        <div class="mb-8 -mx-4 sm:-mx-6 lg:-mx-8">
                            <div class="aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-lg">
                                <?php the_post_thumbnail('full', array(
                                    'class' => 'w-full h-96 object-cover',
                                    'alt' => get_the_title()
                                )); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Page Content -->
                    <div class="content-area">
                        <?php the_content(); ?>
                        
                        <?php
                        wp_link_pages(array(
                            'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'personal-website-design') . '</span>',
                            'after'  => '</div>',
                            'link_before' => '<span>',
                            'link_after'  => '</span>',
                        ));
                        ?>
                    </div>

                    <!-- Page Meta -->
                    <footer class="entry-footer mt-12 pt-8 border-t border-gray-200">
                        <div class="flex flex-wrap items-center justify-between gap-4 text-sm text-gray-500">
                            <div class="flex items-center gap-4">
                                <span>
                                    Last updated: 
                                    <time datetime="<?php echo get_the_modified_date('c'); ?>">
                                        <?php echo get_the_modified_date(); ?>
                                    </time>
                                </span>
                                <?php if (comments_open() || get_comments_number()) : ?>
                                    <span>•</span>
                                    <a href="#comments" class="hover:text-gray-700 transition-colors">
                                        <?php comments_number('Leave a comment', '1 Comment', '% Comments'); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                            
                            <!-- Share Buttons -->
                            <div class="flex items-center gap-2">
                                <span class="text-gray-600">Share:</span>
                                <button onclick="shareOnSocial('twitter')" 
                                        class="p-2 text-gray-400 hover:text-blue-400 transition-colors"
                                        title="Share on Twitter">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                    </svg>
                                </button>
                                <button onclick="shareOnSocial('linkedin')" 
                                        class="p-2 text-gray-400 hover:text-blue-600 transition-colors"
                                        title="Share on LinkedIn">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </button>
                                <button onclick="copyToClipboard()" 
                                        class="p-2 text-gray-400 hover:text-gray-600 transition-colors"
                                        title="Copy link">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </footer>
                </article>

                <!-- Comments -->
                <?php
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>
            </div>
        </section>

    <?php endwhile; ?>

</main><!-- #main -->

<script>
// Social sharing functions
function shareOnSocial(platform) {
    const url = encodeURIComponent(window.location.href);
    const title = encodeURIComponent(document.title);
    
    let shareUrl = '';
    
    switch(platform) {
        case 'twitter':
            shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${title}`;
            break;
        case 'linkedin':
            shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${url}`;
            break;
        case 'facebook':
            shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
            break;
    }
    
    if (shareUrl) {
        window.open(shareUrl, '_blank', 'width=600,height=400');
    }
}

function copyToClipboard() {
    navigator.clipboard.writeText(window.location.href).then(function() {
        // Show success message
        const button = event.target;
        const originalTitle = button.title;
        button.title = 'Copied!';
        
        setTimeout(() => {
            button.title = originalTitle;
        }, 2000);
    });
}
</script>

<?php
get_footer();