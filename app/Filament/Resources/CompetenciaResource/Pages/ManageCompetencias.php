<?php

namespace App\Filament\Resources\CompetenciaResource\Pages;

use App\Filament\Resources\CompetenciaResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCompetencias extends ManageRecords
{
    protected static string $resource = CompetenciaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
