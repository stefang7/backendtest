<?php
/* @var $this CmsFileController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cms Files',
);

$this->menu=array(
	array('label'=>'Create CmsFile', 'url'=>array('create')),
	array('label'=>'Manage CmsFile', 'url'=>array('admin')),
);
?>

<h1>Cms Files</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
