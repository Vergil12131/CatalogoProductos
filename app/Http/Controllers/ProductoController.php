<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::activos()->get();
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'precio' => 'required|numeric|gt:0',
            'descripcion' => 'nullable|max:300',
            'stock' => 'required|integer|gte:0'
        ]);

        # Producto::create($request->all());

         Producto::create([
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion,
        'precio' => $request->precio,
        'stock' => $request->stock,
        'estado' => 'activo'
        ]);

        return redirect()->route('productos.index')
                        ->with('success', 'Producto creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'precio' => 'required|numeric|gt:0',
            'descripcion' => 'nullable|max:300',
            'stock' => 'required|integer|gte:0'
        ]);

        $producto->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'stock' => $request->stock,
        ]);

        return redirect()->route('productos.index')
                        ->with('success', 'Producto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        try {
            // Eliminado físico
            // $producto->delete();

            // Eliminado lógico usando el campo estado
            $producto->update(['estado' => 'inactivo']);

            return redirect()->route('productos.index')
                            ->with('success', 'Producto eliminado correctamente');
        } catch (\Exception $e) {

            return redirect()->route('productos.index')
                            ->with('error', 'No se pudo eliminar el producto');
        }
    }
}
