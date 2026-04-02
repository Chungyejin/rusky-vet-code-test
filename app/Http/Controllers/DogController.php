public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'age' => 'required',
        'breed' => 'required',
    ]);

    $dog = new Dog();

    $dog->name = $request->name;
    $dog->age = $request->age;
    $dog->breed = $request->breed;

    if ($request->hasFile('photo')) {
        $path = $request->file('photo')->store('dogs', 'public');
        $dog->photo = $path;
    }

    $dog->user_id = auth()->id();

    $dog->save();

    return redirect('/dogs');
}