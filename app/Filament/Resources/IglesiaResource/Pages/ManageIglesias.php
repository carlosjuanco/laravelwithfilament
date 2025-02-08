<?php

namespace App\Filament\Resources\IglesiaResource\Pages;

use App\Filament\Resources\IglesiaResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageIglesias extends ManageRecords
{
    protected static string $resource = IglesiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
