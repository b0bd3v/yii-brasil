<?php

/**
 * This is the model class for table "publications".
 *
 * The followings are the available columns in table 'publications':
 * @property integer $id
 * @property string $publicationDate
 * @property integer $publicationCategoryId
 * @property integer $userId
 * @property integer $title
 * @property string $content
 * @property integer $allowComments
 */
class Publications extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'publications';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('publicationDate, publicationCategoryId, userId, title, content', 'required'),
			array('publicationCategoryId, userId, title, allowComments', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, publicationDate, publicationCategoryId, userId, title, content, allowComments', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'publicationDate' => 'Publication Date',
			'publicationCategoryId' => 'Publication Category',
			'userId' => 'User',
			'title' => 'Title',
			'content' => 'Content',
			'allowComments' => 'Allow Comments',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('publicationDate',$this->publicationDate,true);
		$criteria->compare('publicationCategoryId',$this->publicationCategoryId);
		$criteria->compare('userId',$this->userId);
		$criteria->compare('title',$this->title);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('allowComments',$this->allowComments);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Publications the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
