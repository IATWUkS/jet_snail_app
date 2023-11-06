<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Type_cars;

use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class Type_carsResource extends Resource
{
	public static string $model = Type_cars::class;

	public static string $title = 'Тип машины';

    protected bool $editInModal = true;

    protected bool $createInModal = true;

    protected bool $showInModal = true;


	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Тип', 'type'),
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
