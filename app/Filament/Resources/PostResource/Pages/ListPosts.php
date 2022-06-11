<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;

    protected function getTableFilters(): array
    {
        return [
            Filter::make('id_is_1')
                ->query(fn (Builder $query): Builder => $query->where('id', 1)),
        ];
    }
}