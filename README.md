# Gunting Master Barbershop — Product Landing Page

**Week 05 Assignment — MP04**  
A professional product landing page for **Gunting Master Barbershop**, located in Lumban, Laguna, Philippines.  
Built with Laravel, Blade Components, Tailwind CSS, and Alpine.js.

---

## Project Title

**Gunting Master Barbershop Landing Page**

---

## Introduction

This project is a full conversion of an existing coffee business landing page into a professional barbershop landing page for **Gunting Master Barbershop** in Lumban, Laguna, Philippines.

The original coffee landing page (Ember & Oak Coffee Co.) served as the **BEFORE** design. The converted barbershop page is the **AFTER** design. All coffee-specific content, terminology, colors, and design decisions were replaced with a premium barbershop aesthetic — while keeping the same Laravel + Blade + Tailwind CSS architecture intact.

The project demonstrates the ability to adapt an existing web project to a completely different business context while maintaining clean component architecture, responsive design, and professional UI standards.

---

## Objectives

- Convert an existing Laravel landing page from one business domain (coffee) to another (barbershop)
- Maintain and improve the existing Blade component architecture
- Apply a new premium barbershop color palette and typography
- Ensure fully responsive layout across mobile, tablet, and desktop
- Use only verified or clearly-marked placeholder business information
- Follow a meaningful commit history documenting each major conversion step

---

## Responsive Web Design

The landing page is fully responsive across all screen sizes:

| Breakpoint | Behavior |
|---|---|
| Mobile (`< 640px`) | Single-column layout, stacked buttons, collapsible mobile nav |
| Tablet (`640px – 1024px`) | 2-column service grid, 2-column footer |
| Desktop (`> 1024px`) | Full multi-column layout, sticky navbar, side-by-side hero |

Key responsive techniques used:
- Tailwind CSS responsive prefixes (`sm:`, `md:`, `lg:`)
- CSS Grid and Flexbox for layout
- `max-w-*` containers to prevent content from over-stretching on large screens
- Mobile-first approach throughout
- `overflow-hidden` on the hero to prevent horizontal scroll on small screens

---

## Tailwind CSS

Tailwind CSS v3 is used throughout the project with a custom configuration:

```js
// tailwind.config.js
colors: {
  chalk:  "#F5F5F0",        // off-white background
  onyx:   { DEFAULT: "#1A1A1A", light: "#2E2E2E", muted: "#4A4A4A" },
  gold:   { DEFAULT: "#C9A84C", dark: "#A8862E",  light: "#E8C96A" },
}
fontFamily: {
  sans:  ["Inter", ...],
  serif: ["Playfair Display", ...],
}
```

Tailwind utilities used throughout:
- **Spacing**: `px-6`, `py-20`, `gap-8`, `mb-14`
- **Typography**: `font-serif`, `text-4xl`, `tracking-widest`, `leading-relaxed`
- **Colors**: Custom palette (`bg-onyx`, `text-gold`, `bg-chalk`)
- **Effects**: `shadow-xl`, `rounded-2xl`, `ring-1`, `backdrop-blur`
- **Responsive**: `sm:grid-cols-2`, `lg:grid-cols-3`, `md:hidden`
- **Hover states**: `hover:-translate-y-1`, `hover:shadow-xl`, `hover:text-onyx`
- **Transitions**: `transition-all`, `duration-200`

---

## Blade Components

All components are stored in `resources/views/components/` and are reused throughout the home page.

| Component | Purpose |
|---|---|
| `navbar.blade.php` | Sticky navigation with logo, links, CTAs, mobile menu |
| `hero.blade.php` | Full hero section with headline, description, CTAs, floating badges |
| `feature-card.blade.php` | Reusable service card with icon, title, description |
| `pricing-card.blade.php` | Pricing/package card with featured state support |
| `testimonial-card.blade.php` | Client review card with rating stars and avatar |
| `cta.blade.php` | Full-width call-to-action section |
| `footer.blade.php` | Footer with brand, links, contact info, social icons |
| `button.blade.php` | Reusable button component with `primary`, `secondary`, `ghost` variants |
| `product-showcase.blade.php` | Visual showcase section with main image, side image, and highlights list |

All components accept `@props` for customization and are called via `<x-component-name />` syntax in `pages/home.blade.php`.

---

## UI Design

**Color Palette:**
- Background: `#F5F5F0` (chalk — warm off-white)
- Primary text/dark: `#1A1A1A` (onyx — near-black)
- Accent: `#C9A84C` (gold — warm barbershop gold)

