<?php

/**
 * This is the model class for table "cms_page".
 *
 * The followings are the available columns in table 'cms_page':
 * @property string $id
 * @property string $user_id
 * @property integer $live
 * @property string $title
 * @property string $content
 * @property string $date_updated
 * @property string $date_published
 *
 * The followings are the available model relations:
 * @property CmsComment[] $cmsComments
 * @property CmsUser $user
 * @property CmsFile[] $cmsFiles
 */
class CmsPage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cms_page';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// Only the title is required from the user
			array('title', 'required'),
			// User must exist in related table
			array('user_id', 'exist'),
			// Live needs to be Boolean; default 0
			array('live', 'boolean'), 
			array('live', 'default', 'value'=>0),
			// Title has a max length and strip tags
			array('title', 'length', 'max'=>100), 
			array('title', 'filter', 'filter'=>'strip_tags'),
			// Filter to content to allow for NULL values
			array('content', 'defalut', 'value'=>NULL),
			// Set the date_entered to NOW() every time
			array('date_entered', 'defalut', 'value'=>new CDbExpression('NOW()')),
			// date_published must be in a format that MYSQL likes
			array('date_published', 'date', 'format'=>'YYYY-MM-DD'),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, live, title, content, date_updated, date_published', 'safe', 'on'=>'search'),
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
			'cmsComments' => array(self::HAS_MANY, 'CmsComment', 'page_id'),
			'user' => array(self::BELONGS_TO, 'CmsUser', 'user_id'),
			'cmsFiles' => array(self::MANY_MANY, 'CmsFile', 'cms_page_has_file(page_id, file_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'live' => 'Live',
			'title' => 'Title',
			'content' => 'Content',
			'date_updated' => 'Date Updated',
			'date_published' => 'Date Published',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('live',$this->live);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('date_updated',$this->date_updated,true);
		$criteria->compare('date_published',$this->date_published,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CmsPage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
