<diV>

    <a href="{{url('admin/')}}">back to Dashboard</a>
</diV>

<div>
    <h2>news</h2>
    <p> on this page you can manage : create, update, delete</p>
</div>


<div>
        <a href="{{url('admin/news/create')}}"></a>
</div>

<div>
<table>
    <thead>
            <tr>
                    <th>no</th>
                    <th>title</th>
                    <th>status</th>
                    <th>optio</th>
            </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>news title one</td>
            <td>publish</td>
            <td>
                <a href="{{urt('admin/news/show')}}">show</a>
                <a href="{{urt('admin/news/edit')}}">edit</a>
                <a href="{{urt('admin/news/delete')}}">delete</a>

            </td>
    </tr>
        <tr>
            <td>2</td>
            <td>news title two</td>
            <td>publish</td>
            <td>
                    <a href="{{urt('admin/news/show')}}">show</a>
                    <a href="{{urt('admin/news/edit')}}">edit</a>
                    <a href="{{urt('admin/news/delete')}}">delete</a>

            </td>
    </tr>
    </tbody>
</table>
</div>