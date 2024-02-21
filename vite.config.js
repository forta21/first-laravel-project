import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/style.css',
                'resources/css/bootstrap.min.css',
                'resources/css/font-awesome.min.css',
                'resources/css/magnific-popup.css',
                'resources/js/app.js',
                'resources/js/jquery.js',
                'resources/js/bootstrap.min.js',
                'resources/js/particles.min.js',
                'resources/js/jquery.parallax.js',
                'resources/js/smoothscroll.js',
                'resources/js/custom.js',
            ],
            refresh: true,
        }),
    ],
});
