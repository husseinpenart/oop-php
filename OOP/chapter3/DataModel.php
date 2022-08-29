<?php

abstract class DataModel
{
protected string $tablename = 'random-table-name';
public function save(){
    print_r('saving data to the database'  . '<br>' .  $this->tablename);
}
}