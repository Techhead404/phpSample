<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * House Entity
 *
 * @property int $id
 * @property string $type
 * @property int $bedrooms
 * @property float $bathrooms
 * @property int $sq_foot
 * @property float $price
 */
class House extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'type' => true,
        'bedrooms' => true,
        'bathrooms' => true,
        'sq_foot' => true,
        'price' => true,
    ];
}
