<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnBeforeIBlockElementDeleteHandler
{
	public static function OnBeforeIBlockElementDeleteHandle(int $id);
}
