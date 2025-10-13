<?php
/**
 * The template for displaying comments
 *
 * @package Personal_Website_Design
 */

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        
        <!-- Comments List -->
        <div class="comments-list mb-12">
            <?php
            wp_list_comments(array(
                'style'      => 'div',
                'short_ping' => true,
                'callback'   => 'personal_website_design_comment',
            ));
            ?>
        </div>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav class="comment-navigation mb-8">
                <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'personal-website-design')); ?></div>
                <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'personal-website-design')); ?></div>
            </nav>
        <?php endif; ?>

    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="no-comments text-gray-600 text-center py-8">
            <?php _e('Comments are closed.', 'personal-website-design'); ?>
        </p>
    <?php endif; ?>

    <?php
    // Comment Form
    if (comments_open()) :
        $comment_form_args = array(
            'title_reply'       => __('Leave a Comment', 'personal-website-design'),
            'title_reply_to'    => __('Leave a Reply to %s', 'personal-website-design'),
            'label_submit'      => __('Post Comment', 'personal-website-design'),
            'comment_field'     => '<div class="space-y-2 mb-4"><label for="comment" class="block text-sm font-medium text-gray-700">' . _x('Comment', 'noun', 'personal-website-design') . ' *</label><textarea id="comment" name="comment" placeholder="Share your thoughts..." rows="6" class="w-full px-4 py-3 rounded-lg border transition-all resize-none" style="border-color: var(--deep-tech-blue);" onfocus="this.style.borderColor=\'var(--sunset-orange)\'" onblur="this.style.borderColor=\'var(--deep-tech-blue)\'" required></textarea></div>',
            'fields'            => array(
                'author' => '<div class="grid sm:grid-cols-2 gap-4 mb-4"><div class="space-y-2"><label for="author" class="block text-sm font-medium text-gray-700">' . __('Name', 'personal-website-design') . ' *</label><input id="author" name="author" type="text" placeholder="Your Name" class="w-full px-4 py-3 rounded-lg border transition-all" style="border-color: var(--deep-tech-blue);" onfocus="this.style.borderColor=\'var(--sunset-orange)\'" onblur="this.style.borderColor=\'var(--deep-tech-blue)\'" required></div>',
                'email'  => '<div class="space-y-2"><label for="email" class="block text-sm font-medium text-gray-700">' . __('Email', 'personal-website-design') . ' *</label><input id="email" name="email" type="email" placeholder="your@email.com" class="w-full px-4 py-3 rounded-lg border transition-all" style="border-color: var(--deep-tech-blue);" onfocus="this.style.borderColor=\'var(--sunset-orange)\'" onblur="this.style.borderColor=\'var(--deep-tech-blue)\'" required></div></div>',
                'url'    => '',
            ),
            'submit_button'     => '<button type="submit" class="px-6 py-3 rounded-lg text-white text-lg transition-all" style="background-color: var(--sunset-orange);">%4$s</button>',
            'comment_notes_before' => '<p class="text-sm text-gray-500 mb-4">' . __('Your email address will not be published. Required fields are marked *', 'personal-website-design') . '</p>',
            'comment_notes_after'  => '<p class="text-sm text-gray-500 mt-4">' . __('You may use these HTML tags and attributes: <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;s&gt; &lt;strike&gt; &lt;strong&gt;</code>', 'personal-website-design') . '</p>',
        );
        
        comment_form($comment_form_args);
    endif;
    ?>

</div><!-- #comments -->