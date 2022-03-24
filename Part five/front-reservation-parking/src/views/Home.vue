<template>
  <div class="home">
    <div class="parkings">
      <h4>Parkings List</h4>
      <router-link class="link" to="/addParkingLot">
        <q-btn color="secondary" label="New Parking Lot" />
      </router-link>
      <q-card
        dark
        bordered
        class="bg-grey-9 my-card"
        v-for="(parking, index) in parkings"
        :key="index"
      >
        <q-card-section>
          <router-link
            class="linkParking"
            :to="{
              name: 'SingleParkingLot',
              params: { id: parking.parking_lot_id },
            }"
          >
            <div class="text-h6">
              {{ parkings[index].parking_lot_name }}
            </div>
          </router-link>
        </q-card-section>

        <q-separator dark inset />

        <q-card-section> </q-card-section>
      </q-card>
    </div>

    <div class="reservations">
      <h4>Reservations List</h4>
      <router-link class="link" to="/addReservation">
        <q-btn color="secondary" label="New Reservation" />
      </router-link>
      <q-card
        flat
        bordered
        class="my-card bg-purple text-white"
        v-for="(reservation, index) in reservations"
        :key="index"
      >
        <q-card-section>
          <router-link
            class="linkReservation"
            :to="{
              name: 'SingleReservation',
              params: { id: reservation.reservation_id },
            }"
          >
            <div class="text-h6">{{ reservations[index].parking_name }}</div>
          </router-link>
        </q-card-section>
        <q-separator inset />

        <q-card-section> </q-card-section>
      </q-card>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import urlParking from "../api/parkingBaseUrl.js";
import urlReservation from "../api/reservationBaseUrl.js";

export default {
  name: "Home",
  components: {},
  data() {
    return {
      parkings: [],
      reservations: [],
    };
  },
  methods: {
    //Get all parkings lots
    async getParkingsLots() {
      try {
        const resp = await axios(urlParking);
        this.parkings = await resp.data;
        console.log(this.parkings);
      } catch (err) {
        console.log(err);
      }
    },

    //Get all reservations
    async getReservations() {
      try {
        const resp = await axios(urlReservation);
        this.reservations = await resp.data;
        console.log(this.reservations);
      } catch (err) {
        console.log(err);
      }
    },
  },
  async mounted() {
    await this.getParkingsLots();
    await this.getReservations();
  },
};
</script>

<style scoped>
.home {
  max-width: 60%;
  margin: 0 auto;
  margin-top: 20px;
  display: flex;
  justify-content: space-around;
}

.parkings {
  width: 30%;
}
.reservations {
  width: 30%;
}
.my-card {
  margin-top: 20px;
  margin-bottom: 20px;
  width: 100%;
}
.link {
  text-decoration: none;
}
.linkParking {
  color: white;
  text-decoration: none;
}
.linkReservation {
  color: white;
  text-decoration: none;
}
</style>
