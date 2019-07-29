import Vue from 'vue'
import Router from 'vue-router'
import dashboard from '@/components/dashboard/dashboard'
import form1 from '@/components/mainform/form1'
import form2 from '@/components/mainform/form2'
import form3 from '@/components/mainform/form3'
import page1 from '@/components/dashboard/page1'
import page2 from '@/components/dashboard/page2'
import transactionview from '@/components/transactions/transactionview'
import noproperty from '@/components/property/noproperty'
import propertydetails from '@/components/property/propertydetails'
import propertysummary from '@/components/property/propertysummary'
import editproperty from '@/components/editform/editproperty'
import editaccount from '@/components/editform/editaccount'
import editagreement from '@/components/editform/editagreement'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
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
          path: '/transactionview',
          name: 'transactionview',
          component:transactionview
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
