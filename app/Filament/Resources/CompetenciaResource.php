<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompetenciaResource\Pages;
use App\Filament\Resources\CompetenciaResource\RelationManagers;
use App\Models\Competencia;
use App\Models\Profesionista;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompetenciaResource extends Resource
{
    protected static ?string $model = Competencia::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('profesionista_id')
                    ->label('Profesionista')
                    ->options(fn() => Profesionista::query()->pluck('nombre', 'id'))
                    ->required(),
                Forms\Components\TextInput::make('herramienta')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('porcentaje')
                    ->required()
                    ->numeric()
                    ->suffix('%'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('profesionista.nombre')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('herramienta')
                    ->searchable(),
                Tables\Columns\TextColumn::make('porcentaje')
                    ->numeric()
                    ->sortable()
                    ->formatStateUsing(fn ($state) => $state . '%'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageCompetencias::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
