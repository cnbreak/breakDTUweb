<?php

/**
 * zh_CN
 *
 * US English message token translations
 *
 * @package UserFrosting
 * @link http://www.userfrosting.com/components/#i18n
 * @author break
 */

/*
{{name}} - Dymamic markers which are replaced at run time by the relevant index.
*/

$lang = array();

// Site Content
$lang = array_merge($lang, [
	"REGISTER_WELCOME" => "快速注册",
	"MENU_USERS" => "用户",
	"MENU_CONFIGURATION" => "配置",
	"MENU_SITE_SETTINGS" => "站点设置",
	"MENU_GROUPS" => "工作组",
	"HEADER_MESSAGE_ROOT" => "以root权限登录"
]);

// Installer
$lang = array_merge($lang,array(
	"INSTALLER_INCOMPLETE" => "您不能注册已经完成安装程序的root账户！",
	"MASTER_ACCOUNT_EXISTS" => "主账户已存在!",
	"MASTER_ACCOUNT_NOT_EXISTS" => "主账户已创建，你不能注册!",
	"CONFIG_TOKEN_MISMATCH" => "配置的令牌是错误的！"
));

// Account
$lang = array_merge($lang,array(
	"ACCOUNT_SPECIFY_USERNAME" => "请输入您的用户名.",
	"ACCOUNT_SPECIFY_DISPLAY_NAME" => "请输入您的显示名称.",
	"ACCOUNT_SPECIFY_PASSWORD" => "请输入您的密码.",
	"ACCOUNT_SPECIFY_EMAIL" => "请输入您的邮箱地址.",
	"ACCOUNT_SPECIFY_CAPTCHA" => "请输入验证码.",
	"ACCOUNT_SPECIFY_LOCALE" => "请指定一个有效的地址.",
	"ACCOUNT_INVALID_EMAIL" => "无效的邮箱地址",
	"ACCOUNT_INVALID_USERNAME" => "无效的用户名",
	"ACCOUNT_INVALID_USER_ID" => "请求的用户不存在.",
	"ACCOUNT_USER_OR_EMAIL_INVALID" => "无效的用户名或邮箱地址.",
	"ACCOUNT_USER_OR_PASS_INVALID" => "无效的用户名或密码.",
	"ACCOUNT_ALREADY_ACTIVE" => "您的账户已被激活.",
	"ACCOUNT_REGISTRATION_DISABLED" => "对不起，此用户已停用.",
    "ACCOUNT_REGISTRATION_BROKEN" => " 程序出现了问题. 请与管理员联系以寻求帮助.",
	"ACCOUNT_REGISTRATION_LOGOUT" => "登录时不能注册账户，请先退出登录.",
	"ACCOUNT_INACTIVE" => "账户是无效的.检查您的邮箱收件箱或垃圾箱里的账户激活邮件.",
	"ACCOUNT_DISABLED" => "账户已被禁用，请联系管理员.",
	"ACCOUNT_USER_CHAR_LIMIT" => "用户名必须是 {{min}} ～ {{max}} 位长度的字符.",
	"ACCOUNT_USER_INVALID_CHARACTERS" => "用户名只能包含字母和数字字符",
    "ACCOUNT_USER_NO_LEAD_WS" => "用户名不能包含空格",
    "ACCOUNT_USER_NO_TRAIL_WS" => "用户名不能包含空格",
	"ACCOUNT_DISPLAY_CHAR_LIMIT" => "显示名称必须是 {{min}} ～ {{max}} 位长度的字符.",
	"ACCOUNT_PASS_CHAR_LIMIT" => "密码必须是 {{min}} ～ {{max}} 位长度的字符.",
	"ACCOUNT_EMAIL_CHAR_LIMIT" => "邮箱必须是 {{min}} ～ {{max}} 位长度的字符.",
	"ACCOUNT_TITLE_CHAR_LIMIT" => "标题必须是 {{min}} ～ {{max}} 位长度的字符.",
	"ACCOUNT_PASS_MISMATCH" => "密码和确认密码不匹配",
	"ACCOUNT_DISPLAY_INVALID_CHARACTERS" => "显示名称只能包含字母和数字字符.",
	"ACCOUNT_USERNAME_IN_USE" => "用户名 '{{user_name}}' 已被使用.",
	"ACCOUNT_DISPLAYNAME_IN_USE" => "显示名称 '{{display_name}}' 已被使用.",
	"ACCOUNT_EMAIL_IN_USE" => "邮箱地址 '{{email}}' 已被使用",
	"ACCOUNT_LINK_ALREADY_SENT" => "激活邮件已发送至您的电子邮箱，请重试.",
	"ACCOUNT_NEW_ACTIVATION_SENT" => "激活链接已发送,请检查您的邮箱",
	"ACCOUNT_SPECIFY_NEW_PASSWORD" => "请输入您的新密码",
	"ACCOUNT_SPECIFY_CONFIRM_PASSWORD" => "请确认您的新密码",
	"ACCOUNT_NEW_PASSWORD_LENGTH" => "新密码必须是 {{min}} ～ {{max}} 位长度的字符",
	"ACCOUNT_PASSWORD_INVALID" => "当前密码与系统记录不一致",
	"ACCOUNT_DETAILS_UPDATED" => "'{{user_name}}'详细信息已更新",
	"ACCOUNT_CREATION_COMPLETE" => "'{{user_name}}'已创建.",
	"ACCOUNT_ACTIVATION_COMPLETE" => "你已成功激活账户,现在可登录.",
	"ACCOUNT_REGISTRATION_COMPLETE_TYPE1" => "你已成功注册,现在可登录.",
	"ACCOUNT_REGISTRATION_COMPLETE_TYPE2" => "你已成功注册.你将很快收到激活确认邮件.登录前必须通过邮件激活账户.",
	"ACCOUNT_PASSWORD_NOTHING_TO_UPDATE" => "密码相同,无法更新",
	"ACCOUNT_PASSWORD_CONFIRM_CURRENT" => "请确认当前密码",
	"ACCOUNT_SETTINGS_UPDATED" => "账户设置更新",
	"ACCOUNT_PASSWORD_UPDATED" => "账户密码更新",
	"ACCOUNT_EMAIL_UPDATED" => "账户邮箱更新",
	"ACCOUNT_TOKEN_NOT_FOUND" => "Token不存在 /账户早已激活",
	"ACCOUNT_DELETE_MASTER" => "你不能删除主账户!",
	"ACCOUNT_DISABLE_MASTER" => "You cannot disable the master account!",
	"ACCOUNT_DISABLE_SUCCESSFUL" => "Account for user '{{user_name}}' has been successfully disabled.",
	"ACCOUNT_ENABLE_SUCCESSFUL" => "Account for user '{{user_name}}' has been successfully enabled.",
	"ACCOUNT_DELETION_SUCCESSFUL" => "User '{{user_name}}' has been successfully deleted.",
	"ACCOUNT_MANUALLY_ACTIVATED" => "{{user_name}}'s account has been manually activated",
	"ACCOUNT_DISPLAYNAME_UPDATED" => "{{user_name}}'s display name changed to '{{display_name}}'",
	"ACCOUNT_TITLE_UPDATED" => "{{user_name}}'s title changed to '{{title}}'",
	"ACCOUNT_GROUP_ADDED" => "Added user to group '{{name}}'.",
	"ACCOUNT_GROUP_REMOVED" => "Removed user from group '{{name}}'.",
	"ACCOUNT_GROUP_NOT_MEMBER" => "User is not a member of group '{{name}}'.",
	"ACCOUNT_GROUP_ALREADY_MEMBER" => "User is already a member of group '{{name}}'.",
	"ACCOUNT_PRIMARY_GROUP_SET" => "Successfully set primary group for '{{user_name}}'.",
	"ACCOUNT_WELCOME" => "Welcome back, {{display_name}}"
));

