import {
  defineConfig
} from 'vite'
import vue from '@vitejs/plugin-vue'
import liveReload from 'vite-plugin-live-reload'
const {
  resolve
} = require('path')

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [
    vue({
      template: {
        transformAssetUrls: {
          // The Vue plugin will re-write asset URLs, when referenced
          // in Single File Components, to point to the Laravel web
          // server. Setting this to `null` allows the Laravel plugin
          // to instead re-write asset URLs to point to the Vite
          // server instead.
          base: null,

          // The Vue plugin will parse absolute URLs and treat them
          // as absolute paths to files on disk. Setting this to
          // `false` will leave absolute URLs un-touched so they can
          // reference assets in the public directory as expected.
          includeAbsolute: false,
        },
      },
    }),

    // As the app is SPA
    // We only needs to listen the changes on index.vue.php file for reloading
    // Feel free to edit this part to met your needs
    liveReload(__dirname + '/../application/views/vue/vueTemplate.php')
  ],

  root: 'resources',
  base: './',

  build: {
    // output dir for production build
    outDir: resolve(__dirname, '../public/build'),
    emptyOutDir: true,

    // emit manifest so PHP can find the hashed files
    manifest: true,

    // esbuild target
    target: 'es2018',

    // our entry
    rollupOptions: {
      input: '/main.js'
    }
  },

  server: {
    // required to load scripts from custom host
    cors: true,

    // we need a strict port to match on PHP side
    // change freely, but update on PHP to match the same port
    strictPort: true,
    port: 3000
  },

  // required for in-browser template compilation
  // https://v3.vuejs.org/guide/installation.html#with-a-bundler
  resolve: {
    alias: {
      vue: 'vue/dist/vue.esm-bundler.js',
      '@': resolve(__dirname, './resources'),
      'components': resolve(__dirname + '/resources/js/components'),
      'helpers': resolve(__dirname + '/resources/js/components/Helpers'),
    }
  }
})