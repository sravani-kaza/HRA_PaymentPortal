<template>
<div>
    <div class="mar0_15">
    <span class="fonweigh700" style="float:right;"><a>X</a></span>
    <h4 class="fonweigh700">Authenticate</h4>
    <hr style="border-color:#EEEEEE;">
    </div>
<form class="login" @submit.prevent="login">
<div class="mainfomlayout">
    <div class="row" style="margin-top:10px;font-family: 'Roboto', sans-serif;">
         <div class="hrafom1">
        <h4 style="margin: 0px 15px 20px;">User account details:</h4>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm"> User name</label>
                        <input required v-model="username" type="text" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group custrespformgrop">
                    <label class="lblcustm"> Password</label>
                    <input required v-model="password" type="password" name="pwd" class="form-control" minlength=6 >
            </div>
        </div>
        
        <div class="row marzero0" style="margin-bottom:20px;">
            <div class="maxbtnwid pull-right">
            <router-link :to="{ name: 'dashboard' }"><div class="col-xs-6"><button type="button" class="btn btn-info custbtnn">Submit</button></div></router-link>
            </div>
        </div>
    </div>
    </div>
     <hr style="border-color:#EEEEEE;">
    <p style="font-size:12px;color:#B0BEC5;text-align:center;">© Copyright 2015-2018 Paymatrix. All Rights Reserved.</p>
</div>
</form>
</div>
</template>

<script>
export default {
  
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
.custback{
    color: #546E7A;
    font-weight: 600;
}
.lblcustm{
    font-weight: 400;
    color: #536771;
}
.clrlitegry{
    color: #B0BEC5;
}

.mar05{
    margin: 0px 5px;
}
.cuspointer{
    cursor: pointer;
}
.modal{
        background: rgba(0,0,0,0.4);
}
.boxul{
    padding-left: 10px;
    list-style: none;
}
/* custom radio button */
/* TODO change the cursor */
/* Hide default checkboxes */
input[type=radio]{
  display: none;
}

/* Style custom radio button shell */
input[type=radio] + label > span {
  display: inline-block;
  width: 15px;
  height: 15px;
  margin: 3px 6px 3px 3px;
  border: 1px solid #546E7A;
  border-radius: 8px;
  vertical-align: bottom;
}

/* If you want cursor change on hover */
/* input[type=radio] + label > span:hover {
  cursor: pointer;
} */

/* Style custom selected radio button bullet */
input[type=radio]:checked + label > span > span {
  display: block;
  width: 7px;
  height: 7px;
  margin: 3px;
  border: 1px solid #3284EF;
  border-radius: 5px;
  background: #3284EF;
}

.radiolabel {
    display: inline-block;
    font-size: 14px;
    color: #363738;
    margin: 10px 10px;
}

.mainfieldheading{
    text-align: center;
     margin: 20px 0px 0px;
}
.clrdrcgray{
    color: #546E7A
}
</style>
