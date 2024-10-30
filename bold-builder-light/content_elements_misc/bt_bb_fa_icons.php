<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( !function_exists('bt_bb_fa_icons') ) {
	function bt_bb_fa_icons() {
		$arr = array(
			'adjust (fa)' => 'fa_' . 'f042',
			'adn (fa)' => 'fa_' . 'f170',
			'align-center (fa)' => 'fa_' . 'f037',
			'align-justify (fa)' => 'fa_' . 'f039',
			'align-left (fa)' => 'fa_' . 'f036',
			'align-right (fa)' => 'fa_' . 'f038',
			'ambulance (fa)' => 'fa_' . 'f0f9',
			'anchor (fa)' => 'fa_' . 'f13d',
			'android (fa)' => 'fa_' . 'f17b',
			'angellist (fa)' => 'fa_' . 'f209',
			'angle-double-down (fa)' => 'fa_' . 'f103',
			'angle-double-left (fa)' => 'fa_' . 'f100',
			'angle-double-right (fa)' => 'fa_' . 'f101',
			'angle-double-up (fa)' => 'fa_' . 'f102',
			'angle-down (fa)' => 'fa_' . 'f107',
			'angle-left (fa)' => 'fa_' . 'f104',
			'angle-right (fa)' => 'fa_' . 'f105',
			'angle-up (fa)' => 'fa_' . 'f106',
			'apple (fa)' => 'fa_' . 'f179',
			'archive (fa)' => 'fa_' . 'f187',
			'area-chart (fa)' => 'fa_' . 'f1fe',
			'arrow-circle-down (fa)' => 'fa_' . 'f0ab',
			'arrow-circle-left (fa)' => 'fa_' . 'f0a8',
			'arrow-circle-o-down (fa)' => 'fa_' . 'f01a',
			'arrow-circle-o-left (fa)' => 'fa_' . 'f190',
			'arrow-circle-o-right (fa)' => 'fa_' . 'f18e',
			'arrow-circle-o-up (fa)' => 'fa_' . 'f01b',
			'arrow-circle-right (fa)' => 'fa_' . 'f0a9',
			'arrow-circle-up (fa)' => 'fa_' . 'f0aa',
			'arrow-down (fa)' => 'fa_' . 'f063',
			'arrow-left (fa)' => 'fa_' . 'f060',
			'arrow-right (fa)' => 'fa_' . 'f061',
			'arrow-up (fa)' => 'fa_' . 'f062',
			'arrows (fa)' => 'fa_' . 'f047',
			'arrows-alt (fa)' => 'fa_' . 'f0b2',
			'arrows-h (fa)' => 'fa_' . 'f07e',
			'arrows-v (fa)' => 'fa_' . 'f07d',
			'asterisk (fa)' => 'fa_' . 'f069',
			'at (fa)' => 'fa_' . 'f1fa',
			'backward (fa)' => 'fa_' . 'f04a',
			'ban (fa)' => 'fa_' . 'f05e',
			'bar-chart (fa)' => 'fa_' . 'f080',
			'barcode (fa)' => 'fa_' . 'f02a',
			'bars (fa)' => 'fa_' . 'f0c9',
			'bed (fa)' => 'fa_' . 'f236',
			'beer (fa)' => 'fa_' . 'f0fc',
			'behance (fa)' => 'fa_' . 'f1b4',
			'behance-square (fa)' => 'fa_' . 'f1b5',
			'bell (fa)' => 'fa_' . 'f0f3',
			'bell-o (fa)' => 'fa_' . 'f0a2',
			'bell-slash (fa)' => 'fa_' . 'f1f6',
			'bell-slash-o (fa)' => 'fa_' . 'f1f7',
			'bicycle (fa)' => 'fa_' . 'f206',
			'binoculars (fa)' => 'fa_' . 'f1e5',
			'birthday-cake (fa)' => 'fa_' . 'f1fd',
			'bitbucket (fa)' => 'fa_' . 'f171',
			'bitbucket-square (fa)' => 'fa_' . 'f172',
			'bold (fa)' => 'fa_' . 'f032',
			'bolt (fa)' => 'fa_' . 'f0e7',
			'bomb (fa)' => 'fa_' . 'f1e2',
			'book (fa)' => 'fa_' . 'f02d',
			'bookmark (fa)' => 'fa_' . 'f02e',
			'bookmark-o (fa)' => 'fa_' . 'f097',
			'briefcase (fa)' => 'fa_' . 'f0b1',
			'btc (fa)' => 'fa_' . 'f15a',
			'bug (fa)' => 'fa_' . 'f188',
			'building (fa)' => 'fa_' . 'f1ad',
			'building-o (fa)' => 'fa_' . 'f0f7',
			'bullhorn (fa)' => 'fa_' . 'f0a1',
			'bullseye (fa)' => 'fa_' . 'f140',
			'bus (fa)' => 'fa_' . 'f207',
			'buysellads (fa)' => 'fa_' . 'f20d',
			'calculator (fa)' => 'fa_' . 'f1ec',
			'calendar (fa)' => 'fa_' . 'f073',
			'calendar-o (fa)' => 'fa_' . 'f133',
			'camera (fa)' => 'fa_' . 'f030',
			'camera-retro (fa)' => 'fa_' . 'f083',
			'car (fa)' => 'fa_' . 'f1b9',
			'caret-down (fa)' => 'fa_' . 'f0d7',
			'caret-left (fa)' => 'fa_' . 'f0d9',
			'caret-right (fa)' => 'fa_' . 'f0da',
			'caret-square-o-down (fa)' => 'fa_' . 'f150',
			'caret-square-o-left (fa)' => 'fa_' . 'f191',
			'caret-square-o-right (fa)' => 'fa_' . 'f152',
			'caret-square-o-up (fa)' => 'fa_' . 'f151',
			'caret-up (fa)' => 'fa_' . 'f0d8',
			'cart-arrow-down (fa)' => 'fa_' . 'f218',
			'cart-plus (fa)' => 'fa_' . 'f217',
			'cc (fa)' => 'fa_' . 'f20a',
			'cc-amex (fa)' => 'fa_' . 'f1f3',
			'cc-discover (fa)' => 'fa_' . 'f1f2',
			'cc-mastercard (fa)' => 'fa_' . 'f1f1',
			'cc-paypal (fa)' => 'fa_' . 'f1f4',
			'cc-stripe (fa)' => 'fa_' . 'f1f5',
			'cc-visa (fa)' => 'fa_' . 'f1f0',
			'certificate (fa)' => 'fa_' . 'f0a3',
			'chain-broken (fa)' => 'fa_' . 'f127',
			'check (fa)' => 'fa_' . 'f00c',
			'check-circle (fa)' => 'fa_' . 'f058',
			'check-circle-o (fa)' => 'fa_' . 'f05d',
			'check-square (fa)' => 'fa_' . 'f14a',
			'check-square-o (fa)' => 'fa_' . 'f046',
			'chevron-circle-down (fa)' => 'fa_' . 'f13a',
			'chevron-circle-left (fa)' => 'fa_' . 'f137',
			'chevron-circle-right (fa)' => 'fa_' . 'f138',
			'chevron-circle-up (fa)' => 'fa_' . 'f139',
			'chevron-down (fa)' => 'fa_' . 'f078',
			'chevron-left (fa)' => 'fa_' . 'f053',
			'chevron-right (fa)' => 'fa_' . 'f054',
			'chevron-up (fa)' => 'fa_' . 'f077',
			'child (fa)' => 'fa_' . 'f1ae',
			'circle (fa)' => 'fa_' . 'f111',
			'circle-o (fa)' => 'fa_' . 'f10c',
			'circle-o-notch (fa)' => 'fa_' . 'f1ce',
			'circle-thin (fa)' => 'fa_' . 'f1db',
			'clipboard (fa)' => 'fa_' . 'f0ea',
			'clock-o (fa)' => 'fa_' . 'f017',
			'cloud (fa)' => 'fa_' . 'f0c2',
			'cloud-download (fa)' => 'fa_' . 'f0ed',
			'cloud-upload (fa)' => 'fa_' . 'f0ee',
			'code (fa)' => 'fa_' . 'f121',
			'code-fork (fa)' => 'fa_' . 'f126',
			'codepen (fa)' => 'fa_' . 'f1cb',
			'coffee (fa)' => 'fa_' . 'f0f4',
			'cog (fa)' => 'fa_' . 'f013',
			'cogs (fa)' => 'fa_' . 'f085',
			'columns (fa)' => 'fa_' . 'f0db',
			'comment (fa)' => 'fa_' . 'f075',
			'comment-o (fa)' => 'fa_' . 'f0e5',
			'comments (fa)' => 'fa_' . 'f086',
			'comments-o (fa)' => 'fa_' . 'f0e6',
			'compass (fa)' => 'fa_' . 'f14e',
			'compress (fa)' => 'fa_' . 'f066',
			'connectdevelop (fa)' => 'fa_' . 'f20e',
			'copyright (fa)' => 'fa_' . 'f1f9',
			'credit-card (fa)' => 'fa_' . 'f09d',
			'crop (fa)' => 'fa_' . 'f125',
			'crosshairs (fa)' => 'fa_' . 'f05b',
			'cube (fa)' => 'fa_' . 'f1b2',
			'cubes (fa)' => 'fa_' . 'f1b3',
			'cutlery (fa)' => 'fa_' . 'f0f5',
			'dashcube (fa)' => 'fa_' . 'f210',
			'database (fa)' => 'fa_' . 'f1c0',
			'delicious (fa)' => 'fa_' . 'f1a5',
			'desktop (fa)' => 'fa_' . 'f108',
			'deviantart (fa)' => 'fa_' . 'f1bd',
			'diamond (fa)' => 'fa_' . 'f219',
			'digg (fa)' => 'fa_' . 'f1a6',
			'dot-circle-o (fa)' => 'fa_' . 'f192',
			'download (fa)' => 'fa_' . 'f019',
			'dribbble (fa)' => 'fa_' . 'f17d',
			'dropbox (fa)' => 'fa_' . 'f16b',
			'drupal (fa)' => 'fa_' . 'f1a9',
			'eject (fa)' => 'fa_' . 'f052',
			'ellipsis-h (fa)' => 'fa_' . 'f141',
			'ellipsis-v (fa)' => 'fa_' . 'f142',
			'empire (fa)' => 'fa_' . 'f1d1',
			'envelope (fa)' => 'fa_' . 'f0e0',
			'envelope-o (fa)' => 'fa_' . 'f003',
			'envelope-square (fa)' => 'fa_' . 'f199',
			'eraser (fa)' => 'fa_' . 'f12d',
			'eur (fa)' => 'fa_' . 'f153',
			'exchange (fa)' => 'fa_' . 'f0ec',
			'exclamation (fa)' => 'fa_' . 'f12a',
			'exclamation-circle (fa)' => 'fa_' . 'f06a',
			'exclamation-triangle (fa)' => 'fa_' . 'f071',
			'expand (fa)' => 'fa_' . 'f065',
			'external-link (fa)' => 'fa_' . 'f08e',
			'external-link-square (fa)' => 'fa_' . 'f14c',
			'eye (fa)' => 'fa_' . 'f06e',
			'eye-slash (fa)' => 'fa_' . 'f070',
			'eyedropper (fa)' => 'fa_' . 'f1fb',
			'facebook (fa)' => 'fa_' . 'f09a',
			'facebook-official (fa)' => 'fa_' . 'f230',
			'facebook-square (fa)' => 'fa_' . 'f082',
			'fast-backward (fa)' => 'fa_' . 'f049',
			'fast-forward (fa)' => 'fa_' . 'f050',
			'fax (fa)' => 'fa_' . 'f1ac',
			'female (fa)' => 'fa_' . 'f182',
			'fighter-jet (fa)' => 'fa_' . 'f0fb',
			'file (fa)' => 'fa_' . 'f15b',
			'file-archive-o (fa)' => 'fa_' . 'f1c6',
			'file-audio-o (fa)' => 'fa_' . 'f1c7',
			'file-code-o (fa)' => 'fa_' . 'f1c9',
			'file-excel-o (fa)' => 'fa_' . 'f1c3',
			'file-image-o (fa)' => 'fa_' . 'f1c5',
			'file-o (fa)' => 'fa_' . 'f016',
			'file-pdf-o (fa)' => 'fa_' . 'f1c1',
			'file-powerpoint-o (fa)' => 'fa_' . 'f1c4',
			'file-text (fa)' => 'fa_' . 'f15c',
			'file-text-o (fa)' => 'fa_' . 'f0f6',
			'file-video-o (fa)' => 'fa_' . 'f1c8',
			'file-word-o (fa)' => 'fa_' . 'f1c2',
			'files-o (fa)' => 'fa_' . 'f0c5',
			'film (fa)' => 'fa_' . 'f008',
			'filter (fa)' => 'fa_' . 'f0b0',
			'fire (fa)' => 'fa_' . 'f06d',
			'fire-extinguisher (fa)' => 'fa_' . 'f134',
			'flag (fa)' => 'fa_' . 'f024',
			'flag-checkered (fa)' => 'fa_' . 'f11e',
			'flag-o (fa)' => 'fa_' . 'f11d',
			'flask (fa)' => 'fa_' . 'f0c3',
			'flickr (fa)' => 'fa_' . 'f16e',
			'floppy-o (fa)' => 'fa_' . 'f0c7',
			'folder (fa)' => 'fa_' . 'f07b',
			'folder-o (fa)' => 'fa_' . 'f114',
			'folder-open (fa)' => 'fa_' . 'f07c',
			'folder-open-o (fa)' => 'fa_' . 'f115',
			'font (fa)' => 'fa_' . 'f031',
			'forumbee (fa)' => 'fa_' . 'f211',
			'forward (fa)' => 'fa_' . 'f04e',
			'foursquare (fa)' => 'fa_' . 'f180',
			'frown-o (fa)' => 'fa_' . 'f119',
			'futbol-o (fa)' => 'fa_' . 'f1e3',
			'gamepad (fa)' => 'fa_' . 'f11b',
			'gavel (fa)' => 'fa_' . 'f0e3',
			'gbp (fa)' => 'fa_' . 'f154',
			'gift (fa)' => 'fa_' . 'f06b',
			'git (fa)' => 'fa_' . 'f1d3',
			'git-square (fa)' => 'fa_' . 'f1d2',
			'github (fa)' => 'fa_' . 'f09b',
			'github-alt (fa)' => 'fa_' . 'f113',
			'github-square (fa)' => 'fa_' . 'f092',
			'glass (fa)' => 'fa_' . 'f000',
			'globe (fa)' => 'fa_' . 'f0ac',
			'google (fa)' => 'fa_' . 'f1a0',
			'google-plus (fa)' => 'fa_' . 'f0d5',
			'google-plus-square (fa)' => 'fa_' . 'f0d4',
			'google-wallet (fa)' => 'fa_' . 'f1ee',
			'graduation-cap (fa)' => 'fa_' . 'f19d',
			'gratipay (fa)' => 'fa_' . 'f184',
			'h-square (fa)' => 'fa_' . 'f0fd',
			'hacker-news (fa)' => 'fa_' . 'f1d4',
			'hand-o-down (fa)' => 'fa_' . 'f0a7',
			'hand-o-left (fa)' => 'fa_' . 'f0a5',
			'hand-o-right (fa)' => 'fa_' . 'f0a4',
			'hand-o-up (fa)' => 'fa_' . 'f0a6',
			'hdd-o (fa)' => 'fa_' . 'f0a0',
			'header (fa)' => 'fa_' . 'f1dc',
			'headphones (fa)' => 'fa_' . 'f025',
			'heart (fa)' => 'fa_' . 'f004',
			'heart-o (fa)' => 'fa_' . 'f08a',
			'heartbeat (fa)' => 'fa_' . 'f21e',
			'history (fa)' => 'fa_' . 'f1da',
			'home (fa)' => 'fa_' . 'f015',
			'hospital-o (fa)' => 'fa_' . 'f0f8',
			'ils (fa)' => 'fa_' . 'f20b',
			'inbox (fa)' => 'fa_' . 'f01c',
			'indent (fa)' => 'fa_' . 'f03c',
			'info (fa)' => 'fa_' . 'f129',
			'info-circle (fa)' => 'fa_' . 'f05a',
			'inr (fa)' => 'fa_' . 'f156',
			'instagram (fa)' => 'fa_' . 'f16d',
			'ioxhost (fa)' => 'fa_' . 'f208',
			'italic (fa)' => 'fa_' . 'f033',
			'joomla (fa)' => 'fa_' . 'f1aa',
			'jpy (fa)' => 'fa_' . 'f157',
			'jsfiddle (fa)' => 'fa_' . 'f1cc',
			'key (fa)' => 'fa_' . 'f084',
			'keyboard-o (fa)' => 'fa_' . 'f11c',
			'krw (fa)' => 'fa_' . 'f159',
			'language (fa)' => 'fa_' . 'f1ab',
			'laptop (fa)' => 'fa_' . 'f109',
			'lastfm (fa)' => 'fa_' . 'f202',
			'lastfm-square (fa)' => 'fa_' . 'f203',
			'leaf (fa)' => 'fa_' . 'f06c',
			'leanpub (fa)' => 'fa_' . 'f212',
			'lemon-o (fa)' => 'fa_' . 'f094',
			'level-down (fa)' => 'fa_' . 'f149',
			'level-up (fa)' => 'fa_' . 'f148',
			'life-ring (fa)' => 'fa_' . 'f1cd',
			'lightbulb-o (fa)' => 'fa_' . 'f0eb',
			'line-chart (fa)' => 'fa_' . 'f201',
			'link (fa)' => 'fa_' . 'f0c1',
			'linkedin (fa)' => 'fa_' . 'f0e1',
			'linkedin-square (fa)' => 'fa_' . 'f08c',
			'linux (fa)' => 'fa_' . 'f17c',
			'list (fa)' => 'fa_' . 'f03a',
			'list-alt (fa)' => 'fa_' . 'f022',
			'list-ol (fa)' => 'fa_' . 'f0cb',
			'list-ul (fa)' => 'fa_' . 'f0ca',
			'location-arrow (fa)' => 'fa_' . 'f124',
			'lock (fa)' => 'fa_' . 'f023',
			'long-arrow-down (fa)' => 'fa_' . 'f175',
			'long-arrow-left (fa)' => 'fa_' . 'f177',
			'long-arrow-right (fa)' => 'fa_' . 'f178',
			'long-arrow-up (fa)' => 'fa_' . 'f176',
			'magic (fa)' => 'fa_' . 'f0d0',
			'magnet (fa)' => 'fa_' . 'f076',
			'male (fa)' => 'fa_' . 'f183',
			'map-marker (fa)' => 'fa_' . 'f041',
			'mars (fa)' => 'fa_' . 'f222',
			'mars-double (fa)' => 'fa_' . 'f227',
			'mars-stroke (fa)' => 'fa_' . 'f229',
			'mars-stroke-h (fa)' => 'fa_' . 'f22b',
			'mars-stroke-v (fa)' => 'fa_' . 'f22a',
			'maxcdn (fa)' => 'fa_' . 'f136',
			'meanpath (fa)' => 'fa_' . 'f20c',
			'medium (fa)' => 'fa_' . 'f23a',
			'medkit (fa)' => 'fa_' . 'f0fa',
			'meh-o (fa)' => 'fa_' . 'f11a',
			'mercury (fa)' => 'fa_' . 'f223',
			'microphone (fa)' => 'fa_' . 'f130',
			'microphone-slash (fa)' => 'fa_' . 'f131',
			'minus (fa)' => 'fa_' . 'f068',
			'minus-circle (fa)' => 'fa_' . 'f056',
			'minus-square (fa)' => 'fa_' . 'f146',
			'minus-square-o (fa)' => 'fa_' . 'f147',
			'mobile (fa)' => 'fa_' . 'f10b',
			'money (fa)' => 'fa_' . 'f0d6',
			'moon-o (fa)' => 'fa_' . 'f186',
			'motorcycle (fa)' => 'fa_' . 'f21c',
			'music (fa)' => 'fa_' . 'f001',
			'neuter (fa)' => 'fa_' . 'f22c',
			'newspaper-o (fa)' => 'fa_' . 'f1ea',
			'openid (fa)' => 'fa_' . 'f19b',
			'outdent (fa)' => 'fa_' . 'f03b',
			'pagelines (fa)' => 'fa_' . 'f18c',
			'paint-brush (fa)' => 'fa_' . 'f1fc',
			'paper-plane (fa)' => 'fa_' . 'f1d8',
			'paper-plane-o (fa)' => 'fa_' . 'f1d9',
			'paperclip (fa)' => 'fa_' . 'f0c6',
			'paragraph (fa)' => 'fa_' . 'f1dd',
			'pause (fa)' => 'fa_' . 'f04c',
			'paw (fa)' => 'fa_' . 'f1b0',
			'paypal (fa)' => 'fa_' . 'f1ed',
			'pencil (fa)' => 'fa_' . 'f040',
			'pencil-square (fa)' => 'fa_' . 'f14b',
			'pencil-square-o (fa)' => 'fa_' . 'f044',
			'phone (fa)' => 'fa_' . 'f095',
			'phone-square (fa)' => 'fa_' . 'f098',
			'picture-o (fa)' => 'fa_' . 'f03e',
			'pie-chart (fa)' => 'fa_' . 'f200',
			'pied-piper (fa)' => 'fa_' . 'f1a7',
			'pied-piper-alt (fa)' => 'fa_' . 'f1a8',
			'pinterest (fa)' => 'fa_' . 'f0d2',
			'pinterest-p (fa)' => 'fa_' . 'f231',
			'pinterest-square (fa)' => 'fa_' . 'f0d3',
			'plane (fa)' => 'fa_' . 'f072',
			'play (fa)' => 'fa_' . 'f04b',
			'play-circle (fa)' => 'fa_' . 'f144',
			'play-circle-o (fa)' => 'fa_' . 'f01d',
			'plug (fa)' => 'fa_' . 'f1e6',
			'plus (fa)' => 'fa_' . 'f067',
			'plus-circle (fa)' => 'fa_' . 'f055',
			'plus-square (fa)' => 'fa_' . 'f0fe',
			'plus-square-o (fa)' => 'fa_' . 'f196',
			'power-off (fa)' => 'fa_' . 'f011',
			'print (fa)' => 'fa_' . 'f02f',
			'puzzle-piece (fa)' => 'fa_' . 'f12e',
			'qq (fa)' => 'fa_' . 'f1d6',
			'qrcode (fa)' => 'fa_' . 'f029',
			'question (fa)' => 'fa_' . 'f128',
			'question-circle (fa)' => 'fa_' . 'f059',
			'quote-left (fa)' => 'fa_' . 'f10d',
			'quote-right (fa)' => 'fa_' . 'f10e',
			'random (fa)' => 'fa_' . 'f074',
			'rebel (fa)' => 'fa_' . 'f1d0',
			'recycle (fa)' => 'fa_' . 'f1b8',
			'reddit (fa)' => 'fa_' . 'f1a1',
			'reddit-square (fa)' => 'fa_' . 'f1a2',
			'refresh (fa)' => 'fa_' . 'f021',
			'renren (fa)' => 'fa_' . 'f18b',
			'repeat (fa)' => 'fa_' . 'f01e',
			'reply (fa)' => 'fa_' . 'f112',
			'reply-all (fa)' => 'fa_' . 'f122',
			'retweet (fa)' => 'fa_' . 'f079',
			'road (fa)' => 'fa_' . 'f018',
			'rocket (fa)' => 'fa_' . 'f135',
			'rss (fa)' => 'fa_' . 'f09e',
			'rss-square (fa)' => 'fa_' . 'f143',
			'rub (fa)' => 'fa_' . 'f158',
			'scissors (fa)' => 'fa_' . 'f0c4',
			'search (fa)' => 'fa_' . 'f002',
			'search-minus (fa)' => 'fa_' . 'f010',
			'search-plus (fa)' => 'fa_' . 'f00e',
			'sellsy (fa)' => 'fa_' . 'f213',
			'server (fa)' => 'fa_' . 'f233',
			'share (fa)' => 'fa_' . 'f064',
			'share-alt (fa)' => 'fa_' . 'f1e0',
			'share-alt-square (fa)' => 'fa_' . 'f1e1',
			'share-square (fa)' => 'fa_' . 'f14d',
			'share-square-o (fa)' => 'fa_' . 'f045',
			'shield (fa)' => 'fa_' . 'f132',
			'ship (fa)' => 'fa_' . 'f21a',
			'shirtsinbulk (fa)' => 'fa_' . 'f214',
			'shopping-cart (fa)' => 'fa_' . 'f07a',
			'sign-in (fa)' => 'fa_' . 'f090',
			'sign-out (fa)' => 'fa_' . 'f08b',
			'signal (fa)' => 'fa_' . 'f012',
			'simplybuilt (fa)' => 'fa_' . 'f215',
			'sitemap (fa)' => 'fa_' . 'f0e8',
			'skyatlas (fa)' => 'fa_' . 'f216',
			'skype (fa)' => 'fa_' . 'f17e',
			'slack (fa)' => 'fa_' . 'f198',
			'sliders (fa)' => 'fa_' . 'f1de',
			'slideshare (fa)' => 'fa_' . 'f1e7',
			'smile-o (fa)' => 'fa_' . 'f118',
			'sort (fa)' => 'fa_' . 'f0dc',
			'sort-alpha-asc (fa)' => 'fa_' . 'f15d',
			'sort-alpha-desc (fa)' => 'fa_' . 'f15e',
			'sort-amount-asc (fa)' => 'fa_' . 'f160',
			'sort-amount-desc (fa)' => 'fa_' . 'f161',
			'sort-asc (fa)' => 'fa_' . 'f0de',
			'sort-desc (fa)' => 'fa_' . 'f0dd',
			'sort-numeric-asc (fa)' => 'fa_' . 'f162',
			'sort-numeric-desc (fa)' => 'fa_' . 'f163',
			'soundcloud (fa)' => 'fa_' . 'f1be',
			'space-shuttle (fa)' => 'fa_' . 'f197',
			'spinner (fa)' => 'fa_' . 'f110',
			'spoon (fa)' => 'fa_' . 'f1b1',
			'spotify (fa)' => 'fa_' . 'f1bc',
			'square (fa)' => 'fa_' . 'f0c8',
			'square-o (fa)' => 'fa_' . 'f096',
			'stack-exchange (fa)' => 'fa_' . 'f18d',
			'stack-overflow (fa)' => 'fa_' . 'f16c',
			'star (fa)' => 'fa_' . 'f005',
			'star-half (fa)' => 'fa_' . 'f089',
			'star-half-o (fa)' => 'fa_' . 'f123',
			'star-o (fa)' => 'fa_' . 'f006',
			'steam (fa)' => 'fa_' . 'f1b6',
			'steam-square (fa)' => 'fa_' . 'f1b7',
			'step-backward (fa)' => 'fa_' . 'f048',
			'step-forward (fa)' => 'fa_' . 'f051',
			'stethoscope (fa)' => 'fa_' . 'f0f1',
			'stop (fa)' => 'fa_' . 'f04d',
			'street-view (fa)' => 'fa_' . 'f21d',
			'strikethrough (fa)' => 'fa_' . 'f0cc',
			'stumbleupon (fa)' => 'fa_' . 'f1a4',
			'stumbleupon-circle (fa)' => 'fa_' . 'f1a3',
			'subscript (fa)' => 'fa_' . 'f12c',
			'subway (fa)' => 'fa_' . 'f239',
			'suitcase (fa)' => 'fa_' . 'f0f2',
			'sun-o (fa)' => 'fa_' . 'f185',
			'superscript (fa)' => 'fa_' . 'f12b',
			'table (fa)' => 'fa_' . 'f0ce',
			'tablet (fa)' => 'fa_' . 'f10a',
			'tachometer (fa)' => 'fa_' . 'f0e4',
			'tag (fa)' => 'fa_' . 'f02b',
			'tags (fa)' => 'fa_' . 'f02c',
			'tasks (fa)' => 'fa_' . 'f0ae',
			'taxi (fa)' => 'fa_' . 'f1ba',
			'tencent-weibo (fa)' => 'fa_' . 'f1d5',
			'terminal (fa)' => 'fa_' . 'f120',
			'text-height (fa)' => 'fa_' . 'f034',
			'text-width (fa)' => 'fa_' . 'f035',
			'th (fa)' => 'fa_' . 'f00a',
			'th-large (fa)' => 'fa_' . 'f009',
			'th-list (fa)' => 'fa_' . 'f00b',
			'thumb-tack (fa)' => 'fa_' . 'f08d',
			'thumbs-down (fa)' => 'fa_' . 'f165',
			'thumbs-o-down (fa)' => 'fa_' . 'f088',
			'thumbs-o-up (fa)' => 'fa_' . 'f087',
			'thumbs-up (fa)' => 'fa_' . 'f164',
			'ticket (fa)' => 'fa_' . 'f145',
			'times (fa)' => 'fa_' . 'f00d',
			'times-circle (fa)' => 'fa_' . 'f057',
			'times-circle-o (fa)' => 'fa_' . 'f05c',
			'tint (fa)' => 'fa_' . 'f043',
			'toggle-off (fa)' => 'fa_' . 'f204',
			'toggle-on (fa)' => 'fa_' . 'f205',
			'train (fa)' => 'fa_' . 'f238',
			'transgender (fa)' => 'fa_' . 'f224',
			'transgender-alt (fa)' => 'fa_' . 'f225',
			'trash (fa)' => 'fa_' . 'f1f8',
			'trash-o (fa)' => 'fa_' . 'f014',
			'tree (fa)' => 'fa_' . 'f1bb',
			'trello (fa)' => 'fa_' . 'f181',
			'trophy (fa)' => 'fa_' . 'f091',
			'truck (fa)' => 'fa_' . 'f0d1',
			'try (fa)' => 'fa_' . 'f195',
			'tty (fa)' => 'fa_' . 'f1e4',
			'tumblr (fa)' => 'fa_' . 'f173',
			'tumblr-square (fa)' => 'fa_' . 'f174',
			'twitch (fa)' => 'fa_' . 'f1e8',
			'twitter (fa)' => 'fa_' . 'f099',
			'twitter-square (fa)' => 'fa_' . 'f081',
			'umbrella (fa)' => 'fa_' . 'f0e9',
			'underline (fa)' => 'fa_' . 'f0cd',
			'undo (fa)' => 'fa_' . 'f0e2',
			'university (fa)' => 'fa_' . 'f19c',
			'unlock (fa)' => 'fa_' . 'f09c',
			'unlock-alt (fa)' => 'fa_' . 'f13e',
			'upload (fa)' => 'fa_' . 'f093',
			'usd (fa)' => 'fa_' . 'f155',
			'user (fa)' => 'fa_' . 'f007',
			'user-md (fa)' => 'fa_' . 'f0f0',
			'user-plus (fa)' => 'fa_' . 'f234',
			'user-secret (fa)' => 'fa_' . 'f21b',
			'user-times (fa)' => 'fa_' . 'f235',
			'users (fa)' => 'fa_' . 'f0c0',
			'venus (fa)' => 'fa_' . 'f221',
			'venus-double (fa)' => 'fa_' . 'f226',
			'venus-mars (fa)' => 'fa_' . 'f228',
			'viacoin (fa)' => 'fa_' . 'f237',
			'video-camera (fa)' => 'fa_' . 'f03d',
			'vimeo-square (fa)' => 'fa_' . 'f194',
			'vine (fa)' => 'fa_' . 'f1ca',
			'vk (fa)' => 'fa_' . 'f189',
			'volume-down (fa)' => 'fa_' . 'f027',
			'volume-off (fa)' => 'fa_' . 'f026',
			'volume-up (fa)' => 'fa_' . 'f028',
			'weibo (fa)' => 'fa_' . 'f18a',
			'weixin (fa)' => 'fa_' . 'f1d7',
			'whatsapp (fa)' => 'fa_' . 'f232',
			'wheelchair (fa)' => 'fa_' . 'f193',
			'wifi (fa)' => 'fa_' . 'f1eb',
			'windows (fa)' => 'fa_' . 'f17a',
			'wordpress (fa)' => 'fa_' . 'f19a',
			'wrench (fa)' => 'fa_' . 'f0ad',
			'xing (fa)' => 'fa_' . 'f168',
			'xing-square (fa)' => 'fa_' . 'f169',
			'yahoo (fa)' => 'fa_' . 'f19e',
			'yelp (fa)' => 'fa_' . 'f1e9',
			'youtube (fa)' => 'fa_' . 'f167',
			'youtube-play (fa)' => 'fa_' . 'f16a',
			'youtube-square (fa)' => 'fa_' . 'f166'
		);
		
		ksort( $arr );
		
		return $arr;
	}
}