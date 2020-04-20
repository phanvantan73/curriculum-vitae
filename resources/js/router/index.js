import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

export const routes = [{
    path: '/',
    name: 'HOME',
    text: 'HOME',
    component: () => import('@/views/home/index')
  },
  {
    path: '/career',
    name: 'CAREER',
    text: 'CAREER',
    component: () => import('@/views/career/index')
  },
  {
    path: '/work-experience',
    name: 'WORK_EXPERIENCE',
    text: 'WORK EXPERIENCE',
    component: () => import('@/views/work_experience/index')
  }
];

const createRouter = () => new Router({
  mode: 'history',
  scrollBehavior: () => ({
    y: 0
  }),
  routes: routes,
});

const router = createRouter();

export default router;
