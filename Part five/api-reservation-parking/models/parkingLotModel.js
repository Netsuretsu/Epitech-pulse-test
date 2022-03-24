import db from "../config/database.js";

// Get All Parkings Lots
export const getParkingLots = (result) => {
        db.query("SELECT * FROM parking_lot", (err, results) => { 
            if(err) {
            console.log(err);
            result(err, null);
        } else {
            result(null, results);
        }
    })
} 

// Get single Parking lot
export const getParkingLotById = (id, result) => {
    db.query("SELECT * FROM parking_lot WHERE parking_lot_id = ?", [id], (err, results) => {
        if(err){
            console.log(err);
        } else {
            result(null, results[0]);
        }
    });
}

// Create Parking lot
export const createParkingLot = (data, result) => {
    db.query("INSERT INTO parking_lot SET ?", [data], (err, results) => {
        if(err) {
            console.log(err);
            result(err, null);
        } else {
            result(null, results);
        }
    });
}

// Delete Parking lot
export const deleteParkingLotById = (id, result) => {
    db.query("DELETE FROM parking_lot WHERE parking_lot_id = ?", [id], (err, results) => {
        if(err) {
            console.log(err);
            result(err, null);
        } else {
            result(null, results);
        }
    })
}