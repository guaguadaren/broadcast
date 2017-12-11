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
class SiteController extends Controller
{
public $enableCsrfValidation = false;
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
    	$session=Yii::$app->session;
        $user=$session->get('user_info');
        return $this->render('index',['user'=>$user['username']]);
    }

    public function actionZb_list()
    {
        $query = new Query();
        $list = $query->select('*')
                ->from('zb_list')
                ->all();
        return $this->render('zb_list',['list'=>$list]);
    }

    public function actionZb_add()
    {
        $query = new Query();
        $user = $query->select('*')
                ->from('admin_user')
                ->all();
        return $this->render('zb_add',['user'=>$user]);
    }
    public function actionZb_adddo()
    {
        //echo 123;die;
        $arr=Yii::$app->request->post();
        $res =Yii::$app->db->createCommand()->insert('zb_list', $arr)->execute();
        return $this->redirect(['site/zb_list']);die;
    }

     public function actionLgoin_out()
   {
    unset(Yii::app()->session['user_info']);
    return $this->redirect(['login/login']);die;
   }

   public function actionZb_type()
   {
        $query = new Query();
        $list = $query->select('*')
                ->from('zb_type')
                ->all();
        //print_r($list);die;
        $str=$this->digui($list,0);
        return $this->render('zb_type',['data'=>$str]);
   }

   public function actionZb_typeadd()
   {
    $query = new Query();
        $type = $query->select('*')
                ->where(['parent_id' =>0])
                ->from('zb_type')
                ->all();
    return $this->render('zb_typeadd',['type'=>$type]);
   }

   public function actionType_add()
   {
        $arr=Yii::$app->request->post();
        if (!isset($arr['parent_id']))
        {
            $arr['parent_id']=0;
        }
        $res =Yii::$app->db->createCommand()->insert('zb_type', $arr)->execute();
        if ($res)
        {
            return $this->redirect(['site/zb_type']);die;
        }
   }

   public function digui($data,$p_id)
   {    $str="";
            foreach ($data as $k => $v)
        {
           if ($v['parent_id']==$p_id)
           {

                if ($v['parent_id']==0)
                {
                    $str.='</td><tr ><td class="parent"><label><input type="checkbox"  value="'.$v['game_id'].'" name="game_id[]" />&nbsp'.$v['game_name'].'</label>&nbsp&nbsp&nbsp</td><td class="td">';
                    $strson=$this->digui($data,$v['game_id']);
                }
                else
                {
                    $str.='<span><label><input class="children" type="checkbox" value="'.$v['game_id'].'" name="game_id[]" />&nbsp'.$v['game_name'].'</label>&nbsp&nbsp&nbsp</span>';
                    $strson=$this->digui($data,$v['game_id']);
                }
              $str.=$strson;
           }
        }
        if ($p_id==0)
        {
            $str=$str.'</tr>';
        }
        return $str;
   }

}
