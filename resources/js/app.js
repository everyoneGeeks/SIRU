import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import i18n from './Lang/lang';


// Global Components
import { Head, Link } from '@inertiajs/inertia-vue3'
import AdminDashboardBody from '@/Components/Admin/AdminDashboardBody.vue'

// FontAwesomeIcon
import FontAwesomeIcon from './fontawesome-icons'

// Global Properties
import helper from './Helper/helper';

//const appName = window.document.getElementsByTagName('title')[0] ?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - Siru`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`,
        import.meta.glob('./Pages/**/*.vue')),
    setup({ el, app, props, plugin }) {
        const TheApp = createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(i18n)
            .use(ZiggyVue, Ziggy)
            .component('Link', Link)
            .mixin({
                methods: {
                    asset: function(path) {
                        return import.meta.env.VITE_APP_URL + '/' + path;
                    }
                }
            })
            .component('Head', Head)
            .component('font-awesome-icon', FontAwesomeIcon)
            .component('admin-dashboard-body', AdminDashboardBody)

        TheApp.config.globalProperties.$helper = helper

        TheApp.mount(el)
        return TheApp
    },
});

InertiaProgress.init({ color: '#4B5563' });