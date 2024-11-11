<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\Sale;

interface SaleOnBeforePersonTypeAddHandler
{
	public static function OnBeforePersonTypeAddHandle(array &$arFields);
}
