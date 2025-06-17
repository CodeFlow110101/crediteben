<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogPageResource\Pages;
use App\Filament\Resources\BlogPageResource\RelationManagers;
use App\Models\BlogPage;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogPageResource extends Resource
{
    protected static ?string $model = BlogPage::class;

    protected static ?string $modelLabel = 'Blog';

    protected static ?string $pluralModelLabel = 'Blog';

    protected static ?string $navigationGroup = 'Content';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                RichEditor::make('en')->label('English')
                    ->toolbarButtons([
                        'bold',
                    ]),
                RichEditor::make('fr')->label('French')
                    ->toolbarButtons([
                        'bold',
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('key'),
                TextColumn::make('en')->limit(50)->label("English")->searchable()->formatStateUsing(fn(string $state): string => strip_tags($state)),
                TextColumn::make('fr')->limit(50)->label("French")->searchable()->formatStateUsing(fn(string $state): string => strip_tags($state)),
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
            'index' => Pages\ListBlogPages::route('/'),
            'create' => Pages\CreateBlogPage::route('/create'),
            'edit' => Pages\EditBlogPage::route('/{record}/edit'),
        ];
    }
}
