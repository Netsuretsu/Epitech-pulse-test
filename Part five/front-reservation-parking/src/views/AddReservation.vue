<template>
  <div class="newReservation">
    <h4>Make Reservation</h4>
    <q-form @submit.prevent="addReservation" class="q-gutter-md">
      <q-input
        filled
        v-model="parking_name"
        label="Parking name"
        stack-label
        :rules="[(val) => (val && val.length > 0) || 'Please type something']"
      />

      <q-input
        filled
        type="number"
        v-model="parking_time"
        label="Parking time in hours"
        stack-label
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
import urlReservation from "../api/reservationBaseUrl.js";
export default {
  name: "AddParkingLot",
  components: {},
  data() {
    return {
      parking_name: "",
      parking_time: "",
    };
  },
  methods: {
    async addReservation() {
      try {
        const data = {
          parking_name: this.parking_name,
          parking_time: this.parking_time,
        };
        const resp = await axios.post(urlReservation, data);
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
.newReservation {
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
