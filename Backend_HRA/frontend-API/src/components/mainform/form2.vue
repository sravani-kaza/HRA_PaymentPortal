<template>
<div>
    <div class="mar0_15">
    <span class="fonweigh700" style="float:right;"><a>X</a></span>
    <h4 class="fonweigh700">Create template</h4>
    <hr style="border-color:#EEEEEE;">
  </div>
<div class="mainfomlayout">
    <ul id="progressbar">
        <li class="active complete clrbluu">Property info</li>
        <li class="active complete clrdarc">Account details</li>
        <li>Rent agreement</li>
    </ul>
    <hr style="border-color:#EEEEEE;">
    <a class="custback" @click="$router.go(-1)"><i class="fas fa-chevron-left"></i>&nbsp;Back</a>
    <div class="row" style="margin-top:10px;font-family: 'Roboto', sans-serif;">
         <div class="hrafom1">
        <h4 style="margin: 0px 15px 20px;">Landlord account details:</h4>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Landlord name</label>
                        <input type="text" class="form-control" >
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Account holder name</label>
                        <input type="text" class="form-control" >
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Bank name</label>
                        <select class="form-control" id="sel1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >IFSC </label>
                        <input type="text" class="form-control" >
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Account number</label>
                        <input type="text" class="form-control" >
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Retype account number</label>
                        <input type="text" class="form-control" >
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Landlord city</label>
                        <input type="text" class="form-control" >
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Ladlord state</label>
                        <input type="text" class="form-control" >
                    </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Landlord PAN number</label>
                        <input type="text" class="form-control" >
                </div>
            </div>
        </div>
        <div class="row marzero0">
            <div class="col-sm-6">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Upload landlord PAN</label>
                        <div class="file-drop-area">
                            <!-- <span class="fake-btn">Choose files</span> -->
                            <span class="file-msg js-set-number" style="color:#808080;font-size:16px">Click or Drop files <span style="color:#0071bc;">here</span></span>
                            <input class="file-input" type="file" multiple>
                        </div>
                        <small>jpg/png/pdf files with a size less than 500kb</small>
                </div>
            </div>
        </div>
        <div class="row marzero0">
            <label class="lblcustm" style="margin:0px 15px;" >Maintenance Account Details:</label>
            <div class="col-sm-12">
                <div class="form-group custrespformgrop">
                        <label class="lblcustm" >Same as landlord account details?</label>
                        <input type="radio" id="option1" name="fooBar" value="foo"> 
                        <label class="radiolabel" for="option1"><span><span></span></span>Yes</label>

                        <input type="radio" id="option2" name="fooBar" value="bar">
                        <label class="radiolabel" for="option2"><span><span></span></span>No</label>
                </div>
            </div>
        </div>

        <div class="row marzero0" style="margin-bottom:20px;">
            <div class="maxbtnwid pull-right">
            <router-link :to="{ name: 'form3' }"><div class="col-xs-6"><button type="button" class="btn btn-info custbtnn">Save and Next</button></div></router-link>
            <router-link class="link" :to="{ name: 'dashboard' }"><div class="col-xs-6"><button type="button" class="btn btn-info custbtnn2">Save and Close</button></div></router-link>
            </div>
        </div>
    </div>
    </div>
     <hr style="border-color:#EEEEEE;">
    <p style="font-size:12px;color:#B0BEC5;text-align:center;">© Copyright 2015-2018 Paymatrix. All Rights Reserved.</p>
</div>

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
