<template>
<div>
      <div class="header">
          <h4 class="title">page2</h4>
          <p class="category">Created using <a href="https://www.google.com/fonts/specimen/Muli">Muli</a> Font Family</p>
        </div>
        <div class="content">
          <li><router-link :to="{ name: 'page1' }">page1<br /></router-link></li>
          <li><router-link class="link" :to="{ name: 'dashboard' }"> dashboardview <br /></router-link></li>
          <li><router-link class="link" :to="{ name: 'form1' }"> form1 <br /></router-link></li>
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
