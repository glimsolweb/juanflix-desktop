<?php

namespace App\Filament\Resources\Admin;

use Filament\Forms;
use App\Models\Film;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\Film as ModelsFilm;
use Filament\Forms\Components\Grid;
use App\Filament\Clusters\FilmCluster;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Admin\FilmResource\Pages;
use App\Filament\Resources\Admin\FilmResource\RelationManagers;
use Filament\Forms\Components\CheckboxList;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class FilmResource extends Resource
{
    protected static ?string $model = Film::class;
    protected static ?string $cluster = FilmCluster::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Grid::make(2)
                ->schema([
                    TextInput::make('title')
                        ->label('Title')
                        ->required(),
                    DatePicker::make('release_at')
                        ->label('Release At')
                        ->required(),
                    TextInput::make('duration')
                        ->label('Duration')
                        ->required(),
                    TextInput::make('rating')
                        ->label('Rating')
                        ->required(),
                    RichEditor::make('description')
                        ->label('Description')
                        ->columnSpanFull(),
                    TextInput::make('src')
                        ->label('JW Player src')
                        ->required(),
                    TextInput::make('trailer_src')
                        ->label('JW Player trailer')
                        ->required(),
                    FileUpload::make('poster')
                        ->label('Poster')
                        ->directory('uploaded-files')
                        ->image()
                        ->maxSize(2048)
                        ->required(),
                    FileUpload::make('thumbnail')
                        ->label('Thumbnail')
                        ->directory('uploaded-files')
                        ->image()
                        ->maxSize(2048)
                        ->required(),
                    CheckboxList::make('genres')
                        ->label('Genre')
                        ->relationship('genres', 'name')
                        ->searchable()
                        ->columns(4)
                        ->columnSpanFull(),
                    CheckboxList::make('categories')
                        ->label('Categories')
                        ->relationship('categories', 'name')
                        ->searchable()
                        ->columns(4)
                        ->columnSpanFull()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('title')
                    ->label('Title'),
                ImageColumn::make('poster')
                    ->label('Poster'),
                ImageColumn::make('thumbnail')
                    ->label('Thumbnail'),
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
            'index' => Pages\ListFilms::route('/'),
            'create' => Pages\CreateFilm::route('/create'),
            'edit' => Pages\EditFilm::route('/{record}/edit'),
        ];
    }
}
