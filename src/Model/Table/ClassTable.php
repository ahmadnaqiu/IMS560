<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Class Model
 *
 * @method \App\Model\Entity\Clas newEmptyEntity()
 * @method \App\Model\Entity\Clas newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Clas> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Clas get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Clas findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Clas patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Clas> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Clas|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Clas saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Clas>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Clas>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Clas>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Clas> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Clas>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Clas>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Clas>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Clas> deleteManyOrFail(iterable $entities, array $options = [])
 */
class ClassTable extends Table
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

        $this->setTable('class');
        $this->setDisplayField('class_name');
        $this->setPrimaryKey('class_id');
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
            ->scalar('class_name')
            ->maxLength('class_name', 255)
            ->requirePresence('class_name', 'create')
            ->notEmptyString('class_name');

        $validator
            ->integer('lecturer_id')
            ->requirePresence('lecturer_id', 'create')
            ->notEmptyString('lecturer_id');

        $validator
            ->integer('academic_year')
            ->requirePresence('academic_year', 'create')
            ->notEmptyString('academic_year');

        return $validator;
    }
}
