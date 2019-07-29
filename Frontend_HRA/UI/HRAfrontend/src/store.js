import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
import VueAxios from 'vue-axios'
Vue.use(Vuex)
Vue.use(VueAxios,axios)

export const store = new Vuex.Store({
	state: {
		Property_detail:[],
		Landlord_detail:[],
		Document_detail:[],
		details:[]
	},
	mutations:{
		merge(state){

			state.details=state.details.concat(store.Property_detail)
			state.details=state.details.concat(store.Landlord_detail)
			state.details=JSON.stringify(state.details.concat(store.Document_detail))
			alert(state.details)
		}

	},
	actions:
	{
		makerequest(state){
			axios.post('http:localhost:8000/api/create',state.details)
				.then((response) => alert(response))
				.catch((error) => alert(error))
		}
	}
})