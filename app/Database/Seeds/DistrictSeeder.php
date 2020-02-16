<?php

namespace App\Database\Seeds;

class DistrictSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            ['id'=>'***','description_short'=>'ACTUALIZAR DIRECCION','description_long'=>'ACTUALIZAR DIRECCION'],
            ['id'=>'0','description_short'=>'SIN INFORMACION','description_long'=>'SIN INFORMACION'],
            ['id'=>'998','description_short'=>'PROVINCIA','description_long'=>'PROVINCIA'],
            ['id'=>'999','description_short'=>'FUERA DEL PAIS','description_long'=>'FUERA DEL PAIS'],
            ['id'=>'C01','description_short'=>'CALLAO','description_long'=>'CALLAO'],
            ['id'=>'C02','description_short'=>'BELLAVISTA','description_long'=>'BELLAVISTA'],
            ['id'=>'C03','description_short'=>'CARMEN DE LA LEGUA','description_long'=>'CARMEN DE LA LEGUA'],
            ['id'=>'C04','description_short'=>'LA PERLA','description_long'=>'LA PERLA'],
            ['id'=>'C05','description_short'=>'LA PUNTA','description_long'=>'LA PUNTA'],
            ['id'=>'C06','description_short'=>'VENTANILLA','description_long'=>'VENTANILLA'],
            ['id'=>'L01','description_short'=>'CERCADO DE LIMA','description_long'=>'CERCADO DE LIMA'],
            ['id'=>'L02','description_short'=>'ANCON','description_long'=>'ANCON'],
            ['id'=>'L03','description_short'=>'ATE','description_long'=>'ATE'],
            ['id'=>'L04','description_short'=>'BARRANCO','description_long'=>'BARRANCO'],
            ['id'=>'L05','description_short'=>'BREÑA','description_long'=>'BREÑA'],
            ['id'=>'L06','description_short'=>'CARABAYLLO','description_long'=>'CARABAYLLO'],
            ['id'=>'L07','description_short'=>'COMAS','description_long'=>'COMAS'],
            ['id'=>'L08','description_short'=>'CHACLACAYO','description_long'=>'CHACLACAYO'],
            ['id'=>'L09','description_short'=>'CHORRILLOS','description_long'=>'CHORRILLOS'],
            ['id'=>'L10','description_short'=>'EL AGUSTINO','description_long'=>'EL AGUSTINO'],
            ['id'=>'L11','description_short'=>'JESUS MARIA','description_long'=>'JESUS MARIA'],
            ['id'=>'L12','description_short'=>'LA MOLINA','description_long'=>'LA MOLINA'],
            ['id'=>'L13','description_short'=>'LA VICTORIA','description_long'=>'LA VICTORIA'],
            ['id'=>'L14','description_short'=>'LINCE','description_long'=>'LINCE'],
            ['id'=>'L15','description_short'=>'LURIGANCHO','description_long'=>'LURIGANCHO'],
            ['id'=>'L16','description_short'=>'LURIN','description_long'=>'LURIN'],
            ['id'=>'L17','description_short'=>'MAGDALENA DEL MAR','description_long'=>'MAGDALENA DEL MAR'],
            ['id'=>'L18','description_short'=>'MIRAFLORES','description_long'=>'MIRAFLORES'],
            ['id'=>'L19','description_short'=>'PACHACAMAC','description_long'=>'PACHACAMAC'],
            ['id'=>'L20','description_short'=>'PUCUSANA','description_long'=>'PUCUSANA'],
            ['id'=>'L21','description_short'=>'PUEBLO LIBRE','description_long'=>'PUEBLO LIBRE'],
            ['id'=>'L22','description_short'=>'PUENTE PIEDRA','description_long'=>'PUENTE PIEDRA'],
            ['id'=>'L23','description_short'=>'PUNTA NEGRA','description_long'=>'PUNTA NEGRA'],
            ['id'=>'L24','description_short'=>'PUNTA HERMOSA','description_long'=>'PUNTA HERMOSA'],
            ['id'=>'L25','description_short'=>'RIMAC','description_long'=>'RIMAC'],
            ['id'=>'L26','description_short'=>'SAN BARTOLO','description_long'=>'SAN BARTOLO'],
            ['id'=>'L27','description_short'=>'SAN ISIDRO','description_long'=>'SAN ISIDRO'],
            ['id'=>'L28','description_short'=>'INDEPENDENCIA','description_long'=>'INDEPENDENCIA'],
            ['id'=>'L29','description_short'=>'SAN JUAN DE MIRAFLORES','description_long'=>'SAN JUAN DE MIRAFLORES'],
            ['id'=>'L30','description_short'=>'SAN LUIS','description_long'=>'SAN LUIS'],
            ['id'=>'L31','description_short'=>'SAN MARTIN DE PORRES','description_long'=>'SAN MARTIN DE PORRES'],
            ['id'=>'L32','description_short'=>'SAN MIGUEL','description_long'=>'SAN MIGUEL'],
            ['id'=>'L33','description_short'=>'SANTIAGO DE SURCO','description_long'=>' SANTIAGO DE SURCO'],
            ['id'=>'L34','description_short'=>'SURQUILLO','description_long'=>' SURQUILLO'],
            ['id'=>'L35','description_short'=>'VILLA MARIA DEL TRIUNFO','description_long'=>' VILLA MARIA DEL TRIUNFO'],
            ['id'=>'L36','description_short'=>'SAN JUAN DE LURIGANCHO','description_long'=>' SAN JUAN DE LURIGANCHO'],
            ['id'=>'L37','description_short'=>'SANTA MARIA DEL MAR','description_long'=>' SANTA MARIA DEL MAR'],
            ['id'=>'L38','description_short'=>'SANTA ROSA','description_long'=>' SANTA ROSA'],
            ['id'=>'L39','description_short'=>'LOS OLIVOS','description_long'=>' LOS OLIVOS'],
            ['id'=>'L40','description_short'=>'CIENEGUILLA','description_long'=>'CIENEGUILLA'],
            ['id'=>'L41','description_short'=>'SAN BORJA','description_long'=>'SAN BORJA'],
            ['id'=>'L42','description_short'=>'VILLA SALVADOR','description_long'=>'VILLA SALVADOR'],
            ['id'=>'L43','description_short'=>'SANTA ANITA','description_long'=>'SANTA ANITA'],
        ];

        $this->db->table('districts')->insertBatch($data);
    }
}
