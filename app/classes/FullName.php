<?php


namespace App\classes;


class FullName
{
    public $firstname;
    public $lastName;
    protected $FullName;



    public function __construct($data=null)

//            echo "<pre>";

        if($data)
   {
            $this->firstname= $data ["first-name"];
            $this->lastName =$data["last-name"];

//         $this->firstname= "Mosiur";
//         $this->lastName ="Rahaman";
        }

    public function index()
        {
            header("Location:action.php?pages=full-&name");

         //  echo "Mosiur";

        public function getFullName ()
    {
        echo $this->lastName =$this;
    }

        }

}
//