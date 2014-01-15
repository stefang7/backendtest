<?php

/**
 * This is the model class for table "cms_file".
 *
 * The followings are the available columns in table 'cms_file':
 * @property string $id
 * @property string $user_id
 * @property string $name
 * @property string $type
 * @property string $size
 * @property string $description
 * @property string $date_entered
 * @property string $date_updated
 *
 * The followings are the available model relations:
 * @property CmsUser $user
 * @property CmsPage[] $cmsPages
 */
class CmsFile extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cms_file';
	}

	// validate the type for the uploaded file
	public function validateFileType($attr, $params) {
		// Allow PDFs and Word docs:
		$allowed = array('application/pdf', 'application/msword');
		// Make sure this is an allowed type:
		if (!in_array($this->type, $allowed)) {
			$this->addError('type',
			'You can only upload PDF files or Word docs.');
		}
	} // End of validateFileType() method.

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			// name, type, size are required (sort of come from the user)
			array('name, type, size', 'required'),
			// description is optional; must be filtered and set to NULL when empty:
			array('description', 'filter', 'filter'=>'strip_tags'),
			array('description', 'default', 'value'=>NULL),
			// Maximum length on the name:
			array('name', 'length', 'max'=>80),
			// Type must be of an appropriate kind:
			array('type', 'validateFileType'),
			// Set the date_entered to NOW():
			array('date_entered', 'default', 'value'=>new CDbExpression('NOW()'), 'on'=>'insert'),
			// Set the date_updated to NOW():
			array('date_updated', 'default', 'value'=>new CDbExpression('NOW()'), 'on'=>'update'),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, name, type, size, description, date_entered, date_updated', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'CmsUser', 'user_id'),
			'cmsPages' => array(self::MANY_MANY, 'CmsPage', 'cms_page_has_file(file_id, page_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'Uploaded By',
			'name' => 'File Name',
			'type' => 'File Type',
			'size' => 'File Size',
			'description' => 'Description',
			'date_entered' => 'Date Entered',
			'date_updated' => 'Date Updated',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('size',$this->size,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('date_entered',$this->date_entered,true);
		$criteria->compare('date_updated',$this->date_updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return CmsFile the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
