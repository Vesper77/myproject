<?php 
namespace frontend\controllers;

use Yii;
use common\models\Brand;
use common\models\CarModel;
use frontend\models\PurchaseApplication;
use yii\web\Controller;
use yii\filters\VerbFilter;

class CatalogController extends Controller
{
  public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'message' => ['post'],
                ],
            ],
        ];
    }	

	public function actionSaveBrand()
	{
		$brand = new Brand();
		$brand = Brand::find()->all();
		 return $this->render('brand-view', [
                'brand' => $brand,
            ]);
	}
	public function actionSaveModel()
	{
		$model = new CarModel();
		$model = CarModel::find()->where(['logo_id' => $_GET['logo_id']])->all();
		return $this->render('model-view',[
			'model' => $model,
			]);
	}
	public function actionViewCar()
	{
		$model = new CarModel();
		$contact = new PurchaseApplication;
		$model = CarModel::find()->where(['id' => $_GET['id']])->one();
		return $this->render('car-view',[
			'model' => $model,
			'contact' => $contact,
			]);
	}
	public function actionMessage()
	{
		$post = Yii::$app->request->post('PurchaseApplication');
		// $phone = Yii::$app->request->post('phone');
		// $model_id = Yii::$app->request->post('model_id');
		// $brand_id = Yii::$app->request->post('brand_id');
		// $name = $_POST['PurchaseApplication']['name'];
		// $phone = $_POST['PurchaseApplication']['phone'];
		$name = $post['name'];
		$phone = $post['phone'];
		$model_id = $post['model_id'];
		$brand_id = $post['brand_id'];

		if (empty($name) || empty($phone)) {
			// var_dump($name);
			// echo $phone;
			// echo "<pre>";
			// var_dump($_POST);
			return 'Error';
		}

		$model = new PurchaseApplication();
		$model->name = $name;
		$model->phone = $phone;
		$model->model_id = $model_id;
		$model->brand_id = $brand_id;
		$model->save();

		$message = "Your purchase has been done.Thank you!";
		return $this->render('message',[
			'message' => $message,
			'name' => $name,
			'phone' => $phone,
			'model_id' => $model_id,
			'brand_id' => $brand_id,

			]);
	}
}