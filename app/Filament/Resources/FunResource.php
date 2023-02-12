<?php

namespace App\Filament\Resources;

use App\Models\Fun;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\FunResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FunResource\RelationManagers;

class FunResource extends Resource
{
    protected static ?string $model = Fun::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('fun_image')
                ->image()
                ->preserveFilenames()
                ->maxSize(5120)
                ->imageResizeTargetWidth('1200')
                ->imageResizeTargetHeight('630')
                ->directory('fun')
                ->columnSpan([
                    'sm' => 2,
                ]),
                Forms\Components\Textarea::make('description')
                ->rows(2)
                ->columnSpan([
                    'sm' => 2,
                ]),
                Forms\Components\Textinput::make('domain')
                ->url()
                ->columnSpan([
                    'sm' => 1,
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('fun_image'),
                Tables\Columns\TextColumn::make('description')->limit(50),
                Tables\Columns\TextColumn::make('domain')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageFuns::route('/'),
        ];
    }
}
