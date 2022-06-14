<!-- Checked Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('checked', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('checked', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('checked', 'Checked', ['class' => 'form-check-label']) !!}
    </div>
</div>


<!-- Checked At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('checked_at', 'Checked At:') !!}
    {!! Form::text('checked_at', null, ['class' => 'form-control','id'=>'checked_at']) !!}
</div>

@push('page_scripts')
<script type="text/javascript">
    $('#checked_at').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
        useCurrent: true,
        sideBySide: true
    })
</script>
@endpush

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control', 'step'=>'any']) !!}
</div>

<!-- Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number', 'Number:') !!}
    {!! Form::number('number', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::textarea('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Notes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('notes', 'Notes:') !!}
    {!! Form::textarea('notes', null, ['class' => 'form-control']) !!}
</div>