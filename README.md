## Clone And Run Project From GitHub

-   Type "composer install" and hit enter
-   Type "npm install" and hit enter
-   Type "npm run dev" and hit enter
-   Type "cp .env.example .env" and hit enter
-   Open file ".env", replace "DB_DATABASE=phplaravel" to "DB_DATABASE=dior-informal-website"
-   Open [http://localhost/phpmyadmin/] (http://localhost/phpmyadmin/), create new database
-   Type "php artisan key:generate" and hit enter
-   Type "php artisan migrate" and hit enter
-   Type "php artisan serve" and hit enter
