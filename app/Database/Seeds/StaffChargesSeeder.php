<?php

namespace App\Database\Seeds;

class StaffChargesSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id'=>'1','description_short'=>'PDTE DEL CONSEJO DE ADMINISTRA','description_long'=>'PDTE DEL CONSEJO DE ADMINISTRA'],
            ['id'=>'2','description_short'=>'SECRETARIO DEL CONS ADMINISTRA','description_long'=>'SECRETARIO DEL CONS ADMINISTRA'],
            ['id'=>'3','description_short'=>'VOCAL TITULAR CONS ADMINISTRAC','description_long'=>'VOCAL TITULAR CONS ADMINISTRAC'],
            ['id'=>'4','description_short'=>'JEFE VIVIENDA','description_long'=>'JEFE VIVIENDA'],
            ['id'=>'5','description_short'=>'JEFE PERSONAL','description_long'=>'JEFE PERSONAL'],
            ['id'=>'6','description_short'=>'ASISTENTE','description_long'=>'ASISTENTE'],
            ['id'=>'7','description_short'=>'AUXIL.CONTABLE','description_long'=>'AUXIL.CONTABLE'],
            ['id'=>'8','description_short'=>'SECRETARIA','description_long'=>'SECRETARIA'],
            ['id'=>'9','description_short'=>'TRAMIT.ADMINISTRATIVO','description_long'=>'TRAMIT.ADMINISTRATIVO'],
            ['id'=>'10','description_short'=>'GUARDIAN','description_long'=>'GUARDIAN'],
            ['id'=>'11','description_short'=>'VIGILANTE','description_long'=>'VIGILANTE'],
            ['id'=>'12','description_short'=>'AUXILIAR','description_long'=>'AUXILIAR'],
            ['id'=>'13','description_short'=>'ENCARGADO','description_long'=>'ENCARGADO'],
            ['id'=>'14','description_short'=>'JEFE OPERACION','description_long'=>'JEFE OPERACION'],
            ['id'=>'15','description_short'=>'JEFE SERLAV','description_long'=>'JEFE SERLAV'],
            ['id'=>'16','description_short'=>'AUX.CTA.CTES.','description_long'=>'AUX.CTA.CTES.'],
            ['id'=>'17','description_short'=>'TEC.CONTABILIDAD','description_long'=>'TEC.CONTABILIDAD'],
            ['id'=>'18','description_short'=>'JEFE LOGISTICA','description_long'=>'JEFE LOGISTICA'],
            ['id'=>'19','description_short'=>'APODERADO GENERAL','description_long'=>'APODERADO GENERAL'],
            ['id'=>'20','description_short'=>'PDTE DEL COMITE DE EDUCACION','description_long'=>'PDTE DEL COMITE DE EDUCACION'],
            ['id'=>'21','description_short'=>'VICE-PDTE COMITE DE EDUCACION','description_long'=>'VICE-PDTE COMITE DE EDUCACION'],
            ['id'=>'22','description_short'=>'SECRETARIO COMITE EDUCACION','description_long'=>'SECRETARIO COMITE EDUCACION'],
            ['id'=>'23','description_short'=>'VOCAL SUPL COMITE EDUCACION','description_long'=>'VOCAL SUPL COMITE EDUCACION'],
            ['id'=>'24','description_short'=>'PRESIDENTE CONSEJO DE VIGILANC','description_long'=>'PRESIDENTE CONSEJO DE VIGILANC'],
            ['id'=>'25','description_short'=>'VICE-PDTE CONSEJO DE VIGILANCI','description_long'=>'VICE-PDTE CONSEJO DE VIGILANCI'],
            ['id'=>'26','description_short'=>'SECRETRAIO CONSEJO DE VIGILANC','description_long'=>'SECRETRAIO CONSEJO DE VIGILANC'],
            ['id'=>'27','description_short'=>'VOCAL SUPL CONSEJO DE VIGILANC','description_long'=>'VOCAL SUPL CONSEJO DE VIGILANC'],
            ['id'=>'28','description_short'=>'PRESIDENTE DEL COMITE ELECTORA','description_long'=>'PRESIDENTE DEL COMITE ELECTORA'],
            ['id'=>'29','description_short'=>'VICE-PRESIDENTE COMITE ELECTOR','description_long'=>'VICE-PRESIDENTE COMITE ELECTOR'],
            ['id'=>'30','description_short'=>'VOCAL SUPLENTE COMITE ELECTORA','description_long'=>'VOCAL SUPLENTE COMITE ELECTORA'],
            ['id'=>'31','description_short'=>'PRESIDENTE DEL COMITE DE SERVI','description_long'=>'PRESIDENTE DEL COMITE DE SERVI'],
            ['id'=>'32','description_short'=>'SECRETARIO COMITE DE SERVICIOS','description_long'=>'SECRETARIO COMITE DE SERVICIOS'],
            ['id'=>'33','description_short'=>'PDTE COMITE OPREC','description_long'=>'PDTE COMITE OPREC'],
            ['id'=>'34','description_short'=>'VOCAL SUPL CONS DE ADMINISTRAC','description_long'=>'VOCAL SUPL CONS DE ADMINISTRAC'],
            ['id'=>'35','description_short'=>'SECRETARIO COMITE ELECTORAL','description_long'=>'SECRETARIO COMITE ELECTORAL'],
            ['id'=>'36','description_short'=>'CONTADOR GENERAL VIPOL','description_long'=>'CONTADOR GENERAL VIPOL'],
            ['id'=>'37','description_short'=>'ASESOR LEGAL VIPOL','description_long'=>'ASESOR LEGAL VIPOL'],
            ['id'=>'38','description_short'=>'SUB-CONTADOR','description_long'=>'SUB-CONTADOR'],
            ['id'=>'39','description_short'=>'JEFE DPTO. CONTABILIDAD','description_long'=>'JEFE DPTO. CONTABILIDAD'],
            ['id'=>'40','description_short'=>'PRACTICANTE ADMINISTRATIVO','description_long'=>'PRACTICANTE ADMINISTRATIVO'],
            ['id'=>'41','description_short'=>'PRACTICANTE SECRETARIADO','description_long'=>'PRACTICANTE SECRETARIADO'],
            ['id'=>'42','description_short'=>'PRACTICANTE SERLAV','description_long'=>'PRACTICANTE SERLAV'],
            ['id'=>'43','description_short'=>'PRACTICANTE CONTABLE','description_long'=>'PRACTICANTE CONTABLE'],
            ['id'=>'44','description_short'=>'PRACTICANTE UTE','description_long'=>'PRACTICANTE UTE'],
            ['id'=>'45','description_short'=>'PRACTICANTE LEGAL','description_long'=>'PRACTICANTE LEGAL'],
            ['id'=>'46','description_short'=>'GERENTE ADMINISTRATIVO','description_long'=>'GERENTE ADMINISTRATIVO'],
            ['id'=>'47','description_short'=>'JEFE DE PROMOCIONES','description_long'=>'JEFE DE PROMOCIONES'],
            ['id'=>'48','description_short'=>'SECRETARIO CMTE OPREC','description_long'=>'SECRETARIO CMTE OPREC'],
        ];

        $this->db->table('staff_charges')->insertBatch($data);
    }
}