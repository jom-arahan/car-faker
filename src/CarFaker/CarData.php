<?php

namespace CarFaker;

class CarData
{
	protected $carData = array(
		'Aston Martin' => array(
			'DB9' => array('DB9 Coupe'),
			'Rapide' => array('Rapide S'),
			'Vanquish' => array('Vanquish Coupe','Vanquish Volante'),
			'Vantage' => array(
			'Vantage Coupe AT',
			'Vantage Coupe MT',
			'Vantage Roadster AT',
			'Vantage Roadster MT',
			'V12 S Coupe',
			'V12 S Coupe',
			'V12 S Roadster',
			'V8 S Coupe AT','V8 S Coupe MT','V8 S Roadster AT','V8 S Roadster MT')
		),
		'Audi' => array(
			'A1' => array('1.4L 3 Door','1.4L TFSI Sportback'),
			'A3 Sedan' => array('1.8TFSI','2.0 TDI Ambition','2.0 TDI Attraction'),
			'A4' => array('1.8 TFSI','2.0 TDI'),
			'A6' => array('1.8 Turbo FSI S-Tronic','3.0 Quatro TDI'),
			'A7' => array('3.0 TFSI Quattro'),
			'A8 L' => array('3.0 TDI Quattro','3.0 TFSI Quatro'),
			'Q3' => array('1.4 TFSI S-Tronic','2.0 TDI Quattro'),
			'Q5' => array('2.0 TDI Quattro'),
			'Q7' => array('3.0 TDI','3.0 TDI S'),
			'R8' => array('4.2-FSI Quattro','5.2 FSI Quattro'),
			'R8 Spyder' => array('5.2 FSI Quattro Spyder'),
			'RS4' => array('Avant'),
			'RS5' => array('Coupe'),
			'RS6' => array('Avant'),
			'S3' => array('2.0 TFSI Quattro'),
			'TT' => array('2.0 TFSI')
		),
		'BAIC' => array(
			'A113' => array('Hatch Comfortable','Sedan Comfortable'), 
			'A115' => array('Hatch Fashion','Sedan Comfortable'), 
			'A523' => array('Sedan 2.3 A/T'), 
			'M20' => array('7-seater Luxury','8-seater Comfort'), 
			'MZ40' => array('Cargo','Comfort','Luxury'), 
			'MZ45' => array('11-seater Luxury','7-seater Luxury'), 
			'X424' => array('Standard') 
		),
		'Bentley' => array(
			'Continental' => array('GT 6.0 W12','GT Speed','GT Speed Convertible','GT V8','GT3-R','GTC 6.0 W12','GTC V8'), 
			'Flying Spur' => array('V8','W12'), 
			'Mulsanne' => array('V8')
		),
		'BMW' => array(
			'1-Series Hatchback' => array('116D','116i','118d','118i','120d','125dd','125i','M135i'), 
			'2-Series Active Tourer' => array('218i'), 
			'2-Series Coupé' => array('220i','M235i'), 
			'3-Series Gran Turismo' => array('318d','320d','320i','325d','328i','335i'), 
			'3-Series Sedan' => array('316d','318d','320d','320i','325d','330d','335d xDrive'), 
			'4-Series Coupe' => array('420d','428i','435i'), 
			'4-Series Gran Coupe' => array('420d'), 
			'5-Series Gran Turismo' => array('530d','535d','535i','550i'), 
			'5-Series Sedan' => array('520d','525d','528i','530d','535d','535i','550i'), 
			'6-Series Gran Coupe' => array('640d','640i','650i'), 
			'7 Series' => array('730d','750Li','750Li xDrive'), 
			'M5 Sedan' => array('4.4'), 
			'M6 Gran Coupé' => array('4.4'), 
			'X1' => array('sDrive16d','sDrive18d','sDrive18i','sDrive20d','sDrive20i','xDrive20D','xDrive20i','xDrive25d'), 
			'X3' => array('xDrive18d','xDrive20d'), 
			'X4' => array('xDrive20d'), 
			'X5' => array('xDrive30d'), 
			'X6' => array('xDrive30d'), 
			'Z4' => array('sDrive20i')
		),
		'BYD' => array(
			'F0' => array('GL-i AT','GLX-i MT'), 
			'F3' => array('1.5L MT'), 
			'F5 Suri' => array('1.5L DCT'), 
			'L3' => array('GS-i 1.5L DCT','GS-i 1.5L MT'), 
			'Qin' => array('Plug-in Hybrid'), 
			'S6' => array('GS-i 2.0 4x2 M/T','GS-i 2.4 4x2 DCT')
		),
		'Chery' => array(
			'Fulwin2' => array('1.5 M/T'), 
			'Q22B' => array('1'), 
			'Q22L' => array('1.2 M/T'), 
			'QQ3' => array('1.0 M/T'), 
			'Tiggo' => array('2.0 CVT')
		),
		'Chevrolet' => array(
			'Camaro' => array('3.6 v6 2LT RS','6.2 v8 2ss'), 
			'Captiva' => array('2.8 4x2 LS','2.4 4x2 Gas LS'), 
			'Colorado' => array('2.5 4z2 MT LT','2.8 4x2 AT LT','2.8 4x4 AT LTZ','2.8 4x4 AT LTZ Tracker','2.8 4x4 MT LTZ','2.8 4x4 MT LTZ Tracker Pro','2.8 4x4 MTTracker'), 
			'Cruze' => array('1.8L','1.8 LS AT','1.8 LT AT'), 
			'Malibu' => array('2.4 AT LT','2.4 AT LTZ'), 
			'Orlando' => array('1.8 DCVVT LT'), 
			'Sail' => array('1.3L','1.5LT','1.5 LTZ'), 
			'Sonic Hatchback' => array('1.4 AT LTZ','1.4 MT LTZ'), 
			'Spark' => array('1.0 LS AT','1.0 LS MT','1.2 LT MT'), 
			'Spin' => array('1.3 MT LS','1.3 MT LTZ','1.5 AT LTZ'), 
			'Suburban' => array('5.3 4x2 LT','5.3 4x4 LTZ'), 
			'Trailblazer' => array('2.5 4x2 MT LTX','2.5 MT 4x2 LT','2.8 AT 4x2 L','2.8 AT 4x2 LT','2.8 AT 4x2 LTX','2.8 AT 4x4 LTZ','2.8 AT 4x4 LTZ SE'), 
			'Trax' => array('1.4 LS AT','1.4 LT AT')
		),
		'Chrysler' => array(
				'300C' => array('limited','luxury','v6'),
				'Town & Country' => array('limited','touring')
		),
		'Dodge' => array(
			'Challenger' => array('rallye redline','RT','RT classic','RT plus','SXT','SXT plus'),
			'Charger' => array('RT','RT plus','RT road and Track','SE','SXT','SXT plus'),
			'Durango' => array('citadel','limited','rt','sxt','sxt plus'),
			'Ram' => array('1500 laramie crew cab')
		),
		'FAW' => array(
			'Dump Truck' => array('6x4'),
			'Loadrunner' => array('dropside','panoramic body','SWAT'),
			'Multicarry 1.0' => array('4x2'),
			'Tractor Head' => array('aluminum body','dropside','panoramic body','SWAT')
		),
		'Ferrari' => array(
			'458 Speciale' => array('6x4'),
			'488 GTB' => array('V8'),
			'California' => array('3.9L v8'),
			'F12 Berlinetta' => array('T'),
			'FF' => array('v12')
		),
		'Ford' => array(
			'EcoSport' => array('1.5L ambiente MT','1.5L black edition','1.5L titanium powershift','1.5L trend MT','1.5L trend powershift'),
			'Escape' => array('1.6 SE','2.0L Titanium'),
			'Everest' => array('ambiente 2.2L 4x2 AT','ambiemte 2.2L 4x2 MT','titanium 2.2L 4x2 AT','titanium 2.2L 4x2 AT w/ optional premium package','titanium 3.2L 4x4 AT','titanium 3.2L 4x4 AT w/ optional premium package','trend 2.2L 4x2 AT'),
			'Expedition' => array('3.5L ecoboost v6 platinum'),
			'Explorer' => array('limited 2.3L ecoboost','3.5L v6 awd ecoboost'),
			'Fiesta Hatchback' => array('1.0L Sport+ with ecoboost','1.5 ambiente MT','1.5Sport PS','1.5 trend MT','1.5 trend PS'),
			'Fiesta Sedan' => array('1.5 ambiente MT','1.5 Titanium','1.5 trend MT','1.5 trend PS'),
			'Focus Hatchback' => array('1.5L ecoboost sport AT','1.5 ecoboost sports+ AT'),
			'Focus Sedan' => array('1.5L ecoboost titanium AT','1.5L ecoboost titanium+ AT'),
			'GT' => array('v6'),
			'Mustang' => array('2.3 ecoboost','5.0 v8 GT premium'),
			'Ranger' => array('Wildtrak 2.2K 4x4 MT', 'Wildtrak 3.2L 4x4 AT', 'Wildtrak 3.2L 4x4 MT', 'XLS 2.2 4x2 MT', 'XLS 2.2 4x4 MT', 'XLT 2.2L 4x2 AT', 'XLT 2.2L 4x2 MT')
		),
		'FOTON' => array(
			'Gratour' => array('wildtrak 2.2L 4x2 AT','wildtrak 2.2L 4x2 MT','wildtrak 2.2L 4x4 AT','wildtrak 2.2L 4x4 MT','wildtrak 3.2L 4x4 AT','wildtrak 3.2L 4x4 MT','XLS 2.2 4x2 MT','XLS 2.2 4x4 MT','XLT 2.2L 4x2 AT','XLT 2.2L 4x2 MT'), 
			'LCV' => array('1.2 L MT'), 
			'Thunder' => array('4x2'), 
			'Toano' => array('4x2','4x2 ironman','4x2 strike','4x4','4x4 ironman'), 
			'Toplander' => array('2.8L MT'), 
			'Tornado' => array('4x2','4x4','executive 4x2','executive 4x4','xtreme 4x2','xtreme 4x4'), 
			'Transvan' => array('2.5','2E'), 
			'Traveller' => array('2.8L 15-seater')
		),
		'Geely' => array(
			'Emgrand EC8' => array('2.0 MT GS','2.4 AT GL','2.4 AT GT'),
			'Emgrand EX7' => array('2.0MT GL', '2.4 AT GT')
		),
		'Great Wall' => array(
			'Haval H5' => array('elite(skyproof)','luxury'),
			'Haval M2' => array('1.5L VVT gas luxury'),
			'Haval M4' => array('1.5 VVT gas luxury'),
			'Voleex Hatchback' => array('c30 dignity'),
			'Voleex Sedan' => array('c30 elite A/T','c30 elite M/T'),
			'Wingle' => array('4x2 luxury','4x4 luxury','dual cab(w/ bedliner)','dual cab (w/o bedliner)','single cab(w/o bedliner)')
		),
		'Haima' => array(
			'1' => array('deluxe'),
			'2' => array('ASG 1.5 AT C-Sport','GL 1.3 MT standard','1.5 MT C-Sport'),
			'FStar 5' => array('5 1.2 deluxe MT'),
			'FStar PC' => array('dropside(No AC)','dropside(w/ AC)','manual (no ac)','manual (with AC)'),
			'M3' => array('1.5 comfort MT','1.5 elite CVT'),
			'S5' => array('1.6 Elite MT', '1.6 Noble MT')
		),
		'Honda' => array(
			'Accord' => array('2.4 S Navi','3.5 SV AT v6'),
			'Brio' => array('1.3 S AT','1.3 S AT Modulo Aero','1.3 S AT Modulo utility','1.3 S MT','1.3 V AT','1.3 V MT'),
			'Brio Amaze' => array('1.3 E MT','1.3 S AT','1.3 S AT Modulo Aero','1.3 S AT modulo utility','1.3 S AT special edition','1.3 V Navi AT','1.3 V Navi MT'),
			'City' => array('1.5 E CVT','1.5 E CVT special edition','1.5 E MT','1.5 VX navi cvt','1.5 vx navi cvt modulo',' 1.5 vx navi cvt mugen','1.5 vx+ navi cvt'),
			'Civic' => array('1.5 RS Turbo', '1.8 E'),
			'CR-V' => array('2.0 NAVI AT Cruiser Edition','2.0 s A/T','2.0 V A/T','2.0 V M/T','2.4 SX navi A/T'),
			'CR-Z' => array('1.5 IMA Hybrid Navi CVT','1.5 IMA Hybrid Navi Mt'),
			'HR-V' => array('1.8 E CVT','1.8 E CVT modulo','1.8 E EL CVT','1.8 EL CVT MUGEN','1.8 S CVT'),
			'Jazz' => array('1.5 V CVT','1.5 V MT','1.5 VX CVT','1.5VX+ CVT'),
			'Legend' => array('3.5 Sport hybrid SH-AWD'),
			'Mobilio' => array('1.5L E','1.5L RS(White Orchid Pearl)','1.5L RS navi','1.5L V','1.5L V platinum','1.5L V utility'),
			'Odyssey' => array('2.4L EX','2.4L EX-V Navi'),
			'Pilot' => array('3.5 EX-L AT')
		),
		'Hyundai' => array(
			'Accent Hatchback' => array('1.6 E 4AT(dsl)','1.6 E 6MT(dsl)','1.6L 4AT(dsl)'),
			'Accent Sedan' => array('1.4 GL CVT','1.4GL MT','1.4 L CVT','1.4 S CVT','1.4 S MT','1.6 CRDi E AT',' 1.6 CRDi GL AT','1.6 CRDi GL MT','1.6 E MT Dsl'),
			'Azera' => array('3.0 L 6AT v6'),
			'Elantra' => array('1.6 GL AT','1.6 GL MT','2.0 GLS AT'),
			'Eon' => array('0.8 glx mt'),
			'Genesis Coupe' => array('FL 2.0L turbo 6MT','FL 2.0L turbo 6MT Brembo','Fl 2.0L turbo 8AT','FL 3.8L v6 6mt brembo','FL 3.8L v6 8AT'),
			'Grand Santa Fe' => array('2.2 6AT 4WD premium'),
			'Starex' => array('GL TCI 10 Seater AT','GL TCI MT 10 Seater','GL TCI MT 12 Seater','GLS CRDi VGR AT 10 SEATER WITH SWIVEL','gls crdi wgt 12 seater MT','gold crdi vgt 10 seater at'),
			'H-100' => array('cab and chassis'),
			'i20 Cross Sport' => array('1.4 AT Gas','1.4 MT diesel','1.4 MT Gas'),
			'Santa Fe' => array('2.2 GLS 4x2 AT','2.2 GLS 4x2 MT'),
			'Sonata' => array('GLS 2.4 AT','GLS 2.4 AT Premium'),
			'Tucson' => array('2.0 CRDi GL 4x2 AT','2.0 CRDi GLs 4x2 AT','2.0 MPi GL 4x2 AT','2.0 MPI GLS 4x2 MT'),
			'Veloster' => array('1.6 T-GDi GLS')
		),
		'Isuzu' => array(
			'C-Series' => array('CYZ 6x4'),
			'Crosswind' => array('sportivo x AT','sportivo X JS M/T','sportivo X MT','sportivo x urban edition mt','XL','XS','XT','XUV AT'),
			'D-MAX' => array('3.0 VGS LS 4x2 AT','3.0 VGS LS 4x2 AT urban edition','3.0 VGS LS 4x2 MT','3.0 VGS LS 4x4 AT','3.0 VGS LS 4x4 MT','LS 4x2 AT','LS 4x2 MT','LS 4x4 AT','LS 4x4 MT','LT 4x2 MT','LT 4x4 MT','LT-X 4x2 MT','single cab 4x2 MT'),
			'E-Series' => array('EXR 52F 4x2','EXZ 51k 6x4'),
			'F-Series' => array('FRR','FVM','FVR'),
			'i-Van' => array('NHR 16-seater','NHR 18-seater'),
			'mu-X' => array('3.0 VGS LS-A 4x2 AT','3.0 VGS LS-A 4x4 AT','LS 4x2 MT','LS-A 4x2 AT','LS-A 4x2 MT','LS-A 4x4 AT','LS-M 4x2 MT'),
			'N-Series' => array('NHR Flexi Truck', 'NHR Tilt', 'NKR Tilt 55', 'NKR Tilt 71', 'NPR Tilt 71', 'NQR Tilt 71')
		),
		'Jaguar' => array(
			'F-Type Convertible' => array('3.0 V6', 'S', 'S V8'),
			'F-Type Coupe' => array('3.0 V6', 'R', 'S'),
			'XE' => array('2.0 200','2.0.240','3.0 340'),
			'XF' => array('2.0T','3.0 AWD','3.0 V6','R','R-S','Supercharged'),
			'XJ' => array('3.0 V6','3.0 V6 AWD','L portfolio','portfolio awd','supercharged','R','R(LWB)','supercharged'),
			'XK Convertible' => array('5.0 V8','XKR','XKR-S'),
			'XK Coupe' => array('5.0 V8','XKR','XKR-S')
		),
		'Jeep' => array(
			'Grand Cherokee' => array('laredo 4x4','limited CRDi 4WD','overland 4x4','summit 4x4'),
			'Wrangler' => array('rubicon','sahara','sport'),
			'Wrangler Unlimited' => array('rubicon','rubicon 2.8L CRD','sahara','sport')
		),
		'JMC' => array(
			'Hunter' => array('4x2 5MT','4x4 5MT'),
			'Orion' => array('2.4'),
			'Vigor' => array('N350 4x2 MT','N350 4x4 MT')
		),
		'Kia' => array(
			'All-New Sportage' => array('2.0 CRDI EX 4x2','2.0 CRDi EX 4x4','2.0 CRDi GT Line 4x4'),
			'Carens' => array('1.7 EX AT','1.7 LX AT','1.7 LX AT(5-seater)'),
			'Forte Hatchback' => array('2.0 SX AT'),
			'Forte Koup' => array('2.0 EX AT'),
			'Forte Sedan' => array('1.6 EX AT'),
			'Grand Carnival' => array('2.2L EX CRDi 11-seater','2.2L EX CRDi 7-seater','3.3L SXL 7-seater'),
			'Optima' => array('2.4 EX'),
			'Picanto' => array('1.0 EX MT','1.2 EX AT'),
			'Rio Hatchback' => array('1.4 EX AT'),
			'Rio Sedan' => array('1.2 LX MT','1.4 EX AT','1.4 EX MT'),
			'Sorento' => array('2.2L CRDi EX 4x4 AT'),
			'Soul' => array('1.6L CRDi EX','1.6L CRDi LX','1.6L CRDi LX MT'),
			'Sportage' => array('2.0 2WD EX','2.0 2WD EX AT (diesel)','2.0 AWD EX','2.4 AWD EX (deluxe)')
		),
		'King Long' => array(
			'Max' => array('2.5L'),
			'Univan' => array('15 seater','18 seater','bench type')
		),
		'Lamborghini' => array(
			'Aventador' => array('LP 700-4'),
			'Aventador Roadster' => array('LP 700-4'),
			'Huracan' => array('LP 610-4')
		),
		'Land Rover' => array(
			'Defender' => array('110','90'),
			'Discovery 4' => array('SDV6 Diesel'),
			'Discovery Sport' => array('2.0L Si4 AT','2.2L SD4 Diesel AT','2.2L SD4 Diesel MT','2.2L TD4 Diesel AT','2.2L TD4 Diesel MT'),
			'Freelander2' => array('TD4 V6'),
			'Range Rover' => array('autobiography LRV8','autobiography SDV8','autobiography TDV6','HSE TDV6','Vogue LRVB',' SDVB','TDV6'),
			'Range Rover Evoque' => array('eD4','SD4','Si4','TD4')
		),
		'Lexus' => array(
			'CT' => array('200h F Sport'),
			'ES' => array('200h Hybrid'),
			'GS' => array('350'),
			'GX' => array('460'),
			'IS' => array('350','350 F Sport'),
			'LS' => array('460L(4-seater)','460L(5-seater)','600hL(4-seater)','600hL(5-seater)'),
			'LX' => array('570'),
			'NX' => array('600hL(5-seater)'),
			'RC' => array('200t','200t f-sport','300h AWD'),
			'RX' => array('350 premier','450 hybrid')
		),
		'Lifan' => array(
			'320' => array('320 Ex'),
			'520' => array('1.3DX','1.3LX','1.6LX','1.6VIP'),
			'620' => array('1.6LX'),
			'Foison' => array('1.3'),
			'Mini Truck' => array('1.3')
		),
		'Lotus' => array(
			'Elise' => array('1.6 MT','220 Cup 1.8 MT','S 1.8 MT'),
			'Evora' => array('S 3.5 AT','S 3.5 MT'),
			'Exige' => array('S coupe 3.5 AT','S Coupe 3.5 MT','S Roadster 3.5AT','S Roadster 3.5MT','V6 Cup 3.5 MT')
		),
		'MG' => array(
			'3' => array('1.3 lux amt','1.3 std amt'),
			'350' => array('1.5L std AT'),
			'5' => array('1.5L STD AT'),
			'GT' => array('1.5 vct std AT')
		),
		'Mahindra' => array(
			'Enforcer' => array('double cab 4x2','double cab 4x4','single cab 4x2','single cab 4x4'),
			'Xylo' => array('2.2L')
		),
		'Maserati' => array(
			'Ghibli' => array('diesel','S','S Q4','V6'),
			'GranCarbio' => array('4.7','MC','Sport'),
			'GranTurismo' => array('MC stradale','Sport'),
			'Quattroporte' => array('diesel','GTS','Q4')
		),
		'Mazda' => array(
			'2 Hatchback' => array('1.5L skyactiv V'),
			'2 Sedan' => array('1.5L Skyactiv R','1.5L Skyactiv R(soul red)','1.5L Skyactiv S','1.5L skyactiv S MT','1.5L skyactiv V'),
			'3 Hatchback' => array('1.5L skyactiv V AT','2.0L skyactiv R AT','2.0L skyactiv R AT soul red','2.0L skyactiv Speed','2.0L skyactiv','soul red'),
			'3 Sedan' => array('1.5L skyactiv V AT','2.0 skyactiv R AT','2.0L skyactiv R AT soul red'),
			'6 Sedan' => array('2.2 skyactiv-D','2.5 AT','2.5 AT soul red'),
			'6 Sports Wagon' => array('2.5AT','2.5 AT soul red'),
			'BT-50' => array('2.2 4x2 AT','2.2 4x2 MT','3.2 4x4 AT'),
			'CX-5' => array('2.0 FWD Maxx','2.0 FWD pro','2.0 FWD pro soul red','2.2 skyactiv-D','2.5 AWD sport','2.5 AWD sport soul red'),
			'CX-9' => array('3.7 grand touring awd(kodo)'),
			'MX-5' => array('6-speed automatic','6-speed manual')
		),
		'Mercedes-Benz' => array(
			'A-Class' => array('A 250 sport 4matic','A 45 AMG'),
			'AMG' => array('GT S'),
			'B-Class' => array('B 180',' B 200 CGI','B 200 CGI night package'),
			'C-Class Coupe' => array('C 250'),
			'C-Class Sedan' => array('c200 AMG',' c200 avantgarde','c250 AMG'),
			'CLA-Class' => array('cla 250','cla 45 amg 4matic'),
			'CLS-Class' => array('cls 350 coupe','cls 63 amg'),
			'E-Class' => array('e 250 cdi','e 250 cgi','e 63 AMG'),
			'GL-Class' => array('350 bluetec 4matic'),
			'GLK-Class' => array('glk 200 cdi','glk 350'),
			'M-Class' => array('ml 250 cdi AMG sport','ml 350 cdi amg sport'),
			'S-Class' => array('s 350 lwb','400 blue hybrid','s 500 LWB'),
			'SL-Class' => array('sl 350','sl 600','sl 63 AMG'),
			'SLK-Class' => array('slk 200 CGI','slk 350 CGI'),
			'SLS-Class' => array('sls AMG')
		),
		'Mini' => array(
			'Clubman' => array('Cooper', 'Cooper S'),
			'Convertible' => array('Convertible S'),
			'Cooper' => array('1.5L (3Dr)', '1.5L S (5Dr)', '2.0L S (3dr)', '2.0L S (5Dr)'),
			'Cooper Countryman' => array('1.6L', '1.6L John Cooper Works', '1.6L S'),
			'Cooper paceman' => array('1.6L', '1.6L S', 'JCW ALL4')
		),
		'Mitsubishi' => array(
			'Adventure' => array('GSL Sport', 'GLX SE', 'GX', 'Super Sport', 'TX'),
			'All-New Montero Sport' => array('GLS 2.4 4x2 AT', 'GLS 2.4 4x4 MT', 'GLS Premium 2.4 4x2 AT', 'Sport GT 2.4 4x4 AT'),
			'ASX' => array('GLS 4x2 INVECS III CVT', 'ASX GSR 4x2 INVECS III CVT'),
			'L300' => array('Bare', 'Dual AC', 'Single AC', 'XV'),
			'Lancer EX' => array('GLX 1.6 AT', 'GLX 1.6 MT', 'GT-A 2.0 CVT', 'MX 1.6 AT'),
			'Mirage' => array('GLS 1.2 CVT', 'GLS 1.2 MT', 'GLX 1.2 CVT', 'GLX 1.2 MT'),
			'Mirage G4' => array('GLS 1.2 CVT', 'GLS 1.2 MT', 'GLX 1.2 CVT', 'GLX 1.2 MT', 'GX 1.2 MT'),
			'New Lancer EX' => array('GLX 1.6 AT', 'GT-A 2.0 CVT'),
			'New Mirage' => array('GLS CVT', 'GLS MT', 'GLX CVT', 'GLX MT'),
			'Pajero' => array('GLS 3.2 AWD(DI-D)', 'GLS 3.8 AWD(Gas)'),
			'Strada' => array('2.5 GL 4x2 MT', '2.5 GL 4x4 MT', '2.5 GLS Sport V 4x4 AT', '2.5 GLS V 4x4 MT', '2.5 GLX 4x2 MT', '2.5 GLX V 4x2','AT')
		),
		'Morgan' => array(
			'3 Wheeler' => array('S&S 1976cc V twin'),
			'4/4 1.6L' => array('Ford Sigma 1595cc i4'),
			'Aero' => array('Automatic Transmission', 'Manual Transmission'),
			'Plus 4 2.0L' => array('2 Seater Manual', '4 Seater Manual'),
			'Plus 8 4.8L' => array('2 Seater / 6-speed Automatic', '2 Seater / 6-speed Manual'),
			'Roadster 3.7L' => array('2 Seater Manual', '4 Seater Manual')
		),
		'Nissan' => array(
			'Almera' => array('1.2 MT', '1.5 E AT', '1.5 E MT', '1.5 V AT', '1.5 VL AT'),
			'Altima' => array('2.5L SV', '3.5L SL'),
			'GT-R' => array('3.8 V6 AT'),
			'Juke' => array('1.6 Upper CVT'),
			'Navara' => array('4x2 6-Speed MT', '4x2 EL AT Calibre', '4x2 EL Calibre SV AT', '4x2 EL MT Calibre', '4x4 EL MT', '4x4 VL AT', '4x4 VL MT', '4x4 VL SV'),
			'NV350 Urvan' => array('18-Seater', 'Cargo', 'Escapade 12-Seater', 'Shuttle 15-seater'),
			'Patrol Royale' => array('5.6 V8 4x4 AT'),
			'Patrol Super Safari' => array('3.0 4x4 AT'),
			'Sylphy' => array('1.6 CVT', '1.6 MT', '1.8 CVT'),
			'X-Trail' => array('2.0 4x2', '2.5 4x4')
		),
		'Peugeot' => array(
			'2008' => array('Allure 1.6L AT'),
			'208' => array('GTi 1.6 THP'),
			'3008' => array('2.0L HDi Allure AT'),
			'301' => array('1.6 EC5 AT', '1.6 HDi MT'),
			'308' => array('GTi', 'Hatchback Allure', 'Hatchback GT Line', 'Station Wagon Allure', 'Station Wagon GT Line'),
			'5008' => array('2.0L HDi Allure AT'),
			'508' => array('2.0L HDi Allure AT', ' 2.2L HDi GT'),
			'Expert Tepee' => array('2.0 HDi AT'),
			'RCZ' => array('1.6L THP AT')
		),
		'Porsche' => array(
			'718 Boxster' => array('PDK', 'S PDK'),
			'911 Carrera' => array('PDK', 'S Cabriolet PDK', 'S PDK'),
			'911 GT3' => array('GT3 PDK', 'GT3 RS PDK'),
			'911 Targa 4' => array('S PDK'),
			'Cayenne' => array('Diesel', 'GTS', 'S', 'Turbo', 'V6'),
			'Cayman' => array('PDK', 'S PDK'),
			'Macan' => array('GTS', 'PDK', 'S', 'S Diesel', 'Turbo')
		),
		'Rolls-Royce' => array(
			'Ghost' => array('Extended Wheelbase V12 AT', 'V12 AT'),
			'Phantom' => array('Extended Wheelbase V12 AT', 'V12 AT'),
			'Phantom Coupe' => array('V12 AT', 'Drophead Coupe V12 AT'),
			'Wraith' => array('V12 AT')
		),
		'Ssangyong' => array(
			'Korando' => array('ELX 4x4', 'EXD AT', 'EXG AT', 'SXD MT'),
			'Rodius' => array('ELX', 'EX', 'SX'),
			'Tivoli' => array('EXG', 'Sport', 'Sport R', 'SX AT', 'SX MT')
		),
		'Subaru' => array(
			'BRZ' => array('2.0 AT'),
			'Forester' => array('2.0 XT', '2.0i Premium', '2.0i-L'),
			'Impreza' => array('2.0i-S CVT'),
			'Legacy' => array('2.5i-S', '3.6R-S'),
			'Levorg' => array('1.6GT-S'),
			'New Forester' => array('2.0i-L', '2.0i-P','2.0XT'),
			'Outback' => array('2.5i-S', '3.6R-S'),
			'Tribeca' => array('3.6'),
			'WRX' => array('2.0L CVT', '2.0L MT'),
			'WRX STi' => array('2.5L MT (Premium)', '2.5L MT (with Wing)'),
			'XV' => array('2.0i', '2.0i-S Premium')
		),
		'Suzuki' => array(
			'Alto' => array('800 Deluxe', '800 Standard'),
			'APV' => array('1.6 GA MT', '1.6 GLX MT', '1.6 SGX AT', 'Carry Pick-up', 'Panel Van'),
			'Celerio' => array('CVT', 'MT'),
			'Ciaz' => array('1.4 GL AT', '1.4 GL MT', '1.4 GLX AT'),
			'Ertiga' => array('GA 1.4 MT', 'GL 1.4 AT', 'GL 1.4 MT', 'GLX 1.4 AT'),
			'Grand Vitara' => array('AT', 'AT Special Edition'),
			'Jimny' => array('JLX A/T', 'JLX M/T', 'JX M/T'),
			'Kizashi' => array('2.4 CVT'),
			'Swift' => array('1.2 AT', '1.2 MT', '1.4 AT', '1.4 MT'),
			'Swift Dzire' => array('AT', 'MT')
		),
		'Tata' => array(
			'Ace Bata' => array('Cab & Chassis'),
			'Indica' => array('Diesel'),
			'Indigo' => array('LX'),
			'Manza' => array('Aura', 'Ini'),
			'Super Ace' => array('Big Boy Passenger Van (Dual AC)', 'Big Boy Passenger Van (Single AC)', 'Ace Aluminum Body', 'Drop Side Load Body', 'School Service (Dual AC)'),
			'Vista' => array('Ignis', 'Ini'),
			'Xenon' => array('4x2', '4x4')
		),
		'Toyota' => array(
			'86' => array('2.0 AT', '2.0 AT White Pearl', '2.0 MT', '2.0 MT White Pearl', 'Aero 2.0 AT', '2.0 Aero White Pearl', 'Aero 2.0 MT', 'Aero 2.0 MT White Pearl'),
			'All-New Fortuner' => array('2.4 G Diesel 4x2 AT', '2.4 G Diesel 4x2 MT', '2.4 V Diesel 4x2 AT', '2.4 V Diesel 4x2 AT (White Pearl)', '2.7 G Gas 4x2 AT', '2.8 V Diesel 4x4 AT', ' 2x8 V Diesel 4x4 AT (White Pearl)'),
			'All-New Innova' => array('E 2.0 MT', 'E 2.8 AT', 'G 2.0 AT', 'G 2.8 AT', 'G 2.8 MT', 'J 2.0 MT', 'J 2.8 MT', 'V 2.8 AT'),
			'Alphard' => array('3.5 Gas AT', '3.5 Gas AT (White Pearl)'),
			'Avanza' => array('1. E AT', '1.3 E MT', '1.3 J MT', '1.5 G AT', '1.5 G MT'),
			'Camry' => array('25. G AT', '2.5 G AT White Pearl', '2.5 S AT', '2.5 S AT White Pearl', '2.5 V AT', '2.5 V AT White Pearl', '3.5 V6 AT', '3.5 V6 AT White Pearl'),
			'Corolla Altis' => array('1.6 E MT', '1.6 G AT', '1.6 G MT', '1.6 V AT', '1.6 V AT White Pearl', '2.0 V AT', 'V AT White Pearl'),
			'FJ Cruiser' => array('4.0 V6'),
			'Hiace' => array('Commuter 3.0 MT', 'Grandia 3.0 AT | 2-Tone', 'Grandia 3.0 AT | Monotone', 'GL Grandia 3.0 MT | Monotone', 'Super Grandia (Fabric) 3.0 AT | 2-Tone', 'Super Grandia (Fabric) 3.0 AT | Monotone', 'Super Grandia (Leather) 3.0 AT | 2-Tone', 'Super Grandia (Leather) 3.0 AT | Monotone', 'Super Grandia 3.0 LXV'),
			'Hilux' => array('2.4 Cab & Chassis 4x2 MT', '2.4 E DSL 4x2 MT', '2.4 G DSL 4x2 AT', '2.4 G DSL 4x2 MT', '2.4 J DSL 4x2 MT', '2.8 G DSL 4x4 AT', '2.8 G DSL 4x4 MT'),
			'Land Cruiser 200' => array('4.5L AT', 'Premium 4.5L AT'),
			'Land Cruiser Prado' => array('3.0 Diesel AT', '3.0 Diesel AT White Pearl', '3.0 Diesel MT', '3.0 Diesel MT White Pearl', '4.0 Gas AT', '4.0 Gas AT White Pearl'),
			'Previa' => array('2.4 Full Option', '2.4 Full Option (White Pearl)', '2.4 Standard', '2.4 Standard (White Pearl)'),
			'Prius-C' => array('1.5 Full Option', '1.5 Standard'),
			'Rav4' => array('2.5 Active 4x2 AT', '2.5 Active+ 4x2 AT', '2.5 Premium 4x2 AT', '2.5 Premium 4x4 AT'),
			'Vios' => array('1.3 Base MT', '1.3 E AT', '1.3 E MT', '1.3 J MT', '1.5 G AT', '1.5 G AT White Pearl', '1.5 G MT', '1.5 G MT White Pearl'),
			'Wigo' => array('1.0 E MT', '1.0 G AT', '1.0 G AT TRD', '1.0 G MT'),
			'Yaris' => array('1.3 E AT', '1.3 E MT', '1.5 G AT'),
		),
		'Volkswagen' => array(
			'Beetle' => array('Basic 1.2 TSI MT', 'Design 1.4 TSI DSG'),
			'Golf' => array('1.4 TSI DSG Comfortline', '1.4 TSI DSG Highline'),
			'Golf GTI' => array('2.0 TSI 6-speed DSG'),
			'Jetta' => array('Comfortline TDI DSG', 'Trendline 2.0 TDI MT', 'Trendline TSI'),
			'Passat' => array('2.0 TSI DSG Business Edition AID', '2.0 TSI DSG Highline'),
			'Polo Hatchback' => array('1.6L MPI (Gas)'),
			'Polo Sedan' => array('Trendline 1.6 MPI AT'),
			'Tiguan' => array('1.4 TSI Trend & Fun', '2.0 TDI Sport & Style', 'Business Edition'),
			'Touareg' => array('Sport Edition 3.0 TDI V6 AT', 'Trendline 3.0 TDI V6 AT'),
			'Touran' => array('Comfortline 2.0 TDI DSG', 'Highline 2.0 TDI DSG'),
		),
		'Volvo' => array(
			'S60' => array('D4', 'D4 Advantage', 'D4 R-Design', 'T4 6-Speed Powershift'),
			'S80' => array('T5 8-Speed Geartronic'),
			'V40' => array('T4 6-Speed Powershift', 'T4 Advantage', 'T4 R-Design'),
			'V40 Cross Country' => array('D4 8-speed Geartronic'),
			'V60' => array('T5 8-Speed Geartronic'),
			'XC60' => array('D4 8-speed Geartronic', 'R-Design 8-speed Geartronic', 'T5 8-speed Geartronic'),
			'XC90' => array('D5', 'T6')
		)
	);

