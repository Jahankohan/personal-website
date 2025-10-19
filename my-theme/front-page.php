<?php
/**
 * The front page template file
 *
 * This template displays the homepage with Hero, About, Blog, Book,
 * Consultancy, and Contact sections.
 *
 * @package Personal_Website_Design
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Hero Section -->
    <section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background gradient -->
        <div class="absolute inset-0 w-full h-full" 
             style="background: linear-gradient(135deg, var(--deep-tech-blue) 0%, var(--neural-purple) 50%, var(--deep-tech-blue) 100%);">
        </div>
        <canvas class="absolute inset-0 w-full h-full" width="804" height="909"></canvas>
        <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="flex justify-center mb-6" style="opacity: 1; transform: none;">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full backdrop-blur-sm" style="background-color: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.2);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles text-white" aria-hidden="true">
                        <path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path>
                        <path d="M20 2v4"></path>
                        <path d="M22 4h-4"></path>
                        <circle cx="4" cy="20" r="2"></circle>
                    </svg>
                    <span class="text-sm text-white">Bridging Technology &amp; Humanity</span>
                </div>
            </div>
            <h1 class="text-white mb-6 text-4xl sm:text-5xl md:text-6xl lg:text-7xl tracking-tight" style="opacity: 1; transform: none;">Navigating the Future of<br>AI &amp; Emerging Tech</h1>
            <p class="text-xl sm:text-2xl mb-10 max-w-3xl mx-auto" style="color: var(--warm-ember); opacity: 1; transform: none;">Expert insights on blockchain, artificial intelligence, and the technologies shaping tomorrow — with a human touch.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center" style="opacity: 1; transform: none;">
                <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground hover:bg-primary/90 h-10 rounded-md group transition-all text-lg px-8 py-6" style="background-color: var(--sunset-orange); color: white;">
                    Explore Resources
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 group-hover:translate-x-1 transition-transform" aria-hidden="true">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </button>
                <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background text-foreground hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-10 rounded-md text-lg px-8 py-6" style="border-color: white; color: white; background-color: rgba(255, 255, 255, 0.1);">Get in Touch</button>
            </div>
            <div class="mt-16" style="opacity: 1;">
                <button class="animate-bounce" style="color: white;">
                    <svg class="w-6 h-6 mx-auto" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="mb-4 text-4xl sm:text-5xl tracking-tight" style="color: var(--deep-tech-blue);">
                    About Me
                </h2>
                <div class="w-24 h-1 mx-auto mb-6" style="background-color: var(--warm-ember);"></div>
                <p class="text-xl max-w-3xl mx-auto text-gray-700">
                    I'm a technology strategist, blockchain enthusiast, and AI advocate
                    dedicated to building bridges between cutting-edge innovation and
                    human values.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('hero-image', array('class' => 'w-full h-auto rounded-2xl shadow-2xl')); ?>
                    <?php else : ?>
                        <img src="https://images.unsplash.com/flagged/photo-1573582677725-863b570e3c00?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwcm9mZXNzaW9uYWwlMjBwb3J0cmFpdCUyMHdhcm18ZW58MXx8fHwxNzU5MzI1NTQ5fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
                             alt="Professional portrait"
                             class="w-full h-auto rounded-2xl shadow-2xl">
                    <?php endif; ?>
                </div>

                <div>
                    <h3 class="mb-4 text-3xl tracking-tight" style="color: var(--deep-tech-blue);">
                        My Journey
                    </h3>
                    <div class="space-y-4 text-gray-700">
                        <?php
                        $about_content = get_theme_mod('about_content', '
                        <p>For over a decade, I\'ve been exploring the intersection of technology and human experience. What started as fascination with code evolved into a mission: making emerging technologies accessible, ethical, and beneficial for everyone.</p>
                        <p>From consulting Fortune 500 companies on AI strategy to helping startups navigate blockchain implementation, I\'ve seen firsthand how technology can either amplify or diminish our humanity. My work is guided by a simple principle: innovation without empathy is just noise.</p>
                        <p>When I\'m not decoding the latest tech trends, you\'ll find me sharing insights through writing, speaking at conferences, or spending quality time with my family — because the best technology is the kind that brings us closer together.</p>
                        ');
                        echo wp_kses_post($about_content);
                        ?>
                    </div>
                    <div class="mt-6">
                        <a href="<?php echo esc_url(home_url('/about/')); ?>"
                           class="inline-flex items-center px-6 py-3 rounded-lg text-white transition-all"
                           style="background-color: var(--sunset-orange);">
                            Learn More About Me
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Experience Cards -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php
                $experiences = array(
                    array(
                        'icon' => '<svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>',
                        'title' => 'AI & Innovation',
                        'description' => 'Deep expertise in artificial intelligence, machine learning, and their practical applications in solving real-world challenges.'
                    ),
                    array(
                        'icon' => '<svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9-9a9 9 0 00-9 9m9-9v18"></path></svg>',
                        'title' => 'Blockchain Pioneer',
                        'description' => 'Early adopter and advocate of blockchain technology, exploring decentralized systems and their potential to transform industries.'
                    ),
                    array(
                        'icon' => '<svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path></svg>',
                        'title' => 'Human-Centered Approach',
                        'description' => 'Committed to ensuring technology serves humanity, not the other way around. Every innovation should enhance human connection.'
                    ),
                    array(
                        'icon' => '<svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>',
                        'title' => 'Thought Leadership',
                        'description' => 'Regular speaker, writer, and consultant helping organizations navigate the complex landscape of emerging technologies.'
                    )
                );

                foreach ($experiences as $exp) :
                ?>
                <div class="p-6 rounded-xl bg-white shadow-lg hover:shadow-xl transition-shadow border"
                     style="border-color: var(--warm-ember);">
                    <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4"
                         style="background-color: var(--warm-ember);">
                        <?php echo $exp['icon']; ?>
                    </div>
                    <h4 class="mb-2" style="color: var(--deep-tech-blue);">
                        <?php echo esc_html($exp['title']); ?>
                    </h4>
                    <p class="text-gray-600">
                        <?php echo esc_html($exp['description']); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12" style="opacity: 1; transform: none;">
                <h2 class="mb-4 text-4xl sm:text-5xl tracking-tight" style="color: var(--deep-tech-blue);">Latest Insights</h2>
                <div class="w-24 h-1 mx-auto mb-6" style="background-color: var(--warm-ember);"></div>
                <p class="text-xl max-w-3xl mx-auto text-gray-700">Exploring the intersection of technology, humanity, and the future we're building together.</p>
            </div>
            
            <div class="flex flex-wrap justify-center gap-3 mb-12" style="opacity: 1; transform: none;">
                <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground hover:bg-primary/90 h-9 px-4 py-2 transition-all" style="background-color: var(--deep-tech-blue); border-color: var(--deep-tech-blue); color: white;">All Posts</button>
                <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background text-foreground hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-9 px-4 py-2 transition-all" style="background-color: transparent; border-color: var(--electric-cyan); color: var(--electric-cyan);">Future Tech Decoder</button>
                <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background text-foreground hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-9 px-4 py-2 transition-all" style="background-color: transparent; border-color: var(--deep-tech-blue); color: var(--deep-tech-blue);">Open Collaboration</button>
                <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background text-foreground hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-9 px-4 py-2 transition-all" style="background-color: transparent; border-color: var(--warm-ember); color: var(--warm-ember);">Human-Centered Innovation</button>
                <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background text-foreground hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-9 px-4 py-2 transition-all" style="background-color: transparent; border-color: var(--sunset-orange); color: var(--sunset-orange);">Remote Dad Notes</button>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <article class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all group cursor-pointer" style="opacity: 1; transform: none;">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1660165458059-57cfb6cc87e5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxBSSUyMHRlY2hub2xvZ3klMjBhYnN0cmFjdHxlbnwxfHx8fDE3NTk0MDExODl8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral" alt="The Future of AI: Beyond the Hype" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute top-4 left-4">
                            <span data-slot="badge" class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 gap-1 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-primary text-white" style="background-color: var(--electric-cyan);">Future Tech Decoder</span>
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
                                <span>September 15, 2025</span>
                            </div>
                            <span>•</span>
                            <span>8 min read</span>
                        </div>
                        <h3 class="mb-3 group-hover:opacity-80 transition-opacity" style="color: var(--deep-tech-blue);">The Future of AI: Beyond the Hype</h3>
                        <p class="text-gray-600 mb-4">Exploring practical applications of artificial intelligence that are reshaping industries today, and what we can expect tomorrow.</p>
                        <button class="inline-flex items-center gap-2 transition-all group-hover:gap-3" style="color: var(--sunset-orange);">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </article>
                
                <article class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all group cursor-pointer" style="opacity: 1; transform: none;">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1516880711640-ef7db81be3e1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxjb2xsYWJvcmF0aW9uJTIwdGVhbXxlbnwxfHx8fDE3NTk0MDExOTB8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral" alt="Building in Public: The Power of Open Collaboration" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute top-4 left-4">
                            <span data-slot="badge" class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 gap-1 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-primary text-white" style="background-color: var(--deep-tech-blue);">Open Collaboration</span>
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
                                <span>September 8, 2025</span>
                            </div>
                            <span>•</span>
                            <span>6 min read</span>
                        </div>
                        <h3 class="mb-3 group-hover:opacity-80 transition-opacity" style="color: var(--deep-tech-blue);">Building in Public: The Power of Open Collaboration</h3>
                        <p class="text-gray-600 mb-4">Why transparency and community-driven development are the future of innovation in the tech industry.</p>
                        <button class="inline-flex items-center gap-2 transition-all group-hover:gap-3" style="color: var(--sunset-orange);">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </article>
                
                <article class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all group cursor-pointer" style="opacity: 1; transform: none;">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1660165458059-57cfb6cc87e5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx0ZWNobm9sb2d5JTIwZnV0dXJlJTIwYWJzdHJhY3R8ZW58MXx8fHwxNzU5MzI1NTQ5fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral" alt="Human-Centered Design in the Age of Automation" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute top-4 left-4">
                            <span data-slot="badge" class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 gap-1 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-primary text-white" style="background-color: var(--warm-ember);">Human-Centered Innovation</span>
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
                                <span>September 1, 2025</span>
                            </div>
                            <span>•</span>
                            <span>10 min read</span>
                        </div>
                        <h3 class="mb-3 group-hover:opacity-80 transition-opacity" style="color: var(--deep-tech-blue);">Human-Centered Design in the Age of Automation</h3>
                        <p class="text-gray-600 mb-4">How to ensure that technology amplifies human capabilities rather than replacing human connection.</p>
                        <button class="inline-flex items-center gap-2 transition-all group-hover:gap-3" style="color: var(--sunset-orange);">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </article>
                
                <article class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all group cursor-pointer" style="opacity: 1; transform: none;">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1640622304233-7335e936f11b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxmYW1pbHklMjB0ZWNobm9sb2d5fGVufDF8fHx8MTc1OTQwMTE5MXww&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral" alt="Remote Parenting & Tech Leadership" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute top-4 left-4">
                            <span data-slot="badge" class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 gap-1 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-primary text-white" style="background-color: var(--sunset-orange);">Remote Dad Notes</span>
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
                                <span>August 25, 2025</span>
                            </div>
                            <span>•</span>
                            <span>5 min read</span>
                        </div>
                        <h3 class="mb-3 group-hover:opacity-80 transition-opacity" style="color: var(--deep-tech-blue);">Remote Parenting & Tech Leadership</h3>
                        <p class="text-gray-600 mb-4">Balancing the demands of raising a family while navigating the fast-paced world of emerging technologies.</p>
                        <button class="inline-flex items-center gap-2 transition-all group-hover:gap-3" style="color: var(--sunset-orange);">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </article>
                
                <article class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all group cursor-pointer" style="opacity: 1; transform: none;">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1639322537504-6427a16b0a28?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxibG9ja2NoYWluJTIwbmV0d29ya3xlbnwxfHx8fDE3NTkzMjk1NzB8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral" alt="Blockchain Beyond Crypto: Real-World Use Cases" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute top-4 left-4">
                            <span data-slot="badge" class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 gap-1 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-primary text-white" style="background-color: var(--electric-cyan);">Future Tech Decoder</span>
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
                                <span>August 18, 2025</span>
                            </div>
                            <span>•</span>
                            <span>7 min read</span>
                        </div>
                        <h3 class="mb-3 group-hover:opacity-80 transition-opacity" style="color: var(--deep-tech-blue);">Blockchain Beyond Crypto: Real-World Use Cases</h3>
                        <p class="text-gray-600 mb-4">Discovering how distributed ledger technology is solving problems in supply chain, healthcare, and beyond.</p>
                        <button class="inline-flex items-center gap-2 transition-all group-hover:gap-3" style="color: var(--sunset-orange);">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </article>
                
                <article class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all group cursor-pointer" style="opacity: 1; transform: none;">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1660165458059-57cfb6cc87e5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHx8fDE3NTkzMjU1NDl8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral" alt="The Ethics of AI: A Human Perspective" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <div class="absolute top-4 left-4">
                            <span data-slot="badge" class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 gap-1 focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden border-transparent bg-primary text-white" style="background-color: var(--warm-ember);">Human-Centered Innovation</span>
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
                                <span>August 11, 2025</span>
                            </div>
                            <span>•</span>
                            <span>9 min read</span>
                        </div>
                        <h3 class="mb-3 group-hover:opacity-80 transition-opacity" style="color: var(--deep-tech-blue);">The Ethics of AI: A Human Perspective</h3>
                        <p class="text-gray-600 mb-4">Examining the moral implications of artificial intelligence and our responsibility as creators and users.</p>
                        <button class="inline-flex items-center gap-2 transition-all group-hover:gap-3" style="color: var(--sunset-orange);">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </article>
            </div>
            
            <div class="text-center mb-16" style="opacity: 1; transform: none;">
                <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary hover:bg-primary/90 h-10 rounded-md px-6 text-white" style="background-color: var(--sunset-orange);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open mr-2" aria-hidden="true">
                        <path d="M12 7v14"></path>
                        <path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path>
                    </svg>
                    View All 12 Articles
                </button>
            </div>
            
            <div class="p-8 rounded-2xl text-center" style="background: linear-gradient(135deg, var(--deep-tech-blue), var(--neural-purple)); opacity: 1; transform: none;">
                <h3 class="text-white mb-4 text-3xl tracking-tight">Stay Updated</h3>
                <p class="text-white/90 mb-6 max-w-2xl mx-auto">Get the latest insights on AI, blockchain, and emerging technologies delivered to your inbox.</p>
                <div class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                    <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-3 rounded-lg outline-none" style="background-color: rgba(255, 255, 255, 0.9);">
                    <button data-slot="button" class="inline-flex items-center justify-center gap-2 text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground hover:bg-primary/90 h-10 rounded-md px-6 whitespace-nowrap" style="background-color: var(--sunset-orange); color: white;">Subscribe</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Book Section -->
    <?php get_template_part('templates/parts/book-section'); ?>

    <!-- Contact Section -->
    <?php get_template_part('templates/parts/contact-section'); ?>

    <!-- Floating Subscribe Card -->
    <div id="subscribe-card" class="fixed bottom-6 left-6 z-40 max-w-sm" style="opacity: 1; transform: none;">
        <div class="p-6 rounded-xl shadow-2xl relative" style="background: linear-gradient(135deg, var(--deep-tech-blue), var(--neural-purple));">
            <button id="close-card" class="absolute top-3 right-3 text-white/80 hover:text-white transition-colors" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x" aria-hidden="true">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
            </button>
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail text-white mb-3" aria-hidden="true">
                <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                <rect x="2" y="4" width="20" height="16" rx="2"></rect>
            </svg>
            <h4 class="text-white mb-2">Join My Newsletter</h4>
            <p class="text-white/90 text-sm mb-4">Get exclusive insights on AI, blockchain, and emerging tech. Choose what you want to receive.</p>
            <button id="subscribe-btn" data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground hover:bg-primary/90 h-9 px-4 py-2 has-[>svg]:px-3 w-full" style="background-color: var(--sunset-orange); color: white;">
                Subscribe Now
            </button>
        </div>
    </div>

    <!-- Subscription Modal -->
    <div id="subscription-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center p-4">
        <div role="dialog" aria-labelledby="subscription-title" aria-describedby="subscription-description" 
             class="bg-background data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0 data-[state=closed]:zoom-out-95 data-[state=open]:zoom-in-95 fixed top-[50%] left-[50%] z-50 grid w-full max-w-[calc(100%-2rem)] translate-x-[-50%] translate-y-[-50%] gap-4 rounded-lg border p-6 shadow-lg duration-200 sm:max-w-2xl max-h-[90vh] overflow-y-auto bg-white" 
             tabindex="-1" style="pointer-events: auto;">
            
            <div class="flex flex-col gap-2 text-center sm:text-left">
                <h2 id="subscription-title" class="font-semibold text-2xl tracking-tight" style="color: var(--deep-tech-blue);">
                    Subscribe to My Newsletter
                </h2>
                <p id="subscription-description" class="text-muted-foreground text-sm text-gray-600">
                    Stay updated with the latest insights on AI, blockchain, and human-centered technology. Choose the topics that interest you most.
                </p>
            </div>

            <form id="subscription-form" class="space-y-6">
                <div>
                    <label class="items-center gap-2 text-sm leading-none font-medium select-none mb-4 block" style="color: var(--deep-tech-blue);">
                        What would you like to receive?
                    </label>
                    <div class="space-y-3">
                        <!-- All Content Option -->
                        <div class="flex items-start space-x-3 p-4 rounded-lg border transition-all cursor-pointer hover:shadow-md subscription-option" 
                             style="border-color: var(--deep-tech-blue); background-color: var(--deep-tech-blue)08;" data-selected="true">
                            <input type="checkbox" id="all" name="subscription[]" value="all" checked class="w-4 h-4 mt-1 rounded">
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail" style="color: var(--deep-tech-blue);">
                                        <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                    </svg>
                                    <label for="all" class="cursor-pointer font-medium" style="color: var(--deep-tech-blue);">All Content</label>
                                </div>
                                <p class="text-sm text-gray-600">Get everything - blog posts, book updates, resources, and insights</p>
                            </div>
                        </div>

                        <!-- Blog Posts Option -->
                        <div class="flex items-start space-x-3 p-4 rounded-lg border transition-all cursor-pointer hover:shadow-md subscription-option" 
                             style="border-color: var(--border); background-color: transparent;">
                            <input type="checkbox" id="blog" name="subscription[]" value="blog" class="w-4 h-4 mt-1 rounded">
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-newspaper" style="color: var(--neural-purple);">
                                        <path d="M15 18h-5"></path>
                                        <path d="M18 14h-8"></path>
                                        <path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-4 0v-9a2 2 0 0 1 2-2h2"></path>
                                        <rect width="8" height="4" x="10" y="6" rx="1"></rect>
                                    </svg>
                                    <label for="blog" class="cursor-pointer font-medium" style="color: var(--deep-tech-blue);">Blog Posts</label>
                                </div>
                                <p class="text-sm text-gray-600">Weekly articles on AI, blockchain, and emerging technologies</p>
                            </div>
                        </div>

                        <!-- Book Updates Option -->
                        <div class="flex items-start space-x-3 p-4 rounded-lg border transition-all cursor-pointer hover:shadow-md subscription-option" 
                             style="border-color: var(--border); background-color: transparent;">
                            <input type="checkbox" id="book" name="subscription[]" value="book" class="w-4 h-4 mt-1 rounded">
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-open" style="color: var(--sunset-orange);">
                                        <path d="M12 7v14"></path>
                                        <path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path>
                                    </svg>
                                    <label for="book" class="cursor-pointer font-medium" style="color: var(--deep-tech-blue);">Book Updates</label>
                                </div>
                                <p class="text-sm text-gray-600">Exclusive chapters, launch updates, and pre-order opportunities</p>
                            </div>
                        </div>

                        <!-- Free Resources Option -->
                        <div class="flex items-start space-x-3 p-4 rounded-lg border transition-all cursor-pointer hover:shadow-md subscription-option" 
                             style="border-color: var(--border); background-color: transparent;">
                            <input type="checkbox" id="resources" name="subscription[]" value="resources" class="w-4 h-4 mt-1 rounded">
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text" style="color: var(--electric-cyan);">
                                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                        <path d="M10 9H8"></path>
                                        <path d="M16 13H8"></path>
                                        <path d="M16 17H8"></path>
                                    </svg>
                                    <label for="resources" class="cursor-pointer font-medium" style="color: var(--deep-tech-blue);">Free Resources</label>
                                </div>
                                <p class="text-sm text-gray-600">Templates, guides, and tools for tech leaders</p>
                            </div>
                        </div>

                        <!-- Industry Insights Option -->
                        <div class="flex items-start space-x-3 p-4 rounded-lg border transition-all cursor-pointer hover:shadow-md subscription-option" 
                             style="border-color: var(--border); background-color: transparent;">
                            <input type="checkbox" id="insights" name="subscription[]" value="insights" class="w-4 h-4 mt-1 rounded">
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lightbulb" style="color: var(--warm-ember);">
                                        <path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"></path>
                                        <path d="M9 18h6"></path>
                                        <path d="M10 22h4"></path>
                                    </svg>
                                    <label for="insights" class="cursor-pointer font-medium" style="color: var(--deep-tech-blue);">Industry Insights</label>
                                </div>
                                <p class="text-sm text-gray-600">Curated trends, analysis, and thought leadership pieces</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-2">
                    <label for="newsletter-email" class="flex items-center gap-2 text-sm leading-none font-medium" style="color: var(--deep-tech-blue);">
                        Email Address *
                    </label>
                    <input type="email" 
                           id="newsletter-email" 
                           name="email"
                           required 
                           placeholder="your@email.com" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:border-transparent transition-all"
                           style="border-color: var(--deep-tech-blue); focus:ring-color: var(--deep-tech-blue);">
                </div>

                <button type="submit" 
                        class="w-full px-6 py-3 rounded-md font-medium transition-all hover:shadow-lg"
                        style="background-color: var(--sunset-orange); color: white;">
                    Subscribe Now
                </button>

                <p class="text-xs text-gray-500 text-center">
                    You can update your preferences or unsubscribe anytime. I respect your inbox and only send valuable content.
                </p>
            </form>

            <button type="button" id="close-modal" class="absolute top-4 right-4 rounded-full p-2 opacity-70 transition-opacity hover:opacity-100 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
                <span class="sr-only">Close</span>
            </button>
        </div>
    </div>

</main><!-- #main -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    const subscribeBtn = document.getElementById('subscribe-btn');
    const subscribeCard = document.getElementById('subscribe-card');
    const closeCardBtn = document.getElementById('close-card');
    const modal = document.getElementById('subscription-modal');
    const closeBtn = document.getElementById('close-modal');
    const form = document.getElementById('subscription-form');
    const subscriptionOptions = document.querySelectorAll('.subscription-option');

    // Close floating card function
    function closeCard() {
        subscribeCard.style.opacity = '0';
        subscribeCard.style.transform = 'translateY(20px)';
        setTimeout(() => {
            subscribeCard.style.display = 'none';
        }, 300);
    }

    // Close card when close button is clicked
    closeCardBtn.addEventListener('click', closeCard);

    // Open modal when subscribe button is clicked
    subscribeBtn.addEventListener('click', function() {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden'; // Prevent background scrolling
        
        // Optionally close the card when modal opens
        closeCard();
    });

    // Close modal function
    function closeModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = ''; // Restore scrolling
    }

    // Close modal when close button is clicked
    closeBtn.addEventListener('click', closeModal);

    // Close modal when clicking outside the modal content
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });

    // Close modal on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
            closeModal();
        }
    });

    // Handle subscription option visual feedback
    subscriptionOptions.forEach(option => {
        const checkbox = option.querySelector('input[type="checkbox"]');
        
        option.addEventListener('click', function(e) {
            // Don't trigger if clicking directly on checkbox
            if (e.target.type !== 'checkbox') {
                checkbox.checked = !checkbox.checked;
            }
            
            // Update visual state
            if (checkbox.checked) {
                option.style.borderColor = 'var(--deep-tech-blue)';
                option.style.backgroundColor = 'var(--deep-tech-blue)08';
            } else {
                option.style.borderColor = 'var(--border)';
                option.style.backgroundColor = 'transparent';
            }
        });

        // Handle direct checkbox clicks
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                option.style.borderColor = 'var(--deep-tech-blue)';
                option.style.backgroundColor = 'var(--deep-tech-blue)08';
            } else {
                option.style.borderColor = 'var(--border)';
                option.style.backgroundColor = 'transparent';
            }
        });
    });

    // Handle form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const email = document.getElementById('newsletter-email').value;
        const selectedOptions = Array.from(document.querySelectorAll('input[name="subscription[]"]:checked'))
                                     .map(cb => cb.value);
        
        if (!email) {
            alert('Please enter your email address.');
            return;
        }
        
        if (selectedOptions.length === 0) {
            alert('Please select at least one subscription option.');
            return;
        }

        // Here you would typically send the data to your server
        console.log('Subscription data:', {
            email: email,
            subscriptions: selectedOptions
        });
        
        // Show success message
        alert('Thank you for subscribing! You will receive a confirmation email shortly.');
        
        // Close modal and reset form
        closeModal();
        form.reset();
        
        // Reset visual states
        subscriptionOptions.forEach(option => {
            const checkbox = option.querySelector('input[type="checkbox"]');
            if (checkbox.id === 'all') {
                checkbox.checked = true;
                option.style.borderColor = 'var(--deep-tech-blue)';
                option.style.backgroundColor = 'var(--deep-tech-blue)08';
            } else {
                checkbox.checked = false;
                option.style.borderColor = 'var(--border)';
                option.style.backgroundColor = 'transparent';
            }
        });
    });

    // Handle "All Content" special behavior
    const allCheckbox = document.getElementById('all');
    const otherCheckboxes = document.querySelectorAll('input[name="subscription[]"]:not(#all)');
    
    allCheckbox.addEventListener('change', function() {
        if (this.checked) {
            // Uncheck other options when "All Content" is selected
            otherCheckboxes.forEach(cb => {
                cb.checked = false;
                const option = cb.closest('.subscription-option');
                option.style.borderColor = 'var(--border)';
                option.style.backgroundColor = 'transparent';
            });
        }
    });

    // Uncheck "All Content" when other options are selected
    otherCheckboxes.forEach(cb => {
        cb.addEventListener('change', function() {
            if (this.checked && allCheckbox.checked) {
                allCheckbox.checked = false;
                const allOption = allCheckbox.closest('.subscription-option');
                allOption.style.borderColor = 'var(--border)';
                allOption.style.backgroundColor = 'transparent';
            }
        });
    });
});
</script>

<?php
get_footer();