<template>
<div>
      <div class="row marzeros">
          <div class="col-md-5 col-sm-5">
              <p class="clrdrcashh">Rent Agreements</p>
          </div>
          <div class="col-md-7 col-sm-7 ritetocenter">
              <div class="form-inline">
                  <div class="form-group mar5_5">
                    <input data-vv-validate-on="blur" name="startdate" type="date" v-validate="'required|date_format:DD/MM/YYYY'" ref="startdate" class="form-control" id="" v-model.trim="search.start_date"  placeholder="Select date" :class="{'invalid': errors.has('startdate')}">
                    </div>
                    <div class="form-group mar5_5">
                          <input data-vv-validate-on="blur" name="enddate" v-validate="'required|date_format:DD/MM/YYYY|after:startdate'" class="form-control" type="date" id="" v-model.trim="search.end_date"  placeholder="Select date" :class="{'invalid': errors.has('enddate')}">
                    </div>
                    <div class="form-group mar5_5">
                        <button type="button" v-on:click="clicked" class="btn btn-icons"><i class="fas fa-file-download" ></i></button>
                    </div>
                    <div class="form-group mar5_5">
                        <button type="button" v-on:click="onchange" class="btn linkbtn">View</button>
                    </div>
              </div>
          </div>
          <div class="col-md-11 col-sm-11 ritetocenter">
            <div class="form-inline">
              <span class="errormsg" v-show="errors.has('startdate')">{{ errors.first('startdate') }}</span>
                <span class="errormsg" v-show="errors.has('enddate')">{{ errors.first('enddate') }}</span>
            </div>
          </div>
      </div><br>
      <div class="row marzeros">
          <div class="col-sm-12 form-inline ritetocenter">
                  <div class="form-group mar5_5">
                        <input type="text" v-model="search.tag" class="form-control" id="" placeholder="Search">
                    </div>
              </div>
          <div class="table-responsive">
            <div >
                <table class="table tbllclr">
                    <thead>
                    <tr>
                        <th class="fonweigh400">Employee ID</th>
                        <th class="fonweigh400">Landlord ID</th>
                        <th class="fonweigh400">Employer ID</th>
                        <th class="fonweigh400">Start Date</th>
                        <th class="fonweigh400">End Date</th>
                        <th class="fonweigh400">Agreement link</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="transaction in agreements" :key="transaction.transaction_id">
                        <td>
                          {{transaction.tenant_id}}
                        </td>
                        <td>
                          {{transaction.landlord_id}}
                        </td>
                        <td>
                            1
                        </td>
                        <td>
                            {{transaction.agreement_start}}
                        </td>
                        <td>
                          {{transaction.agreement_end}}
                        </td>
                        <td>
                            <div class="form-inline">
                               <button type="button" class="btn btn-info mar5_5 blubtn" v-model="transaction.rent_agreement" v-on:click="openimg($event,transaction.rent_agreement)">view</button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
            <div class="text-right">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                    </li>
                </ul>
            </nav>
            </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
  data() {
    return {
      search:{
        start_date:'',
        end_date:'',
        tag:'',
        download:0
      },
      agreements:[]
    };
  },
  methods:{
    clicked(){

      let self = this;
      this.search.download = 1;
      console.log('hiiii');
      axios.post('http://127.0.0.1:8000/api/getagreements',self.search)
          .then((response) => {
             //console.log(response.data.status);
             if(response.data.status=="SUCCESS")
             {
                window.open("http://localhost:8000"+response.data.link);
             }
             else
               alert("Failed Fetching");
          })
          .catch((error) => alert(error))
    },
    onchange(){
        console.log(JSON.stringify(this.search));
        let self = this;
        axios.post('http://127.0.0.1:8000/api/getagreements',self.search)
            .then((response) => {
               //console.log(response.data.status);
               if(response.data.status=="SUCCESS")
               {
                  self.agreements=response.data.data;
               }
               else
                 alert("Failed Fetching");
            })
            .catch((error) => alert(error))
      },
      openimg:function(event,name){
        console.log(event);
        console.log(name);
        window.open("http://localhost:8000/Propertydocuments/"+name);
      }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
input.invalid{
  border: 1px solid red !important;
}
.errormsg {
  color: red
}
</style>
