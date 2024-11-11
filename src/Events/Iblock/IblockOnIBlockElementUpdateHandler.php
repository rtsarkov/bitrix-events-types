<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnIBlockElementUpdateHandler
{
	public static function OnIBlockElementUpdateHandle(array $newFields, array $ar_wf_element);
}
