<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Category;
use Illuminate\Support\Str;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CategoryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CategoryResource\RelationManagers;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $slug = 'blog/categories';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationGroup = 'Blog';
    protected static ?string $navigationIcon = 'heroicon-o-template';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                        ->required()
                        ->reactive()
                        ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                    Forms\Components\TextInput::make('slug')
                        ->disabled()
                        ->required()
                        ->unique(Category::class, 'slug', fn ($record) => $record),
            ])
            ->columns([
                'sm' => 2,
            ])
            ->columnSpan(2),
        Forms\Components\Card::make()
            ->schema([
                Forms\Components\Placeholder::make('created_at')
                    ->label('Created at')
                    ->content(fn (?Category $record): string => $record ? $record->created_at->diffForHumans() : '-'),
                Forms\Components\Placeholder::make('updated_at')
                    ->label('Last modified at')
                    ->content(fn (?Category $record): string => $record ? $record->updated_at->diffForHumans() : '-'),
            ])
            ->columnSpan(1),
    ])
    ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('slug')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                ->label('Last Updated')
                    ->date('d M Y'),
            ])
            ->filters([
                //
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
            'index' => Pages\ManageCategories::route('/'),
        ];
    }
}
