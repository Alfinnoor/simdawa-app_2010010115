<?php
$pdf = new FPDF("P", "cm", "A4");
$pdf->AddPage();
$pdf->SetTitle("Laporan Data Beasiswa");
$pdf->SetFont("Arial", "B", 16);
$pdf->Cell(19, 1, "KEMAHASISWAAN UNISKA BANJARMASIN", 0, 1, "C");
$pdf->SetFont("Arial", "", 11);
$pdf->Cell(19, 1, "Alamat: Jl. Adhyaksa No.2 Kel. Sungai Miai Kec. Banjarmasin Utara", 6, 1, "C");
$pdf->Line(1, 3, 20, 3);
$pdf->SetFont("Arial", "B", 12);
$pdf->ln();
$pdf->Cell(19, 1, "Laporan Jenis Beasiswa", 9, 1, "C");
$pdf->ln();
$pdf->SetFont("Arial", "B", 11);
$pdf->SetFillColor(0, 255, 0); //mengatur background cell
$pdf->Cell(1, 1, "No", 1, 0, "C", true); //nilai true pada cell untuk mengaktifkan background dari celfl
$pdf->Cell(8, 1, "Jenis Beasiswa", 1, 0, "C", true);
$pdf->Cell(10, 1, "Keterangan", 1, 1, "C", true);
$pdf->SetFont("Arial", "", 11);
$no = 1;
foreach ($jenis as $a) {
    $pdf->Cell(1, 1, $no++, 1, 0, "C");
    $pdf->Cell(8, 1, $a->nama_jenis, 1, 0, "C");
    $pdf->Cell(10, 1, $a->keterangan, 1, 1, "C");
}
$pdf->Output();
