import express from "express"

import {showParkingsLots, showParkingLotById, createNewParkingLot, deleteParkingLot} from "../controllers/parkingLot.js"

const router = express.Router();

//Get All Parkings Lots
router.get("/parkingsLots", showParkingsLots);

//Get Single Parking Lot
router.get("/parkingsLots/:id", showParkingLotById);

//Create new Parking Lot
router.post("/parkingsLots", createNewParkingLot);

//Delete Parking Lot
router.delete("/parkingsLots/:id", deleteParkingLot);

export default router;