<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Illuminate\Support\Str;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PostResource\Pages;
use Filament\Forms\Components\SpatieTagsInput;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PostResource\RelationManagers;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $slug = 'blog/posts';

    protected static ?string $navigationGroup = 'Blog';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?int $navigationSort = 0;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                Forms\Components\TextInput::make('slug')
                    ->disabled()
                    ->required()
                    ->unique(Post::class, 'slug', fn ($record) => $record),
                Forms\Components\Textarea::make('meta_description')
                    ->rows(2)
                    ->minLength(50)
                    ->maxLength(1000)
                    ->columnSpan([
                        'sm' => 2,
                    ]),
                Forms\Components\FileUpload::make('cover_image')
                    ->image()
                    ->preserveFilenames()
                    ->maxSize(5120)
                    ->imageCropAspectRatio('16:9')
                    ->imageResizeTargetWidth('1200')
                    ->imageResizeTargetHeight('630')
                    ->directory('images')
                    ->columnSpan([
                        'sm' => 2,
                    ]),
                    RichEditor::make('body')
                    ->required()
                    ->columnSpan([
                        'sm' => 2,
                    ]),
                Forms\Components\Select::make('author_id')
                    ->relationship('author', 'name')
                    ->searchable()
                    ->required(),

                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->required(),

                Forms\Components\DatePicker::make('published_at')
                    ->label('Published Date'),
                SpatieTagsInput::make('tags')
                    ->required(),
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
                        ?Post $record
                    ): string => $record ? $record->created_at->diffForHumans() : '-'),
                Forms\Components\Placeholder::make('updated_at')
                    ->label('Last modified at')
                    ->content(fn (
                        ?Post $record
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
                Tables\Columns\ImageColumn::make('cover_image')
                ->circular(),
            Tables\Columns\TextColumn::make('title')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('author.name')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('category.name')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('published_at')
                ->label('Published Date')
                ->date('d M Y'),
            ])
            ->filters([
                Tables\Filters\Filter::make('published_at')
                ->form([
                    Forms\Components\DatePicker::make('published_from')
                        ->placeholder(fn ($state): string => 'Dec 18, '.now()->subYear()->format('Y')),
                    Forms\Components\DatePicker::make('published_until')
                        ->placeholder(fn ($state): string => now()->format('d M, Y')),
                ])
                ->query(function (Builder $query, array $data): Builder {
                    return $query
                        ->when(
                            $data['published_from'],
                            fn (Builder $query, $date): Builder => $query->whereDate('published_at', '>=', $date),
                        )
                        ->when(
                            $data['published_until'],
                            fn (Builder $query, $date): Builder => $query->whereDate('published_at', '<=', $date),
                        );
                }),
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
            'index' => Pages\ManagePosts::route('/'),
        ];
    }
}
