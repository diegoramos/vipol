<?php

namespace App\Database\Seeds;

class ModuleSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Sistemas', 'icons' => '', 'module_id' => null, 'module_group_id' => 1, 'is_base'=>1],
            
            //PRESIDENCIA
            ['id' => 2, 'name' => 'Presidencia', 'icons' => '', 'module_id' => 1, 'module_group_id' => 1, 'is_base'=>1],
            
            ['id' => 3, 'name' => 'Ingresos', 'icons' => '', 'module_id' => 2, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 4, 'name' => 'Consultas', 'icons' => '', 'module_id' => 2, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 5, 'name' => 'Reportes', 'icons' => '', 'module_id' => 2, 'module_group_id' => 1, 'is_base'=>1],

            ['id' => 6, 'name' => 'Socios', 'icons' => '', 'module_id' => 3, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 7, 'name' => 'Ficha Socios', 'icons' => '', 'module_id' => 4, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 8, 'name' => 'Resu Ing/Egr', 'icons' => '', 'module_id' => 4, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 9, 'name' => 'Res In Prog V', 'icons' => '', 'module_id' => 4, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 10, 'name' => 'R In Code Dcto', 'icons' => '', 'module_id' => 4, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 11, 'name' => 'ResumIngxDia', 'icons' => '', 'module_id' => 4, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 12, 'name' => 'Resum Tit.Prop', 'icons' => '', 'module_id' => 4, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 13, 'name' => 'Por Orden Alfabético', 'icons' => '', 'module_id' => 5, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 14, 'name' => 'Aportes Efectuados', 'icons' => '', 'module_id' => 5, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 15, 'name' => 'Res In Prog V', 'icons' => '', 'module_id' => 5, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 16, 'name' => 'Acum.Fondos x Prog', 'icons' => '', 'module_id' => 5, 'module_group_id' => 1, 'is_base'=>0],

            //CAJA
            ['id' => 17, 'name' => 'Caja', 'icons' => '', 'module_id' => 1, 'module_group_id' => 1, 'is_base'=>1],

            ['id' => 18, 'name' => 'Maestro', 'icons' => '', 'module_id' => 17, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 19, 'name' => 'Movimiento', 'icons' => '', 'module_id' => 17, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 20, 'name' => 'Consultas', 'icons' => '', 'module_id' => 17, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 21, 'name' => 'Reportes', 'icons' => '', 'module_id' => 17, 'module_group_id' => 1, 'is_base'=>1],

            ['id' => 22, 'name' => 'Cpto Dscto', 'icons' => '', 'module_id' => 18, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 23, 'name' => 'Transf a Con', 'icons' => '', 'module_id' => 18, 'module_group_id' => 1, 'is_base'=>1],

            ['id' => 24, 'name' => 'Ingreso de Caja', 'icons' => '', 'module_id' => 23, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 25, 'name' => 'Egreso de Caja', 'icons' => '', 'module_id' => 23, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 26, 'name' => 'Regularizaciones', 'icons' => '', 'module_id' => 23, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 27, 'name' => 'Vales Prov/Definit', 'icons' => '', 'module_id' => 23, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 28, 'name' => 'Descuentos Indebidos', 'icons' => '', 'module_id' => 23, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 29, 'name' => 'Ing. Cobr.', 'icons' => '', 'module_id' => 19, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 30, 'name' => 'Emis Recib.', 'icons' => '', 'module_id' => 19, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 31, 'name' => 'Regu Recibidos', 'icons' => '', 'module_id' => 19, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 32, 'name' => 'D. Indebidos', 'icons' => '', 'module_id' => 19, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 33, 'name' => 'Pagos Apor Ext', 'icons' => '', 'module_id' => 19, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 34, 'name' => 'Plan de Ctas', 'icons' => '', 'module_id' => 20, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 35, 'name' => 'Cent Costos', 'icons' => '', 'module_id' => 20, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 36, 'name' => 'Código Aux', 'icons' => '', 'module_id' => 20, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 37, 'name' => 'Tabla Docum', 'icons' => '', 'module_id' => 20, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 38, 'name' => 'Tab Tipo Camb', 'icons' => '', 'module_id' => 20, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 39, 'name' => 'Fichas Socios', 'icons' => '', 'module_id' => 20, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 40, 'name' => 'Est Ctas Ctes', 'icons' => '', 'module_id' => 20, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 41, 'name' => 'Orden de Pago', 'icons' => '', 'module_id' => 20, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 42, 'name' => 'Monto IngxBanc', 'icons' => '', 'module_id' => 20, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 43, 'name' => 'Res Ingr/Egr', 'icons' => '', 'module_id' => 20, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 44, 'name' => 'Recibidos x Act.', 'icons' => '', 'module_id' => 20, 'module_group_id' => 1, 'is_base'=>0],

            //CAJA BANCOS
            ['id' => 45, 'name' => 'Caja Bancos', 'icons' => '', 'module_id' => 1, 'module_group_id' => 1, 'is_base'=>1],

            ['id' => 46, 'name' => 'Maestros', 'icons' => '', 'module_id' => 45, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 47, 'name' => 'Movimiento', 'icons' => '', 'module_id' => 45, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 48, 'name' => 'Consultas', 'icons' => '', 'module_id' => 45, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 49, 'name' => 'Resportes', 'icons' => '', 'module_id' => 45, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 50, 'name' => 'Proceso', 'icons' => '', 'module_id' => 45, 'module_group_id' => 1, 'is_base'=>1],

            ['id' => 51, 'name' => 'Bacos', 'icons' => '', 'module_id' => 46, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 52, 'name' => 'Tipo Mvto.', 'icons' => '', 'module_id' => 46, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 53, 'name' => 'Parte Diari', 'icons' => '', 'module_id' => 46, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 54, 'name' => 'Chq-Vouche', 'icons' => '', 'module_id' => 47, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 55, 'name' => 'Act.Cheque', 'icons' => '', 'module_id' => 47, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 56, 'name' => 'Mvto.Banco', 'icons' => '', 'module_id' => 47, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 57, 'name' => 'Extract.Bco', 'icons' => '', 'module_id' => 47, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 58, 'name' => 'Chqs.Pend', 'icons' => '', 'module_id' => 47, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 59, 'name' => 'Reg.Vouche', 'icons' => '', 'module_id' => 47, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 60, 'name' => 'Por Banco', 'icons' => '', 'module_id' => 48, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 61, 'name' => 'Numer.Cta', 'icons' => '', 'module_id' => 48, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 62, 'name' => 'Referencia', 'icons' => '', 'module_id' => 48, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 63, 'name' => 'Por Día', 'icons' => '', 'module_id' => 48, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 64, 'name' => 'Saldo Bco', 'icons' => '', 'module_id' => 48, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 65, 'name' => 'Ctas Conta', 'icons' => '', 'module_id' => 48, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 66, 'name' => 'Plan Conta', 'icons' => '', 'module_id' => 48, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 67, 'name' => 'Cód Auxilia', 'icons' => '', 'module_id' => 48, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 68, 'name' => 'Centro Cost', 'icons' => '', 'module_id' => 48, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 69, 'name' => 'Dctos Refe', 'icons' => '', 'module_id' => 48, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 70, 'name' => 'Tipo Cambio', 'icons' => '', 'module_id' => 48, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 71, 'name' => 'Ficha Socio', 'icons' => '', 'module_id' => 48, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 72, 'name' => 'Ast. Anexos', 'icons' => '', 'module_id' => 48, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 73, 'name' => 'Chqs Girado', 'icons' => '', 'module_id' => 49, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 74, 'name' => 'Flujo Diari', 'icons' => '', 'module_id' => 49, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 75, 'name' => 'Libro Bco', 'icons' => '', 'module_id' => 49, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 76, 'name' => 'Chqs Pendi', 'icons' => '', 'module_id' => 49, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 77, 'name' => 'Estado Chq', 'icons' => '', 'module_id' => 49, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 78, 'name' => 'Vauch.Socio', 'icons' => '', 'module_id' => 49, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 79, 'name' => 'Reg.V.R.Cta', 'icons' => '', 'module_id' => 49, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 80, 'name' => 'Camb.Fech', 'icons' => '', 'module_id' => 50, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 81, 'name' => 'Gene.Ast.', 'icons' => '', 'module_id' => 50, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 82, 'name' => 'Tran.Cont', 'icons' => '', 'module_id' => 50, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 83, 'name' => 'Cierre Año', 'icons' => '', 'module_id' => 50, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 84, 'name' => 'Part.Diar', 'icons' => '', 'module_id' => 50, 'module_group_id' => 1, 'is_base'=>0],
            //VIVIENDA
            ['id' => 85, 'name' => 'Vivienda', 'icons' => '', 'module_id' => 1, 'module_group_id' => 1, 'is_base'=>1],

            ['id' => 86, 'name' => 'Maestros', 'icons' => '', 'module_id' => 85, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 87, 'name' => 'Movimientos', 'icons' => '', 'module_id' => 85, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 88, 'name' => 'Consultas', 'icons' => '', 'module_id' => 85, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 89, 'name' => 'Reportes', 'icons' => '', 'module_id' => 85, 'module_group_id' => 1, 'is_base'=>1],
            
            ['id' => 90, 'name' => 'Vivienda', 'icons' => '', 'module_id' => 86, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 91, 'name' => 'Titulación', 'icons' => '', 'module_id' => 86, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 92, 'name' => 'Arch.Doctos.', 'icons' => '', 'module_id' => 86, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 93, 'name' => 'Tab Feriados', 'icons' => '', 'module_id' => 86, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 94, 'name' => 'Coef. inter.', 'icons' => '', 'module_id' => 86, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 95, 'name' => 'Dctos.Person', 'icons' => '', 'module_id' => 86, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 96, 'name' => 'Letras', 'icons' => '', 'module_id' => 87, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 97, 'name' => 'Aportac. Viv.', 'icons' => '', 'module_id' => 87, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 98, 'name' => 'Bolsa Vipolina', 'icons' => '', 'module_id' => 87, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 99, 'name' => 'Transf/Permuta', 'icons' => '', 'module_id' => 87, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 100, 'name' => 'Ficha Socios', 'icons' => '', 'module_id' => 88, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 101, 'name' => 'Prog c/s Tit', 'icons' => '', 'module_id' => 88, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 102, 'name' => 'Prg Trám x Min', 'icons' => '', 'module_id' => 88, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 103, 'name' => 'Prg Según Reg', 'icons' => '', 'module_id' => 88, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 104, 'name' => 'Resúm Tit.Prop', 'icons' => '', 'module_id' => 88, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 105, 'name' => 'Prog.Cond.Títu', 'icons' => '', 'module_id' => 88, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 106, 'name' => 'Estado Cta Cte', 'icons' => '', 'module_id' => 88, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 107, 'name' => 'Orden de Pago', 'icons' => '', 'module_id' => 88, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 108, 'name' => 'Por Orden Alfab', 'icons' => '', 'module_id' => 89, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 109, 'name' => 'Por Programa', 'icons' => '', 'module_id' => 89, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 110, 'name' => 'Padrón Gr SocxPrg', 'icons' => '', 'module_id' => 89, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 111, 'name' => 'Pagos Viv Det', 'icons' => '', 'module_id' => 89, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 112, 'name' => 'Resúm PagosxPrg', 'icons' => '', 'module_id' => 89, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 113, 'name' => 'Bolsa Vipolina', 'icons' => '', 'module_id' => 89, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 114, 'name' => 'Desctos Efect.', 'icons' => '', 'module_id' => 89, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 115, 'name' => 'Estados Letras', 'icons' => '', 'module_id' => 89, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 116, 'name' => 'Por Ins y Progra.', 'icons' => '', 'module_id' => 89, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 117, 'name' => 'Arch.Documentos', 'icons' => '', 'module_id' => 89, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 118, 'name' => 'Dctos.Personales', 'icons' => '', 'module_id' => 89, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 119, 'name' => 'Socio.Prog.F.Pago', 'icons' => '', 'module_id' => 89, 'module_group_id' => 1, 'is_base'=>0],
            //SERLAV
            ['id' => 120, 'name' => 'Serlav', 'icons' => '', 'module_id' => 1, 'module_group_id' => 1, 'is_base'=>1],

            ['id' => 121, 'name' => 'Maestros', 'icons' => '', 'module_id' => 120, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 122, 'name' => 'Movimientos', 'icons' => '', 'module_id' => 120, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 123, 'name' => 'Consultas', 'icons' => '', 'module_id' => 120, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 124, 'name' => 'Reportes', 'icons' => '', 'module_id' => 120, 'module_group_id' => 1, 'is_base'=>1],

            ['id' => 125, 'name' => 'Fich Prést', 'icons' => '', 'module_id' => 121, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 126, 'name' => 'Nuevos Prést', 'icons' => '', 'module_id' => 121, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 127, 'name' => 'PagosxContab', 'icons' => '', 'module_id' => 121, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 128, 'name' => 'Cancel. Prést', 'icons' => '', 'module_id' => 122, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 129, 'name' => 'Elim Morosidad', 'icons' => '', 'module_id' => 122, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 130, 'name' => 'Pago x Caja', 'icons' => '', 'module_id' => 123, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 131, 'name' => 'Fich Socios', 'icons' => '', 'module_id' => 123, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 132, 'name' => 'Garantes', 'icons' => '', 'module_id' => 123, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 133, 'name' => 'Est Ctas Ctes', 'icons' => '', 'module_id' => 123, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 134, 'name' => 'Voucher.Socio', 'icons' => '', 'module_id' => 123, 'module_group_id' => 1, 'is_base'=>0],
            
            ['id' => 135, 'name' => 'Por Orden Alfab', 'icons' => '', 'module_id' => 124, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 136, 'name' => 'Soc Dsctos Indeb', 'icons' => '', 'module_id' => 124, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 137, 'name' => 'Socios Morosos', 'icons' => '', 'module_id' => 124, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 138, 'name' => 'Desctos Efect.', 'icons' => '', 'module_id' => 124, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 139, 'name' => 'Acum Mens de Caja', 'icons' => '', 'module_id' => 124, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 140, 'name' => 'Garantes', 'icons' => '', 'module_id' => 124, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 141, 'name' => 'Nuevos Prestamos', 'icons' => '', 'module_id' => 124, 'module_group_id' => 1, 'is_base'=>0],
            //CTAS. CTES
            ['id' => 142, 'name' => 'Ctas Ctes', 'icons' => '', 'module_id' => 1, 'module_group_id' => 1, 'is_base'=>1],

            ['id' => 143, 'name' => 'Maestros', 'icons' => '', 'module_id' => 142, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 144, 'name' => 'Movimientos', 'icons' => '', 'module_id' => 142, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 145, 'name' => 'Consultas', 'icons' => '', 'module_id' => 142, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 146, 'name' => 'Reportes', 'icons' => '', 'module_id' => 142, 'module_group_id' => 1, 'is_base'=>1],
            
            ['id' => 147, 'name' => 'PagosxContab', 'icons' => '', 'module_id' => 143, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 148, 'name' => 'Aport Viv.', 'icons' => '', 'module_id' => 143, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 149, 'name' => 'Act. Socios', 'icons' => '', 'module_id' => 143, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 150, 'name' => 'Acum.Apertu', 'icons' => '', 'module_id' => 143, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 151, 'name' => 'Ficha Socios', 'icons' => '', 'module_id' => 144, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 152, 'name' => 'Voucher.Socio', 'icons' => '', 'module_id' => 144, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 153, 'name' => 'Estad Cta Cte', 'icons' => '', 'module_id' => 145, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 154, 'name' => 'Orden Pago', 'icons' => '', 'module_id' => 145, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 155, 'name' => 'Orden Pago Esp', 'icons' => '', 'module_id' => 145, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 156, 'name' => 'Dcto Programad', 'icons' => '', 'module_id' => 145, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 157, 'name' => 'Pag AcumxCod Dsct', 'icons' => '', 'module_id' => 146, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 158, 'name' => 'Pagos AcumxSocios', 'icons' => '', 'module_id' => 146, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 159, 'name' => 'Ctrl Pagos x Caja', 'icons' => '', 'module_id' => 146, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 160, 'name' => 'Proyectado', 'icons' => '', 'module_id' => 146, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 161, 'name' => 'Acum.MesxPlanxDct', 'icons' => '', 'module_id' => 146, 'module_group_id' => 1, 'is_base'=>0],
            //RECUPERACIONES
            ['id' => 162, 'name' => 'Recuperaciones', 'icons' => '', 'module_id' => 1, 'module_group_id' => 1, 'is_base'=>1],

            ['id' => 163, 'name' => 'Maestros', 'icons' => '', 'module_id' => 162, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 164, 'name' => 'Movimientos', 'icons' => '', 'module_id' => 162, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 165, 'name' => 'Consultas', 'icons' => '', 'module_id' => 162, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 166, 'name' => 'Reportes', 'icons' => '', 'module_id' => 162, 'module_group_id' => 1, 'is_base'=>1],

            ['id' => 167, 'name' => 'Arch Control', 'icons' => '', 'module_id' => 163, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 168, 'name' => 'Notificacion', 'icons' => '', 'module_id' => 164, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 169, 'name' => 'Cronog.Pagos', 'icons' => '', 'module_id' => 164, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 170, 'name' => 'Ficha Socios', 'icons' => '', 'module_id' => 165, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 171, 'name' => 'Estado CtaCte', 'icons' => '', 'module_id' => 165, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 172, 'name' => 'Ordenes de Pag', 'icons' => '', 'module_id' => 165, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 173, 'name' => 'Res.Ing.Día Prog', 'icons' => '', 'module_id' => 165, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 174, 'name' => 'Notificacion x Prog', 'icons' => '', 'module_id' => 166, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 175, 'name' => 'Deuda x Apo ProgViv', 'icons' => '', 'module_id' => 166, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 176, 'name' => 'Saldos Pend.xProg', 'icons' => '', 'module_id' => 166, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 177, 'name' => 'Pago PendxFec Vcm', 'icons' => '', 'module_id' => 166, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 178, 'name' => 'Impr Notificac', 'icons' => '', 'module_id' => 166, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 179, 'name' => 'Deud.PrgViv.xCodD', 'icons' => '', 'module_id' => 166, 'module_group_id' => 1, 'is_base'=>0],
            //ELECTORAL
            ['id' => 180, 'name' => 'Electoral', 'icons' => '', 'module_id' => 1, 'module_group_id' => 1, 'is_base'=>1],

            ['id' => 181, 'name' => 'Movimientos', 'icons' => '', 'module_id' => 180, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 182, 'name' => 'Consultas', 'icons' => '', 'module_id' => 180, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 183, 'name' => 'Reportes', 'icons' => '', 'module_id' => 180, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 184, 'name' => 'Procesos', 'icons' => '', 'module_id' => 180, 'module_group_id' => 1, 'is_base'=>1],

            ['id' => 185, 'name' => 'Ingr.xMulta', 'icons' => '', 'module_id' => 181, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 186, 'name' => 'Ficha Socios', 'icons' => '', 'module_id' => 182, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 187, 'name' => 'Estimado Cta.Cte', 'icons' => '', 'module_id' => 182, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 188, 'name' => 'Soc.Afec.Multa', 'icons' => '', 'module_id' => 183, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 189, 'name' => 'Pad.Soc.xProg', 'icons' => '', 'module_id' => 183, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 190, 'name' => 'Cambio Fecha', 'icons' => '', 'module_id' => 184, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 191, 'name' => 'Transf.Dest.Vivie', 'icons' => '', 'module_id' => 184, 'module_group_id' => 1, 'is_base'=>0],
            //Almacenes
            ['id' => 192, 'name' => 'Almacenes', 'icons' => '', 'module_id' => 1, 'module_group_id' => 1, 'is_base'=>1],

            ['id' => 193, 'name' => 'Maestros', 'icons' => '', 'module_id' => 192, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 194, 'name' => 'Movimientos', 'icons' => '', 'module_id' => 192, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 195, 'name' => 'Procesos', 'icons' => '', 'module_id' => 192, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 196, 'name' => 'Reportes', 'icons' => '', 'module_id' => 192, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 197, 'name' => 'Soporte', 'icons' => '', 'module_id' => 192, 'module_group_id' => 1, 'is_base'=>1],

            ['id' => 198, 'name' => 'Materiales', 'icons' => '', 'module_id' => 193, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 199, 'name' => 'Proveedor', 'icons' => '', 'module_id' => 193, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 200, 'name' => 'Activos', 'icons' => '', 'module_id' => 193, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 201, 'name' => 'Disct.Act.', 'icons' => '', 'module_id' => 193, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 202, 'name' => 'Ingreso/Salida', 'icons' => '', 'module_id' => 194, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 203, 'name' => 'Fotocopias', 'icons' => '', 'module_id' => 194, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 204, 'name' => 'Act.Saldos', 'icons' => '', 'module_id' => 195, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 205, 'name' => 'Cierre Año', 'icons' => '', 'module_id' => 195, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 206, 'name' => 'Trans.saldo', 'icons' => '', 'module_id' => 195, 'module_group_id' => 1, 'is_base'=>0],
            
            ['id' => 207, 'name' => 'Kardex Cantidad', 'icons' => '', 'module_id' => 196, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 208, 'name' => 'Kardex Valorizado', 'icons' => '', 'module_id' => 196, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 209, 'name' => 'Consumo x Area', 'icons' => '', 'module_id' => 196, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 210, 'name' => 'Compra x Proveedor', 'icons' => '', 'module_id' => 196, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 211, 'name' => 'Saldo Actual', 'icons' => '', 'module_id' => 196, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 212, 'name' => 'Saldo Anterior', 'icons' => '', 'module_id' => 196, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 213, 'name' => 'Alerta Stock', 'icons' => '', 'module_id' => 196, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 214, 'name' => 'Toma Inventario', 'icons' => '', 'module_id' => 196, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 215, 'name' => 'Reg.Invetario', 'icons' => '', 'module_id' => 196, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 216, 'name' => 'Fotocopias', 'icons' => '', 'module_id' => 196, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 217, 'name' => 'Fch.Pro', 'icons' => '', 'module_id' => 197, 'module_group_id' => 1, 'is_base'=>0],
            //PLANILLAS
            ['id' => 218, 'name' => 'Planillas', 'icons' => '', 'module_id' => 1, 'module_group_id' => 1, 'is_base'=>1],

            ['id' => 219, 'name' => 'Maestros', 'icons' => '', 'module_id' => 218, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 220, 'name' => 'Movimientos', 'icons' => '', 'module_id' => 218, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 221, 'name' => 'Procesos', 'icons' => '', 'module_id' => 218, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 222, 'name' => 'Reportes', 'icons' => '', 'module_id' => 218, 'module_group_id' => 1, 'is_base'=>1],
            ['id' => 223, 'name' => 'Soporte', 'icons' => '', 'module_id' => 218, 'module_group_id' => 1, 'is_base'=>1],

            ['id' => 224, 'name' => 'Personal', 'icons' => '', 'module_id' => 219, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 225, 'name' => 'Conceptos', 'icons' => '', 'module_id' => 219, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 226, 'name' => 'AFPs', 'icons' => '', 'module_id' => 219, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 227, 'name' => 'Conc.AFPs', 'icons' => '', 'module_id' => 219, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 228, 'name' => 'Fórmulas', 'icons' => '', 'module_id' => 219, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 229, 'name' => 'Patrón Form', 'icons' => '', 'module_id' => 219, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 230, 'name' => 'Sit.Lab.', 'icons' => '', 'module_id' => 219, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 231, 'name' => 'Cuentas Ast', 'icons' => '', 'module_id' => 219, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 232, 'name' => 'Conc F/V', 'icons' => '', 'module_id' => 220, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 233, 'name' => 'Reg Hrs', 'icons' => '', 'module_id' => 220, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 234, 'name' => 'Adel Quinc', 'icons' => '', 'module_id' => 220, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 235, 'name' => 'Cuenta Cte', 'icons' => '', 'module_id' => 220, 'module_group_id' => 1, 'is_base'=>0],
        
            ['id' => 236, 'name' => 'Cálculo', 'icons' => '', 'module_id' => 221, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 237, 'name' => 'Cierre Per', 'icons' => '', 'module_id' => 221, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 238, 'name' => 'Trans Vacac', 'icons' => '', 'module_id' => 221, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 239, 'name' => 'Trans Grat', 'icons' => '', 'module_id' => 221, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 240, 'name' => 'Trans Cont', 'icons' => '', 'module_id' => 221, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 241, 'name' => 'Bolsa vipo', 'icons' => '', 'module_id' => 221, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 242, 'name' => 'Tope Adela', 'icons' => '', 'module_id' => 221, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 243, 'name' => 'Mvto Plan', 'icons' => '', 'module_id' => 222, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 244, 'name' => 'Pre Plan', 'icons' => '', 'module_id' => 222, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 245, 'name' => 'Boleta', 'icons' => '', 'module_id' => 222, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 246, 'name' => 'ResúmenxConc', 'icons' => '', 'module_id' => 222, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 247, 'name' => 'Recib Adel', 'icons' => '', 'module_id' => 222, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 248, 'name' => 'Libro Plan', 'icons' => '', 'module_id' => 222, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 249, 'name' => 'Dec.Jur SSP', 'icons' => '', 'module_id' => 222, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 250, 'name' => 'Apor AFPs', 'icons' => '', 'module_id' => 222, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 251, 'name' => 'Asto Cont', 'icons' => '', 'module_id' => 222, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 252, 'name' => 'Desc C.C.', 'icons' => '', 'module_id' => 222, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 253, 'name' => 'Conc.Pers', 'icons' => '', 'module_id' => 222, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 254, 'name' => 'Neto Percib', 'icons' => '', 'module_id' => 222, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 255, 'name' => 'Rec.Privisi', 'icons' => '', 'module_id' => 222, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 256, 'name' => 'Recib.Ren.C', 'icons' => '', 'module_id' => 222, 'module_group_id' => 1, 'is_base'=>0],

            ['id' => 257, 'name' => 'Estado Per', 'icons' => '', 'module_id' => 223, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 258, 'name' => 'Sel Proc', 'icons' => '', 'module_id' => 223, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 259, 'name' => 'Sel Per', 'icons' => '', 'module_id' => 223, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 260, 'name' => 'Gen Per', 'icons' => '', 'module_id' => 223, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 261, 'name' => 'Per Trans', 'icons' => '', 'module_id' => 223, 'module_group_id' => 1, 'is_base'=>0],
            //SEGURIDAD
            ['id' => 262, 'name' => 'Seguridad', 'icons' => '', 'module_id' => null, 'module_group_id' => 1, 'is_base'=>1],

            ['id' => 263, 'name' => 'Reorganizar', 'icons' => '', 'module_id' => 262, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 264, 'name' => 'Copias de datos', 'icons' => '', 'module_id' => 262, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 265, 'name' => 'Restaurar datos', 'icons' => '', 'module_id' => 262, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 266, 'name' => 'Usuarios', 'icons' => '', 'module_id' => 262, 'module_group_id' => 1, 'is_base'=>0],
            ['id' => 267, 'name' => 'Tablas', 'icons' => '', 'module_id' => 262, 'module_group_id' => 1, 'is_base'=>0],

        ];

        // Simple Queries
        //$this->db->query( "INSERT INTO groups_module (name) VALUES(:name)",  $data );

        // Using Query Builder
        $this->db->table('modules')->insertBatch($data);
    }
}
