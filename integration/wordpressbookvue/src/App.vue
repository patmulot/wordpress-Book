<template>
  <div id="app">
    <mainHeader />
    <router-view />
  </div>
</template>

<script>
import mainHeader from "./layouts/MainHeader.vue";

export default {
  name: "App",
  components: {
    mainHeader,
  },
};
</script>
<style lang="scss">
@import'~bootstrap/dist/css/bootstrap.css';
@import "./assets/scss/main.scss";

body {
  background-color: $mainBackgroundColor;
  color: $mainFontColor2;
  font-family: Arial, Helvetica, sans-serif;
  box-sizing: border-box;
}
a {
  text-decoration: none;
}
ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
p {
  margin: 0;
}
</style>
