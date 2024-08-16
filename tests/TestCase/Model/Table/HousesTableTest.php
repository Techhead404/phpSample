<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HousesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HousesTable Test Case
 */
class HousesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HousesTable
     */
    protected $Houses;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Houses',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Houses') ? [] : ['className' => HousesTable::class];
        $this->Houses = $this->getTableLocator()->get('Houses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Houses);

        parent::tearDown();
    }
}
