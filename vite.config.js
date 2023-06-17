import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                    'resources/css/login.css', 
                    'resources/js/login.js',
                    'resources/css/forgot.css',
                    'resources/js/forgot.js',
                    'resources/css/admin/admin.css',
                    'resources/css/admin/loginadmin.css', 
                    'resources/js/admin/admin.js',
                    'resources/css/main.css',
                    'resources/js/app.js',
                    'resources/css/blog.css'
                ],
            refresh: true,
        }),
    ],
});
