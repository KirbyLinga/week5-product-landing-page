# Morsel Bloom — Responsive Product Landing Page

A responsive, component-based landing page built with **Laravel**, **Blade Components**, and **Tailwind CSS** for Morsel Bloom, a home bakery specializing in Filipino sweet treats such as banana cakes, choco pops, puto, mini donuts, and polvoron.

---

## 1. Project Title

**Morsel Bloom — Responsive Product Landing Page**
*ITST 302 – Client-Server Technologies | Week 5 | Mini Project 04*

---

## 2. Introduction

### What is a Product Landing Page?
A product landing page is a standalone web page designed with a single focus: introducing a product or business to visitors and guiding them toward a specific action, such as placing an order, sending an inquiry, or following the brand online. Unlike a general website with many pages and navigation paths, a landing page is intentionally focused, presenting only the information a customer needs to understand what is being offered and why it matters.

### Why Landing Pages Are Important for Businesses
For small and local businesses like Morsel Bloom, a landing page is often the first digital impression a potential customer has of the brand. A clear, professional landing page:
- Builds trust and credibility for a home-based or small business.
- Presents products, pricing, and contact details in one convenient place.
- Improves customer engagement and encourages orders or inquiries.
- Extends the brand's reach beyond word-of-mouth and social media posts.

### Purpose of the Project
This project transforms Morsel Bloom's existing product line and brand identity into a clean, responsive, and professional landing page. The goal is to give the business a digital presence that reflects the quality of its products while demonstrating component-based frontend development using Laravel Blade and Tailwind CSS.

---

## 3. Objectives

Through this activity, the following learning objectives were accomplished:

- Developed a fully responsive web interface using Tailwind CSS utility classes.
- Built reusable Laravel Blade Components to eliminate duplicated markup across the page.
- Applied responsive design principles across desktop, tablet, and mobile breakpoints.
- Organized frontend code following Laravel's recommended folder structure (`layouts`, `components`, `pages`).
- Implemented consistent UI design through a unified color palette, typography, and spacing system.
- Documented the frontend architecture, component design, and design evolution of the project.
- Prepared the project for professional portfolio publication via GitHub and LinkedIn.

---

## 4. Responsive Web Design

### Mobile-First Design
The layout was built starting from the smallest screen size and progressively enhanced for larger viewports. Base utility classes in Tailwind target mobile screens by default, with `sm:`, `md:`, and `lg:` prefixes layered on top to adjust layout, spacing, and typography as the viewport grows. This ensures the page is fully usable on a phone before any desktop-specific styling is applied.

### Responsive Breakpoints
Tailwind's default breakpoints were used to adapt the layout:
- **Mobile** (`< 640px`) — single-column stacked layout.
- **Tablet** (`md: ≥ 768px`) — two-column grids for features and products.
- **Desktop/Laptop** (`lg: ≥ 1024px`) — three-column grids, expanded navigation, and larger hero imagery.

### Flexbox
Flexbox (`flex`, `items-center`, `justify-between`) was used for one-dimensional layouts such as the navigation bar (logo, links, and buttons aligned horizontally) and the footer's link columns.

### CSS Grid
CSS Grid (`grid`, `grid-cols-*`) was used for two-dimensional layouts such as the product/feature cards and pricing cards, allowing the number of columns to change cleanly across breakpoints (`grid-cols-1 md:grid-cols-2 lg:grid-cols-3`).

### User Experience (UX)
Responsive design directly affects UX: a layout that adapts to any screen size keeps content readable, buttons tappable, and images properly scaled regardless of device. For a bakery business like Morsel Bloom, most potential customers browse and order via mobile phones, so a mobile-friendly page is essential rather than optional.

### Why Responsive Design Matters in Modern Web Applications
With the majority of web traffic coming from mobile devices, a non-responsive site risks losing customers due to poor readability, broken layouts, or difficult navigation. Responsive design ensures a consistent brand experience across all devices, which improves customer trust, engagement, and conversion.

---

## 5. Tailwind CSS

