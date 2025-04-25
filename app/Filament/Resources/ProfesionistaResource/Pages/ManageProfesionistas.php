<?php

namespace App\Filament\Resources\ProfesionistaResource\Pages;

use App\Filament\Resources\ProfesionistaResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageProfesionistas extends ManageRecords
{
    protected static string $resource = ProfesionistaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
