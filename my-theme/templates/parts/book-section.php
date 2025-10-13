<?php
/**
 * Template part for the Book section
 *
 * @package Personal_Website_Design
 */
?>

<section id="book" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="mb-4 text-4xl sm:text-5xl tracking-tight" style="color: var(--deep-tech-blue);">
                Upcoming Book
            </h2>
            <div class="w-24 h-1 mx-auto mb-6" style="background-color: var(--warm-ember);"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="relative">
                <div class="absolute -inset-4 rounded-3xl opacity-20 blur-2xl" style="background-color: var(--neural-purple);"></div>
                <img src="https://images.unsplash.com/photo-1506880018603-83d5b814b5a6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxib29rJTIwcmVhZGluZ3xlbnwxfHx8fDE3NTkzMDYzNDF8MA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral"
                     alt="Book cover"
                     class="relative w-full h-auto rounded-2xl shadow-2xl">
            </div>

            <div>
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full mb-4"
                     style="background-color: var(--electric-cyan); color: white;">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    <span class="text-sm">Coming 2026</span>
                </div>

                <h3 class="mb-4 text-3xl sm:text-4xl tracking-tight" style="color: var(--deep-tech-blue);">
                    <?php echo esc_html(get_theme_mod('book_title', 'The Human Algorithm: Finding Meaning in the Age of AI')); ?>
                </h3>

                <p class="text-gray-700 mb-6 text-lg">
                    <?php 
                    $book_description = get_theme_mod('book_description', 'A practical guide to maintaining your humanity while embracing the transformative power of artificial intelligence and emerging technologies. This book explores how we can shape technology that amplifies our best qualities rather than replacing them.');
                    echo esc_html($book_description);
                    ?>
                </p>

                <div class="mb-8">
                    <h4 class="mb-4" style="color: var(--warm-ember);">
                        Pre-registration Benefits:
                    </h4>
                    <ul class="space-y-3">
                        <?php
                        $benefits = array(
                            'Early access to exclusive chapters',
                            'Behind-the-scenes insights from the writing process',
                            'Special pre-order pricing',
                            'Invitation to virtual book launch event'
                        );
                        
                        foreach ($benefits as $benefit) :
                        ?>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 flex-shrink-0 mt-1" style="color: var(--warm-ember);" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="text-gray-700"><?php echo esc_html($benefit); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <form id="book-preregister-form" class="space-y-4">
                    <div class="flex flex-col sm:flex-row gap-3">
                        <input type="email"
                               name="email"
                               placeholder="Enter your email"
                               required
                               class="flex-1 px-4 py-3 rounded-lg border transition-all"
                               style="border-color: var(--deep-tech-blue);"
                               onfocus="this.style.borderColor='var(--sunset-orange)'"
                               onblur="this.style.borderColor='var(--deep-tech-blue)'">
                        <button type="submit"
                                class="whitespace-nowrap px-6 py-3 rounded-lg text-white transition-all"
                                style="background-color: var(--sunset-orange);">
                            Pre-Register Now
                        </button>
                    </div>
                </form>

                <div class="mt-6 flex flex-col sm:flex-row gap-4">
                    <a href="<?php echo esc_url(home_url('/book/')); ?>"
                       class="inline-flex items-center gap-2 transition-opacity hover:opacity-80"
                       style="color: var(--sunset-orange);">
                        Learn More About the Book
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    <a href="<?php echo esc_url(home_url('/book/#sample')); ?>"
                       class="inline-flex items-center gap-2 text-sm transition-opacity hover:opacity-80"
                       style="color: var(--deep-tech-blue);">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2z"></path>
                        </svg>
                        Download Sample Chapter
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>