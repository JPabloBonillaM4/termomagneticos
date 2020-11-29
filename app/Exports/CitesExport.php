<?php

namespace App\Exports;

use App\Cite;
use Maatwebsite\Excel\Concerns\FromCollection;
// use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithEvents;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class CitesExport implements 
FromCollection,
// Responsable,
WithMapping,
WithHeadings,
WithTitle,
ShouldAutoSize,
WithDrawings,
WithStyles,
WithCustomStartCell,
WithCustomValueBinder
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function startCell(): string
    {
        return 'A2';
    }
    public function map($row): array
    {
        return [
            $row->date.' - '.$row->time,
            $row->name,
            $row->phone,
            $row->email
        ];
    }
    // HEADINGS
    public function headings(): array
    {
        return [
            'Fecha',
            'Solicitante',
            'Telefono',
            'Correo'
        ];
    }
    // TITULO
    public function title(): string
    {
        return 'Reporte de citas';
    }
    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setPath(public_path('images\logo.png'));
        $drawing->setHeight(60)->setWidth(130);
        $drawing->setCoordinates('A1');

        return $drawing;
    }
    // // ESTILOS
    public function styles(Worksheet $sheet)
    {
        $sheet->getRowDimension('1')->setRowHeight(45);
        $styleArrayHead = [
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'rgb' => 'ffffff',
                ]
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['rgb' => 'ffffff'],
                ],
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ]
        ];
        $styleArrayHeadings = [
            'font' => [
                'bold' => true,
                'color' => [
                    'rgb' => 'ffffff'
                ]
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'rgb' => '007bff',
                ]
            ],
        ];
        $styleArrayRows = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['rgb' => '00000000'],
                ],
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ]
        ];
        $sheet->mergeCells('A1:D1');
        $sheet->getStyle('A1:D1')->applyFromArray($styleArrayHead);
        $sheet->getStyle('A2:D2')->applyFromArray($styleArrayHeadings);
        $sheet->getStyle(
            'A2:'.
            $sheet->getHighestColumn() . 
            $sheet->getHighestRow()
        )->applyFromArray($styleArrayRows);
        // HORIZONTAL
        $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
    }
    public function bindValue(Cell $cell, $value)
    {
        $cell->setValueExplicit($value, DataType::TYPE_STRING);
        return true;
    }
    public function collection()
    {
        return Cite::all();
    }
}
