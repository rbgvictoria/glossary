import Vue from 'vue';
import axios from 'axios';
import store from './store';

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import Glossary from './components/Glossary.vue';

let router = new VueRouter({
  mode: 'history',
  routes: [
    { path: '/', component: Glossary, name: 'home' }
  ],
  scrollBehavior (to, from, savedPosition) {
    return { x: 0, y: 0 }
  }
});

export default router;
