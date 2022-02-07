@echo -- Salary
cd ../
php artisan make:migration:schema create_salaries_table --model=0 --schema="min:integer,max:integer"
timeout /t -1
php artisan migrate
php artisan backpack:crud salary
php artisan db:seed --class=SalarySeeder
timeout /t -1