### Utility-First CSS
Tailwind CSS provides small, single-purpose utility classes (e.g., `p-4`, `text-lg`, `rounded-xl`) that are combined directly in markup, rather than writing separate custom CSS files for each component.

### Advantages of Tailwind CSS
- Faster styling directly in Blade templates without switching files.
- Consistent spacing and sizing scale across the entire project.
- Smaller final CSS bundle since only used utilities are compiled.
- Easy to maintain and adjust without hunting through stylesheets.

### Responsive Utility Classes
Example from the product cards section:
```html
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
```
This single line defines one column on mobile, two on tablets, and three on larger screens.

### Component Styling
Example from a product card used for items like Banana Cakes and Choco Pops:
```html
<div class="bg-white rounded-2xl shadow-md hover:shadow-lg transition p-4">
    <img src="{{ $img }}" class="rounded-xl w-full h-40 object-cover mb-3">
    <span class="text-xs font-semibold text-pink-600">{{ $tag }}</span>
    <h3 class="text-lg font-bold">{{ $title }}</h3>
    <p class="text-sm text-gray-600">{{ $desc }}</p>
    <p class="mt-2 font-semibold">{{ $price }}</p>
</div>
```
This shows rounded corners (`rounded-2xl`), shadow utilities (`shadow-md`, `hover:shadow-lg`), spacing (`p-4`, `mb-3`, `mt-2`), and hover transitions applied entirely through utility classes.

---

## 6. Blade Components

### What Are Blade Components?
Blade Components are reusable pieces of Laravel's templating engine that encapsulate a section of markup (and optional logic) into a single, reusable file. They can accept data through props and be inserted into any page using a simple tag, such as `<x-navbar />` or `<x-feature-card :title="$title" />`.

### Why Reusable Components Improve Maintainability
Instead of copying and pasting the same navbar, card, or button markup on every page, a single component file is edited once and the change reflects everywhere it is used. This significantly reduces the risk of inconsistency and makes future updates faster and safer.

### Benefits of Modular UI Development
- Cleaner, shorter Blade page files that are easier to read.
- Consistent design across the entire site, since every card or button pulls from the same component.
- Easier collaboration, since components can be worked on independently.
- Simplifies scaling the site with new pages or sections.

### Components Used in This Project
```
resources/views/components/
├── navbar.blade.php
├── hero.blade.php
├── feature-card.blade.php
├── pricing-card.blade.php
├── testimonial-card.blade.php
├── button.blade.php
└── footer.blade.php
```

Example usage of the `feature-card` component with real Morsel Bloom product data:
```php
$products = [
    ['tag' => 'Specialty', 'img' => asset('Images/Products/Bcake1.jpg'), 'title' => 'Banana Cakes', 'desc' => 'Soft and moist banana cakes made with ripe bananas.', 'price' => 'For ₱50'],
    ['tag' => 'Popular', 'img' => asset('Images/Products/Bites.jpg'), 'title' => 'Choco Pops', 'desc' => 'Delicious chocolate-coated bites with a rich, sweet flavor.', 'price' => 'For ₱15'],
];
```
```html
@foreach ($products as $product)
    <x-feature-card :tag="$product['tag']" :img="$product['img']" :title="$product['title']" :desc="$product['desc']" :price="$product['price']" />
@endforeach
```

*(Insert a screenshot of the components folder and rendered feature cards here.)*

---

## 7. User Interface Design

### Color Palette
Morsel Bloom's palette uses warm, appetizing tones suited to a bakery brand — soft pinks and browns paired with a neutral cream background — creating a friendly, homemade feel while keeping enough contrast for readability.

### Typography
A clean sans-serif font family was used throughout for legibility, with bold weights reserved for headings and product titles to create clear visual hierarchy.

### Iconography
Simple line-style icons represent each feature (e.g., freshness, delivery, custom orders), keeping the visual language consistent and lightweight.

### Button Styles
Primary buttons use a solid brand-color background with rounded corners and a hover state (`hover:bg-*`, `transition`), while secondary buttons use an outlined style to differentiate calls-to-action from lower-priority links.

