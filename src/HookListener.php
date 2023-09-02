<?php declare(strict_types=1);

namespace VendorName\PluginName;

use KG\Traits\SingletonTrait;

class HookListener
{
    use SingletonTrait;

    private function singletonInstanceInit()
    {
        # 싱글톤 인스턴스를 생성할 때 실행할 코드

        // Hook 사용 예시
        kg()->hook()->onEvent('write_update_after', function ($board = null, $wr_id = 0) {
            ddd('글 저장됨', $wr_id);
        });
    }
}
