<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrgansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organs')->insert([
            ["name" => "Piel"],
            ["name" => "Nariz"],
            ["name" => "Boca"],
            ["name" => "Ojos"],
            ["name" => "Paladar"],
            ["name" => "Garganta"],
            ["name" => "Párpados"],
            ["name" => "Labios"],
            ["name" => "Brazos"],
            ["name" => "Piernas"],
            ["name" => "Manos"],
            ["name" => "Cabeza"],
            ["name" => "Rostro"],
            ["name" => "Cuello"],
            ["name" => "Espalda"],
            ["name" => "Espalda baja"],
            ["name" => "Dedos"],
            ["name" => "Pelvis"],
            ["name" => "Cintura"],
            ["name" => "Rodillas"],
            ["name" => "Tobillos"],
            ["name" => "Ganglio espinal"],
            ["name" => "Nervio oftálmico"],
            ["name" => "Raíz nerviosa"],
            ["name" => "Articulación sacro ilíaca"],
            ["name" => "Nervios clúneos"],
            ["name" => "Nervio esplácnico"],
            ["name" => "Plexo hipogástrico superior"],
            ["name" => "Cadena simpático lumbar"],
            ["name" => "Ganglio de Walter"],
            ["name" => "Nervio trigémino"],
            ["name" => "Nervio esfenopalatino"],
            ["name" => "Plexos simpáticos"],
            ["name" => "Nervio occipital mayor"],
            ["name" => "Grasa visceral"],
            ["name" => "Hígado"],
            ["name" => "Estómago"],
            ["name" => "Hombros"],
            ["name" => "Arterias"],
            ["name" => "Corazón"],
            ["name" => "Intestinos"],
            ["name" => "Bilis"],
            ["name" => "Pecho"],
            ["name" => "Cerebro"],
            ["name" => "Tórax"],
            ["name" => "Válvulas del corazón"],
            ["name" => "Pericardio"],
            ["name" => "Pulmones"],
            ["name" => "Miocardio"],
            ["name" => "Endocardio"],
            ["name" => "Aurículas"],
            ["name" => "Ventrículos"],
            ["name" => "Aorta"],
            ["name" => "Vena cava superior"],
            ["name" => "Vena cava inferior"],
            ["name" => "Vena pulmonar"],
            ["name" => "Válvulas sigmoideas"],
            ["name" => "Tabiques o septos"],
            ["name" => "Esófago"],
            ["name" => "Intestino delgado"],
            ["name" => "Recto"],
            ["name" => "Vías biliares"],
            ["name" => "Vesícula"],
            ["name" => "Peritoneo"],
            ["name" => "Colédoco"],
            ["name" => "Pared abdominal"],
            ["name" => "Páncreas"],
            ["name" => "Bazo"],
            ["name" => "Ombligo"],
            ["name" => "Tiroides"],
            ["name" => "Endometrio"],
            ["name" => "Cuello uterino"],
            ["name" => "Ovarios"],
            ["name" => "Testículos"],
            ["name" => "Vejiga"],
            ["name" => "Riñón"],
            ["name" => "Pulmón"],
            ["name" => "Próstata"],
            ["name" => "Sangre"],
            ["name" => "Lunar"],
            ["name" => "Apéndice"],
            ["name" => "Tracto digestivo"],
            ["name" => "Vagina"],
            ["name" => "Ano"],
            ["name" => "Cuero cabelludo"],
            ["name" => "Pene"],
            ["name" => "Glándulas suprarrenales"],
            ["name" => "Glándulas sexuales"],
            ["name" => "Nervios"],
            ["name" => "Hormona cortisol"],
            ["name" => "Sistema endocrino"],
            ["name" => "Estrógenos"],
            ["name" => "Testosterona"],
            ["name" => "Hormona tioidea"],
            ["name" => "Estomágo"],
            ["name" => "Intestino grueso"],
            ["name" => "Colón"],
            ["name" => "Vesicula biliar"],
            ["name" => "Columna"],
            ["name" => "Sistema digestivo"],
            ["name" => "Cabello"],
            ["name" => "Huesos"],
            ["name" => "Labios menores"],
            ["name" => "Ligamento del ovario"],
            ["name" => "Matriz"],
            ["name" => "Membrana perineal"],
            ["name" => "Cadera"],
            ["name" => "Abdomen"],
            ["name" => "Canal cervical"],
            ["name" => "Carúncula himeneal"],
            ["name" => "Cérvix"],
            ["name" => "Clítoris"],
            ["name" => "Estrógeno"],
            ["name" => "Frenillo de clítoris"],
            ["name" => "Glande del clítoris"],
            ["name" => "Himen"],
            ["name" => "Labios mayores"],
            ["name" => "Miometrio"],
            ["name" => "Músculo isquiocavernoso"],
            ["name" => "Ovario derecho"],
            ["name" => "Ovario izquierdo"],
            ["name" => "Óvulo"],
            ["name" => "Perineo"],
            ["name" => "Progesterona"],
            ["name" => "Pubis"],
            ["name" => "Punto G"],
            ["name" => "Trompa de falopio derecha"],
            ["name" => "Trompa de falopio izquierda"],
            ["name" => "Uretra"],
            ["name" => "Útero"],
            ["name" => "Útero inferior"],
            ["name" => "Útero superior"],
            ["name" => "Ganglios linfáticos"],
            ["name" => "Venas"],
            ["name" => "Mucosa"],
            ["name" => "Muslos"],
            ["name" => "Frente"],
            ["name" => "Entrecejo"],
            ["name" => "Contorno de ojos"],
            ["name" => "Metón"],
            ["name" => "Parpados"],
            ["name" => "Axilas"],
            ["name" => "Colágeno"],
            ["name" => "Ácido hialurónico"],
            ["name" => "Higado"],
            ["name" => "Uréteres"],
            ["name" => "Estomago"],
            ["name" => "Oídos"],
            ["name" => "Labio"],
            ["name" => "Lengua"],
            ["name" => "Torax"],
            ["name" => "Moco"],
            ["name" => "Ganglios"],
            ["name" => "Nervios periféricos"],
            ["name" => "Columna vertebral"],
            ["name" => "Columna cervical"],
            ["name" => "Médula espinal"],
            ["name" => "Fosa nasal"],
            ["name" => "Tabique nasal"],
            ["name" => "Glándula pituitaria"],
            ["name" => "Canal raquídeo"],
            ["name" => "Pantorrillas"],
            ["name" => "Diente"],
            ["name" => "Muela"],
            ["name" => "Muela del juicio"],
            ["name" => "Dientes de leche"],
            ["name" => "Encía"],
            ["name" => "Maxilar"],
            ["name" => "Paladar duro"],
            ["name" => "Paladar blando"],
            ["name" => "Trígono tremolar"],
            ["name" => "Amígdala"],
            ["name" => "Úvula"],
            ["name" => "Incisivo cental"],
            ["name" => "Incisivo lateral"],
            ["name" => "Canino"],
            ["name" => "Primer premolar"],
            ["name" => "Segundo premolar"],
            ["name" => "Primer molar"],
            ["name" => "Segundo molar"],
            ["name" => "Tercer molar"],
            ["name" => "Retina"],
            ["name" => "Pupíla"],
            ["name" => "Coroides"],
            ["name" => "Globo ocular"],
            ["name" => "Cristalino"],
            ["name" => "Córnea"],
            ["name" => "Músculos estraoculares"],
            ["name" => "Péstañas"],
            ["name" => "Oído"],
            ["name" => "Laringe"],
            ["name" => "Faringe"],
            ["name" => "Senos paranasales"],
            ["name" => "Nasofaringe"],
            ["name" => "Orofaringe"],
            ["name" => "Cavidad bucal"],
            ["name" => "Glándulas salivares"],
            ["name" => "Amígdalas"],
            ["name" => "Arterias coronarias"],
            ["name" => "Glándulas mamarias"],
            ["name" => "Cráneo"],
            ["name" => "Músculo tendinoso"],
            ["name" => "Tejidos blandos"],
            ["name" => "Vágina"],
            ["name" => "Trompas de Falopio"],
            ["name" => "Aparato reproductor femenino"],
            ["name" => "Vasos sanguíneos"],
            ["name" => "Arteria"],
            ["name" => "Glándulas salivales"],
            ["name" => "Caja torácica"],
            ["name" => "Mamas"],
            ["name" => "Codo"],
            ["name" => "Muñeca"],
            ["name" => "Yugular"],
            ["name" => "Articulaciones"],
            ["name" => "Cartílago"],
            ["name" => "Sistema nervioso central"],
            ["name" => "Arteriolas"],
            ["name" => "Capilares"],
            ["name" => "Entesis"],
            ["name" => "Diartrosis"],
            ["name" => "Tejido nervioso"],
            ["name" => "Médula ósea"],
            ["name" => "Tendones"],
            ["name" => "Cara"],
            ["name" => "Grasa"],
            ["name" => "Células muertas"],
            ["name" => "Cejas"],
            ["name" => "Papada"],
            ["name" => "Melanina"],
            ["name" => "Bigote"],
            ["name" => "Zona de bikini"],
            ["name" => "Glúteos"],
            ["name" => "Pie"],
            ["name" => "Clavícula"],
            ["name" => "Manguito rotador"],
            ["name" => "Tibia"],
            ["name" => "Peroné"],
            ["name" => "Fémur"],
            ["name" => "Radio"],
            ["name" => "Adenoma"],
            ["name" => "Andrógenos"],
            ["name" => "Conducto deferente"],
            ["name" => "Conducto eyaculador"],
            ["name" => "Cuerpo cavernoso"],
            ["name" => "Epidídimo"],
            ["name" => "Escroto"],
            ["name" => "Glande"],
            ["name" => "Glándula bulbouretral"],
            ["name" => "Glándula prostática"],
            ["name" => "Glándula suprarrenal"],
            ["name" => "Prepucio"],
            ["name" => "Uréter"],
            ["name" => "Vesícula seminal"],
        ]);
    }
}
