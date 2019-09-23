@csrf
    <div class="form-group">
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" value="{{ old('nom') ?? $type_consultation->nom }}" placeholder="saisissez le nom" class="form-control" >
        <div> {{ $errors->first('nom') }} </div>
    </div>
    <div class="form-group">
        <label for="prix">prix:</label>
        <input type="text" name="prix" id="prix" value="{{ old('prix') ?? $type_consultation->prix }}" placeholder="saisissez le prix" class="form-control">
        <div> {{ $errors->first('prix') }} </div>
    </div>
