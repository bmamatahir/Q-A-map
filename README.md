## About Project
Visitors ask surrounding people to answer their questions related to specific location

## Tech stack
- Laravel 8
- MongoDB
- Livewire 2

## Bootstrap with Docker
run `docker-compose up -d` on the terminal then visit the url http://localhost:8080

#### Generate fake data into database
you should access to the app container tought this command `docker-compose exec web bash` then `php artisan migrate:refresh --seed`




