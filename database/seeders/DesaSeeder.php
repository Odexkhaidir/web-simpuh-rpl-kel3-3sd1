<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $desas = [
    // Kecamatan Kandangserang (kode: 332601)
    ['kode_desa' => '3326012001' , 'nama_desa' => 'Klesem' , 'kode_kecamatan' => '332601' , 'kecamatan_id' => 1],
    ['kode_desa' => '3326012002' , 'nama_desa' => 'Bodas' , 'kode_kecamatan' => '332601' , 'kecamatan_id' => 1],
    ['kode_desa' => '3326012003' , 'nama_desa' => 'Sukoharjo' , 'kode_kecamatan' => '332601' , 'kecamatan_id' => 1],
    ['kode_desa' => '3326012004' , 'nama_desa' => 'Gembong' , 'kode_kecamatan' => '332601' , 'kecamatan_id' => 1],
    ['kode_desa' => '3326012005' , 'nama_desa' => 'Garungwiyoro' , 'kode_kecamatan' => '332601' , 'kecamatan_id' => 1],
    ['kode_desa' => '3326012006' , 'nama_desa' => 'Bojongkoneng' , 'kode_kecamatan' => '332601' , 'kecamatan_id' => 1],
    ['kode_desa' => '3326012007' , 'nama_desa' => 'Bubak' , 'kode_kecamatan' => '332601' , 'kecamatan_id' => 1],
    ['kode_desa' => '3326012008' , 'nama_desa' => 'Wangkelang' , 'kode_kecamatan' => '332601' , 'kecamatan_id' => 1],
    ['kode_desa' => '3326012009' , 'nama_desa' => 'Kandangserang' , 'kode_kecamatan' => '332601' , 'kecamatan_id' => 1],
    ['kode_desa' => '3326012010' , 'nama_desa' => 'Luragung' , 'kode_kecamatan' => '332601' , 'kecamatan_id' => 1],
    ['kode_desa' => '3326012011' , 'nama_desa' => 'Lambur' , 'kode_kecamatan' => '332601' , 'kecamatan_id' => 1],
    ['kode_desa' => '3326012012' , 'nama_desa' => 'Tajur' , 'kode_kecamatan' => '332601' , 'kecamatan_id' => 1],
    ['kode_desa' => '3326012013' , 'nama_desa' => 'Trajumas' , 'kode_kecamatan' => '332601' , 'kecamatan_id' => 1],
    ['kode_desa' => '3326012014' , 'nama_desa' => 'Karanggondang' , 'kode_kecamatan' => '332601' , 'kecamatan_id' => 1],


    // Kecamatan Paninggaran (kode: 332602)
    ['kode_desa' => '3326022001' , 'nama_desa' => 'Werdi' , 'kode_kecamatan' => '332602' , 'kecamatan_id' => 2],
    ['kode_desa' => '3326022002' , 'nama_desa' => 'Winduaji' , 'kode_kecamatan' => '332602' , 'kecamatan_id' => 2],
    ['kode_desa' => '3326022003' , 'nama_desa' => 'Krandegan' , 'kode_kecamatan' => '332602' , 'kecamatan_id' => 2],
    ['kode_desa' => '3326022004' , 'nama_desa' => 'Lumeneng' , 'kode_kecamatan' => '332602' , 'kecamatan_id' => 2],
    ['kode_desa' => '3326022005' , 'nama_desa' => 'Tangeran' , 'kode_kecamatan' => '332602' , 'kecamatan_id' => 2],
    ['kode_desa' => '3326022006' , 'nama_desa' => 'Kaliboja' , 'kode_kecamatan' => '332602' , 'kecamatan_id' => 2],
    ['kode_desa' => '3326022007' , 'nama_desa' => 'Kaliombo' , 'kode_kecamatan' => '332602' , 'kecamatan_id' => 2],
    ['kode_desa' => '3326022008' , 'nama_desa' => 'Botosari' , 'kode_kecamatan' => '332602' , 'kecamatan_id' => 2],
    ['kode_desa' => '3326022009' , 'nama_desa' => 'Sawangan' , 'kode_kecamatan' => '332602' , 'kecamatan_id' => 2],
    ['kode_desa' => '3326022010' , 'nama_desa' => 'Paninggaran' , 'kode_kecamatan' => '332602' , 'kecamatan_id' => 2],
    ['kode_desa' => '3326022011' , 'nama_desa' => 'Domiyang' , 'kode_kecamatan' => '332602' , 'kecamatan_id' => 2],
    ['kode_desa' => '3326022012' , 'nama_desa' => 'Notogiwang' , 'kode_kecamatan' => '332602' , 'kecamatan_id' => 2],
    ['kode_desa' => '3326022013' , 'nama_desa' => 'Lambanggelun' , 'kode_kecamatan' => '332602' , 'kecamatan_id' => 2],
    ['kode_desa' => '3326022014' , 'nama_desa' => 'Tenogo' , 'kode_kecamatan' => '332602' , 'kecamatan_id' => 2],
    ['kode_desa' => '3326022015' , 'nama_desa' => 'Bedagung' , 'kode_kecamatan' => '332602' , 'kecamatan_id' => 2],

    // Kecamatan Lebakbarang (kode: 332603)
    ['kode_desa' => '3326032001' , 'nama_desa' => 'Tembelangunung' , 'kode_kecamatan' => '332603' , 'kecamatan_id' => 3],
    ['kode_desa' => '3326032002' , 'nama_desa' => 'Pamutuh' , 'kode_kecamatan' => '332603' , 'kecamatan_id' => 3],
    ['kode_desa' => '3326032003' , 'nama_desa' => 'Depok' , 'kode_kecamatan' => '332603' , 'kecamatan_id' => 3],
    ['kode_desa' => '3326032004' , 'nama_desa' => 'Wonosido' , 'kode_kecamatan' => '332603' , 'kecamatan_id' => 3],
    ['kode_desa' => '3326032005' , 'nama_desa' => 'Timbangsari' , 'kode_kecamatan' => '332603' , 'kecamatan_id' => 3],
    ['kode_desa' => '3326032006' , 'nama_desa' => 'Sidomulyo' , 'kode_kecamatan' => '332603' , 'kecamatan_id' => 3],
    ['kode_desa' => '3326032007' , 'nama_desa' => 'Kutorembet' , 'kode_kecamatan' => '332603' , 'kecamatan_id' => 3],
    ['kode_desa' => '3326032008' , 'nama_desa' => 'Lebakbarang' , 'kode_kecamatan' => '332603' , 'kecamatan_id' => 3],
    ['kode_desa' => '3326032009' , 'nama_desa' => 'Kapundutan' , 'kode_kecamatan' => '332603' , 'kecamatan_id' => 3],
    ['kode_desa' => '3326032010' , 'nama_desa' => 'Bantarkulon' , 'kode_kecamatan' => '332603' , 'kecamatan_id' => 3],
    ['kode_desa' => '3326032011' , 'nama_desa' => 'Mendolo' , 'kode_kecamatan' => '332603' , 'kecamatan_id' => 3],

    // Kecamatan Petungkriyono (kode: 332604)
    ['kode_desa' => '3326042001' , 'nama_desa' => 'Simego' , 'kode_kecamatan' => '332604' , 'kecamatan_id' => 4],
    ['kode_desa' => '3326042002' , 'nama_desa' => 'Gumelem' , 'kode_kecamatan' => '332604' , 'kecamatan_id' => 4],
    ['kode_desa' => '3326042003' , 'nama_desa' => 'Tlogohendro' , 'kode_kecamatan' => '332604' , 'kecamatan_id' => 4],
    ['kode_desa' => '3326042004' , 'nama_desa' => 'Yosorejo' , 'kode_kecamatan' => '332604' , 'kecamatan_id' => 4],
    ['kode_desa' => '3326042005' , 'nama_desa' => 'Curugmuncar' , 'kode_kecamatan' => '332604' , 'kecamatan_id' => 4],
    ['kode_desa' => '3326042006' , 'nama_desa' => 'Songgodadi' , 'kode_kecamatan' => '332604' , 'kecamatan_id' => 4],
    ['kode_desa' => '3326042007' , 'nama_desa' => 'Tlogopakis' , 'kode_kecamatan' => '332604' , 'kecamatan_id' => 4],
    ['kode_desa' => '3326042008' , 'nama_desa' => 'Kasimpar' , 'kode_kecamatan' => '332604' , 'kecamatan_id' => 4],
    ['kode_desa' => '3326042009' , 'nama_desa' => 'Kayupuring' , 'kode_kecamatan' => '332604' , 'kecamatan_id' => 4],

    // Kecamatan Siwalan (kode: 332605)
    ['kode_desa' => '3326052001' , 'nama_desa' => 'Mesoyi' , 'kode_kecamatan' => '332605' , 'kecamatan_id' => 5],
    ['kode_desa' => '3326052002' , 'nama_desa' => 'Jolotigo' , 'kode_kecamatan' => '332605' , 'kecamatan_id' => 5],
    ['kode_desa' => '3326052003' , 'nama_desa' => 'Sengare' , 'kode_kecamatan' => '332605' , 'kecamatan_id' => 5],
    ['kode_desa' => '3326052004' , 'nama_desa' => 'Donowangun' , 'kode_kecamatan' => '332605' , 'kecamatan_id' => 5],
    ['kode_desa' => '3326052005' , 'nama_desa' => 'Talun' , 'kode_kecamatan' => '332605' , 'kecamatan_id' => 5],
    ['kode_desa' => '3326052006' , 'nama_desa' => 'Banjarsari' , 'kode_kecamatan' => '332605' , 'kecamatan_id' => 5],
    ['kode_desa' => '3326052007' , 'nama_desa' => 'Kalirejo' , 'kode_kecamatan' => '332605' , 'kecamatan_id' => 5],
    ['kode_desa' => '3326052008' , 'nama_desa' => 'Batursari' , 'kode_kecamatan' => '332605' , 'kecamatan_id' => 5],
    ['kode_desa' => '3326052009' , 'nama_desa' => 'Karangasem' , 'kode_kecamatan' => '332605' , 'kecamatan_id' => 5],
    ['kode_desa' => '3326052010' , 'nama_desa' => 'Krompeng' , 'kode_kecamatan' => '332605' , 'kecamatan_id' => 5],

        // Kecamatan  (kode: 332606)
    ['kode_desa' => '3326062001' , 'nama_desa' => 'Pungangan' , 'kode_kecamatan' => '332606' , 'kecamatan_id' => 6],
    ['kode_desa' => '3326062002' , 'nama_desa' => 'Sidoharjo' , 'kode_kecamatan' => '332606' , 'kecamatan_id' => 6],
    ['kode_desa' => '3326062003' , 'nama_desa' => 'Lemahabang' , 'kode_kecamatan' => '332606' , 'kecamatan_id' => 6],
    ['kode_desa' => '3326062004' , 'nama_desa' => 'Rogoselo' , 'kode_kecamatan' => '332606' , 'kecamatan_id' => 6],
    ['kode_desa' => '3326062005' , 'nama_desa' => 'Harjosari' , 'kode_kecamatan' => '332606' , 'kecamatan_id' => 6],
    ['kode_desa' => '3326062006' , 'nama_desa' => 'Larikan' , 'kode_kecamatan' => '332606' , 'kecamatan_id' => 6],
    ['kode_desa' => '3326062007' , 'nama_desa' => 'Sawangan' , 'kode_kecamatan' => '332606' , 'kecamatan_id' => 6],
    ['kode_desa' => '3326062008' , 'nama_desa' => 'Dororejo' , 'kode_kecamatan' => '332606' , 'kecamatan_id' => 6],
    ['kode_desa' => '3326062009' , 'nama_desa' => 'Randusari' , 'kode_kecamatan' => '332606' , 'kecamatan_id' => 6],
    ['kode_desa' => '3326062010' , 'nama_desa' => 'Kutosari' , 'kode_kecamatan' => '332606' , 'kecamatan_id' => 6],
    ['kode_desa' => '3326062011' , 'nama_desa' => 'Wringinagung' , 'kode_kecamatan' => '332606' , 'kecamatan_id' => 6],
    ['kode_desa' => '3326062012' , 'nama_desa' => 'Kalimojosari' , 'kode_kecamatan' => '332606' , 'kecamatan_id' => 6],
    ['kode_desa' => '3326062013' , 'nama_desa' => 'Bligorejo' , 'kode_kecamatan' => '332606' , 'kecamatan_id' => 6],
    ['kode_desa' => '3326062014' , 'nama_desa' => 'Doro' , 'kode_kecamatan' => '332606' , 'kecamatan_id' => 6],


        // Kecamatan  (kode: 332607)
    ['kode_desa' => '3326072001' , 'nama_desa' => 'Gutomo' , 'kode_kecamatan' => '332607' , 'kecamatan_id' => 7],
    ['kode_desa' => '3326072002' , 'nama_desa' => 'Limbangan' , 'kode_kecamatan' => '332607' , 'kecamatan_id' => 7],
    ['kode_desa' => '3326072003' , 'nama_desa' => 'Karanggondang' , 'kode_kecamatan' => '332607' , 'kecamatan_id' => 7],
    ['kode_desa' => '3326072004' , 'nama_desa' => 'Lolong' , 'kode_kecamatan' => '332607' , 'kecamatan_id' => 7],
    ['kode_desa' => '3326072005' , 'nama_desa' => 'Pedawang' , 'kode_kecamatan' => '332607' , 'kecamatan_id' => 7],
    ['kode_desa' => '3326072006' , 'nama_desa' => 'Pododadi' , 'kode_kecamatan' => '332607' , 'kecamatan_id' => 7],
    ['kode_desa' => '3326072007' , 'nama_desa' => 'Legokalong' , 'kode_kecamatan' => '332607' , 'kecamatan_id' => 7],
    ['kode_desa' => '3326072008' , 'nama_desa' => 'Karangsari' , 'kode_kecamatan' => '332607' , 'kecamatan_id' => 7],
    ['kode_desa' => '3326072009' , 'nama_desa' => 'Kulu' , 'kode_kecamatan' => '332607' , 'kecamatan_id' => 7],
    ['kode_desa' => '3326072010' , 'nama_desa' => 'Banjarejo' , 'kode_kecamatan' => '332607' , 'kecamatan_id' => 7],
    ['kode_desa' => '3326072011' , 'nama_desa' => 'Wonosari' , 'kode_kecamatan' => '332607' , 'kecamatan_id' => 7],
    ['kode_desa' => '3326072012' , 'nama_desa' => 'Sokosari' , 'kode_kecamatan' => '332607' , 'kecamatan_id' => 7],
    ['kode_desa' => '3326072013' , 'nama_desa' => 'Sidomukti' , 'kode_kecamatan' => '332607' , 'kecamatan_id' => 7],
    ['kode_desa' => '3326072014' , 'nama_desa' => 'Kayugeritan' , 'kode_kecamatan' => '332607' , 'kecamatan_id' => 7],
    ['kode_desa' => '3326072015' , 'nama_desa' => 'Kutosari' , 'kode_kecamatan' => '332607' , 'kecamatan_id' => 7],


        // Kecamatan (kode: 332608)
    ['kode_desa' => '3326081016' , 'nama_desa' => 'Kajen' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082001' , 'nama_desa' => 'Tambakroto' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082002' , 'nama_desa' => 'Kutorojo' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082003' , 'nama_desa' => 'Linggoasri' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082004' , 'nama_desa' => 'Brengkolang' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082005' , 'nama_desa' => 'Pringsurat' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082006' , 'nama_desa' => 'Sukoyoso' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082007' , 'nama_desa' => 'Sinangohprendeng' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082008' , 'nama_desa' => 'Kajongan' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082009' , 'nama_desa' => 'Pekiringanageng' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082010' , 'nama_desa' => 'Gandarum' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082011' , 'nama_desa' => 'Sabarwangi' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082012' , 'nama_desa' => 'Kalijoyo' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082013' , 'nama_desa' => 'Wonorejo' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082014' , 'nama_desa' => 'Pekiringanalit' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082015' , 'nama_desa' => 'Kutorejo' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082017' , 'nama_desa' => 'Nyamok' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082018' , 'nama_desa' => 'Tanjungkulon' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082019' , 'nama_desa' => 'Tanjungsari' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082020' , 'nama_desa' => 'Gejlig' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082021' , 'nama_desa' => 'Kebonagung' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082022' , 'nama_desa' => 'Sangkanjoyo' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082023' , 'nama_desa' => 'Salit' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082024' , 'nama_desa' => 'Sambiroto' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],
    ['kode_desa' => '3326082025' , 'nama_desa' => 'Rowolaku' , 'kode_kecamatan' => '332608' , 'kecamatan_id' => 8],


        // Kecamatan (kode: 332609)
    ['kode_desa' => '3326092002' , 'nama_desa' => 'Ujungnegoro' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],
    ['kode_desa' => '3326092003' , 'nama_desa' => 'Brondong' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],
    ['kode_desa' => '3326092004' , 'nama_desa' => 'Podosari' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],
    ['kode_desa' => '3326092005' , 'nama_desa' => 'Langensari' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],
    ['kode_desa' => '3326092006' , 'nama_desa' => 'Jagung' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],
    ['kode_desa' => '3326092007' , 'nama_desa' => 'Kwasen' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],
    ['kode_desa' => '3326092008' , 'nama_desa' => 'Karyomukti' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],
    ['kode_desa' => '3326092009' , 'nama_desa' => 'Kesesi' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],
    ['kode_desa' => '3326092010' , 'nama_desa' => 'Srinahan' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],
    ['kode_desa' => '3326092011' , 'nama_desa' => 'Kaibahan' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],
    ['kode_desa' => '3326092012' , 'nama_desa' => 'Karangrejo' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],
    ['kode_desa' => '3326092013' , 'nama_desa' => 'Watugajah' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],
    ['kode_desa' => '3326092014' , 'nama_desa' => 'Watupayung' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],
    ['kode_desa' => '3326092015' , 'nama_desa' => 'Krandon' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],
    ['kode_desa' => '3326092016' , 'nama_desa' => 'Ponolawen' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],
    ['kode_desa' => '3326092017' , 'nama_desa' => 'Kalimade' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],
    ['kode_desa' => '3326092018' , 'nama_desa' => 'Sidomulyo' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],
    ['kode_desa' => '3326092019' , 'nama_desa' => 'Sidosari' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],
    ['kode_desa' => '3326092020' , 'nama_desa' => 'Mulyorejo' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],
    ['kode_desa' => '3326092021' , 'nama_desa' => 'Pantirejo' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],
    ['kode_desa' => '3326092022' , 'nama_desa' => 'Kwigaran' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],
    ['kode_desa' => '3326092023' , 'nama_desa' => 'Sukorejo' , 'kode_kecamatan' => '332609' , 'kecamatan_id' => 9],


        // Kecamatan  (kode: 332610)
    ['kode_desa' => '3326101017' , 'nama_desa' => 'Sragi' , 'kode_kecamatan' => '332610' , 'kecamatan_id' => 10],
    ['kode_desa' => '3326102001' , 'nama_desa' => 'Ketanonageng' , 'kode_kecamatan' => '332610' , 'kecamatan_id' => 10],
    ['kode_desa' => '3326102002' , 'nama_desa' => 'Mrican' , 'kode_kecamatan' => '332610' , 'kecamatan_id' => 10],
    ['kode_desa' => '3326102003' , 'nama_desa' => 'Bulaksari' , 'kode_kecamatan' => '332610' , 'kecamatan_id' => 10],
    ['kode_desa' => '3326102004' , 'nama_desa' => 'Sumubkidul' , 'kode_kecamatan' => '332610' , 'kecamatan_id' => 10],
    ['kode_desa' => '3326102005' , 'nama_desa' => 'Kalijambe' , 'kode_kecamatan' => '332610' , 'kecamatan_id' => 10],
    ['kode_desa' => '3326102006' , 'nama_desa' => 'Sumublor' , 'kode_kecamatan' => '332610' , 'kecamatan_id' => 10],
    ['kode_desa' => '3326102007' , 'nama_desa' => 'Krsakageng' , 'kode_kecamatan' => '332610' , 'kecamatan_id' => 10],
    ['kode_desa' => '3326102008' , 'nama_desa' => 'Sijeruk' , 'kode_kecamatan' => '332610' , 'kecamatan_id' => 10],
    ['kode_desa' => '3326102009' , 'nama_desa' => 'Tegalsuruh' , 'kode_kecamatan' => '332610' , 'kecamatan_id' => 10],
    ['kode_desa' => '3326102010' , 'nama_desa' => 'Bulakpelem' , 'kode_kecamatan' => '332610' , 'kecamatan_id' => 10],
    ['kode_desa' => '3326102011' , 'nama_desa' => 'Gebangkerep' , 'kode_kecamatan' => '332610' , 'kecamatan_id' => 10],
    ['kode_desa' => '3326102012' , 'nama_desa' => 'Purworejo' , 'kode_kecamatan' => '332610' , 'kecamatan_id' => 10],
    ['kode_desa' => '3326102013' , 'nama_desa' => 'Kedungjaran' , 'kode_kecamatan' => '332610' , 'kecamatan_id' => 10],
    ['kode_desa' => '3326102014' , 'nama_desa' => 'Klunjukan' , 'kode_kecamatan' => '332610' , 'kecamatan_id' => 10],
    ['kode_desa' => '3326102015' , 'nama_desa' => 'Tegalontar' , 'kode_kecamatan' => '332610' , 'kecamatan_id' => 10],
    ['kode_desa' => '3326102016' , 'nama_desa' => 'Purwodadi' , 'kode_kecamatan' => '332610' , 'kecamatan_id' => 10],


        // Kecamatan (kode: 332611)
    ['kode_desa' => '3326112001' , 'nama_desa' => 'Bukur' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],
    ['kode_desa' => '3326112002' , 'nama_desa' => 'Kalipancur' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],
    ['kode_desa' => '3326112003' , 'nama_desa' => 'Sumurjomblangbogo' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],
    ['kode_desa' => '3326112004' , 'nama_desa' => 'Pantianom' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],
    ['kode_desa' => '3326112005' , 'nama_desa' => 'Randumuktiwaren' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],
    ['kode_desa' => '3326112006' , 'nama_desa' => 'Legokclile' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],
    ['kode_desa' => '3326112007' , 'nama_desa' => 'Bojongwetan' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],
    ['kode_desa' => '3326112008' , 'nama_desa' => 'Duwet' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],
    ['kode_desa' => '3326112009' , 'nama_desa' => 'Wangandowo' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],
    ['kode_desa' => '3326112010' , 'nama_desa' => 'Ketitangkidul' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],
    ['kode_desa' => '3326112011' , 'nama_desa' => 'Menjangan' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],
    ['kode_desa' => '3326112012' , 'nama_desa' => 'Ketitanglor' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],
    ['kode_desa' => '3326112013' , 'nama_desa' => 'Rejosari' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],
    ['kode_desa' => '3326112014' , 'nama_desa' => 'Bojonglor' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],
    ['kode_desa' => '3326112015' , 'nama_desa' => 'Bojongminggir' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],
    ['kode_desa' => '3326112016' , 'nama_desa' => 'Wiroditan' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],
    ['kode_desa' => '3326112017' , 'nama_desa' => 'Kemasan' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],
    ['kode_desa' => '3326112018' , 'nama_desa' => 'Jajarwayang' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],
    ['kode_desa' => '3326112019' , 'nama_desa' => 'Babalanlor' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],
    ['kode_desa' => '3326112020' , 'nama_desa' => 'Babalankidul' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],
    ['kode_desa' => '3326112021' , 'nama_desa' => 'Karagsari' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],
    ['kode_desa' => '3326112022' , 'nama_desa' => 'Sembungjambu' , 'kode_kecamatan' => '332611' , 'kecamatan_id' => 11],


        // Kecamatan (kode: 332612)
    ['kode_desa' => '3326122001' , 'nama_desa' => 'Jetakkidul' , 'kode_kecamatan' => '332612' , 'kecamatan_id' => 12],
    ['kode_desa' => '3326122002' , 'nama_desa' => 'Sastrodirjan' , 'kode_kecamatan' => '332612' , 'kecamatan_id' => 12],
    ['kode_desa' => '3326122003' , 'nama_desa' => 'Legokgunung' , 'kode_kecamatan' => '332612' , 'kecamatan_id' => 12],
    ['kode_desa' => '3326122004' , 'nama_desa' => 'Galangpengampon' , 'kode_kecamatan' => '332612' , 'kecamatan_id' => 12],
    ['kode_desa' => '3326122005' , 'nama_desa' => 'Kwagean' , 'kode_kecamatan' => '332612' , 'kecamatan_id' => 12],
    ['kode_desa' => '3326122006' , 'nama_desa' => 'Getas' , 'kode_kecamatan' => '332612' , 'kecamatan_id' => 12],
    ['kode_desa' => '3326122007' , 'nama_desa' => 'Rowokembu' , 'kode_kecamatan' => '332612' , 'kecamatan_id' => 12],
    ['kode_desa' => '3326122008' , 'nama_desa' => 'Wonopringgo' , 'kode_kecamatan' => '332612' , 'kecamatan_id' => 12],
    ['kode_desa' => '3326122009' , 'nama_desa' => 'Sampih' , 'kode_kecamatan' => '332612' , 'kecamatan_id' => 12],
    ['kode_desa' => '3326122010' , 'nama_desa' => 'Wonorejo' , 'kode_kecamatan' => '332612' , 'kecamatan_id' => 12],
    ['kode_desa' => '3326122011' , 'nama_desa' => 'Gondang' , 'kode_kecamatan' => '332612' , 'kecamatan_id' => 12],
    ['kode_desa' => '3326122012' , 'nama_desa' => 'Jetaklengkong' , 'kode_kecamatan' => '332612' , 'kecamatan_id' => 12],
    ['kode_desa' => '3326122013' , 'nama_desa' => 'Pengadentengah' , 'kode_kecamatan' => '332612' , 'kecamatan_id' => 12],
    ['kode_desa' => '3326122014' , 'nama_desa' => 'Surobayan' , 'kode_kecamatan' => '332612' , 'kecamatan_id' => 12],


        // Kecamatan  (kode: 332613)
    ['kode_desa' => '3326131013' , 'nama_desa' => 'Pekajangan' , 'kode_kecamatan' => '332613' , 'kecamatan_id' => 13],
    ['kode_desa' => '3326131019' , 'nama_desa' => 'Kedungwuni Timur' , 'kode_kecamatan' => '332613' , 'kecamatan_id' => 13],
    ['kode_desa' => '3326131020' , 'nama_desa' => 'Kedungwuni Barat' , 'kode_kecamatan' => '332613' , 'kecamatan_id' => 13],
    ['kode_desa' => '3326132001' , 'nama_desa' => 'Kedungpatangewu' , 'kode_kecamatan' => '332613' , 'kecamatan_id' => 13],
    ['kode_desa' => '3326132002' , 'nama_desa' => 'Pakisputih' , 'kode_kecamatan' => '332613' , 'kecamatan_id' => 13],
    ['kode_desa' => '3326132003' , 'nama_desa' => 'Rowocacing' , 'kode_kecamatan' => '332613' , 'kecamatan_id' => 13],
    ['kode_desa' => '3326132004' , 'nama_desa' => 'Langkap' , 'kode_kecamatan' => '332613' , 'kecamatan_id' => 13],
    ['kode_desa' => '3326132005' , 'nama_desa' => 'Tosaran' , 'kode_kecamatan' => '332613' , 'kecamatan_id' => 13],
    ['kode_desa' => '3326132006' , 'nama_desa' => 'Pajomblangan' , 'kode_kecamatan' => '332613' , 'kecamatan_id' => 13],
    ['kode_desa' => '3326132007' , 'nama_desa' => 'Proto' , 'kode_kecamatan' => '332613' , 'kecamatan_id' => 13],
    ['kode_desa' => '3326132008' , 'nama_desa' => 'Kwayangan' , 'kode_kecamatan' => '332613' , 'kecamatan_id' => 13],
    ['kode_desa' => '3326132010' , 'nama_desa' => 'Podo' , 'kode_kecamatan' => '332613' , 'kecamatan_id' => 13],
    ['kode_desa' => '3326132011' , 'nama_desa' => 'Salakbrojo' , 'kode_kecamatan' => '332613' , 'kecamatan_id' => 13],
    ['kode_desa' => '3326132012' , 'nama_desa' => 'Ambokembang' , 'kode_kecamatan' => '332613' , 'kecamatan_id' => 13],
    ['kode_desa' => '3326132014' , 'nama_desa' => 'Tangkiltengah' , 'kode_kecamatan' => '332613' , 'kecamatan_id' => 13],
    ['kode_desa' => '3326132015' , 'nama_desa' => 'Karangdowo' , 'kode_kecamatan' => '332613' , 'kecamatan_id' => 13],
    ['kode_desa' => '3326132016' , 'nama_desa' => 'Bugangan' , 'kode_kecamatan' => '332613' , 'kecamatan_id' => 13],
    ['kode_desa' => '3326132017' , 'nama_desa' => 'Rengas' , 'kode_kecamatan' => '332613' , 'kecamatan_id' => 13],
    ['kode_desa' => '3326132018' , 'nama_desa' => 'Tangkilkulon' , 'kode_kecamatan' => '332613' , 'kecamatan_id' => 13],

        // Kecamatan (kode: 332614)
    ['kode_desa' => '3326141002' , 'nama_desa' => 'Sapugarut' , 'kode_kecamatan' => '332614' , 'kecamatan_id' => 14],
    ['kode_desa' => '3326141004' , 'nama_desa' => 'Bligo' , 'kode_kecamatan' => '332614' , 'kecamatan_id' => 14],
    ['kode_desa' => '3326141008' , 'nama_desa' => 'Simbangkulon' , 'kode_kecamatan' => '332614' , 'kecamatan_id' => 14],
    ['kode_desa' => '3326142001' , 'nama_desa' => 'Coprayan' , 'kode_kecamatan' => '332614' , 'kecamatan_id' => 14],
    ['kode_desa' => '3326142003' , 'nama_desa' => 'Wonoyoso' , 'kode_kecamatan' => '332614' , 'kecamatan_id' => 14],
    ['kode_desa' => '3326142005' , 'nama_desa' => 'Pakumbulan' , 'kode_kecamatan' => '332614' , 'kecamatan_id' => 14],
    ['kode_desa' => '3326142006' , 'nama_desa' => 'Watusalam' , 'kode_kecamatan' => '332614' , 'kecamatan_id' => 14],
    ['kode_desa' => '3326142007' , 'nama_desa' => 'Simbangwetan' , 'kode_kecamatan' => '332614' , 'kecamatan_id' => 14],
    ['kode_desa' => '3326142009' , 'nama_desa' => 'Kertijayan' , 'kode_kecamatan' => '332614' , 'kecamatan_id' => 14],
    ['kode_desa' => '3326142010' , 'nama_desa' => 'Paweden' , 'kode_kecamatan' => '332614' , 'kecamatan_id' => 14],

        // Kecamatan (kode: 332615)
    ['kode_desa' => '3326152001' , 'nama_desa' => 'Wuled' , 'kode_kecamatan' => '332615' , 'kecamatan_id' => 15],
    ['kode_desa' => '3326152002' , 'nama_desa' => 'Ngalian' , 'kode_kecamatan' => '332615' , 'kecamatan_id' => 15],
    ['kode_desa' => '3326152003' , 'nama_desa' => 'Pandanarum' , 'kode_kecamatan' => '332615' , 'kecamatan_id' => 15],
    ['kode_desa' => '3326152004' , 'nama_desa' => 'Karanganyar' , 'kode_kecamatan' => '332615' , 'kecamatan_id' => 15],
    ['kode_desa' => '3326152005' , 'nama_desa' => 'Silirejo' , 'kode_kecamatan' => '332615' , 'kecamatan_id' => 15],
    ['kode_desa' => '3326152006' , 'nama_desa' => 'Pucung' , 'kode_kecamatan' => '332615' , 'kecamatan_id' => 15],
    ['kode_desa' => '3326152007' , 'nama_desa' => 'Sidorejo' , 'kode_kecamatan' => '332615' , 'kecamatan_id' => 15],
    ['kode_desa' => '3326152008' , 'nama_desa' => 'Samborejo' , 'kode_kecamatan' => '332615' , 'kecamatan_id' => 15],
    ['kode_desa' => '3326152009' , 'nama_desa' => 'Tanjung' , 'kode_kecamatan' => '332615' , 'kecamatan_id' => 15],
    ['kode_desa' => '3326152010' , 'nama_desa' => 'Pacar' , 'kode_kecamatan' => '332615' , 'kecamatan_id' => 15],
    ['kode_desa' => '3326152011' , 'nama_desa' => 'Dadirejo' , 'kode_kecamatan' => '332615' , 'kecamatan_id' => 15],
    ['kode_desa' => '3326152012' , 'nama_desa' => 'Karangjompo' , 'kode_kecamatan' => '332615' , 'kecamatan_id' => 15],
    ['kode_desa' => '3326152013' , 'nama_desa' => 'Tegaldowo' , 'kode_kecamatan' => '332615' , 'kecamatan_id' => 15],
    ['kode_desa' => '3326152014' , 'nama_desa' => 'Mulyorejo' , 'kode_kecamatan' => '332615' , 'kecamatan_id' => 15],
    ['kode_desa' => '3326152015' , 'nama_desa' => 'Jeruksari' , 'kode_kecamatan' => '332615' , 'kecamatan_id' => 15],
    ['kode_desa' => '3326152016' , 'nama_desa' => 'Curug' , 'kode_kecamatan' => '332615' , 'kecamatan_id' => 15],

        // Kecamatan (kode: 332616)
    ['kode_desa' => '3326161010' , 'nama_desa' => 'Gumawang' , 'kode_kecamatan' => '332616' , 'kecamatan_id' => 16],
    ['kode_desa' => '3326161011' , 'nama_desa' => 'Kepatihan' , 'kode_kecamatan' => '332616' , 'kecamatan_id' => 16],
    ['kode_desa' => '3326161012' , 'nama_desa' => 'Mayangan' , 'kode_kecamatan' => '332616' , 'kecamatan_id' => 16],
    ['kode_desa' => '3326161013' , 'nama_desa' => 'Pekuncen' , 'kode_kecamatan' => '332616' , 'kecamatan_id' => 16],
    ['kode_desa' => '3326161014' , 'nama_desa' => 'Bener' , 'kode_kecamatan' => '332616' , 'kecamatan_id' => 16],
    ['kode_desa' => '3326162001' , 'nama_desa' => 'Kadipaten' , 'kode_kecamatan' => '332616' , 'kecamatan_id' => 16],
    ['kode_desa' => '3326162002' , 'nama_desa' => 'Delegtukang' , 'kode_kecamatan' => '332616' , 'kecamatan_id' => 16],
    ['kode_desa' => '3326162003' , 'nama_desa' => 'Karangjati' , 'kode_kecamatan' => '332616' , 'kecamatan_id' => 16],
    ['kode_desa' => '3326162004' , 'nama_desa' => 'Petukangan' , 'kode_kecamatan' => '332616' , 'kecamatan_id' => 16],
    ['kode_desa' => '3326162005' , 'nama_desa' => 'Wiradesa' , 'kode_kecamatan' => '332616' , 'kecamatan_id' => 16],
    ['kode_desa' => '3326162006' , 'nama_desa' => 'Warukidul' , 'kode_kecamatan' => '332616' , 'kecamatan_id' => 16],
    ['kode_desa' => '3326162007' , 'nama_desa' => 'Bondansari' , 'kode_kecamatan' => '332616' , 'kecamatan_id' => 16],
    ['kode_desa' => '3326162008' , 'nama_desa' => 'Warulor' , 'kode_kecamatan' => '332616' , 'kecamatan_id' => 16],
    ['kode_desa' => '3326162009' , 'nama_desa' => 'Kampil' , 'kode_kecamatan' => '332616' , 'kecamatan_id' => 16],
    ['kode_desa' => '3326162015' , 'nama_desa' => 'Kemplong' , 'kode_kecamatan' => '332616' , 'kecamatan_id' => 16],
    ['kode_desa' => '3326162016' , 'nama_desa' => 'Kauman' , 'kode_kecamatan' => '332616' , 'kecamatan_id' => 16],

        // Kecamatan (kode: 332617)
    ['kode_desa' => '3326172001' , 'nama_desa' => 'Mejasem' , 'kode_kecamatan' => '332617' , 'kecamatan_id' => 17],
    ['kode_desa' => '3326172002' , 'nama_desa' => 'Wonosari' , 'kode_kecamatan' => '332617' , 'kecamatan_id' => 17],
    ['kode_desa' => '3326172003' , 'nama_desa' => 'Tengengkulon' , 'kode_kecamatan' => '332617' , 'kecamatan_id' => 17],
    ['kode_desa' => '3326172004' , 'nama_desa' => 'Tunjungsari' , 'kode_kecamatan' => '332617' , 'kecamatan_id' => 17],
    ['kode_desa' => '3326172005' , 'nama_desa' => 'Pait' , 'kode_kecamatan' => '332617' , 'kecamatan_id' => 17],
    ['kode_desa' => '3326172006' , 'nama_desa' => 'Tengengwetan' , 'kode_kecamatan' => '332617' , 'kecamatan_id' => 17],
    ['kode_desa' => '3326172007' , 'nama_desa' => 'Rembun' , 'kode_kecamatan' => '332617' , 'kecamatan_id' => 17],
    ['kode_desa' => '3326172008' , 'nama_desa' => 'Yosorejo' , 'kode_kecamatan' => '332617' , 'kecamatan_id' => 17],
    ['kode_desa' => '3326172009' , 'nama_desa' => 'Siwalan' , 'kode_kecamatan' => '332617' , 'kecamatan_id' => 17],
    ['kode_desa' => '3326172010' , 'nama_desa' => 'Boyoteluk' , 'kode_kecamatan' => '332617' , 'kecamatan_id' => 17],
    ['kode_desa' => '3326172011' , 'nama_desa' => 'Depok' , 'kode_kecamatan' => '332617' , 'kecamatan_id' => 17],
    ['kode_desa' => '3326172012' , 'nama_desa' => 'Blacanan' , 'kode_kecamatan' => '332617' , 'kecamatan_id' => 17],
    ['kode_desa' => '3326172013' , 'nama_desa' => 'Blimbingwuluh' , 'kode_kecamatan' => '332617' , 'kecamatan_id' => 17],

        // Kecamatan (kode: 332618)
    ['kode_desa' => '3326182001' , 'nama_desa' => 'Logandeng' , 'kode_kecamatan' => '332618' , 'kecamatan_id' => 18],
    ['kode_desa' => '3326182002' , 'nama_desa' => 'Jrebengkembang' , 'kode_kecamatan' => '332618' , 'kecamatan_id' => 18],
    ['kode_desa' => '3326182003' , 'nama_desa' => 'Pagumenganmas' , 'kode_kecamatan' => '332618' , 'kecamatan_id' => 18],
    ['kode_desa' => '3326182004' , 'nama_desa' => 'Kedungkebo' , 'kode_kecamatan' => '332618' , 'kecamatan_id' => 18],
    ['kode_desa' => '3326182005' , 'nama_desa' => 'Kaligawe' , 'kode_kecamatan' => '332618' , 'kecamatan_id' => 18],
    ['kode_desa' => '3326182006' , 'nama_desa' => 'Karangdadap' , 'kode_kecamatan' => '332618' , 'kecamatan_id' => 18],
    ['kode_desa' => '3326182007' , 'nama_desa' => 'Kalilembu' , 'kode_kecamatan' => '332618' , 'kecamatan_id' => 18],
    ['kode_desa' => '3326182008' , 'nama_desa' => 'Pangkah' , 'kode_kecamatan' => '332618' , 'kecamatan_id' => 18],
    ['kode_desa' => '3326182009' , 'nama_desa' => 'Kebonrowopucang' , 'kode_kecamatan' => '332618' , 'kecamatan_id' => 18],
    ['kode_desa' => '3326182010' , 'nama_desa' => 'Kebonsari' , 'kode_kecamatan' => '332618' , 'kecamatan_id' => 18],
    ['kode_desa' => '3326182011' , 'nama_desa' => 'Pegandon' , 'kode_kecamatan' => '332618' , 'kecamatan_id' => 18],

        // Kecamatan (kode: 332619)
    ['kode_desa' => '3326192001' , 'nama_desa' => 'Pesanggrahan' , 'kode_kecamatan' => '332619' , 'kecamatan_id' => 19],
    ['kode_desa' => '3326192002' , 'nama_desa' => 'Sijambe' , 'kode_kecamatan' => '332619' , 'kecamatan_id' => 19],
    ['kode_desa' => '3326192003' , 'nama_desa' => 'Bebel' , 'kode_kecamatan' => '332619' , 'kecamatan_id' => 19],
    ['kode_desa' => '3326192006' , 'nama_desa' => 'Werdi' , 'kode_kecamatan' => '332619' , 'kecamatan_id' => 19],
    ['kode_desa' => '3326192007' , 'nama_desa' => 'Rowoyoso' , 'kode_kecamatan' => '332619' , 'kecamatan_id' => 19],
    ['kode_desa' => '3326192008' , 'nama_desa' => 'Semut' , 'kode_kecamatan' => '332619' , 'kecamatan_id' => 19],
    ['kode_desa' => '3326192009' , 'nama_desa' => 'Tratebang' , 'kode_kecamatan' => '332619' , 'kecamatan_id' => 19],
    ['kode_desa' => '3326192010' , 'nama_desa' => 'Wonokertokulon' , 'kode_kecamatan' => '332619' , 'kecamatan_id' => 19],
    ['kode_desa' => '3326192011' , 'nama_desa' => 'Wonokertowetan' , 'kode_kecamatan' => '332619' , 'kecamatan_id' => 19],
    ['kode_desa' => '3326192012' , 'nama_desa' => 'Api-Api' , 'kode_kecamatan' => '332619' , 'kecamatan_id' => 19],
    ['kode_desa' => '3326192013' , 'nama_desa' => 'Pecakaran' , 'kode_kecamatan' => '332619' , 'kecamatan_id' => 19],



];

        // Insert ke database
        foreach ($desas as $desa) {
            DB::table('desas')->insert([
                'kode_desa' => $desa['kode_desa'],
                'nama_desa' => $desa['nama_desa'],
                'kode_kecamatan' => $desa['kode_kecamatan'],
                'kecamatan_id' => $desa['kecamatan_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