// Generic validation
$lang = array_merge($lang, array(
	"VALIDATE_REQUIRED" => "The field '{{self}}' must be specified.",
	"VALIDATE_BOOLEAN" => "The value for '{{self}}' must be either '0' or '1'.",
	"VALIDATE_INTEGER" => "The value for '{{self}}' must be an integer.",
	"VALIDATE_ARRAY" => "The values for '{{self}}' must be in an array.",
    "VALIDATE_NO_LEAD_WS" => "The value for '{{self}}' cannot begin with spaces, tabs, or other whitespace",
    "VALIDATE_NO_TRAIL_WS" => "The value for '{{self}}' cannot end with spaces, tabs, or other whitespace"
));

// Configuration
$lang = array_merge($lang,array(
	"CONFIG_PLUGIN_INVALID" => "You are trying to update settings for plugin '{{plugin}}', but there is no plugin by that name.",
	"CONFIG_SETTING_INVALID" => "You are trying to update the setting '{{name}}' for plugin '{{plugin}}', but it does not exist.",
	"CONFIG_NAME_CHAR_LIMIT" => "Site name must be between {{min}} and {{max}} characters in length",
	"CONFIG_URL_CHAR_LIMIT" => "Site url must be between {{min}} and {{max}} characters in length",
	"CONFIG_EMAIL_CHAR_LIMIT" => "Site email must be between {{min}} and {{max}} characters in length",
	"CONFIG_TITLE_CHAR_LIMIT" => "New user title must be between {{min}} and {{max}} characters in length",
	"CONFIG_ACTIVATION_TRUE_FALSE" => "Email activation must be either `true` or `false`",
	"CONFIG_REGISTRATION_TRUE_FALSE" => "User registration must be either `true` or `false`",
	"CONFIG_ACTIVATION_RESEND_RANGE" => "Activation Threshold must be between {{min}} and {{max}} hours",
	"CONFIG_EMAIL_INVALID" => "The email you have entered is not valid",
	"CONFIG_UPDATE_SUCCESSFUL" => "Your site's configuration has been updated. You may need to load a new page for all the settings to take effect",
	"MINIFICATION_SUCCESS" => "Successfully minified and concatenated CSS and JS for all page groups."
));

