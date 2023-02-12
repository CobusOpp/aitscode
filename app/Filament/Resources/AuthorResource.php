<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Author;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AuthorResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AuthorResource\RelationManagers;

class AuthorResource extends Resource
{
    protected static ?string $model = Author::class;

    protected static ?string $slug = 'blog/authors';

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationGroup = 'Blog';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?int $navigationSort = 2;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->required(),
                    Forms\Components\TextInput::make('email')
                        ->required()
                        ->email()
                        ->unique(Author::class, 'email', fn ($record) => $record),
                    Forms\Components\FileUpload::make('photo')
                        ->image()
                        ->maxSize(5120)
                        ->directory('blog')
                        ->disk('public')
                        ->columnSpan([
                            'sm' => 2,
                        ]),
                    RichEditor::make('bio')
                    ->columnSpan([
                        'sm' => 2,
                    ]),
                    Forms\Components\TextInput::make('github_handle')
                        ->label('GitHub'),
                    Forms\Components\TextInput::make('twitter_handle')
                        ->label('Twitter'),
                ])
                ->columns([
                    'sm' => 2,
                ])
                ->columnSpan(2),
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\Placeholder::make('created_at')
                        ->label('Created at')
                        ->content(fn (
                            ?Author $record
                        ): string => $record ? $record->created_at->diffForHumans() : '-'),
                    Forms\Components\Placeholder::make('updated_at')
                        ->label('Last modified at')
                        ->content(fn (
                            ?Author $record
                        ): string => $record ? $record->updated_at->diffForHumans() : '-'),
                ])
                ->columnSpan(1),
        ])
        ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\ImageColumn::make('photo')
                ->circular(),
            Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('email')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('github_handle')
                ->label('GitHub'),
            Tables\Columns\TextColumn::make('twitter_handle')
                ->label('Twitter'),
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
            'index' => Pages\ManageAuthors::route('/'),
        ];
    }
}
