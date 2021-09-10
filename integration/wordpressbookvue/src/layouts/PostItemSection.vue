<template>
  <section class="post_item-section-container">
    <div v-for="onePublication in allPublications" :key="onePublication.id">
      <postItem :onePublication="onePublication" />
    </div>
    <commentedPostItem />
  </section>
</template>

<script>
import postItem from "@/components/posts/PostItem.vue";
import commentedPostItem from "@/components/posts/CommentedPostItem.vue";
import publicationService from "../services/publicationService.js";
export default {
  name: "PostItemSection",
  components: {
    postItem,
    commentedPostItem,
  },
  data() {
    return {
      allPublications: [],
    };
  },
  async created() {
    this.allPublications = await publicationService.loadPublications();
  },
  methods: {
    // reload : ---------------- //
    async reloadChild() {
      this.allPublications = await publicationService.loadPublications();
    },
  },
};
</script>
<style scoped lang="scss">
@import'../assets/scss/main.scss';
.post_item-section-container {
  height: 100%;
}
</style>
