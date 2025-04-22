import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // Resources paths
                'resources/sass/app.scss',
                'resources/css/app.css',
                'resources/js/app.js',
                
                // Resources assets js file paths
                'public/assets/js/advanced-form-elements',
                'public/assets/js/apexcharts',
                'public/assets/js/blog-post',
                'public/assets/js/calendar-events',
                'public/assets/js/calendar',
                'public/assets/js/carousel',
                'public/assets/js/chart.chartjs',
                'public/assets/js/chart.echarts',
                'public/assets/js/chart.flot',
                'public/assets/js/chart.morris',
                'public/assets/js/chart.peity',
                'public/assets/js/chart.sparkline',
                'public/assets/js/chat',
                'public/assets/js/check-all-mail',
                'public/assets/js/checkout-jquery-steps',
                'public/assets/js/contacts',
                'public/assets/js/crypto-buysell',
                'public/assets/js/crypto-dashboard',
                'public/assets/js/crypto-exchange',
                'public/assets/js/crypto-market',
                'public/assets/js/custom',
                'public/assets/js/custom1',
                'public/assets/js/form-editor',
                'public/assets/js/form-elements',
                'public/assets/js/form-layouts',
                'public/assets/js/form-validation',
                'public/assets/js/handleCounter',
                'public/assets/js/index',
                'public/assets/js/left-menu',
                'public/assets/js/mapelmaps',
                'public/assets/js/modal',
                'public/assets/js/navigation',
                'public/assets/js/picker',
                'public/assets/js/popover',
                'public/assets/js/select2',
                'public/assets/js/summernote',
                'public/assets/js/table-data',
                'public/assets/js/themeColors',
                'public/assets/js/timline',
                'public/assets/js/tooltip',
                'public/assets/js/vector-map',
                'public/assets/js/widgets',
                'public/assets/js/switcher',
            ],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
              {
                src: (['resources/assets/img/', 'resources/assets/plugins/', 'resources/assets/landing/', 'public/assets/js/sticky.js', 
                'public/assets/js/chart.flot.sampledata.js', 'public/assets/js/dashboard.sampledata.js', 'public/assets/js/jquery.vmap.sampledata.js',
                'public/assets/js/form-wizard.js'
            ]),
                dest: 'assets/'
              }
            ]
          }),
        {
            name: 'blade',
            handleHotUpdate({ file, server }) {
                if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    });
                }
            },
        }
    ],
    build: {
        chunkSizeWarningLimit: 1600,
    },
});
