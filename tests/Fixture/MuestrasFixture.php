<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MuestrasFixture
 */
class MuestrasFixture extends TestFixture
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
                'numero_precinto' => 1,
                'empresa' => 'Lorem ipsum dolor sit amet',
                'especie' => 'Lorem ipsum dolor sit amet',
                'cantidad_semillas' => 1,
                'codigo_de_muestra' => '1d62a7da-2ea6-4a4d-822d-a2eee02add3c',
            ],
        ];
        parent::init();
    }
}
