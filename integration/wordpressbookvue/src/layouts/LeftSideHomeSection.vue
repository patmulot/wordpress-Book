<template>
<div>
  <section class="left_side_container fixed">
    <div class="usual_links">
      <ul class="usual_links-container">
        <li class="usual_link-item">
          <a href="" class="usual_link usual_link-user_profile">
            <!-- <img src="" alt="" /> -->
            <i class="fas fa-user-circle usual_link-icon"></i>
            <span>Pat Mulot</span>
          </a>
        </li>
        <li class="usual_link-item">
          <a href="" class="usual_link usual_link-friends">
            <i class="fas fa-user-friends usual_link-icon"></i>
            <span>Amis</span>
          </a>
        </li>
        <li class="usual_link-item">
          <a href="" class="usual_link usual_link-memories">
            <i class="far fa-clock usual_link-icon"></i>
            <span>Souvenirs</span>
          </a>
        </li>
        <li class="usual_link-item">
          <a href="" class="usual_link usual_link-marketplace">
            <i class="fas fa-store usual_link-icon"></i>
            <span>Marketplace</span>
          </a>
        </li>
        <li class="usual_link-item">
          <a href="" class="usual_link usual_link-events">
            <i class="fas fa-calendar usual_link-icon"></i>
            <span>Evènements</span>
          </a>
        </li>
        <li class="usual_link-item">
          <a href="" class="usual_link usual_link-groups">
            <i class="fas fa-users usual_link-icon"></i>
            <span>Groupes</span>
          </a>
        </li>
        <li class="usual_link-item">
          <a href="" class="usual_link usual_link-latest">
            <i class="far fa-calendar-alt usual_link-icon"></i>
            <span>Les plus récents</span>
          </a>
        </li>
        <li class="usual_link-item">
          <a href="" class="usual_link usual_link-messenger">
            <i class="fab fa-facebook-messenger usual_link-icon"></i>
            <span>Messenger</span>
          </a>
        </li>
        <li class="usual_link-item">
          <a href="" class="usual_link usual_link-messenger">
            <div class="usual_link-arrow usual_link-icon">
              <i class="fas fa-chevron-down usual_link-arrow-icon"></i>
            </div>
            <span>Voir plus</span>
          </a>
        </li>
      </ul>
    </div>
    <!-- <variablesScss /> -->
  </section>
  <section class="left_side_container">
  </section>
    <mainFooter />
</div>
</template>

<script>
import mainFooter from "./MainFooter.vue";
// import variablesScss from "@/assets/scss/Variables.vue";
export default {
  name: "LeftSideHomeSection",
  components: {
    // variablesScss,
    mainFooter,
  },
};
</script>
<style scoped lang="scss">
@import'../assets/scss/main.scss';
.fixed {
  position: fixed;
  top: 4rem;
  background-color: none;
  overflow: auto;
}
.test {
    background-color: pink;
}
.left_side_container {
  width: 30vw;
  max-width: 300px;
  height: 100%;
    background-color: $mainBackgroundColor;
  ul {
    display: flex;
    flex-direction: column;
    margin: 1rem;
    padding: 0;
    border-bottom: solid 1px $thirdBackgroundColor;
    li {
      height: 2.6rem;
      padding: 0.4rem;
      border-radius: 0.4rem;
      display: flex;
      align-items: center;
      margin-right: 1rem;
    }
    li:hover {
      background-color: $fourthBackgroundColor;
    }
    .usual_link-arrow {
      background-color: $secondBackgroundColor;
      border-radius: 1rem;
    }
    .usual_link-arrow-icon {
      text-align: center;
      width: 2rem;
    }
    .usual_link-icon {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 2rem;
      height: 2rem;
    }
  }
  a {
    display: flex;
    align-items: center;
    color: $mainFontColor2;
    span {
      display: block;
      padding-left: 0.6rem;
      color: $mainFontColor1;
    }
  }
}
</style>
