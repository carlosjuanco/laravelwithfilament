<?php

namespace App\Filament\Resources\SubareaResource\Pages;

use App\Filament\Resources\SubareaResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSubareas extends ManageRecords
{
    protected static string $resource = SubareaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
