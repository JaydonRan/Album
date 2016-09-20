<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class AlbumModel extends RelationModel{
	protected $_link = array(
				
		'sone' => array(
				 'mapping_type'=>self::HAS_MANY,
				'class_name'=>'album',
				'mapping_order'=>'leaf'			 
		),
			
		'parent'=>array(
				'mapping_type'=>self::BELONGS_TO,
				'class_name'=>'album',
		),	
	);
}