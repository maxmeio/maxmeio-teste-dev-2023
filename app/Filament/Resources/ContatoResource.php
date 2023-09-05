<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContatoResource\Pages;
use App\Filament\Resources\ContatoResource\RelationManagers;
use App\Models\Contato;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContatoResource extends Resource
{
    protected static ?string $model = Contato::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nome')
                    ->required()
                    ->maxLength(55),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(55),
                Forms\Components\TextInput::make('interesse')
                    ->required()
                    ->maxLength(100),
                Forms\Components\DatePicker::make('data_nascimento')
                    ->required(),
                Forms\Components\TextInput::make('mensagem')
                    ->required()
                    ->maxLength(200),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('interesse')
                    ->searchable(),
                Tables\Columns\TextColumn::make('data_nascimento')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('mensagem')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListContatos::route('/'),
            'create' => Pages\CreateContato::route('/create'),
            'edit' => Pages\EditContato::route('/{record}/edit'),
        ];
    }    
}
