@echo -- Company
cd ../
php artisan make:migration:schema create_companies_table --model=0 --schema="name:string:unique,logo:string,location:string,contacts:string"
timeout /t -1
php artisan migrate
php artisan backpack:crud company
php artisan db:seed --class=CompanySeeder
timeout /t -1
