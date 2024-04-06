php artisan serve //for starting project
php artisan composer update //for updating composer sothat project can run easily wothout any error.

php artisan config:cache //for clearing stored data from the project
php artisan route:clear //for clearing stored route from the project
php artisan view:clear //for clearing stored view from the project
php artisan key:generate //for creating app id to the  project


php artisan migrate //for making all migration table
php artisan make:model -mc  modelNAme//for making all model, controller both
php artisan make:model modelNAme//for making only specific model
php artisan make:controller controllerNAme//for making only specific controller

//In the public folder I have stored some offline aseeets (not cdn) for creating projects

//Here I have used four tables like: User, Product, Order, Report and each of the tables data and schema I have stored to the databse folder and model folder.
//All of my functionalities I have stored to the controller folder
//All of my views file I have stored to the resources/views folder with folderwise
//All of my routes I have stored to the route folder

//In the .env file I have kept all of my secret key with db name and password
//In middleware I have kept all of my protected route using sesssion for individual customer or user




