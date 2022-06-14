# Tutorial-Laravel9-InfyOm

---

## Laravel 本体他のインストール

- [YA-androidapp/Laravel9-sail-example-app](https://github.com/YA-androidapp/Laravel9-sail-example-app#readme)

```bash
curl -s "https://laravel.build/laravel9-infyom" | bash

cd laravel9-infyom
nano docker-compose.yml

./vendor/bin/sail up -d

./vendor/bin/sail composer require laravel-lang/publisher laravel-lang/lang --dev
./vendor/bin/sail php artisan lang:add ja

./vendor/bin/sail composer require infyomlabs/laravel-ui-adminlte
./vendor/bin/sail php artisan ui adminlte --auth

nano resources/views/layouts/app.blade.php
# Update yield to stack. This will match other blade files generated later on
# @stack('third_party_stylesheets')
# @stack('third_party_scripts')

./vendor/bin/sail npm install
./vendor/bin/sail npm run dev

```

```yml
    phpmyadmin:
        image: phpmyadmin/phpmyadmin
        links:
            - mysql:mysql
        ports:
            - 8000:80
        environment:
            PMA_USER: "${DB_USERNAME}"
            PMA_PASSWORD: "${DB_PASSWORD}"
            PMA_HOST: mysql
        networks:
            - sail
```

## infyomlabs/laravel-generator のインストール

```bash
nano .env
# APP_URL=http://localhost

./vendor/bin/sail composer require infyomlabs/laravel-generator
./vendor/bin/sail composer require infyomlabs/adminlte-templates
./vendor/bin/sail composer require doctrine/dbal
./vendor/bin/sail composer require laravelcollective/html
./vendor/bin/sail composer require laracasts/flash

./vendor/bin/sail php artisan vendor:publish --provider="InfyOm\Generator\InfyOmGeneratorServiceProvider"
./vendor/bin/sail php artisan infyom:publish
```

---

Copyright (c) 2022 YA-androidapp(<https://github.com/YA-androidapp>) All rights reserved.
