<?php

namespace App\Filament\Clusters\ProfileCluster\Resources\Admin;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ProfileIcon;
use Filament\Resources\Resource;
use App\Filament\Clusters\ProfileCluster;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Clusters\ProfileCluster\Resources\Admin\ProfileIconResource\Pages;
use App\Filament\Clusters\ProfileCluster\Resources\Admin\ProfileIconResource\RelationManagers;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class ProfileIconResource extends Resource
{
    protected static ?string $model = ProfileIcon::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $cluster = ProfileCluster::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                FileUpload::make('image')
                    ->label('Profile Icon')
                    ->directory('uploaded-files')
                    ->image()
                    ->maxSize(2048),
                TextInput::make('category')
                    ->label('Category')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Profile Icon'),
                TextColumn::make('category')
                    ->label('Category')

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
            'index' => Pages\ListProfileIcons::route('/'),
            'create' => Pages\CreateProfileIcon::route('/create'),
            'edit' => Pages\EditProfileIcon::route('/{record}/edit'),
        ];
    }
}
