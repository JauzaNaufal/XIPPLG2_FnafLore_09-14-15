<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnimatronicResource\Pages;
use App\Filament\Resources\AnimatronicResource\RelationManagers;
use App\Models\Animatronic;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnimatronicResource extends Resource
{
    protected static ?string $model = Animatronic::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\components\FileUpload::make('image')
                    ->required()
                    ->columnSpanFull(),
                Forms\components\TextInput::make('name')
                    ->required(),
                Forms\components\TextInput::make('type')
                    ->required(),
                Forms\components\TextInput::make('appreance')
                    ->required(),
                Forms\components\RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('type'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListAnimatronics::route('/'),
            'create' => Pages\CreateAnimatronic::route('/create'),
            'edit' => Pages\EditAnimatronic::route('/{record}/edit'),
        ];
    }
}
