<?php

namespace App\Service;

use Illuminate\Support\Str;

class PhoneBook
{
    public static function searchByName(string $name): array
    {
        return self::searchBy('name', $name);
    }

    public static function searchByCity(string $city): array
    {
        return self::searchBy('city', $city);
    }

    public static function searchByEmail(string $email): array
    {
        return self::searchBy('email', $email);
    }

    private static function searchBy(string $key, string $value): array
    {
        return collect(self::contacts())
            ->filter(fn($contact) => Str::contains(strtolower($contact[$key]), strtolower($value)))
            ->all();
    }

    public static function contacts(): array
    {
        return [
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'phone' => '123456789',
                'city' => 'Quebec, CA'
            ],
            [
                'name' => 'Jahn Doe',
                'email' => 'jahndoe@example.com',
                'phone' => '987654321',
                'city' => 'Quebec, CA'
            ],
            [
                'name' => 'Alice',
                'email' => 'alice@example.com',
                'phone' => '892432628',
                'city' => 'Paris, FR'
            ],
        ];
    }
}
