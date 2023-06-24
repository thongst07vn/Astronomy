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
                    'resources/js/avt.js',
                    'resources/css/admin/admin.css',
                    'resources/js/admin/from.js',
                    'resources/css/admin/loginadmin.css',
                    'resources/js/admin/loginadmin.js', 
                    'resources/js/admin/admin.js',
                    'resources/css/main.css',
                    'resources/js/app.js',
                    'resources/css/blog.css',
                    'resources/css/post.css',
                    'resources/css/constellar.css',
                    'resources/js/constellar.js',
                    'resources/js/bootstrap.js'

                ],
            refresh: true,
        }),
    ],
});
