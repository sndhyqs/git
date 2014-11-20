<?php

require_once 'imageTool.class.php';

class YImage {

    private $MAX = 1000;
    private $MIN = 6000000;
    private $Iresource;
    private $white;
    private $hight;
    private $DataArray;

    public function __construct($Iresource) {
        $this->Iresource = $Iresource;
        $this->white = imagesx($this->Iresource);
        $this->hight = imagesy($this->Iresource);
    }

    public function compare($othres) {
        for ($x = 0; $x < $this->white; $x++) {
            for ($y = 0; $y < $this->hight; $y++) {
                $myindex = ImageColorAt($this->Iresource, $x, $y);
                $otherindex = ImageColorAt($othres, $x, $y);
                if ($myindex != $otherindex) {
                    return FALSE;
                }
            }
        }
        return TRUE;
    }

    public function compare1($dataArray) {

        $tag = 0;
        for ($x = 0; $x < 140; $x++) {
            if ($this->DataArray[$x] == $dataArray[$x]) {
                $tag++;
                if ($tag <= 135)
                    return FALSE;
            }
        }
        return TRUE;
    }

    public function quzhao() {
        $data = array();
        for ($x = 0; $x < $this->white; $x++) {
            for ($y = 0; $y < $this->hight; $y++) {

                $index = ImageColorAt($this->Iresource, $x, $y);
                $rgbarray = imagecolorsforindex($this->Iresource, $index);
                if ($rgbarray['red'] < 78 || $rgbarray['green'] < 110 || $rgbarray['blue'] < 110) {
                    array_push($data, 1);
                } else {
                    array_push($data, 0);
                    //imagefill($this->Iresource, $x, $y, self::getWhitePaint());
                }
            }
        }

        $this->DataArray = $data;
        return $this->Iresource;
    }

    public function getWhitePaint() {
        return imagecolorallocate($this->Iresource, 0xFF, 0xFF, 0xFF);
    }

    public function getDataAray() {
        return $this->DataArray;
    }

    public function getImage() {
        return $this->Iresource;
    }

    public function save($path) {
        YImageTool::save($this->Iresource, $path);
    }

    public function printImage() {
        YImageTool::printImage($this->Iresource);
    }

}
