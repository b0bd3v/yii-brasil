<?php

class DashboardModule extends CWebModule
{
	public function init()
	{
		
		$this->setImport(array(
			'dashboard.models.*',
			'dashboard.components.*',
		));

		$this->layoutPath = Yii::getPathOfAlias('application.modules.dashboard.views.layouts');

	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			$controller->layout = 'column2';
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}
