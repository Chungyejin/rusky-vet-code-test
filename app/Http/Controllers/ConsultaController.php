public function store(Request $request)
{
    $request->validate([
        'date' => 'required|date',
        'time' => 'required'
    ]);


    if (date('N', strtotime($request->date)) >= 6) {
        return back()->with('error', 'Não atendemos finais de semana');
    }


    $exists = Consulta::where('date', $request->date)
        ->where('time', $request->time)
        ->exists();

    if ($exists) {
        return back()->with('error', 'Horário já ocupado');
    }

    Consulta::create([
        'user_id' => auth()->id(),
        'date' => $request->date,
        'time' => $request->time,
        'status' => 'scheduled'
    ]);

    return redirect('/consultas');
}
public function index()
{
    $consultas = Consulta::where('user_id', auth()->id())->get();

    return view('consultas.index', compact('consultas'));
}

public function admin()
{
    $consultas = Consulta::all();

    return view('consultas.admin', compact('consultas'));
}