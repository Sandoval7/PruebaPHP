<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function uploads(Request $request){

    // Obtiene el archivo del request
    $file = $request->file('file_path');

    // Verifica si se ha subido un archivo
    if ($file) {
        // Crea un nuevo objeto Document
        $document = new dato;

        // Asigna el nombre del archivo
        $document->name = $file->getClientOriginalName();

        // Asigna la descripción del archivo
        $document->description = $request->input('description');

        // Genera un nombre único para el archivo
        $filename = time() . '_' . $file->getClientOriginalName();

        // Almacena el archivo en el almacenamiento de Laravel
        $file->storeAs('uploads', $filename);

        // Asigna la ruta del archivo
        $document->file_path = 'uploads/' . $filename;

        // Asigna el estado del archivo
        $document->status = $request->input('status');

        // Guarda el documento en la base de datos
        $document->save();

        // Redirige a la página de documentos
        return redirect('/home')->with('mensaje', 'Datos guardados correctamente.');
    } else {
        // Si no se subió un archivo, muestra un mensaje de error
        return back()->with('error', 'Debe seleccionar un archivo para subir.');
    }
}
        //return view('home.index');
    }

