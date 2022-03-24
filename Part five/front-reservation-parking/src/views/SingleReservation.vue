<template>
  <div class="reservation">
    <q-card class="my-card bg-purple text-white">
      <q-card-section>
        <h5>Parking reserved:</h5>
        <div class="text-h6" v-html="reservation.parking_name"></div>
      </q-card-section>

      <q-separator />

      <q-card-section>
        <h5>Parking time:</h5>
        <div class="time">
          <div class="text-h6" v-html="reservation.parking_time"></div>
          <div><span>hours</span></div>
        </div>
      </q-card-section>
    </q-card>
    <div class="buttons">
      <q-btn @click="$router.go(-1)" label="Back" color="primary" />
      <q-btn
        @click="deleteReservation"
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
import urlReservation from "../api/reservationBaseUrl.js";
export default {
  name: "SingleReservation",
  components: {},
  data() {
    return {
      reservation: "",
    };
  },
  methods: {
    async getReservation() {
      try {
        const resp = await axios(urlReservation + `/${this.$route.params.id}`);
        this.reservation = await resp.data;
        console.log(this.reservation);
      } catch (err) {
        console.log(err);
      }
    },
    async deleteReservation() {
      const id = this.$route.params.id;
      // eslint-disable-next-line no-unused-vars
      const res = await axios.delete(urlReservation + `/${id}`);
      this.$router.push("/");
    },
  },
  mounted() {
    this.getReservation();
  },
};
</script>

<style scoped>
.reservation {
  margin: 0 auto;
  margin-top: 20px;
  width: 30%;
}
.buttons {
  margin-top: 20px;
}
.time {
  display: flex;
  justify-content: space-around;
  align-content: center;
  width: 10%;
}
span {
  /* margin-top: 100px; */
  font-size: 20px;
}
.submit {
  margin-left: 20px;
}
</style>
