<?php namespace CI4Xpander_View;

trait ViewTrait
{
    protected $_isView = true;

    protected function _render(\Closure $function = null, ...$params)
    {
        if (!is_null($function)) {
            if ($function instanceof \Closure) {
                return $function(...$params);
            }
        }

        throw new \Exception('Cannot render');
    }
}