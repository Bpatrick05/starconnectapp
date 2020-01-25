<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Celebrity Entity
 *
 * @property int $id
 * @property string $names
 * @property int $phone_number
 * @property string $Status
 * @property int $category_id
 *
 * @property \App\Model\Entity\Category $category
 */
class Celebrity extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'names' => true,
        'phone_number' => true,
        'Status' => true,
        'category_id' => true,
        'category' => true,
    ];
}
