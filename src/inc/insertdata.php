<?php
class InsertData extends Data
{
  public $tableTarget;
  public $insertedData;

  public function __construct($table, $data)
  {
    $this->tableTarget = $table;
    $this->insertedData = $data;
  }

  public function insertData()
  {
    $this->insertAllData($this->tableTarget, $this->insertedData);
  }
}
