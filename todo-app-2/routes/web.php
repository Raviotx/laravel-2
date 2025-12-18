use App\Http\Controllers\Tarefa2Controller;

Route::get('/', function() {
    return redirect()->route('tarefas2.index');
});

Route::resource('tarefas2', Tarefa2Controller::class);
