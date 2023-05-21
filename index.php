<?
$GLOBALS['arrFilter'] = array();
if($_GET["search"]){ 
	$arrFilter[] = array(
	   "LOGIC" => "OR",
			array("PROPERTY_TITLE" => '%'.$_GET["search"].'%'),
			array("NAME" => '%'.$_GET["search"].'%')
	); 
}

$today = date("Y-m-d H:i:s");
$today_y = date("Y");
$today_m = date("m");

$show='yes';
if($_GET["year"] and $_GET["mount"]){ 
	$cur_year=$_GET["year"];
	$cur_mount=$_GET["mount"]; 
	
	//$date1 = $cur_year."-".$cur_mount."-1 00:00:00";
	
	if ($_GET["year"]==$today_y and $_GET["mount"]==$today_m) {
		$filter_day=date("d"); 
		$cur_mount=$_GET["mount"]; 
	}else if($_GET["year"]>=$today_y and $_GET["mount"]>$today_m){
		$filter_day='01';
		$cur_mount=$_GET["mount"]; 
	}else{
		$show='no';
	}
} else {
	$cur_year=date("Y");
	$date1 = $cur_year."-".$cur_mount."-1 00:00:00";
	// $filter_day='01';
	$filter_day=date("d");
	$cur_mount=date("m"); 
}

