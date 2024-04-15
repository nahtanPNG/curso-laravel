<h1>Listagem das dúvidas</h1>

<a href="{{ route('forum.create') }}">Nova Dúvida</a>

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
    </thead>
    <tbody>
        @foreach ($supports as $$support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    >
                </td>
            </tr>
        @endforeach
    </tbody>
</table>