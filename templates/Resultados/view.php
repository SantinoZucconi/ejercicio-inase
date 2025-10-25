<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Resultado $resultado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Resultado'), ['action' => 'edit', $resultado->id_muestra], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Resultado'), ['action' => 'delete', $resultado->id_muestra], ['confirm' => __('Are you sure you want to delete # {0}?', $resultado->id_muestra), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Resultados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Resultado'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="resultados view content">
            <h3><?= h($resultado->id_muestra) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Muestra') ?></th>
                    <td><?= h($resultado->id_muestra) ?></td>
                </tr>
                <tr>
                    <th><?= __('Materiales Inertes') ?></th>
                    <td><?= h($resultado->materiales_inertes) ?></td>
                </tr>
                <tr>
                    <th><?= __('Poder Germinativo') ?></th>
                    <td><?= $resultado->poder_germinativo === null ? '' : $this->Number->format($resultado->poder_germinativo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pureza') ?></th>
                    <td><?= $resultado->pureza === null ? '' : $this->Number->format($resultado->pureza) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>