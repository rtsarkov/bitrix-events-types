# Bitrix event types

Сгенерированные подсказки для написания событий в bitrix. Список буду пополнять.


```php
$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandler(
  \MioCode\BitrixEventTypes\Types\UserEventTypes::MODULE,
  \MioCode\BitrixEventTypes\Types\UserEventTypes::ON_AFTER_USER_REGISTER,
  [UserHandler::class, 'OnBeforeUserRegisterHandle']
);
```

Так же есть и можно пополнить интерфейсы для реализации событий

```php
use MioCode\BitrixEventTypes\Events\User\UserOnBeforeUserRegisterHandler;

class UserHandler implements UserOnBeforeUserRegisterHandler
{

    public static function OnBeforeUserRegisterHandle(array &$arParams)
    {
        // TODO: Implement OnBeforeUserRegisterHandle() method.
    }
}
```

Весь список и его настройки хранятся в файле src/event.php

Для генерации можно запустить php src/generate.php.
Все файлы классов и интерфейсы сгенерируются заново.
