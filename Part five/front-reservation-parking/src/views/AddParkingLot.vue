<template>
  <div class="newParking">
    <h4>Create new parking lot</h4>
    <q-form @submit.prevent="addParkingLot" class="q-gutter-md">
      <q-input
        filled
        v-model="parking_lot_name"
        label="Parking Lot Name"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
      />

      <q-input
        filled
        type="textarea"
        v-model="parking_lot_description"
        label="Parking Lot Description"
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
      />

      <div class="buttons">
        <q-btn @click="$router.go(-1)" label="Back" color="negative" />
        <q-btn class="submit" label="Submit" type="submit" color="secondary" />
      </div>
    </q-form>
  </div>
</template>

<script>
import axios from "axios";
import urlParking from "../api/parkingBaseUrl.js";

export default {
  name: "AddParkingLot",
  components: {},
  data() {
    return {
      parking_lot_name: "",
      parking_lot_description: "",
    };
  },
  methods: {
    async addParkingLot() {
      try {
        const data = {
          parking_lot_name: this.parking_lot_name,
          parking_lot_description: this.parking_lot_description,
        };
        const resp = await axios.post(urlParking, data);
        this.$router.push("/");
        console.log(resp);
      } catch (err) {
        console.log(err);
      }
    },
  },
};
</script>

<style scoped>
.newParking {
  max-width: 40%;
  margin: 0 auto;
  margin-top: 80px;
}
h4 {
  width: fit-content;
  margin: 0 auto;
  margin-bottom: 40px;
}
.submit {
  margin-left: 20px;
}
</style>
