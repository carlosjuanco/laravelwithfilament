<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfesionistaResource\Pages;
use App\Filament\Resources\ProfesionistaResource\RelationManagers;
use App\Models\Profesionista;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Support\Enums\Alignment;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Torgodly\Html2Media\Tables\Actions\Html2MediaAction;

class ProfesionistaResource extends Resource
{
    protected static ?string $model = Profesionista::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('apellido_paterno')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('apellido_materno')
                    ->required()
                    ->maxLength(50),
                FileUpload::make('foto')
                    ->acceptedFileTypes([
                        'image/png',
                        'image/jpg',
                    ])
                    ->maxSize(2024)
                    ->required(),
                Forms\Components\TextInput::make('carrera')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('correo')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('telefono')
                    ->tel()
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('direccion')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('objetivo')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        $profesionista = Profesionista::find(1);
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('apellido_paterno')
                    ->searchable(),
                Tables\Columns\TextColumn::make('apellido_materno')
                    ->searchable(),
                ImageColumn::make('foto')
                        ->circular()
                        ->alignment(Alignment::Center),
                Tables\Columns\TextColumn::make('carrera')
                    ->searchable(),
                Tables\Columns\TextColumn::make('correo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telefono')
                    ->searchable(),
                Tables\Columns\TextColumn::make('direccion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('objetivo')
                    ->searchable(),
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
                Html2MediaAction::make('print')
                    ->scale(2)
                    ->print() // Enable print option
                    ->filename('invoice') // Custom file name
                    ->savePdf() // Enable save as PDF option
                    ->requiresConfirmation() // Show confirmation modal
                    ->pagebreak('section', ['css', 'legacy'])
                    ->orientation('portrait') // Portrait orientation
                    ->format('letter', 'mm') // A4 format with mm units
                    ->margin([1, 15, 10, 15]) // Set custom margins
                    ->content(fn($record) => view('invoice', ['profesionista' => $profesionista])),
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
            'index' => Pages\ManageProfesionistas::route('/'),
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
