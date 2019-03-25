<?php
namespace frontend\controllers;
use frontend\models\NilaiSiswa;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$nama1 = "Ayu Widya";
        $nama2 = "Tiara Putri";
        $nama3 = "Edfandika";
        $prodi1 = "Sistem Informasi";
    	$prodi2 = "Teknik Informatika";
    	$smt1 = "Semester 1";
    	$smt2 = "Semester 2";
    	$smt3 = 'Semester 4';

        return $this->render('index',[
        	'si' => $prodi1,
        	'ti' => $prodi2,
        	'nama1' => $nama1,
        	'nama2' => $nama2,
        	'nama3' => $nama3,
            'smt1' => $smt1,
            'smt2' => $smt2,
            'smt3' => $smt3
        ]);
    }

    public function actionNilai(){
        $mhs1 = new NilaiSiswa("0110117041",
                                    "Farrras Syafira");
        $mhs1->nilai=90;

        return $this->render('nilai',
            [
                'mhs1' =>$mhs1,
            ]);
    }

}