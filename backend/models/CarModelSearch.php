<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CarModel;

/**
 * CarModelSearch represents the model behind the search form about `common\models\CarModel`.
 */
class CarModelSearch extends CarModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'logo_id', 'body_type_id'], 'integer'],
            [['name', 'slug', 'photos', 'description'], 'safe'],
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
        $query = CarModel::find();

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
            'id' => $this->id,
            'logo_id' => $this->logo_id,
            'body_type_id' => $this->body_type_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'photos', $this->photos])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
