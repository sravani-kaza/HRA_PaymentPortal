<template>
<div>
      <div class="header">
          <h4 class="title">Payment summary</h4>
          <hr style="border-color:#EEEEEE;margin: 15px 0px 0px;">
        </div>
        <div class="content">
            <div class="row marzeros">
                <div class="col-sm-7">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label class="lblcustm" >Select the type of payment?</label><br>
                            <input type="radio" id="option1" name="money" value="Rent"> 
                            <label class="radiolabel marcustradio" for="option1"><span><span></span></span>Rent</label>
                            <input type="radio" id="option2" name="money" value="RentDeposit">
                            <label class="radiolabel marcustradio" for="option2"><span><span></span></span>Rent Deposit</label>
                            <input type="radio" id="option3" name="money" value="Maintenance">
                            <label class="radiolabel marcustradio" for="option3"><span><span></span></span>Maintenance</label>
                        </div>
                    </div>
                    <div class="col-sm-12"  style="max-width: 340px;">
                        <label class="lblcustm" >Select month and year</label><br>
                        <div class="row form-group">
                        <div class="col-sm-6">
                            <select class="form-control" id="sel1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control" id="sel1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        </div>
                        <div class="row marzeros">
                            <div class="form-group">
                             <label class="lblcustm" >Rent amount</label>
                            <input type="text" class="form-control" placeholder="Monthly rent">
                            </div>
                        </div>
                         <div class="row marzeros">
                            <div class="form-group">
                             <label class="lblcustm" >Remarks</label>
                           <textarea class="form-control" rows="2" id="comment"></textarea>
                            </div>
                        </div>
                        <div class="row marzeros"><br>
                            <p class="fon18 drcclr">Landlord Details:</p>
                            <p class=" drcclr">Landlord name : Vikram .e</p>
                            <p class=" drcclr">Due date for rent : 02 Sep 2018</p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-5">
                    <div class="summarybox">
                        <p class="clrdrcblc">Payment Details</p>
                        <hr style="border-color:#eeeeee;margin:10px 0px;">
                        <div class="row marzeros">
                            <ul class="summaryul">
                                <li>
                                    <span class="summaryleft">Payment date</span>
                                    <span class="summaryright">30-Aug-2018</span>
                                </li>
                                 <li>
                                    <span class="summaryleft">Type of payment</span>
                                    <span class="summaryright">Rent</span>
                                </li>
                                 <li>
                                    <span class="summaryleft">Rent month</span>
                                    <span class="summaryright">Aug-2018</span>
                                </li>
                                <li style="clear:both;"><hr style="border-color:#eeeeee;margin:10px 0px;"></li> 
                                <li>
                                    <span class="summaryleft"><strong>Amount</strong></span>
                                    <span class="summaryright"><strong>8000</strong></span>
                                </li>
                            </ul>
                        </div>
                    </div><br>
                    <div class="text-center" style="margin: 0px 15px;">
                        <button type="button" class="btn btn-info" style="width:100%;background:#0071bc;border-color:#0071bc;color:#ffffff;">Make Payment</button>
                    </div>
                </div>
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
 .marcustradio{
    margin-left: 0px;
    margin-right: 20px;
 }
input[type=radio]:checked + label{
    color: #0071bc;
    font-weight: 600;
}
.summarybox{
    border: 1px solid #D5D5D5;
    padding: 10px;
}
.summaryul{
    padding-left: 0px;
    list-style: none;
}
.summaryul li{
    line-height: 36px;
}
.summaryleft{
    float: left;
    width: 50%;
    text-align: left;
    word-break: break-word;
}
.summaryright{
    float: right;
    width: 48%;
    text-align: right;
}
.fon18{
    font-size: 18px;
}
.drcclr{
    color: #546E7A;
}
</style>