<?php
// 1. specify namespace at the top (in basic application usually  app\controllers); 
namespace app\controllers;
// 2. specify 'use' path for used class; 
use Yii; 
use yii\web\Controller;
// 3. controller class must extend yii\web\Controller class; // This line is equivalent to // class NewsController extends yii\web\Controller 
class NewsController extends Controller 
{ 
    // 4. actions are handled from controller functions whose name  starts with 'action' and the first letter of each word is  uppercase;
    public function actionIndex()    
    {            
        echo "this is my first controller";    
    } 

    public function actionItemsList()
    {     
        $tab = Yii::$app->request->get('tab');   
        for($i = 0; $i<=10; $i++)
        {
            $newsList[] = $i * $tab; 
        }        
        return $this->render('itemsList', ['newsList' => $newsList]);
    }

    public function actionAdvTest()
    {        
        return $this->render("advTest");
    }
}