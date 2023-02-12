<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Project;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProjectResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProjectResource\RelationManagers;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-desktop-computer';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('proj_image')
                ->image()
                ->preserveFilenames()
                ->maxSize(5120)
                // ->imageCropAspectRatio('16:9')
                ->imageResizeTargetWidth('1200')
                ->imageResizeTargetHeight('630')
                ->directory('projects')
                ->columnSpan([
                    'sm' => 2,
                ]),
                Forms\Components\Textarea::make('description')
                ->rows(2)
                ->columnSpan([
                    'sm' => 2,
                ]),
                Forms\Components\Textinput::make('tech')
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
                ImageColumn::make('proj_image'),
                Tables\Columns\TextColumn::make('description')->limit(50),
                Tables\Columns\TextColumn::make('tech')->label('Technology Used'),
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
            'index' => Pages\ManageProjects::route('/'),
        ];
    }
}
