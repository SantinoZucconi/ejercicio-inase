<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;

/**
 * Muestra Entity
 *
 * @property int $numero_precinto
 * @property string $empresa
 * @property string $especie
 * @property int $cantidad_semillas
 * @property string $codigo_de_muestra
 */
class Muestra extends Entity
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
        'numero_precinto' => true,
        'empresa' => true,
        'especie' => true,
        'cantidad_semillas' => true,
    ];

    /**
     * @param string $value
     * @return string
     */
    protected function _setCodigoDeMuestra($value)
    {
        return $value ?: Text::uuid();
    }
}
