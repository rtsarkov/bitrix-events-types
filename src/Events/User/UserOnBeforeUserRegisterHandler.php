<?php

declare(strict_types=1);

namespace MioCode\BitrixEventTypes\Events\User;

interface UserOnBeforeUserRegisterHandler
{
	public static function OnBeforeUserRegisterHandle(array &$arParams);
}
