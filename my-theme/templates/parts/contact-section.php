<?php
/**
 * Template part for the Contact section
 *
 * @package Personal_Website_Design
 */
?>

<section id="contact" class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="mb-4 text-4xl sm:text-5xl tracking-tight" style="color: var(--deep-tech-blue);">
                Let's Connect
            </h2>
            <div class="w-24 h-1 mx-auto mb-6" style="background-color: var(--warm-ember);"></div>
            <p class="text-xl max-w-3xl mx-auto text-gray-700">
                Whether you're looking for consultancy, speaking engagements, 
                collaborations, or just want to say hello — I'd love to hear from you.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <?php
            $contact_reasons = array(
                array(
                    'icon' => '<svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6z"></path></svg>',
                    'title' => 'Consultancy',
                    'description' => 'Explore strategic partnerships and advisory services'
                ),
                array(
                    'icon' => '<svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>',
                    'title' => 'Speaking',
                    'description' => 'Invite me to speak at your event or podcast'
                ),
                array(
                    'icon' => '<svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>',
                    'title' => 'Collaboration',
                    'description' => 'Discuss content collaboration and joint projects'
                ),
                array(
                    'icon' => '<svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
                    'title' => 'General Inquiry',
                    'description' => 'Ask questions or share feedback'
                )
            );

            foreach ($contact_reasons as $reason) :
            ?>
            <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4"
                     style="background-color: var(--deep-tech-blue);">
                    <?php echo $reason['icon']; ?>
                </div>
                <h3 class="mb-2" style="color: var(--deep-tech-blue);">
                    <?php echo esc_html($reason['title']); ?>
                </h3>
                <p class="text-gray-600 text-sm">
                    <?php echo esc_html($reason['description']); ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="bg-white p-8 md:p-12 rounded-2xl shadow-xl max-w-3xl mx-auto">
            <div class="flex items-center justify-center mb-8">
                <div class="w-16 h-16 rounded-full flex items-center justify-center"
                     style="background-color: var(--sunset-orange);">
                    <svg class="text-white w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
            </div>

            <h3 class="mb-8 text-2xl text-center tracking-tight" style="color: var(--deep-tech-blue);">
                Send Me a Message
            </h3>

            <form id="contact-form" class="space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="contact-name" class="block text-sm font-medium text-gray-700">Name *</label>
                        <input id="contact-name"
                               name="name"
                               type="text"
                               required
                               placeholder="John Doe"
                               class="w-full px-4 py-3 rounded-lg border transition-all"
                               style="border-color: var(--deep-tech-blue);"
                               onfocus="this.style.borderColor='var(--sunset-orange)'"
                               onblur="this.style.borderColor='var(--deep-tech-blue)'">
                    </div>

                    <div class="space-y-2">
                        <label for="contact-email" class="block text-sm font-medium text-gray-700">Email *</label>
                        <input id="contact-email"
                               name="email"
                               type="email"
                               required
                               placeholder="john@example.com"
                               class="w-full px-4 py-3 rounded-lg border transition-all"
                               style="border-color: var(--deep-tech-blue);"
                               onfocus="this.style.borderColor='var(--sunset-orange)'"
                               onblur="this.style.borderColor='var(--deep-tech-blue)'">
                    </div>
                </div>

                <div class="space-y-2">
                    <label for="contact-company" class="block text-sm font-medium text-gray-700">Company / Organization (Optional)</label>
                    <input id="contact-company"
                           name="company"
                           type="text"
                           placeholder="Your Company Name"
                           class="w-full px-4 py-3 rounded-lg border transition-all"
                           style="border-color: var(--deep-tech-blue);"
                           onfocus="this.style.borderColor='var(--sunset-orange)'"
                           onblur="this.style.borderColor='var(--deep-tech-blue)'">
                </div>

                <div class="space-y-2">
                    <label for="contact-subject" class="block text-sm font-medium text-gray-700">Subject *</label>
                    <select id="contact-subject"
                            name="subject"
                            required
                            class="w-full px-4 py-3 rounded-lg border transition-all"
                            style="border-color: var(--deep-tech-blue);"
                            onfocus="this.style.borderColor='var(--sunset-orange)'"
                            onblur="this.style.borderColor='var(--deep-tech-blue)'">
                        <option value="">What is this regarding?</option>
                        <option value="consultancy">Consultancy & Advisory</option>
                        <option value="speaking">Speaking Engagement</option>
                        <option value="collaboration">Content Collaboration</option>
                        <option value="media">Media & Press</option>
                        <option value="book">Book Inquiry</option>
                        <option value="general">General Inquiry</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="space-y-2">
                    <label for="contact-message" class="block text-sm font-medium text-gray-700">Message *</label>
                    <textarea id="contact-message"
                              name="message"
                              required
                              placeholder="Tell me more about what you have in mind..."
                              rows="6"
                              class="w-full px-4 py-3 rounded-lg border transition-all resize-none"
                              style="border-color: var(--deep-tech-blue);"
                              onfocus="this.style.borderColor='var(--sunset-orange)'"
                              onblur="this.style.borderColor='var(--deep-tech-blue)'"></textarea>
                </div>

                <button type="submit"
                        class="w-full px-6 py-4 rounded-lg text-white text-lg transition-all"
                        style="background-color: var(--sunset-orange);">
                    Send Message
                </button>

                <p class="text-sm text-gray-500 text-center">
                    I typically respond within 24-48 hours. Looking forward to connecting!
                </p>
            </form>
        </div>

        <!-- Additional Contact Info -->
        <div class="mt-12 text-center">
            <p class="text-gray-600 mb-4">
                Prefer email directly? Reach me at 
                <a href="mailto:<?php echo esc_attr(get_theme_mod('contact_email', 'hello@example.com')); ?>"
                   class="transition-colors"
                   style="color: var(--sunset-orange);">
                    <?php echo esc_html(get_theme_mod('contact_email', 'hello@example.com')); ?>
                </a>
            </p>
            <p class="text-sm text-gray-500">
                I read every message personally and look forward to hearing from you.
            </p>
        </div>
    </div>
</section>