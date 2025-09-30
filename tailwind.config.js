import { defineConfig } from '@tailwindcss/vite'

export default defineConfig({
    content: [
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './app/View/Components/**/*.php',
        './storage/framework/views/*.php',
    ],
})

