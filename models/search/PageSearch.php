<?php

namespace mistim\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use mistim\models\Page;

/**
 * PageSearch represents the model behind the search form about `mistim\models\Page`.
 */
class PageSearch extends Page
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['intPageID', 'isActive'], 'integer'],
            [['varTitle', 'varTeaser', 'varText'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Page::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'intPageID' => $this->intPageID,
            'isActive' => $this->isActive,
        ]);

        $query->andFilterWhere(['like', 'varTitle', $this->varTitle])
            ->andFilterWhere(['like', 'varTeaser', $this->varTeaser])
            ->andFilterWhere(['like', 'varText', $this->varText]);

        return $dataProvider;
    }
}
