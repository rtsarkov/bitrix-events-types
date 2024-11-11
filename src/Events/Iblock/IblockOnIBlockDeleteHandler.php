<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnIBlockDeleteHandler
{
	public static function OnIBlockDeleteHandle(int $id);
}
