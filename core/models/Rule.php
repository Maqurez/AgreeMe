<?php
/**
 * Created by PhpStorm.
 * User: Maqurez
 * Date: 12/6/2014
 * Time: 11:35 AM
 */

class Rule {
    private $id;
    private $type;
    private $rule;
    private $parent;

    public function __construct($type, $rule, $parent = null, $id = null) {
        $this->id = $id;
        $this->type = $type;
        $this->rule = $rule;
        $this->parent = $parent;
    }
}