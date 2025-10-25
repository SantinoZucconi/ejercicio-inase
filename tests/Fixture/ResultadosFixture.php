<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ResultadosFixture
 */
class ResultadosFixture extends TestFixture
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
                'id_muestra' => '866cdd4e-c2a2-4907-ba6a-7558ef3d95de',
                'poder_germinativo' => 1.5,
                'pureza' => 1.5,
                'materiales_inertes' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
