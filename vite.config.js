import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                /*'resources/css/bootstrap.min.css', // Ruta al archivo CSS de Bootstrap
                'resources/js/bootstrap.min.js',   // Ruta al archivo JS de Bootstrap
                'resources/css/reiki2.css',        // Otros archivos CSS personalizados
                'resources/js/sanitize.js',        // Otros archivos JS personalizados
                'resources/css/custom.css',*/
                'public/css/bootstrap.min.css', // Ruta al archivo CSS de Bootstrap
                'public/js/bootstrap.min.js',   // Ruta al archivo JS de Bootstrap
                'public/css/reiki2.css',        // Otros archivos CSS personalizados
                'public/js/sanitize.js',        // Otros archivos JS personalizados
                'public/css/custom.css',
            ],
            refresh: true,
        }),
    ],
});
