/**
 * Personal Website Design Theme JavaScript
 *
 * @package Personal_Website_Design
 */

(function() {
    'use strict';

    // Mobile menu toggle functionality
    function initMobileMenu() {
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                mobileMenuButton.setAttribute('aria-expanded', 
                    mobileMenuButton.getAttribute('aria-expanded') === 'false' ? 'true' : 'false'
                );
            });
        }
    }

    // Smooth scrolling for anchor links
    function initSmoothScrolling() {
        const anchorLinks = document.querySelectorAll('a[href^="#"]');
        
        anchorLinks.forEach(link => {
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
    }

    // Modal functionality for lead magnets
    function initModals() {
        const modalTriggers = document.querySelectorAll('[data-modal-trigger]');
        const modals = document.querySelectorAll('[data-modal]');
        const modalCloses = document.querySelectorAll('[data-modal-close]');
        
        modalTriggers.forEach(trigger => {
            trigger.addEventListener('click', function() {
                const modalId = this.getAttribute('data-modal-trigger');
                const modal = document.querySelector(`[data-modal="${modalId}"]`);
                if (modal) {
                    modal.classList.remove('hidden');
                    document.body.classList.add('overflow-hidden');
                }
            });
        });
        
        modalCloses.forEach(close => {
            close.addEventListener('click', function() {
                const modal = this.closest('[data-modal]');
                if (modal) {
                    modal.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                }
            });
        });
        
        // Close modal on backdrop click
        modals.forEach(modal => {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    this.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                }
            });
        });
    }

    // Contact form handling
    function initContactForm() {
        const contactForm = document.querySelector('#contact-form');
        
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const formData = new FormData(this);
                formData.append('action', 'submit_contact_form');
                formData.append('nonce', personal_website_ajax.nonce);
                
                fetch(personal_website_ajax.ajax_url, {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Show success message
                        this.innerHTML = '<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">Thank you! Your message has been sent.</div>';
                    } else {
                        // Show error message
                        console.error('Form submission failed:', data.data);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        }
    }

    // Initialize all functionality when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        initMobileMenu();
        initSmoothScrolling();
        initModals();
        initContactForm();
    });

    // Post like functionality
    window.personal_website_design_like_post = function(postId) {
        fetch(personal_website_ajax.ajax_url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: new URLSearchParams({
                action: 'like_post',
                post_id: postId,
                nonce: personal_website_ajax.nonce
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Update like counts
                const likeCountElements = document.querySelectorAll(`#like-count-${postId}, #like-count-main-${postId}`);
                likeCountElements.forEach(element => {
                    if (element.id.includes('main')) {
                        element.textContent = `Like (${data.data.likes})`;
                    } else {
                        element.textContent = `${data.data.likes} Likes`;
                    }
                });
                
                // Update button states
                const likeButtons = document.querySelectorAll(`#like-button-${postId}, #like-button-main-${postId}`);
                likeButtons.forEach(button => {
                    if (data.data.liked) {
                        button.style.color = 'var(--sunset-orange)';
                    } else {
                        button.style.color = 'var(--deep-tech-blue)';
                    }
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    };

    // Post bookmark functionality
    window.personal_website_design_bookmark_post = function(postId) {
        // Store bookmark in localStorage for now
        let bookmarks = JSON.parse(localStorage.getItem('bookmarked_posts') || '[]');
        
        if (bookmarks.includes(postId)) {
            bookmarks = bookmarks.filter(id => id !== postId);
        } else {
            bookmarks.push(postId);
        }
        
        localStorage.setItem('bookmarked_posts', JSON.stringify(bookmarks));
        
        // Visual feedback
        const button = event.target.closest('button');
        if (bookmarks.includes(postId)) {
            button.style.color = 'var(--neural-purple)';
        } else {
            button.style.color = 'inherit';
        }
    };

    // Share functionality
    window.personal_website_design_share_post = function() {
        if (navigator.share) {
            navigator.share({
                title: document.title,
                url: window.location.href
            });
        } else {
            // Fallback: copy to clipboard
            navigator.clipboard.writeText(window.location.href).then(() => {
                alert('Link copied to clipboard!');
            });
        }
    };

})();