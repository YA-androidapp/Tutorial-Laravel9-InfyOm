<!-- Checked Field -->
<div class="col-sm-12">
    {!! Form::label('checked', 'Checked:') !!}
    <p>{{ $item->checked }}</p>
</div>

<!-- Checked At Field -->
<div class="col-sm-12">
    {!! Form::label('checked_at', 'Checked At:') !!}
    <p>{{ $item->checked_at }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $item->amount }}</p>
</div>

<!-- Number Field -->
<div class="col-sm-12">
    {!! Form::label('number', 'Number:') !!}
    <p>{{ $item->number }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $item->title }}</p>
</div>

<!-- Notes Field -->
<div class="col-sm-12">
    {!! Form::label('notes', 'Notes:') !!}
    <p>{{ $item->notes }}</p>
</div>

