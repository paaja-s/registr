<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="Vehicle",
 *     title="Vehicle",
 *     description="Schema of vehicle",
 *     @OA\Property(property="date1Registration", type="string", format="date", description="Datum první registrace"),
 *     @OA\Property(property="date1RegistrationCr", type="string", format="date", description="Datum první registrace v ČR"),
 *     @OA\Property(property="vtan", type="string", description="ZTP"),
 *     @OA\Property(property="esEu", type="string", description="ES EU"),
 *     @OA\Property(property="vehicleType", type="string", description="Druh vozidla"),
 *     @OA\Property(property="vehicleType2R", type="string", description="Druh vozidla 2. řádku"),
 *     @OA\Property(property="category", type="string", description="Kategorie vozidla"),
 *     @OA\Property(property="brand", type="string", description="Tovární značka vozidla"),
 *     @OA\Property(property="type", type="string", description="Typ vozidla"),
 *     @OA\Property(property="variant", type="string", description="Varianta"),
 *     @OA\Property(property="version", type="string", description="Verze"),
 *     @OA\Property(property="vin", type="string", description="VIN vozidla"),
 *     @OA\Property(property="tradeName", type="string", description="Obchodní označení"),
 *     @OA\Property(property="vehicleManufacturer", type="string", description="Výrobce vozidla"),
 *     @OA\Property(property="engineManufacturer", type="string", description="Výrobce motoru"),
 *     @OA\Property(property="engineType", type="string", description="Typ motoru"),
 *     @OA\Property(property="maxPowerKwMin", type="string", description="Maximální výkon (kW, min)"),
 *     @OA\Property(property="fuelType", type="string", description="Palivo vozidla"),
 *     @OA\Property(property="engineDisplacementCm3", type="integer", description="Zdvihový objem motoru v cm³"),
 *     @OA\Property(property="fullyElectricVehicle", type="string", description="Je plně elektrické vozidlo?"),
 *     @OA\Property(property="hybridVehicle", type="string", description="Je hybridní vozidlo?"),
 *     @OA\Property(property="hybridVehicleClass", type="string", description="Třída hybridního vozidla"),
 *     @OA\Property(property="emissionLimitEhkosnEhses", type="string", description="Emisní limit"),
 *     @OA\Property(property="emissionLevelCompliance", type="string", description="Stupeň plnění emisní úrovně"),
 *     @OA\Property(property="correctedAbsorptionCoefficient", type="string", description="Korrigovaný součinitel absorpce"),
 *     @OA\Property(property="co2UrbanExtraurbanCombinedGkm", type="string", description="CO2 (město/mimo/kombi, g/km)"),
 *     @OA\Property(property="specificCo2", type="string", description="Specifické CO2"),
 *     @OA\Property(property="emissionReductionNedc", type="string", description="Snížení emisí NEDC"),
 *     @OA\Property(property="emissionReductionWltp", type="string", description="Snížení emisí WLTP"),
 *     @OA\Property(property="fuelConsumptionStandard", type="string", description="Spotřeba podle předpisu"),
 *     @OA\Property(property="fuelConsumptionUrbanExtraurbanCombinedL100Km", type="string", description="Spotřeba (město/mimo/kombi, l/100 km)"),
 *     @OA\Property(property="fuelConsumptionAtSpeedL100Km", type="string", description="Spotřeba při rychlosti, l/100 km"),
 *     @OA\Property(property="electricConsumptionWhkm", type="string", description="Spotřeba el. mobilu Wh/km"),
 *     @OA\Property(property="rangeKm", type="string", description="Dojezd ZR v km"),
 *     @OA\Property(property="bodyManufacturer", type="string", description="Výrobce karoserie"),
 *     @OA\Property(property="vehicleCategory", type="string", description="Druh a typ vozidla"),
 *     @OA\Property(property="bodySerialNumber", type="string", description="Výrobní číslo karoserie"),
 *     @OA\Property(property="color", type="string", description="Barva vozidla"),
 *     @OA\Property(property="additionalColor", type="string", description="Doplňková barva vozidla"),
 *     @OA\Property(property="totalSeatingStandingCapacity", type="string", description="Počet míst celkem (sezení/stání)"),
 *     @OA\Property(property="overallLengthWidthHeightMm", type="string", description="Celková délka, šířka a výška v mm"),
 *     @OA\Property(property="wheelbaseMm", type="string", description="Rozvor v mm"),
 *     @OA\Property(property="trackWidthMm", type="string", description="Rozchod v mm"),
 *     @OA\Property(property="curbWeight", type="integer", description="Provozní hmotnost vozidla"),
 *     @OA\Property(property="maxTechnicallyPermissibleMassKg", type="string", description="Největší technicky povolená hmotnost (kg)"),
 *     @OA\Property(property="maxAxleLoadKg", type="string", description="Největší technická hmotnost na nápravu (kg)"),
 *     @OA\Property(property="maxPermissibleTowedMassBrakedKg", type="string", description="Největší technická hmotnost přívěsu brzděného (kg)"),
 *     @OA\Property(property="maxPermissibleTowedMassUnbrakedKg", type="string", description="Největší technická hmotnost přívěsu nebrzděného (kg)"),
 *     @OA\Property(property="maxPermissibleCombinationMassKg", type="string", description="Největší technická hmotnost soupravy (kg)"),
 *     @OA\Property(property="wltpWeights", type="string", description="Hmotnosti podle WLTP"),
 *     @OA\Property(property="averageUsefulLoad", type="string", description="Průměrná užitečná zátěž"),
 *     @OA\Property(property="towingDeviceType", type="string", description="Spojovací zařízení - druh"),
 *     @OA\Property(property="numberOfDrivenAxles", type="string", description="Počet náprav (poháněných)"),
 *     @OA\Property(property="wheelsTiresSizesInstallation", type="string", description="Kola/pneumatiky - rozměry a montáž"),
 *     @OA\Property(property="vehicleNoiseLevelDbaIdleRpm", type="string", description="Hluk vozidla v dBA při stojícím motoru (ot/min)"),
 *     @OA\Property(property="duringDriving", type="string", description="Hluk vozidla za jízdy"),
 *     @OA\Property(property="topSpeedKmh", type="integer", description="Nejvyšší rychlost vozidla (km/h)"),
 *     @OA\Property(property="powerToWeightRatioKwkg", type="string", description="Poměr výkon/hmotnost (kW/kg)"),
 *     @OA\Property(property="innovativeTechnology", type="string", description="Inovativní technologie"),
 *     @OA\Property(property="completionStage", type="string", description="Stupeň dokončení"),
 *     @OA\Property(property="deviationFactorDe", type="string", description="Faktor odchylky DE"),
 *     @OA\Property(property="verificationFactorVf", type="string", description="Faktor verifikace VF"),
 *     @OA\Property(property="vehiclePurpose", type="string", description="Účel vozidla"),
 *     @OA\Property(property="additionalRecords", type="string", description="Další záznamy"),
 *     @OA\Property(property="alternativeDesign", type="string", description="Alternativní provedení"),
 *     @OA\Property(property="technicalCertificateNumber", type="string", description="Číslo technického průkazu"),
 *     @OA\Property(property="registrationCertificateNumber", type="string", description="Číslo ORV"),
 *     @OA\Property(property="licensePlateType", type="string", description="Druh RZ"),
 *     @OA\Property(property="vehicleClassification", type="string", description="Zařazení vozidla"),
 *     @OA\Property(property="status", type="string", description="Status vozidla"),
 *     @OA\Property(property="cnv", type="integer", description="Počítačové číslo vozidla (primární klíč vozidla)"),
 *     @OA\Property(property="abs", type="string", description="Je vybaven ABS?"),
 *     @OA\Property(property="airbag", type="string", description="Počet airbagů"),
 *     @OA\Property(property="asr", type="string", description="Je vybaven ASR?"),
 *     @OA\Property(property="brakesEmergency", type="string", description="Nouzové brzdy"),
 *     @OA\Property(property="brakesRetarder", type="string", description="Odlehčovací brzdy"),
 *     @OA\Property(property="brakesParking", type="string", description="Parkovací brzdy"),
 *     @OA\Property(property="brakesService", type="string", description="Provozní brzdy"),
 *     @OA\Property(property="additionalTextOnCertificate", type="string", description="Doplňkový text na technickém průkazu"),
 *     @OA\Property(property="operatingMassTo", type="string", description="Hmotnost provozní DO"),
 *     @OA\Property(property="loadAxleJd", type="string", description="Hmotnost zátěže SZ"),
 *     @OA\Property(property="loadAxleJdType", type="string", description="Typ zátěže SZ"),
 *     @OA\Property(property="hydraulicDrive", type="string", description="Je vybaven hydropohonem?"),
 *     @OA\Property(property="tankCapacity", type="string", description="Objem cisterny"),
 *     @OA\Property(property="roofLoad", type="integer", description="Zátěž střechy"),
 *     @OA\Property(property="engineNumber", type="string", description="Číslo motoru"),
 *     @OA\Property(property="maxSpeedLimit", type="string", description="Nejvyšší rychlost s omezením"),
 *     @OA\Property(property="brakeControlJd", type="string", description="Ovládání brzd SZ"),
 *     @OA\Property(property="brakeControlJdType", type="string", description="Druh ovládání brzd SZ"),
 *     @OA\Property(property="retarder", type="string", description="Je vybaven retardérem?"),
 *     @OA\Property(property="yearOfManufacture", type="integer", description="Rok výroby vozidla"),
 *     @OA\Property(property="lengthTo", type="string", description="Délka DO"),
 *     @OA\Property(property="cargoLength", type="string", description="Ložná délka"),
 *     @OA\Property(property="cargoWidth", type="string", description="Ložná šířka"),
 *     @OA\Property(property="heightTo", type="string", description="Výška DO"),
 *     @OA\Property(property="typeCode", type="string", description="Typ kód"),
 *     @OA\Property(property="rpTermination", type="string", description="RM zániku")
 * )
 * @OA\Schema(
 *     schema="VehicleShort",
 *     title="Vehicle, short version",
 *     description="Schema of vehicle, shortened",
 *     @OA\Property(property="cnv", type="integer", description="Počítačové číslo vozidla (primární klíč vozidla)"),
 *     @OA\Property(property="vin", type="string", description="VIN vozidla"),
 *     @OA\Property(property="brand", type="string", description="Tovární značka vozidla"),
 *     @OA\Property(property="color", type="string", description="Barva vozidla"),
 *     @OA\Property(property="yearOfManufacture", type="integer", description="Rok výroby vozidla"),
 *     @OA\Property(property="technicalCertificateNumber", type="string", description="Číslo technického průkazu"),
 *     @OA\Property(property="registrationCertificateNumber", type="string", description="Číslo ORV"),
 *     @OA\Property(property="type", type="string", description="Typ vozidla")
 * )
 */
class Vehicle extends Model
{
	// Tabulka pro model
	protected $table = 'vehicle_register';
	
	// Primární klíč
	protected $primaryKey = 'cnv';
	
	// Pokud primární klíč není auto-incrementující
	public $incrementing = false;
	
	// Typ primárního klíče
	protected $keyType = 'integer';
}