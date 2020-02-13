

laravel 설치 및 서버 실행
> composer create-project --prefer-dist laravel/laravel laravel
>
> composer require barryvdh/laravel-debugbar --dev
>
> php artisan serve

laravel git clone
> composer install
>
> cp .env.example .env
>
> php artisan key:gen

http://127.0.0.1:8000/

laravel auth 설치
> composer require laravel/ui --dev
>
> php artisan list
>
> php artisan ui:auth
>
> npm install && npm run dev
>
> php artisan ui bootstrap

laravel model 생성 및 가데이터 추가
> php artisan make:model Test -m
-- php artisan make:migration create_test_table --create=tests
>
> php artisan make:factory TestFactory --model=Test
>
> php artisan migrate:refresh --seed


> php artisan tinker

User::find(1)->likes()->attach(2)

User::find(1)->likes()->detach(2)

User::find(1)->likes()->toggle(3)

User::find(1)->likes()->sync([1,2,3,4,5,6,])

User::find(1)->posts

User::find(1)->comments->where('post_id', '=', 59)

laravel controller 생성
> php artisan make:controller PostController -r


laravel artisan 명령어
> php artisan list

JWT AUTH
> https://jwt-auth.readthedocs.io/en/docs/
>
> composer require tymon/jwt-auth:1.0.0-rc.5
>
> php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
>
> php artisan jwt:secret
>
> php artisan make:controller Authcontroller
