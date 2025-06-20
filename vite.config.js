import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig(({ mode }) => {
  // load VITE_ prefixed variables
  const env = loadEnv(mode, process.cwd(), 'VITE_')

  return {
    plugins: [
      laravel({
        input: ['resources/css/app.css', 'resources/js/app.js'],
        refresh: true,
      }),
      tailwindcss(),
    ],

    // Use port from env—or fallback to 5173
    server: {
      port: Number(env.VITE_PORT) || 5173,
      strictPort: true, // exit if port busy
    },
  }
})

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: ['resources/css/app.css', 'resources/js/app.js'],
//             refresh: true,
//         }),
//         tailwindcss(),
//     ],
//     server: {
//         port: 5174,       // ← replace with your preferred port
//         strictPort: true, // optional: makes Vite error out if port is taken
//     },
// });
