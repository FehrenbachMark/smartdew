/** @type {import('tailwindcss').Config} */
module.exports = {
  //add everything in root and views folder
  content: ["./src/**/*.{js,jsx,ts,tsx}", "index.php", "views/**/*.php"],
  theme: {
    extend: {
      colors: {
        primary: {
          100: "#F3F4F6",
          200: "#E5E7EB",
          300: "#D1D5DB",
          400: "#9CA3AF",
          // onle primary 500 is used
          500: "#0DE6AC",
          600: "#4B5563",
          700: "#374151",
          800: "#1F2937",
          900: "#111827",
        },
        secondary: {
          100: "#F9FAFB",
          200: "#F3F4F6",
          300: "#E5E7EB",
          400: "#D1D5DB",
          // 500: "#9CA3AF",
          // only secondary 500 is used
          500: "#b8f8f5",
          600: "#6B7280",
          700: "#4B5563",
          800: "#374151",
          900: "#1F2937",
        },
        accent: {},
      },
      screens: {
        xs: "0px",
        sm: "640px",
        md: "768px",
        lg: "1024px",
        xl: "1280px",
        "2xl": "1536px",
        "3xl": "1920px",
        "4xl": "2560px",
      },
    },
  },
  plugins: [],
};