// Forgot Password
$lang = array_merge($lang,array(
	"FORGOTPASS_INVALID_TOKEN" => "Your secret token is not valid",
	"FORGOTPASS_OLD_TOKEN" => "Token past expiration time",
	"FORGOTPASS_COULD_NOT_UPDATE" => "Couldn't update password",
	"FORGOTPASS_REQUEST_CANNED" => "Lost password request cancelled",
	"FORGOTPASS_REQUEST_EXISTS" => "There is already an outstanding lost password request on this account",
	"FORGOTPASS_REQUEST_SENT" => "A password reset link has been emailed to the address on file for user '{{user_name}}'",     
	"FORGOTPASS_REQUEST_SUCCESS" => "We have emailed you instructions on how to regain access to your account"   
));

// Mail
$lang = array_merge($lang,array(
	"MAIL_ERROR" => "Fatal error attempting mail, contact your server administrator",
));

// Miscellaneous
$lang = array_merge($lang,array(
	"PASSWORD_HASH_FAILED" => "Password hashing failed. Please contact a site administrator.",
	"NO_DATA" => "No data/bad data sent",
	"CAPTCHA_FAIL" => "Failed security question",
	"CONFIRM" => "Confirm",
	"DENY" => "Deny",
	"SUCCESS" => "Success",
	"ERROR" => "Error",
	"SERVER_ERROR" => "Oops, looks like our server might have goofed. If you're an admin, please check the PHP error logs.",
	"NOTHING_TO_UPDATE" => "Nothing to update",
	"SQL_ERROR" => "Fatal SQL error",
	"FEATURE_DISABLED" => "This feature is currently disabled",
	"ACCESS_DENIED" => "Hmm, looks like you don't have permission to do that.",
	"LOGIN_REQUIRED" => "Sorry, you must be logged in to access this resource.",
	"LOGIN_ALREADY_COMPLETE" => "You are already logged in!"
));

// Permissions
$lang = array_merge($lang,array(
	"GROUP_INVALID_ID" => "The requested group id does not exist",
	"GROUP_NAME_CHAR_LIMIT" => "Group names must be between {{min}} and {{max}} characters in length",
    "AUTH_HOOK_CHAR_LIMIT" => "Authorization hook names must be between {{min}} and {{max}} characters in length",
	"GROUP_NAME_IN_USE" => "Group name '{{name}}' is already in use",
	"GROUP_DELETION_SUCCESSFUL" => "Successfully deleted group '{{name}}'",
	"GROUP_CREATION_SUCCESSFUL" => "Successfully created group '{{name}}'",
	"GROUP_UPDATE" => "Details for group '{{name}}' successfully updated.",
	"CANNOT_DELETE_GROUP" => "The group '{{name}}' cannot be deleted",
	"GROUP_CANNOT_DELETE_DEFAULT_PRIMARY" => "The group '{{name}}' cannot be deleted because it is set as the default primary group for new users. Please first select a different default primary group.",
    "GROUP_AUTH_EXISTS" => "The group '{{name}}' already has a rule defined for hook '{{hook}}'.",
    "GROUP_AUTH_CREATION_SUCCESSFUL" => "A rule for '{{hook}}' has been successfully created for group '{{name}}'.",
    "GROUP_AUTH_UPDATE_SUCCESSFUL" => "The rule granting access to group '{{name}}' for '{{hook}}' has been successfully updated.",
    "GROUP_AUTH_DELETION_SUCCESSFUL" => "The rule granting access to group '{{name}}' for '{{hook}}' has been successfully deleted.",
    "GROUP_DEFAULT_PRIMARY_NOT_DEFINED" => "You cannot create a new user because there is no default primary group defined.  Please check your group settings."
));

return $lang;
