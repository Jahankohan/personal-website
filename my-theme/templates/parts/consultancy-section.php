<?php
/**
 * Template part for the Consultancy section
 *
 * @package Personal_Website_Design
 */
?>

<section id="consultancy" class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="mb-4 text-4xl sm:text-5xl tracking-tight" style="color: var(--deep-tech-blue);">
                Book a Consultation
            </h2>
            <div class="w-24 h-1 mx-auto mb-6" style="background-color: var(--warm-ember);"></div>
            <p class="text-xl max-w-3xl mx-auto text-gray-700">
                Let's explore how emerging technologies can transform your business
                while keeping humanity at the center.
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8 mb-12">
            <?php
            $services = array(
                array(
                    'icon' => '<svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>',
                    'title' => 'Strategy Sessions',
                    'description' => '1-on-1 consultation on AI and blockchain implementation strategies',
                    'duration' => '60 minutes'
                ),
                array(
                    'icon' => '<svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>',
                    'title' => 'Workshop Facilitation',
                    'description' => 'Team workshops on emerging tech adoption and digital transformation',
                    'duration' => 'Half/Full day'
                ),
                array(
                    'icon' => '<svg class="text-white w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
                    'title' => 'Advisory Retainer',
                    'description' => 'Ongoing strategic guidance for your organization\'s tech journey',
                    'duration' => 'Monthly'
                )
            );

            foreach ($services as $service) :
            ?>
            <div class="bg-white p-6 rounded-xl shadow-lg">
                <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4"
                     style="background-color: var(--deep-tech-blue);">
                    <?php echo $service['icon']; ?>
                </div>
                <h3 class="mb-2" style="color: var(--deep-tech-blue);">
                    <?php echo esc_html($service['title']); ?>
                </h3>
                <p class="text-gray-600 mb-3">
                    <?php echo esc_html($service['description']); ?>
                </p>
                <div class="text-sm" style="color: var(--warm-ember);">
                    <?php echo esc_html($service['duration']); ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="bg-white p-8 md:p-12 rounded-2xl shadow-xl max-w-3xl mx-auto">
            <h3 class="mb-8 text-2xl text-center tracking-tight" style="color: var(--deep-tech-blue);">
                Schedule Your Session
            </h3>

            <form id="consultancy-form" class="space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="cons-name" class="block text-sm font-medium text-gray-700">Name *</label>
                        <input id="cons-name"
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
                        <label for="cons-email" class="block text-sm font-medium text-gray-700">Email *</label>
                        <input id="cons-email"
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
                    <label for="cons-company" class="block text-sm font-medium text-gray-700">Company / Organization</label>
                    <input id="cons-company"
                           name="company"
                           type="text"
                           placeholder="Your Company Name"
                           class="w-full px-4 py-3 rounded-lg border transition-all"
                           style="border-color: var(--deep-tech-blue);"
                           onfocus="this.style.borderColor='var(--sunset-orange)'"
                           onblur="this.style.borderColor='var(--deep-tech-blue)'">
                </div>

                <div class="space-y-2">
                    <label for="cons-session-type" class="block text-sm font-medium text-gray-700">Session Type *</label>
                    <select id="cons-session-type"
                            name="session_type"
                            required
                            class="w-full px-4 py-3 rounded-lg border transition-all"
                            style="border-color: var(--deep-tech-blue);"
                            onfocus="this.style.borderColor='var(--sunset-orange)'"
                            onblur="this.style.borderColor='var(--deep-tech-blue)'">
                        <option value="">Select a session type</option>
                        <option value="strategy">Strategy Session (60 min)</option>
                        <option value="workshop">Workshop Facilitation</option>
                        <option value="retainer">Advisory Retainer</option>
                        <option value="other">Other / Custom</option>
                    </select>
                </div>

                <div class="space-y-2">
                    <label for="cons-message" class="block text-sm font-medium text-gray-700">Tell me about your needs *</label>
                    <textarea id="cons-message"
                              name="message"
                              required
                              placeholder="What challenges are you facing? What are you hoping to achieve?"
                              rows="5"
                              class="w-full px-4 py-3 rounded-lg border transition-all resize-none"
                              style="border-color: var(--deep-tech-blue);"
                              onfocus="this.style.borderColor='var(--sunset-orange)'"
                              onblur="this.style.borderColor='var(--deep-tech-blue)'"></textarea>
                </div>

                <button type="submit"
                        class="w-full px-6 py-4 rounded-lg text-white text-lg transition-all"
                        style="background-color: var(--sunset-orange);">
                    Submit Booking Request
                </button>

                <p class="text-sm text-gray-500 text-center">
                    I'll review your request and get back to you within 24 hours to
                    schedule our session.
                </p>
            </form>
        </div>
    </div>
</section>