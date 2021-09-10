<template>
  <section class="story-main_container">
    <newStoryElement />
    <storyElement />
    <storyElement />
    <storyElement />
    <storyElement />
  </section>
</template>

<script>
import storyElement from '@/components/stories/StoryElement.vue'
import newStoryElement from '@/components/stories/NewStoryElement.vue'
export default {
  name: 'StorySection',
  components: {
    storyElement,
    newStoryElement,
  }
}
</script>
<style scoped lang="scss">
@import'../../assets/scss/main.scss';
.story-main_container {
  display: flex;
  justify-content: space-between;
  width: 100%;
  height: 190px;
  max-height: 190px;
  overflow: hidden;
  border-radius: 0.8rem;
  box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);
}
</style>
