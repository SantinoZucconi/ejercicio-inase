<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Resultado> $resultados
 */
?>
<div class="resultados index content">
    <?= $this->Html->link(__('New Resultado'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Resultados') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_muestra') ?></th>
                    <th><?= $this->Paginator->sort('poder_germinativo') ?></th>
                    <th><?= $this->Paginator->sort('pureza') ?></th>
                    <th><?= $this->Paginator->sort('materiales_inertes') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultados as $resultado): ?>
                <tr>
                    <td><?= h($resultado->id_muestra) ?></td>
                    <td><?= $resultado->poder_germinativo === null ? '' : $this->Number->format($resultado->poder_germinativo) ?></td>
                    <td><?= $resultado->pureza === null ? '' : $this->Number->format($resultado->pureza) ?></td>
                    <td><?= h($resultado->materiales_inertes) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $resultado->id_muestra]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $resultado->id_muestra]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $resultado->id_muestra],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $resultado->id_muestra),
                            ]
                        ) ?>
                    </td>
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