@forelse($data as $key=>$value)
    <tr class="">
        <td>{{ $key+1 }}</td>
        <td class="id">{{ $value->id }}</td>
        <td>{{ $value->tenphanquyen }}</td>
        <td><select class="example-reversed" name="rating" autocomplete="off">
                <option @if($value->hienthi==1) {{ 'selected' }} @endif value="1">Hiển thị</option>
                <option @if($value->hienthi==0) {{ 'selected' }} @endif value="0">Ẩn</option>
            </select></td>
        <td><button class="btn btn-danger btn-sm">Remove</button></td>
    </tr>
@empty

@endforelse