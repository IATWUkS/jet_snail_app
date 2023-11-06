<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\Text;

class UserResource extends Resource
{
	public static string $model = User::class;

	public static string $title = 'Пользователи';

    protected bool $editInModal = true;

    protected bool $createInModal = true;

    protected bool $showInModal = true;

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Имя', 'name'),
            Text::make('Почта', 'email'),
            Text::make('Дата создания', 'created_at')
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
