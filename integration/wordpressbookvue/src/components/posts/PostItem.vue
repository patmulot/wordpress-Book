<template>
  <section class="post_item-container">
    <article class="post_item">
      <postItemHeader />
      <!-- <postItemContent
       :publicationContent="onePublication" 
       /> -->
      <!-- <postItemContent :publication="onePublication"/> -->
      <postItemContent
        :onePublication="onePublication"
        :publicationContent="publicationContent"
        :publicationDate="publicationDate"
        :publicationMediaImgUrl="publicationMediaImgUrl"
      />
      <postItemFooter />
    </article>
  </section>
</template>

<script>
import postItemHeader from "@/components/posts/PostItemHeader.vue";
import postItemContent from "@/components/posts/PostItemContent.vue";
import postItemFooter from "@/components/posts/PostItemFooter.vue";
import publicationService from "../../services/publicationService.js";
export default {
  name: "PostItem",
  components: {
    postItemHeader,
    postItemContent,
    postItemFooter,
  },
  props: {
    onePublication: Object,
  },
  data() {
    return {
      publicationContent: String(),
      publicationDate: String(),
      publicationMedia: String,
      publicationMediaImgUrl: String(),
    };
  },
  async created() {
    this.publicationContent = await this.onePublication.content.rendered;
    this.publicationDate = await this.onePublication.date;
    this.publicationMedia = await publicationService.loadPublicationsMedias(
      this.onePublication.featured_media
    );
    this.publicationMediaImgUrl = await this.publicationMedia.guid.rendered;
  },
};
</script>
<style scoped lang="scss">
@import "../../assets/scss/main.scss";
.post_item-container {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  background-color: $firstBackgroundColor;
  margin-top: 1rem;
  border-radius: 0.8rem;
  padding: 1rem 0;
  box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);
}
</style>
