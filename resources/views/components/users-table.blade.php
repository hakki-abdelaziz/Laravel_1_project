@props(['users'])
<div>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Function</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['function']}}</td>
            </tr>
        @endforeach
    </table>
</div>

