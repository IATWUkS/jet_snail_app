<?php

namespace App\Providers;

use App\MoonShine\Resources\Brand_carsResource;
use App\MoonShine\Resources\CarsResource;
use App\MoonShine\Resources\Status_carResource;
use App\MoonShine\Resources\Type_carsResource;
use App\MoonShine\Resources\UserResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;

class MoonShineServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(MoonShine::class)->menu([
            MenuItem::make('Админы', new MoonShineUserResource()),
            MenuItem::make('Пользователи', new UserResource()),
            MenuItem::make('Техника', new CarsResource()),
            MenuItem::make('Бренды', new Brand_carsResource()),
            MenuItem::make('Тип машины', new Type_carsResource()),
            MenuItem::make('Статус машины', new Status_carResource()),
        ]);
    }
}
