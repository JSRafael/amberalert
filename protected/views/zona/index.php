<?php
$this->breadcrumbs=array(
	'Zonas',
);

$this->menu=array(
array('label'=>'Create Zona','url'=>array('create')),
array('label'=>'Manage Zona','url'=>array('admin')),
);
?>

<h1>Zonas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>