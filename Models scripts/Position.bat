@echo -- Position
cd ../
php artisan make:migration:schema create_positions_table --model=0 --schema="name:string:unique"
timeout /t -1
php artisan migrate
php artisan backpack:crud position
php artisan db:seed --class=PositionSeeder
timeout /t -1
