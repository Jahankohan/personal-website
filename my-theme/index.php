<?php
/**
 * The main template file - Blog Listing Page
 *
 * @package Personal_Website_Design
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="min-h-screen bg-gray-50">
        
        <?php if (have_posts()) : ?>
            
            <!-- Hero Section for Blog -->
            <section class="relative py-20 overflow-hidden" style="background: linear-gradient(135deg, var(--deep-tech-blue), var(--neural-purple));">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-12" style="opacity: 1; transform: none;">
                        <h1 class="text-white mb-6 text-4xl sm:text-5xl lg:text-6xl tracking-tight">Technology Insights &amp; Perspectives</h1>
                        <p class="text-white/90 text-xl max-w-3xl mx-auto mb-8">Exploring AI, blockchain, human-centered design, and the future we're building together</p>
                    </div>
                    <div class="max-w-4xl mx-auto" style="opacity: 1; transform: none;">
                        <div class="bg-white rounded-2xl shadow-2xl p-6">
                            <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
                                <div class="flex flex-col md:flex-row gap-4">
                                    <div class="flex-1 relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" aria-hidden="true">
                                            <path d="m21 21-4.34-4.34"></path>
                                            <circle cx="11" cy="11" r="8"></circle>
                                        </svg>
                                        <input type="text" name="s" value="<?php echo get_search_query(); ?>" data-slot="input" class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex w-full min-w-0 rounded-md border px-3 py-1 text-base bg-input-background transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive pl-10 h-12" placeholder="Search articles, topics, tags...">
                                    </div>
                                    <button type="button" role="combobox" aria-controls="sort-select" aria-expanded="false" aria-autocomplete="none" dir="ltr" data-state="closed" data-slot="select-trigger" data-size="default" class="border-input data-[placeholder]:text-muted-foreground [&amp;_svg:not([class*='text-'])]:text-muted-foreground focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive dark:bg-input/30 dark:hover:bg-input/50 flex items-center justify-between gap-2 rounded-md border bg-input-background px-3 py-2 text-sm whitespace-nowrap transition-[color,box-shadow] outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 data-[size=default]:h-9 data-[size=sm]:h-8 *:data-[slot=select-value]:line-clamp-1 *:data-[slot=select-value]:flex *:data-[slot=select-value]:items-center *:data-[slot=select-value]:gap-2 [&amp;_svg]:pointer-events-none [&amp;_svg]:shrink-0 [&amp;_svg:not([class*='size-'])]:size-4 w-full md:w-48 h-12">
                                        <span data-slot="select-value" style="pointer-events: none;">Newest First</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down size-4 opacity-50" aria-hidden="true">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="absolute top-0 left-0 w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 right-0 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
            </section>

            <!-- Stats Section -->
            <section class="py-12 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        <?php
                        // Get total posts count
                        $total_posts = wp_count_posts()->publish;
                        
                        // Get categories count
                        $categories_count = wp_count_terms('category');
                        
                        // Calculate posts per month (approximate based on first post date)
                        $first_post = get_posts(array('numberposts' => 1, 'order' => 'ASC'));
                        $posts_per_month = '4-6'; // Default
                        if ($first_post) {
                            $first_date = strtotime($first_post[0]->post_date);
                            $months_active = max(1, (time() - $first_date) / (30 * 24 * 60 * 60));
                            $calculated_per_month = round($total_posts / $months_active);
                            if ($calculated_per_month > 0) {
                                $posts_per_month = $calculated_per_month;
                            }
                        }
                        
                        // Estimated reads (you can replace this with actual analytics data)
                        $estimated_reads = $total_posts * 2100; // Rough estimate
                        $reads_display = $estimated_reads > 1000 ? round($estimated_reads/1000) . 'K+' : $estimated_reads;
                        ?>
                        
                        <div class="text-center p-6 bg-gray-50 rounded-xl" style="opacity: 1; transform: none;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open mx-auto mb-3" aria-hidden="true" style="color: var(--electric-cyan);">
                                <path d="M12 7v14"></path>
                                <path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path>
                            </svg>
                            <div class="text-3xl mb-1" style="color: var(--deep-tech-blue);"><?php echo $total_posts; ?></div>
                            <div class="text-sm text-gray-600">Total Articles</div>
                        </div>
                        
                        <div class="text-center p-6 bg-gray-50 rounded-xl" style="opacity: 1; transform: none;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-funnel mx-auto mb-3" aria-hidden="true" style="color: var(--electric-cyan);">
                                <path d="M10 20a1 1 0 0 0 .553.895l2 1A1 1 0 0 0 14 21v-7a2 2 0 0 1 .517-1.341L21.74 4.67A1 1 0 0 0 21 3H3a1 1 0 0 0-.742 1.67l7.225 7.989A2 2 0 0 1 10 14z"></path>
                            </svg>
                            <div class="text-3xl mb-1" style="color: var(--deep-tech-blue);"><?php echo $categories_count; ?></div>
                            <div class="text-sm text-gray-600">Categories</div>
                        </div>
                        
                        <div class="text-center p-6 bg-gray-50 rounded-xl" style="opacity: 1; transform: none;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye mx-auto mb-3" aria-hidden="true" style="color: var(--electric-cyan);">
                                <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <div class="text-3xl mb-1" style="color: var(--deep-tech-blue);"><?php echo $reads_display; ?></div>
                            <div class="text-sm text-gray-600">Total Reads</div>
                        </div>
                        
                        <div class="text-center p-6 bg-gray-50 rounded-xl" style="opacity: 1; transform: none;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up mx-auto mb-3" aria-hidden="true" style="color: var(--electric-cyan);">
                                <path d="M16 7h6v6"></path>
                                <path d="m22 7-8.5 8.5-5-5L2 17"></path>
                            </svg>
                            <div class="text-3xl mb-1" style="color: var(--deep-tech-blue);"><?php echo $posts_per_month; ?></div>
                            <div class="text-sm text-gray-600">Monthly Posts</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Posts Section -->
            <section class="py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    
                    <!-- Category Filter Buttons -->
                    <div class="flex flex-wrap items-center justify-between gap-4 mb-8">
                        <div class="flex flex-wrap gap-3">
                            <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground hover:bg-primary/90 h-9 px-4 py-2 has-[&gt;svg]:px-3 transition-all" style="background-color: var(--deep-tech-blue); border-color: var(--deep-tech-blue); color: white;">All Posts</button>
                            
                            <?php
                            $categories = get_categories();
                            $category_colors = array(
                                'Future Tech Decoder' => 'var(--electric-cyan)',
                                'Open Collaboration' => 'var(--deep-tech-blue)',
                                'Human-Centered Innovation' => 'var(--warm-ember)',
                                'Remote Dad Notes' => 'var(--sunset-orange)'
                            );
                            
                            foreach ($categories as $category) {
                                $color = isset($category_colors[$category->name]) ? $category_colors[$category->name] : 'var(--electric-cyan)';
                                echo '<button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=\'size-\'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background text-foreground hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-9 px-4 py-2 has-[&gt;svg]:px-3 transition-all" style="background-color: transparent; border-color: ' . $color . '; color: ' . $color . ';">' . $category->name . '</button>';
                            }
                            ?>
                        </div>
                        
                        <!-- View Toggle -->
                        <div class="flex gap-2">
                            <button data-slot="button" class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground hover:bg-primary/90 h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5" style="background-color: var(--deep-tech-blue); color: white;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-grid3x3 lucide-grid-3x3" aria-hidden="true">
                                    <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                                    <path d="M3 9h18"></path>
                                    <path d="M3 15h18"></path>
                                    <path d="M9 3v18"></path>
                                    <path d="M15 3v18"></path>
                                </svg>
                            </button>
                            <button data-slot="button" class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background text-foreground hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5" style="background-color: transparent; color: var(--deep-tech-blue);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list" aria-hidden="true">
                                    <path d="M3 12h.01"></path>
                                    <path d="M3 18h.01"></path>
                                    <path d="M3 6h.01"></path>
                                    <path d="M8 12h13"></path>
                                    <path d="M8 18h13"></path>
                                    <path d="M8 6h13"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Tags Filter -->
                    <div class="mb-8">
                        <h3 class="mb-4" style="color: var(--deep-tech-blue);">Filter by Tags</h3>
                        <div class="flex flex-wrap gap-2">
                            <?php
                            $tags = array('AI', 'Machine Learning', 'Future Tech', 'Open Source', 'Community', 'Collaboration', 'UX Design', 'Human-Centered', 'Ethics', 'Work-Life Balance', 'Remote Work', 'Parenting', 'Blockchain', 'Web3', 'Supply Chain', 'AI Ethics', 'Technology', 'Philosophy', 'DAO', 'Future of Work', 'Git', 'Development', 'Time Management', 'Business', 'Leadership', 'Accessibility', 'Inclusivity', 'Design', 'Innovation', 'Case Study');
                            
                            foreach ($tags as $tag) {
                                echo '<span data-slot="badge" class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive overflow-hidden text-foreground [a&amp;]:hover:bg-accent [a&amp;]:hover:text-accent-foreground cursor-pointer transition-all" style="background-color: transparent; border-color: var(--electric-cyan); color: var(--electric-cyan);">' . $tag . '</span>';
                            }
                            ?>
                        </div>
                    </div>

                    <!-- Article Count -->
                    <div class="mb-6">
                        <p class="text-gray-600">Showing <?php echo $wp_query->post_count; ?> of <?php echo $wp_query->found_posts; ?> articles</p>
                    </div>

                    <!-- Posts Grid -->
                    <div>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                            <?php while (have_posts()) : the_post(); ?>
                                <?php
                                // Get category for badge color
                                $categories = get_the_category();
                                $category_name = !empty($categories) ? $categories[0]->name : 'Uncategorized';
                                $category_color = 'var(--electric-cyan)';
                                
                                if (strpos($category_name, 'Future') !== false) $category_color = 'var(--electric-cyan)';
                                elseif (strpos($category_name, 'Collaboration') !== false) $category_color = 'var(--deep-tech-blue)';
                                elseif (strpos($category_name, 'Human') !== false) $category_color = 'var(--warm-ember)';
                                elseif (strpos($category_name, 'Remote') !== false) $category_color = 'var(--sunset-orange)';
                                ?>
                                
                                <article class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all group cursor-pointer" style="opacity: 1; transform: none;">
                                    <div class="relative h-48 overflow-hidden">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover group-hover:scale-110 transition-transform duration-300', 'alt' => get_the_title())); ?>
                                            </a>
                                        <?php else : ?>
                                            <div class="w-full h-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                                                <svg class="w-12 h-12 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                                </svg>
                                            </div>
                                        <?php endif; ?>
                                        
                                        <div class="absolute top-4 left-4">
                                            <span data-slot="badge" class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-primary [a&amp;]:hover:bg-primary/90 text-white" style="background-color: <?php echo $category_color; ?>;"><?php echo $category_name; ?></span>
                                        </div>
                                        
                                        <div class="absolute bottom-4 right-4 bg-black/60 backdrop-blur-sm px-3 py-1 rounded-full flex items-center gap-1 text-white text-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye" aria-hidden="true">
                                                <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                                <circle cx="12" cy="12" r="3"></circle>
                                            </svg>
                                            <?php echo rand(1000, 5000); ?>
                                        </div>
                                    </div>
                                    
                                    <div class="p-6">
                                        <div class="flex items-center gap-4 mb-3 text-sm text-gray-500">
                                            <div class="flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar" aria-hidden="true">
                                                    <path d="M8 2v4"></path>
                                                    <path d="M16 2v4"></path>
                                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                    <path d="M3 10h18"></path>
                                                </svg>
                                                <span><?php echo get_the_date('F j, Y'); ?></span>
                                            </div>
                                            <span>•</span>
                                            <div class="flex items-center gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock" aria-hidden="true">
                                                    <path d="M12 6v6l4 2"></path>
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                </svg>
                                                <span><?php echo rand(4, 12); ?> min read</span>
                                            </div>
                                        </div>
                                        
                                        <h3 class="mb-3 group-hover:opacity-80 transition-opacity" style="color: var(--deep-tech-blue);">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>
                                        
                                        <p class="text-gray-600 mb-4">
                                            <?php echo wp_trim_words(get_the_excerpt() ? get_the_excerpt() : get_the_content(), 20, '...'); ?>
                                        </p>
                                        
                                        <div class="flex flex-wrap gap-2 mb-4">
                                            <?php
                                            $post_tags = get_the_tags();
                                            if ($post_tags) {
                                                $displayed_tags = array_slice($post_tags, 0, 3);
                                                foreach ($displayed_tags as $tag) {
                                                    echo '<span data-slot="badge" class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium w-fit whitespace-nowrap shrink-0 [&amp;&gt;svg]:size-3 gap-1 [&amp;&gt;svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-secondary text-secondary-foreground [a&amp;]:hover:bg-secondary/90 text-xs">' . $tag->name . '</span>';
                                                }
                                            }
                                            ?>
                                        </div>
                                        
                                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-2 transition-all group-hover:gap-3" style="color: var(--sunset-orange);">
                                            Read More
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        </div>
                    </div>

                    <!-- Load More Button -->
                    <?php if ($wp_query->max_num_pages > 1) : ?>
                        <div class="text-center mt-12" style="opacity: 1;">
                            <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground hover:bg-primary/90 h-10 rounded-md px-6 has-[&gt;svg]:px-4" style="background-color: var(--sunset-orange); color: white;">Load More Articles</button>
                        </div>
                    <?php endif; ?>
                </div>
            </section>

            <!-- Newsletter CTA Section -->
            <section class="py-16 bg-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="p-12 rounded-2xl text-center" style="background: linear-gradient(135deg, var(--deep-tech-blue), var(--neural-purple));">
                        <h3 class="text-white mb-4 text-3xl tracking-tight">Never Miss an Insight</h3>
                        <p class="text-white/90 mb-8 max-w-2xl mx-auto">Get the latest articles on AI, blockchain, and emerging technologies delivered directly to your inbox.</p>
                        <form method="post" action="#" class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                            <input type="email" name="email" data-slot="input" class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex w-full min-w-0 rounded-md border px-3 py-1 text-base transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive flex-1 h-12 bg-white/90" placeholder="Enter your email">
                            <button type="submit" data-slot="button" class="inline-flex items-center justify-center gap-2 text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground hover:bg-primary/90 rounded-md px-6 has-[&gt;svg]:px-4 whitespace-nowrap h-12" style="background-color: var(--sunset-orange); color: white;">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </section>

        <?php else : ?>
            
            <!-- No Posts Found -->
            <section class="py-20 text-center">
                <div class="max-w-2xl mx-auto px-4">
                    <h2 class="text-3xl font-bold mb-4" style="color: var(--deep-tech-blue);">No Posts Yet</h2>
                    <p class="text-xl text-gray-600 mb-8">We are working on some great content. Check back soon!</p>
                    <a href="<?php echo esc_url(home_url('/')); ?>" 
                       class="inline-block px-6 py-3 text-white rounded-lg transition-all hover:shadow-lg"
                       style="background-color: var(--deep-tech-blue);">
                        Back to Home
                    </a>
                </div>
            </section>
            
        <?php endif; ?>
        
    </div>
</main>

<?php get_footer(); ?>
