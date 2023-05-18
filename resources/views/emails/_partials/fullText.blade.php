@php
    $pb = isset($pb) ? $pb : true;
    $pl = isset($pl) ? $pl : 0;
@endphp

<tr>
	<td style="
        @if($pb)padding-bottom: 15px;@endif
        padding-left: {{$pl*30}}px;
        font-size: 16px;
        line-height: 22px;
    ">
        {!!$text!!}
    </td>
</tr>
