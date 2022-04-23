<?php
class ViewData extends Data
{
  public $table;
  public $order;

  public function __construct($table, $order)
  {
    $this->table = $table;
    $this->order = $order;
  }

  public function showAllData()
  {
    $dataObj = $this->getAllData($this->table, $this->order);
    echo "<pre style='font-weight: bold;'>{$this->table}</pre>";
    echo "<pre style='font-weight: bold;'>id  text</pre>";
    foreach ($dataObj as $obj) {
      echo "<pre>" . $obj['id'] . "   " . $obj['texts'] . "</pre>";
    }
  }
}
