<?php


namespace App\classes;
use App\classes\User;


class Series
{
    protected $startingNumber;
    protected $endingNumber;
    protected $result;
    protected $i;
    protected $oddEven;
   // protected $user;

    public function __construct($post=null)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber = $post['ending_number'];
        if(isset($post['odd_even'])){
            $this->oddEven = $post['odd_even'];
        }
        //for checking this odd_even is coming or not
        //echo $this->oddEven;
       // exit();
    }

    public function index(){
        //$this->user = new User();

        header('Location: pages/index.php');
    }
    public function makeSeries(){
//        for($this->i =$this->startingNumber;$this->i<=$this->endingNumber;$this->i++){
//            $this->result .= $this->i.' ';
//        }
//        return $this->result;
        if($this->startingNumber>$this->endingNumber)
        {
         return $this->bigToSmallSeries();
        }
        else
            {
                if($this->oddEven == "odd")
                {
                    return $this->SmallToOddBigSeries();
                }
                else if($this->oddEven == "even"){
                    return $this->SmallToEvenBigSeries();
                }
                else
                {
                    return $this->SmallToBigSeries();
                }

        }

    }
protected function  SmallToOddBigSeries()
{
    for($this->i =$this->startingNumber;$this->i<=$this->endingNumber;$this->i++)
    {
        if($this->i%2 !=0)
        {
            $this->result .= $this->i.' ';
        }

    }
    return $this->result;
        }
protected function SmallToEvenBigSeries()

    {
        for($this->i =$this->startingNumber;$this->i<=$this->endingNumber;$this->i++)
        {
            if($this->i%2 ==0)
            {
                $this->result .= $this->i.' ';
            }

        }
        return $this->result;
}
    protected function SmallToBigSeries()
    {
        for($this->i =$this->startingNumber;$this->i<=$this->endingNumber;$this->i++){
            $this->result .= $this->i.' ';
        }
        return $this->result;
    }
    protected function bigToSmallSeries()
    {
        for($this->i=$this->startingNumber;$this->i >= $this->endingNumber;$this->i--)
        {
            $this->result.=$this->i;
        }
        return $this->result;
    }

}