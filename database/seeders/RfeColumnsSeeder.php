<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RfeColumn;

class RfeColumnsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $columns = [[
            'rfe_category_id' => 1,
            'name' => 'full_name',
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_people'
        ],[
            'rfe_category_id' => 1,
            'name' => 'nick_name',
            'is_mandatory' => 'N',
            'table_ref' => 'pim_people'
        ],[
            'rfe_category_id' => 1,
            'name' => 'ktp',
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_people'
        ],[
            'rfe_category_id' => 1,
            'name' => 'birth_place',
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_people'
        ],[
            'rfe_category_id' => 1,
            'name' => 'birth_date',
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_people'
        ],[
            'rfe_category_id' => 1,
            'name' => 'gender',
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_people'
        ],[
            'rfe_category_id' => 1,
            'name' => 'religion_id',
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_people'
        ],[
            'rfe_category_id' => 1,
            'name' => 'marital_status_id',
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_people'
        ],[
            'rfe_category_id' => 1,
            'name' => 'blood_type_id',
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_people'
        ],[
            'rfe_category_id' => 2,
            'name' => 'email',
            'is_mandatory' => 'N',
            'table_ref' => 'pim_people'
        ],[
            'rfe_category_id' => 2,
            'name' => 'email_corp',
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_people'
        ],[
            'rfe_category_id' => 2,
            'name' => 'no_hp',
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_people'
        ],[
            'rfe_category_id' => 2,
            'name' => 'address',// address
            'is_mandatory' => 'Y',
            'table_ref' => 'addon_addresses'
        ],[
            'rfe_category_id' => 2,
            'name' => 'province_id',// province
            'is_mandatory' => 'Y',
            'table_ref' => 'addon_addresses'
        ],[
            'rfe_category_id' => 2,
            'name' => 'city_id',
            'is_mandatory' => 'Y',
            'table_ref' => 'addon_addresses'
        ],[
            'rfe_category_id' => 2,
            'name' => 'district',// district
            'is_mandatory' => 'N',
            'table_ref' => 'addon_addresses'
        ],[
            'rfe_category_id' => 2,
            'name' => 'subdistrict',// subdistrict
            'is_mandatory' => 'N',
            'table_ref' => 'addon_addresses'
        ],[
            'rfe_category_id' => 2,
            'name' => 'postalcode',// postal code
            'is_mandatory' => 'N',
            'table_ref' => 'addon_addresses'
        ],[
            'rfe_category_id' => 2,
            'name' => 'facebook',
            'is_mandatory' => 'N',
            'table_ref' => 'pim_people'
        ],[
            'rfe_category_id' => 2,
            'name' => 'instagram',
            'is_mandatory' => 'N',
            'table_ref' => 'pim_people'
        ],[
            'rfe_category_id' => 2,
            'name' => 'twitter',
            'is_mandatory' => 'N',
            'table_ref' => 'pim_people'
        ],[
            'rfe_category_id' => 3,
            'name' => 'stage_id', //education degree
            'is_mandatory' => 'N',
            'table_ref' => 'pim_person_edus'
        ],[
            'rfe_category_id' => 3,
            'name' => 'institution',
            'is_mandatory' => 'N',
            'table_ref' => 'pim_person_edus'
        ],[
            'rfe_category_id' => 3,
            'name' => 'is_last', //Last Education
            'is_mandatory' => 'N',
            'table_ref' => 'pim_person_edus'
        ],[
            'rfe_category_id' => 3,
            'name' => 'faculty',
            'is_mandatory' => 'N',
            'table_ref' => 'pim_person_edus'
        ],[
            'rfe_category_id' => 3,
            'name' => 'majors',
            'is_mandatory' => 'N',
            'table_ref' => 'pim_person_edus'
        ],[
            'rfe_category_id' => 3,
            'name' => 'year_in',
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_person_edus'
        ],[
            'rfe_category_id' => 3,
            'name' => 'year_out',
            'is_mandatory' => 'N',
            'table_ref' => 'pim_person_edus'
        ],[
            'rfe_category_id' => 3,
            'name' => 'thesis',
            'is_mandatory' => 'N',
            'table_ref' => 'pim_person_edus'
        ],[
            'rfe_category_id' => 3,
            'name' => 'ipk',
            'is_mandatory' => 'N',
            'table_ref' => 'pim_person_edus'
        ],[
            'rfe_category_id' => 3,
            'name' => 'descr',
            'is_mandatory' => 'N',
            'table_ref' => 'pim_person_edus'
        ],[
            'rfe_category_id' => 4,
            'name' => 'relation_id',
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_person_fams'
        ],[
            'rfe_category_id' => 4,
            'name' => 'full_name',
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_person_fams'
        ],[
            'rfe_category_id' => 4,
            'name' => 'address',
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_person_fams'
        ],[
            'rfe_category_id' => 4,
            'name' => 'birth_place',
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_person_fams'
        ],[
            'rfe_category_id' => 4,
            'name' => 'birth_date',
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_person_fams'
        ],[
            'rfe_category_id' => 4,
            'name' => 'no_hp',
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_person_fams'
        ],[
            'rfe_category_id' => 4,
            'name' => 'emergency',
            'is_mandatory' => 'N',
            'table_ref' => 'pim_person_fams'
        ],[
            'rfe_category_id' => 5,
            'name' => 'company',
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_person_work_exps'
        ],[
            'rfe_category_id' => 5,
            'name' => 'position',//Job Title
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_person_work_exps'
        ],[
            'rfe_category_id' => 5,
            'name' => 'level',
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_person_work_exps'
        ],[
            'rfe_category_id' => 5,
            'name' => 'job_desc',
            'is_mandatory' => 'N',
            'table_ref' => 'pim_person_work_exps'
        ],[
            'rfe_category_id' => 5,
            'name' => 'company_industry',
            'is_mandatory' => 'N',
            'table_ref' => 'pim_person_work_exps'
        ],[
            'rfe_category_id' => 5,
            'name' => 'location',
            'is_mandatory' => 'N',
            'table_ref' => 'pim_person_work_exps'
        ],[
            'rfe_category_id' => 5,
            'name' => 'year_in',
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_person_work_exps'
        ],[
            'rfe_category_id' => 5,
            'name' => 'year_out',
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_person_work_exps'
        ],[
            'rfe_category_id' => 5,
            'name' => 'salary',
            'is_mandatory' => 'N',
            'table_ref' => 'pim_person_work_exps'
        ],[
            'rfe_category_id' => 5,
            'name' => 'descr',// additional description
            'is_mandatory' => 'N',
            'table_ref' => 'pim_person_work_exps'
        ],[
            'rfe_category_id' => 6,
            'name' => 'name',// certification name
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_person_certificates'
        ],[
            'rfe_category_id' => 6,
            'name' => 'organization',// organization name
            'is_mandatory' => 'Y',
            'table_ref' => 'pim_person_certificates'
        ],[
            'rfe_category_id' => 6,
            'name' => 'has_expired',
            'is_mandatory' => 'N',
            'table_ref' => 'pim_person_certificates'
        ],[
            'rfe_category_id' => 6,
            'name' => 'effect_date_start',
            'is_mandatory' => 'N',
            'table_ref' => 'pim_person_certificates'
        ],[
            'rfe_category_id' => 6,
            'name' => 'effect_date_end',
            'is_mandatory' => 'N',
            'table_ref' => 'pim_person_certificates'
        ]];

        foreach ($columns as $column) {
            if($column['name'] != ''){
                RfeColumn::create([
                    'rfe_category_id' => $column['rfe_category_id'],
                    'name' => $column['name'],
                    'is_mandatory' => $column['is_mandatory'],
                    'table_ref' => $column['table_ref'],
                ]);
            }
        }
    }
}
