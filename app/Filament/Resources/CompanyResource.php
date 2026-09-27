<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyResource\Pages;
use App\Filament\Resources\CompanyResource\RelationManagers;
use App\Models\Company;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyResource extends Resource
{
    protected static ?string $model = Company::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // Establecer el título de página y el título en el menú
    protected static ?string $pluralModelLabel = 'Empresa';

    // Establecer el título del botón agregar, el título de mi modal registrar, editar
    // y finalmente el título del modal ver
    protected static ?string $modelLabel = 'empresa';

    public static function form(Form $form): Form
    {
        /**
         * --------------------------------------------------------------------------
         *  FORMULARIO REACTIVO EN FILAMENT 3
         * --------------------------------------------------------------------------
         *
         *  Patrón usado: Select::live()  +  ->visible(fn (Get $get) => ...)
         *
         *  ¿Qué hace?
         *  ----------------------------------------------------------------------
         *  Permite mostrar u ocultar campos del formulario en tiempo real según
         *  el valor de OTRO campo, sin recargar la página.
         *
         *  ¿Cómo funciona?
         *  ----------------------------------------------------------------------
         *  1. El campo "disparador" (aquí: `tipo`) se marca con ->live().
         *     Esto le indica a Filament que, al cambiar su valor, debe
         *     re-renderizar el formulario y reevaluar las condiciones.
         *
         *  2. Los campos "dependientes" (aquí: `paternal_surname` y
         *     `maternal_surname`) usan ->visible(fn (Get $get) => ...).
         *     El closure se evalúa CADA VEZ que el formulario se re-renderiza,
         *     por lo que la visibilidad se recalcula automáticamente.
         *
         *  3. Se inyecta la clase Filament\Forms\Get para leer el valor
         *     actual de otros campos del formulario de forma tipada y limpia.
         *
         *  Notas importantes:
         *  ----------------------------------------------------------------------
         *  - ->live()          : dispara la reactividad en cada cambio.
         *                        Alternativa: ->live(onBlur: true) o
         *                        ->live(debounce: 500) si hay problemas
         *                        de rendimiento.
         *
         *  - ->visible()       : el campo oculto NO se envía en el submit.
         *                        Si necesitas que SÍ se envíe (aunque oculto),
         *                        usa ->hidden() en su lugar.
         *
         *  - ->required(fn)    : la validación también debe ser condicional,
         *                        de lo contrario Laravel marcará error cuando
         *                        el campo esté oculto pero sea obligatorio.
         *
         *  - En modo Edición, Get ya contiene los valores cargados desde la
         *    BD, por lo que la visibilidad se calcula correctamente al abrir
         *    el formulario. ✅
         *
         *  Documentación oficial:
         *  ----------------------------------------------------------------------
         *  https://filamentphp.com/docs/3.x/forms/advanced#reactivity
         *  https://filamentphp.com/docs/3.x/forms/advanced#field-visibility
         *  Chat en deepseek: https://chat.deepseek.com/share/5uxuomwukv7vadrwvr
         * --------------------------------------------------------------------------
         */

        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Select::make('tipo')
                    ->label('Tipo')
                    ->options([
                        'Persona física' => 'Persona física',
                        'Persona moral'  => 'Persona moral',
                    ])
                    ->live()
                    ->required(),
                TextInput::make('paternal_surname')
                    ->maxLength(50)
                    ->visible(fn (Get $get) => $get('tipo') === 'Persona física')
                    ->required(fn (Get $get) => $get('tipo') === 'Persona física'),
                TextInput::make('maternal_surname')
                    ->maxLength(50)
                    ->visible(fn (Get $get) => $get('tipo') === 'Persona física')
                    ->required(fn (Get $get) => $get('tipo') === 'Persona física'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tipo'),
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
            'index' => Pages\ManageCompanies::route('/'),
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
