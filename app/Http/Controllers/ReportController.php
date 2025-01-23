<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;

class ReportController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'tax_declaration_no' => 'TD12345678',
            'owner' => 'John Doe',
            'address' => '123 Main Street, Taguig City',
            'administrator' => 'Jane Smith',
            'oct_tct_no' => 'OCT-56789',
            'date' => '2025-01-21',
            'survey_no' => 'SN-001',
            'lot_no' => 'LOT-12',
            'blk_no' => 'BLK-5',
            'description' => 'Residential Building',
            'floor_area' => '250 sqm',
            'type_of_structure' => 'Concrete',
            'market_value' => '1,500,000.00',
            'market_value_two' => '1,500,000.00',
            'actual_use' => 'Residential',
            'assessment_level' => '20%',
            'assessed_value' => '300,000.00',
            'taxability' => 'Taxable',
            'total_assessed_value' => 'THREE HUNDRED THOUSAND PESOS AND ZERO CENTAVOS ONLY',
        ];

        // Create a new instance of FPDI
        $pdf = new Fpdi();

        for ($i = 0; $i < 3; $i++) { // Loop to create 3 copies
            $pdf->AddPage();
            $pdf->setSourceFile(public_path('img/Format.pdf'));
            $templateId = $pdf->importPage(1);
            $pdf->useTemplate($templateId, 0, 0, 210);
            $pdf->SetFont('Arial', '', 10);
            $pdf->SetXY(50, 33.7);
            $pdf->Write(0, $data['tax_declaration_no']);
            $pdf->SetXY(25, 41);
            $pdf->Write(0, $data['owner']);
            $pdf->SetXY(27, 52.7);
            $pdf->Write(0, $data['address']);
            $pdf->SetXY(61, 60.7);
            $pdf->Write(0, $data['administrator']);
            $pdf->SetXY(55, 86);
            $pdf->Write(0, $data['oct_tct_no']);
            $pdf->SetXY(98, 86);
            $pdf->Write(0, $data['date']);
            $pdf->SetXY(138, 86);
            $pdf->Write(0, $data['survey_no']);
            $pdf->SetXY(138, 91.2);
            $pdf->Write(0, $data['lot_no']);
            $pdf->SetXY(138, 96);
            $pdf->Write(0, $data['blk_no']);
            $pdf->SetXY(16.5, 110);
            $pdf->Write(0, $data['description']);
            $pdf->SetXY(86.5, 110);
            $pdf->Write(0, $data['floor_area']);
            $pdf->SetXY(119, 110);
            $pdf->Write(0, $data['type_of_structure']);
            $pdf->SetXY(20.5, 157);
            $pdf->Write(0, $data['actual_use']);
            $pdf->SetXY(64.5, 157);
            $pdf->Write(0, $data['market_value']);
            $pdf->SetXY(166.5, 110);
            $pdf->Write(0, $data['market_value_two']);
            $pdf->SetXY(114, 157);
            $pdf->Write(0, $data['assessment_level']);
            $pdf->SetXY(140, 157);
            $pdf->Write(0, $data['assessed_value']);
            $pdf->SetXY(173, 157);
            $pdf->Write(0, $data['taxability']);
            $pdf->SetXY(50, 175);
            $pdf->Write(0, $data['total_assessed_value']);
        }
        return response($pdf->Output('S'))->header('Content-Type', 'application/pdf');
    }
}
