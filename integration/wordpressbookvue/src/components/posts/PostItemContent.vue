<template>
  <div class="post_item-content">
    <div class="post_item-content-text">
      <div class="post_item-text" v-html="publicationContent"></div>
    </div>
    <div class="post_item-content-media">
      <a href="">
        <img
          :src="publicationMediaImgUrl"
          alt=""
          class="post_item-content-media-previw"
        />
      </a>
    </div>
  </div>
</template>
<script>
export default {
  name: "postItemContent",
  props: {
    publicationContent: String,
    publicationDate: String,
    publicationMediaImgUrl: String,
  },
  data() {
    return {
      onePublication: Object,
    };
  },
};
</script>
<style scoped lang="scss">
@import'../../assets/scss/main.scss';
.post_item-content {
  // padding: 0.8rem 1rem;
  .post_item-content-text {
    margin-bottom: 0.6rem;
    color: $mainFontColor1;
    .post_item-text {
      margin: 0 1rem;
      padding: 0;
    }
  }
  .post_item-content-media {
    border-top: solid 1px $secondBackgroundColor;
    border-bottom: solid 1px $secondBackgroundColor;
    background-color: $thirdBackgroundColor;
    .post_item-content-media-previw {
      max-width: 100%;
      // width: 100%;
      display: block;
      margin: auto;
    }
  }
}
</style>
