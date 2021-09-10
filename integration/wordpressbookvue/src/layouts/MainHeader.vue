<template>
  <div>
    <header class="header fixed">
      <nav>
        <!-- ------------ LEFT SECTION ------------ -->
        <div class="left_nav">
          <div class="left_nav-img">
            <a href="">
              <img
                src="../assets/img/logo-facebook.png"
                alt=""
                class="header_logo"
              />
            </a>
          </div>
          <div class="left_nav-search_bar">
            <p><i class="fas fa-search"></i> Rechercher sur Facebook</p>
            <!-- <input type="text" placeholder="Rechercher sur Facebook"> -->
          </div>
        </div>
        <!-- ------------ MIDDLE SECTION ------------ -->
        <div class="center_nav">
          <div class="center_nav-item">
            <a href=""><i class="fas fa-home"></i></a>
          </div>
          <div class="center_nav-item">
            <a href=""><i class="fas fa-tv"></i></a>
          </div>
          <div class="center_nav-item">
            <a href=""><i class="fas fa-store"></i></a>
          </div>
          <div class="center_nav-item">
            <a href=""><i class="fas fa-users"></i></a>
          </div>
          <div class="center_nav-item">
            <a href=""><i class="fas fa-gamepad"></i></a>
          </div>
        </div>
        <!-- ------------ RIGHT SECTION ------------ -->
        <div class="right_nav_container">
          <div class="right_nav-profile">
            <div class="right_nav-profile-image">
              <img src="" alt="" /><i class="fas fa-user-circle"></i>
            </div>
            <div class="right_nav-profile-name">Pat</div>
          </div>
          <div class="right_nav-menu right_nav-icon_container">
            <div class="right_nav-icon right_nav-menu-image">
              <i class="fas fa-ellipsis-h"></i>
            </div>
          </div>
          <div class="right_nav-messenger right_nav-icon_container">
            <div class="right_nav-icon right_nav-messenger-image">
              <i class="fab fa-facebook-messenger"></i>
            </div>
          </div>
          <div class="right_nav-notifications right_nav-icon_container">
            <div class="right_nav-icon right_nav-notifications-image">
              <i class="fas fa-bell"></i>
            </div>
          </div>
          <div class="right_nav-account right_nav-icon_container">
            <div class="right_nav-icon right_nav-account-image">
              <i class="fas fa-sort-down"></i>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <header class="header absolute"></header>
  </div>
</template>

<script>
export default {
  name: "mainHeader",
};
</script>

<style scoped lang="scss">
@import "../assets/scss/main.scss";
.fixed {
  position: fixed;
  top: 0;
  left: 0;
}
header {
  height: 4rem;
  width: 100%;
  z-index: 101;
  nav {
    display: flex;
    height: 100%;
    padding: 0 1rem;
    background-color: $mainBackgroundColor;
    border-bottom: 1px solid $secondBackgroundColor;
    box-sizing: border-box;
    // ------------ LEFT SECTION ------------
    .left_nav {
      display: flex;
      align-items: center;
      flex-grow: 1;
      width: 100%;
      max-width: 350px;
      .left_nav-img {
        height: 3rem;
        margin-right: 0.2rem;
      }
      .left_nav-img img {
        height: 100%;
        width: auto;
      }
      .left_nav-search_bar {
        display: flex;
        align-items: center;
        width: 100%;
        min-width: 215px;
        height: 40px;
        background-color: $secondBackgroundColor;
        border-radius: 20px;
        padding: 0 1rem;
      }
    }
    // ------------ MIDDLE SECTION ------------
    .center_nav {
      display: flex;
      align-items: center;
      flex-grow: 1;
      font-size: 1.6rem;
      height: 100%;
      width: 100%;
      .center_nav-item {
        border-radius: 0.4rem;
        box-sizing: border-box;
        display: flex;
        flex-grow: 2;
        margin: 0.2rem;
        padding: 0.4rem;
      }
      .center_nav-item:hover {
        background-color: $secondBackgroundColor;
      }
      a {
        margin: auto;
        align-self: center;
        color: $mainFontColor2;
      }
    }
    // ------------ RIGHT SECTION ------------
    .right_nav_container {
      display: flex;
      align-items: center;
      flex-grow: 1;
      height: 100%;
      font-size: 1.6rem;
      .right_nav-profile {
        height: 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.4rem;
        border-radius: 1rem;
        .right_nav-profile-name {
          font-size: 1rem;
          padding: 0 0.4rem;
        }
      }
      .right_nav-profile:hover {
        background-color: $secondBackgroundColor;
      }
      .right_nav-icon_container {
        background-color: $secondBackgroundColor;
        border-radius: 50%;
        padding: 0.4rem;
        margin: 0 0.2rem;
      }
      .right_nav-icon_container:hover {
        background-color: $thirdBackgroundColor;
      }
      .right_nav-icon {
        height: 1rem;
        width: 1rem;
        font-size: 1.2rem;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0.2rem;
      }
    }
  }
}
</style>
