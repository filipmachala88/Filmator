<?php declare(strict_types = 1);

namespace App\Model\Database\Fixture;

use App\Model\Database\Entity\SerialEntity;
use App\Model\Facade\Admin\NewContentFacade;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Nette\Utils\Strings;


final class SerialFixture implements FixtureInterface
{

	public function load(ObjectManager $manager)
	{
		$serials = [
			[
				'title' => 'Riverdale',
				'year' => '2017 - 2022',
				'rating' => 70,
				'teaser' => 'Teenager Archie a jeho parta se na své cestě úskalími sexu, lásky, školy a rodiny zaplétají do temného tajemství městečka Riverdale.',
				'description' => 'Na obrazovky stanice CW se dostal další komiksový seriál s názvem Riverdale. Nejedná se ale o komiksy DC ani Marvel, nýbrž o méně známé Archie Comics, které tento rok slaví své 75. výročí. Pilotní díl měl premiéru 26. ledna 2017. V březnu byl seriál obnoven pro druhou řadu, která začala hned na podzim 2017 a měla celých 22 epizod. Seriál popisuje životy Archieho, jeho nejlepší kamarádky Betty a krásné, neznámé dívky Veronicy, která se s matkou přistěhovala z New Yorku. Děj se odehrává v malém městečku Riverdale, které je otřeseno nedávným úmrtím jednoho ze studentů, Jasona Blossoma, jehož smrt byla brána jako nešťastná nehoda. Vše se však brzy změní.',
				'imageBanner' => 'img/fixture/serial/riverdale_banner.jpg',
				'imagePoster' => 'img/fixture/serial/riverdale_poster.jpg',
				'trailer' => 'https://youtu.be/HxtLlByaYTc'
			],
			[
				'title' => 'Ballers',
				'year' => '2015 - 2019',
				'rating' => 76,
				'teaser' => 'V tomto novém komediálním seriálu si někdejší superhvězda Spencer Strasmore (Dwayne "The Rock" Johnson) dává do pořádku svůj život po ukončení kariéry a radí jiným současným i bývalým hráčům, jak se orientovat ve světě fotbalového byznysu. Seriál Hráči od scenáristy Stevea Levinsona zkoumá životy skupiny současných i bývalých hráčů',
				'description' => 'Seriál Hráči od scenáristy Stevea Levinsona zkoumá životy skupiny současných i bývalých hráčů amerického fotbalu. Dwayne Johnson se představí v hlavní roli někdejší fotbalové hvězdy Spencera Strasmorea. Mezi další postavy patří vždy dobře naložený Charles, který ukončil kariéru vrcholového sportovce a hledá nové uplatnění; soutěživý a duchovně založený Ricky, současná senzace amerického fotbalu; finanční poradce Joe, který se zoufale snaží zapadnout; agent špičkových sportovců Jason; profesionální fotbalista Vernon, pro něhož je v životě nejdůležitější rodina; bývalá manželka špičkového atleta Julie; sportovní reportérka Stephanie Michaelsová, která je zamilovaná do Spencera, a vdova po jednom ze Spencerových nejbližších přátel, Tina.',
				'imageBanner' => 'img/fixture/serial/ballers_banner.jpg',
				'imagePoster' => 'img/fixture/serial/ballers_poster.jpg',
				'trailer' => 'https://youtu.be/wfi5Yv9FgCw'
			],
			[
				'title' => 'My name is Earl',
				'year' => '2005 - 2009',
				'rating' => 81,
				'teaser' => 'Ak vyhráte stotisíc dolárov a stratíte tiket, máte zlú karmu! Ako ju napraviť? Nič nie je stratené, musíte len rýchle odčiniť všetky svoje životné hriechy, spáchané do dnešného dna. To je teória, ktorou sa riadi aj nešťastník Jason Lee ako Earl Hickey, ktorý kamsi zapatrošil vzácny výherný tiket na sumu, ktorá by ho zaručene vytrhla z biedy. Podarí sa mu udobriť s vlastným osudom tak, aby mu osvietil cestu k ukrytému tiketu ešte do uzávierky vyplácania výhier súťaže?',
				'description' => 'Earl Hickey žije na okraji společnosti, živí se krádežemi a nikdy pro nikoho neudělal nic dobrého. Má ne zrovna chytrého bratra Randyho, manželku Joy, která ho do chomoutu uhnala opilého a dvě malé ratolesti, z nichž ani jedna není jeho pravým dítkem. Jednoho dne na Earla dýchne štěstěna a on koupí výherní los na 100 000 dolarů. Po chvilce radosti ho srazí auto a los uletí. Earl si v nemocnici léčí rány, jak na těle, tak na duši. Manželka mu oznámí, že se rozvádí a ona si nechává Earlův přívěs, aby měla kde bydlet s Darnellem, skutečným otcem svých dětí. Když už si Earl myslí, že nemůže mít víc smůly, zaujme ho pořad běžící v televizi, kde je zmínka o karmě.',
				'imageBanner' => 'img/fixture/serial/my-name-is-earl_banner.jpg',
				'imagePoster' => 'img/fixture/serial/my-name-is-earl_poster.jpg',
				'trailer' => 'https://youtu.be/LyAKsyDN_04'
			],
			[
				'title' => 'Spongebob Squarepants',
				'year' => '1999 - 2021',
				'rating' => 77,
				'teaser' => 'Námořnická a někdy nesmyslná dobrodružství SpongeBoba, nevyléčitelně optimistické, bezstarostné a mluvící mořské houby a jejích přátel, kteří žijí na dně oceánu.',
				'description' => 'SpongeBob SquarePants je americký animovaný seriál, který v roce 1998 vymyslel oceánograf Stephen Hillenburg. Seriál se od 1. května 1999 vysílá na stanici Nickelodeon a soustředí se na dobrodružství hlavní postavy jménem Spongebob a jeho kamarádů v podmořském městě Zátiší Bikin. Jedná se o pátý nejdéle vysílaný animovaný seriál v USA, který se vysílá v mnoha zemích a je přeložen do více než 55 jazyků. SpongeBob si svou oblíbeností získal také několik filmů. První z nich se jmenuje SpongeBob v kalhotách: Film a měl premiéru 19. listopadu 2004. Dalšího celovečerního filmu se dočkal v roce 2015, kdy měl v kinech v únoru premiéru film SpongeBob ve filmu: Houba na suchu, a nejnovější film bude mít premiéru v létě roku 2020 a je součástí oslav dvacetiletého výročí seriálu SpongeBob v kalhotách.',
				'imageBanner' => 'img/fixture/serial/spongebob-squarepants_banner.jpg',
				'imagePoster' => 'img/fixture/serial/spongebob-squarepants_poster.jpg',
				'trailer' => 'https://youtu.be/fqbEaLOvNds'
			],
			[
				'title' => 'Top Gear',
				'year' => '2002 - 2022',
				'rating' => 89,
				'teaser' => 'Z původně obyčejného auto-moto pořadu se díky obrovské divácké úspěšnosti stala komediálně laděná televizní série z produkce BBC, zabývající se přehlídkou, předváděním a úpravou různých automobilů, zpravidla těch novějších a velmi výkonných.',
				'description' => 'Top Gear je motoristický pořad převážně o automobilech. Začal se vysílat v roce 1977 jako běžný pořad pro motoristy. Časem, obzvláště od znovuzahájení v roce 2002, se formát pořadu vyvinul spíše na zábavný.[1] Do roku 2015 byl uváděn Richardem Hammondem, Jamesem Mayem a Jeremym Clarksonem. Důležitou postavou v pořadu je záhadný testovací jezdec v bílém overalu, známý jako „The Stig“ (v jednom díle ho hrál bývalý jezdec F1 Michael Schumacher).[1] Celosvětová sledovanost pořadu je odhadována na 350 milionů diváků. Premiéry jednotlivých epizod jsou vysílány na britských stanicích BBC – BBC Two a od 14. řady (2009/2010) také na BBC HD. Pořad je vysílán po celém světě, včetně Česka (Prima Cool[2]). Pořad byl vyzdvihován za styl a přednes, stejně tak i za značné množství kritiky v obsahu a komentářích moderátorů.[3] Zvláštní kategorií epizod pořadu jsou tzv. speciály. V roce 2007 se během natáčení Polárního speciálu expedice Top Gearu v čele s Jeremym Clarksonem a Jamesem Mayem dostala jako první automobilem na severní magnetický pól.[4] V Africkém speciálu James May „nalezl“ pramen Nilu.',
				'imageBanner' => 'img/fixture/serial/top-gear_banner.jpg',
				'imagePoster' => 'img/fixture/serial/top-gear_poster.jpg',
				'trailer' => 'https://youtu.be/y2ue2efpdKw'
			],
			[
				'title' => 'Tuningové války',
				'year' => '2011',
				'rating' => 71,
				'teaser' => 'Dva týmy mechaniků - Carr Warriors Allstars a Challengers soutěží o to, kdo v 72 hodinách lépe přestaví nepojízdné staré auto od motoru až po interiér.',
				'description' => 'SpongeBob SquarePants je americký animovaný seriál, který v roce 1998 vymyslel oceánograf Stephen Hillenburg. Seriál se od 1. května 1999 vysílá na stanici Nickelodeon a soustředí se na dobrodružství hlavní postavy jménem Spongebob a jeho kamarádů v podmořském městě Zátiší Bikin. Jedná se o pátý nejdéle vysílaný animovaný seriál v USA, který se vysílá v mnoha zemích a je přeložen do více než 55 jazyků. SpongeBob si svou oblíbeností získal také několik filmů. První z nich se jmenuje SpongeBob v kalhotách: Film a měl premiéru 19. listopadu 2004. Dalšího celovečerního filmu se dočkal v roce 2015, kdy měl v kinech v únoru premiéru film SpongeBob ve filmu: Houba na suchu, a nejnovější film bude mít premiéru v létě roku 2020 a je součástí oslav dvacetiletého výročí seriálu SpongeBob v kalhotách.',
				'imageBanner' => 'img/fixture/serial/car-warriors_banner.jpg',
				'imagePoster' => 'img/fixture/serial/car-warriors_poster.jpg',
				'trailer' => 'https://youtu.be/9ktQ0OZscS4'
			],
		];
		foreach ($serials as $serial) {
			$newSerial = new SerialEntity();
			$newSerial->setName($serial['title']);
			$newSerial->setSlug(Strings::webalize($serial['title']));
			$newSerial->setYear($serial['year']);
			$newSerial->setRating($serial['rating']);
			$newSerial->setTeaser($serial['teaser']);
			$newSerial->setDescription($serial['description']);
			$newSerial->setImageBanner($serial['imageBanner']);
			$newSerial->setImagePoster($serial['imagePoster']);
			$newSerial->setTrailer(NewContentFacade::getTrailerLink($serial['trailer']));
			$manager->persist($newSerial);
		}
		$manager->flush();
	}

}