$arrFilter[] = array(
   "LOGIC" => "OR",
		array(
			"LOGIC" => "OR",
			array(">=PROPERTY_DATE1" => $cur_year.'-'.$cur_mount.'-'.$filter_day,"<=PROPERTY_DATE1" => $cur_year.'-'.$cur_mount.'-31'),
			//array(">=PROPERTY_DATE2" => $cur_year.'-'.$cur_mount.'-01',"<=PROPERTY_DATE2" => $cur_year.'-'.$cur_mount.'-31'),
		),
		array(
			"LOGIC" => "OR",
			array(">=PROPERTY_DATE2_1" => $cur_year.'-'.$cur_mount.'-'.$filter_day,"<=PROPERTY_DATE2_1" => $cur_year.'-'.$cur_mount.'-31'),
			//array(">=PROPERTY_DATE2_2" => $cur_year.'-'.$cur_mount.'-01',"<=PROPERTY_DATE2_2" => $cur_year.'-'.$cur_mount.'-31'),
		),
		array(
			"LOGIC" => "OR",
			array(">=PROPERTY_DATE3_1" => $cur_year.'-'.$cur_mount.'-'.$filter_day,"<=PROPERTY_DATE3_1" => $cur_year.'-'.$cur_mount.'-31'),
			//array(">=PROPERTY_DATE3_2" => $cur_year.'-'.$cur_mount.'-01',"<=PROPERTY_DATE3_2" => $cur_year.'-'.$cur_mount.'-31'),
		),
		array(
			"LOGIC" => "OR",
			array(">=PROPERTY_DATE4_1" => $cur_year.'-'.$cur_mount.'-'.$filter_day,"<=PROPERTY_DATE4_1" => $cur_year.'-'.$cur_mount.'-31'),
			//array(">=PROPERTY_DATE4_2" => $cur_year.'-'.$cur_mount.'-01',"<=PROPERTY_DATE4_2" => $cur_year.'-'.$cur_mount.'-31'),
		),
		array(
			"LOGIC" => "OR",
			array(">=PROPERTY_DATE5_1" => $cur_year.'-'.$cur_mount.'-'.$filter_day,"<=PROPERTY_DATE5_1" => $cur_year.'-'.$cur_mount.'-31'),
			//array(">=PROPERTY_DATE5_2" => $cur_year.'-'.$cur_mount.'-01',"<=PROPERTY_DATE5_2" => $cur_year.'-'.$cur_mount.'-31'),
		),
		array(
			"LOGIC" => "OR",
			array(">=PROPERTY_DATE6_1" => $cur_year.'-'.$cur_mount.'-'.$filter_day,"<=PROPERTY_DATE6_1" => $cur_year.'-'.$cur_mount.'-31'),
			//array(">=PROPERTY_DATE6_2" => $cur_year.'-'.$cur_mount.'-01',"<=PROPERTY_DATE6_2" => $cur_year.'-'.$cur_mount.'-31'),
		),
		array(
			"LOGIC" => "OR",
			array(">=PROPERTY_DATE7_1" => $cur_year.'-'.$cur_mount.'-'.$filter_day,"<=PROPERTY_DATE7_1" => $cur_year.'-'.$cur_mount.'-31'),
			//array(">=PROPERTY_DATE7_2" => $cur_year.'-'.$cur_mount.'-01',"<=PROPERTY_DATE7_2" => $cur_year.'-'.$cur_mount.'-31'),
		),
		array(
			"LOGIC" => "OR",
			array(">=PROPERTY_DATE8_1" => $cur_year.'-'.$cur_mount.'-'.$filter_day,"<=PROPERTY_DATE8_1" => $cur_year.'-'.$cur_mount.'-31'),
			//array(">=PROPERTY_DATE8_2" => $cur_year.'-'.$cur_mount.'-01',"<=PROPERTY_DATE8_2" => $cur_year.'-'.$cur_mount.'-31'),
		),
		array(
			"LOGIC" => "OR",
			array(">=PROPERTY_DATE9_1" => $cur_year.'-'.$cur_mount.'-'.$filter_day,"<=PROPERTY_DATE9_1" => $cur_year.'-'.$cur_mount.'-31'),
			//array(">=PROPERTY_DATE9_2" => $cur_year.'-'.$cur_mount.'-01',"<=PROPERTY_DATE9_2" => $cur_year.'-'.$cur_mount.'-31'),
		),
		array(
			"LOGIC" => "OR",
			array(">=PROPERTY_DATE10_1" => $cur_year.'-'.$cur_mount.'-'.$filter_day,"<=PROPERTY_DATE10_1" => $cur_year.'-'.$cur_mount.'-31'),
			//array(">=PROPERTY_DATE10_2" => $cur_year.'-'.$cur_mount.'-01',"<=PROPERTY_DATE10_2" => $cur_year.'-'.$cur_mount.'-31'),
		),
		array(
			"LOGIC" => "OR",
			array(">=PROPERTY_DATE11_1" => $cur_year.'-'.$cur_mount.'-'.$filter_day,"<=PROPERTY_DATE11_1" => $cur_year.'-'.$cur_mount.'-31'),
			//array(">=PROPERTY_DATE11_2" => $cur_year.'-'.$cur_mount.'-01',"<=PROPERTY_DATE11_2" => $cur_year.'-'.$cur_mount.'-31'),
		),
		array(
			"LOGIC" => "OR",
			array(">=PROPERTY_DATE12_1" => $cur_year.'-'.$cur_mount.'-'.$filter_day,"<=PROPERTY_DATE12_1" => $cur_year.'-'.$cur_mount.'-31'),
			//array(">=PROPERTY_DATE12_2" => $cur_year.'-'.$cur_mount.'-01',"<=PROPERTY_DATE12_2" => $cur_year.'-'.$cur_mount.'-31'),
		),
		array(
			"LOGIC" => "OR",
			array(">=PROPERTY_DATE13_1" => $cur_year.'-'.$cur_mount.'-'.$filter_day,"<=PROPERTY_DATE13_1" => $cur_year.'-'.$cur_mount.'-31'),
			//array(">=PROPERTY_DATE13_2" => $cur_year.'-'.$cur_mount.'-01',"<=PROPERTY_DATE13_2" => $cur_year.'-'.$cur_mount.'-31'),
		),
		array(
			"LOGIC" => "OR",
			array(">=PROPERTY_DATE14_1" => $cur_year.'-'.$cur_mount.'-'.$filter_day,"<=PROPERTY_DATE14_1" => $cur_year.'-'.$cur_mount.'-31'),
			//array(">=PROPERTY_DATE14_2" => $cur_year.'-'.$cur_mount.'-01',"<=PROPERTY_DATE14_2" => $cur_year.'-'.$cur_mount.'-31'),
		),
		array(
			"LOGIC" => "OR",
			array(">=PROPERTY_DATE15_1" => $cur_year.'-'.$cur_mount.'-'.$filter_day,"<=PROPERTY_DATE15_1" => $cur_year.'-'.$cur_mount.'-31'),
			//array(">=PROPERTY_DATE15_2" => $cur_year.'-'.$cur_mount.'-01',"<=PROPERTY_DATE15_2" => $cur_year.'-'.$cur_mount.'-31'),
		),
		array(
			"LOGIC" => "OR",
			array(">=PROPERTY_DATE16_1" => $cur_year.'-'.$cur_mount.'-'.$filter_day,"<=PROPERTY_DATE16_1" => $cur_year.'-'.$cur_mount.'-31'),
			//array(">=PROPERTY_DATE16_2" => $cur_year.'-'.$cur_mount.'-01',"<=PROPERTY_DATE16_2" => $cur_year.'-'.$cur_mount.'-31'),
		),
		array(
			"LOGIC" => "OR",
			array(">=PROPERTY_DATE17_1" => $cur_year.'-'.$cur_mount.'-'.$filter_day,"<=PROPERTY_DATE17_1" => $cur_year.'-'.$cur_mount.'-31'),
			//array(">=PROPERTY_DATE17_2" => $cur_year.'-'.$cur_mount.'-01',"<=PROPERTY_DATE17_2" => $cur_year.'-'.$cur_mount.'-31'),
		),
		array(
			"LOGIC" => "OR",
			array(">=PROPERTY_DATE18_1" => $cur_year.'-'.$cur_mount.'-'.$filter_day,"<=PROPERTY_DATE18_1" => $cur_year.'-'.$cur_mount.'-31'),
			//array(">=PROPERTY_DATE18_2" => $cur_year.'-'.$cur_mount.'-01',"<=PROPERTY_DATE18_2" => $cur_year.'-'.$cur_mount.'-31'),
		),
		array(
			"LOGIC" => "OR",
			array(">=PROPERTY_DATE19_1" => $cur_year.'-'.$cur_mount.'-'.$filter_day,"<=PROPERTY_DATE19_1" => $cur_year.'-'.$cur_mount.'-31'),
			//array(">=PROPERTY_DATE19_2" => $cur_year.'-'.$cur_mount.'-01',"<=PROPERTY_DATE19_2" => $cur_year.'-'.$cur_mount.'-31'),
		),
		array(
			"LOGIC" => "OR",
			array(">=PROPERTY_DATE20_1" => $cur_year.'-'.$cur_mount.'-'.$filter_day,"<=PROPERTY_DATE20_1" => $cur_year.'-'.$cur_mount.'-31'),
			//array(">=PROPERTY_DATE20_2" => $cur_year.'-'.$cur_mount.'-01',"<=PROPERTY_DATE20_2" => $cur_year.'-'.$cur_mount.'-31'),
		),
);

