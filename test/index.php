<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?$APPLICATION->IncludeComponent(
	"altasib:feedback.form", 
	".default", 
	array(
		"ACTIVE_ELEMENT" => "Y",
		"ADD_EVENT_FILES" => "N",
		"ADD_HREF_LINK" => "Y",
		"ADD_LEAD" => "N",
		"ALX_LINK_POPUP" => "N",
		"BBC_MAIL" => "",
		"CAPTCHA_TYPE" => "default",
		"CATEGORY_SELECT_NAME" => "Выберите категорию",
		"CHANGE_CAPTCHA" => "N",
		"CHECKBOX_TYPE" => "CHECKBOX",
		"CHECK_ERROR" => "Y",
		"COLOR_OTHER" => "#009688",
		"COLOR_SCHEME" => "BRIGHT",
		"COLOR_THEME" => "",
		"EVENT_TYPE" => "ALX_FEEDBACK_FORM",
		"FB_TEXT_NAME" => "",
		"FB_TEXT_SOURCE" => "PREVIEW_TEXT",
		"FORM_ID" => "1",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "altasib_feedback",
		"INPUT_APPEARENCE" => array(
			0 => "DEFAULT",
		),
		"JQUERY_EN" => "N",
		"LINK_SEND_MORE_TEXT" => "Отправить ещё одно сообщение",
		"LOCAL_REDIRECT_ENABLE" => "N",
		"MASKED_INPUT_PHONE" => array(
			0 => "PHONE",
		),
		"MESSAGE_OK" => "Ваше сообщение было успешно отправлено",
		"NAME_ELEMENT" => "PHONE",
		"NOT_CAPTCHA_AUTH" => "Y",
		"PROPERTY_FIELDS" => array(
			0 => "PHONE",
			1 => "FIO",
			2 => "EMAIL",
		),
		"PROPERTY_FIELDS_REQUIRED" => array(
			0 => "PHONE",
			1 => "FIO",
			2 => "EMAIL",
		),
		"PROPS_AUTOCOMPLETE_EMAIL" => array(
			0 => "EMAIL",
		),
		"PROPS_AUTOCOMPLETE_NAME" => array(
			0 => "FIO",
		),
		"PROPS_AUTOCOMPLETE_PERSONAL_PHONE" => array(
			0 => "PHONE",
		),
		"PROPS_AUTOCOMPLETE_VETO" => "N",
		"REQUIRED_SECTION" => "N",
		"SECTION_FIELDS_ENABLE" => "N",
		"SECTION_MAIL_ALL" => "timvance@ya.ru",
		"SEND_IMMEDIATE" => "N",
		"SEND_MAIL" => "N",
		"SHOW_LINK_TO_SEND_MORE" => "N",
		"SHOW_MESSAGE_LINK" => "N",
		"SPEC_CHAR" => "N",
		"USERMAIL_FROM" => "N",
		"USER_CONSENT" => "Y",
		"USER_CONSENT_ID" => "1",
		"USER_CONSENT_INPUT_LABEL" => "",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_CAPTCHA" => "N",
		"WIDTH_FORM" => "50%",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>