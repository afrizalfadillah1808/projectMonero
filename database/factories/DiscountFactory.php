<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discount>
 */
class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'jumlahDiscount' => '60.000',
            'kodeDiscount' => 'DISKON60K',
            'keteranganDiscount' => 'Diskon ini terbatas. Gunakan Diskon kamu sekarang sebelum kehabisan.',
            'waktuDiscount' => '3 Jam, 30 Menit'
        ];
    }
}
