<?php
/**
 * Debug Template - Copy this content to test what's happening
 * 
 * @package PersonalWebsiteDesign
 */

get_header(); 
?>

<main id="main" class="site-main" role="main">
    <div style="padding: 50px; background: white; color: black;">
        <h1>🔍 DEBUG: Page Template Test</h1>
        
        <h2>Template Information:</h2>
        <ul>
            <li><strong>Current Template:</strong> <?php echo basename(__FILE__); ?></li>
            <li><strong>Page ID:</strong> <?php echo get_the_ID(); ?></li>
            <li><strong>Page Title:</strong> <?php the_title(); ?></li>
            <li><strong>Page Slug:</strong> <?php echo get_post_field('post_name', get_the_ID()); ?></li>
            <li><strong>Has Posts:</strong> <?php echo have_posts() ? 'Yes' : 'No'; ?></li>
            <li><strong>WordPress Version:</strong> <?php echo get_bloginfo('version'); ?></li>
            <li><strong>Active Theme:</strong> <?php echo get_template(); ?></li>
        </ul>

        <h2>URL Information:</h2>
        <ul>
            <li><strong>Current URL:</strong> <?php echo get_permalink(); ?></li>
            <li><strong>Home URL:</strong> <?php echo home_url(); ?></li>
            <li><strong>Is Page:</strong> <?php echo is_page() ? 'Yes' : 'No'; ?></li>
            <li><strong>Is Front Page:</strong> <?php echo is_front_page() ? 'Yes' : 'No'; ?></li>
            <li><strong>Is Home:</strong> <?php echo is_home() ? 'Yes' : 'No'; ?></li>
        </ul>

        <h2>Page Content:</h2>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div style="border: 2px solid #ccc; padding: 20px; margin: 10px 0;">
                    <h3>Content from the_content():</h3>
                    <?php the_content(); ?>
                    
                    <?php if (!get_the_content()) : ?>
                        <p><em>No content found - this page might be empty</em></p>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p><strong style="color: red;">❌ No posts found - this indicates the page doesn't exist in WordPress</strong></p>
        <?php endif; ?>

        <h2>Debugging Notes:</h2>
        <div style="background: #f0f0f0; padding: 15px; margin: 10px 0;">
            <p>If you see "No posts found", it means:</p>
            <ol>
                <li>The page hasn't been created in WordPress admin yet</li>
                <li>You need to go to <strong>Pages → Add New</strong> in WordPress admin</li>
                <li>Create pages with these slugs: about, resources, links, book</li>
                <li>Publish the pages, then visit the URLs again</li>
            </ol>
        </div>
    </div>
</main>

<?php get_footer(); ?>