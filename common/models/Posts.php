<?php

namespace common\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property integer $user_by
 * @property string $title
 * @property string $excerpt
 * @property string $body
 * @property integer $status
 * @property integer $comment_status
 * @property integer $comment_count
 * @property integer $views
 * @property string $publish_up
 * @property string $publish_down
 * @property integer $blog_categories
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_by', 'status', 'comment_status', 'comment_count', 'views', 'blog_categories'], 'integer'],
            [['title', 'excerpt', 'body'], 'string'],
            [['publish_up', 'publish_down'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'excerpt' => 'Excerpt',
            'body' => 'Body',
            'status' => 'Status',
            'comment_status' => 'Comment Status',
            'comment_count' => 'Comment Count',
            'views' => 'Views',
            'publish_up' => 'Publish Up',
            'publish_down' => 'Publish Down',
            'blog_categories' => 'Blog Categories',
        ];
    }
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