**Typography:**
- Headings: Playfair Display (serif) — classic, premium feel
- Body: Inter (sans-serif) — clean and readable

**Design Decisions:**
- Dark `#1A1A1A` navbar on scroll replaced coffee's warm tones with a sharp, professional look
- Gold accent replaces warm amber — fits the premium barbershop brand
- Floating badge on hero adds depth and visual interest
- Barber pole–inspired vertical line accents in the CTA section
- Placeholder testimonials clearly marked to avoid presenting fake reviews as real
- All placeholder prices show "Contact us for current pricing" rather than invented numbers

---

## Folder Structure

```
week05-product-landing-page/
├── documentation/
│   ├── before-after-notes.md
│   ├── before-wireframe.html
│   ├── git-commit-guide.md
│   └── linkedin-post.md
├── public/
│   └── images/
│       └── logo.png              ← Place Gunting Master logo here
├── resources/
│   ├── css/
│   │   └── app.css               ← Tailwind directives
│   ├── js/
│   │   └── app.js                ← Alpine.js entry
│   └── views/
│       ├── components/
│       │   ├── navbar.blade.php
│       │   ├── hero.blade.php
│       │   ├── feature-card.blade.php
│       │   ├── product-showcase.blade.php
│       │   ├── pricing-card.blade.php
│       │   ├── testimonial-card.blade.php
│       │   ├── cta.blade.php
│       │   ├── footer.blade.php
│       │   └── button.blade.php
│       ├── layouts/
│       │   └── app.blade.php     ← Main HTML shell
│       └── pages/
│           └── home.blade.php    ← Page that assembles all components
├── routes/
│   └── web.php                   ← Single route: GET / → pages.home
├── screenshots/
│   └── README.md
├── preview.html                  ← Standalone static preview (no server needed)
├── tailwind.config.js
├── vite.config.js
└── package.json
```

---

## Screenshots

Screenshots should be taken and placed in the `screenshots/` folder.

**Required screenshots:**
- `before-desktop.png` — Original coffee landing page
- `after-desktop.png` — Gunting Master desktop view
- `after-tablet.png` — Tablet view (~768px)
- `after-mobile.png` — Mobile view (~375px)
- `section-navbar.png` — Navbar component
- `section-hero.png` — Hero section
- `section-services.png` — Services / feature cards
- `section-showcase.png` — Barbershop showcase
- `section-pricing.png` — Pricing cards
- `section-testimonials.png` — Testimonial cards
- `section-footer.png` — Footer
- `blade-components.png` — Component file structure in VS Code
- `github-repo.png` — GitHub repository with commit history

---

## Problems and Solutions

| Problem | Solution |
|---|---|
| Coffee color palette didn't suit a barbershop | Replaced with onyx/chalk/gold palette — professional and premium |
| Fraunces font felt warm and casual | Switched to Playfair Display — classic serif with authority |
| Pricing data was unknown | Used "Contact us for current pricing" placeholders instead of invented numbers |
| No verified testimonials available | Clearly marked all reviews as placeholders to be replaced with real ones |
| Coffee components had hardcoded content | Extracted all text to `@props` so each component is reusable and data-driven |
| Mobile nav links didn't close the menu on tap | Added `@click="open=false"` to each mobile link |

---

## Reflection

Converting an existing website rather than building from scratch taught a different set of skills — understanding someone else's architecture, identifying what to keep versus replace, and making design decisions that fully transform the identity of a page while preserving its structural integrity.

The biggest challenge was ensuring the page felt like a genuine barbershop website and not just a coffee template with new colors. This required rethinking every section: the hero's visual language, the services offered, the tone of the copy, and the color choices all had to reinforce the same brand identity.

Using placeholder content responsibly — clearly marking unverified prices and testimonials — was an important design decision that maintains honesty while still producing a complete, presentable design.

---

## How to Run (Laravel)

> Requires PHP 8.1+, Composer, and Node.js

```bash
# 1. Install PHP dependencies (requires composer.json from a full Laravel install)
composer install

# 2. Set up environment
cp .env.example .env
php artisan key:generate

# 3. Install JS dependencies and build
npm install

# 4. Run both servers (two terminals)
php artisan serve        # Terminal 1
npm run dev              # Terminal 2

# 5. Open browser at http://127.0.0.1:8000
```

**Quick preview (no server needed):**  
Just open `preview.html` directly in your browser.

---

*© 2026 Gunting Master Barbershop. Lumban, Laguna, Philippines.*
