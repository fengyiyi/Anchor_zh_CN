<?php

return array(

	'extend' => '扩展',

	'fields' => '自定义字段',
	'fields_desc' => '增加自定义字段',

	'variables' => '站点变量',
	'variables_desc' => '增加一个新的站点变量',

	'create_field' => '增加自定义字段',
	'editing_custom_field' => '编辑自定义字段',
	'nofields_desc' => '暂无自定义字段',

	'create_variable' => '增加站点变量',
	'editing_variable' => '编辑站点变量',
	'novars_desc' => '暂无站点变量',

	// form fields
	'type' => '内容模型',
	'type_explain' => '所要增加的自定义字段的内容模型',

	'field' => '输入类型',
	'field_explain' => 'Html 输入类型',

	'key' => '自定义标识',
	'key_explain' => '自定义字段唯一标识',
	'key_missing' => '请输入唯一标识',
	'key_exists' => '该自定义字段标识已经存在',

	'label' => '标签',
	'label_explain' => '自定义字段的标签',
	'label_missing' => '请输入一个标签',

	'attribute_type' => '允许文件类型',
	'attribute_type_explain' => '用逗号 "," 将后缀名隔开, 例如: cpp,h,mak',

	// images
	'attributes_size_width' => '图片最大宽度',
	'attributes_size_width_explain' => '图像会被调整大小,如果它们比最大尺寸',

	'attributes_size_height' => '图片最大高度',
	'attributes_size_height_explain' => '图像会被调整大小,如果它们比最大尺寸',

	// custom vars
	'name' => '变量名称',
	'name_explain' => '变量唯一的名称',
	'name_missing' => '请输入一个变量名称',
	'name_exists' => '该变量名称已经存在',

	'value' => '变量的值',
	'value_explain' => '你想要存储的数据(不多于 64 kb)',
	'value_code_snipet' => '在模板中显示变量，如下:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => '新变量已经被增加',
	'variable_updated' => '变量已经被更新',
	'variable_deleted' => '变量已经删除',

	'field_created' => '新字段已经被增加',
	'field_updated' => '字段已经被更新',
	'field_deleted' => '字段已经删除'

);