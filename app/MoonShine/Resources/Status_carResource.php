<?php

namespace App\MoonShine\Resources;

use App\Models\status_cars;
use Illuminate\Database\Eloquent\Model;

use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class Status_carResource extends Resource
{
	public static string $model = status_cars::class;

	public static string $title = 'Статус машины';

    protected bool $editInModal = true;

    protected bool $createInModal = true;

    protected bool $showInModal = true;

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Статус машины', 'status'),
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
