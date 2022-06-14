<div class="table-responsive">
    <table class="table" id="items-table">
        <thead>
        <tr>
            <th>Checked</th>
        <th>Checked At</th>
        <th>Amount</th>
        <th>Number</th>
        <th>Title</th>
        <th>Notes</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{ $item->checked }}</td>
            <td>{{ $item->checked_at }}</td>
            <td>{{ $item->amount }}</td>
            <td>{{ $item->number }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->notes }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['items.destroy', $item->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('items.show', [$item->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('items.edit', [$item->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
