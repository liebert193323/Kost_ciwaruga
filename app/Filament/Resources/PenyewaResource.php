<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenyewaResource\Pages;
use App\Models\Penyewa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\DatePicker;

class PenyewaResource extends Resource
{
    protected static ?string $model = Penyewa::class;

    protected static ?string $navigationLabel = 'Penyewa';
    protected static ?string $navigationGroup = 'Penyewaan';
    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone_number')
                    ->required()
                    ->maxLength(15),
                Forms\Components\TextInput::make('address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ktp_number')
                    ->required()
                    ->maxLength(20),
                Forms\Components\DatePicker::make('date')
                    ->required()
                    ->format('Y/m/d')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nama'),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\TextColumn::make('phone_number')->label('Nomor Telepon'),
                Tables\Columns\TextColumn::make('address')->label('Alamat'),
                Tables\Columns\TextColumn::make('date')->label('date'),
                Tables\Columns\TextColumn::make('ktp_number')->label('Nomor KTP'),
                Tables\Columns\TextColumn::make('created_at')->label('Tanggal Dibuat')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->label('Tanggal Diperbarui')->dateTime(),
            ])
            ->filters([
                // Tambahkan filter jika perlu
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPenyewas::route('/'),
            'create' => Pages\CreatePenyewa::route('/create'),
            'edit' => Pages\EditPenyewa::route('/{record}/edit'),
        ];
    }
}
