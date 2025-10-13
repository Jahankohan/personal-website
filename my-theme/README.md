# Personal Website WordPress Theme

A modern, responsive WordPress theme converted from React + Tailwind CSS, designed for technology consultants, authors, and thought leaders.

## Features

### ✨ Core Functionality
- **Responsive Design**: Mobile-first approach with Tailwind CSS
- **Modern Layout**: Clean, professional design with gradient backgrounds
- **Interactive Elements**: AJAX-powered likes, bookmarks, and contact forms
- **SEO Optimized**: Proper meta tags, structured data, and semantic HTML
- **Performance Optimized**: Efficient asset loading and minimal dependencies

### 📄 Page Templates
- **Homepage** (`front-page.php`): Hero, About, Blog, Book, Consultancy, Contact sections
- **About Page** (`page-about.php`): Professional journey, experience timeline, services
- **Links Hub** (`page-links.php`): Linktree-style page with social links and bio
- **Resources** (`page-resources.php`): Categorized library with download functionality
- **Blog List** (`index.php`): Enhanced blog listing with search and filters
- **Single Post** (`single.php`): Individual blog posts with sharing and comments
- **Generic Page** (`page.php`): Standard page template with social sharing

### 🎨 Design System
- **Custom Color Palette**: Deep tech blue, neural purple, sunset orange, electric cyan, warm ember
- **Typography**: Modern, readable fonts with proper hierarchy
- **Components**: Cards, buttons, forms, navigation, modals
- **Animations**: Smooth transitions and hover effects

### ⚙️ WordPress Integration
- **Custom Post Types**: Ready for books, resources, testimonials
- **WordPress Customizer**: Easy content management through admin panel
- **Menu Support**: Multiple navigation areas (header, footer, social)
- **Widget Areas**: Sidebar and footer widget support
- **Comment System**: Custom styled comment templates

## Installation

1. **Upload Theme**:
   ```bash
   # Upload the my-theme folder to /wp-content/themes/
   # Or zip the folder and upload via WordPress admin
   ```

2. **Activate Theme**:
   - Go to Appearance > Themes in WordPress admin
   - Find "Personal Website Design" and click "Activate"

3. **Configure Menus**:
   - Go to Appearance > Menus
   - Create menus for:
     - Primary Navigation (Header)
     - Footer Links
     - Social Links

4. **Customize Content**:
   - Go to Appearance > Customize
   - Configure Hero Section, About Page, Links Hub, and Social Media settings

## Configuration

### WordPress Customizer Settings

#### Hero Section
- Hero Title
- Hero Description

#### About Page
- Hero Title and Description
- Profile Image
- Statistics (4 customizable stats with values and labels)

#### Links Hub Page
- Display Name
- Tagline
- Bio Text
- Profile Image

#### Social Media
- Twitter, LinkedIn, YouTube, Instagram, GitHub, Facebook URLs

### Menu Locations
- **Primary**: Main navigation in header
- **Footer**: Footer links
- **Social**: Social media links in footer

### Required Pages
Create the following pages and assign templates:

1. **About** - Use "About Page" template
2. **Links** - Use "Links Hub Page" template  
3. **Resources** - Use "Resources Page" template
4. **Contact** - Use default page template or custom contact template

## File Structure

```
/my-theme/
├── style.css                 # Theme metadata and base styles
├── functions.php             # Theme functionality and WordPress hooks
├── header.php                # Site header with navigation
├── footer.php                # Site footer
├── front-page.php            # Homepage template
├── index.php                 # Blog listing page
├── single.php                # Individual blog post
├── page.php                  # Generic page template
├── page-about.php            # About page template
├── page-links.php            # Links hub template
├── page-resources.php        # Resources library template
├── comments.php              # Comment system template
├── assets/
│   ├── css/style.css         # Compiled Tailwind CSS
│   └── js/main.js            # Interactive functionality
└── templates/
    └── parts/
        ├── book-section.php      # Book showcase section
        ├── consultancy-section.php # Consultancy services
        └── contact-section.php   # Contact form section
```

## Customization

### Adding New Page Templates
1. Create new PHP file: `page-templatename.php`
2. Add template header:
   ```php
   <?php
   /**
    * Template Name: Your Template Name
    */
   ```

### Modifying Styles
- Edit `/assets/css/style.css` for custom CSS
- Use CSS custom properties for brand colors:
  ```css
  :root {
    --deep-tech-blue: #1e3a8a;
    --neural-purple: #7c3aed;
    --sunset-orange: #fb923c;
    --electric-cyan: #06b6d4;
    --warm-ember: #f59e0b;
  }
  ```

### Adding Custom Fields
Use WordPress Customizer API in `functions.php`:
```php
$wp_customize->add_setting('your_setting', array(
    'default' => 'default_value',
    'sanitize_callback' => 'sanitize_text_field',
));
```

## Browser Support
- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Performance Features
- **Optimized Assets**: Minified CSS and JavaScript
- **Lazy Loading**: Images load as needed
- **Caching Friendly**: Clean, cacheable HTML output
- **SEO Optimized**: Proper meta tags and structured data

## Security Features
- **Nonce Verification**: All AJAX requests secured
- **Input Sanitization**: All user inputs properly sanitized
- **XSS Prevention**: Output escaping throughout templates
- **SQL Injection Protection**: Using WordPress database methods

## Development Notes

### WordPress Coding Standards
- Follows WordPress PHP Coding Standards
- Uses WordPress hooks and filters appropriately
- Proper text domain for internationalization

### Accessibility
- Semantic HTML structure
- Proper ARIA labels
- Keyboard navigation support
- Screen reader friendly

### SEO Optimization
- Structured data markup
- Proper heading hierarchy
- Meta descriptions and titles
- Social media tags (Open Graph, Twitter Cards)

## Troubleshooting

### Common Issues

1. **Styles not loading**:
   - Check if `/assets/css/style.css` exists
   - Verify WordPress is properly enqueuing stylesheets

2. **AJAX not working**:
   - Check browser console for JavaScript errors
   - Verify nonce values are correct

3. **Menu not displaying**:
   - Assign menus to proper locations in Appearance > Menus
   - Check if menu locations are registered in functions.php

### Debug Mode
Enable WordPress debug mode in `wp-config.php`:
```php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
```

## Support

For theme support and customization:
1. Check WordPress Codex for standard functionality
2. Review theme files for customization examples
3. Use WordPress developer tools and debugging

## Changelog

### Version 1.0.0
- Initial theme release
- Complete React to WordPress conversion
- All page templates implemented
- WordPress Customizer integration
- AJAX functionality for interactive elements

## Credits

- **Original Design**: Converted from React + Tailwind CSS
- **Icons**: Heroicons (MIT License)
- **Framework**: WordPress 6.x compatible
- **CSS Framework**: Tailwind CSS (compiled)

## License

This theme is licensed under GPL v2 or later.