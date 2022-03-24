<template>
  <div class="q-pa-sm">
    <q-toolbar class="bg-teal text-white shadow-2 rounded-borders">
      <span>Parking Pulse Company</span>

      <q-tabs v-model="tab" shrink stretch>
        <q-tab> </q-tab>
      </q-tabs>
    </q-toolbar>
  </div>
</template>

<script>
export default {
  name: "Header",
  components: {},
  methods: {},
};
</script>

<style scoped>
span {
  width: fit-content;
  margin: 0 auto;
  font-size: 25px;
  font-family: Arial, Helvetica, sans-serif;
}
</style>
