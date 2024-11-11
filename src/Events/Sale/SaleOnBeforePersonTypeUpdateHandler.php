<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Sale;

interface SaleOnBeforePersonTypeUpdateHandler
{
	public static function OnBeforePersonTypeUpdateHandle(int $id, array &$arFields);
}
