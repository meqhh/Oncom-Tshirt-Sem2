<style>
    table {
    border: black 1px solid;
    border-collapse: collapse;
    width: 80%;
    margin: 120px auto;
}

th, td {
    border: black 1px solid; 
    padding: 8px; 
    text-align: left; 
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:nth-child(odd) {
    background-color: #ffffff;
}
.btn-delete {
        background-color: red;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 4px
}
</style>
<div>
@csrf
    <table>
        <theat>
            <tr>
                <th>No</th>
                <th>Nama Users</th>
                <th>Alamat Users</th>
                <th>Tanggal Lahir</th>
                <th>Email</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
        </theat>
        <tbody>
        @foreach ($users as $show )
        <tr>
                    <td>{{ $show->user_id }}</td>
                    <td>{{ $show->name }}</td>
                    <td>{{ $show->address }}</td>
                    <td>{{ $show->date_of_birth }}</td>
                    <td>{{ $show->email }}</td>
                    <td>{{ $show->password }}</td>
                    <td> 
                        <form action="{{ route('users.destroy', $show->user_id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Are you sure want to delete this?')">Delete</button>
                        </form>
                    </td>
                </tr>
    @endforeach
    </tbody>
    </table>
</form>
</div>