<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ApplicationUser Entity
 *
 * @property int $id
 * @property string $service_category
 * @property string $accept_terms
 * @property string $address_1
 * @property string|null $address_2
 * @property \Cake\I18n\FrozenTime $application_date
 * @property string $application_status
 * @property string|null $billing_email
 * @property string|null $billing_name
 * @property string|null $billing_method
 * @property string|null $company
 * @property string $contract_status
 * @property string $contract_type
 * @property string $contract_period
 * @property string $contractor_name
 * @property string $contractor_name_kana
 * @property string $email
 * @property string|null $inflow_route
 * @property bool $is_only_invoice_registration
 * @property string|null $representative
 * @property string $phone_number
 * @property string|null $tel
 * @property string $postal_code
 * @property string|null $note
 * @property \Cake\I18n\FrozenTime $start_date_use
 * @property string $created_by
 * @property string $modified_by
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class ApplicationUser extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'service_category' => true,
        'accept_terms' => true,
        'address_1' => true,
        'address_2' => true,
        'application_date' => true,
        'application_status' => true,
        'billing_email' => true,
        'billing_name' => true,
        'billing_method' => true,
        'company' => true,
        'contract_status' => true,
        'contract_type' => true,
        'contract_period' => true,
        'contractor_name' => true,
        'contractor_name_kana' => true,
        'email' => true,
        'inflow_route' => true,
        'is_only_invoice_registration' => true,
        'representative' => true,
        'phone_number' => true,
        'tel' => true,
        'postal_code' => true,
        'note' => true,
        'start_date_use' => true,
        'created_by' => true,
        'modified_by' => true,
        'created' => true,
        'modified' => true,
    ];
}
