import mysql from "mysql2"

//Connexion to database
const db = mysql.createConnection ({
    host: "localhost",
    user: "root",
    password: "http19lg",
    database: "parking_lot_reservation"
})

export default db;