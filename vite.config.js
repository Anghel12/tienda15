import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    vue(), // agrega el plugin de Vue
    laravel({
      input: [
        'resources/css/app.css',
        'resources/js/app.js',
      ],
      refresh: [
        ...refreshPaths,
        'app/Http/Livewire/**',
      ],
    }),
  ],
});
