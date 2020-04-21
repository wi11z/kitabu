<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #dddddd;
            }
        </style>
    </head>
    <body>

    <h2>REPORT OF MODIFIED PARTICULARS</h2>

    &nbsp;
    <h3> UPDATED PARTICULARS</h3>
        <table>
            <tr>
                <th>Particulars</th>
                <th>Amount</th>
                <th>Type</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>

            @foreach($updated_ledgers as $updated_ledger)
                <tr>
                    <td>{{ $updated_ledger->previous_particular}}</td>
                    <td>{{ number_format($updated_ledger->previous_amount, 2, ".", ",")}}</td>
                    <td>{{ $updated_ledger->previous_type}}</td>
                    <td>{{ $updated_ledger->created_at}}</td>
                    <td>{{ $updated_ledger->updated_at}}</td>
                </tr>
            @endforeach
        </table>



    &nbsp;
    <h3> DELETED PARTICULARS</h3>
            <table>
                <tr>
                    <th>Particulars</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Created at</th>
                    <th>Deleted at</th>
                </tr>

                    @foreach($deleted_ledgers as $deleted_ledger)
                    <tr>
                        <td>{{ $deleted_ledger->particular}}</td>
                        <td>{{ number_format($deleted_ledger->amount, 2, ".", ",")}}</td>
                        <td>{{ $deleted_ledger->type}}</td>
                        <td>{{ $deleted_ledger->created_at}}</td>
                        <td>{{ $deleted_ledger->deleted_at}}</td>
                    </tr>
                @endforeach
            </table>
    </body>
</html>
