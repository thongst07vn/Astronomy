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
                    'resources/css/admin/alert.css',
                    'resources/js/admin/from.js',
                    'resources/js/admin/fromconstellar.js',
                    'resources/css/admin/loginadmin.css',
                    'resources/js/admin/loginadmin.js', 
                    'resources/js/admin/admin.js',
                    'resources/js/admin/alert.js',
                    'resources/css/main.css',
                    'resources/js/app.js',
                    'resources/css/blog.css',
                    'resources/css/post.css',
                    'resources/css/constellar.css',
                    'resources/css/constellardetail.css',
                    'resources/js/constellar.js',  
                    'resources/js/map.js',
                    'resources/css/map.css',
                    'resources/css/planet.css',
                    'resources/css/about.css',

                ],
            refresh: true,
        }),
    ],
});
