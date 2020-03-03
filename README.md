
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
>
> composer require laravelcollective/html
>
> composer require laravel/helpers
>
laravel model 생성 및 가데이터 추가
> php artisan make:model Board
>
> php artisan make:migration create_boards_table  (table 생성)
>
> php artisan migrate
>
> php artisan make:factory BoardFactory --model=Board
>
> php artisan make:seed BoardsTableSeeder
>
> php artisan db:seed --class=BoardsTableSeeder   (데이터 생성)
>
> php artisan migrate:refresh --seed
>
>  ------------------------------------
>
>php artisan make:model Todo -all
>
>-c, --controller Create a new controller for the model
>
>-f, --factory Create a new factory for the model
>
>--force Create the class even if the model already exists
>
>-m, --migration Create a new migration file for the model
>
>-s, --seed Create a new seeder file for the model
>
>-p, --pivot Indicates if the generated model should be a custom inte rmediate table model
>
>-r, --resource Indicates if the generated controller should be a resour ce controller
>
>  ------------------------------------
>
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

laravel-permission
> https://docs.spatie.be/laravel-permission/v3/basic-usage/super-admin/
>
> https://www.itsolutionstuff.com/post/laravel-6-user-roles-and-permissions-from-scratch-laravel-6-aclexample.html
