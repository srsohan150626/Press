<?php

namespace Press;

use Illuminate\Support\Facades\File;

class PressFileParser
{
  protected $filename;

  protected $data;

  public function __construct($filename)
  {
      $this->filename = $filename;

      $this->splitFile();

      $this->explodeData();
  }

  public function getData()
  {
     return $this->data;
  }

  protected function splitFile()
  {
    preg_match('/^\-{3}(.*?)\-{3}(.*)/s', 
    File::get($this->filename), 
    $this->data

    );

   // dd($this->data);
  }
   protected function explodeData()
    {
        foreach (explode("\r", trim($this->data[1])) as $fieldString) {
            preg_match('/(.*):\s?(.*)/', $fieldString, $fieldArray);
            dd($fieldArray);
            $this->data[$fieldArray[1]] = $fieldArray[2];
        }
    }
}