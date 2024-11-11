<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnIBlockElementDeleteHandler
{
	public static function OnIBlockElementDeleteHandle(int $id);
}
