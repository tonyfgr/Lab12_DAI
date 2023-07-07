<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;


class PlanController extends Controller
{
    //
    public function seleccionarPlan()
{
    return view('seleccionar_plan');
}

public function realizarPago(Request $request)
{
    // Procesar el pago y subir el voucher
    $validatedData = $request->validate([
        'plan' => 'required',
        'voucher' => 'required|file|mimes:jpg,png,gif,pdf|max:3000', // Validación del archivo
    ], [
        'voucher.required' => 'Debes seleccionar un archivo de voucher.',
        'voucher.file' => 'El archivo de voucher es inválido.',
        'voucher.mimes' => 'El archivo o imagen a subir debe ser en formato JPG, PNG, GIF o PDF.',
        'voucher.max' => 'El archivo de voucher no debe exceder los 3MB de tamaño.',
    ]);
    $payment = new Payment();
    $payment->user_id = $request->user()->id; // Obtén el ID del usuario actualmente autenticado
    $payment->plan_id = intval($request->input('plan'));
    $payment->voucher = $request->file('voucher')->store('vouchers');
    $payment->save();

    // Redirigir a la página de compra exitosa
    return redirect()->route('compra-exitosa');
}
}
