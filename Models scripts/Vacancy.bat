@echo -- Vacancy
cd ../
php artisan make:migration:schema create_vacancies_table --model=0 --schema="Description:string,Location:string,Remote:boolean,Requirements:string,Schedule:string"
timeout /t -1
php artisan migrate
php artisan backpack:crud vacancy
php artisan db:seed --class=VacancySeeder
timeout /t -1
