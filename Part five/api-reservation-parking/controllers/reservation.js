import {getReservations, getReservationById, createReservation, deleteReservationById} from "../models/reservationModel.js"

// Get All Parkings Lots
export const showReservation = (req, res) => {
    getReservations((err, results) => {
        if(err){
            res.send(err);
        }else{
            res.json(results);
        }
    })
}

// Get Single Parking Lot
export const showReservationById = (req, res) => {
    getReservationById(req.params.id, (err, results) => {
        if(err) {
            res.send(err);
        } else {
            res.json(results);
        }
    })
}

// Create New Parking Lot
export const createNewReservation = (req, res) => {
    const data = req.body;
    createReservation(data, (err, results) => {
        if(err) {
            res.send(err);
        } else {
            res.json(results);
        }
    })
}

// Delete Parking Lot 
export const deleteReservation = (req, res) => {
    const id = req.params.id;
    deleteReservationById(id, (err, results) => {
        if(err) {
            res.send(err);
        } else {
            res.json(results);
        }
    })
}