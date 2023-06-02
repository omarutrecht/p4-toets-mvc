<?php

class Rijexamen extends BaseController
{
    private $RijexamenModel;

    public function __construct()
    {
        $this->RijexamenModel = $this->model('RijexamenModel');
    }
     
    public function Rijexamen()
    {
        /**haal alle instucteurs op uit de database (model)*/

         $Instructeur = $this->RijexamenModel->getRijexamen();
        /**maak de rows voor de tbody in de view*/
        $rows = "";
        foreach ($RijexamenModel as $value) {
           
            $datum = date_create($value->DatumInDienst);
            $datum = date_format($datum, 'd-m-y');

            $rows .= "<tr>
                        <td>$value->Voornaam</td>
                        <td>$value->Tussenvoegsel</td>
                        <td>$value->Achternaam</td>
                        <td>$value->Mobiel</td>
                        <td>$datum</td>
                        <td>$value->AantalSterren</td>
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