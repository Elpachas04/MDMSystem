<?php

namespace App\Imports;

use App\Models\Patient;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class PatientImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Patient([
            'TYPE' => $row['type'],
            'PTNO' => $row['ptno'],
            'SALUTATION' => $row['salutation'],
            'PATIENTNAME' => $row['patientname'],
            'GENDER' => $row['gender'],
            'NATIONALITY' => $row['nationality'],
            'REGION' => $row['region'],
            'REGISTREDDATE' => date('Y-m-d H:i:s', strtotime($row['registreddate'])),     
            'EDDITDATE' => date('Y-m-d H:i:s', strtotime($row['edditdate']))
        ]);
    }
}
