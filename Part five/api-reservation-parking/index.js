import express from "express";

import cors from "cors";

import parkingLotRouter from "./routes/parkingLotRoutes.js";

import reservationRouter from "./routes/reservationRoutes.js";

const app = express();

app.use(express.json());
app.use(cors());
app.use(parkingLotRouter);
app.use(reservationRouter);

app.listen(3000, () => console.log("Running at http://localhost:3000"));