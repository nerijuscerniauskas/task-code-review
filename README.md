# Code review

## Task
 * Create REST api create customer notifications by email or sms depends on customer settings.
 * Customer profile data is saved in Database

 Request:
     /api/customer/{code}/notifications
    {
        body: "notification text"
    }

# Run application
## IMPORTANT: Docker was introduced in this repository so everyone could launch the application.

### WEIRD PORTS: To avoid potential conflicts with existing ports
* nginx web server - <b>8001<b>
* mysql - <b>3777</b>
* phpmyadmin - <b>8888<b>

### How to run this project on your machine:
1. Pull the repo
    - On windows: Be sure to have installed wsl for best optimisation and file reading. Place repo in `$wsl//` directory
    - Mac or Linux: Pull the project where you want
2. Open command terminal in your project folder
3. Write `docker-compose up --build` - for first time
    - Write `docker-compose up` if the containers were closed just this command
4. After all the process is done loading write: `docker-compose ps -q symfony`
5. Copy returned value. E.g. of mine: `a2f527561203d53623d3******************************************************`
6. Now you can access the symfony container: `docker exec -it <value_from_4_step> bash`
7. Run following: 
   * `composer install`
   * `php bin/console doctrine:migrations:migrate`

### Test api endpoints manually:
* params:
  * code - `<write whatever you want>`
  * Request body -  `{ body: "notification text" }`
* Preferably use POSTMAN application with 
* OpenAPI is not supported
* Using curl on terminal:
  * `curl -XPOST -H "Content-type: application/json" -d '{ body: "notification text" }' 'localhost:8001/api/customer/1/notifications'`

### Run Unit tests:
    