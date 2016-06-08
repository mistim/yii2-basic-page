<?php

namespace mistim\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property string $intPageID
 * @property string $varTitle
 * @property string $varTeaser
 * @property string $varText
 * @property integer $isActive
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['varTitle', 'varText'], 'required'],
            [['varText'], 'string'],
            [['isActive'], 'integer'],
            [['varTitle', 'varTeaser'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'intPageID' => Yii::t('admin', 'ID'),
            'varTitle'  => Yii::t('admin', 'Title'),
            'varTeaser' => Yii::t('admin', 'Teaser'),
            'varText'   => Yii::t('admin', 'Text'),
            'isActive'  => Yii::t('admin', 'Is active'),
        ];
    }
}
