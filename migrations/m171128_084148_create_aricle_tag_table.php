<?php

use yii\db\Migration;

/**
 * Handles the creation of table `aricle_tag`.
 */
class m171128_084148_create_aricle_tag_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('article_tag', [

            'id' => $this->primaryKey(),

            'article_id'=>$this->integer(),

            'tag_id'=>$this->integer()

        ]);



        // creates index for column `user_id`

        $this->createIndex(

            'tag_article_article_id',

            'article_tag',

            'article_id'

        );





        // add foreign key for table `user`

        $this->addForeignKey(

            'tag_article_article_id',

            'article_tag',

            'article_id',

            'article',

            'id',

            'CASCADE'

        );



        // creates index for column `user_id`

        $this->createIndex(

            'idx_tag_id',

            'article_tag',

            'tag_id'

        );





        // add foreign key for table `user`

        $this->addForeignKey(

            'fk-tag_id',

            'article_tag',

            'tag_id',

            'tag',

            'id',

            'CASCADE'

        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('aricle_tag');
    }
}
