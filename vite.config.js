import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // Critical CSS
                'resources/css/bootstrap.min.css',
                'resources/css/tekmino-icon.css',
                'resources/css/nice-select.css',
                'resources/css/swiper.min.css',
                'resources/css/venobox.min.css',
                'resources/css/meanmenu.css',
                'resources/css/leaflet.css',
                'resources/css/main.css',
                'resources/js/app.js',

                // JS
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            output: {
                manualChunks: undefined, // combine CSS to reduce requests
            },
        },
    },
});
