<?php

class Rijexamen extends BaseController
{
    private $rijexamenModel;

    public function __construct()
    {
        $this->rijexamenModel = $this->model('RijexamenModel');
    }
     
    public function index()
    {
        /**haal alle instucteurs op uit de database (model)*/

         $rijexamens = $this->rijexamenModel->getRijexamen();
        /**maak de rows voor de tbody in de view*/
        $rows = "";
        foreach ($rijexamens as $value) {
           
          //  $datum = date_create($value->DatumInDienst);
          //  $datum = date_format($datum, 'd-m-y');

            $rows .= "<tr>
                        <td>$value->Voornaam</td>
                        <td>$value->datum</td>
                        <td>$value->rijbewijscategorie</td>
                        <td>$value->rijschool</td>
                        <td>$value->stad</td>
                        <td>$value->uitslag</td>
                        <td><a href='/Rijexamen/index/$value->rijexamenid'><img src='https://www.freeiconspng.com/thumbs/car-icon-png/car-icon-png-25.png' width = '40px'></a></td>
                        </tr>
                      </tr>";
        }
        //**het data array geeft alle*/

        $data = [
            'titleaaa' => 'Instructeurs in dienst:
                                ',
                                'Amountofinstructeurs' => sizeof($Rijexamen),

            'rows' =>$rows
        ];


        $this->view('Rijexamen/index',$data);
    }




    // {

    //     $InstructeurId = $this->InstructeurModel-> getInstructeurId($InstructeurId);
       
    //     var_dump($InstructeurId);
    //     exit;


    //     $data = [
        
    //     ];

        


    //     $this->view('Instructeur/gebruiktevoertuigen',$data);
    // }


}