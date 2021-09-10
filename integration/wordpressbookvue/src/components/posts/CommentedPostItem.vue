<template>
  <section class="post_item-container">
    <article class="post_item">
      <postItemHeader />
      <postItemContent />
      <postItemFooter />
      <postItemComments />
      <p>
        http://localhost/neo/mes-travaux-2/wordpressBook/public/wp-json/wp/v2/
      </p>
    </article>
  </section>
</template>

<script>
import postItemHeader from '@/components/posts/PostItemHeader.vue'
import postItemContent from '@/components/posts/PostItemContent.vue'
import postItemFooter from '@/components/posts/PostItemFooter.vue'
import postItemComments from '@/components/posts/PostItemComments.vue'
export default {
  name: "CommentedPostItem",
  components: {
    postItemHeader,
    postItemContent,
    postItemFooter,
    postItemComments,
  },
  methods: {
    // displayPosterThumbnail : function(evt) {
    //   console.log(evt);
    //   console.log("hello displayPosterThumbnail");
    // }
  }
};
</script>
<style scoped lang="scss">
@import'../../assets/scss/main.scss';
.post_item-container {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  background-color: $firstBackgroundColor;
  margin-top: 1rem;
  border-radius: 0.8rem;
  padding: 1rem 0;
}
</style>
