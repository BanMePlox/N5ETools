import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/js/condition.js', // Aquí incluyes tus scripts
                'resources/css/app.css',
            ],
            refresh: true,
        }),
    ],
});
