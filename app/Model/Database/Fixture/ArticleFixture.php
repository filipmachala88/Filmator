<?php declare(strict_types = 1);

namespace App\Model\Database\Fixture;

use App\Model\Database\Entity\ArticleEntity;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Nette\Utils\Strings;


final class ArticleFixture implements FixtureInterface
{

	public function load(ObjectManager $manager)
	{
		$articles = [
			[
				'title' => 'Nový Avatar Brzy v kinách',
				'description' => 'Avatara čeká další díl. Čekat ho můžeme už příští měsíc a fanoušci už šílí.',
			],
			[
				'title' => 'Transformers čeká další díl',
				'description' => 'Transformers nedávno vydali pokračování své filmologie, avšak už oznamují další.',
			],
			[
				'title' => 'Johny Depp pod palbou kritiků',
				'description' => 'Johnny Depp i přes to že za ním fanoušci stojí, tak možná nebude hrát v pokračování Pirátů.',
			],
			[
				'title' => 'Marvel serial oznamuje novou sérii',
				'description' => 'Marvel je zpět. Po roce je Marvel series zpět a jsme zvědaví co je čeká..',
			],
			[
				'title' => 'Nové ocenění film 2020',
				'description' => 'V Los Angeles se bude konat nové prestižní ocenění během Gala večeru.',
			]
		];
		foreach ($articles as $article) {
			$newArticle = new ArticleEntity();
			$newArticle->setName($article['title']);
			$newArticle->setSlug(Strings::webalize($article['title']));
			$newArticle->setDescription($article['description']);
			$manager->persist($newArticle);
		}
		$manager->flush();
	}

}
