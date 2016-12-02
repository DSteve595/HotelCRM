<div class="panel panel-default">
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Has administrative rights</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($hotelAgents as $hotelAgent)
                <tr>
                    <td>
                        <strong>{{ $hotelAgent->user->name }}</strong>
                    </td>
                    <td>
                        {{ \App\Utility::formatPrettyBooleanAsYesNo($hotelAgent->is_admin) }}
                    </td>
                    <td>
                        <form action="{{ @url('home/manage-users') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="deleteAgent" value="{{ $hotelAgent->id }}">
                            <button type="submit" class="btn btn-danger btn-sm">Delete?</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>