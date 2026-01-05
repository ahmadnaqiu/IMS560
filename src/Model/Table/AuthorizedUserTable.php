<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AuthorizedUser Model
 *
 * @method \App\Model\Entity\AuthorizedUser newEmptyEntity()
 * @method \App\Model\Entity\AuthorizedUser newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\AuthorizedUser> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AuthorizedUser get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\AuthorizedUser findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\AuthorizedUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\AuthorizedUser> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\AuthorizedUser|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\AuthorizedUser saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\AuthorizedUser>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AuthorizedUser>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AuthorizedUser>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AuthorizedUser> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AuthorizedUser>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AuthorizedUser>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\AuthorizedUser>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\AuthorizedUser> deleteManyOrFail(iterable $entities, array $options = [])
 */
class AuthorizedUserTable extends Table
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

        $this->setTable('authorized_user');
        $this->setDisplayField('email');
        $this->setPrimaryKey('id');
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
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->integer('created_at')
            ->requirePresence('created_at', 'create')
            ->notEmptyString('created_at');

        return $validator;
    }
}
