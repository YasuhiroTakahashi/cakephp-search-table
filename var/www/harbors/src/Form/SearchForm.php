<?php
declare(strict_types=1);

namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class SearchForm extends Form
{
    protected function _buildValidator(Validator $validator)
    {
        $validator
            ->requirePresence('contractor_name')
            ->notEmptyString('contractor_name', 'このフィールドに入力してください')
            ->add(
                'contractor_name',
                'length', ['rule' => ['minLength', 10],
                'message' => '契約者氏名は必須です']
            );
        return $validator;
    }
}