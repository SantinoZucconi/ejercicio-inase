<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateMuestras extends BaseMigration
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
        $table = $this->table('muestras', ['id' => false, 'primary_key' => ['codigo_de_muestra']]);
        $table->addColumn('numero_precinto', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('empresa', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('especie', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('cantidad_semillas', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('codigo_de_muestra', 'uuid', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
