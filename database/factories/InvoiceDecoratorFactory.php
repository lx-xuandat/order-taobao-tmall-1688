<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\InvoiceDecorator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\InvoiceDecorator>
 */
final class InvoiceDecoratorFactory extends Factory
{
    use \App\Traits\FactoryTrait;

    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = InvoiceDecorator::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'invoice_id' => \App\Models\Invoice::factory(),
        ];
    }
}
