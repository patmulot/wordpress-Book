<template>
  <footer>
    <nav>
      <a href="#">Liste de recettes</a>
      <a href="#">Inscription</a>
      <a href="#">Connexion</a>
    </nav>
  </footer>
</template>

<script>
export default {
  name: "mainFooter",
};
</script>
<style scoped lang="scss">
@import'../assets/scss/main.scss';
a {
  color: $mainFontColor2;
  font-size: 0.8rem;
}
</style>