	protected $carTransmissionType = array('Manual', 'Automatic', 'CVT');
	protected $carBodyType = array('AUV', 'Commercial Vehicle', 'Convertible', 'Coupe', 'Crossover', 'Hatchback', 'Minivan', 'MPV',
	 'Pick-Up', 'Sedan', 'Station Wagon', 'SUV', 'Van'
	);
	protected $carFuelType = array('Diesel', 'Electric', 'Gasoline', 'Hybrid', 'LPG');

	public function __construct($data = null)
	{
		if (!is_null($data)) {
			$this->carData = $data;
		}
	}

	public function getCarMakes()
	{
		return array_keys($this->carData);
	}

	public function getCarModels($carMake)
	{
		if (!isset($this->carData[$carMake])) {
			throw new \InvalidArgumentException(sprintf('Unknown car make: %s', $carMake));
		}

		return array_keys($this->carData[$carMake]);
	}

	public function getCarModelVariants($carMake, $carModel)
	{
		if (!isset($this->carData[$carMake][$carModel])) {
			throw new \InvalidArgumentException(sprintf('Unknown car make or model: %s', $carMake.', '.$carModel));
		}
		
		return $this->carData[$carMake][$carModel];
	}

	public function getCarBodyTypes()
	{
		return $this->carBodyType;
	}

	public function getCarFuelTypes()
	{
		return $this->carFuelType;
	}

	public function getCarTransmissionTypes()
	{
		return $this->carTransmissionType;
	}
	
}