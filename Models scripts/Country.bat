@echo -- Country
cd ../
php artisan make:migration:schema create_countries_table --model=0 --schema="name:string:unique"
timeout /t -1
php artisan migrate
php artisan backpack:crud country
php artisan db:seed --class=CountrySeeder
timeout /t -1
