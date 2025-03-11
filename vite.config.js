import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/tables/user-info-table.js'
            ],
            refresh: true,
        }),
    ],
    server: {
        host: 'localhost',
        port: 4000,
        strictPort: true,
    },
});
