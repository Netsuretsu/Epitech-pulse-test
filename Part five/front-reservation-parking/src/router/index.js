import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/Home.vue";

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/singleParkingLot/:id",
    name: "SingleParkingLot",

    component: () =>
      import(
        /* webpackChunkName: "SingleParkingLot" */ "../views/SingleParkingLot.vue"
      ),
  },
  {
    path: "/singleReservation/:id",
    name: "SingleReservation",

    component: () =>
      import(
        /* webpackChunkName: "SingleReservation" */ "../views/SingleReservation.vue"
      ),
  },
  {
    path: "/addParkingLot",
    name: "AddParkingLot",

    component: () =>
      import(
        /* webpackChunkName: "addReservation" */ "../views/AddParkingLot.vue"
      ),
  },
  {
    path: "/addReservation",
    name: "AddReservation",

    component: () =>
      import(
        /* webpackChunkName: "addReservation" */ "../views/AddReservation.vue"
      ),
  },
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes,
});

export default router;
