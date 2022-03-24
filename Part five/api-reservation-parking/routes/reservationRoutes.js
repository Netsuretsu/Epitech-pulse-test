import express from "express"

import {showReservation, showReservationById, createNewReservation, deleteReservation} from "../controllers/reservation.js"

const router = express.Router();

//Get All Reservations 
router.get("/reservations", showReservation);

//Get Single Reservation
router.get("/reservations/:id", showReservationById);

//Create new Reservation 
router.post("/reservations", createNewReservation);

//Delete Reservation
router.delete("/reservations/:id", deleteReservation);

export default router;