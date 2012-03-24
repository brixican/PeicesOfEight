<?php

/**
 * This is the model base class for the table "p8_size_product".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "SizeProduct".
 *
 * Columns in table "p8_size_product" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $size_id
 * @property string $product_id
 *
 */
abstract class BaseSizeProduct extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'p8_size_product';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'SizeProduct|SizeProducts', $n);
	}

	public static function representingColumn() {
		return array(
			'size_id',
			'product_id',
		);
	}

	public function rules() {
		return array(
			array('size_id, product_id', 'required'),
			array('size_id, product_id', 'length', 'max'=>10),
			array('size_id, product_id', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'size_id' => null,
			'product_id' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('size_id', $this->size_id);
		$criteria->compare('product_id', $this->product_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}