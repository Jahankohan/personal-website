<?php
/**
 * The template for displaying all single posts
 *
 * @package Personal_Website_Design
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <!-- Hero Section -->
            <div class="relative h-[60vh] min-h-[500px] overflow-hidden">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('full', array('class' => 'absolute inset-0 w-full h-full object-cover')); ?>
                <?php else : ?>
                    <div class="absolute inset-0 w-full h-full" 
                         style="background: linear-gradient(135deg, var(--deep-tech-blue) 0%, var(--neural-purple) 50%, var(--deep-tech-blue) 100%);">
                    </div>
                <?php endif; ?>
                
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                
                <div class="absolute inset-0 flex items-end">
                    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pb-12 w-full">
                        <a href="<?php echo esc_url(home_url('/blog/')); ?>"
                           class="inline-flex items-center text-white hover:bg-white/10 px-4 py-2 rounded-lg transition-all mb-6">
                            <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                            Back to Blog
                        </a>

                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            $category = $categories[0];
                            echo '<span class="inline-block px-3 py-1 rounded-full text-white text-sm mb-4" style="background-color: var(--sunset-orange);">';
                            echo esc_html($category->name);
                            echo '</span>';
                        }
                        ?>

                        <h1 class="text-white text-4xl sm:text-5xl lg:text-6xl mb-4 max-w-4xl tracking-tight">
                            <?php the_title(); ?>
                        </h1>
                        
                        <?php if (has_excerpt()) : ?>
                            <p class="text-white/90 text-xl mb-6 max-w-3xl">
                                <?php the_excerpt(); ?>
                            </p>
                        <?php endif; ?>

                        <div class="flex flex-wrap items-center gap-6 text-white/80 text-sm">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <?php echo get_the_date(); ?>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <?php echo personal_website_design_reading_time(); ?>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <?php the_author(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Article Content -->
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="grid lg:grid-cols-4 gap-8">
                    
                    <!-- Sidebar -->
                    <div class="lg:col-span-1 order-2 lg:order-1">
                        <div class="sticky top-24 space-y-6">
                            
                            <!-- Author Card -->
                            <div class="bg-white rounded-xl p-6 shadow-sm">
                                <div class="text-center">
                                    <div class="w-20 h-20 mx-auto mb-4 rounded-full overflow-hidden">
                                        <?php echo get_avatar(get_the_author_meta('ID'), 80, '', '', array('class' => 'w-full h-full object-cover')); ?>
                                    </div>
                                    <h3 class="mb-2" style="color: var(--deep-tech-blue);">
                                        <?php the_author(); ?>
                                    </h3>
                                    <p class="text-sm text-gray-600 mb-4">
                                        <?php echo esc_html(get_the_author_meta('description') ?: 'Technology strategist bridging the gap between innovation and human impact.'); ?>
                                    </p>
                                    <div class="flex justify-center gap-2">
                                        <?php
                                        $author_twitter = get_the_author_meta('twitter');
                                        $author_linkedin = get_the_author_meta('linkedin');
                                        
                                        if ($author_twitter) :
                                        ?>
                                            <a href="<?php echo esc_url($author_twitter); ?>" 
                                               target="_blank" 
                                               class="p-2 border rounded-lg hover:bg-gray-50 transition-colors">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                                </svg>
                                            </a>
                                        <?php endif; ?>
                                        
                                        <?php if ($author_linkedin) : ?>
                                            <a href="<?php echo esc_url($author_linkedin); ?>" 
                                               target="_blank" 
                                               class="p-2 border rounded-lg hover:bg-gray-50 transition-colors">
                                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                                </svg>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Actions -->
                            <div class="bg-white rounded-xl p-4 shadow-sm space-y-2">
                                <button onclick="personal_website_design_like_post(<?php the_ID(); ?>)"
                                        class="w-full flex items-center justify-start px-3 py-2 hover:bg-gray-50 rounded-lg transition-colors"
                                        id="like-button-<?php the_ID(); ?>">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                    </svg>
                                    <span id="like-count-<?php the_ID(); ?>">
                                        <?php echo (int) get_post_meta(get_the_ID(), '_post_likes', true); ?> Likes
                                    </span>
                                </button>
                                <button onclick="personal_website_design_bookmark_post(<?php the_ID(); ?>)"
                                        class="w-full flex items-center justify-start px-3 py-2 hover:bg-gray-50 rounded-lg transition-colors">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                                    </svg>
                                    Save
                                </button>
                                <button onclick="personal_website_design_share_post()"
                                        class="w-full flex items-center justify-start px-3 py-2 hover:bg-gray-50 rounded-lg transition-colors">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                                    </svg>
                                    Share
                                </button>
                            </div>

                            <!-- Tags -->
                            <?php
                            $tags = get_the_tags();
                            if ($tags) :
                            ?>
                            <div class="bg-white rounded-xl p-6 shadow-sm">
                                <div class="flex items-center gap-2 mb-4">
                                    <svg class="w-5 h-5" style="color: var(--deep-tech-blue);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                    <h4 style="color: var(--deep-tech-blue);">Tags</h4>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <?php foreach ($tags as $tag) : ?>
                                        <a href="<?php echo get_tag_link($tag->term_id); ?>"
                                           class="px-2 py-1 text-sm border rounded-full hover:bg-gray-100 transition-colors">
                                            <?php echo esc_html($tag->name); ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Main Content -->
                    <div class="lg:col-span-3 order-1 lg:order-2">
                        <div class="bg-white rounded-xl p-8 lg:p-12 shadow-sm mb-8">
                            <div class="prose prose-lg max-w-none">
                                <?php the_content(); ?>
                            </div>

                            <div class="border-t border-gray-200 mt-12 pt-8">
                                <!-- Share Section -->
                                <div class="flex items-center justify-between flex-wrap gap-4">
                                    <div class="flex items-center gap-4">
                                        <span class="text-gray-600">Share this article:</span>
                                        <div class="flex gap-2">
                                            <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>"
                                               target="_blank"
                                               class="p-2 border rounded-lg hover:bg-gray-50 transition-colors">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                                </svg>
                                            </a>
                                            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>"
                                               target="_blank"
                                               class="p-2 border rounded-lg hover:bg-gray-50 transition-colors">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                                </svg>
                                            </a>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"
                                               target="_blank"
                                               class="p-2 border rounded-lg hover:bg-gray-50 transition-colors">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <button onclick="personal_website_design_like_post(<?php the_ID(); ?>)"
                                            class="flex items-center px-4 py-2 border rounded-lg hover:bg-gray-50 transition-colors"
                                            style="border-color: var(--deep-tech-blue); color: var(--deep-tech-blue);"
                                            id="like-button-main-<?php the_ID(); ?>">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                        </svg>
                                        <span id="like-count-main-<?php the_ID(); ?>">
                                            Like (<?php echo (int) get_post_meta(get_the_ID(), '_post_likes', true); ?>)
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Comments Section -->
                        <?php if (comments_open() || get_comments_number()) : ?>
                            <div class="bg-white rounded-xl p-8 lg:p-12 shadow-sm">
                                <div class="flex items-center gap-2 mb-8">
                                    <svg class="w-6 h-6" style="color: var(--deep-tech-blue);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                    </svg>
                                    <h2 style="color: var(--deep-tech-blue);">
                                        Comments (<?php echo get_comments_number(); ?>)
                                    </h2>
                                </div>

                                <?php comments_template(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </article>

    <?php endwhile; ?>

</main><!-- #main -->

<?php
get_footer();