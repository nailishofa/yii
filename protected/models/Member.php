<?php

/**
 * This is the model class for table "member".
 *
 * The followings are the available columns in table 'member':
 * @property integer $idmember
 * @property string $nama
 * @property string $alamat
 * @property string $tanggallahir
 * @property string $email
 * @property integer $notelp
 * @property string $datecreated
 * @property integer $admin_idadmin
 *
 * The followings are the available model relations:
 * @property Admin $adminIdadmin
 */
class Member extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, alamat, tanggallahir, email, notelp, datecreated, admin_idadmin', 'required'),
			array('notelp, admin_idadmin', 'numerical', 'integerOnly'=>true),
			array('nama', 'length', 'max'=>100),
			array('alamat', 'length', 'max'=>255),
			array('email', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idmember, nama, alamat, tanggallahir, email, notelp, datecreated, admin_idadmin', 'safe', 'on'=>'search'),
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
			'adminIdadmin' => array(self::BELONGS_TO, 'Admin', 'admin_idadmin'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idmember' => 'Id member',
			'nama' => 'Nama',
			'alamat' => 'Alamat',
			'tanggallahir' => 'Tanggal lahir',
			'email' => 'Email',
			'notelp' => 'No telp',
			'datecreated' => 'Date create',
			'admin_idadmin' => 'Oleh admin',
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

		$criteria->compare('idmember',$this->idmember);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('tanggallahir',$this->tanggallahir,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('notelp',$this->notelp);
		$criteria->compare('datecreated',$this->datecreated,true);
		$criteria->compare('admin_idadmin',$this->admin_idadmin);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Member the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
