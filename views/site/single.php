
<? use yii\helpers\Url;
use yii\widgets\ActiveForm; ?><!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        <a href=<?= Url::to(['site/view', 'category'=>$article->category->title, 'id'=>$article->id, 'title'=>$article->title])?>><img src=<?= $article->getImage();?> alt=""></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6><a href="<?= Url::toRoute(['site/category','id'=>$article->category->id, 'title'=>$article->category->title])?>"><?= $article->category->title; ?></a></h6>

                            <h1 class="entry-title"><a href=<?= Url::to(['site/view', 'category'=>$article->category->title, 'id'=>$article->id, 'title'=>$article->title])?>><?= $article->title ?></a></h1>


                        </header>
                        <div class="entry-content">
                            <p><?= $article->content; ?>
                            </p>

                        </div>
                        <div class="decoration">
                            <?php foreach($tags as $tag):?>
                                <a href="<?= Url::toRoute(['site/tag', 'id'=>$tag->id, 'title'=>$tag->title])?>" class="btn btn-default"><?= $tag->title ?></a>
                            <? endforeach;?>
                        </div>



                        <div class="social-share">
							<span
                                class="social-share-title pull-left text-capitalize">By <?= $article->author->name; ?> On <?= $article->getDate();?></span>
                            <ul class="text-center pull-right">
                                <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </article>

               <?= $this->render('/partials/comment',[
                   'article'=>$article,
                   'comments'=>$comments,
                   'commentForm'=>$commentForm
               ]) ?>
            </div>
            <?= $this->render('/partials/sidebar',[
                'popular'=>$popular,
                'recent'=>$recent,
                'categories'=>$categories,
                'tags'=>$tags,
            ])?>
        </div>
    </div>
</div>
<!-- end main content-->