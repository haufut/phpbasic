<?php
public class AClass {
    private string $_alias;
    protected string $__alias;
    public string $alias;
    
    function __constructor(string $alias = '') {
        $this->__alias = strlen($alias) ? $alias : '';
        $this->_alias = $this->__alias;
        $thiis->alias = $this->_alias;
    }
}