### Card Design
Product, pricing, and testimonial cards share a consistent style: white background, rounded corners (`rounded-2xl`), soft shadow, and consistent internal padding, so that all card-based sections feel like part of the same design system.

### Layout Consistency
Consistent spacing values (`p-4`, `gap-6`, `mb-8`, etc.) and a shared max-width container were used across all sections to keep margins, padding, and alignment uniform from the navbar down to the footer.

### How This Contributes to UX
A consistent, harmonious design reduces visual friction — customers can focus on the products and offers rather than being distracted by inconsistent styling, which builds trust and encourages engagement.

---

## 8. Folder Structure

```
week05-product-landing-page/
│
├── app/
├── resources/
│   ├── views/
│   │   ├── layouts/        → Contains app.blade.php, the main layout all pages extend (defines <head>, global styles, and the shared page shell).
│   │   ├── components/     → Contains all reusable Blade Components (navbar, hero, cards, button, footer).
│   │   └── pages/          → Contains the actual landing page(s) that assemble components into full views.
│
├── public/                 → Publicly accessible assets (compiled CSS/JS, product images).
├── screenshots/            → Screenshots of the completed project across devices and sections.
├── documentation/          → Before-and-after comparison images and supporting documentation assets.
└── README.md
```

- **resources/views/layouts** — Holds the master Blade layout that defines the shared HTML structure, meta tags, and Tailwind setup used across every page.
- **resources/views/components** — Holds each reusable UI piece as its own Blade file, keeping markup DRY and consistent.
- **resources/views/pages** — Holds the page-level views that extend the layout and compose components together into the final landing page.
- **public** — Stores static assets like product images and compiled front-end assets that are served directly to the browser.
- **screenshots** — Stores visual proof of the completed responsive design across breakpoints and sections, used for grading and documentation.
- **documentation** — Stores the before-and-after design comparison and any additional supporting material referenced in this README.

---

## 9. Screenshots

> Screenshots below should be placed in the `screenshots/` folder and linked accordingly.

| Section | Screenshot |
|---|---|
| Desktop View | *(insert image)* |
| Tablet View | *(insert image)* |
| Mobile View | *(insert image)* |
| Navigation Bar | *(insert image)* |
| Hero Section | *(insert image)* |
| Features Section | *(insert image)* |
| Pricing Section | *(insert image)* |
| Testimonials | *(insert image)* |
| Footer | *(insert image)* |
| Blade Components Folder | *(insert image)* |
| GitHub Repository | *(insert image)* |

---

## Design Requirements

This project follows a modern design system inspired by clean, product-focused layouts (Apple, Stripe, Notion, Linear) while maintaining original branding for Morsel Bloom. Spacing and typography remain consistent throughout, the color palette is limited and harmonious, and text/background combinations were checked for sufficient contrast to support accessibility.

---

## Before-and-After Comparison

Screenshots documenting the evolution of the interface are saved in the `documentation/` folder.

**Before:**
- Initial wireframe/early prototype of the layout.
- Basic unstyled structure before Tailwind CSS was applied.

**After:**
- Final polished, fully responsive interface.
- Improved visual hierarchy, spacing, and usability across all sections.

*(Insert before/after images here.)*

---

## Screenshots Folder Checklist

- [ ] Before Design
- [ ] After Design
- [ ] Desktop Layout
- [ ] Tablet Layout
- [ ] Mobile Layout
- [ ] Navigation Bar
- [ ] Hero Section
- [ ] Features Section
- [ ] Pricing Cards
- [ ] Testimonials
- [ ] Footer
- [ ] VS Code Project Structure
- [ ] Blade Components Folder
- [ ] GitHub Repository

---

## Reflection

Building the Morsel Bloom landing page reinforced how much cleaner and faster development becomes with reusable Blade Components and utility-first CSS. Translating a real, existing business into a digital presence also highlighted how responsive design and clear UI decisions directly affect how trustworthy and professional a small business appears online.

---

## Author

Developed as part of **ITST 302 – Client-Server Technologies**, Week 5 Laboratory Activity (Mini Project 04).
