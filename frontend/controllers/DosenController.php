<?php
namespace frontend\controllers;
use frontend\models\DataDosen;

class DosenController extends \yii\web\Controller
{
    public function actionIndex(){
        return $this->render('index');

    }
    public function actionData(){
        $dsn1 = new DataDosen("001",
                                    "Amalia Rahmah");
        $dsn1->idprodi=1;

        return $this->render('data',
            [
                'dsn1' =>$dsn1,
            ]);
    }
}