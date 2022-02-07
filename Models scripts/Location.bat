@echo -- Location
cd ../
php artisan make:migration:schema create_locations_table --model=0 --schema="city_id:integer,company_id:integer"
timeout /t -1
php artisan migrate
php artisan backpack:crud location
php artisan db:seed --class=LocationSeeder
timeout /t -1
