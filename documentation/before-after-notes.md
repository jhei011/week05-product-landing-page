# Before-and-After Comparison

This folder documents the evolution of the Ember & Oak Coffee Co. landing page interface,
as required by the MP04 rubric.

## Before — `before-wireframe.html`
Open this file directly in a browser. It is a deliberately unstyled, grayscale layout using
dashed borders and placeholder labels only. It represents the initial wireframe / basic layout
stage, before any Tailwind design system, color palette, typography, or imagery was applied.

**Screenshot this file and save it as:** `documentation/before-desktop.png`

## After — `preview.html` (project root) or the live Laravel app
This is the final, polished, fully responsive interface: Fraunces/Inter typography, the warm
espresso/amber/cream color palette, shadows, rounded corners, hover states, and real section
imagery. Open it in a browser (desktop width, then resize to tablet/mobile, or use DevTools
device emulation) and capture:

- `documentation/after-desktop.png`
- `documentation/after-tablet.png`
- `documentation/after-mobile.png`

## How to capture the screenshots
1. Open `preview.html` (or `php artisan serve` and visit the running app) in Chrome/Edge.
2. Press `F12` → toggle Device Toolbar (`Ctrl+Shift+M`) to switch between Desktop (1440px),
   Tablet (768px, e.g. iPad), and Mobile (375px, e.g. iPhone SE) widths.
3. Use the browser's built-in "Capture full size screenshot" (in DevTools' device toolbar
   menu) or a screenshot extension to save each view.
4. Repeat the same steps for `before-wireframe.html` to get the "before" shot.
5. Place all resulting PNG/JPG files in this `documentation/` folder and reference them in
   `README.md`.

## What changed (fill this in with your own observations)
- Replaced placeholder boxes with a defined color system (`cream`, `espresso`, `amber`).
- Added a proper typographic hierarchy using Fraunces (serif, headings) and Inter (sans, body).
- Converted static rows of boxes into responsive CSS Grid/Flexbox layouts with breakpoints.
- Added hover states, shadows, and rounded corners per the Tailwind requirements.
- Replaced the single unstyled feature/pricing/testimonial blocks with reusable Blade
  Components (`feature-card`, `pricing-card`, `testimonial-card`).
- Added a mobile navigation menu (Alpine.js toggle) since the wireframe had no mobile state.
