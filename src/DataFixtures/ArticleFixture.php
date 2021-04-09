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
            $article->setTitle('Neque porro quisquam est qui dolorem');
            $article->setSubtitle('Aenean imperdiet arcu dignissim eros tincidunt vulputate');
            $article->setCreatedAt(new DateTime());
            $article->setAuthor('John Doe');
            $article->setBody('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum mattis dolor ut blandit. Vestibulum non metus at quam consequat consectetur. Sed in sem sed odio porta tempor ac ut mauris. Fusce venenatis, metus eget fringilla placerat, quam est dictum felis, ac efficitur orci elit at dui. Aenean sodales vitae ligula nec rhoncus. Proin et dolor neque. Cras et consectetur nulla, ac luctus massa.

Aenean imperdiet arcu dignissim eros tincidunt vulputate. Praesent accumsan pulvinar consequat. Praesent at eros sodales, ornare est dapibus, lobortis neque. Mauris quis ante vitae augue tincidunt vehicula. Fusce sed mollis diam. Etiam ac est sit amet nulla pharetra commodo. Suspendisse vitae urna turpis. Duis cursus lorem nec nunc auctor cursus. Phasellus pretium dolor ipsum, vel dictum mauris rhoncus eu. Nunc tempor elit ac arcu commodo, ut aliquam eros posuere. In faucibus, enim tincidunt molestie pharetra, elit tortor vulputate urna, nec egestas mauris eros id dui. In iaculis cursus velit, quis varius lorem consequat at. Donec dignissim tellus diam, non pretium nisl sagittis vel. Morbi efficitur ante sapien, eu semper purus efficitur eu. Nam sodales, turpis vitae eleifend facilisis, orci risus feugiat nulla, eget bibendum odio massa lobortis urna. Pellentesque faucibus, nisl id ultrices auctor, turpis metus porttitor ligula, non aliquam eros nisi ac turpis.

Phasellus semper ex sem, a mattis magna fermentum sed. Duis placerat nulla enim, eget iaculis ex tristique nec. Vestibulum dictum eu ante vitae auctor. Ut laoreet neque non ex porttitor, dapibus tempus diam accumsan. Suspendisse semper suscipit diam. Maecenas eget ex ut ante placerat sollicitudin ut laoreet nisi. Maecenas neque dolor, posuere ac porttitor placerat, pretium nec massa. Donec semper euismod sapien. Duis id aliquet nisl. Nam maximus quam eu massa consectetur, sed fringilla eros egestas. Aliquam erat volutpat.

Nam faucibus magna vitae quam ornare convallis. Aliquam posuere, dui eget dignissim tincidunt, elit nulla vulputate tellus, vitae rhoncus libero arcu ut nisi. Mauris convallis, lorem a ultricies sagittis, diam neque tincidunt nisi, molestie gravida sem lacus luctus felis. Mauris eleifend, justo eu luctus pharetra, lacus eros tempor nibh, eget commodo nunc ante ac elit. Nunc neque nunc, sagittis vel finibus sed, varius vitae ex. Maecenas eu porta ligula. Aliquam eu nisl sed dolor semper eleifend quis at neque. Sed volutpat tincidunt sodales. Suspendisse interdum iaculis purus, vel elementum velit dapibus finibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus faucibus nunc ut ligula pellentesque, sed pulvinar elit sollicitudin.');
            $article->setImage('https://picsum.photos/1920/1265');
            $manager->persist($article);
        }
        $manager->flush();
    }
}
