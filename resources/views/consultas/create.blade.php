<form method="POST" action="/consultas">
    @csrf

    <input type="date" name="date" required>

    <select name="time">
        <option value="09:00">09:00</option>
        <option value="10:00">10:00</option>
        <option value="11:00">11:00</option>
        <option value="14:00">14:00</option>
        <option value="15:00">15:00</option>
    </select>

    <button type="submit">Agendar</button>
</form>