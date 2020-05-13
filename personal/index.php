<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Персональный");

$APPLICATION->IncludeComponent("bitrix:sale.personal.section", "personal", Array(
	"ACCOUNT_PAYMENT_ELIMINATED_PAY_SYSTEMS" => array(
			0 => "0",
		),
		"ACCOUNT_PAYMENT_SELL_CURRENCY" => "RUB",
		"ACCOUNT_PAYMENT_SELL_SHOW_FIXED_VALUES" => "Y",
		"ACCOUNT_PAYMENT_SELL_TOTAL" => array(
			0 => "100",
			1 => "200",
			2 => "500",
			3 => "1000",
			4 => "5000",
			5 => "",
		),
		"ACCOUNT_PAYMENT_SELL_USER_INPUT" => "Y",	// Разрешить пользователю вводить сумму
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ALLOW_INNER" => "N",	// Разрешить оплату с внутреннего счета
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_RIGHTS_PRIVATE" => "N",	// Проверять права доступа
		"COMPATIBLE_LOCATION_MODE_PROFILE" => "N",	// Получить список местоположений для устаревших версий шаблона
		"CUSTOM_PAGES" => "",	// Настройки дополнительных страниц раздела
		"CUSTOM_SELECT_PROPS" => array(	// Дополнительные свойства инфоблока
			0 => "",
		),
		"MAIN_CHAIN_NAME" => "Мой кабинет",	// Название раздела в цепочке навигации
		"NAV_TEMPLATE" => "",	// Имя шаблона для постраничной навигации
		"ONLY_INNER_FULL" => "N",	// Разрешить оплату с внутреннего счета только в полном объеме
		"ORDERS_PER_PAGE" => "20",	// Количество заказов на одной странице
		"ORDER_DEFAULT_SORT" => "STATUS",	// Сортировка заказов
		"ORDER_DISALLOW_CANCEL" => "N",	// Запретить отмену заказа
		"ORDER_HIDE_USER_INFO" => array(	// Не показывать в информации о пользователе
			0 => "0",
		),
		"ORDER_HISTORIC_STATUSES" => array(	// Перенести в историю заказы в статусах
			0 => "F",
		),
		"ORDER_REFRESH_PRICES" => "N",	// Пересчитывать заказ после смены платежной системы
		"ORDER_RESTRICT_CHANGE_PAYSYSTEM" => array(	// Запретить смену платежной системы у заказов в статусах
			0 => "0",
		),
		"PATH_TO_BASKET" => "/personal/cart/",	// Путь к корзине
		"PATH_TO_CATALOG" => "/catalog/",	// Путь к каталогу
		"PATH_TO_CONTACT" => "/contacts/",	// Путь к странице контактных данных
		"PATH_TO_PAYMENT" => "/personal/order/payment/",	// Путь к странице оплат
		"PROFILES_PER_PAGE" => "20",	// Количество профилей на одной странице
		"SAVE_IN_SESSION" => "Y",	// Сохранять установки фильтра в сессии пользователя
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"SEND_INFO_PRIVATE" => "N",	// Генерировать почтовое событие
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_ACCOUNT_COMPONENT" => "Y",
		"SHOW_ACCOUNT_PAGE" => "N",	// Показать страницу персонального счета пользователя
		"SHOW_ACCOUNT_PAY_COMPONENT" => "N",
		"SHOW_BASKET_PAGE" => "Y",	// Вывести ссылку на корзину
		"SHOW_CONTACT_PAGE" => "Y",	// Вывести ссылку на страницу контактов
		"SHOW_ORDER_PAGE" => "Y",	// Показать страницу заказов пользователя
		"SHOW_PRIVATE_PAGE" => "Y",	// Показать страницу персональных данных пользователя
		"SHOW_PROFILE_PAGE" => "Y",	// Показать страницу профилей пользователя
		"SHOW_SUBSCRIBE_PAGE" => "Y",	// Показать страницу подписок
		"USE_AJAX_LOCATIONS_PROFILE" => "N",	// Использовать расширенный выбор местоположения
	),
	false
);?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>