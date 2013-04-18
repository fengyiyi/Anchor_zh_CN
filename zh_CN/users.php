<?php

return array(

	'users' => '用户',

	'create_user' => '新增用户',
	'add_user' => '增加一个新用户',
	'editing_user' => '编辑用户',
	'remembered' => '我记得我的密码',
	'forgotten_password' => '忘记密码?',

	// roles
	'administrator' => '管理员',
	'administrator_explain' => '',

	'editor' => '编辑',
	'editor_explain' => '',

	'user' => '用户',
	'user_explain' => '',

	// form fields
	'real_name' => '显示昵称',
	'real_name_explain' => '',

	'bio' => '个人简介',
	'bio_explain' => '',

	'status' => '状态',
	'status_explain' => '',

	'role' => '用户组',
	'role_explain' => '',

	'username' => '用户名',
	'username_explain' => '',
	'username_missing' => '请输入用户名, 至少两个字符',

	'password' => '密码',
	'password_explain' => '',
	'password_too_short' => '密码不少于 %s 字符',

	'new_password' => '新密码',

	'email' => '电子邮箱地址',
	'email_explain' => '',
	'email_missing' => '请输入正确的邮箱地址',
	'email_not_found' => '找不到个人信息.',

	// messages
	'updated' => '用户信息已经被更新.',
	'created' => '用户信息已经被增加.',
	'deleted' => '用户信息已经删除.',
	'delete_error' => '无法删除自己的个人信息',
	'login_error' => '用户名或密码错误.',
	'logout_notice' => '您已经登出.',
	'recovery_sent' => '我们已经给你发送一封确认密码更改的电子邮件.',
	'recovery_expired' => '密码恢复令牌过期了, 请重试.',
	'password_reset' => '你的密码已设置. 走你的!',

	// password recovery email
	'recovery_subject' => '密码重置',
	'recovery_message' => '请点击以下链接，重新设置你的登录密码: ' .
		PHP_EOL . '%s',

);