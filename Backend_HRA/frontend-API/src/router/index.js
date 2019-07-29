import Vue from 'vue'
import Router from 'vue-router'
import dashboard from '@/components/dashboard/dashboard'
import form1 from '@/components/mainform/form1'
import form2 from '@/components/mainform/form2'
import form3 from '@/components/mainform/form3'
import page1 from '@/components/dashboard/page1'
import page2 from '@/components/dashboard/page2'
import register from '@/components/register/register'
import home from '@/components/home/home'
import authenticate from '@/components/authenticate/authenticate'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/dashboard',
      name: 'dashboard',
      component:dashboard,
      children:[
        {
          path: '/page1',
          name: 'page1',
          component:page1
        },
        {
          path: '/page2',
          name: 'page2',
          component:page2
        }
      ]
    },
    {
      path: '/form1',
      name: 'form1',
      component:form1
    },
    {
      path: '/form2',
      name: 'form2',
      component:form2
    },
    {
      path: '/form3',
      name: 'form3',
      component:form3
    },
    {
      path: '/register',
      name: 'register',
      component:register
    },
    {
      path: '/',
      name: 'home',
      component:home
    },
    {
      path: '/authenticate',
      name: 'authenticate',
      component: authenticate
    },
  ]
})
