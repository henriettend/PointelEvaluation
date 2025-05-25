<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des evaluations</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card-style {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }
        h1 {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 25px;
        }
        table th, table td {
            vertical-align: middle;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="card-style">
        <h1 class="mb-4">Liste des Evaluations</h1>

        <div class="table-responsive">
            <table class="table table-hover table-striped align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Titre</th>
                        <th>Type</th>
                        <th>Commentaire</th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th>employé_id</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($evaluations as $evaluation)
                        <tr>
                            <td>{{ $evaluation->titre }}</td>
                            <td>{{ $evaluation->Commentaire}}</td>
                            <td>{{ $evaluation->dateDebut }}</td>
                            <td>{{ $evaluation->dateFin }}</td>
                            <td>{{ $evaluation->statut }}</td>
                            <td>{{ $evaluation->employe_id }}</td>
                            <td>{{ $evaluation->manager_id }}</td>
                            <td>{{ $evaluation->campagne_id }}</td>



                            <td>
                                <a href="{{ route('evaluation.modification', $evaluation->id) }}" class="btn btn-sm btn-warning">Modifier</a>

                                <form action="{{ route('evaluation.suppression', $evaluation->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Confirmer la suppression ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $evaluations->links() }}
        </div>

    </div>

    
</body>
</html>