// ---------------
// @dded 
$sortCustomIds = [];

if(CModule::IncludeModule('iblock')) {
	$startTimestamp = strtotime($filter_day.'.'.$cur_mount.'.'.$cur_year);

	$arSelect = ['ID', 'IBLOCK_ID', 'CODE', 'NAME', 'PROPERTY_DATES_START_VALUE'];

	for ($i=1; $i <=20 ; $i++) { 
		$arSelect[] = 'PROPERTY_DATE'.$i.'_1';
	}

	$arFilter = ['IBLOCK_ID' => 21, 'ACTIVE_DATE' => 'Y', 'ACTIVE' => 'Y'];
	$res = CIblockElement::GetList([], array_merge($arrFilter, $arFilter), false, false, $arSelect);

	while($ob = $res->GetNextElement()){
		$item = $ob->GetFields();
		$itemTimestamps = [];

		for ($i=1; $i <=20 ; $i++) { 
			if (!empty($item['PROPERTY_DATE'.$i.'_1_VALUE'])) {
				$itemTimestamp = strtotime($item['PROPERTY_DATE'.$i.'_1_VALUE']);
				if ($itemTimestamp >= $startTimestamp) {
					$itemTimestamps[] = $itemTimestamp;
				}
			}
		}

		if (!empty($itemTimestamps)) {
			$sortCustomIds[$item['ID']] = min($itemTimestamps);
		}

		// if (!empty($item['PROPERTY_DATES_START_VALUE'])) {
		// 	$itemTimestamps = array_map('strtotime', $item['PROPERTY_DATES_START_VALUE']);
		// 	if (!empty($itemTimestamps)) {
		// 		$sortCustomIds[$item['ID']] = min($itemTimestamps);
		// 	}
		// }
	}

	if (!function_exists('timestampCompare')) {
		function timestampCompare($a, $b) {
			if ($a == $b) {
				return 0;
			}
				return ($a < $b) ? -1 : 1;
		}
	}
	uasort($sortCustomIds, 'timestampCompare');
}

if (!empty($sortCustomIds)) {
	$sortOrder = array_keys($sortCustomIds);
} else {
	$sortOrder = 'DESC';
}
// ---------------


