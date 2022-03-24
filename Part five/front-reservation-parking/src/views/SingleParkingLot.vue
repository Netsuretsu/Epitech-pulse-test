<template>
  <div class="parking">
    <q-card dark bordered class="bg-grey-9 my-card">
      <q-card-section>
        <h5>Name:</h5>
        <div class="text-h6" v-html="parking.parking_lot_name"></div>
      </q-card-section>

      <q-separator dark inset />

      <q-card-section>
        <h5>Description:</h5>
        <div class="text-h6" v-html="parking.parking_lot_description"></div>
      </q-card-section>
    </q-card>
    <div class="buttons">
      <q-btn @click="$router.go(-1)" label="Back" color="primary" />
      <q-btn
        @click="deleteParkingLot"
        class="submit"
        label="Delete"
        type="submit"
        color="negative"
      />
    </div>
  </div>
</template>

<script>
import axios from "axios";
import urlParking from "../api/parkingBaseUrl.js";

export default {
  name: "SingleParkingLot",
  components: {},
  data() {
    return {
      parking: "",
    };
  },
  methods: {
    async getParkingLot() {
      try {
        const resp = await axios(urlParking + `/${this.$route.params.id}`);
        this.parking = await resp.data;
        console.log(this.parking);
      } catch (err) {
        console.log(err);
      }
    },
    async deleteParkingLot() {
      const id = this.$route.params.id;
      // eslint-disable-next-line no-unused-vars
      const res = await axios.delete(urlParking + `/${id}`);
      this.$router.push("/");
    },
  },
  mounted() {
    this.getParkingLot();
  },
};
</script>

<style scoped>
.parking {
  margin: 0 auto;
  margin-top: 20px;
  width: 30%;
}
.buttons {
  margin-top: 20px;
}
.submit {
  margin-left: 20px;
}
</style>
