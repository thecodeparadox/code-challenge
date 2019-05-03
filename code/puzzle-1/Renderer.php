<?php
define('TEMPLATE_FILE', 'template.php');

class Renderer extends ArrayObject {
  function __construct($data = []) {
    parent::__construct($data, ArrayObject::ARRAY_AS_PROPS);
  }

  private function getTableHeaders() {
    $headers = [];
    foreach ($this->getArrayCopy() as $k => $d) {
      if (is_array($d)) {
        $headers = count($d) > count($headers) ? array_keys($d) : $headers;
      } else {
        $headers[] = $k;
      }
    }
    return $headers;
  }

  private function handleDymicLengthData($headers, $d) {
    foreach ($headers as $h) {
      if (!$d[$h]) {
        $d[$h] = 'N/A';
      }
    }
    return $d;
  }

  private function getTableBody() {
    $headers = $this->getTableHeaders();
    $iter = $this->getIterator();
    $body = [];
    $temp = [];
    while($iter->valid()) {
      if (is_array($iter->current())) {
        $body[] = $this->handleDymicLengthData($headers, $iter->current());
      } else {
        $temp[$iter->key()] = $iter->current();
      }
      $iter->next();
    }
    if (count($temp)) {
      $body[] = $temp;
    }
    return [$headers, $body];
  }

  public function displayAsTable($test_name = '') {
    $is_data_exists = $this->count() > 0;
    list($headers, $body) = $this->getTableBody();
    include TEMPLATE_FILE;
    return ob_get_clean();
  }
}
