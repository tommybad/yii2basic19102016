<?php

namespace app\controllers;

class First1Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $aa='ข้อมูลต่างๆ';
        
    $report = [
        ['fname'=>'ธวัชชัย','lname'=>'สุธาชัย','email'=>'tommybad@gmail.com'],
        ['fname'=>'ณัชชา','lname'=>'สุธาชัย','email'=>'natcha@gmail.com'],
        ['fname'=>'รณพีร์','lname'=>'สุธาชัย','email'=>'ronnapee@gmail.com'],
        ['fname'=>'การ์ตูน','lname'=>'สุธาชัย','email'=>'cartoon@gmail.com']        
    ];
  
        
        return $this->render('index',['a'=>$aa,'report1'=>$report]);
    }

}
