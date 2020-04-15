<?php

namespace App\Http\Controllers;

use App\Info;
use App\Category;
use Illuminate\Http\Request;

class InfoController extends Controller
{

    public function index()
    {
        $infos = Info::all(); // llamado al método all() que permite obtener todos los datos de la tabla mediante el modelo infos
        return view('infos.index', compact('infos')); // se hace una redirección a la vista ubicada en la carpeta infos, la vista index
                                                      // y se le envía la información obtenida compactándola.
    }

    public function create()
    {
        $categories = Category::all();
        return view('infos.create', compact('categories')); // se retorna la vista create ubicada en la carpeta infos.
    }

    public function store(Request $request) // método para almacenar en la DB el objeto que se quiere almacenar
    { // se capturan con request los datos enviados desde la vista mediante el form.
        $this->validate(request(),[ // validación de los datos. En este caso solo se busca que estén los datos (requeridos)
            'author' => 'required',
            'title' => 'required',
            'body' => 'required',
            'date' => 'required',
            'category' => 'required',
            ]);
        $info = new Info; // se crea una nueva instancia del modelo Info para almacenar los datos antes de insertarlos a la DB
        $info->author = request('author'); // se almacena en el atributo author el campo enviado desde el form con nombre e id author
        $info->title = request('title');
        $info->body = request('body');
        $info->date = request('date');
        $info->category_id = request('category');
        $info->save(); // se almacena en la DB el objeto creado mediante el modelo
        return redirect('/'); // se redirecciona al home
    }

    public function show(Info $info)
    {
        //
    }

    public function edit($id) // redirige a la vista con los datos de la información que se quiere modificar
    { // se captura el id que fue enviado en el formulario para editar la información
        $info = Info::findOrfail($id); // obtenemos la información correspondiente a ese id para precargarlo en la vista
        $categories = Category::all();
        return view('infos.edit', compact('info', 'categories')); // se redirecciona a la vista y se envía la info que se quiere editar
    }

    public function update(Request $request, $id) // método para almacenar en la BD el objeto que se quiere actualizar
    {
        $this->validate(request(),[ // se validan que se encuentren los atributos.
            'author' => 'required',
            'title' => 'required',
            'body' => 'required',
            'date' => 'required',
            'category' => 'required',
            ]);
        $info = Info::findOrfail($id); // se busca el objeto que se quiere actualizar para cargar los datos
        $info->author = request('author');
        $info->title = request('title');
        $info->body = request('body');
        $info->date = request('date');
        $info->category_id = request('category');
        $info->save(); // se almacena insertando la data en la Info con la id correspondiente.
        return redirect('/');
    }

    public function destroy($id) // método para eliminar un dato de la DB
    {
        $info = Info::findOrfail($id); // se busca el objeto a eliminar mediante el id que fue recibido desde el form.
        $info -> delete(); // se elimina la información que fue buscada. 
        return redirect('/'); // se redirecciona al home.
    }
}
