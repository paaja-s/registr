<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="Vehicle",
 *     title="Vehicle",
 *     description="Schema of vehicle",
 *     @OA\Property(property="datum1Registrace", type="string", format="date", description="Datum první registrace"),
 *     @OA\Property(property="datum1RegistraceCr", type="string", format="date", description="Datum první registrace v ČR"),
 *     @OA\Property(property="ztp", type="string", description="ZTP"),
 *     @OA\Property(property="esEu", type="string", description="ES EU"),
 *     @OA\Property(property="druhVozidla", type="string", description="Druh vozidla"),
 *     @OA\Property(property="druhVozidla2R", type="string", description="Druh vozidla 2. řádku"),
 *     @OA\Property(property="kategorieVozidla", type="string", description="Kategorie vozidla"),
 *     @OA\Property(property="tovarniZnacka", type="string", description="Tovární značka vozidla"),
 *     @OA\Property(property="typ", type="string", description="Typ vozidla"),
 *     @OA\Property(property="varianta", type="string", description="Varianta"),
 *     @OA\Property(property="verze", type="string", description="Verze"),
 *     @OA\Property(property="vin", type="string", description="VIN vozidla"),
 *     @OA\Property(property="obchodniOznaceni", type="string", description="Obchodní označení"),
 *     @OA\Property(property="vyrobceVozidla", type="string", description="Výrobce vozidla"),
 *     @OA\Property(property="vyrobceMotoru", type="string", description="Výrobce motoru"),
 *     @OA\Property(property="typMotoru", type="string", description="Typ motoru"),
 *     @OA\Property(property="maxVykonKwMin", type="string", description="Maximální výkon (kW, min)"),
 *     @OA\Property(property="palivo", type="string", description="Palivo vozidla"),
 *     @OA\Property(property="zdvihovyObjemCm3", type="integer", description="Zdvihový objem motoru v cm³"),
 *     @OA\Property(property="plneElektrickeVozidlo", type="string", description="Je plně elektrické vozidlo?"),
 *     @OA\Property(property="hybridniVozidlo", type="string", description="Je hybridní vozidlo?"),
 *     @OA\Property(property="tridaHybridnihoVozidla", type="string", description="Třída hybridního vozidla"),
 *     @OA\Property(property="emisniLimitEhKosnEhses", type="string", description="Emisní limit"),
 *     @OA\Property(property="stupenPlneniEmisniUrovne", type="string", description="Stupeň plnění emisní úrovně"),
 *     @OA\Property(property="korrigovanySoucinAbsorpce", type="string", description="Korrigovaný součinitel absorpce"),
 *     @OA\Property(property="co2MestoMimoKombiGkm", type="string", description="CO2 (město/mimo/kombi, g/km)"),
 *     @OA\Property(property="specifickeCo2", type="string", description="Specifické CO2"),
 *     @OA\Property(property="snizeniEmisiNedc", type="string", description="Snížení emisí NEDC"),
 *     @OA\Property(property="snizeniEmisiWltp", type="string", description="Snížení emisí WLTP"),
 *     @OA\Property(property="spotrebaPredpis", type="string", description="Spotřeba podle předpisu"),
 *     @OA\Property(property="spotrebaMestoMimoKombiL100km", type="string", description="Spotřeba (město/mimo/kombi, l/100 km)"),
 *     @OA\Property(property="spotrebaPriRychlostiL100km", type="string", description="Spotřeba při rychlosti, l/100 km"),
 *     @OA\Property(property="spotrebaElMobilWhkmZ", type="string", description="Spotřeba el. mobilu Wh/km"),
 *     @OA\Property(property="dojezdZrKm", type="string", description="Dojezd ZR v km"),
 *     @OA\Property(property="vyrobceKaroserie", type="string", description="Výrobce karoserie"),
 *     @OA\Property(property="druhTyp", type="string", description="Druh a typ vozidla"),
 *     @OA\Property(property="vyrobniCisloKaroserie", type="string", description="Výrobní číslo karoserie"),
 *     @OA\Property(property="barva", type="string", description="Barva vozidla"),
 *     @OA\Property(property="barvaDoplnkova", type="string", description="Doplňková barva vozidla"),
 *     @OA\Property(property="pocetMistCelkemSezeniStani", type="string", description="Počet míst celkem (sezení/stání)"),
 *     @OA\Property(property="celkovaDelkaSirkaVyskaMm", type="string", description="Celková délka, šířka a výška v mm"),
 *     @OA\Property(property="rozvorMm", type="string", description="Rozvor v mm"),
 *     @OA\Property(property="rozchodMm", type="string", description="Rozchod v mm"),
 *     @OA\Property(property="provozniHmotnost", type="integer", description="Provozní hmotnost vozidla"),
 *     @OA\Property(property="nejvetsiTechPovolenaHmotnostKg", type="string", description="Největší technicky povolená hmotnost (kg)"),
 *     @OA\Property(property="nejvetsiTechHmotnostNapravaKg", type="string", description="Největší technická hmotnost na nápravu (kg)"),
 *     @OA\Property(property="nejvetsiTechHmotnostPripojBrzdeneKg", type="string", description="Největší technická hmotnost přívěsu brzděného (kg)"),
 *     @OA\Property(property="nejvetsiTechHmotnostPripojNebrzdeneKg", type="string", description="Největší technická hmotnost přívěsu nebrzděného (kg)"),
 *     @OA\Property(property="nejvetsiTechHmotnostSoupravyKg", type="string", description="Největší technická hmotnost soupravy (kg)"),
 *     @OA\Property(property="hmotnostiWltp", type="string", description="Hmotnosti podle WLTP"),
 *     @OA\Property(property="prumernaUzitecneZatizeni", type="string", description="Průměrná užitečná zátěž"),
 *     @OA\Property(property="spojovaciZarizeniDruh", type="string", description="Spojovací zařízení - druh"),
 *     @OA\Property(property="pocetNapravPohanenych", type="string", description="Počet náprav (poháněných)"),
 *     @OA\Property(property="kolaPneumatikyRozmeryMontaz", type="string", description="Kola/pneumatiky - rozměry a montáž"),
 *     @OA\Property(property="hlukVozidlaDbaStojiciOtMin", type="string", description="Hluk vozidla v dBA při stojícím motoru (ot/min)"),
 *     @OA\Property(property="zaJizdy", type="string", description="Hluk vozidla za jízdy"),
 *     @OA\Property(property="nejvyssiRychlostKmh", type="integer", description="Nejvyšší rychlost vozidla (km/h)"),
 *     @OA\Property(property="pomerVykonHmotnostKwkg", type="string", description="Poměr výkon/hmotnost (kW/kg)"),
 *     @OA\Property(property="inovativniTechnologie", type="string", description="Inovativní technologie"),
 *     @OA\Property(property="stupenDokonceni", type="string", description="Stupeň dokončení"),
 *     @OA\Property(property="faktorOdchylkyDe", type="string", description="Faktor odchylky DE"),
 *     @OA\Property(property="faktorVerifikaceVf", type="string", description="Faktor verifikace VF"),
 *     @OA\Property(property="ucelVozidla", type="string", description="Účel vozidla"),
 *     @OA\Property(property="dalsiZaznamy", type="string", description="Další záznamy"),
 *     @OA\Property(property="alternativniProvedeni", type="string", description="Alternativní provedení"),
 *     @OA\Property(property="cisloTp", type="string", description="Číslo technického průkazu"),
 *     @OA\Property(property="cisloOrv", type="string", description="Číslo ORV"),
 *     @OA\Property(property="druhRz", type="string", description="Druh RZ"),
 *     @OA\Property(property="zarazeniVozidla", type="string", description="Zařazení vozidla"),
 *     @OA\Property(property="status", type="string", description="Status vozidla"),
 *     @OA\Property(property="pcv", type="integer", description="PCV (primární klíč vozidla)"),
 *     @OA\Property(property="abs", type="string", description="Je vybaven ABS?"),
 *     @OA\Property(property="airbag", type="string", description="Počet airbagů"),
 *     @OA\Property(property="asr", type="string", description="Je vybaven ASR?"),
 *     @OA\Property(property="brzdyNouzova", type="string", description="Nouzové brzdy"),
 *     @OA\Property(property="brzdyOdlehcovaci", type="string", description="Odlehčovací brzdy"),
 *     @OA\Property(property="brzdyParkovaci", type="string", description="Parkovací brzdy"),
 *     @OA\Property(property="brzdyProvozni", type="string", description="Provozní brzdy"),
 *     @OA\Property(property="doplTextNaTp", type="string", description="Doplňkový text na technickém průkazu"),
 *     @OA\Property(property="hmotnostiProvozniDo", type="string", description="Hmotnost provozní DO"),
 *     @OA\Property(property="hmotnostiZatezSz", type="string", description="Hmotnost zátěže SZ"),
 *     @OA\Property(property="hmotnostiZatezSzTyp", type="string", description="Typ zátěže SZ"),
 *     @OA\Property(property="hydropohon", type="string", description="Je vybaven hydropohonem?"),
 *     @OA\Property(property="objemCisterny", type="string", description="Objem cisterny"),
 *     @OA\Property(property="zatezStrechy", type="integer", description="Zátěž střechy"),
 *     @OA\Property(property="cisloMotoru", type="string", description="Číslo motoru"),
 *     @OA\Property(property="nejvyssiRychlostOmezeni", type="string", description="Nejvyšší rychlost s omezením"),
 *     @OA\Property(property="ovladaniBrzSz", type="string", description="Ovládání brzd SZ"),
 *     @OA\Property(property="ovladaniBrzSzDruh", type="string", description="Druh ovládání brzd SZ"),
 *     @OA\Property(property="retarder", type="string", description="Je vybaven retardérem?"),
 *     @OA\Property(property="rokVyroby", type="integer", description="Rok výroby vozidla"),
 *     @OA\Property(property="delkaDo", type="string", description="Délka DO"),
 *     @OA\Property(property="loznaDelka", type="string", description="Ložná délka"),
 *     @OA\Property(property="loznaSirka", type="string", description="Ložná šířka"),
 *     @OA\Property(property="vyskaDo", type="string", description="Výška DO"),
 *     @OA\Property(property="typKod", type="string", description="Typ kód"),
 *     @OA\Property(property="rmZaniku", type="string", description="RM zániku")
 * )
 * @OA\Schema(
 *     schema="VehicleShort",
 *     title="Vehicle, short version",
 *     description="Schema of vehicle, shortened",
 *     @OA\Property(property="pcv", type="integer", description="PCV (primární klíč vozidla)"),
 *     @OA\Property(property="vin", type="string", description="VIN vozidla"),
 *     @OA\Property(property="tovarniZnacka", type="string", description="Tovární značka vozidla"),
 *     @OA\Property(property="typ", type="string", description="Typ vozidla")
 * )
 */
class Vehicle extends Model
{
	// Tabulka pro model
	protected $table = 'registr_vozidel';
	
	// Primární klíč
	protected $primaryKey = 'pcv';
	
	// Pokud primární klíč není auto-incrementující
	public $incrementing = false;
	
	// Typ primárního klíče
	protected $keyType = 'integer';
}