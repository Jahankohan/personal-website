<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package Personal_Website_Design
 */

get_header();
?>

<main id="primary" class="site-main">
    
    <?php if (have_posts()) : ?>
        
        <!-- Hero Section for Blog -->
        <section class="relative min-h-[60vh] flex items-center justify-center" style="background: linear-gradient(135deg, var(--deep-tech-blue) 0%, var(--neural-purple) 50%, var(--deep-tech-blue) 100%);">
            <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-white mb-6 text-4xl sm:text-5xl md:text-6xl tracking-tight">
                    <?php
                    if (is_home() && !is_front_page()) {
                        single_post_title();
                    } elseif (is_category()) {
                        single_cat_title();
                    } elseif (is_tag()) {
                        single_tag_title();
                    } elseif (is_author()) {
                        echo 'Posts by ' . get_the_author();
                    } elseif (is_date()) {
                        echo 'Archive';
                    } else {
                        echo 'Latest Insights';
                    }
                    ?>
                </h1>
                <p class="text-xl mb-8 max-w-2xl mx-auto" style="color: var(--warm-ember);">
                    <?php
                    if (is_category()) {
                        echo category_description();
                    } elseif (is_tag()) {
                        echo tag_description();
                    } else {
                        echo 'Exploring the intersection of technology, humanity, and the future we\'re building together.';
                    }
                    ?>
                </p>
                
                <!-- Search and Filter Bar -->
                <div class="max-w-2xl mx-auto">
                    <form role="search" method="get" class="flex gap-3" action="<?php echo esc_url(home_url('/')); ?>">
                        <div class="flex-1 relative">
                            <input type="search"
                                   name="s"
                                   placeholder="Search posts..."
                                   value="<?php echo get_search_query(); ?>"
                                   class="w-full px-4 py-3 pl-10 rounded-lg border border-white/20 bg-white/10 text-white placeholder-white/60 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-white/30">
                            <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <button type="submit"
                                class="px-6 py-3 rounded-lg text-white border border-white/20 hover:bg-white/10 transition-all">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Blog Stats -->
        <section class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-4 gap-8 text-center">
                    <?php
                    $total_posts = wp_count_posts()->publish;
                    $total_categories = wp_count_terms('category');
                    $total_tags = wp_count_terms('post_tag');
                    $total_comments = wp_count_comments()->approved;
                    
                    $stats = array(
                        array('number' => $total_posts, 'label' => 'Articles', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>'),
                        array('number' => $total_categories, 'label' => 'Categories', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>'),
                        array('number' => $total_tags, 'label' => 'Topics', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>'),
                        array('number' => $total_comments, 'label' => 'Comments', 'icon' => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>')
                    );
                    
                    foreach ($stats as $stat) :
                    ?>
                    <div class="text-center">
                        <div class="w-16 h-16 mx-auto mb-4 flex items-center justify-center rounded-full" 
                             style="background-color: var(--sunset-orange); color: white;">
                            <?php echo $stat['icon']; ?>
                        </div>
                        <div class="text-3xl font-bold mb-2" style="color: var(--deep-tech-blue);">
                            <?php echo number_format($stat['number']); ?>
                        </div>
                        <div class="text-gray-600"><?php echo $stat['label']; ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Categories Filter -->
        <section class="py-8 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap justify-center gap-3">
                    <a href="<?php echo esc_url(home_url('/blog/')); ?>"
                       class="px-4 py-2 rounded-full transition-all <?php echo (!is_category() && !is_tag()) ? 'text-white' : 'border text-gray-600 hover:bg-gray-100'; ?>"
                       style="<?php echo (!is_category() && !is_tag()) ? 'background-color: var(--sunset-orange);' : 'border-color: var(--sunset-orange); color: var(--sunset-orange);'; ?>">
                        All Posts
                    </a>
                    <?php
                    $categories = get_categories(array(
                        'orderby' => 'count',
                        'order'   => 'DESC',
                        'number'  => 6,
                    ));
                    
                    foreach ($categories as $category) :
                        $is_current = is_category($category->term_id);
                    ?>
                        <a href="<?php echo get_category_link($category->term_id); ?>"
                           class="px-4 py-2 rounded-full transition-all <?php echo $is_current ? 'text-white' : 'border text-gray-600 hover:bg-gray-100'; ?>"
                           style="<?php echo $is_current ? 'background-color: var(--sunset-orange);' : 'border-color: var(--sunset-orange); color: var(--sunset-orange);'; ?>">
                            <?php echo esc_html($category->name); ?>
                            <span class="text-sm">(<?php echo $category->count; ?>)</span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Blog Posts Grid -->
        <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <?php if (have_posts()) : ?>
                    <!-- Posts Counter -->
                    <div class="mb-8 text-center">
                        <p class="text-gray-600">
                            <?php
                            global $wp_query;
                            $total = $wp_query->found_posts;
                            $current_page = max(1, get_query_var('paged'));
                            $posts_per_page = get_option('posts_per_page');
                            $start = (($current_page - 1) * $posts_per_page) + 1;
                            $end = min($total, $current_page * $posts_per_page);
                            
                            if (is_search()) {
                                printf('Found %d results for "%s"', $total, get_search_query());
                            } elseif (is_category()) {
                                printf('Showing %d - %d of %d posts in "%s"', $start, $end, $total, single_cat_title('', false));
                            } elseif (is_tag()) {
                                printf('Showing %d - %d of %d posts tagged "%s"', $start, $end, $total, single_tag_title('', false));
                            } else {
                                printf('Showing %d - %d of %d posts', $start, $end, $total);
                            }
                            ?>
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <?php while (have_posts()) : the_post(); ?>
                            <article class="group">
                                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="relative overflow-hidden">
                                            <a href="<?php the_permalink(); ?>" class="block">
                                                <div class="aspect-w-16 aspect-h-9">
                                                    <?php the_post_thumbnail('large', array(
                                                        'class' => 'w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300',
                                                        'alt' => get_the_title()
                                                    )); ?>
                                                </div>
                                            </a>
                                            <div class="absolute top-4 left-4">
                                                <?php
                                                $categories = get_the_category();
                                                if (!empty($categories)) {
                                                    $main_category = $categories[0];
                                                    echo '<span class="px-3 py-1 text-sm font-medium text-white rounded-full" style="background-color: var(--sunset-orange);">' . esc_html($main_category->name) . '</span>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <!-- Placeholder for posts without featured image -->
                                        <div class="h-48 flex items-center justify-center" style="background: linear-gradient(135deg, var(--deep-tech-blue) 0%, var(--neural-purple) 100%);">
                                            <svg class="w-16 h-16 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                            </svg>
                                        </div>
                                        <div class="absolute top-4 left-4">
                                            <?php
                                            $categories = get_the_category();
                                            if (!empty($categories)) {
                                                $main_category = $categories[0];
                                                echo '<span class="px-3 py-1 text-sm font-medium text-white rounded-full" style="background-color: var(--sunset-orange);">' . esc_html($main_category->name) . '</span>';
                                            }
                                            ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="p-6">
                                        <!-- Meta Info -->
                                        <div class="flex items-center text-sm text-gray-500 mb-3">
                                            <time datetime="<?php echo get_the_date('c'); ?>">
                                                <?php echo get_the_date(); ?>
                                            </time>
                                            <span class="mx-2">•</span>
                                            <span><?php echo get_reading_time(); ?> read</span>
                                            <?php if (get_comments_number() > 0) : ?>
                                                <span class="mx-2">•</span>
                                                <span><?php comments_number('0 comments', '1 comment', '% comments'); ?></span>
                                            <?php endif; ?>
                                        </div>

                                        <!-- Title -->
                                        <h2 class="text-xl font-bold mb-3 group-hover:text-blue-600 transition-colors">
                                            <a href="<?php the_permalink(); ?>" class="line-clamp-2">
                                                <?php the_title(); ?>
                                            </a>
                                        </h2>

                                        <!-- Excerpt -->
                                        <div class="text-gray-600 mb-4 line-clamp-3">
                                            <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                        </div>

                                        <!-- Tags -->
                                        <?php
                                        $tags = get_the_tags();
                                        if ($tags && count($tags) > 0) :
                                        ?>
                                            <div class="flex flex-wrap gap-2 mb-4">
                                                <?php foreach (array_slice($tags, 0, 3) as $tag) : ?>
                                                    <a href="<?php echo get_tag_link($tag->term_id); ?>"
                                                       class="px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-600 hover:bg-gray-200 transition-colors">
                                                        #<?php echo esc_html($tag->name); ?>
                                                    </a>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>

                                        <!-- Read More Button -->
                                        <div class="flex items-center justify-between">
                                            <a href="<?php the_permalink(); ?>"
                                               class="inline-flex items-center text-sm font-medium hover:underline"
                                               style="color: var(--sunset-orange);">
                                                Read More
                                                <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </a>
                                            
                                            <!-- Like/Bookmark buttons -->
                                            <div class="flex items-center gap-2">
                                                <?php
                                                $likes = get_post_meta(get_the_ID(), 'post_likes', true) ?: 0;
                                                $user_liked = false; // You can implement user session tracking here
                                                ?>
                                                <button class="post-like-btn flex items-center gap-1 text-gray-400 hover:text-red-500 transition-colors"
                                                        data-post-id="<?php echo get_the_ID(); ?>">
                                                    <svg class="w-4 h-4" fill="<?php echo $user_liked ? 'currentColor' : 'none'; ?>" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                    </svg>
                                                    <span class="like-count text-xs"><?php echo $likes; ?></span>
                                                </button>
                                                
                                                <button class="post-bookmark-btn text-gray-400 hover:text-blue-500 transition-colors"
                                                        data-post-id="<?php echo get_the_ID(); ?>">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>

                    <!-- Pagination -->
                    <div class="mt-12">
                        <?php
                        the_posts_pagination(array(
                            'prev_text' => '<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg> Previous',
                            'next_text' => 'Next <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>',
                            'before_page_number' => '<span class="screen-reader-text">Page </span>',
                            'class' => 'blog-pagination'
                        ));
                        ?>
                    </div>

                <?php else : ?>
                    <!-- No Posts Found -->
                    <div class="text-center py-16">
                        <div class="max-w-md mx-auto">
                            <svg class="w-24 h-24 mx-auto mb-6 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6-4h6m2 5.291A7.962 7.962 0 0112 15c-2.34 0-4.584.613-6.5 1.291M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h2 class="text-2xl font-bold mb-4" style="color: var(--deep-tech-blue);">No Posts Found</h2>
                            <p class="text-gray-600 mb-6">
                                <?php if (is_search()) : ?>
                                    Sorry, no posts found for "<?php echo get_search_query(); ?>". Try searching with different keywords.
                                <?php else : ?>
                                    It looks like there are no posts to display right now.
                                <?php endif; ?>
                            </p>
                            <a href="<?php echo home_url(); ?>"
                               class="inline-flex items-center px-6 py-3 rounded-lg text-white transition-all hover:shadow-lg"
                               style="background-color: var(--sunset-orange);">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                                Back to Home
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    
    <?php endif; // End have_posts() check ?>

</main><!-- #main -->

<?php
get_footer();