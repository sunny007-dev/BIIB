@php
$required = (Str::contains($field['rules'], 'required')) ? "required" : "";
$required_mark = ($required != "") ? '<span class="text-danger"> <strong>*</strong> </span>' : '';
@endphp

<div class="form-group mb-3 {{ $errors->has($field['name']) ? ' has-error' : '' }}">

<label for="{{ $field['name'] }}" class='form-label'> <strong>{{ $field['label'] }}</strong> ({{ $field['name'] }})</label>{!! $required_mark !!}

    <div class="col-md-5">
        <input  type="file" id="file-multiple-input"  class="form-control" name="app_logo" multiple="" enctype="multipart/form-data" wire:model="app_logo">
    </div>
    @if ($errors->has($field['name'])) <small class="invalid-feedback">{{ $errors->first($field['name']) }}</small> @endif
</div>
