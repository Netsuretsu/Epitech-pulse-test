### 1. Express

#### Install Dependencies
1. `cd api-reservation-parking`
2. `npm install` OR `yarn`


#### Database
1. Import parking_lot_reservation database in mysql or phpmyadmin 
2. Change database connexion settings in api-reservation-parking/config/database.js with yours
3. You can change the port listening on index.js file. It includes that you will also change it on directories front-reservation-parking/src/api/parkingBaseUrl.js and reservationBaseUrl.js
4. Run `node index.js` 


### 2. Install Vue

#### Vue CLI
`npm install -g @vue/cli`
# OR
`yarn global add @vue/cli`

#### Install Dependencies
1. `cd front-reservation-parking`
2. `npm install` OR `yarn`

#### Run the project
`npm run serve` OR `yarn serve`



