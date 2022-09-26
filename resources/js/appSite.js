import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { createI18n } from 'vue-i18n';
import ar from './Lang/Admin/ar.js';

console.log('site');

//const appName = window.document.getElementsByTagName('title')[0] ? .innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - 'test'`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`,
        import.meta.glob('./Pages/**/*.vue')),
    setup({ el, app, props, plugin }) {
        const i18n = createI18n({
            locale: 'ar',
            messages: { ar: ar }
        });
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(i18n)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
