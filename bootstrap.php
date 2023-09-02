<?php declare(strict_types=1);

// KG Framework 로드되지 않았으면 중단
if (defined('_KG_')) {
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

// 실행할 코드 작성
// ...

// kg()->hook()->onEvent('kg:booted', function () {
    // 초기화 및 모든 플러그인 로드 완료 후 실행할 코드
    // ...
// });
