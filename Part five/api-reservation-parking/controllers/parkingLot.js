import {getParkingLots, getParkingLotById, createParkingLot, deleteParkingLotById} from "../models/parkingLotModel.js"

// Get All Parkings Lots
export const showParkingsLots = (req, res) => {
    getParkingLots((err, results) => {
        if(err){
            res.send(err);
        }else{
            res.json(results);
        }
    })
}

// Get Single Parking Lot
export const showParkingLotById = (req, res) => {
    getParkingLotById(req.params.id, (err, results) => {
        if(err) {
            res.send(err);
        } else {
            res.json(results);
        }
    })
}

// Create New Parking Lot
export const createNewParkingLot = (req, res) => {
    const data = req.body;
    createParkingLot(data, (err, results) => {
        if(err) {
            res.send(err);
        } else {
            res.json(results);
        }
    })
}

// Delete Parking Lot 
export const deleteParkingLot = (req, res) => {
    const id = req.params.id;
    deleteParkingLotById(id, (err, results) => {
        if(err) {
            res.send(err);
        } else {
            res.json(results);
        }
    })
}