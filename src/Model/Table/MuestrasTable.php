<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Muestras Model
 *
 * @method \App\Model\Entity\Muestra newEmptyEntity()
 * @method \App\Model\Entity\Muestra newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Muestra> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Muestra get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Muestra findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Muestra patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Muestra> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Muestra|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Muestra saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Muestra>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Muestra>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Muestra>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Muestra> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Muestra>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Muestra>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Muestra>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Muestra> deleteManyOrFail(iterable $entities, array $options = [])
 */
class MuestrasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('muestras');
        $this->setDisplayField('empresa');
        $this->setPrimaryKey('codigo_de_muestra');
        $this->hasOne('Resultados', [
            'foreignKey' => 'id_muestra',
            'dependent' => true,
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('numero_precinto')
            ->requirePresence('numero_precinto', 'create')
            ->notEmptyString('numero_precinto');

        $validator
            ->scalar('empresa')
            ->maxLength('empresa', 255)
            ->requirePresence('empresa', 'create')
            ->notEmptyString('empresa');

        $validator
            ->scalar('especie')
            ->maxLength('especie', 255)
            ->requirePresence('especie', 'create')
            ->notEmptyString('especie');

        $validator
            ->integer('cantidad_semillas')
            ->requirePresence('cantidad_semillas', 'create')
            ->notEmptyString('cantidad_semillas');

        return $validator;
    }
}
