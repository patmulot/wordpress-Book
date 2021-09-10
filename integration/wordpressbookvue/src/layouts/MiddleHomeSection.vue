<template>
  <section class="middle_section_container">
    <storySection />
    <newPostSection />
    <postItemSection
    ref="childToReload"
    />
  </section>
</template>

<script>
import storySection from "@/components/stories/StorySection.vue";
import newPostSection from "@/components/posts/NewPostSection.vue";
import postItemSection from "@/layouts/PostItemSection.vue";

export default {
  name: "MiddleHomeSection",
  components: {
    storySection,
    newPostSection,
    postItemSection,
  },
  methods: {
    // reload : ---------------- //
    reloadChild() {
      this.$refs.childToReload.reloadChild();
    },
  }
};
</script>
<style scoped lang="scss">
@import'../assets/scss/main.scss';
.middle_section_container {
  min-width: 40vw;
  width: 100%;
  max-width: 680px;
  display: flex;
  flex-direction: column;
  margin: 0 0.4rem;
  margin: auto;
}
</style>
