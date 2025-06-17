<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicePageResource\Pages;
use App\Filament\Resources\ServicePageResource\RelationManagers;
use App\Models\ServicePage;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServicePageResource extends Resource
{
    protected static ?string $model = ServicePage::class;

    protected static ?string $modelLabel = 'Service';

    protected static ?string $pluralModelLabel = 'Service';

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
            'index' => Pages\ListServicePages::route('/'),
            'create' => Pages\CreateServicePage::route('/create'),
            'edit' => Pages\EditServicePage::route('/{record}/edit'),
        ];
    }
}
