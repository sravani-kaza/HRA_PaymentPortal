import Vue from 'vue'
import Router from 'vue-router'
import dashboard from '@/components/userdashboard/dashboard/dashboard'
import admin_dashboard from '@/components/admindashboard/dashboard/dashboard'
import form_main from '@/components/userdashboard/mainform/form_main'
import admin_page1 from '@/components/admindashboard/dashboard/page1'
import admin_page2 from '@/components/admindashboard/dashboard/page2'
import landingadmin from '@/components/admindashboard/dashboard/admin-landing'
import receiptadmin from '@/components/admindashboard/dashboard/receipts'
import agreementadmin from '@/components/admindashboard/dashboard/agreements'
import profileadmin from '@/components/admindashboard/dashboard/admin-profile'
import reportadmin from '@/components/admindashboard/dashboard/reports'
import page1 from '@/components/userdashboard/dashboard/page1'
import page2 from '@/components/userdashboard/dashboard/page2'
import transactionview from '@/components/userdashboard/transactions/transactionview'
import noproperty from '@/components/userdashboard/property/noproperty'
import propertydetails from '@/components/userdashboard/property/propertydetails'
import propertysummary from '@/components/userdashboard/property/propertysummary'
import editproperty from '@/components/userdashboard/editform/editproperty'
import editaccount from '@/components/userdashboard/editform/editaccount'
import editagreement from '@/components/userdashboard/editform/editagreement'
import profile from '@/components/userdashboard/profile/userprofile'
import login from '@/components/loginandsignup/login'
import signup from '@/components/loginandsignup/signup'


Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'dashboard_home',
      component: dashboard
    },
    {
      path: '/login',
      name: 'login',
      component: login
    },
    {
      path: '/signup',
      name: 'signup',
      component: signup
    },
    {
      path: '/dashboard/:id?',
      name: 'dashboard',
      component:dashboard,
      children:[
        {
          path: '/noproperty',
          name: 'noproperty',
          component:noproperty
        },
        {
          path: '/propertydetails',
          name: 'propertydetails',
          component:propertydetails
        },
        {
          path: '/propertysummary',
          name: 'propertysummary',
          component:propertysummary
        },
        {
          path: '/transactionview/:id?',
          name: 'transactionview',
          component:transactionview
        },
        {
          path: '/userprofile',
          name: 'profile',
          component:profile
        },
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
      path: '/admin',
      name: 'dashboard-admin',
      component:admin_dashboard,
      children:[
        {
          path: '/page1',
          name: 'admin_page1',
          component:admin_page1
        },
        {
          path: '/page2',
          name: 'admin_page2',
          component:admin_page2
        },
        {
          path: '/admin-landing',
          name: 'landingadmin',
          component:landingadmin
        },
        {
          path: '/receipts',
          name: 'receiptadmin',
          component:receiptadmin
        },
        {
          path: '/agreements',
          name: 'agreementadmin',
          component:agreementadmin
        },
        {
          path: '/reports',
          name: 'reportadmin',
          component:reportadmin
        },
        {
          path: '/admin-profile',
          name: 'profileadmin',
          component:profileadmin
        },
      ]
    },
    {
      path: '/form_main',
      name: 'form_main',
      component:form_main
    },
    {
      path: '/editproperty',
      name: 'editproperty',
      component:editproperty
    },
    {
      path: '/editaccount',
      name: 'editaccount',
      component:editaccount
    },
    {
      path: '/editagreement',
      name: 'editagreement',
      component:editagreement
    },
  ]
})
