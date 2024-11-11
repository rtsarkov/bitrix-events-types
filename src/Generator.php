<?php

namespace MioCode\BitrixEventTypes;

class Generator
{
    private array $events = [];
    public function __construct()
    {
        $this->events = include __DIR__ . '/events.php';
    }

    public function generateTypes()
    {
        foreach ($this->events as $module => $events) {
            $file = new \Nette\PhpGenerator\PhpFile();
            $file->setStrictTypes();
            $class = $file->addClass('MioCode\BitrixEventTypes\Types\\' . ucfirst($module) . 'EventTypes');
            $class->addConstant('MODULE', $module);
            foreach ($events as $event => $params) {
                $class->addConstant(self::toSnakeCaseUpper($event), $event);
            }

            file_put_contents(__DIR__ . '/Types/' . ucfirst($module) . 'EventTypes.php', $file);
        }
    }

    public function generateEvents()
    {
        foreach ($this->events as $module => $events) {
            foreach ($events as $event => $params) {
                $file = new \Nette\PhpGenerator\PhpFile();
                $file->setStrictTypes();
                $interface = $file->addInterface('MioCode\BitrixEventTypes\Events\\' . ucfirst($module) . '\\' . ucfirst($module) . ucfirst($event) . 'Handler');
                $interface = $interface->addMethod(ucfirst($event).'Handle')->setStatic()->setPublic();
                foreach ($params as $name => $type) {
                    if(str_contains($name, '&')) {
                        $name = str_replace('&', '', $name);
                        $parameter = $interface->addParameter($name)->setReference();
                    } else {
                        $parameter = $interface->addParameter($name);
                    }
                    if (!is_int($type)) {
                        $parameter->setType($type);
                    }
                }
                if (!is_dir(__DIR__ . '/Events/' . ucfirst($module))) {
                    if (!mkdir($concurrentDirectory = __DIR__ . '/Events/' . ucfirst($module), 0777, true) && !is_dir($concurrentDirectory)) {
                        throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
                    }
                }
                file_put_contents(__DIR__ . '/Events/' . ucfirst($module) . '/' . ucfirst($module) . ucfirst($event) . 'Handler.php', $file);
            }
            $file = new \Nette\PhpGenerator\PhpFile();
            $file->setStrictTypes();
            $file->addInterface('MioCode\BitrixEventTypes\Events\\' . ucfirst($module) . '\\' . ucfirst($module) . 'Handler');
        }
    }

    private static function toSnakeCaseUpper(string $input): string {
        return strtoupper(preg_replace('/([a-z])([A-Z])/', '$1_$2', $input));
    }
}