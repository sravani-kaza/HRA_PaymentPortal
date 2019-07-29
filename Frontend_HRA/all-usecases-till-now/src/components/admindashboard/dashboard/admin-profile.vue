<template>
    <div>
      <div class="header">
          <h4 class="title">profile</h4>
        </div>
        <div class="row marzeros">
            <div class="col-sm-7">
                <table class="table profile_table">
                    <tbody>
                    <tr>
                        <td>Employer name </td>
                        <td>PWC</td>
                    </tr>
                    <tr>
                        <td>Onboard date</td>
                        <td>12 Jun 2018</td>
                    </tr>
                    <tr>
                        <td>Payment plan</td>
                        <td>10,000</td>
                    </tr>
                    <tr>
                        <td>Renewal date</td>
                        <td>10 Jun 2019</td>
                    </tr>
                    <tr>
                        <td>Account manager name</td>
                        <td>ABC</td>
                    </tr>
                    </tbody>
                </table>
            </div><br>
            <div class="col-sm-5">
                <div class="avatar-upload mmobcenter">
                    <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url(https://s3-ap-southeast-1.amazonaws.com/paymatrixuploads/profile_pic/profile.png);">
                        </div>
                    </div>
                    <div class="avatar-edit text-center">
                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload">Upload Profile</label>
                    </div>
                </div>
            </div>
            <div class="row marzeros">
                 <div class="col-sm-7">
                     <div class="row ">
                        <div class="col-sm-12">
                           <h4 class="propheadings">Update Password &nbsp;&nbsp;<span><a href="" class=""><i class="far fa-edit clrash"></i></a></span></h4> 
                        </div>
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
<style>

</style>