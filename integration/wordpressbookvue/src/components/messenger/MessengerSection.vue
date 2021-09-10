<template>
  <section class="messenging-main_container">
    <messengerElement />
  </section>
</template>
<script>
import messengerElement from '@/components/messenger/MessengerElement.vue'
export default {
  name: 'MessengerSection',
  components: {
    messengerElement,
  }
}
</script>
<style scoped lang="scss">
@import'../../assets/scss/main.scss';
.messenging-main_container {
  position: fixed;
  bottom: 0;
  right: 3.5rem;
  min-height: 0;
  display: flex;
  justify-content: flex-end;
  align-items: flex-end;
}
</style>
