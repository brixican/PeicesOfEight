<?php

Yii::import('application.models._base.BaseNewsletter');

class Newsletter extends BaseNewsletter
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}