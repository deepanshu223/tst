<?php

class HomeController extends Controller {
   
   public function init() {
      Yii::app()->theme = 'home';
      $this->layout = "main";
      parent::init();
   }
   // home page posts action
   public function actionIndex() {
      $this->render('index', array());
   }
}