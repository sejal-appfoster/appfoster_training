<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;


class ReportController extends Controller
{
    public function report1($pid)
{
    $payment = Payment::with(['enrollment.batch', 'enrollment.student'])->find($pid);

    if (!$payment) {
        return response()->json(['error' => 'Payment not found'], 404);
    }

    $pdf = App::make('dompdf.wrapper');

    $print = "<div style='margin:20px; padding: 20px;'>";

$print .= "<h1 align='center'> Payment Receipt </h1>";
$print .= "<hr/>";
$print .= "<p> Receipt No: <b>" . $pid . " </b> </p>";
$print .= "<p> Date : <b>" . $payment->paid_date . "</b></p>";
$print .= "<p> Enrollment No: <b>" . ($payment->enrollment ? $payment->enrollment->enroll_no : 'N/A') . "</b></p>";
$print .= "<p> Student Name: <b>" . ($payment->enrollment && $payment->enrollment->student ? $payment->enrollment->student->name : 'N/A') . "</b></p>";
$print .= "<hr/>";
$print .= "<table style='width: 100%;'>";
$print .= "<tr><td>Description</td><td>Amount</td></tr>";
$print .= "<tr>";
$print .= "<td><h3>" . ($payment->enrollment && $payment->enrollment->batch ? $payment->enrollment->batch->name : 'N/A') . "</h3></td>";
$print .= "<td><h3>" . $payment->amount . "</h3></td>";
$print .= "</tr>";
$print .= "</table>";
$print .= "<hr/>";

$print .= "<span> Printed Date: <b>" . date('Y.m.d') . "</b> </span>";
$print .= "</div>";


    $pdf->loadHTML($print);

    return $pdf->stream();
}
}


?>