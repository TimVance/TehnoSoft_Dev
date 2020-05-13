<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Профиль");

$APPLICATION->IncludeComponent(
	"bitrix:sale.personal.profile.detail", 
	"bootstrap_v4",
	array(
		"COMPATIBLE_LOCATION_MODE" => "N",
		"ID" => 1,
		"PATH_TO_DETAIL" => "",
		"PATH_TO_LIST" => "",
		"SET_TITLE" => "Y",
		"USE_AJAX_LOCATIONS" => "N",
		"COMPONENT_TEMPLATE" => "bootstrap_v4"
	),
	false
);

?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>