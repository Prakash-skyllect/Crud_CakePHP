<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;use function PHPUnit\Framework\assertNotEmpty;

class PrkTable extends Table
{
    // public function initialize(array $config):void{

    //     parent::initialize($config);

    //     $this->setTable('prk');
    //     $this->setDisplayField('name');
    //     $this->setPrimaryKey('id');

    // }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->NotEmptyString('email');
        $validator
            ->scalar('email')
            ->notEmptyString('password');

        return $validator;
    }
}
?>
