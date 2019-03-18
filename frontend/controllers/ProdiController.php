<?php

namespace frontend\controllers;

class ProdiController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$prodi1 = "Sistem Informasi";
    	$prodi2 = "Teknik Informatika";
    	$dosen1 = "Amalia Rahmah";
    	$dosen2 = "Rio Herdiansyah";
    	$dosen3 = 'Sirojul Munir';

        return $this->render('index',[
        	'si' => $prodi1,
        	'ti' => $prodi2,
        	'dosen1' => $dosen1,
        	'dosen2' => $dosen2,
        	'dosen3' => $dosen3
        ]);
    }

}
