<template>
<div>
<div class="section" id="login">
  <nav>
			<div class="header container">
				<div class="row">
					<div class="col-sm-6 mob-center"><a href="https://paymatrix.in/home/index"><img src="https://s3-ap-southeast-1.amazonaws.com/paymatrixuploads/static/new_login/paymatrix-logo.png" class="main-logo"></a></div>
					<div class="col-sm-6 text-right ">
						<ul class="main-menu">
							<li class="mobposleft"><a href="">Home</a></li>
							<li class="mobposright"><router-link :to="{ name: 'signup' }">Sign up</router-link></li>
						</ul>
					</div> 
				</div>     
			</div>
		</nav>
    <div class="logincard">
        <h4 class="text-center logintext">Login</h4>
        <div class="form-group">
    <label class="custlbl" for="email">Email address:</label>
    <p>
        <input type="email" data-vv-validate-on="blur" name="email" v-validate="'email'" v-model.trim="logindet.email" class="form-control log" id="email" :class="{'invalid':errors.has('email')}">
        <span class="errormsg" v-show="errors.has('email')">{{ errors.first('email') }}</span>
    </p>
</div>
  <div class="form-group">
    <label class="custlbl" for="pwd">Password:</label>
    <p>
        <input type="password" data-vv-validate-on="blur" v-validate="'required'" name="password" v-model.trim="logindet.password" class="form-control log" id="pwd" :class="{'invalid':errors.has('password')}">
        <span class="errormsg" v-show="errors.has('password')">{{ errors.first('password') }}</span>
    </p>
  </div>
  <div class="checkbox">
    <label><input v-model="logindet.remember_me" type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btnblu" v-on:click="submithandle()">Login</button>
    </div>
</div>
    </div>
</template>

<script>
import {localstore} from '../../main.js'
import axios from 'axios'  
import {Validator} from 'vee-validate'
export default {
 data(){
    return {
        logindet:{     
            email:'',
            password:'',
            remember_me:false
        }
    }
 },
 methods:{
    submithandle()
    {
        let self = this;
        /*var x = this.$el.querySelector('#login');
        var valid = true, y=[], i=0;

        this.$validator.validate('email', this.logindet.email);
        this.$validator.validate('password', this.logindet.password);

        y = x.querySelectorAll('.log');

        for(i=0; i<y.length;i++){
        if(y[i].value == "" || y[i].classList.contains('invalid')){
          valid = false;
            }
        }

        if(!valid || !this.filevalid || !this.filevalid_format)
        {
                alert("Correct the errors");
                return false;
        }
        else*/
            {       
                 
                axios.post('http://127.0.0.1:8000/api/auth/login',{
                    'email':this.logindet.email,
                    'password':this.logindet.password,
                    'remember_me':this.logindet.remember_me })   
                .then((response) => {
                    //console.log(response);
                  if(response.status==200)
                {
                    localstore.user.token = response.data.access_token;
                    localstore.user.user_id = response.data.user_id;
                    localstore.details.token = response.data.access_token;
                    localstore.details.user_id = response.data.user_id;
                    localstore.user.name = response.data.name;
                    localstore.user.mobile = response.data.phone_no;
                    localstore.user.email= response.data.email;
                    localStorage.setItem('name',response.data.name);
                    localStorage.setItem('token',response.data.access_token);
                    localStorage.setItem('user_id',response.data.user_id);
                    localStorage.setItem('email',response.data.email);
                    localStorage.setItem('mobile',response.data.phone_no);
                    console.log(JSON.stringify(localStorage));
                    self.$router.push('/dashboard/'+localstore.user.user_id);
                 }
                  else
                    alert("Error Logging In");
               })
               .catch((error) => alert(error)) 
            }
    }
}
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
input.invalid{
  border: 1px solid red !important;
}
.errormsg {
  color: red
}
.section {
  font-family: 'Roboto Slab', serif;
  font-weight: 500;
  font-size: 2em;
  color: #fff;
  box-sizing: border-box;
  width: 100%;
  position: relative;
  float: left;
  text-align: center;
}
.section:nth-child(1) {
  height: 100vh;
  /* line-height: 100vh; */
      background: linear-gradient(rgba(0, 0, 0, .5) 0, rgba(0, 0, 0, .6) 100%), url("http://magdeleine.co/wp-content/uploads/2014/10/14979299068_4d3bdde60c_o-1400x581.jpg");
  /* background: url("http://magdeleine.co/wp-content/uploads/2014/10/14979299068_4d3bdde60c_o-1400x581.jpg"); */
  background-size: cover;
}
.main-menu {
    list-style: none;
}
.main-logo {
    padding-top: 12px;
    padding-bottom: 12px;
}
.main-menu li {
    display: inline-block;
    padding: 0px 20px 10px;
        font-size: 14px;
    font-weight: 400;
}
.main-menu li a {
    color: #fff;
    text-decoration: none;
}
.mob-center{
  text-align: left;
}
.logincard{
    max-width: 350px;
    padding: 15px;
    margin: 0px auto;
    background: #ffffff;
    border-radius: 5px;
    margin-top: 15px;
}

.logintext{
      color: #0071bc;
    margin: 10px 0px 18px;
    font-size: 30px;
    font-weight: 400;

}
.custlbl{
      display: block;
    font-size: 13px;
    color: #333;
    font-weight: 400;
    font-family: roboto;
    text-align: left;
        font-family: Roboto,sans-serif;
}
.checkbox input, .radio input {
    display: block !important;
}
.checkbox , .radio  {
    display: block !important;
    text-align: left;
    padding-left: 10px;
}
.form-group {
    margin-bottom: 20px;
}
.btnblu, .btnblu:active, .btnblu:focus, .btnblu:hover{
  background: #0071bc;
  border: #0071bc;
  color: #fff;
      margin: 10px 0px;
    width: 64%;
}
@media only screen and (max-width: 767px){
  .mob-center{
    text-align: center;
  }
  .mobposleft {
    float: left;
}
.mobposright {
    float: right;
}
.main-menu li {
    padding: 0;
}
.main-menu {
    padding: 0;
}
}


</style>