if($show=='no'){?> <style type="text/css">
	.loadmore_wrap{
		display: none!important;
	}
	.pagy_conteiner{
		display: none!important;
	}
</style> <?
}
	 $APPLICATION->IncludeComponent(
	"fox:news.list", 
	"raspisanie", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "XML_ID",
			3 => "NAME",
			4 => "TAGS",
			5 => "SORT",
			6 => "PREVIEW_TEXT",
			7 => "PREVIEW_PICTURE",
			8 => "DETAIL_TEXT",
			9 => "DETAIL_PICTURE",
			10 => "DATE_ACTIVE_FROM",
			11 => "ACTIVE_FROM",
			12 => "DATE_ACTIVE_TO",
			13 => "ACTIVE_TO",
			14 => "SHOW_COUNTER",
			15 => "SHOW_COUNTER_START",
			16 => "IBLOCK_TYPE_ID",
			17 => "IBLOCK_ID",
			18 => "IBLOCK_CODE",
			19 => "IBLOCK_NAME",
			20 => "IBLOCK_EXTERNAL_ID",
			21 => "DATE_CREATE",
			22 => "CREATED_BY",
			23 => "CREATED_USER_NAME",
			24 => "TIMESTAMP_X",
			25 => "MODIFIED_BY",
			26 => "USER_NAME",
			27 => "",
		),
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "21",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "load_more2",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "CAT_CURS",
			1 => "TITLE",
			2 => "SITY",
			3 => "DATES_START",
			4 => "TIME",
			5 => "STEPEN",
			6 => "NAPRAVLENIE",
			7 => "EDUCATION1",
			8 => "EDUCATION2",
			9 => "FORMA_EDUCATION",
			10 => "CENA",
			11 => "CENA2",
			12 => "TIP",
			13 => "PROGRAMM",
			14 => "DOCS",
			15 => "CELI",
			16 => "CAT_USER",
			17 => "DATE1",
			18 => "DATE2",
			19 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "Y",
		// "SORT_BY1" => "PROPERTY_DATES_START",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "",
		"SORT_ORDER1" => $sortOrder,
		"SORT_ORDER2" => "",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "raspisanie",
		"FILE_404" => ""
	),
	false
);?> <section class="section-banners">
<div class="container">
	<div class="banners banners_shedule">
		<div class="banner-wide">
			<div class="banner-wide__title">
				 Не нашли подходящего курса для Вашей компании?
			</div>
			<div class="banner-wide__img banner-wide__img_right">
 <img src="<?php echo SITE_TEMPLATE_PATH ?>/images/dist/banners.png" alt="">
			</div>
 <button class="banner-wide__btn btn btn_orange" href="#modal-callback" data-fancybox="">Оставьте заявку на обратный звонок</button>
		</div>
		<div class="banner-small">
			<div class="banner-small__toptitle">
				 Защищенная информационная платформа «Свиток 3.1»
			</div>
			<div class="banner-small__title">
				 Законность использования
			</div>
 <span> <source srcset="<span id=" title="Код PHP: &lt;?php echo SITE_TEMPLATE_PATH ?&gt;" class="bxhtmled-surrogate"><?php echo SITE_TEMPLATE_PATH ?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/images/dist/banner-bg-mob.png" media="(max-width: 1280px)"&gt; <img src="<?php echo SITE_TEMPLATE_PATH ?>/images/dist/banner-bg.jpg" class="banner-small__bg" alt=""> </span> <a href="https://svitok31.ru" class="banner-small__btn btn" target="_blank">Подробнее</a>
		</div>
	</div>
</div>
 </section>
<?
$GLOBALS['arrFilter2'] = array();
$arrFilter2[]=array('PROPERTY_POPULAR_VALUE'=>'Да');
	
	 $APPLICATION->IncludeComponent("bitrix:news.list", "popular", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "ID",
			2 => "CODE",
			3 => "XML_ID",
			4 => "NAME",
			5 => "TAGS",
			6 => "SORT",
			7 => "PREVIEW_TEXT",
			8 => "PREVIEW_PICTURE",
			9 => "DETAIL_TEXT",
			10 => "DETAIL_PICTURE",
			11 => "DATE_ACTIVE_FROM",
			12 => "ACTIVE_FROM",
			13 => "DATE_ACTIVE_TO",
			14 => "ACTIVE_TO",
			15 => "SHOW_COUNTER",
			16 => "SHOW_COUNTER_START",
			17 => "IBLOCK_TYPE_ID",
			18 => "IBLOCK_ID",
			19 => "IBLOCK_CODE",
			20 => "IBLOCK_NAME",
			21 => "IBLOCK_EXTERNAL_ID",
			22 => "DATE_CREATE",
			23 => "CREATED_BY",
			24 => "CREATED_USER_NAME",
			25 => "TIMESTAMP_X",
			26 => "MODIFIED_BY",
			27 => "USER_NAME",
			28 => "",
		),
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "arrFilter2",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "21",	// Код информационного блока
		"IBLOCK_TYPE" => "-",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "200",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "CAT_CURS",
			2 => "TITLE",
			3 => "SITY",
			4 => "TIME",
			5 => "STEPEN",
			6 => "NAPRAVLENIE",
			7 => "EDUCATION1",
			8 => "EDUCATION2",
			9 => "FORMA_EDUCATION",
			10 => "DATE1",
			11 => "DATE2",
			12 => "CENA",
			13 => "CENA2",
			14 => "TIP",
			15 => "PROGRAMM",
			16 => "DOCS",
			17 => "CELI",
			18 => "CAT_USER",
			19 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>