<form method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name" placeholder="Nome">
    <input type="number" name="age" placeholder="Idade">
    <input type="text" name="breed" placeholder="Raça">

    <input type="file" name="photo">

    <button type="submit">Salvar</button>
</form>