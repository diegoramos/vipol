<?php

namespace App\Database\Seeds;

class SeederApp extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $this->call('ModuleSeeder');
        $this->call('UserSeeder');
        $this->call('PermissionSeeder');
        $this->call('ActiveConditionsSeeder');
        $this->call('ActiveDocumentsSeeder');
        $this->call('ActiveStateSeeder');
        $this->call('AgreementDocumentsSeeder');
        $this->call('AuthorizationDiscountsSeeder');
        $this->call('BankSeeder');
        $this->call('CalculationStandardSeeder');
        $this->call('DistrictSeeder');
        $this->call('FuelAuthorizationSeeder');
        $this->call('FuelProgramSeeder');
        $this->call('HousingMovementsSeeder');
        $this->call('HousingProgramsSeeder');
        $this->call('HousingStatesSeeder');
        $this->call('IdentificationDocumentSeeder');
        $this->call('MaritalStatusSeeder');
        $this->call('MilitaryBoxTypeSeeder');
        $this->call('MonthsDepreciateSeeder');
        $this->call('MovementTypeSeeder');
        $this->call('NotarySeeder');
        $this->call('PartnerSituationSeeder');
        $this->call('PaymentMethodSeeder');
        $this->call('PaymentSituationSeeder');
        $this->call('ProcessTypeSeeder');
        $this->call('RelationshipSeeder');
        $this->call('StaffChargesSeeder');
        $this->call('StaffConditionSeeder');
        $this->call('StaffStatesSeeder');
        $this->call('TitleConditionSeeder');
        $this->call('TypeAgreementsSeeder');
        $this->call('TypeCurrencySeeder');
        $this->call('TypeIncomeSeeder');
        $this->call('TypeInstitutionSeeder');
        $this->call('TypeLettersSeeder');
        $this->call('TypeLinesSeeder');
        $this->call('TypePayrollSeeder');
        $this->call('UnitMeasurementSeeder');
    }
}
