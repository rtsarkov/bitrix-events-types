<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Iblock;

interface IblockOnBeforeIBlockPropertyDeleteHandler
{
	public static function OnBeforeIBlockPropertyDeleteHandle(int $id);
}
