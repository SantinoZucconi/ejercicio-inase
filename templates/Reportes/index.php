<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Reportes> $reportes
 */
?>
<div class="resultados index content">
    <h3><?= __('Reportes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('codigo_de_muestra') ?></th>
                    <th><?= $this->Paginator->sort('empresa') ?></th>
                    <th><?= $this->Paginator->sort('especie') ?></th>
                    <th><?= $this->Paginator->sort('poder_germinativo') ?></th>
                    <th><?= $this->Paginator->sort('pureza') ?></th>
                    <th><?= $this->Paginator->sort('materiales_inertes') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reportes as $reporte): ?>
                <tr>
                    <td><?= h($reporte->codigo_de_muestra) ?></td>
                    <td><?= h($reporte->empresa) ?></td>
                    <td><?= h($reporte->especie) ?></td>
                    <td><?= $reporte->poder_germinativo === null ? '' : $this->Number->format($reporte->poder_germinativo) ?></td>
                    <td><?= $reporte->pureza === null ? '' : $this->Number->format($reporte->pureza) ?></td>
                    <td><?= h($reporte->materiales_inertes) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
