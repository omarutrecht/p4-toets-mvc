<?php

class RijexamenModel
{
    private $db;

    public function __construct()
    {
        $this ->db = new Database();
    }

    public function getRijexamen()
    {
        $sql = "SELECT
  Examinator.Voornaam,
  Examinator.Achternaam,
  Examen.datum,
  Examen.rijbewijscategorie,
  Examen.rijschool,
  Examen.stad,
  Examen.uitslag
FROM
  Examen
INNER JOIN
  ExamenPerExaminator ON Examen.id = ExamenPerExaminator.Examenid
INNER JOIN
  Examinator ON ExamenPerExaminator.Examinatorid = Examinator.id;

      ";

        $this->db->query($sql);

        return $this->db->resultSet();
    }

}


   
