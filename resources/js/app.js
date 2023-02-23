import './bootstrap';
//importacion del vue

import { createApp } from 'vue';
//app absico
import App from './App.vue';
createApp(App).mount("#unapp");
//carrousel base
//manuales

import.meta.glob([
    '../images/**'
]);
