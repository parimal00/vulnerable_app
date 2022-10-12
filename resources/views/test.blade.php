@foreach ($items as $item)
    <table>
        <tr>
            <td>{{$item->name}}</td>
            <td><img style="width:100px;height:100px" src="{{$item->getFirstMediaUrl('item_images')}}" alt=""> </td>
        </tr>
    </table>
@endforeach

<form action="/items" method="post" enctype="multipart/form-data">
    <label for=""> Name</label>
    <input type="text" name="name">
    <label for="">Item image</label>
    <input type="file" name="item_image">
    <button>Submit</button>
</form>
