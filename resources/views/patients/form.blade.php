@csrf
<div class="form-group">
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" value="{{ old('nom') ?? $patient->nom }}" placeholder="saisissez le nom" class="form-control" >
    @if($error)<div> {{ $errors->first('nom') }} </div>
</div>
<div class="form-group">
    <label for="prenom">Prenom:</label>
    <input type="text" name="prenom" id="prenom" value="{{ old('prenom') ?? $patient->prenom }}" placeholder="saisissez le prenom" class="form-control">
    <div> {{ $errors->first('prenom') }} </div>
</div>
<div class="form-group">
    <label for="age">Age:</label>
    <input type="text" name="age" id="age"  class="form-control" value="{{ old('age') ?? $patient->age }} ">
</div>
<div class="form-group">
    <label for="sexe">Sexe:</label>
    <select name="sexe" id="sexe" class="form-control">
        <option value="" disabled>Choisir Age</option>
        <option value="Masculin" {{ $patient->sexe == 'Masculin' ? 'selected' : ''}}>Masculin</option>
        <option value="Feminin"  {{ $patient->sexe == 'Feminin' ? 'selected' : ''}}>Feminin</option>
    </select>
</div>
<div class="form-group">
    <label for="adresse">Adresse:</label>
    <input type="text" name="adresse"  value="{{ old('adresse') ?? $patient->adresse }}"id="adresse" placeholder="saisissez l'adresse" class="form-control">
</div>
<div class="form-group">
    <label for="contact">Contact:</label>
<input type="text" name="contact" value="{{ old('contact') ?? $patient->contact }}" id="contact" placeholder="saisissez le contact" class="form-control">
    <div> {{ $errors->first('contact') }} </div>
</div>

