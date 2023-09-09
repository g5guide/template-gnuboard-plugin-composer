<?php declare(strict_types=1);

// KG Framework 로드되지 않았으면 중단
if (!defined('_KG_')) {
    return;
}

// PHP 버전 체크
if (version_compare(PHP_VERSION, '7.4', '<')) {
    return;
}

// 그누보드 버전 체크
if (version_compare(G5_GNUBOARD_VER, '5.5.8', '<')) {
    return;
}

// composer autoload
require_once(__DIR__ . '/vendor/autoload.php');

// HookListener 클래스 초기화 실행
VendorName\PluginName\HookListener::getInstance();
