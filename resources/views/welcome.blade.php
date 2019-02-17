@extends('layouts.app')
@section('content')
<div class="container">
    <div class = "row">
        <div class = "col-md-8">
            <table class="table table-borderless">
                <thead class="table-primary">
                    <tr>
                    <th colspan="4">GAMES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class ="sub-head">
                    <td style="width:50%">Forum</td>
                    <td style="width:10%">Topics</td>
                    <td style="width:10%">Post</td>
                    <td style="width:30%">Last post</td>
                    </tr>
                    <tr class ="content">
                    <td>First Sub category</td>
                    <td>1</td>
                    <td>1</td>
                    <td>by <a href="#">ikhsan <i class="fas fa-chevron-right"></i></a>
                        <br>
                        17-02-2019 9:12
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class = "col-md">
            <div class="card">
                <div class="card-header card text-white bg-info mb-3">
                    NEW FORUM POSTS
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href ="#">Testing post</a>
                        <br>
                        by <a href ="#"> ikhsan</a>
                        <br>
                        17-02-2019 10:19
                    </li>
                </ul>
            </div>
            <br>
            <div class="card">
                <div class="card-header card text-white bg-info mb-3">
                    STATISTICS
                </div>
                <div class ="card-body">
                    Total member: 9999 <br>
                    Total post: 9999 <br>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
