<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateResultados extends BaseMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/migrations/4/en/migrations.html#the-change-method
     *
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('resultados', ['id' => false]);
        $table->addColumn('id_muestra', 'uuid', [
            'null' => false,
        ]);
        $table->addColumn('poder_germinativo', 'decimal', [
            'default' => null,
            'null' => true,
            'precision' => 5,
            'scale' => 2,
        ]);
        $table->addColumn('pureza', 'decimal', [
            'default' => null,
            'null' => true,
            'precision' => 5,
            'scale' => 2,
        ]);
        $table->addColumn('materiales_inertes', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addPrimaryKey(['id_muestra']);
        $table->addForeignKey('id_muestra', 'muestras', 'codigo_de_muestra', ['delete' => 'CASCADE']);
        $table->create();
    }
}
