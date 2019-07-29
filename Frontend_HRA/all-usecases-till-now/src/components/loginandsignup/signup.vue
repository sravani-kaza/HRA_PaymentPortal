<template>
<div>
<div class="section" id="signup">
  <nav>
			<div class="header container">
				<div class="row">
					<div class="col-sm-6 mob-center"><a href="https://paymatrix.in/home/index"><img src="https://s3-ap-southeast-1.amazonaws.com/paymatrixuploads/static/new_login/paymatrix-logo.png" class="main-logo"></a></div>
					<div class="col-sm-6 text-right ">
						<ul class="main-menu">
							<li class="mobposleft"><a href="">Home</a></li>
							<li class="mobposright"><router-link :to="{ name: 'login' }">Login</router-link></li>
						</ul>
					</div> 
				</div>     
			</div>
		</nav>
    <div class="logincard">
        <h4 class="text-center logintext">Sign up</h4>
        <div class="form-group">
    <label class="custlbl" for="name">Name:</label>
    <p>
        <input type="text" data-vv-validate-on="blur" name="name" v-validate="'required|alpha_spaces'" v-model.trim="name" class="form-control sign" :class="{'invalid':errors.has('name')}" id="name">
        <!--<span class="errormsg" v-show="errors.has('email')">{{ errors.first('email') }}</span>-->
    </p>
  </div>

  <div class="form-group">
    <label class="custlbl" for="phone_no">Mobile number:</label>
    <p>
        <input type="text" data-vv-validate-on="blur" name="phone_no" v-validate="'required|numeric|digits:10'" v-model.trim="phone_no" class="form-control sign" :class="{'invalid':errors.has('phone_no')}" id="phone_no">
       <!-- <span class="errormsg" v-show="errors.has('phone_no')">{{ errors.first('phone_no') }}</span>-->
    </p>
  </div>

        <div class="form-group">
    <label class="custlbl" for="email">Email address:</label>
    <p>
        <input type="email" data-vv-validate-on="blur" name="email" v-validate="'required|email'" v-model.trim="email" class="form-control sign" :class="{'invalid':errors.has('email')}" id="email">
      <!--  <span class="errormsg" v-show="errors.has('email')">{{ errors.first('email') }}</span> -->
    </p>
  </div>

  <div class="form-group">
    <label class="custlbl" for="pwd">Password:</label>
    <p>
        <input type="password" data-vv-validate-on="blur" name="password" v-validate="'required'" v-model.trim="password" class="form-control sign" :class="{'invalid':errors.has('password')}" id="password">
        <span class="errormsg" v-show="errors.has('password')">{{ errors.first('password') }}</span>
    </p>
  </div>

  <div class="form-group">
    <label class="custlbl" for="pwd">Confirm Password:</label>
    <p>
        <input type="password" data-vv-validate-on="blur" name="password_confirmation" v-validate="{ required:true , is: password }" v-model.trim="password_confirmation" class="form-control sign" :class="{'invalid':errors.has('password_confirmation')}" id="password_confirmation">
        <span class="errormsg" v-show="errors.has('password_confirmation')">{{ errors.first('password_confirmation') }}</span>
    </p>
  </div>

  <button type="submit" class="btn btnblu" v-on:click="submithandle()">Sign up</button>
    </div>
</div>
    </div>
</template>

<script>
import {Validator} from 'vee-validate'
import axios from 'axios'
export default {
  data(){
    return {   
        name:'',
        email:'',
        phone_no:'',
        password:'',
        password_confirmation:''
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
            {   console.log(typeof parseInt(this.phone_no))
                axios.post('http://127.0.0.1:8000/api/auth/signup',{
                    'name':this.name,
                    'email':this.email,
                    'phone_no':parseInt(this.phone_no),
                    'password':this.password,
                    'password_confirmation':this.password_confirmation 
                })   
                .then((response) => {
                    //console.log(response);
                  if(response.statusText=="Created")
                {
                    self.$router.push('/login');
                 }
                  else
                    alert("Error Signing In");
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
    margin: 10px 0px 10px;
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
    margin-bottom: 16px;
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