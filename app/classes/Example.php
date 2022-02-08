<?php


namespace App\classes;


class Example
{
    public $name;
    public $data = [];

    public function index()
    {
        // echo "hello world";

        // $this->name="Bitm";
        // $this->name="Basis";
        //  echo $this->name;

        //   $this->data = [10,20,30,"BASIS","BITM",100,200, true ];
        //  echo $this->data[6];

        //  foreach ($this->data as $key=> $item)
        //  {
        //      echo  $key." " .$item." <br/>";
        //   }

        $this->data = [
            0 => [
                "name" => "Sagor",
                "email" => "sagor@gmail.com",
                "mobile" => [
                    "personal" => "01780139439",
                    "parent" => "013",
                ],
            ],
            1 => [
                "name" => "faysal",
                "email" => "sagor@gmail.com",
                "mobile" => [
                    "personal" => "01780139439",
                    "parent" => "013",
                ],
            ],
            2=>"Bitm",
            3=> [
                    "name"      =>  "sajib",
                    "email"     =>  "sajib@gmail.com",
                    "mobile"    =>  " 98732637865432"
                ],

        ];

//        foreach ($this->data as $item)
//        {
//            //   echo $item ["name"]." ".$item["email"]." ".$item["mobile"]."<br/>";
//            //
//        if (is_array( $item))
//        {
//            foreach ($item as $value)
//            {
//                if (is_array($value))
//                {
//                    foreach ($value as $v_value)
//                    {
//                        echo $v_value." ";
//                    }
//
//                }
//                else
//                {
//                    echo $value . ' ';
//                }
//
//            }
//        }
//
//            echo "<br/>";
//        }

      //  echo "<pre>";
      //  print_r($this->data);

       // var_dump($this->data);


        //   echo $this->data[0]["name"];
        //  echo $this->data["name"];
        //echo $this->data["mobile"];
        // echo $this->data["city"];

    }

}