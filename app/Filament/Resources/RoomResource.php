<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomResource\Pages;
use App\Models\Room;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class RoomResource extends Resource
{
    protected static ?string $model = Room::class;
    

    protected static ?string $navigationIcon = 'heroicon-o-home-modern';

    protected static ?string $navigationGroup = 'Rooms Management';

    // Menentukan rute navigasi
    protected static ?string $navigationLabel = 'Rooms';
    

    // Menentukan kolom yang dapat dimasukkan dalam form
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('number')
                    ->label('Room Number')
                    ->required(),
                Forms\Components\TextArea::make('description')
                    ->label('Description')
                    ->nullable(),
                Forms\Components\TextInput::make('price')
                    ->label('Price')
                    ->required(),
                Forms\Components\Toggle::make('is_available')
                    ->label('Is Available')
                    ->default(true),
            ]);
    }

    // Menentukan tampilan tabel untuk resource
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('number')
                    ->label('Room Number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Description'),
                Tables\Columns\TextColumn::make('price')
                    ->label('Price')
                    ->sortable(),
                Tables\Columns\BooleanColumn::make('is_available')
                    ->label('Available'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->sortable(),
            ])
            ->filters([
                // Bisa menambahkan filter jika dibutuhkan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    // Mendapatkan relasi jika ada
    public static function getRelations(): array
    {
        return [
            // Menambahkan relasi jika ada
        ];
    }

    // Mendapatkan halaman yang akan digunakan
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRooms::route('/'),
            'create' => Pages\CreateRoom::route('/create'),
            'edit' => Pages\EditRoom::route('/{record}/edit'),
        ];
    }
}
