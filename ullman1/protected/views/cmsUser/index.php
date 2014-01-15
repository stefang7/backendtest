<?php
/* @var $this CmsUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cms Users',
);

$this->menu=array(
	array('label'=>'Create CmsUser', 'url'=>array('create')),
	array('label'=>'Manage CmsUser', 'url'=>array('admin')),
);
?>

<h1>Cms Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
