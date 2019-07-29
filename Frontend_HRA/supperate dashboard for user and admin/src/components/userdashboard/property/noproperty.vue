<template>
<div>
      <div class="header">
          <h2 class="title text-center padding30_0">You didn't created any property</h2>
        </div>
        <div class="content concustwid text-center">
          <div class="agrmtbtnalign padcustalign"><router-link :to="{ name: 'form1' }"><button type="button" class="btn btn-default btcuswid">Create Property</button></router-link></div>
        </div>
    </div>
</template>

<script>
export default {
  
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
 .padding30_0{
   padding: 30px 0px;
 }
 .padcustalign{
   padding: 20px 0px 50px;
 }
 .concustwid{
    max-width: 400px;
    margin: 0px auto;
 }
 .btcuswid{
    padding: 15px;
    font-size: 20px;
 }

</style>