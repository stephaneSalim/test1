@csrf
<div class="form-group">
    <label for="type_consultation_id">Type de consultation:</label>
    <select name="type_consultation_id" id="type_consultation_id" class="form-control">
        @foreach ($type_consultations as $type_consultation)
            <option value="{{$type_consultation->id}}">{{$type_consultation->nom}}</option>
        @endforeach
    </select>
    <div> {{ $errors->first('type_consultation') }} </div>
</div>
<div class="form-group">
    <label for="accompagnant">Accompagnant:</label>
    <input type="text" name="accompagnant" id="accompagnant" value="{{ old('accompagnant') ?? $consultation->accompagnant }}" placeholder="Nom et prenom" class="form-control">
    <div> {{ $errors->first('accompagnant') }} </div>
</div>

<div class="form-group">
    <label for="contactaccompagnant">Contact:</label>
    <input type="text" name="contactaccompagnant" id="contactaccompagnant" value="{{ old('accompagnant') ?? $consultation->contactaccompagnant }}" placeholder="Contact de l'accompagnant" class="form-control">
    <div> {{ $errors->first('contactaccompagnant') }} </div>
</div>

<div class="form-group">
    <label for="reference">Reference:</label>
    <input type="text" name="reference" id="reference" value="{{ old('reference') ?? $consultation->reference }}" placeholder="venu de la part de?" class="form-control">
</div>

<input type="hidden" name="patient_id" value="{{$consultation->patient_id}}">