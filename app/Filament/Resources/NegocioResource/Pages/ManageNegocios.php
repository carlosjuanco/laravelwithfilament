<?php

namespace App\Filament\Resources\NegocioResource\Pages;

use App\Filament\Resources\NegocioResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageNegocios extends ManageRecords
{
    protected static string $resource = NegocioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
