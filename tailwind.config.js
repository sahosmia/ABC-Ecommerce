import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: "#1A434E", // Primary color
                    shade: "#3730A3", // Darker shade
                    accent: "#818CF8", // Lighter accent
                },
                secondary: {
                    DEFAULT: "#D2C2F8", // Secondary color
                    shade: "#B45309", // Darker shade
                    accent: "#EFE9FF", // Lighter accent
                },
                neutral: {
                    DEFAULT: "#6B7280", // Neutral color
                    bg: "#F3F4F6", // Background
                    contrast: "#111827", // High contrast
                },
                dynamic: {
                    theme: "#10B981", // Theme color
                    brand: "#3B82F6", // Brand color
                    highlight: "#F59E0B", // Highlight color
                },
                utility: {
                    text: "#374151", // Text color
                    white_background: "#FFFFFF", // Background color
                    light_background: "#EFF0F6", // Background color
                    background: "#F9FAFB", // Background color
                    link: "#2563EB", // Link color
                    hover: "#1E40AF", // Hover color
                    border: "#D1D5DB", // Border color
                    title: "#14142B",
                    label: "#6E7191",
                    line: "#D9DBE9",
                },
            },
        },
        container: {
            center: true,
            padding: "1rem",
        },
    },
    plugins: [],
};
