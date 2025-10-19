<?php
/**
 * Template for the Consultation page
 *
 * @package Personal_Website_Design
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- Hero Section -->
    <section class="relative py-24 overflow-hidden" style="background: linear-gradient(135deg, var(--deep-tech-blue), var(--neural-purple));">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="animate-slide-up">
                    <div class="inline-block px-4 py-2 rounded-full mb-6" style="background-color: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.2);">
                        <p class="text-white text-sm">Strategic Consulting Services</p>
                    </div>
                    
                    <h1 class="text-white mb-6 text-4xl sm:text-5xl lg:text-6xl tracking-tight max-w-4xl mx-auto">
                        Let's Transform Your Vision Into Reality
                    </h1>
                    
                    <p class="text-white/90 text-xl mb-8 max-w-3xl mx-auto">
                        Expert guidance on AI, blockchain, and emerging technologies—delivered with a human-centered approach that ensures sustainable transformation.
                    </p>
                    
                    <div class="flex flex-wrap justify-center gap-6 text-white/90 text-sm mb-8">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock" aria-hidden="true">
                                <path d="M12 6v6l4 2"></path>
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                            <span>Flexible Scheduling</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square" aria-hidden="true">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                            </svg>
                            <span>Personalized Sessions</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big" aria-hidden="true">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                            <span>Actionable Insights</span>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap gap-4 justify-center">
                        <a href="#consultation" 
                           class="inline-flex items-center px-6 py-3 text-lg font-medium text-white rounded-lg transition-all hover:shadow-lg scroll-smooth" 
                           style="background-color: var(--sunset-orange);">
                            <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Book Your Session
                        </a>
                        <a href="<?php echo esc_url(home_url('/about')); ?>" 
                           class="inline-flex items-center px-6 py-3 text-lg font-medium text-white border border-white/30 rounded-lg hover:bg-white/10 transition-all">
                            <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Learn More About Me
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Consulting Services Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" style="opacity: 1; transform: none;">
                <h2 class="mb-4 text-3xl sm:text-4xl tracking-tight" style="color: var(--deep-tech-blue);">Consulting Services</h2>
                <div class="w-24 h-1 mx-auto mb-6" style="background-color: var(--warm-ember);"></div>
                <p class="text-xl max-w-3xl mx-auto text-gray-700">Choose the format that best suits your needs—from focused strategy sessions to comprehensive advisory partnerships.</p>
            </div>
            
            <div class="grid lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all border" style="border-color: rgba(0, 0, 0, 0.05); opacity: 1; transform: none;">
                    <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-6" style="background-color: var(--deep-tech-blue);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square text-white" aria-hidden="true">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-3 text-2xl" style="color: var(--deep-tech-blue);">Strategy Sessions</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">1-on-1 consultation on AI and blockchain implementation strategies</p>
                    <div class="inline-block px-4 py-2 rounded-full" style="background-color: var(--deep-tech-blue)15; color: var(--deep-tech-blue);">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock" aria-hidden="true">
                                <path d="M12 6v6l4 2"></path>
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                            <span class="text-sm">60 minutes</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all border" style="border-color: rgba(0, 0, 0, 0.05); opacity: 1; transform: none;">
                    <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-6" style="background-color: var(--neural-purple);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users text-white" aria-hidden="true">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <path d="M16 3.128a4 4 0 0 1 0 7.744"></path>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <h3 class="mb-3 text-2xl" style="color: var(--deep-tech-blue);">Workshop Facilitation</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">Team workshops on emerging tech adoption and digital transformation</p>
                    <div class="inline-block px-4 py-2 rounded-full" style="background-color: var(--neural-purple)15; color: var(--neural-purple);">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock" aria-hidden="true">
                                <path d="M12 6v6l4 2"></path>
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                            <span class="text-sm">Half/Full day</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all border" style="border-color: rgba(0, 0, 0, 0.05); opacity: 1; transform: none;">
                    <div class="w-14 h-14 rounded-xl flex items-center justify-center mb-6" style="background-color: var(--warm-ember);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rocket text-white" aria-hidden="true">
                            <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path>
                            <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path>
                            <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                            <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
                        </svg>
                    </div>
                    <h3 class="mb-3 text-2xl" style="color: var(--deep-tech-blue);">Advisory Retainer</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">Ongoing strategic guidance for your organization's tech journey</p>
                    <div class="inline-block px-4 py-2 rounded-full" style="background-color: var(--warm-ember)15; color: var(--warm-ember);">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock" aria-hidden="true">
                                <path d="M12 6v6l4 2"></path>
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                            <span class="text-sm">Monthly</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Work With Me Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" style="opacity: 1; transform: none;">
                <h2 class="mb-4 text-3xl sm:text-4xl tracking-tight" style="color: var(--deep-tech-blue);">Why Work With Me?</h2>
                <div class="w-24 h-1 mx-auto" style="background-color: var(--warm-ember);"></div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center" style="opacity: 1; transform: none;">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: var(--sunset-orange);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target text-white" aria-hidden="true">
                            <circle cx="12" cy="12" r="10"></circle>
                            <circle cx="12" cy="12" r="6"></circle>
                            <circle cx="12" cy="12" r="2"></circle>
                        </svg>
                    </div>
                    <h3 class="mb-3" style="color: var(--deep-tech-blue);">Practical Implementation</h3>
                    <p class="text-gray-600">Get actionable strategies you can implement immediately</p>
                </div>
                
                <div class="text-center" style="opacity: 1; transform: none;">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: var(--sunset-orange);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users text-white" aria-hidden="true">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <path d="M16 3.128a4 4 0 0 1 0 7.744"></path>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <h3 class="mb-3" style="color: var(--deep-tech-blue);">Human-Centered Approach</h3>
                    <p class="text-gray-600">Technology solutions that prioritize people and processes</p>
                </div>
                
                <div class="text-center" style="opacity: 1; transform: none;">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: var(--sunset-orange);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rocket text-white" aria-hidden="true">
                            <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path>
                            <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path>
                            <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                            <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
                        </svg>
                    </div>
                    <h3 class="mb-3" style="color: var(--deep-tech-blue);">Future-Ready Insights</h3>
                    <p class="text-gray-600">Stay ahead with emerging tech trends and best practices</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Schedule Your Session Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16" style="opacity: 1; transform: none;">
                <h2 class="mb-4 text-3xl sm:text-4xl tracking-tight" style="color: var(--deep-tech-blue);">Schedule Your Session</h2>
                <div class="w-24 h-1 mx-auto mb-6" style="background-color: var(--warm-ember);"></div>
                <p class="text-xl max-w-3xl mx-auto text-gray-700">Fill out the form below and I'll get back to you within 24 hours to confirm your consultation and discuss next steps.</p>
            </div>
            
            <div class="bg-white p-8 md:p-12 rounded-2xl shadow-xl max-w-3xl mx-auto border" style="border-color: rgba(0, 0, 0, 0.05); opacity: 1; transform: none;">
                <form id="consultancy-form" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="flex items-center gap-2 text-sm leading-none font-medium select-none" for="name">Name *</label>
                            <input class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground border-input flex h-9 w-full min-w-0 rounded-md border px-3 py-1 text-base bg-input-background outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 aria-invalid:border-destructive transition-all" id="name" name="name" required placeholder="John Doe" style="border-color: var(--deep-tech-blue);">
                        </div>
                        <div class="space-y-2">
                            <label class="flex items-center gap-2 text-sm leading-none font-medium select-none" for="email">Email *</label>
                            <input type="email" class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground border-input flex h-9 w-full min-w-0 rounded-md border px-3 py-1 text-base bg-input-background outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 aria-invalid:border-destructive transition-all" id="email" name="email" required placeholder="john@example.com" style="border-color: var(--deep-tech-blue);">
                        </div>
                    </div>
                    
                    <div class="space-y-2">
                        <label class="flex items-center gap-2 text-sm leading-none font-medium select-none" for="company">Company / Organization</label>
                        <input class="file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground border-input flex h-9 w-full min-w-0 rounded-md border px-3 py-1 text-base bg-input-background outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 aria-invalid:border-destructive transition-all" id="company" name="company" placeholder="Your Company Name" style="border-color: var(--deep-tech-blue);">
                    </div>
                    
                    <div class="space-y-2">
                        <label class="flex items-center gap-2 text-sm leading-none font-medium select-none" for="sessionType">Session Type *</label>
                        <select class="border-input flex w-full items-center justify-between gap-2 rounded-md border bg-input-background px-3 py-2 text-sm whitespace-nowrap outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 h-9 transition-all" id="sessionType" name="session_type" required style="border-color: var(--deep-tech-blue);">
                            <option value="">Select a session type</option>
                            <option value="strategy">Strategy Session (60 min)</option>
                            <option value="workshop">Workshop Facilitation</option>
                            <option value="retainer">Advisory Retainer</option>
                            <option value="other">Other / Custom</option>
                        </select>
                    </div>
                    
                    <div class="space-y-2">
                        <label class="flex items-center gap-2 text-sm leading-none font-medium select-none" for="message">Tell me about your needs *</label>
                        <textarea class="border-input placeholder:text-muted-foreground focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 aria-invalid:border-destructive flex min-h-16 w-full rounded-md border bg-input-background px-3 py-2 text-base outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50 md:text-sm transition-all resize-none" id="message" name="message" required placeholder="What challenges are you facing? What are you hoping to achieve?" rows="6" style="border-color: var(--deep-tech-blue);"></textarea>
                    </div>
                    
                    <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium disabled:pointer-events-none disabled:opacity-50 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 aria-invalid:border-destructive bg-primary text-primary-foreground hover:bg-primary/90 h-10 rounded-md px-6 w-full transition-all" type="submit" style="background-color: var(--sunset-orange); color: white;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar mr-2" aria-hidden="true">
                            <path d="M8 2v4"></path>
                            <path d="M16 2v4"></path>
                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                            <path d="M3 10h18"></path>
                        </svg>
                        Submit Booking Request
                    </button>
                    
                    <p class="text-sm text-gray-500 text-center">I'll review your request and get back to you within 24 hours to schedule our session and discuss your specific needs.</p>
                </form>
            </div>
        </div>
    </section>

    <!-- Testimonials or Social Proof Section -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="mb-4 text-4xl sm:text-5xl tracking-tight" style="color: var(--deep-tech-blue);">
                    Trusted by Industry Leaders
                </h2>
                <div class="w-24 h-1 mx-auto mb-6" style="background-color: var(--warm-ember);"></div>
                <p class="text-xl max-w-3xl mx-auto text-gray-700">
                    Join 150+ organizations that have successfully transformed their technology strategy.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $stats = array(
                    array(
                        'number' => '150+',
                        'label' => 'Projects Completed',
                        'description' => 'Successful technology implementations across various industries',
                        'color' => 'var(--sunset-orange)'
                    ),
                    array(
                        'number' => '95%',
                        'label' => 'Client Satisfaction',
                        'description' => 'Organizations report improved strategic clarity and execution',
                        'color' => 'var(--electric-cyan)'
                    ),
                    array(
                        'number' => '24hrs',
                        'label' => 'Response Time',
                        'description' => 'Quick turnaround on consultation requests and follow-ups',
                        'color' => 'var(--neural-purple)'
                    )
                );

                foreach ($stats as $stat) :
                ?>
                <div class="text-center">
                    <div class="mb-4">
                        <span class="text-5xl font-bold" style="color: <?php echo $stat['color']; ?>;">
                            <?php echo esc_html($stat['number']); ?>
                        </span>
                    </div>
                    <h3 class="mb-2 text-xl font-semibold" style="color: var(--deep-tech-blue);">
                        <?php echo esc_html($stat['label']); ?>
                    </h3>
                    <p class="text-gray-600">
                        <?php echo esc_html($stat['description']); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</main><!-- #main -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    const consultancyForm = document.getElementById('consultancy-form');
    
    if (consultancyForm) {
        consultancyForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(consultancyForm);
            const name = formData.get('name');
            const email = formData.get('email');
            const company = formData.get('company');
            const sessionType = formData.get('session_type');
            const message = formData.get('message');
            
            // Basic validation
            if (!name || !email || !sessionType || !message) {
                alert('Please fill in all required fields.');
                return;
            }
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }
            
            // Show loading state
            const submitBtn = consultancyForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Submitting...';
            submitBtn.disabled = true;
            
            // Here you would typically send the data to your server
            console.log('Consultation booking data:', {
                name: name,
                email: email,
                company: company,
                sessionType: sessionType,
                message: message
            });
            
            // Simulate submission delay
            setTimeout(() => {
                // Show success message
                alert('Thank you for your consultation request! I\'ll review your submission and get back to you within 24 hours to schedule our session.');
                
                // Reset form
                consultancyForm.reset();
                
                // Reset button
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
                
                // Optional: scroll to top or redirect
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }, 1500);
        });
    }
    
    // Smooth scrolling for anchor links
    const scrollLinks = document.querySelectorAll('a[href^="#"]');
    scrollLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
</script>

<?php
get_footer();
?>