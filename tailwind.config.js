/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  safelist: [
    { pattern: /bg-(chalk|onyx|gold)/ },
    { pattern: /text-(chalk|onyx|gold)/ },
    { pattern: /border-(chalk|onyx|gold)/ },
    { pattern: /ring-(chalk|onyx|gold)/ },
    { pattern: /shadow-(chalk|onyx|gold)/ },
    { pattern: /from-(chalk|onyx|gold)/ },
    { pattern: /to-(chalk|onyx|gold)/ },
    { pattern: /via-(chalk|onyx|gold)/ },
  ],
  theme: {
    extend: {
      colors: {
        // Barbershop palette
        chalk:   "#F5F5F0",        // off-white background
        onyx: {
          DEFAULT: "#1A1A1A",      // near-black primary
          light:   "#2E2E2E",      // slightly lighter for hover states
          muted:   "#4A4A4A",      // muted dark for secondary text
        },
        gold: {
          DEFAULT: "#C9A84C",      // warm gold accent
          dark:    "#A8862E",      // deeper gold for hover
          light:   "#E8C96A",      // light gold tint
        },
        // Keep legacy names mapped so any leftover utility still resolves
        cream:   "#F5F5F0",
        espresso: {
          DEFAULT: "#1A1A1A",
          light:   "#2E2E2E",
        },
        amber: {
          DEFAULT: "#C9A84C",
          dark:    "#A8862E",
        },
      },
      fontFamily: {
        sans:  ["Inter", "ui-sans-serif", "system-ui"],
        serif: ["Playfair Display", "ui-serif", "Georgia"],
      },
    },
  },
  plugins: [],
}
