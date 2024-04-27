@if($candidat->releve_bac)
    <div>
        <h2>Relevé du candidat : {{ $candidat->name }}</h2>
        <embed src="{{ asset($candidat->releve_bac) }}" width="100%" height="600px" type='application/pdf'>
    </div>
@else
    <p>Aucun relevé n'est disponible pour ce candidat.</p>
@endif
