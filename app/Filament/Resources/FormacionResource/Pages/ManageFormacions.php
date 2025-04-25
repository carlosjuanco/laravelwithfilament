<?php

namespace App\Filament\Resources\FormacionResource\Pages;

use App\Filament\Resources\FormacionResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageFormacions extends ManageRecords
{
    protected static string $resource = FormacionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
