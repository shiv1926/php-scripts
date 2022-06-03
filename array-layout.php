<?php
$menu = array();
$menu[18525] = array(
	'title'=>'Storage Sheds',
	'link'=>'metal-storage-sheds',
	'submenu' => array(
		array(
			'menu_title' => 'Storage Sheds',
			'submenu_items' => array(
				array('id'=>'11378', 'link'=>'metal-storage-sheds', 'title'=>'All Storage Sheds'),
				array('id'=>'15586', 'link'=>'storage-sheds-florida', 'title'=>'Storage Shed FL'),
				array('id'=>'12027', 'link'=>'2-story-sheds', 'title'=>'2-Story Sheds'),
				array('id'=>'18058', 'link'=>'portable-buildings', 'title'=>'Portable Buildings'),
				array('id'=>'18540', 'link'=>'wood-sheds', 'title'=>'Wood Sheds'),
				array('id'=>'11394', 'link'=>'aluminum-sheds', 'title'=>'Aluminum Sheds'),
				array('id'=>'11379', 'link'=>'steel-sheds', 'title'=>'Steel Sheds'),
				array('id'=>'11380', 'link'=>'storage-buildings-and-pricing', 'title'=>'Other Storage Buildings'),
			)
		)
	)
);

$menu[18526] = array(
	'title'=>'Metal Buildings',
	'link'=>'metal-buildings',
	'submenu' => array(
		array(
			'menu_title' => 'Metal Buildings',
			'submenu_items' => array(
				array('id'=>'17843', 'link'=>'metal-buildings', 'title'=>'All Metal Buildings'),
				array('id'=>'14437', 'link'=>'prefab-metal-buildings', 'title'=>'Prefab Metal Buildings'),
				array('id'=>'14438', 'link'=>'red-iron-buildings', 'title'=>'Red Iron Buildings'),
			)
		)
	)
);

$menu[18527] = array(
	'title'=>'Tiny Homes',
	'link'=>'tiny-homes',
);

$menu[18528] = array(
	'title'=>'Metal Carports',
	'link'=>'metal-carports',
	'submenu' => array(
		array(
			'menu_title' => 'Carports (by Vehicle)',
			'submenu_items' => array(
				array('id'=>'11370', 'link'=>'metal-carports', 'title'=>'All Vehicle Carports'),
				array('id'=>'11371', 'link'=>'rv-carports', 'title'=>'RV &amp; Camper Carports'),
				array('id'=>'11372', 'link'=>'two-car-carports', 'title'=>'2 Car Carports'),
				array('id'=>'11373', 'link'=>'three-car-carports', 'title'=>'3 Car Carports'),
			)
		),
		array(
			'menu_title' => 'Carports (by Feature)',
			'submenu_items' => array(
				array('id'=>'11374', 'link'=>'side-garage-carports', 'title'=>'Carports w/ Side Garage'),
				array('id'=>'11375', 'link'=>'boxed-eave-carports', 'title'=>'Carports w/ Boxed Eave'),
				array('id'=>'11376', 'link'=>'lean-to-carports', 'title'=>'Lean to Carports'),
				array('id'=>'11377', 'link'=>'carport-glossary', 'title'=>'Carport Glossary'),
			)
		)
	)
);

$menu[18529] = array(
	'title'=>'RV Carports',
	'link'=>'rv-carports',
);

$menu[18530] = array(
	'title'=>'Metal Garages',
	'link'=>'metal-garages',
	'submenu' => array(
		array(
			'menu_title' => 'Metal Garages',
			'submenu_items' => array(
				array('id'=>'11382', 'link'=>'metal-garages', 'title'=>'Metal Garages'),
				array('id'=>'11381', 'link'=>'prefab-metal-buildings', 'title'=>'All Metal Buildings'),
				array('id'=>'11383', 'link'=>'red-iron-buildings', 'title'=>'Red Iron Buildings')
			)
		)
	)
);

$menu[18531] = array(
	'title'=>'Metal Barns',
	'link'=>'metal-barns',
	'submenu' => array(
		array(
			'menu_title' => 'Metal Barns & Other',
			'submenu_items' => array(
				array('id'=>'11399', 'link'=>'metal-barns', 'title'=>'All Barns'),
				array('id'=>'11431', 'link'=>'keens-building-2-story-barn', 'title'=>'2-Story Barns'),
			)
		)
	)
);

$menu[18532] = array(
	'title'=>'Contact Us',
	'link'=>'contact-us',
	'submenu' => array(
		array(
			'menu_title' => 'Contact Us',
			'submenu_items' => array(
				array('id'=>'17950', 'link'=>'about-us/keens-management-team', 'title'=>'Meet The Team'),
				array('id'=>'11362', 'link'=>'about-us', 'title'=>'About Us'),
				array('id'=>'11361', 'link'=>'contact-us', 'title'=>'Contact Us'),
			)
		),
		array(
			'menu_title' => 'Locations',
			'submenu_items' => array(
				array('id'=>'11418', 'link'=>'live-oak-florida', 'title'=>'Live Oak, Florida'),
				array('id'=>'11419', 'link'=>'live-oak-florida-super-center', 'title'=>'Live Oak, FL – Super Center'),
				array('id'=>'11420', 'link'=>'perry-florida', 'title'=>'Perry, Florida'),
				array('id'=>'11421', 'link'=>'chiefland-florida', 'title'=>'Chiefland, Florida'),
				array('id'=>'11422', 'link'=>'masaryktown-florida', 'title'=>'Masaryktown, Florida'),
				array('id'=>'11423', 'link'=>'waycross-georgia', 'title'=>'Waycross, Georgia'),
				array('id'=>'13133', 'link'=>'dade-city-florida', 'title'=>'Dade City, Florida'),
			)
		)
	)
);

$menu[18533] = array(
	'title'=>'APPLY NOW',
	'link'=>'keens-buildings-application',
	'submenu' => array(
		array(
			'menu_title' => 'Apply Now',
			'submenu_items' => array(
				array('id'=>'11359', 'link'=>'keens-buildings-application-general', 'title'=>'General Application for Financing'),
				array('id'=>'11360', 'link'=>'rent-to-own-no-credit-check', 'title'=>'Rent-to-Own / No Credit Check Application'),
			)
		)
	)
);

echo '<ul id="primary_nav" class="flex">';
foreach($menu as $key=>$value)
{
	echo '<li id="menu-item-'.$key.'">';
	echo '<a href="'.$value['link'].'">'.$value['title'].'</a>';
	echo '<button class="submenu_opener" onclick="open_submenu('.$key.');">+</button>';
	if(isset($value['submenu']) && count($value['submenu'])>0)
	{
		echo '<div class="dropdown-menu">';
		echo '<div class="et_pb_section">';
		echo '<div class="et_pb_row">';
		foreach($value['submenu'] as $smenu)
		{
			echo '<div class="et_pb_column">';
			echo '<h3>'.$smenu['menu_title'].'</h3>';
			echo '<div class="et_pb_menu__menu">';
			echo '<div class="et-menu-nav">';
			echo '<ul class="et-menu nav">';
			foreach($smenu['submenu_items'] as $s_items)
			{
				echo '<li id="menu-item-'.$s_items['id'].'"><a href="'.$s_items['link'].'">'.$s_items['title'].'</a></li>';
			}
			echo '</ul>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
		}
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
	echo '</li>';
}
echo '</ul>';
?>