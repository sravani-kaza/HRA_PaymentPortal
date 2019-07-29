<template>
<div>
<div class="section">
  <nav>
			<div class="header container">
				<div class="row">
					<div class="col-sm-6 mob-center"><a href="https://paymatrix.in/home/index"><img src="https://s3-ap-southeast-1.amazonaws.com/paymatrixuploads/static/new_login/paymatrix-logo.png" class="main-logo"></a></div>
					<div class="col-sm-6 text-right ">
						<ul class="main-menu">
							<li class="mobposleft"><a href="">Home</a></li>
							<li class="mobposright"><router-link :to="{ name: 'loginform' }">Login</router-link></li>
						</ul>
					</div> 
				</div>     
			</div>
		</nav>
    <div class="logincard">
        <h4 class="text-center logintext">Sign up</h4>
        <div class="form-group">
    <label class="custlbl" for="name">Name:</label>
    <input type="text" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label class="custlbl" for="mobnum">Mobile number:</label>
    <input type="text" class="form-control" id="mobnum">
  </div>
        <div class="form-group">
    <label class="custlbl" for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label class="custlbl" for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="form-group">
    <label class="custlbl" for="pwd">Confirm Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <button type="submit" class="btn btnblu">Sign up</button>
    </div>
</div>
    </div>
</template>

<script>
export default {
  
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
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