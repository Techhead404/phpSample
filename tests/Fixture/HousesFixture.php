<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HousesFixture
 */
class HousesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'type' => 'Lorem ipsum dolor sit amet',
                'bedrooms' => 1,
                'bathrooms' => 1,
                'sq_foot' => 1,
                'price' => 1,
            ],
        ];
        parent::init();
    }
}
