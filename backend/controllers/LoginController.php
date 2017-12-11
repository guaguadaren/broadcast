<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\db\query;
/**
 * Site controller
 */
class LoginController extends Controller
{
public $enableCsrfValidation = false;
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionLogin()
   {
   		$this->layout=false;
   		return $this->render('login');
   }

   public function actionLogin_do()
   {
   		$arr=Yii::$app->request->post();
	    $query = new Query();
	   	$res = $query->select('*')
                ->from('admin_user')
                ->where(['user' =>$arr['user'],'pwd'=>$arr['pwd']])
                ->one();
        if ($res)
            {
                $session=Yii::$app->session;
                $session->set('user_info',['u_id'=>$res['id'],'username'=>$res['user']]);
                return $this->redirect(['site/index']);die;
            }
            else
            {
                return $this->redirect(['login/login']);die;
            }
   }

   public function actionRegister()
   {
      $this->layout=false;
      return $this->render('register');
   }

   public function actionRegister_do()
   {
    $arr=Yii::$app->request->post();
    $res =Yii::$app->db->createCommand()->insert('admin_user', $arr)->execute();
    $id = Yii::$app->db->getLastInsertId();
     if ($res)
            {
                $session=Yii::$app->session;
                $session->set('user_info',['u_id'=>$id,'username'=>$arr['user']]);
                return $this->redirect(['site/index']);die;
            }
            else
            {
                return $this->redirect(['login/register']);die;
            }
   }

}
