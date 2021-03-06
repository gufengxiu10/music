<?php

declare(strict_types=1);

namespace Anng\Music;

use ReflectionClass;
use ReflectionException;
use Swlib\Http\Exception\ConnectException;
use Throwable;

abstract class Music
{
    private ReflectionClass $refection;

    public function module(string $module)
    {
        $class = $this->getNamespace() . ucfirst($module);
        try {
            $this->refection = new ReflectionClass($class);
            return $this;
        } catch (ReflectionException $e) {
            dump($e->getMessage());
        } catch (MusicExcption $e) {
            dump($e->getMessage());
        } catch (Throwable $e) {
            dump($e->getMessage());
        }
    }

    abstract function getNamespace();

    public function __call($method, $args)
    {
        try {
            if ($this->refection->hasMethod($method)) {
                $instance = $this->refection->newInstance();
                return $instance->$method(...$args);
            } else {
                return '方法不存在';
            }
        } catch (ConnectException $e) {
            dump($e->getMessage());
        } catch (ReflectionException $e) {
            dump($e->getMessage());
        } catch (MusicExcption $e) {

            if ($this->getMessage() == '请求失败') {
                dump($this->getMessage());
                call_user_func_array([$this, $method], $args);
            }

            dump($e->getMessage());
        }
    }
}
