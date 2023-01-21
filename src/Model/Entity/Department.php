<?php

namespace  App\Model\Entity;

use Cake\ORM\Entity;
use PhpParser\Builder\Class_;


class Department extends  Entity{

    protected $_accessible = [
        'name' => true,
        'student' => true,
    ];
}
