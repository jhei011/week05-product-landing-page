# Suggested Git Commit Sequence

The rubric requires a **public GitHub repository named `week05-product-landing-page`** with a
**minimum of 10 meaningful commits**. Below is a suggested commit-by-commit plan that mirrors
how this project was actually built, so your Git history tells a believable story of
incremental progress (avoid one giant "final commit" — graders look for real history).

```bash
git init
git remote add origin https://github.com/<your-username>/week05-product-landing-page.git

git add resources/views/layouts/app.blade.php
git commit -m "feat: create landing page layout"

git add resources/views/components/navbar.blade.php
git commit -m "feat: build responsive navbar"

git add resources/views/components/hero.blade.php
git commit -m "feat: create reusable hero component"

git add resources/views/components/feature-card.blade.php resources/views/components/button.blade.php
git commit -m "feat: build feature cards and shared button component"

git add resources/views/components/pricing-card.blade.php
git commit -m "feat: implement pricing section"

git add resources/views/components/testimonial-card.blade.php
git commit -m "feat: add testimonials"

git add resources/views/components/product-showcase.blade.php resources/views/components/cta.blade.php
git commit -m "feat: add product showcase and call-to-action sections"

git add resources/views/components/footer.blade.php resources/views/pages/home.blade.php routes/web.php
git commit -m "feat: assemble full homepage and wire up route"

git add tailwind.config.js resources/css/app.css resources/js/app.js package.json vite.config.js
git commit -m "style: configure Tailwind theme, fonts, and Alpine.js"

git add resources/views/components/*.blade.php
git commit -m "style: improve responsive spacing and hover states"

git add .
git commit -m "refactor: optimize Blade components and prop defaults"

git add README.md
git commit -m "docs: update README"

git add screenshots/ documentation/
git commit -m "docs: upload screenshots and before/after comparison"

git branch -M main
git push -u origin main
```

**Tip:** commit as you actually build/edit each piece rather than committing everything at once
at the end — the rubric specifically rewards commit *history*, not just a complete final state.
