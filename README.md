# Composer를 사용하는 플러그인 템플릿

Composer를 사용하는 플러그인 템플릿입니다.

`src` 폴더 하위에 autoload 할 파일을 만들어 구성할 수 있습니다.

```txt
.
├── src
│   └── HookListener.php
└── bootstrap.php
```

## 패키지 이름 변경
`composer.json`과 `/src/HookListener.php` 파일에서 패키지 이름을 적절하게 변경하세요.

### composer.json

`name`과 `autoload.psr-4` 항목을 변경해야 합니다

```json
{
  "name": "vendor-name/plugin-name",
  "autoload": {
    "psr-4": {
      "VendorName\\PluginName\\": "src/"
    }
  }
}
```

예시
```json
{
  "name": "Kkigomi/MyFirstPlugin",
  "autoload": {
    "psr-4": {
      "Kkigomi\\MyFirstPlugin\\": "src/"
    }
  },
}
```

### 패키지 파일

예시로 추가한 파일인 `HookListener.php`에서도 패키지 이름을 변경해야 합니다.

```php
<?php declare(strict_types=1);

namespace VendorName\PluginName;

// 아래의 예시처럼 적절한 이름으로 변경하세요
// composer.json에서 설정한 패키지 이름으로 변경
namespace Kkigomi\MyFirstPlugin;
```

## composer

`composer dump`를 실행하여 autoload 파일을 생성합니다.

```shell
composer dump
```
`vendor` 폴더가 생성되고 autoload 구성이 완료됩니다.
