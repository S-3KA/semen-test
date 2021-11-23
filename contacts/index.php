<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><p>Обратитесь к нашим специалистам и получите профессиональную консультацию по вопросам создания и покупки мебели (от дизайна, разработки технического задания до доставки мебели к Вам домой).</p>

<p>Вы можете обратиться к нам по телефону, по электронной почте или договориться о встрече в нашем офисе. Будем рады помочь вам и ответить на все ваши вопросы. </p>

<h2>Телефоны</h2>

<ul> 
 
	<li>Телефон:
		<ul> 
			<li> <a href="tel:+79502115896)" onclick="phone_bt()"><b>8-950-211-58-96</b></a></li>
		</ul>
	</li>
</ul>

<h2>Email</h2>

<ul> 
  <li><a href="mailto:konyushkov.s.a@gmail.com" target="_blank" onclick="mail_bt()" >konyushkov.s.a@gmail.com</a> — общие вопросы</li>
</ul>

<h2>Офис в Москве</h2>
<p><?$APPLICATION->IncludeComponent("bitrix:map.google.view", ".default", array(
	"KEY" => "ABQIAAAAOSNukcWVjXaGbDo6npRDcxS1yLxjXbTnpHav15fICwCqFS-qhhSby0EyD6rK_qL4vuBSKpeCz5cOjw",
	"INIT_MAP_TYPE" => "NORMAL",
	"MAP_DATA" => "a:3:{s:10:\"google_lat\";s:7:\"55.7383\";s:10:\"google_lon\";s:7:\"37.5946\";s:12:\"google_scale\";i:13;}",
	"MAP_WIDTH" => "600",
	"MAP_HEIGHT" => "500",
	"CONTROLS" => array(
		0 => "LARGE_MAP_CONTROL",
		1 => "MINIMAP",
		2 => "HTYPECONTROL",
		3 => "SCALELINE",
	),
	"OPTIONS" => array(
		0 => "ENABLE_SCROLL_ZOOM",
		1 => "ENABLE_DBLCLICK_ZOOM",
		2 => "ENABLE_DRAGGING",
	),
	"MAP_ID" => ""
	),
	false
);?></p>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>