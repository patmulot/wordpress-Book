<template>
  <div class="home">
    <main class="main_container">
      <newPostFormItem v-on:new-publication-reload="reloadPublications" />
      <leftSideHomeSection />
      <middleHomeSection ref="childToReload" />
      <rightSideHomeSection />
    <messengerSection />
    </main>
  </div>
</template>

<script>
import leftSideHomeSection from "@/layouts/LeftSideHomeSection.vue";
import middleHomeSection from "@/layouts/MiddleHomeSection.vue";
import rightSideHomeSection from "@/layouts/RightSideHomeSection.vue";
import newPostFormItem from "@/components/posts/NewPostFormItem.vue";
import messengerSection from "@/components/messenger/MessengerSection.vue";

export default {
  name: "Home",
  components: {
    leftSideHomeSection,
    middleHomeSection,
    rightSideHomeSection,
    newPostFormItem,
    messengerSection,
  },
  methods: {
    // reload : ---------------- //
    reloadPublications() {
      this.$refs.childToReload.reloadChild();
    },
  },
};
</script>
<style scoped lang="scss">
.main_container {
  display: flex;
  width: 100%;
  position: relative;
}
</style>
