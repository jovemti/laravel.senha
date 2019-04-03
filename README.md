em .env, APP_DEBUG deve estar true
após, reiniciar o servidor (php artisan serve) para recarregar info do .env

após criar .env
php artisan migrate
php artisan key:generate

# para utilizar helpers em arquivos .blade.php (como Form por exemplo)
# github: https://github.com/LaravelCollective/html
composer require laravelcollective/html 

# Para gerar KeyController
php artisan make:controller KeyController

# Para gerar classe que valida requisição da geração de senha
php artisan make:request KeyGenerateRequest
