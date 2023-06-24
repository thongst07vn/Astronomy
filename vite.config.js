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
<<<<<<< HEAD
                    'resources/css/post.css',
                    'resources/css/constellar.css',
                    'resources/js/constellar.js'
=======
>>>>>>> 3ba2652f966f1b6dac9486bcedbd03b2f3f1a4ea
                ],
            refresh: true,
        }),
    ],
});
