@echo -- City
cd ../
php artisan make:migration:schema create_cities_table --model=0 --schema="country_id:integer,name:string:unique"
timeout /t -1
php artisan migrate
php artisan backpack:crud city
php artisan db:seed --class=CitySeeder
timeout /t -1
