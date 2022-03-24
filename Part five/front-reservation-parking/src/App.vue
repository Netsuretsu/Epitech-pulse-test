<template>
  <q-layout view="lHh Lpr lFf">
    <Header />
    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script>
import { ref } from "vue";
import Header from "./components/Header.vue";

export default {
  name: "LayoutDefault",

  components: {
    Header,
  },

  setup() {
    return {
      leftDrawerOpen: ref(false),
    };
  },

};
</script>

<style scoped>
* {
  margin: 0;
  padding: 0;
}
</style>
