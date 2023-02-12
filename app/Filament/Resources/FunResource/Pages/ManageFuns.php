<?php

namespace App\Filament\Resources\FunResource\Pages;

use App\Filament\Resources\FunResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageFuns extends ManageRecords
{
    protected static string $resource = FunResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
