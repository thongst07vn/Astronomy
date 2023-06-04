import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                    'resources/css/login.css', 
                    'resources/js/login.js',
                    'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
