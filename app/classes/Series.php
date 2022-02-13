<?php


namespace App\classes;


class Series
{
    protected $startingNumber;
    protected $endingNumber;
    protected $i;
    protected $series;
    protected $sum;
    protected $result;

    public function __construct($post=null)
    {


            $this->startingNumber = $post['starting_number'];
            $this->endingNumber = $post['ending_number'];
//            echo $this->startingNumber." ".endingNumber;

    }

    public function getSeries()
    {
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber ; $this->i++)
        {
            $this->sum      += $this->i;
            $this->series   .= $this->i." + ";
        }

         $this->result = rtrim($this->series, '+ ')." = ".$this->sum;
         return [
             'result' =>  $this->result,
             'startingNumber'   => $this->startingNumber,
             'endingNumber'     => $this->endingNumber
         ];
    }

}