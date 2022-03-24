import db from "../config/database.js";

// Get All Reservations
export const getReservations = (result) => {
        db.query("SELECT * FROM reservation", (err, results) => { 
            if(err) {
            console.log(err);
            result(err, null);
        } else {
            result(null, results);
        }
    })
} 

// Get single Reservation 
export const getReservationById = (id, result) => {
    db.query("SELECT * FROM reservation WHERE reservation_id = ?", [id], (err, results) => {
        if(err){
            console.log(err);
        } else {
            result(null, results[0]);
        }
    });
}

// Create Reservation 
export const createReservation = (data, result) => {
    db.query("INSERT INTO reservation SET ?", [data], (err, results) => {
        if(err) {
            console.log(err);
            result(err, null);
        } else {
            result(null, results);
        }
    });
}

// Delete Reservation 
export const deleteReservationById = (id, result) => {
    db.query("DELETE FROM reservation WHERE reservation_id = ?", [id], (err, results) => {
        if(err) {
            console.log(err);
            result(err, null);
        } else {
            result(null, results);
        }
    })
}