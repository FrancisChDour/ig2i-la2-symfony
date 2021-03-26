<?php

namespace App\DataFixtures;

use App\Entity\Article;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 0; $i < 10; $i++) {
            $article = new Article();
            $article->setTitle('Title 1');
            $article->setSubtitle('SubTitle 1');
            $article->setCreatedAt(new DateTime());
            $article->setAuthor('John Doe');
            $article->setBody('Lorem ipsum dolor sit amet');
            $article->setImage('https://picsum.photos/536/354');
            $manager->persist($article);
        }
        $manager->flush();
    }
}
