<table class="table table-bordered table-striped">
    <thead>
        <th>Id</th>
        <th>Titre</th>
        <th>Prix</th>
        <th>Couverture</th>
        <th>Nom Dessinateur</th>
        <th>Prénom Dessinateur</th>
    </thead>
    @foreach($mangas as $manga)
        <tr>
            <td> {{ $manga->id_manga }} </td>
            <td> {{ $manga->titre }} </td>
            <td> {{ $manga->prix }} </td>
            <td> {{ $manga->couverture }}</td>
            <td> {{ $manga->nom_dessinateur }}</td>
            <td> {{ $manga->prenom_dessinateur }}</td>
        </tr>
    @endforeach
</table>
