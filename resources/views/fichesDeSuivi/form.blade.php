@csrf
<div class="form-group">
    <label for="tension">Tension:</label>
    <input type="text" name="tension" id="tension" value="{{ old('tension') ?? $fichesDeSuivi->tension }}" placeholder="Entrez la tension du patient" class="form-control">
    <div> {{ $errors->first('tension') }} </div>
</div>
<div class="form-group">
    <label for="temperature">temperature:</label>
    <input type="text" name="temperature" id="temperature" value="{{ old('temperature') ?? $fichesDeSuivi->temperature }}" placeholder="Entrez la temperature du patient" class="form-control">
    <div> {{ $errors->first('temperature') }} </div>
</div>
<div class="form-group">
    <label for="poids">Poids:</label>
    <input type="text" name="poids" id="poids" value="{{ old('poids') ?? $fichesDeSuivi->poids }}" placeholder="Entrez le poids du patient" class="form-control">
    <div> {{ $errors->first('poids') }} </div>
</div>
<div class="form-group">
    <label for="motif">Motif:</label>
    <input type="text" name="motif" id="motif" value="{{ old('motif') ?? $fichesDeSuivi->motif }}" placeholder="Entrez le motif de la consultation" class="form-control">
    <div> {{ $errors->first('motif') }} </div>
</div>
<div class="form-group">
    <label for="symptomes">Symptomes:</label>
    <textarea type="text" name="symptomes" id="symptomes" value="{{ old('symptomes') ?? $fichesDeSuivi->symptomes }}" placeholder="Entrez les symptomes" class="form-control"></textarea>
    <div> {{ $errors->first('symptomes') }} </div>
</div>
<div class="form-group">
    <label for="description">Description:</label>
    <textarea type="text" name="description" id="description" value="{{ old('description') ?? $fichesDeSuivi->description }}" placeholder="faites une descripton du mal" class="form-control"></textarea>
    <div> {{ $errors->first('description') }} </div>
</div>
<div class="form-group">
    <label for="antecedents">Antecedents:</label>
    <textarea type="text" name="antecedents" id="antecedents" value="{{ old('antecedents') ?? $fichesDeSuivi->antecedents }}" placeholder="lister les antecedents" class="form-control"></textarea>
    <div> {{ $errors->first('antecedents') }} </div>
</div>
<div class="form-group">
    <label for="diagnostic">diagnostic:</label>
    <textarea type="text" name="diagnostic" id="diagnostic" value="{{ old('diagnostic') ?? $fichesDeSuivi->diagnostic }}" placeholder="Diagnostic" class="form-control"></textarea>
    <div> {{ $errors->first('diagnostic') }} </div>
</div>
<div class="form-group">
    <label for="prescription">Prescription:</label>
    <textarea type="text" name="prescription" id="prescription" value="{{ old('prescription') ?? $fichesDeSuivi->prescription }}" placeholder="prescription" class="form-control"></textarea>
    <div> {{ $errors->first('prescription') }} </div>
</div>
<div>
    <input type="hidden" name="consultation_id" value="{{$fichesDeSuivi->consultation_id}}">
</div>
