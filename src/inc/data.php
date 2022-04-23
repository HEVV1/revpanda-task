<?php

class Data extends DataBaseConnection
{
  protected function getAllData($table, $order)
  {
    $sql = "SELECT * FROM $table $order";
    $result = $this->connect()->query($sql);
    $numRows = $result->num_rows;

    if ($numRows > 0) {
      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
      return $data;
    }
  }

  protected function insertAllData($table, $data)
  {
    $sql = "INSERT INTO $table (texts) VALUES ('$data')";
    $result = $this->connect()->query($sql);
    return $result;
  }
}
