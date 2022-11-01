<tbody>
    @foreach ($data as $row)
    <tr>    
        <td>{{$row->id}}</td>
        <td>{{$row->Promo_name}}</td>

        <td>   
        </td>
        <td>
            <button onclick="selectpromotion()" id="slctpro">Select promotion</button>
        </td>
        <td class="line"></td>
    </tr>         
@endforeach
</tbody>

