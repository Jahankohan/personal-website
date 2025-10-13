---
applyTo: '**'
---

# 🎯 Goal
Convert this React + Tailwind (Vite) project into a **native WordPress theme**.  
The final deliverable should be a folder `/my-theme` ready to place inside `/wp-content/themes/`, preserving the existing layout and Tailwind styling but using PHP templates and WordPress APIs.

---

# 🧩 Project Context

## Current Stack
- React + TypeScript (Vite)
- Tailwind CSS
- Pages and components inside `/src/components` and `/src/ui`
- Global CSS in `/src/styles`
- Static data in `/src/data`
- Entry point: `App.tsx` + `main.tsx`

## Target Stack
- WordPress theme (PHP templates)
- Tailwind CSS compiled and enqueued via `functions.php`
- HTML + PHP for structure and content
- WordPress dynamic functions for data, menus, posts, etc.
- No React, Vite, or Node dependencies

---

# 🧱 Target Folder Structure

```

/my-theme/
│
├── style.css                 # Theme metadata header
├── functions.php             # Enqueue assets + theme setup
├── header.php                # Site header (Navigation + Hero)
├── footer.php                # Footer layout
├── front-page.php            # Homepage layout
├── index.php                 # Blog listing
├── single.php                # Blog post view
├── page.php                  # Generic page
├── assets/
│   ├── css/style.css         # Compiled Tailwind
│   └── js/main.js            # Optional interactivity
└── templates/
├── parts/                # Reusable section includes
└── components/           # Smaller reusable fragments

````

---

# ⚙️ Conversion Guidelines

### 1. General Behavior
- Replace JSX with static HTML + PHP.
- Preserve all Tailwind classnames exactly.
- Replace React props/data with WordPress template tags.
- Split major sections into separate PHP templates.
- Avoid including any React, Vite, or Node scripts.

### 2. WordPress Dynamic Tags Reference
| Content Type | WordPress Function |
|---------------|--------------------|
| Page/Post title | `<?php the_title(); ?>` |
| Main content | `<?php the_content(); ?>` |
| Post loop | `while ( have_posts() ) : the_post(); ... endwhile;` |
| Featured image | `<?php the_post_thumbnail(); ?>` |
| Menus | `<?php wp_nav_menu(); ?>` |
| Blog metadata | `<?php the_date(); ?>`, `<?php the_author(); ?>` |

### 3. Tailwind Integration
- Compile the Tailwind CSS build once and place it in `/assets/css/style.css`.
- Enqueue it in `functions.php`:
  ```php
  function my_theme_enqueue_assets() {
      wp_enqueue_style('tailwind', get_template_directory_uri() . '/assets/css/style.css', [], '1.0');
      wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', true);
  }
  add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');
````

* Do not re-include PostCSS or Node build steps inside WordPress.

---

# 🧠 Step-by-Step Conversion Plan for Copilot

## Step 1 — Generate WordPress Theme Base

* Create `/my-theme/` directory.
* Add `style.css` with proper WordPress theme header comment.
* Add `functions.php` with `add_theme_support()` for title tag, post thumbnails, and `register_nav_menus()`.
* Include enqueue function for Tailwind and JS.

## Step 2 — Create Global Layout Files

* Generate `header.php` and `footer.php`.
* Extract markup from `Navigation.tsx`, `HeroSection.tsx`, and `Footer.tsx`.
* Replace hardcoded links with `wp_nav_menu()` for navigation.
* Include `wp_head()` in `<head>` and `wp_footer()` before `</body>`.

## Step 3 — Convert Homepage

* Combine sections like `AboutSection.tsx`, `ConsultancySection.tsx`, `BookSection.tsx`, `ContactSection.tsx`, and `LeadMagnetModal.tsx` into `front-page.php`.
* Keep Tailwind structure and convert text/data to WordPress editable fields via `the_content()` or custom ACF fields (if available).

## Step 4 — Convert Blog Pages

* `BlogListPage.tsx` → `index.php` (the Loop for posts)

  ```php
  if ( have_posts() ) :
      while ( have_posts() ) : the_post();
          get_template_part('templates/parts/content', get_post_format());
      endwhile;
  else :
      echo '<p>No posts found.</p>';
  endif;
  ```
* `BlogPostPage.tsx` → `single.php`

  ```php
  while ( have_posts() ) : the_post();
      the_title('<h1>', '</h1>');
      the_content();
  endwhile;
  ```

## Step 5 — Convert Static Pages

* `AboutMePage.tsx` → `page-about.php`
* `LinkHubPage.tsx` → `page-links.php`
* `ResourcesPage.tsx` → `page-resources.php`
* `ResourceDetailPage.tsx` → handled by `single.php` or custom template
* Use `get_template_part()` for reusable sections.

## Step 6 — Include Shared Components

* Move reusable elements (like `SocialMediaEmbeds`, `ImageWithFallback`) into `templates/parts/` or `templates/components/`.
* Use `include` or `get_template_part()` to reuse across templates.

## Step 7 — Clean and Finalize

* Delete references to `App.tsx`, `main.tsx`, and React-specific imports.
* Ensure all links, images, and assets resolve with `get_template_directory_uri()`.
* Test in WordPress: activate the theme, create sample pages/posts, and verify output.

---

# 🧩 Example Mapping Table

| React File               | New WordPress File               | Notes                                    |
| ------------------------ | -------------------------------- | ---------------------------------------- |
| `Navigation.tsx`         | `header.php`                     | Use `wp_nav_menu()`                      |
| `HeroSection.tsx`        | `header.php` or `front-page.php` | Intro content                            |
| `Footer.tsx`             | `footer.php`                     | Use widgets or custom content            |
| `AboutSection.tsx`       | `front-page.php`                 | Static or editable via page content      |
| `BlogListPage.tsx`       | `index.php`                      | Blog list                                |
| `BlogPostPage.tsx`       | `single.php`                     | Single post view                         |
| `ResourcesPage.tsx`      | `page-resources.php`             | Custom template                          |
| `ConsultancySection.tsx` | Include in `front-page.php`      | Optional ACF fields                      |
| `ContactSection.tsx`     | `page-contact.php`               | Optional contact form plugin integration |

---

# ✅ Deliverables

* `/my-theme/` folder ready for WordPress installation
* Theme activates without errors
* Layout identical to the original React site
* Tailwind styling intact
* All core templates functional (home, blog, pages, single)
* PHP, CSS, and minimal JS only — no React dependencies

---

# 💬 Copilot Instructions Behavior

* When creating new files, generate proper PHP comments and WordPress functions.
* When refactoring, strip JSX and TypeScript syntax.
* Always verify WordPress function usage and closing tags.
* Assume WordPress 6.x compatibility.
* Prefer modular includes (`get_template_part()`) over inline duplication.

```
