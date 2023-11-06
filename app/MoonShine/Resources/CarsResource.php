<?php

namespace App\MoonShine\Resources;

use App\Mail\SendAlert;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cars;

use Illuminate\Support\Facades\Mail;
use MoonShine\Decorations\Block;
use MoonShine\Fields\BelongsTo;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class CarsResource extends Resource
{
	public static string $model = cars::class;

	public static string $title = 'Техника';

    protected bool $editInModal = true;

    protected bool $createInModal = true;

    protected bool $showInModal = true;

    protected function afterCreated(Model $item): Model
    {
        Mail::to($item->name->email)->send(new SendAlert($item->name->name));
        return $item;
    }

    public function fields(): array
	{
		return [
            Block::make([
                ID::make()->sortable(),
                BelongsTo::make('Модель', 'brand', fn($item) => "$item->brand $item->model")->searchable(),
                BelongsTo::make('Владелец', 'name', 'name')->searchable(),
                BelongsTo::make('Тип', 'type', 'type')->searchable(),
                BelongsTo::make('Статус', 'status', 'status')->searchable()
            ])
        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [

            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
