<h2>Todas as Consultas</h2>

@foreach($consultas as $c)
    <form method="POST" action="/consultas/{{ $c->id }}">
        @csrf

        <p>Data: {{ $c->date }}</p>
        <p>Hora: {{ $c->time }}</p>

        <textarea name="notes" placeholder="Observações"></textarea>

        <button type="submit">Finalizar Consulta</button>
        <hr>
    </form>
@endforeach

public function update(Request $request, $id)
{
    $consulta = Consulta::find($id);

    $consulta->notes = $request->notes;
    $consulta->status = 'finished';
    $consulta->veterinarian_id = auth()->id();

    $consulta->save();

    return redirect()->back();
}