<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfesor;
use App\Models\Curso;
use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index(){
        $query = Profesor::orderBy('id','desc')->paginate();
        //usamos el metodo compact(), para pasarle una variable a una vista, se pas a la variable sin el signo de dolar y dentro de comilla simple
        // ejmplo(  return view('profesor', compact(query)); )
        return view('profesor.show', compact('query'));

    }

    public function create(){
        return view('profesor.createProfesor');
    }

    public function consultar($id){
        $query = Profesor::where('id',$id)->first();
        return view('profesor.consultar', compact('query'));
    }

    //Comenamos la instancia Request, porque para validar vamos a usar el StoreProfesor. 
    public function store(StoreProfesor $request){

        //NOTA: PARA REGISTROS MASIVOS VAMOS A USAR UN METODO DISTINTO a lo habitual isntanciando la clase del 
        //      modelo y rellenanando uno x uno sus propiedades

        // $query = new Profesor();
        // $query->nombre = $request->nombre;
        // $query->dni = $request->dni;
        // $query->save();
        //         return redirect()->route('profesor.consultar',$query->id);

        //LA OTRA MANERA XD, este crea el objeto y tmb lo guarda en la base de datos (hace un save(), interno)

        $query = Profesor::create([
            'nombre' =>$request->nombre,
            'dni' => $request->dni,
        ]);
        
        return redirect()->route('profesor.consultar',$query->id);


        //MANERA 3 XD
        // $query = Profesor::create($request->all());

    }

    public function edit($id){
        $query = Profesor::find($id);
        return view('profesor.edit',compact('query'));
    }

    public function update(Request $request, Profesor $profesor){
        
        $request->validate([
            'nombre' => 'required',
            'dni' => ['required','max:8'],
        ]);

        //EJEMPLO ANTIGUO
        // $profesor = Profesor::find($id);
        // $profesor->nombre = $request->nombre;
        // $profesor->dni = $request->dni;
        // $profesor->save();
        // return redirect()->route('profesor.consultar',$profesor->id);

        //SIGUIEN EL MISMO EJEMPLO DE STORE, en este caso reemplazamos la variable $profesor, por el $id
        // $profesor = Profesor::find($id);
        // $profesor->update([
        //     'nombre' =>$request->nombre,
        //     'dni' => $request->dni,
        // ]);

        // return redirect()->route('profesor.consultar',$profesor->id);


        //OPCION 3 XD, pero funciona sienmpre y cuando en el parametro de la funcion, le volvemos objeto a la 
        //variable que llego. ejmplo ( function update(Request $request, Profesor $profesor)), el 2do argumento
        //retorn aun aobjeto a la variable profesor, con el id que llego, encuentra esa consulta espcifico, y 
        //se puede acceder a sus propiedades, como update, reemplazando lo que llego por el formulario con request
        // y reemplazando con el $request->all, al objeto $profesor, al final hace un save() dentro del update

        $profesor->update($request->all());
        return redirect()->route('profesor.consultar',$profesor->id);
 
    }
}
