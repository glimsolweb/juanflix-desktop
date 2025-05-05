<?php

namespace App\Filament\Resources\Admin;

use Filament\Forms;
use App\Models\Crew;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use App\Filament\Clusters\FilmCluster;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Admin\CrewResource\Pages;
use App\Filament\Resources\Admin\CrewResource\RelationManagers;

class CrewResource extends Resource
{
    protected static ?string $model = Crew::class;
    protected static ?string $cluster = FilmCluster::class;
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Grid::make(2)
                ->schema([
                    TextInput::make('name')
                        ->label('Name')
                        ->required(),
                    FileUpload::make('image')
                        ->label('Image')
                        ->directory('uploaded-files')
                        ->image()
                        ->maxSize(2048),
                    TextInput::make('position')
                        ->label('Position'),
                    TextInput::make('priority')
                        ->label('Priority')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('name')
                    ->label('Name'),
                TextColumn::make('position')
                    ->label('Position'),
                TextColumn::make('priority')
                    ->label('Priority'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCrews::route('/'),
            'create' => Pages\CreateCrew::route('/create'),
            'edit' => Pages\EditCrew::route('/{record}/edit'),
        ];
    }
}
