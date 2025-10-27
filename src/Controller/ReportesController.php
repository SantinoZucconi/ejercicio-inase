<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Reportes Controller
 *
 */
class ReportesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $muestrasTable = $this->getTableLocator()->get('Muestras');
        $query = $muestrasTable->find()
                ->contain(['Resultados'])
                ->select([
                    'codigo_de_muestra' => 'Muestras.codigo_de_muestra',
                    'empresa' => 'Muestras.empresa',
                    'especie' => 'Muestras.especie',
                    'poder_germinativo' => 'Resultados.poder_germinativo',
                    'pureza' => 'Resultados.pureza',
                    'materiales_inertes' => 'Resultados.materiales_inertes',
                ]);
        $reportes = $this->paginate($query);
        $this->set(compact('reportes'));
    }
}
